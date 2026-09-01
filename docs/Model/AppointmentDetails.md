# AppointmentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appointment_end_time** | **string** | The date and time the appointment ends, formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Required for tire installation. &lt;br&gt;&lt;br&gt;&lt;strong&gt;Format:&lt;/strong&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br&gt;&lt;strong&gt;Example:&lt;/strong&gt; &lt;code&gt;2022-10-28T00:00:00.000Z&lt;/code&gt; | [optional]
**appointment_start_time** | **string** | The date and time the appointment begins, formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  &lt;br&gt;&lt;br&gt;&lt;strong&gt;Format:&lt;/strong&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br&gt;&lt;strong&gt;Example:&lt;/strong&gt; &lt;code&gt;2022-10-28T00:10:00.000Z&lt;/code&gt; | [optional]
**appointment_status** | **string** | The status of the appointment. | [optional]
**appointment_type** | **string** | The type of appointment. &lt;code&gt;MACRO&lt;/code&gt; appointments only have a start time (not bounded with end time). &lt;code&gt;TIME_SLOT&lt;/code&gt; appointments have a period (both start time and end time). Required for tire installation. | [optional]
**appointment_window** | **string** | Appointment window for &lt;code&gt;MACRO&lt;/code&gt; appointments. | [optional]
**service_provider_appointment_date** | **string** | Service provider date of the appointment (no time stamp). Returned only for &lt;code&gt;MACRO&lt;/code&gt; appointment types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
