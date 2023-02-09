Coleção postman:

{
	"info": {
		"_postman_id": "4f2d91f1-ee91-4c6d-9ca2-0091df57d2be",
		"name": "Simple API - PHP",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "5543471"
	},
	"item": [
		{
			"name": "Ping",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/simple-api-php/api/ping.php",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"simple-api-php",
						"api",
						"ping.php"
					]
				}
			},
			"response": []
		},
		{
			"name": "GettAll",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/simple-api-php/api/getall.php",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"simple-api-php",
						"api",
						"getall.php"
					]
				}
			},
			"response": []
		},
		{
			"name": "Get",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/simple-api-php/api/get.php?id=199",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"simple-api-php",
						"api",
						"get.php"
					],
					"query": [
						{
							"key": "id",
							"value": "199"
						}
					]
				}
			},
			"response": []
		},
		{
			"name": "Insert",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n  \"nome\": \"teste\",\r\n  \"codigo\": \"222\",\r\n  \"tipo_cobranca\": 0,\r\n  \"situacao\": \"A\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "http://localhost/simple-api-php/api/insert.php",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"simple-api-php",
						"api",
						"insert.php"
					],
					"query": [
						{
							"key": "nome",
							"value": "teste",
							"disabled": true
						},
						{
							"key": "codigo",
							"value": "222",
							"disabled": true
						},
						{
							"key": "tipo_cobranca",
							"value": "0",
							"disabled": true
						},
						{
							"key": "situacao",
							"value": "A",
							"disabled": true
						}
					]
				}
			},
			"response": []
		},
		{
			"name": "Update",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n  \"nome\": \"teste\",\r\n  \"codigo\": \"222\",\r\n  \"tipo_cobranca\": 0,\r\n  \"situacao\": \"A\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "http://localhost/simple-api-php/api/insert.php",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"simple-api-php",
						"api",
						"insert.php"
					],
					"query": [
						{
							"key": "nome",
							"value": "teste",
							"disabled": true
						},
						{
							"key": "codigo",
							"value": "222",
							"disabled": true
						},
						{
							"key": "tipo_cobranca",
							"value": "0",
							"disabled": true
						},
						{
							"key": "situacao",
							"value": "A",
							"disabled": true
						}
					]
				}
			},
			"response": []
		},
		{
			"name": "Delete",
			"request": {
				"method": "DELETE",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n  \"nome\": \"teste\",\r\n  \"codigo\": \"222\",\r\n  \"tipo_cobranca\": 0,\r\n  \"situacao\": \"A\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "http://localhost/simple-api-php/api/delete.php?id=14",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"simple-api-php",
						"api",
						"delete.php"
					],
					"query": [
						{
							"key": "id",
							"value": "14"
						}
					]
				}
			},
			"response": []
		}
	]
}





Usado para consumir a api:
https://resttesttest.com/


Dicas:
https://prodeveloper.com.br/como-enviar-e-receber-json-usando-php-curl/

https://www.devmedia.com.br/trabalhando-com-json-em-php/26716

https://hcode.com.br/blog/trabalhando-com-json-no-php-7

https://horadecodar.com.br/2021/02/24/como-ler-json-com-php-json_decode/

