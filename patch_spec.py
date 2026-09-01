#!/usr/bin/env python
r"""Fulfillment API specific fixes for fulfillment_api.json.

The bugs eBay ships in every spec (broken enum schemas, redundant Content-Type
parameters, over-eager "required") are handled by ..\_tools\ebay_patch_spec.py,
which build.bat runs first. What is left here is specific to this API:

  * uploadEvidenceFile is a multipart/form-data upload but has no requestBody
    at all, so the generator would produce a method that cannot send the file.
    eBay's own FormDataBodyPart schema is not usable: its property is named
    "body" while the API requires the multipart key to be named "file".

Idempotent -- re-run after every download.
"""

from __future__ import annotations

import collections
import json

SPEC = "fulfillment_api.json"
UPLOAD_PATH = "/payment_dispute/{payment_dispute_id}/upload_evidence_file"

FORM_DATA_CONTENT_DISPOSITION = collections.OrderedDict([
    ("type", "object"),
    ("description", "The metadata for the file."),
    ("properties", collections.OrderedDict([
        ("creationDate", {"type": "string", "description": "The file creation date. <br /><br /><b> Format: </b> UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on September 8, 2019</p><p><code>2019-09-08T00:00:00.000Z</code></p>"}),
        ("fileName", {"type": "string", "description": "The name of the file including its extension (for example, xml or csv) to be uploaded."}),
        ("modificationDate", {"type": "string", "description": "The file modified date. <br /><br /><b> Format: </b> UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on September 9, 2019</p><p><code>2019-09-09T00:00:00.000Z</code></p>"}),
        ("name", {"type": "string", "description": "A content identifier. The only presently supported name is <code>file</code>."}),
        ("parameters", {"type": "object", "additionalProperties": {"type": "string"}, "description": "The parameters you want associated with the file."}),
        ("readDate", {"type": "string", "description": "The date you read the file. <br /><br /><b> Format: </b> UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on September 10, 2019</p><p><code>2019-09-10T00:00:00.000Z</code></p>"}),
        ("size", {"type": "integer", "format": "int32", "description": "The size of the file."}),
        ("type", {"type": "string", "description": "The file type. The only presently supported type is <code>form-data</code>."}),
        ("file", {"type": "string", "format": "binary", "description": "The file to upload."}),
    ])),
])


def main() -> None:
    with open(SPEC, encoding="utf-8") as handle:
        spec = json.load(handle, object_pairs_hook=collections.OrderedDict)

    operation = spec["paths"][UPLOAD_PATH]["post"]
    request_body = collections.OrderedDict()
    request_body["content"] = {
        "multipart/form-data": {"schema": {"$ref": "#/components/schemas/FormDataContentDisposition"}}
    }

    # Keep the request body where the generator's own specs put it: right after
    # the parameters.
    patched = collections.OrderedDict()
    for key, value in operation.items():
        patched[key] = value
        if key == "parameters":
            patched["requestBody"] = request_body
    if "requestBody" not in patched:
        patched["requestBody"] = request_body
    spec["paths"][UPLOAD_PATH]["post"] = patched

    schemas = spec["components"]["schemas"]
    schemas["FormDataContentDisposition"] = FORM_DATA_CONTENT_DISPOSITION
    spec["components"]["schemas"] = collections.OrderedDict(sorted(schemas.items()))

    with open(SPEC, "w", encoding="utf-8", newline="\n") as handle:
        json.dump(spec, handle, indent=2, ensure_ascii=False)
        handle.write("\n")

    print(f"uploadEvidenceFile: multipart requestBody added, {len(schemas)} schemas")


if __name__ == "__main__":
    main()
