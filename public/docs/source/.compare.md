---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Auth management
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login.

> Example request:

```bash
curl -X POST "/api/login" \
    -H "Content-Type: application/json" \
    -d '{"name":"repellendus","password":"consequatur"}'

```

```javascript
const url = new URL("/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "repellendus",
    "password": "consequatur"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the user.
    password | string |  required  | The password of the user.

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## Logout.

Need access_token to logout.

> Example request:

```bash
curl -X GET -G "/api/logout" 
```

```javascript
const url = new URL("/api/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/logout`


<!-- END_00e7e21641f05de650dbe13f242c6f2c -->

#Job management
<!-- START_e92c2cc288ee2a69ef89b50609ade7de -->
## Display a listing of the job.

> Example request:

```bash
curl -X GET -G "/api/job" 
```

```javascript
const url = new URL("/api/job");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/job`


<!-- END_e92c2cc288ee2a69ef89b50609ade7de -->

<!-- START_2622ddcdb08a3b4445fd08ac3f78b34c -->
## Show a job by ID.

> Example request:

```bash
curl -X GET -G "/api/job/1" 
```

```javascript
const url = new URL("/api/job/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/job/{id}`


<!-- END_2622ddcdb08a3b4445fd08ac3f78b34c -->

<!-- START_aa0f5578c44fcf314d2465b700c11941 -->
## Create the Job.

> Example request:

```bash
curl -X POST "/api/job" \
    -H "Content-Type: application/json" \
    -d '{"name":"laborum","description":"quia","address":"rem","position":"cum","salary":"a","status":"est","experience":"minima","amount":6,"publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "laborum",
    "description": "quia",
    "address": "rem",
    "position": "cum",
    "salary": "a",
    "status": "est",
    "experience": "minima",
    "amount": 6,
    "publishedOn": "2019-07-10 00:00:00",
    "deadline": "2019-07-10 00:00:00"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/job`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of job.
    description | string |  optional  | The description of job.
    address | string |  required  | Address of job.
    position | string |  required  | The position of job.
    salary | string |  required  | The salary of job.
    status | string |  required  | The status of job.
    experience | string |  required  | The experience of job.
    amount | integer |  required  | The amount of job.
    publishedOn | datetime |  required  | The publishedOn date of job (Ex: 2019-07-10 00:00:00).
    deadline | datetime |  required  | The deadline of job (Ex: 2019-07-10 00:00:00).

<!-- END_aa0f5578c44fcf314d2465b700c11941 -->

<!-- START_ff963bc76a641b78b6256ef70cb4fbdb -->
## Update the Job by ID.

> Example request:

```bash
curl -X PUT "/api/job/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"autem","description":"et","address":"dolor","position":"eos","salary":"ut","status":"qui","experience":"impedit","amount":"unde","publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("/api/job/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "autem",
    "description": "et",
    "address": "dolor",
    "position": "eos",
    "salary": "ut",
    "status": "qui",
    "experience": "impedit",
    "amount": "unde",
    "publishedOn": "2019-07-10 00:00:00",
    "deadline": "2019-07-10 00:00:00"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/job/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of job.
    description | string |  optional  | The description of job.
    address | string |  required  | Address of job.
    position | string |  required  | The position of job.
    salary | string |  required  | The salary of job.
    status | string |  required  | The status of job.
    experience | string |  required  | The experience of job.
    amount | string |  required  | The amount of job.
    publishedOn | datetime |  required  | The publishedOn date of job (Ex: 2019-07-10 00:00:00).
    deadline | datetime |  required  | The deadline of job (Ex: 2019-07-10 00:00:00).

<!-- END_ff963bc76a641b78b6256ef70cb4fbdb -->

<!-- START_bb68871d1fc0b4e5051d021ad0764440 -->
## Remove a job/many jobs by ID.

> Example request:

```bash
curl -X DELETE "/api/job" \
    -H "Content-Type: application/json" \
    -d '{"jobsID":"1,2,3,4,5"}'

```

```javascript
const url = new URL("/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "jobsID": "1,2,3,4,5"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/job`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    jobsID | string |  required  | The id/list id of job.

<!-- END_bb68871d1fc0b4e5051d021ad0764440 -->

#Permission management
<!-- START_ed8ced07a2186d44fa31e6f39b573d1c -->
## Display a listing of the permission
10 rows/request.

> Example request:

```bash
curl -X GET -G "/api/permission" 
```

```javascript
const url = new URL("/api/permission");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/permission`


<!-- END_ed8ced07a2186d44fa31e6f39b573d1c -->

#Role management
<!-- START_01fc43a11672802a440a34de5e43c9ec -->
## Display a listing of the role.

10 rows/request

> Example request:

```bash
curl -X GET -G "/api/role" 
```

```javascript
const url = new URL("/api/role");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/role`


<!-- END_01fc43a11672802a440a34de5e43c9ec -->

<!-- START_1fa1ac63b45ed7a9accbe48dd2501e3c -->
## Show a role by ID.

> Example request:

```bash
curl -X GET -G "/api/role/1" 
```

```javascript
const url = new URL("/api/role/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/role/{id}`


<!-- END_1fa1ac63b45ed7a9accbe48dd2501e3c -->

<!-- START_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->
## Create a role.

> Example request:

```bash
curl -X POST "/api/role" \
    -H "Content-Type: application/json" \
    -d '{"name":"voluptatibus","permissions":"1,2"}'

```

```javascript
const url = new URL("/api/role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "voluptatibus",
    "permissions": "1,2"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/role`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name of role.
    permissions | string |  required  | list id of permission for the role.

<!-- END_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->

<!-- START_0759aaaa487c072fe42f26b76af824e9 -->
## Update the role by ID.

> Example request:

```bash
curl -X PUT "/api/role/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"cum","permissions":"1,2,3,4,5"}'

```

```javascript
const url = new URL("/api/role/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "cum",
    "permissions": "1,2,3,4,5"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/role/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name of role.
    permissions | string |  required  | list id of permission for the role.

<!-- END_0759aaaa487c072fe42f26b76af824e9 -->

<!-- START_71202c69c936943be5ca3bebd322bb9b -->
## Delete the role.

> Example request:

```bash
curl -X DELETE "/api/role" \
    -H "Content-Type: application/json" \
    -d '{"name":"recusandae","permissions":"1,2,3,4,5"}'

```

```javascript
const url = new URL("/api/role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "recusandae",
    "permissions": "1,2,3,4,5"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/role`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name of role.
    permissions | string |  required  | list id of permission for the role.

<!-- END_71202c69c936943be5ca3bebd322bb9b -->

#User management
<!-- START_440f44f2fd3290d79d27dece2f3f30f1 -->
## Show the profile&#039;s information.

> Example request:

```bash
curl -X GET -G "/api/current-profile" 
```

```javascript
const url = new URL("/api/current-profile");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/current-profile`


<!-- END_440f44f2fd3290d79d27dece2f3f30f1 -->

<!-- START_cf95104e8d1e3bda6b10e9b856955ac6 -->
## Update the current profile.

Update the profile.

> Example request:

```bash
curl -X PUT "/api/profile" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"quia","email":"tenetur","phone":"laborum","address":"nostrum"}'

```

```javascript
const url = new URL("/api/profile");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "quia",
    "email": "tenetur",
    "phone": "laborum",
    "address": "nostrum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/profile`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fullname | string |  required  | The fullname of the user.
    email | string |  required  | The email of the user.
    phone | string |  required  | The phone of the user.
    address | string |  optional  | The address of the user.

<!-- END_cf95104e8d1e3bda6b10e9b856955ac6 -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Display a listing of the user.

> Example request:

```bash
curl -X GET -G "/api/user" 
```

```javascript
const url = new URL("/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Store a newly created user in storage.

> Example request:

```bash
curl -X POST "/api/user" \
    -H "Content-Type: application/json" \
    -d '{"name":"ut","fullname":"magni","email":"quia","phone":"et","address":"est","password":"aspernatur","password_confirmation":"omnis"}'

```

```javascript
const url = new URL("/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ut",
    "fullname": "magni",
    "email": "quia",
    "phone": "et",
    "address": "est",
    "password": "aspernatur",
    "password_confirmation": "omnis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the user.
    fullname | string |  required  | The fullname of the user.
    email | string |  required  | The email of the user.
    phone | string |  required  | The phone of the user.
    address | string |  optional  | The address of the user.
    password | string |  required  | The password of the user.
    password_confirmation | string |  required  | The confirmed password.

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_9bbfc13f0750a7e9c27c0786a5f67e0a -->
## Display a user by id.

> Example request:

```bash
curl -X GET -G "/api/user/1" 
```

```javascript
const url = new URL("/api/user/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user/{id}`


<!-- END_9bbfc13f0750a7e9c27c0786a5f67e0a -->

<!-- START_538c59bd7094f21614fa40efbc87039d -->
## Update the user by id.

> Example request:

```bash
curl -X PUT "/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"laboriosam","email":"est","phone":"dolores","address":"culpa","roles":"1,2"}'

```

```javascript
const url = new URL("/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "laboriosam",
    "email": "est",
    "phone": "dolores",
    "address": "culpa",
    "roles": "1,2"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fullname | string |  required  | The fullname of the user.
    email | string |  required  | The email of the user.
    phone | string |  required  | The phone of the user.
    address | string |  optional  | The address of the user.
    roles | string |  required  | The string contains role's ID.

<!-- END_538c59bd7094f21614fa40efbc87039d -->

#general
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "/oauth/authorize" 
```

```javascript
const url = new URL("/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "/oauth/authorize" 
```

```javascript
const url = new URL("/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "/oauth/authorize" 
```

```javascript
const url = new URL("/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "/oauth/token" 
```

```javascript
const url = new URL("/oauth/token");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "/oauth/tokens" 
```

```javascript
const url = new URL("/oauth/tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "/oauth/tokens/1" 
```

```javascript
const url = new URL("/oauth/tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "/oauth/token/refresh" 
```

```javascript
const url = new URL("/oauth/token/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "/oauth/clients" 
```

```javascript
const url = new URL("/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "/oauth/clients" 
```

```javascript
const url = new URL("/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "/oauth/clients/1" 
```

```javascript
const url = new URL("/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "/oauth/clients/1" 
```

```javascript
const url = new URL("/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "/oauth/scopes" 
```

```javascript
const url = new URL("/oauth/scopes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("/oauth/personal-access-tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "/login" 
```

```javascript
const url = new URL("/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "/login" 
```

```javascript
const url = new URL("/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "/logout" 
```

```javascript
const url = new URL("/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "/register" 
```

```javascript
const url = new URL("/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "/register" 
```

```javascript
const url = new URL("/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "/password/reset" 
```

```javascript
const url = new URL("/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "/password/email" 
```

```javascript
const url = new URL("/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "/password/reset/1" 
```

```javascript
const url = new URL("/password/reset/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "/password/reset" 
```

```javascript
const url = new URL("/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "/home" 
```

```javascript
const url = new URL("/home");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


