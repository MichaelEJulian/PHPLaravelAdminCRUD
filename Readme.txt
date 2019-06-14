PHPLaravelAdminCRUD> composer create-project laravel/laravel --prefer-dist div

-- Set mySQL create shop_db
-- Set .env

-- Set string length bug fix
App\Provider\AppServiceProvider
use Illuminate\Support\Facades\Schema;
public function boot()
{
    Schema::defaultStringlength(191);
}

-- run user migration
C:\xampp\htdocs\laravel\PHPLaravelAdminCRUD>php artisan migrate:fresh
Dropped all tables successfully.
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table

-- create authe scaffolding
php artisan make:auth


php artisan make:model Category -mcr

-- Update app\Category fillable


php artisan make:model Product -mcr

-- Update app\Product fillable


-- Create Relationship Categories/Products table

-- Create Seededer to Populate Records
php artisan make:seeder CategoriesSeeder
php artisan make:seeder ProductsSeeder
php artisan make:seeder ProductsCategoriesSeeder


php artisan migrate:fresh
php artisan db:seed