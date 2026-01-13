## Enviar Venta

```php
$sellers = $client->saveSale([
  'documentType' => 'FVAELECT', // OBLIGATORIO, CORRESPONDE AL TIPO DE DOCUMENTO
  'firstFolio' => 0, // OBLIGATORIO, CORRESPONDE AL NÚMERO DE DOCUMENTO (SI SE DEJA EN 0, TOMARÁ EL CORRELATIVO)
  'lastFolio' => 0, // OBLIGATORIO, CORRESPONDE AL NÚMERO DE DOCUMENTO (SI SE DEJA EN 0, TOMARÁ EL CORRELATIVO)
  'emissionDate' => [ // OBLIGATORIA, FECHA DE EMISIÓN
    'day' => 21,
    'month' => 2,
    'year' => 2025,
  ],
  'firstFeePaid' => [ // OBLIGATORIA, FECHA DEL PRIMER PAG
    'day' => 22,
    'month' => 2,
    'year' => 2025,
  ],
  'clientFile' => '90.108.626-5', //  OBLIGATORIA, ID DE FICHA DEL CLIENTE
  'contactIndex' => 'cra 44 20 28', //  OBLIGATORIA, DIRECCIÓN CLIENTE
  'paymentCondition' => 'CONTADO', // OBLIGATORIA, CONDICIÓN DE PAGO
  'sellerFileId' => 'VENDEDOR', // ID DEL VENDEDOR, OBLIGATORIO
  'clientAnalysis' => [ // ANALISIS DE CUENTA CONTABLE POR ASIENTO DEL CLIENTE
    'accountNumber' => '1110401001',  // NÚMERO DE CUENTA CONTABLE DEL ASIENTO POR CLIENTES
    'businessCenter' => '', // CENTRO DE NEGOCIOS EN CASO DE QUE LA CUENTA ESTÉ CONFIGURADA PARA USAR CENTRO DE NEGOCIOS.
    'classifier01' => '', // CLASIFICADOR1 EN CASO DE QUE LA CUENTA ESTÉ CONFIGURADA PARA USAR CLASIFICADORES.
    'classifier02' => '', // CLASIFICADOR2 EN CASO DE QUE LA CUENTA ESTÉ CONFIGURADA PARA USAR CLASIFICADORES.
  ],
  'billingCoin' => 'PESO', // OBLIGATORIO, ID DE MONEDA A UTILIZAR
  'billingRate' => 1, // OBLIGATORIDE CAMBIO DE MONEDA
  'shopId' => 'Local', // ID DE LOCAL, OBLIGATORIO
  'priceList' => '1', // LISTA DE PRECIOS, OBLIGATORIA
  'giro' => 'GIRO GENERICO', // OBLIGATORIO, GIRO DEL DOCUMENTO
  'district' => 'comuna', // COMUNA, OBLIGATORIA
  'city' => 'ciudad', // OBLIGATORIA, CIUDAD
  'contact' => -1, // ENVIAR COMO -1
  'details' => [ // OBLIGATORIO, DETALLES DE LA GUÍA DE DESPACHO.
    [
      'type' => 'S', // TIPO DE PRODUCTO (PUEDE SER "A" SI ES UN ARTICULO O "S" SI ES UN SERVICIO) (OBLIGATORIA)
      'isExempt' => true, // SE DEFINE SI ES EXENTA O NO (OBLIGATORIO)
      'code' => 'ALMCONCNCO', // CODIGO DEL PRODUCTO
      'count' => 2, // CANTIDAD
      'productName' => 'Almacenamiento de contenedores', // NOMBRE DEL PRODUCTO
      'price' => 10, // PRECIO
      'discount' => [ // DESCUENTOS POR LINEA DE DETALLE EN CASO DE QUE EXISTAN (EN CASO DE QUE NO EXISTAN, ENVIAR AMBOS DATOS COMO 0)
        'type' => 0,
        'value' => 0,
      ],
      'unit' => 'UN', // UNIDAD DEL PRODUCTO
      'analysis' => [ // ANALISIS DE CUENTA CONTABLE POR ASIENTO DE VENTAS
        'accountNumber' => '3110101001',
        'businessCenter' => 'EMPGESGESADM000',
      ],
      'useBatch' => false, // EN CASO DE USAR LOTES, SE ENVÍA COMO TRUE, SINO FALSE
      'batchInfo' => [], // EN CASO DE NO USAR LOTES, ENVIAR COMO UN ARREGLO VACÍO []
    ],
  ],
  'saleTaxes' => [ // OBLIGATORIO, ANALISIS DE CUENTA CONTABLE POR ASIENTO DE IMPUESTOS
    [
      'code' => 'IVA', // CODIGO DEL IMPUESTO
      'value' => 0, // VALOR DEL IMPUESTO
      'taxeAnalysis' => [
        'accountNumber' => '4510501007',
      ],
    ],
  ],
  'ventaRecDesGlobal' => [], // OPCIONAL, DESCUENTOS GLOBALES, EN CASO DE NO USAR ENVIAR COMO UN ARREGLO VACÍO []
  'isTransferDocument' => true, // DEFINE SI SERÁ UN DOCUMENTO DE TRASPASO O NO (SI ES FALSE SE ENVÍA AL SII, SI ES TRUE NO SE ENVÍA AL SII).
]);
```
