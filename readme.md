# **BASE API AUTHENTICATION USING LARAVEL 6 + JWT**

### **INSTALLATION**

```sh
composer update
```
> configure your .env file

```sh
php artisan jwt:secret
```
```sh
php artisan key:generate
```
```sh
php artisan migrate --seed
```
Run the server
```sh
php artisan serve
```

---

### **ENDPOINTS OF THE API**

1. http://domain.com/api/auth/login
2. http://domain.com/api/auth/logout
3. http://domain.com/api/auth/meAccount
4. http://domain.com/api/auth/refresh

---

### **PAYLOAD AND RESPONSE OF THE ENDPOINTS**

`Endpoint:` _http://domain.com/api/auth/login_

`Method:` **POST**

`Payload:`

```json
{
    "email": "admin@rdcr.com",
    "password": "prueba123"
}
```

#### Response

```json
{
    "status": "true",
    "message": "Datos del usuario logueado.",
    "access_token": "",
    "token_type": "bearer",
    "expires_in": 3600,
    "user": {} // User information
}
```

`Endpoint:` _http://domain.com/api/auth/logout_

`Method:` **POST**

`Payload:`

```
  Authorization: JWT token here
```

#### Response

```json
{
    "status": "false",
    "message": "token inválido"
}
```

or

```json
{
    "status": "true",
    "message": "Deslogueado correctamente."
}
```

`Endpoint:` _http://domain.com/api/auth/meAccount_

`Method:` **POST**

`Payload:`

```
  Authorization: JWT token here
```

#### Response

```json
{
    "user": {}
}
```

or

```json
{
    "status": "false",
    "message": "token inválido"
}
```

`Endpoint:` _http://domain.com/api/auth/refresh_

`Method:` **POST**

`Payload:`

```
  Authorization: JWT token here
```

#### Response

```json
{
    "status": "true",
    "message": "Datos del usuario logueado.",
    "access_token": "",
    "token_type": "bearer",
    "expires_in": 3600,
    "user": {}
}
```

or

```json
{
    "status": "false",
    "message": "token inválido"
}
```

---

Hecho con ❤️ por [Rubén Carrascal](https://krrskl.github.io/)