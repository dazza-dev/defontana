## Enviar Nota de Crédito

```php
$creditNote = $client->saveCreditNote([
  'creditNoteTypeId' => 'string',
  'firstFolio' => 0,
  'documentType' => 'string',
  'folio' => 0,
  'externalDocumentID' => 'string',
  'gloss' => 'string',
  'emissionDate' => [
    'day' => 0,
    'month' => 0,
    'year' => 0,
  ],
  'isTransferDocument' => true,
]);
```

