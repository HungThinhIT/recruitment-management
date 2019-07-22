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
[Get Postman Collection](http://api.enclavei3dev.tk/docs/collection.json)

<!-- END_INFO -->

#Article management
<!-- START_13e4c14823c727b279b73f21026b5194 -->
## Display a listing of the article recruitment for guests.

10 rows/request

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/article-web" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/article-web");

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
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "title": "Johns, Kautzer and Hessel",
            "image": "89vge.png",
            "jobId": 1,
            "content": "Nesciunt veritatis et saepe voluptatem facilis culpa quo. Dicta quas fuga veniam eveniet a aut.",
            "userId": 5,
            "catId": 1,
            "created_at": "2019-07-16 04:04:02",
            "updated_at": "2019-07-16 04:04:02",
            "isPublic": 1,
            "job": {
                "id": 1,
                "name": "Khalid Gusikowski",
                "description": "Quaerat rerum voluptatibus delectus dignissimos. Maxime aut inventore nam cum ratione molestiae. Odio optio fugiat laudantium aut iste quo.",
                "address": "6402 Rath Pike Apt. 922\nSouth Magdalenfurt, MD 83373-1364",
                "position": "Internship",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": "2-3 years",
                "amount": 19,
                "publishedOn": "2019-07-14 00:23:55",
                "deadline": "2019-06-24 05:50:58",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            }
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/article-web?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/article-web?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/article-web",
    "per_page": 10,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

### HTTP Request
`GET api/article-web`


<!-- END_13e4c14823c727b279b73f21026b5194 -->

<!-- START_81d67ae333e049e406f985ba31ff0894 -->
## Display an Article by Id for Candidate page.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/article-web/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/article-web/1");

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
{
    "id": 1,
    "title": "Johns, Kautzer and Hessel",
    "image": "89vge.png",
    "jobId": 1,
    "content": "Nesciunt veritatis et saepe voluptatem facilis culpa quo. Dicta quas fuga veniam eveniet a aut.",
    "userId": 5,
    "catId": 1,
    "created_at": "2019-07-16 04:04:02",
    "updated_at": "2019-07-16 04:04:02",
    "isPublic": 1
}
```

### HTTP Request
`GET api/article-web/{id}`


<!-- END_81d67ae333e049e406f985ba31ff0894 -->

<!-- START_7082b3b8e20c6044700eba56e9719492 -->
## Display a listing of the article.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/list-article" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"iste","property":"title","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/list-article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "iste",
    "property": "title",
    "orderby": "asc"
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
`POST api/list-article`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by title, content, name of job, name of category, fullname of user).
    property | string |  optional  | Field in table you want to sort (title, content, name of job, name of category, name of user, isPublic).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_7082b3b8e20c6044700eba56e9719492 -->

<!-- START_a92651a991429ff89af216ff17612d94 -->
## Display an Article by Id.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/article/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/article/1");

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
`GET api/article/{id}`


<!-- END_a92651a991429ff89af216ff17612d94 -->

<!-- START_706a660bd426dfde8ef5e730869db3f8 -->
## Create an article.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/article" \
    -H "Content-Type: application/json" \
    -d '{"title":"eveniet","image":"pariatur","jobId":"molestiae","content":"omnis","catId":"saepe"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "eveniet",
    "image": "pariatur",
    "jobId": "molestiae",
    "content": "omnis",
    "catId": "saepe"
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
`POST api/article`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The title of the article.
    image | string |  optional  | The image of the article.
    jobId | numeric |  required  | The jobId of the article.
    content | string |  required  | The content of the article.
    catId | numeric |  required  | The catId of the article.

<!-- END_706a660bd426dfde8ef5e730869db3f8 -->

<!-- START_6ff7ff26b034677d2a797186d18b3acf -->
## Update the article by Id.

> Example request:

```bash
curl -X PUT "https://api.enclavei3dev.tk/api/article/1" \
    -H "Content-Type: application/json" \
    -d '{"title":"consectetur","image":"modi","jobId":"nihil","content":"repellendus","catId":"error"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/article/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "consectetur",
    "image": "modi",
    "jobId": "nihil",
    "content": "repellendus",
    "catId": "error"
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
`PUT api/article/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The title of the article.
    image | string |  optional  | The image of the article.
    jobId | numeric |  required  | The jobId of the article.
    content | string |  required  | The content of the article.
    catId | numeric |  required  | The catId of the article.

<!-- END_6ff7ff26b034677d2a797186d18b3acf -->

<!-- START_9e21e276a45e8d02a85f6129022896eb -->
## Delete the article by Id.

> Example request:

```bash
curl -X DELETE "https://api.enclavei3dev.tk/api/article" \
    -H "Content-Type: application/json" \
    -d '{"articleId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "articleId": "[1,2,3,4,5]"
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
`DELETE api/article`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    articleId | array |  required  | The id/list id of job.

<!-- END_9e21e276a45e8d02a85f6129022896eb -->

#Auth management
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/login" \
    -H "Content-Type: application/json" \
    -d '{"name":"quidem","password":"vitae"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quidem",
    "password": "vitae"
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

<!-- START_3d174376b769283a96757e33dc0e8f64 -->
## Change password.

> Example request:

```bash
curl -X PUT "https://api.enclavei3dev.tk/api/change-password" \
    -H "Content-Type: application/json" \
    -d '{"old_password":"eius","password":"natus","password_confirmation":"vel"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/change-password");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "old_password": "eius",
    "password": "natus",
    "password_confirmation": "vel"
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
`PUT api/change-password`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    old_password | string |  required  | The old password.
    password | string |  required  | The new password.
    password_confirmation | string |  required  | The password for confirm.

<!-- END_3d174376b769283a96757e33dc0e8f64 -->

<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## Logout.

Need access_token to logout.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/logout" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/logout");

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

#Candidate management
<!-- START_010832592e6962a64a23a8acdc94bc92 -->
## Display a listing of the candidate.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/candidate" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"recusandae","property":"fullname","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/candidate");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "recusandae",
    "property": "fullname",
    "orderby": "asc"
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
`POST api/candidate`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search.
    property | string |  optional  | Field in table you want to sort(fullname,email,phone,address,cv,status,created_at,updated_at).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_010832592e6962a64a23a8acdc94bc92 -->

<!-- START_01b8554437391c0d3cc323f4d6fb1b51 -->
## Show a candidate by ID

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/candidate/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/candidate/1");

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
`GET api/candidate/{id}`


<!-- END_01b8554437391c0d3cc323f4d6fb1b51 -->

<!-- START_d82ad3d7c05b6cd83510cd29a1249f0c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://api.enclavei3dev.tk/api/candidate/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/candidate/1");

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
`PUT api/candidate/{id}`


<!-- END_d82ad3d7c05b6cd83510cd29a1249f0c -->

<!-- START_82124d942fb373ec919abcfc5e11eccc -->
## Delete the candidate by Id.

> Example request:

```bash
curl -X DELETE "https://api.enclavei3dev.tk/api/candidate" \
    -H "Content-Type: application/json" \
    -d '{"candidateId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/candidate");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "candidateId": "[1,2,3,4,5]"
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
`DELETE api/candidate`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    candidateId | array |  required  | The id/list id of candidate.

<!-- END_82124d942fb373ec919abcfc5e11eccc -->

#Interviewer management
<!-- START_8d338127e98bde72742eac637f39f4d5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/list-interviewer" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"et","field":"fullname","sort":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/list-interviewer");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "et",
    "field": "fullname",
    "sort": "asc"
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
`POST api/list-interviewer`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by fullname, email, address, phone, technicalSkill of interviewer).
    field | string |  optional  | Field in table you want to sort (fullname, email, address, phone, technicalSkill).
    sort | string |  optional  | The order sort (ASC/DESC).

<!-- END_8d338127e98bde72742eac637f39f4d5 -->

<!-- START_8bbf5354b95d62058f6c6b898643aa59 -->
## Display an interviewer by Id.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/interviewer/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/interviewer/1");

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
`GET api/interviewer/{id}`


<!-- END_8bbf5354b95d62058f6c6b898643aa59 -->

<!-- START_cf9cb8877dfd3f69e5212118172e54a7 -->
## Create an interviewer

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/interviewer" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"consequatur","email":"in","phone":"earum","address":"asperiores","technicalSkill":"optio","image":"nihil"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/interviewer");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "consequatur",
    "email": "in",
    "phone": "earum",
    "address": "asperiores",
    "technicalSkill": "optio",
    "image": "nihil"
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
`POST api/interviewer`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fullname | string |  required  | The full name of the interviewer.
    email | email |  required  | The email of the interviewer.
    phone | phone |  required  | The phone number of the interviewer.
    address | string |  optional  | The address of the interviewer.
    technicalSkill | string |  required  | The technical skill of the interviewer.
    image | file |  optional  | The image of the interviewer (png,peg,jpg,png).

<!-- END_cf9cb8877dfd3f69e5212118172e54a7 -->

<!-- START_1ae4d065c9c18d8a32dbeddd38b2d3b8 -->
## Update an interviewer by Id.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/interviewer/1" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"possimus","email":"temporibus","phone":"sit","address":"eum","technicalSkill":"id","image":"pariatur"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/interviewer/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "possimus",
    "email": "temporibus",
    "phone": "sit",
    "address": "eum",
    "technicalSkill": "id",
    "image": "pariatur"
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
`POST api/interviewer/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fullname | string |  required  | The full name of the interviewer.
    email | email |  required  | The email of the interviewer.
    phone | phone |  required  | The phone number of the interviewer.
    address | string |  optional  | The address of the interviewer.
    technicalSkill | string |  required  | The technical skill of the interviewer.
    image | file |  optional  | The image of the interviewer (png,peg,jpg,png).

<!-- END_1ae4d065c9c18d8a32dbeddd38b2d3b8 -->

<!-- START_9cf0ea1d6b0161713074bd3fa238656d -->
## Remove interviewer by ID/All.

> Example request:

```bash
curl -X DELETE "https://api.enclavei3dev.tk/api/interviewer" \
    -H "Content-Type: application/json" \
    -d '{"interviewerId":"[1,2,3,4,5]","status":"all"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/interviewer");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "interviewerId": "[1,2,3,4,5]",
    "status": "all"
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
`DELETE api/interviewer`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    interviewerId | array |  required  | The id/list id of interviewer.
    status | string |  optional  | The status for delete all records(status=all).

<!-- END_9cf0ea1d6b0161713074bd3fa238656d -->

#Job management
<!-- START_90525b3b358c948dcba956ac182245a7 -->
## Display a listing of the job.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/ljob" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"maiores","property":"name","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/ljob");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "maiores",
    "property": "name",
    "orderby": "asc"
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
`POST api/ljob`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by name, description, position,address, salary, status,experience,amount).
    property | string |  optional  | Field in table you want to sort(name, description, position,address, salary, status,experience,amount,publishOn,deadline).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_90525b3b358c948dcba956ac182245a7 -->

<!-- START_2622ddcdb08a3b4445fd08ac3f78b34c -->
## Show a job by ID.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/job/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/job/1");

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
curl -X POST "https://api.enclavei3dev.tk/api/job" \
    -H "Content-Type: application/json" \
    -d '{"name":"totam","description":"aperiam","address":"labore","position":"sit","salary":"velit","status":"explicabo","experience":"inventore","amount":5,"publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "totam",
    "description": "aperiam",
    "address": "labore",
    "position": "sit",
    "salary": "velit",
    "status": "explicabo",
    "experience": "inventore",
    "amount": 5,
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
curl -X PUT "https://api.enclavei3dev.tk/api/job/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"dolorem","description":"non","address":"quis","position":"dolorem","salary":"ab","status":"architecto","experience":"voluptatem","amount":"voluptas","publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/job/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dolorem",
    "description": "non",
    "address": "quis",
    "position": "dolorem",
    "salary": "ab",
    "status": "architecto",
    "experience": "voluptatem",
    "amount": "voluptas",
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
curl -X DELETE "https://api.enclavei3dev.tk/api/job" \
    -H "Content-Type: application/json" \
    -d '{"jobID":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "jobID": "[1,2,3,4,5]"
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
    jobID | array |  required  | The id/list id of job.

<!-- END_bb68871d1fc0b4e5051d021ad0764440 -->

#Permission management
<!-- START_ed8ced07a2186d44fa31e6f39b573d1c -->
## Display a listing of the permission
10 rows/request.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/permission" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/permission");

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

#Reset password management
<!-- START_db20fcb3cf0f59f8059496faa00e8f3a -->
## Forgot the password.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/password/forgot" \
    -H "Content-Type: application/json" \
    -d '{"email":"enclave-recruitment@enclave.vn"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/password/forgot");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "enclave-recruitment@enclave.vn"
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
`POST api/password/forgot`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | The email of user.

<!-- END_db20fcb3cf0f59f8059496faa00e8f3a -->

<!-- START_7e121874d1144bd7bec7aad8671130b1 -->
## Verify the token.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/password/verify/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/password/verify/1");

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


> Example response (404):

```json
{
    "message": "This password reset token is invalid."
}
```

### HTTP Request
`GET api/password/verify/{token}`


<!-- END_7e121874d1144bd7bec7aad8671130b1 -->

<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
## Reset the password.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/password/reset" \
    -H "Content-Type: application/json" \
    -d '{"password":"sit","password_confirmation":"ea","token":"molestias"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/password/reset");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "password": "sit",
    "password_confirmation": "ea",
    "token": "molestias"
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
`POST api/password/reset`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    password | string |  required  | The new password.
    password_confirmation | string |  required  | The password confirmation.
    token | string |  required  | The token of request from mail.

<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->

#Role management
<!-- START_841c087cc7d10f60bb3a0e0ebf52a9dc -->
## Display a listing of the role.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/list-role" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"non","property":"name","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/list-role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "non",
    "property": "name",
    "orderby": "asc"
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
`POST api/list-role`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by name).
    property | string |  optional  | Field in table you want to sort(name, description).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_841c087cc7d10f60bb3a0e0ebf52a9dc -->

<!-- START_1fa1ac63b45ed7a9accbe48dd2501e3c -->
## Show a role by ID.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/role/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/role/1");

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
curl -X POST "https://api.enclavei3dev.tk/api/role" \
    -H "Content-Type: application/json" \
    -d '{"name":"quaerat","permissions":"[1,2]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quaerat",
    "permissions": "[1,2]"
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
    permissions | array |  required  | list id of permission for the role.

<!-- END_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->

<!-- START_0759aaaa487c072fe42f26b76af824e9 -->
## Update the role by ID.

> Example request:

```bash
curl -X PUT "https://api.enclavei3dev.tk/api/role/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"nobis","permissions":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/role/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "nobis",
    "permissions": "[1,2,3,4,5]"
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
    permissions | array |  required  | list id of permission for the role.

<!-- END_0759aaaa487c072fe42f26b76af824e9 -->

<!-- START_71202c69c936943be5ca3bebd322bb9b -->
## Delete the role

> Example request:

```bash
curl -X DELETE "https://api.enclavei3dev.tk/api/role" \
    -H "Content-Type: application/json" \
    -d '{"roleId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "roleId": "[1,2,3,4,5]"
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
    roleId | array |  required  | list id of role.

<!-- END_71202c69c936943be5ca3bebd322bb9b -->

#User management
<!-- START_440f44f2fd3290d79d27dece2f3f30f1 -->
## Show the profile&#039;s information.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/current-profile" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/current-profile");

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
curl -X PUT "https://api.enclavei3dev.tk/api/profile" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"iure","email":"et","phone":"est","address":"praesentium"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/profile");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "iure",
    "email": "et",
    "phone": "est",
    "address": "praesentium"
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

<!-- START_0d6d1ce2f7eb3e764a42cf85166f8800 -->
## Upload the image avatar profile.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/profile/avatar" \
    -H "Content-Type: application/json" \
    -d '{"image":"ut"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/profile/avatar");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "image": "ut"
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
`POST api/profile/avatar`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    image | file |  required  | The image avatar profile.

<!-- END_0d6d1ce2f7eb3e764a42cf85166f8800 -->

<!-- START_7c90866f352671a488a7012f44a5442c -->
## Display a listing of the user.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/list-user" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"et","property":"username","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/list-user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "et",
    "property": "username",
    "orderby": "asc"
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
`POST api/list-user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by username, fullname, phone,address, email, name of role).
    property | string |  optional  | Field in table you want to sort(username, fullname, phone,address, email).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_7c90866f352671a488a7012f44a5442c -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Store a newly created user in storage.

> Example request:

```bash
curl -X POST "https://api.enclavei3dev.tk/api/user" \
    -H "Content-Type: application/json" \
    -d '{"name":"voluptas","fullname":"corrupti","email":"cumque","phone":"voluptas","address":"hic","password":"non","password_confirmation":"aut","roles":[]}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "voluptas",
    "fullname": "corrupti",
    "email": "cumque",
    "phone": "voluptas",
    "address": "hic",
    "password": "non",
    "password_confirmation": "aut",
    "roles": []
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
    roles | array |  required  | The list id of the role.

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_9bbfc13f0750a7e9c27c0786a5f67e0a -->
## Display a user by id.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/api/user/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/user/1");

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
curl -X PUT "https://api.enclavei3dev.tk/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"dolores","email":"pariatur","phone":"officiis","address":"nobis","roles":"[1,2]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "dolores",
    "email": "pariatur",
    "phone": "officiis",
    "address": "nobis",
    "roles": "[1,2]"
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
    roles | array |  required  | The string contains role's ID.

<!-- END_538c59bd7094f21614fa40efbc87039d -->

<!-- START_43e8ba205ffd3cbca826e9ab0a6f5af1 -->
## Delete the user

> Example request:

```bash
curl -X DELETE "https://api.enclavei3dev.tk/api/user" \
    -H "Content-Type: application/json" \
    -d '{"userId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3dev.tk/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "userId": "[1,2,3,4,5]"
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
`DELETE api/user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    userId | array |  required  | list id of user.

<!-- END_43e8ba205ffd3cbca826e9ab0a6f5af1 -->

#general
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3dev.tk/oauth/authorize" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/authorize");

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
curl -X POST "https://api.enclavei3dev.tk/oauth/authorize" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/authorize");

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
curl -X DELETE "https://api.enclavei3dev.tk/oauth/authorize" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/authorize");

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
curl -X POST "https://api.enclavei3dev.tk/oauth/token" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/token");

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
curl -X GET -G "https://api.enclavei3dev.tk/oauth/tokens" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/tokens");

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
curl -X DELETE "https://api.enclavei3dev.tk/oauth/tokens/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/tokens/1");

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
curl -X POST "https://api.enclavei3dev.tk/oauth/token/refresh" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/token/refresh");

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
curl -X GET -G "https://api.enclavei3dev.tk/oauth/clients" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/clients");

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
curl -X POST "https://api.enclavei3dev.tk/oauth/clients" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/clients");

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
curl -X PUT "https://api.enclavei3dev.tk/oauth/clients/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/clients/1");

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
curl -X DELETE "https://api.enclavei3dev.tk/oauth/clients/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/clients/1");

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
curl -X GET -G "https://api.enclavei3dev.tk/oauth/scopes" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/scopes");

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
curl -X GET -G "https://api.enclavei3dev.tk/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/personal-access-tokens");

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
curl -X POST "https://api.enclavei3dev.tk/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/personal-access-tokens");

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
curl -X DELETE "https://api.enclavei3dev.tk/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/oauth/personal-access-tokens/1");

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
curl -X GET -G "https://api.enclavei3dev.tk/login" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/login");

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
curl -X POST "https://api.enclavei3dev.tk/login" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/login");

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
curl -X POST "https://api.enclavei3dev.tk/logout" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/logout");

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
curl -X GET -G "https://api.enclavei3dev.tk/register" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/register");

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
curl -X POST "https://api.enclavei3dev.tk/register" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/register");

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
curl -X GET -G "https://api.enclavei3dev.tk/password/reset" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/password/reset");

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
curl -X POST "https://api.enclavei3dev.tk/password/email" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/password/email");

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
curl -X GET -G "https://api.enclavei3dev.tk/password/reset/1" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/password/reset/1");

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
curl -X POST "https://api.enclavei3dev.tk/password/reset" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/password/reset");

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
curl -X GET -G "https://api.enclavei3dev.tk/home" 
```

```javascript
const url = new URL("https://api.enclavei3dev.tk/home");

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


