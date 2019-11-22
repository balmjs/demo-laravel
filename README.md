# BalmJS demo - Laravel

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
```

- Edit `.env` for your DB

```md
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
yarn install
# OR
npm install
```

### 2. Config Balm

- Edit `gulpfile.js`

```js
balm.config = {
  server: {
    proxy: 'your.project.local' // Virtual host
  }
  // ...
};
```

## :ghost: Enjoy

For development

```sh
yarn run dev
# OR
npm run dev
```

> Visit `http://localhost:3000`

For production

```sh
yarn run prod
# OR
npm run prod
```

> Visit `http://your.project.local`
