<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
</p>

# TifawinSouk - E-Commerce Platform

TifawinSouk is a modern e-commerce platform built with Laravel, designed to provide a seamless shopping experience with robust admin management capabilities.

## About the Project

TifawinSouk is a full-featured e-commerce application that combines:

- **Public Store Interface**: Browse and view detailed product information
- **Admin Dashboard**: Comprehensive product and category management
- **User Authentication**: Secure user registration and login system
- **Product Management**: Create, read, update, and delete products with image uploads via Cloudinary
- **Category Management**: Organize products by categories
- **Soft Deletes**: Restore accidentally deleted products and categories
- **Responsive Design**: Beautiful UI with Tailwind CSS and Alpine.js

## Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: SQLite (configurable)
- **Image Storage**: Cloudinary
- **Build Tool**: Vite
- **Testing**: PHPUnit

## Features

### Public Features
- View all available products with details
- Search and filter products by category
- Responsive product showcase on the homepage
- Detailed product pages with pricing and stock information

### Admin Features
- **Dashboard**: Central hub for admin operations
- **Product Management**:
  - Create new products with image uploads
  - Edit product details (name, reference, price, stock, description)
  - Delete products (soft delete)
  - Restore deleted products
  - View product details

- **Category Management**:
  - Create new categories
  - Edit category information
  - Delete categories
  - Restore deleted categories
  - View category details

### Authentication
- User registration
- Login/Logout
- Email verification
- Password reset and confirmation
- Profile management
- Account deletion

## Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm
- SQLite or your preferred database

### Setup Steps

1. **Clone the repository**
```bash
git clone <repository-url>
cd TifawinSouk
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Environment Configuration**
```bash
cp .env.example .env
```

4. **Generate Application Key**
```bash
php artisan key:generate
```

5. **Database Setup**
```bash
php artisan migrate
php artisan db:seed
```

6. **Build Assets**
```bash
npm run build
```

7. **Start the Development Server**
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Usage

### For Users
1. Visit the homepage to browse products
2. Click on any product to view details
3. Create an account to access user features
4. Manage your profile and preferences

### For Administrators
1. Login with admin credentials
2. Navigate to Dashboard
3. Access Product Management or Category Management
4. Perform CRUD operations as needed

## Database Schema

### Products Table
- `id`: Primary key
- `nom`: Product name
- `reference`: Unique product reference
- `description`: Detailed product description
- `prix`: Product price
- `stock`: Available quantity
- `image`: Cloudinary image URL
- `category_id`: Foreign key to categories
- `created_at`, `updated_at`: Timestamps
- `deleted_at`: Soft delete timestamp

### Categories Table
- `id`: Primary key
- `name`: Category name
- `slug`: URL-friendly category name
- `description`: Category description
- `created_at`, `updated_at`: Timestamps
- `deleted_at`: Soft delete timestamp

### Users Table
- `id`: Primary key
- `name`: User name
- `email`: User email (unique)
- `password`: Hashed password
- `email_verified_at`: Email verification timestamp
- `created_at`, `updated_at`: Timestamps

## API Routes

### Public Routes
- `GET /` - Homepage with product listing
- `GET /products/{id}` - Product detail page

### Authenticated Routes
- `GET /dashboard` - Admin dashboard
- `GET /profile` - User profile page
- `PATCH /profile` - Update profile
- `DELETE /profile` - Delete account

### Admin Routes
- `GET /admin/products` - Products list
- `POST /admin/products` - Create product
- `GET /admin/products/create` - Product creation form
- `GET /admin/products/{id}` - Product details
- `PUT /admin/products/{id}` - Update product
- `DELETE /admin/products/{id}` - Delete product
- `POST /admin/products/{id}/restore` - Restore deleted product

- `GET /admin/categories` - Categories list
- `POST /admin/categories` - Create category
- `GET /admin/categories/create` - Category creation form
- `GET /admin/categories/{id}` - Category details
- `PUT /admin/categories/{id}` - Update category
- `DELETE /admin/categories/{id}` - Delete category
- `POST /admin/categories/{id}/restore` - Restore deleted category

## Testing

Run the test suite with:
```bash
npm run test
```

Or using the artisan command:
```bash
php artisan test
```

## Development

### Development Server with Hot Reload
```bash
npm run dev
```

### Code Quality
```bash
php artisan pint
```

### Building for Production
```bash
npm run build
```

## Cloudinary Configuration

The project uses Cloudinary for image storage. Configure your Cloudinary credentials in the `.env` file:

```env
CLOUDINARY_URL=cloudinary://YOUR_API_KEY:YOUR_API_SECRET@YOUR_CLOUD_NAME
```

## File Structure

```
TifawinSouk/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   ├── Admin/
│   │   │   ├── publicController.php
│   │   │   └── ProfileController.php
│   │   └── Requests/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   └── Category.php
│   └── View/Components/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── public/
│       ├── admin/
│       ├── layouts/
│       ├── components/
│       ├── profile/
│       └── auth/
├── routes/
│   ├── web.php
│   ├── auth.php
│   └── console.php
└── config/
    ├── app.php
    ├── database.php
    ├── filesystems.php
    └── ...
```

## Security Features

- CSRF protection on all forms
- Password hashing with bcrypt
- Email verification
- Soft deletes for data recovery
- SQL injection prevention via Eloquent ORM
- XSS protection via Blade templating

## Performance

- Optimized database queries
- Lazy loading relationships
- Asset minification and compression
- Cloudinary image optimization

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The Laravel framework and this project are open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support, please open an issue on the repository.

## Authors

- Project built as part of Youcode sprint 6

---

**Happy Shopping with TifawinSouk! 🛍️**
