# Product List Mini MVC (PHP)

A small PHP MVC-style demo project that displays a list of products, supports category filtering, and applies discount pricing through query parameters.

## Overview

This project is built with plain PHP (no framework) and organized into simple MVC layers:
- **Model**: product data and business logic
- **Controller**: request handling and flow
- **View**: product table rendering

## Features

- Display a predefined product list
- Filter products by category
- Apply percentage-based discount to displayed prices
- Clean table UI with basic CSS styling

## Tech Stack

- PHP
- HTML/CSS
- XAMPP (Apache + PHP) for local development

## Project Structure

```text
Kyanon-KFresh-Trainee-Test-2026/
|-- README.md
|-- Report.md
`-- SolutionPhp/
    |-- index.php
    |-- controllers/
    |   `-- ProductController.php
    |-- models/
    |   `-- Product.php
    |-- public/
    |   `-- css/
    |       `-- style.css
    `-- views/
        `-- product_list.php
```

## How It Works

- `SolutionPhp/index.php` is the entry point.
- `ProductController::index()` loads products from the model.
- Optional query parameters are processed:
  - `category`: filters products by exact category name
  - `discount`: applies a discount percentage to product prices
- Data is passed to `views/product_list.php` and rendered as a table.

## Local Setup (XAMPP)

1. Place the project inside your XAMPP `htdocs` directory:
   - Example: `D:/Programs/xampp/htdocs/SolutionPhp`
2. Start **Apache** from the XAMPP Control Panel.
3. Open your browser and visit:
   - `http://localhost/SolutionPhp/`

## Usage Examples

- Show all products:
  - `http://localhost/SolutionPhp/`
- Filter by category:
  - `http://localhost/SolutionPhp/?category=Electronics`
- Apply 10% discount:
  - `http://localhost/SolutionPhp/?discount=10`
- Filter and discount together:
  - `http://localhost/SolutionPhp/?category=Fashion&discount=20`

## Current Data Source

Products are currently hardcoded in `SolutionPhp/models/Product.php` (`getProducts()` method).

## Notes

- Category matching is case-sensitive and must match exactly (`Electronics`, `Fashion`, `Home Appliances`).
- Discount is expected as a numeric percent value.
