<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfect Search Bar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .search-container {
      position: relative;
      width: 100%;
      max-width: 400px;
    }

    .search-container input {
      width: 100%;
      padding: 12px 40px 12px 16px;
      border-radius: 25px;
      border: 1px solid #ccc;
      font-size: 16px;
      outline: none;
      transition: 0.3s ease;
    }

    .search-container input:focus {
      border-color: #007BFF;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* .search-container::before {
      content: '🔍';
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      color: #aaa;
      pointer-events: none;
    } */

    .search-container input::placeholder {
      color: #aaa;
      text-align: left;
    }
  </style>
</head>
<body>

  <div class="search-container">
    <input type="text" placeholder="Search anything...">
  </div>

</body>
</html>
