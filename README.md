# Balm Demo（Laravel版）

## For Back-end

### 1. Installing Laravel

```sh
composer install
```

### 2. Configuration

```sh
cp .env.example .env

# Set your application key
php artisan key:generate

# Generate secret key for jwt-auth
php artisan jwt:secret
```

- Edit `.env` for your DB

```
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

- Import database structure

```sh
php artisan migrate
```

## For Front-end

### 1. Installing Balm

```sh
npm install

# OR
yarn
```

### 2. Config Balm

- Edit `gulpfile.js`

```js
balm.config = {
  server: {
    proxy: 'your.project.local' // Virtual host
  },
  ...
};
```

## Enjoy

For development

```sh
npm run dev
```

> Visit `http://localhost:3000`

For production

```sh
npm run prod
```

> Visit `http://your.project.local`
