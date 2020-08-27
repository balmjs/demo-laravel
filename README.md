# BalmJS demo - Laravel

## Requirements

- [BalmJS](https://balm.js.org/) >= 3.x (requires Node.js)

```sh
npm install -g balm-core # required for balm 3.0
```

## For Back-end

### 1.1 Installation

```sh
composer install
```

### 1.2 Configuration

```sh
cp .env.example .env

# Set your application key
php artisan key:generate
```

- Edit `.env` for your DB

```md
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

- Import database structure

```sh
php artisan migrate
```

## For Front-end

### 2.1 Installation

```sh
npm install
```

### 2.2 Configuration

- Edit `balm.config.js` in your project directory, modify to your virtual host:

```js
balm.config = {
  server: {
    proxy: 'your.project.local' // Target host
  }
  // ...
};
```

## Enjoy :ghost:

- For development

```sh
npm run dev
```

> Visit `http://localhost:3000`

- For production

```sh
npm run prod
```

> Visit `http://your.project.local`
