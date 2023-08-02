<!DOCTYPE html>
<html>
<head>
<title>KU Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/theme.css">
</head>
<body>
<div class="w3-yellow-p"></div>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar mint-b w3-wide w3-padding w3-card">
      <a href="{{ route('main-logged-in') }}" class="w3-bar-item w3-button"><b>KU</b> Events</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="{{ route('admin-create-staff') }}" class="w3-bar-item w3-button">Create Staff</a>
        <a href="{{ route('admin-profile') }}"" class="w3-bar-item w3-button">Admin Profile</a>
        <a href="{{ route('main-public') }}"" class="w3-bar-item w3-button">Log Out</a>
      </div>
    </div>
  </div>

</body>
