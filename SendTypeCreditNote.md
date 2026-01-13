## Enviar Tipo de Nota de Crédito

```php
$typeCreditNote = $client->saveTypeCreditNote([
  'creditNoteTypeId' => 'string',
  'firstFolio' => 0,
  'creditNoteType' => 0,
  'documentType' => 'string',
  'folio' => 0,
  'externalDocumentID' => 'string',
  'gloss' => 'string',
  'emissionDate' => [
    'day' => 0,
    'month' => 0,
    'year' => 0,
  ],
  'details' => [
    [
      'type' => 'string',
      'isExempt' => true,
      'code' => 'string',
      'count' => 0,
      'comment' => 'string',
      'productName' => 'string',
      'productNameBarCode' => 'string',
      'price' => 0,
      'discount' => [
        'type' => 0,
        'value' => 0,
      ],
      'unit' => 'string',
      'analysis' => [
        'accountNumber' => 'string',
        'businessCenter' => 'string',
        'classifier01' => 'string',
        'classifier02' => 'string',
      ],
    ],
  ],
  'modifiedGloss' => 'string',
  'isTransferDocument' => true,
  'customFields' => [
    [
      'name' => 'string',
      'value' => 'string',
    ],
  ],
  'ventaRecDesGlobal' => [
    [
      'amount' => 0,
      'modifierClass' => 'string',
      'name' => 'string',
      'percentage' => 0,
      'value' => 0,
    ],
  ],
]);
```

