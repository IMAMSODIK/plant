<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h4>Device Information</h4>
    <ul>
        <li>Battery: {{ $data['device_information']['battery_percentage'] }} %</li>
        <li>Last Connected: {{ $data['device_information']['last_connected'] }}</li>
        <li>WiFi: {{ $data['device_information']['wifi_ssid'] }}</li>
    </ul>

    <h4>Plant Information</h4>
    <ul>
        <li>Moisture Range: {{ $data['plant_information']['moisture_min'] }} -
            {{ $data['plant_information']['moisture_max'] }} %</li>
    </ul>

    <h4>Sensor</h4>
    <ul>
        <li>Humidity: {{ $data['sensor']['humidity'] }} %</li>
        <li>Soil Moisture: {{ $data['sensor']['moisture'] }} %</li>
        <li>Temperature: {{ $data['sensor']['temperature'] }} °C</li>
        <li>Water Level: {{ $data['sensor']['waterlevel'] }}</li>
    </ul>

    <h4>Actuator</h4>
    <ul>
        <li>Last Action: {{ $data['actuator']['last_action'] }}</li>
        <li>Pump Active: {{ $data['actuator']['pump_active'] ? 'Yes' : 'No' }}</li>
    </ul>


</body>

</html>
