# **BASE API AUTHENTICATION USING LARAVEL 5.7 + JWT**

---

### **INSTALLATION**

```sh
composer update
```

### **ENDPOINTS OF THE API**

1. http://domain.com/api/auth/login
2. http://domain.com/api/auth/logout
3. http://domain.com/api/auth/meAccount
4. http://domain.com/api/auth/refresh

---

### **ENDPOINTS PARAMS AND RESPONSE**

> _api/auth/login_

```json
{
    "email": "admin@domain.com",
    "password": "1234567"
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
    "user": {}
}
```



> _api/auth/logout_

```
  send the token JWT in the headers
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
---

### **AUTHOR**

> [_Rubén Carrascal_](https://gitlab.com/krrskl97/)
