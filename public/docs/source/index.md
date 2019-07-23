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
[Get Postman Collection](http://api.enclavei3.tk/docs/collection.json)

<!-- END_INFO -->

#Article management
<!-- START_13e4c14823c727b279b73f21026b5194 -->
## Display a listing of the article recruitment for guests.

10 rows/request

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/article-web" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/article-web");

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
            "id": 6,
            "title": "Gaming Audio Headset Engineer",
            "image": null,
            "jobId": 1,
            "content": "Enclave, a company of and by software engineering professionals. We have been providing outstanding quality for software engineering and software testing services since 2007. Basing on demanding features collecting from many big names in IT and ITO industries, we – by ourselves – have created innovative working environment and effective solutions that are now available to all-sized companies.\r\n\r\nWe are looking for an experience engineer for the gaming audio headset project.",
            "userId": 1,
            "catId": 1,
            "created_at": null,
            "updated_at": null,
            "isPublic": 1,
            "job": {
                "id": 1,
                "name": "Gaming Audio Headset Engineer",
                "description": "Adipisci voluptatem enim modi vel sed ullam rem. Excepturi excepturi eum autem. Porro accusantium provident sint libero recusandae ut. Rem et iure explicabo molestiae deserunt sunt.",
                "address": "453-455 Hoang Dieu",
                "position": "Tester",
                "category": "Engineer",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": 2,
                "amount": 24,
                "publishedOn": "2019-07-22 20:22:34",
                "deadline": "2019-06-24 21:17:45",
                "created_at": "2019-07-23 07:23:16",
                "updated_at": "2019-07-23 07:23:16"
            }
        },
        {
            "id": 7,
            "title": "Spring Internship Program 2019",
            "image": null,
            "jobId": 2,
            "content": "Hello, students!\r\n\r\nWe are very happy to introduce you that Enclave is now looking for junior IT students for our Spring Internship Program 2019.",
            "userId": 1,
            "catId": 1,
            "created_at": null,
            "updated_at": null,
            "isPublic": 1,
            "job": {
                "id": 2,
                "name": "Spring Internship Program 2019",
                "description": "Esse aut impedit debitis ullam ad in. Quis doloribus enim animi facilis ut quidem. Enim laudantium maxime voluptas sequi. Debitis magni distinctio consequatur cupiditate qui et ab repudiandae.",
                "address": "453-455 Hoang Dieu",
                "position": "Intern",
                "category": "Internship",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": 3,
                "amount": 10,
                "publishedOn": "2019-07-03 00:13:40",
                "deadline": "2019-07-12 01:11:33",
                "created_at": "2019-07-23 07:23:16",
                "updated_at": "2019-07-23 07:23:16"
            }
        },
        {
            "id": 9,
            "title": "Automation Tester",
            "image": null,
            "jobId": 3,
            "content": "Enclave:11 is one of Leading Information Technology Outsourcing Companies in Vietnam with ten years in business. We are a sustainable growing company and we offer services to clients all around the world. As a result of our company development, we are looking for several Automation Testers.",
            "userId": 1,
            "catId": 1,
            "created_at": null,
            "updated_at": null,
            "isPublic": 1,
            "job": {
                "id": 3,
                "name": "Automation Tester",
                "description": "Eaque alias fugit dolor error quaerat est veritatis. Possimus sequi perferendis dolores ducimus. Ratione voluptate aperiam non quia repudiandae quia sint.",
                "address": "453-455 Hoang Dieu",
                "position": "Developer",
                "category": "Engineer",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": 4,
                "amount": 17,
                "publishedOn": "2019-07-21 12:34:05",
                "deadline": "2019-06-27 18:24:11",
                "created_at": "2019-07-23 07:23:16",
                "updated_at": "2019-07-23 07:23:16"
            }
        },
        {
            "id": 11,
            "title": "SQA Engineers",
            "image": null,
            "jobId": 4,
            "content": "You will have chance to work with other intelligent, enthusiastic, and positive engineers to invent, design, and create things that matter.",
            "userId": 1,
            "catId": 1,
            "created_at": null,
            "updated_at": null,
            "isPublic": 1,
            "job": {
                "id": 4,
                "name": "SQA Engineers",
                "description": "Minus cum quam qui ipsum enim quibusdam. Illum sit vel sapiente occaecati facere. Reiciendis soluta dolores excepturi quidem placeat sunt. Totam modi beatae quos omnis.",
                "address": "453-455 Hoang Dieu",
                "position": "Tester",
                "category": "Internship",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": 1,
                "amount": 30,
                "publishedOn": "2019-06-29 16:56:34",
                "deadline": "2019-06-27 10:00:53",
                "created_at": "2019-07-23 07:23:17",
                "updated_at": "2019-07-23 07:23:17"
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
    "to": 4,
    "total": 4
}
```

### HTTP Request
`GET api/article-web`


<!-- END_13e4c14823c727b279b73f21026b5194 -->

<!-- START_81d67ae333e049e406f985ba31ff0894 -->
## Display an Article by Id for Candidate page.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/article-web/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/article-web/1");

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
    "message": "No query results for model [App\\Article] 1"
}
```

### HTTP Request
`GET api/article-web/{id}`


<!-- END_81d67ae333e049e406f985ba31ff0894 -->

<!-- START_7082b3b8e20c6044700eba56e9719492 -->
## Display a listing of the article.

> Example request:

```bash
curl -X POST "https://api.enclavei3.tk/api/list-article" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"occaecati","property":"title","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/list-article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "occaecati",
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
curl -X GET -G "https://api.enclavei3.tk/api/article/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/article/1");

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
curl -X POST "https://api.enclavei3.tk/api/article" \
    -H "Content-Type: application/json" \
    -d '{"title":"voluptas","image":"et","jobId":"sapiente","content":"voluptas","catId":"debitis"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "voluptas",
    "image": "et",
    "jobId": "sapiente",
    "content": "voluptas",
    "catId": "debitis"
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
curl -X PUT "https://api.enclavei3.tk/api/article/1" \
    -H "Content-Type: application/json" \
    -d '{"title":"fuga","image":"consequatur","jobId":"aut","content":"enim","catId":"quia"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/article/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "fuga",
    "image": "consequatur",
    "jobId": "aut",
    "content": "enim",
    "catId": "quia"
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
curl -X DELETE "https://api.enclavei3.tk/api/article" \
    -H "Content-Type: application/json" \
    -d '{"articleId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/article");

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
curl -X POST "https://api.enclavei3.tk/api/login" \
    -H "Content-Type: application/json" \
    -d '{"name":"nobis","password":"facilis"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "nobis",
    "password": "facilis"
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
curl -X PUT "https://api.enclavei3.tk/api/change-password" \
    -H "Content-Type: application/json" \
    -d '{"old_password":"non","password":"consequatur","password_confirmation":"et"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/change-password");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "old_password": "non",
    "password": "consequatur",
    "password_confirmation": "et"
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
curl -X GET -G "https://api.enclavei3.tk/api/logout" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/logout");

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
## Store a candidate.

> Example request:

```bash
curl -X POST "https://api.enclavei3.tk/api/candidate" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"excepturi","email":"dicta","phone":"ad","address":"ducimus","description":"quia","technicalSkill":"NodeJs-2, PHP-1","CV":"quibusdam"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/candidate");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "excepturi",
    "email": "dicta",
    "phone": "ad",
    "address": "ducimus",
    "description": "quia",
    "technicalSkill": "NodeJs-2, PHP-1",
    "CV": "quibusdam"
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
    fullname | string |  required  | The full name of the candidate.
    email | string |  required  | The email of the candidate.
    phone | string |  required  | The phone of the candidate.
    address | string |  required  | The address of the candidate.
    description | string |  optional  | The description of the candidate.
    technicalSkill | string |  optional  | The technicalSkill of the candidate.
    CV | file |  required  | The resume of the candidate.

<!-- END_010832592e6962a64a23a8acdc94bc92 -->

<!-- START_f5ea8445390dd7cacae4448b863c65e9 -->
## Display a listing of the candidate.

> Example request:

```bash
curl -X POST "https://api.enclavei3.tk/api/list-candidate" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"error","property":"fullname","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/list-candidate");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "error",
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
`POST api/list-candidate`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search.
    property | string |  optional  | Field in table you want to sort(fullname,email,phone,address,cv,status,created_at,updated_at).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_f5ea8445390dd7cacae4448b863c65e9 -->

<!-- START_01b8554437391c0d3cc323f4d6fb1b51 -->
## Show a candidate by ID

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/candidate/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/candidate/1");

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
curl -X PUT "https://api.enclavei3.tk/api/candidate/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/candidate/1");

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
curl -X DELETE "https://api.enclavei3.tk/api/candidate" \
    -H "Content-Type: application/json" \
    -d '{"candidateId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/candidate");

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
curl -X POST "https://api.enclavei3.tk/api/list-interviewer" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"dolorem","property":"fullname","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/list-interviewer");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "dolorem",
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
`POST api/list-interviewer`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by fullname, email, address, phone, technicalSkill of interviewer).
    property | string |  optional  | Field in table you want to sort (fullname, email, address, phone, technicalSkill).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_8d338127e98bde72742eac637f39f4d5 -->

<!-- START_8bbf5354b95d62058f6c6b898643aa59 -->
## Display an interviewer by Id.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/interviewer/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/interviewer/1");

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
curl -X POST "https://api.enclavei3.tk/api/interviewer" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"quisquam","email":"dignissimos","phone":"amet","address":"praesentium","technicalSkill":"dolore","image":"sed"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/interviewer");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "quisquam",
    "email": "dignissimos",
    "phone": "amet",
    "address": "praesentium",
    "technicalSkill": "dolore",
    "image": "sed"
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
    image | file |  required  | The image of the interviewer (png,peg,jpg,png).

<!-- END_cf9cb8877dfd3f69e5212118172e54a7 -->

#Interview management
<!-- START_b9b506d79a35a649f9aa24832bac841c -->
## Display a listing of the interview.

10 rows/page.

> Example request:

```bash
curl -X POST "https://api.enclavei3.tk/api/interview" \
    -H "Content-Type: application/json" \
    -d '{"name":"quis","address":"2-1","status":"1","sort_name":"desc","sort_address":"desc","sort_timestart":"desc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/interview");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quis",
    "address": "2-1",
    "status": "1",
    "sort_name": "desc",
    "sort_address": "desc",
    "sort_timestart": "desc"
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
`POST api/interview`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | Interview's name want to search.
    address | string |  optional  | Interview's address want to filter(2-1,2-2,...).
    status | numeric |  optional  | The status of interview [Pending(1)/Opening(2)/Closed(3)].
    sort_name | string |  optional  | The param if you want to sort by name = asc/desc (Ex:sort_name="desc").
    sort_address | string |  optional  | The param if you want to sort by address = asc/desc (Ex:sort_address="desc").
    sort_timestart | string |  optional  | The param if you want to sort by timestart = asc/desc (Ex:sort_timestart="desc").

<!-- END_b9b506d79a35a649f9aa24832bac841c -->

#Job management
<!-- START_4566b80caaddfbb39bf088b5fd47405e -->
## Display a listing of the job.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/list-job" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"ut","property":"name","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/list-job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "ut",
    "property": "name",
    "orderby": "asc"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
`GET api/list-job`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    keyword | string |  optional  | keyword want to search (search by name, description, position,address, salary, status,experience,amount).
    property | string |  optional  | Field in table you want to sort(name, description, position,address, salary, status,experience,amount,publishOn,deadline).
    orderby | string |  optional  | The order sort (ASC/DESC).

<!-- END_4566b80caaddfbb39bf088b5fd47405e -->

<!-- START_2622ddcdb08a3b4445fd08ac3f78b34c -->
## Show a job by ID.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/job/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/job/1");

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
curl -X POST "https://api.enclavei3.tk/api/job" \
    -H "Content-Type: application/json" \
    -d '{"name":"unde","description":"voluptatum","address":"repellendus","position":"velit","salary":"vero","status":"enim","experience":"explicabo","amount":16,"publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "unde",
    "description": "voluptatum",
    "address": "repellendus",
    "position": "velit",
    "salary": "vero",
    "status": "enim",
    "experience": "explicabo",
    "amount": 16,
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
curl -X PUT "https://api.enclavei3.tk/api/job/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"magnam","description":"et","address":"nisi","position":"nisi","salary":"voluptatibus","status":"itaque","experience":"et","amount":"est","publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/job/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "magnam",
    "description": "et",
    "address": "nisi",
    "position": "nisi",
    "salary": "voluptatibus",
    "status": "itaque",
    "experience": "et",
    "amount": "est",
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
curl -X DELETE "https://api.enclavei3.tk/api/job" \
    -H "Content-Type: application/json" \
    -d '{"jobID":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/job");

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
curl -X GET -G "https://api.enclavei3.tk/api/permission" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/permission");

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
curl -X POST "https://api.enclavei3.tk/api/password/forgot" \
    -H "Content-Type: application/json" \
    -d '{"email":"enclave-recruitment@enclave.vn"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/password/forgot");

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
curl -X GET -G "https://api.enclavei3.tk/api/password/verify/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/password/verify/1");

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
curl -X POST "https://api.enclavei3.tk/api/password/reset" \
    -H "Content-Type: application/json" \
    -d '{"password":"accusantium","password_confirmation":"voluptatem","token":"exercitationem"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/password/reset");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "password": "accusantium",
    "password_confirmation": "voluptatem",
    "token": "exercitationem"
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
curl -X POST "https://api.enclavei3.tk/api/list-role" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"rerum","property":"name","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/list-role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "rerum",
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
curl -X GET -G "https://api.enclavei3.tk/api/role/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/role/1");

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
curl -X POST "https://api.enclavei3.tk/api/role" \
    -H "Content-Type: application/json" \
    -d '{"name":"et","permissions":"[1,2]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "et",
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
curl -X PUT "https://api.enclavei3.tk/api/role/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"et","permissions":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/role/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "et",
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
curl -X DELETE "https://api.enclavei3.tk/api/role" \
    -H "Content-Type: application/json" \
    -d '{"roleId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/role");

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

<!-- START_7d10570494fb1a7fb16c16de2294e9b5 -->
## Show the message for editing the role Admin.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/role/1/edit" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/role/1/edit");

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
`GET api/role/{id}/edit`


<!-- END_7d10570494fb1a7fb16c16de2294e9b5 -->

#User management
<!-- START_440f44f2fd3290d79d27dece2f3f30f1 -->
## Show the profile&#039;s information.

> Example request:

```bash
curl -X GET -G "https://api.enclavei3.tk/api/current-profile" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/current-profile");

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
curl -X PUT "https://api.enclavei3.tk/api/profile" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"nostrum","email":"at","phone":"quod","address":"hic"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/profile");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "nostrum",
    "email": "at",
    "phone": "quod",
    "address": "hic"
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
curl -X POST "https://api.enclavei3.tk/api/profile/avatar" \
    -H "Content-Type: application/json" \
    -d '{"image":"tenetur"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/profile/avatar");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "image": "tenetur"
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
curl -X POST "https://api.enclavei3.tk/api/list-user" \
    -H "Content-Type: application/json" \
    -d '{"keyword":"iure","property":"username","orderby":"asc"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/list-user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "keyword": "iure",
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
curl -X POST "https://api.enclavei3.tk/api/user" \
    -H "Content-Type: application/json" \
    -d '{"name":"magni","fullname":"qui","email":"pariatur","phone":"ipsam","address":"voluptates","password":"similique","password_confirmation":"cupiditate","roles":[]}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "magni",
    "fullname": "qui",
    "email": "pariatur",
    "phone": "ipsam",
    "address": "voluptates",
    "password": "similique",
    "password_confirmation": "cupiditate",
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
curl -X GET -G "https://api.enclavei3.tk/api/user/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/api/user/1");

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
curl -X PUT "https://api.enclavei3.tk/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"quia","email":"non","phone":"doloremque","address":"fugiat","roles":"[1,2]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "quia",
    "email": "non",
    "phone": "doloremque",
    "address": "fugiat",
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
curl -X DELETE "https://api.enclavei3.tk/api/user" \
    -H "Content-Type: application/json" \
    -d '{"userId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("https://api.enclavei3.tk/api/user");

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
curl -X GET -G "https://api.enclavei3.tk/oauth/authorize" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/authorize");

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
curl -X POST "https://api.enclavei3.tk/oauth/authorize" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/authorize");

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
curl -X DELETE "https://api.enclavei3.tk/oauth/authorize" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/authorize");

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
curl -X POST "https://api.enclavei3.tk/oauth/token" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/token");

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
curl -X GET -G "https://api.enclavei3.tk/oauth/tokens" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/tokens");

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
curl -X DELETE "https://api.enclavei3.tk/oauth/tokens/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/tokens/1");

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
curl -X POST "https://api.enclavei3.tk/oauth/token/refresh" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/token/refresh");

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
curl -X GET -G "https://api.enclavei3.tk/oauth/clients" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/clients");

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
curl -X POST "https://api.enclavei3.tk/oauth/clients" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/clients");

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
curl -X PUT "https://api.enclavei3.tk/oauth/clients/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/clients/1");

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
curl -X DELETE "https://api.enclavei3.tk/oauth/clients/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/clients/1");

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
curl -X GET -G "https://api.enclavei3.tk/oauth/scopes" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/scopes");

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
curl -X GET -G "https://api.enclavei3.tk/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/personal-access-tokens");

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
curl -X POST "https://api.enclavei3.tk/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/personal-access-tokens");

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
curl -X DELETE "https://api.enclavei3.tk/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/oauth/personal-access-tokens/1");

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
curl -X GET -G "https://api.enclavei3.tk/login" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/login");

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
curl -X POST "https://api.enclavei3.tk/login" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/login");

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
curl -X POST "https://api.enclavei3.tk/logout" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/logout");

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
curl -X GET -G "https://api.enclavei3.tk/register" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/register");

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
curl -X POST "https://api.enclavei3.tk/register" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/register");

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
curl -X GET -G "https://api.enclavei3.tk/password/reset" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/password/reset");

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
curl -X POST "https://api.enclavei3.tk/password/email" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/password/email");

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
curl -X GET -G "https://api.enclavei3.tk/password/reset/1" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/password/reset/1");

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
curl -X POST "https://api.enclavei3.tk/password/reset" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/password/reset");

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
curl -X GET -G "https://api.enclavei3.tk/home" 
```

```javascript
const url = new URL("https://api.enclavei3.tk/home");

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


