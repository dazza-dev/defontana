# Defontana ERP

Paquete para conectar el API del ERP Defontana.

## Instalación

```bash
composer require dazza-dev/defontana
```

## Autenticación (Obtener Bearer Token)

```php
use DazzaDev\Defontana\Auth;

$client = new Auth();
$client->isTesting(true);
$client->setCredentials([
    'client' => 'id_cliente',
    'company' => 'id_compañía',
    'user' => 'usuario',
    'password' => 'contraseña'
]);

$auth = $client->authenticate();

$accessToken = $auth['access_token'];
```

## Instanciar el cliente

```php
use DazzaDev\Defontana\Defontana;

$client = new Defontana($accessToken);
$client->isTesting(true);
```

## Obtener datos de la empresa

```php
$company = $client->getCompany();
```

## Obtener Vendedores

```php
$sellers = $client->getSellers();
```

## Obtener Clientes

```php
$clients = $client->getClients();
```

## Enviar Venta

Ver ejemplo completo en [SendSale.md](./SendSale.md).

## Contribuciones

Contribuciones son bienvenidas. Si encuentras algún error o tienes ideas para mejoras, por favor abre un issue o envía un pull request. Asegúrate de seguir las guías de contribución.

## Autor

Defontana ERP Client fue creado por [DAZZA](https://github.com/dazza-dev).

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
