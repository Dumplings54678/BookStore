<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Your Literary Destination</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .store-header {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
        }

        .store-header h1 {
            color: #2c3e50;
            font-size: 3em;
            margin-bottom: 10px;
        }

        .slogan {
            color: #7f8c8d;
            font-size: 1.2em;
            font-style: italic;
            margin-bottom: 20px;
        }

        .greeting-section {
            background: #3498db;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .type-juggling-demo {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }

        .juggling-examples p {
            background: #f8f9fa;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border-left: 4px solid #3498db;
        }

        .store-info, .statistics, .categories-section, 
        .special-offers, .membership-info, .inventory-section,
        .top-rated-section, .loop-demos {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }

        h2 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        h3 {
            color: #34495e;
            margin-bottom: 10px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .info-item {
            display: flex;
            justify-content: between;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .info-label {
            font-weight: bold;
            color: #2c3e50;
            margin-right: 10px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            margin: 10px 0;
        }

        .stat-detail {
            opacity: 0.9;
            font-size: 0.9em;
        }

        .categories-display {
            background: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }

        .offers-list {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .membership-details {
            background: #e8f6f3;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #1abc9c;
        }

        .books-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .books-table th {
            background: #34495e;
            color: white;
            padding: 12px;
            text-align: left;
        }

        .books-table td {
            padding: 12px;
            border-bottom: 1px solid #ecf0f1;
        }

        .books-table tr:nth-child(even) {
            background: #f8f9fa;
        }

        .books-table tr:hover {
            background: #e3f2fd;
        }

        .bestseller-badge {
            background: #e67e22;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8em;
            margin-left: 8px;
        }

        .category-tag {
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8em;
        }

        .stock-high { color: #27ae60; font-weight: bold; }
        .stock-medium { color: #f39c12; font-weight: bold; }
        .stock-low { color: #e74c3c; font-weight: bold; }
        .stock-out { color: #95a5a6; font-style: italic; }

        .status-hot { color: #e74c3c; font-weight: bold; }
        .status-top-rated { color: #f39c12; font-weight: bold; }
        .status-restocking { color: #3498db; font-style: italic; }
        .status-available { color: #27ae60; }

        .top-rated-books {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .top-rated-book {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #f39c12;
            text-align: center;
        }

        .top-rated-book .rating {
            color: #f39c12;
            font-weight: bold;
        }

        .top-rated-book .price {
            color: #27ae60;
            font-size: 1.2em;
            font-weight: bold;
        }

        .loop-example {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 10px 0;
            border-left: 4px solid #9b59b6;
        }
    </style>
</head>
<body>