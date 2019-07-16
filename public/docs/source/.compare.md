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
<!-- START_280a28fc53a425f7521a44fe924a3ea6 -->
## Display a listing of the article.

10 rows/request

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/article" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/article");

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
            "catId": 2,
            "created_at": "2019-07-16 04:04:02",
            "updated_at": "2019-07-16 04:04:02",
            "user": {
                "id": 5,
                "name": "oreilly.marguerite",
                "fullname": "Pearlie Breitenberg II",
                "email": "hwilliamson@example.net",
                "phone": "+13843638849",
                "address": "62627 Beulah Creek Suite 991\nGersonton, ID 51912",
                "image": "wZMhw.png",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "job": {
                "id": 1,
                "name": "Khalid Gusikowski",
                "description": "Quaerat rerum voluptatibus delectus dignissimos. Maxime aut inventore nam cum ratione molestiae. Odio optio fugiat laudantium aut iste quo.",
                "address": "6402 Rath Pike Apt. 922\nSouth Magdalenfurt, MD 83373-1364",
                "position": "Tester",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": "2-3 years",
                "amount": 19,
                "publishedOn": "2019-07-14 00:23:55",
                "deadline": "2019-06-24 05:50:58",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "category": {
                "id": 2,
                "name": "Program",
                "formatArticle": "<p><\/p>"
            }
        },
        {
            "id": 2,
            "title": "Eichmann-Abshire",
            "image": "9GTSp.png",
            "jobId": 3,
            "content": "Aut ad ipsam eligendi est ad. Illum occaecati voluptatibus exercitationem ut vero laudantium. Amet dolores non officiis velit placeat architecto. Dolor adipisci reiciendis est accusantium.",
            "userId": 1,
            "catId": 1,
            "created_at": "2019-07-16 04:04:03",
            "updated_at": "2019-07-16 04:04:03",
            "user": {
                "id": 1,
                "name": "admin",
                "fullname": "Admin",
                "email": "admin@gmail.com",
                "phone": "0123456789",
                "address": "453-455 Hoàng Diệu, TP Đà Nẵng",
                "image": "avt_default_profile.png",
                "created_at": null,
                "updated_at": null
            },
            "job": {
                "id": 3,
                "name": "Dewitt Heathcote",
                "description": "Est velit in quidem nostrum facere aperiam. Voluptas est eligendi ex est explicabo alias est. Est tempore tenetur earum. Doloremque qui molestiae vero voluptatibus unde mollitia.",
                "address": "7977 Katelyn Heights Suite 265\nDeronport, SD 41387-3407",
                "position": "Tester",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": "2-3 years",
                "amount": 15,
                "publishedOn": "2019-06-30 03:03:23",
                "deadline": "2019-07-11 04:51:22",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "category": {
                "id": 1,
                "name": "Recruitment",
                "formatArticle": "<!doctype html>\r\n<html lang=\"en\">\r\n\r\n<head>\r\n  <title>Recruitment Format<\/title>\r\n  <meta charset=\"utf-8\">\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n  <link rel=\"stylesheet\" href=\"css\/custom-bs.css\">\r\n  <link rel=\"stylesheet\" href=\"css\/bootstrap-select.min.css\">\r\n  <link rel=\"stylesheet\" href=\"fonts\/icomoon\/style.css\">\r\n  <link rel=\"stylesheet\" href=\"fonts\/line-icons\/style.css\">\r\n  <link rel=\"stylesheet\" href=\"css\/style.css\">\r\n<\/head>\r\n\r\n<body id=\"top\">\r\n  <div class=\"site-wrap\">    \r\n    <section class=\"site-section\">\r\n      <div class=\"container\">\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-8\">\r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span class=\"icon-align-left mr-3\"><\/span>Job\r\n                Description<\/h3>\r\n                <p>Gaming Audio Headset Engineer<\/p>\r\n                <p>Enclave, a company of and by software engineering professionals. We have been providing outstanding quality for software engineering and software testing services since 2007. Basing on demanding features collecting from many big names in IT and ITO industries, we – by ourselves – have created innovative working environment and effective solutions that are now available to all-sized companies.<\/p>\r\n              <p>We are looking for an experience engineer for the gaming audio headset project.<\/p>\r\n            <\/div>\r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span\r\n                  class=\"icon-rocket mr-3\"><\/span>Responsibilities<\/h3>\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Work with the audio team to implement new features in new products.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Work closely with the audio design team to improve our gaming headset audio.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Work with other engineers to interface audio systems to other game systems.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Design, document, implement audio gaming headsets to achieve the team’s vision.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>DExpand our audio technology to enable our designers to create world class game audio.<\/span><\/li>\r\n              <\/ul>\r\n            <\/div>\r\n    \r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span class=\"icon-book mr-3\"><\/span>Qualifications<\/h3>\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <h4 class=\"h5 d-flex align-items-center mb-4 text-primary\"><\/span>Minimum Qualifications:<\/h4>\r\n\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>3+ years as an Audio\/Sound Software Engineer.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Experience with Windows Core Audio APIs.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Windows audio driver experience.<\/span><\/li>\r\n\r\n                <h4 class=\"h5 d-flex align-items-center mb-4 text-primary\"><\/span>Preferred Qualifications:<\/h4>\r\n\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Fluent in C++, strong C# skills..<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>BS\/BEng in Math, CS or equivalent.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Experience with Universal Windows Drivers for Audio.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Technical knowledge of the principles of sound and audio manipulation.<\/span><\/li>\r\n\r\n                    <h4 class=\"h5 d-flex align-items-center mb-4 text-primary\"><\/span>Bonus skills:<\/h4>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Windows Spatial Audio Session API (SASAPI) Experience.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Python.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>3D Math.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Knowledge and\/or experience of audio DSP technology.<\/span><\/li>\r\n              <\/ul>\r\n            <\/div>\r\n    \r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span class=\"icon-turned_in mr-3\"><\/span>Other\r\n                Benifits<\/h3>\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Necessitatibus quibusdam facilis<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Velit\r\n                    unde aliquam et voluptas reiciendis non sapiente labore<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Commodi quae ipsum quas est itaque<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Lorem\r\n                    ipsum dolor sit amet, consectetur adipisicing elit<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Deleniti asperiores blanditiis nihil quia\r\n                    officiis dolor<\/span><\/li>\r\n              <\/ul>\r\n\r\n               <div class=\"mb-5\">\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <h5>Please, submit your CV at jobs@enclave.vn. Or you can contact us via below contact for further information:<\/h5>  \r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>HR Hotline: 0932 516 721 (Sunny) or 0905 630 209 (Rosie)<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Skype: Enclave Jobs<\/span><\/li>\r\n              <\/ul>\r\n            <\/div>\r\n                \r\n          <\/div>\r\n        <\/div>\r\n      <\/div>\r\n    <\/section>\r\n  <\/div>\r\n<\/body>\r\n\r\n<\/html>"
            }
        },
        {
            "id": 3,
            "title": "Abernathy-Torp",
            "image": "JYvo2.png",
            "jobId": 5,
            "content": "Nostrum est animi est eos. Est modi exercitationem illum voluptatem est ullam illo. Est eveniet suscipit voluptates ullam.",
            "userId": 6,
            "catId": 1,
            "created_at": "2019-07-16 04:04:03",
            "updated_at": "2019-07-16 04:04:03",
            "user": {
                "id": 6,
                "name": "kiana73",
                "fullname": "Prof. Allison Sawayn IV",
                "email": "rahul.lueilwitz@example.net",
                "phone": "964.983.9836",
                "address": "596 Toy Forest\nNorth Elouiseside, ME 94634",
                "image": "c6EaU.png",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "job": {
                "id": 5,
                "name": "Jesus Koch II",
                "description": "Sint laudantium aut eos rerum necessitatibus. Autem aut cupiditate perspiciatis molestiae qui. Maxime quaerat officiis non consequatur dolorem sit sed.",
                "address": "45515 Myra Plains\nVeumhaven, VT 86624-4147",
                "position": "Tester",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": "2-3 years",
                "amount": 25,
                "publishedOn": "2019-07-05 11:01:21",
                "deadline": "2019-07-07 11:56:25",
                "created_at": "2019-07-16 04:03:58",
                "updated_at": "2019-07-16 04:03:58"
            },
            "category": {
                "id": 1,
                "name": "Recruitment",
                "formatArticle": "<!doctype html>\r\n<html lang=\"en\">\r\n\r\n<head>\r\n  <title>Recruitment Format<\/title>\r\n  <meta charset=\"utf-8\">\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n  <link rel=\"stylesheet\" href=\"css\/custom-bs.css\">\r\n  <link rel=\"stylesheet\" href=\"css\/bootstrap-select.min.css\">\r\n  <link rel=\"stylesheet\" href=\"fonts\/icomoon\/style.css\">\r\n  <link rel=\"stylesheet\" href=\"fonts\/line-icons\/style.css\">\r\n  <link rel=\"stylesheet\" href=\"css\/style.css\">\r\n<\/head>\r\n\r\n<body id=\"top\">\r\n  <div class=\"site-wrap\">    \r\n    <section class=\"site-section\">\r\n      <div class=\"container\">\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-8\">\r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span class=\"icon-align-left mr-3\"><\/span>Job\r\n                Description<\/h3>\r\n                <p>Gaming Audio Headset Engineer<\/p>\r\n                <p>Enclave, a company of and by software engineering professionals. We have been providing outstanding quality for software engineering and software testing services since 2007. Basing on demanding features collecting from many big names in IT and ITO industries, we – by ourselves – have created innovative working environment and effective solutions that are now available to all-sized companies.<\/p>\r\n              <p>We are looking for an experience engineer for the gaming audio headset project.<\/p>\r\n            <\/div>\r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span\r\n                  class=\"icon-rocket mr-3\"><\/span>Responsibilities<\/h3>\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Work with the audio team to implement new features in new products.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Work closely with the audio design team to improve our gaming headset audio.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Work with other engineers to interface audio systems to other game systems.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Design, document, implement audio gaming headsets to achieve the team’s vision.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>DExpand our audio technology to enable our designers to create world class game audio.<\/span><\/li>\r\n              <\/ul>\r\n            <\/div>\r\n    \r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span class=\"icon-book mr-3\"><\/span>Qualifications<\/h3>\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <h4 class=\"h5 d-flex align-items-center mb-4 text-primary\"><\/span>Minimum Qualifications:<\/h4>\r\n\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>3+ years as an Audio\/Sound Software Engineer.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Experience with Windows Core Audio APIs.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Windows audio driver experience.<\/span><\/li>\r\n\r\n                <h4 class=\"h5 d-flex align-items-center mb-4 text-primary\"><\/span>Preferred Qualifications:<\/h4>\r\n\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Fluent in C++, strong C# skills..<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>BS\/BEng in Math, CS or equivalent.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Experience with Universal Windows Drivers for Audio.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Technical knowledge of the principles of sound and audio manipulation.<\/span><\/li>\r\n\r\n                    <h4 class=\"h5 d-flex align-items-center mb-4 text-primary\"><\/span>Bonus skills:<\/h4>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Windows Spatial Audio Session API (SASAPI) Experience.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Python.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>3D Math.<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Knowledge and\/or experience of audio DSP technology.<\/span><\/li>\r\n              <\/ul>\r\n            <\/div>\r\n    \r\n            <div class=\"mb-5\">\r\n              <h3 class=\"h5 d-flex align-items-center mb-4 text-primary\"><span class=\"icon-turned_in mr-3\"><\/span>Other\r\n                Benifits<\/h3>\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Necessitatibus quibusdam facilis<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Velit\r\n                    unde aliquam et voluptas reiciendis non sapiente labore<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Commodi quae ipsum quas est itaque<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Lorem\r\n                    ipsum dolor sit amet, consectetur adipisicing elit<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Deleniti asperiores blanditiis nihil quia\r\n                    officiis dolor<\/span><\/li>\r\n              <\/ul>\r\n\r\n               <div class=\"mb-5\">\r\n              <ul class=\"list-unstyled m-0 p-0\">\r\n                <h5>Please, submit your CV at jobs@enclave.vn. Or you can contact us via below contact for further information:<\/h5>  \r\n                <li class=\"d-flex align-items-start mb-2\"><span\r\n                    class=\"icon-check_circle mr-2 text-muted\"><\/span><span>HR Hotline: 0932 516 721 (Sunny) or 0905 630 209 (Rosie)<\/span><\/li>\r\n                <li class=\"d-flex align-items-start mb-2\"><span class=\"icon-check_circle mr-2 text-muted\"><\/span><span>Skype: Enclave Jobs<\/span><\/li>\r\n              <\/ul>\r\n            <\/div>\r\n                \r\n          <\/div>\r\n        <\/div>\r\n      <\/div>\r\n    <\/section>\r\n  <\/div>\r\n<\/body>\r\n\r\n<\/html>"
            }
        },
        {
            "id": 4,
            "title": "Ankunding-McKenzie",
            "image": "2R3Sp.png",
            "jobId": 1,
            "content": "Consectetur iste enim itaque cum quasi sit aut aperiam. Dolores rerum quod non quo earum et aliquid. Impedit qui omnis eligendi omnis consequatur omnis iste. Quis ut et id sapiente et vel.",
            "userId": 2,
            "catId": 2,
            "created_at": "2019-07-16 04:04:03",
            "updated_at": "2019-07-16 04:04:03",
            "user": {
                "id": 2,
                "name": "ephraim58",
                "fullname": "Ashly Robel IV",
                "email": "triston27@example.org",
                "phone": "915-542-4656 x049",
                "address": "2455 Keeley Coves\nNorth Bernardohaven, NY 62656-4192",
                "image": "LFck2.png",
                "created_at": "2019-07-16 04:03:56",
                "updated_at": "2019-07-16 04:03:56"
            },
            "job": {
                "id": 1,
                "name": "Khalid Gusikowski",
                "description": "Quaerat rerum voluptatibus delectus dignissimos. Maxime aut inventore nam cum ratione molestiae. Odio optio fugiat laudantium aut iste quo.",
                "address": "6402 Rath Pike Apt. 922\nSouth Magdalenfurt, MD 83373-1364",
                "position": "Tester",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": "2-3 years",
                "amount": 19,
                "publishedOn": "2019-07-14 00:23:55",
                "deadline": "2019-06-24 05:50:58",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "category": {
                "id": 2,
                "name": "Program",
                "formatArticle": "<p><\/p>"
            }
        },
        {
            "id": 5,
            "title": "Cruickshank-Purdy",
            "image": "JzlcH.png",
            "jobId": 4,
            "content": "In non vel mollitia deleniti nemo. Reprehenderit deserunt nesciunt mollitia vel repudiandae. Quos quasi aut fugit exercitationem et quaerat.",
            "userId": 5,
            "catId": 2,
            "created_at": "2019-07-16 04:04:03",
            "updated_at": "2019-07-16 04:04:03",
            "user": {
                "id": 5,
                "name": "oreilly.marguerite",
                "fullname": "Pearlie Breitenberg II",
                "email": "hwilliamson@example.net",
                "phone": "+13843638849",
                "address": "62627 Beulah Creek Suite 991\nGersonton, ID 51912",
                "image": "wZMhw.png",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "job": {
                "id": 4,
                "name": "Cheyenne McGlynn",
                "description": "Cupiditate at quia aperiam molestias. Nihil ipsa numquam eligendi soluta ut nesciunt. Reprehenderit dolor voluptatibus laborum tempora voluptates at.",
                "address": "5368 Genesis Turnpike\nKreigerside, NC 50002-3194",
                "position": "Tester",
                "salary": "500$ - 600$",
                "status": "Full-time",
                "experience": "2-3 years",
                "amount": 27,
                "publishedOn": "2019-07-08 01:48:34",
                "deadline": "2019-07-10 17:26:47",
                "created_at": "2019-07-16 04:03:57",
                "updated_at": "2019-07-16 04:03:57"
            },
            "category": {
                "id": 2,
                "name": "Program",
                "formatArticle": "<p><\/p>"
            }
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/article?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/article?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/article",
    "per_page": 10,
    "prev_page_url": null,
    "to": 5,
    "total": 5
}
```

### HTTP Request
`GET api/article`


<!-- END_280a28fc53a425f7521a44fe924a3ea6 -->

<!-- START_81d67ae333e049e406f985ba31ff0894 -->
## Display an Article by Id for Candidate page.

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/article-web/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/article-web/1");

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
    "catId": 2,
    "created_at": "2019-07-16 04:04:02",
    "updated_at": "2019-07-16 04:04:02"
}
```

### HTTP Request
`GET api/article-web/{id}`


<!-- END_81d67ae333e049e406f985ba31ff0894 -->

<!-- START_a92651a991429ff89af216ff17612d94 -->
## Display an Article by Id.

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/article/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/article/1");

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
curl -X POST "http://api.enclavei3dev.tk/api/article" \
    -H "Content-Type: application/json" \
    -d '{"title":"omnis","image":"eum","jobId":"nihil","content":"consectetur","catId":"dolore"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "omnis",
    "image": "eum",
    "jobId": "nihil",
    "content": "consectetur",
    "catId": "dolore"
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
    catId | string |  required  | The catId of the article.

<!-- END_706a660bd426dfde8ef5e730869db3f8 -->

<!-- START_6ff7ff26b034677d2a797186d18b3acf -->
## Update the article by Id.

> Example request:

```bash
curl -X PUT "http://api.enclavei3dev.tk/api/article/1" \
    -H "Content-Type: application/json" \
    -d '{"title":"repellat","image":"libero","jobId":"eligendi","content":"consectetur","catId":"sed"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/article/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "repellat",
    "image": "libero",
    "jobId": "eligendi",
    "content": "consectetur",
    "catId": "sed"
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
    catId | string |  required  | The catId of the article.

<!-- END_6ff7ff26b034677d2a797186d18b3acf -->

<!-- START_9e21e276a45e8d02a85f6129022896eb -->
## Delete the article by Id.

> Example request:

```bash
curl -X DELETE "http://api.enclavei3dev.tk/api/article" \
    -H "Content-Type: application/json" \
    -d '{"articleId":"1,2,3,4,5"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/article");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "articleId": "1,2,3,4,5"
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
    articleId | string |  required  | The id/list id of job.

<!-- END_9e21e276a45e8d02a85f6129022896eb -->

#Auth management
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login.

> Example request:

```bash
curl -X POST "http://api.enclavei3dev.tk/api/login" \
    -H "Content-Type: application/json" \
    -d '{"name":"quis","password":"ipsa"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quis",
    "password": "ipsa"
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
curl -X GET -G "http://api.enclavei3dev.tk/api/logout" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/logout");

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

10 rows/request

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/job" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/job");

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

<!-- START_79010532a4dbb7da43f2434bda2f75b6 -->
## Show a job by ID for Recruitment-Webapp.

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/job-web/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/job-web/1");

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
    "name": "Khalid Gusikowski",
    "description": "Quaerat rerum voluptatibus delectus dignissimos. Maxime aut inventore nam cum ratione molestiae. Odio optio fugiat laudantium aut iste quo.",
    "address": "6402 Rath Pike Apt. 922\nSouth Magdalenfurt, MD 83373-1364",
    "position": "Tester",
    "salary": "500$ - 600$",
    "status": "Full-time",
    "experience": "2-3 years",
    "amount": 19,
    "publishedOn": "2019-07-14 00:23:55",
    "deadline": "2019-06-24 05:50:58",
    "created_at": "2019-07-16 04:03:57",
    "updated_at": "2019-07-16 04:03:57"
}
```

### HTTP Request
`GET api/job-web/{id}`


<!-- END_79010532a4dbb7da43f2434bda2f75b6 -->

<!-- START_2622ddcdb08a3b4445fd08ac3f78b34c -->
## Show a job by ID.

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/job/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/job/1");

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
curl -X POST "http://api.enclavei3dev.tk/api/job" \
    -H "Content-Type: application/json" \
    -d '{"name":"est","description":"sunt","address":"atque","position":"perspiciatis","salary":"soluta","status":"id","experience":"est","amount":11,"publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "est",
    "description": "sunt",
    "address": "atque",
    "position": "perspiciatis",
    "salary": "soluta",
    "status": "id",
    "experience": "est",
    "amount": 11,
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
curl -X PUT "http://api.enclavei3dev.tk/api/job/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"magni","description":"voluptatem","address":"nulla","position":"velit","salary":"architecto","status":"earum","experience":"magnam","amount":"aut","publishedOn":"2019-07-10 00:00:00","deadline":"2019-07-10 00:00:00"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/job/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "magni",
    "description": "voluptatem",
    "address": "nulla",
    "position": "velit",
    "salary": "architecto",
    "status": "earum",
    "experience": "magnam",
    "amount": "aut",
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
curl -X DELETE "http://api.enclavei3dev.tk/api/job" \
    -H "Content-Type: application/json" \
    -d '{"jobID":"1,2,3,4,5"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/job");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "jobID": "1,2,3,4,5"
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
    jobID | string |  required  | The id/list id of job.

<!-- END_bb68871d1fc0b4e5051d021ad0764440 -->

#Permission management
<!-- START_ed8ced07a2186d44fa31e6f39b573d1c -->
## Display a listing of the permission
10 rows/request.

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/api/permission" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/permission");

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
curl -X GET -G "http://api.enclavei3dev.tk/api/role" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/role");

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
curl -X GET -G "http://api.enclavei3dev.tk/api/role/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/role/1");

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
curl -X POST "http://api.enclavei3dev.tk/api/role" \
    -H "Content-Type: application/json" \
    -d '{"name":"rerum","permissions":"[1,2]"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/role");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "rerum",
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
curl -X PUT "http://api.enclavei3dev.tk/api/role/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"sint","permissions":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/role/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sint",
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
curl -X DELETE "http://api.enclavei3dev.tk/api/role" \
    -H "Content-Type: application/json" \
    -d '{"roleId":"[1,2,3,4,5]"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/role");

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
curl -X GET -G "http://api.enclavei3dev.tk/api/current-profile" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/current-profile");

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
curl -X PUT "http://api.enclavei3dev.tk/api/profile" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"qui","email":"non","phone":"voluptas","address":"sit"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/profile");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "qui",
    "email": "non",
    "phone": "voluptas",
    "address": "sit"
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
curl -X GET -G "http://api.enclavei3dev.tk/api/user" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/user");

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
curl -X POST "http://api.enclavei3dev.tk/api/user" \
    -H "Content-Type: application/json" \
    -d '{"name":"quidem","fullname":"porro","email":"in","phone":"illo","address":"voluptas","password":"a","password_confirmation":"est"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quidem",
    "fullname": "porro",
    "email": "in",
    "phone": "illo",
    "address": "voluptas",
    "password": "a",
    "password_confirmation": "est"
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
curl -X GET -G "http://api.enclavei3dev.tk/api/user/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/user/1");

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
curl -X PUT "http://api.enclavei3dev.tk/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"fullname":"dolores","email":"aut","phone":"dolores","address":"eaque","roles":"1,2"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullname": "dolores",
    "email": "aut",
    "phone": "dolores",
    "address": "eaque",
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

<!-- START_43e8ba205ffd3cbca826e9ab0a6f5af1 -->
## Delete the user

> Example request:

```bash
curl -X DELETE "http://api.enclavei3dev.tk/api/user" \
    -H "Content-Type: application/json" \
    -d '{"users":"1,2,3,4,5"}'

```

```javascript
const url = new URL("http://api.enclavei3dev.tk/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "users": "1,2,3,4,5"
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
    users | string |  required  | list id of user.

<!-- END_43e8ba205ffd3cbca826e9ab0a6f5af1 -->

#general
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "http://api.enclavei3dev.tk/oauth/authorize" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/authorize");

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
curl -X POST "http://api.enclavei3dev.tk/oauth/authorize" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/authorize");

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
curl -X DELETE "http://api.enclavei3dev.tk/oauth/authorize" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/authorize");

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
curl -X POST "http://api.enclavei3dev.tk/oauth/token" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/token");

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
curl -X GET -G "http://api.enclavei3dev.tk/oauth/tokens" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/tokens");

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
curl -X DELETE "http://api.enclavei3dev.tk/oauth/tokens/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/tokens/1");

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
curl -X POST "http://api.enclavei3dev.tk/oauth/token/refresh" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/token/refresh");

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
curl -X GET -G "http://api.enclavei3dev.tk/oauth/clients" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/clients");

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
curl -X POST "http://api.enclavei3dev.tk/oauth/clients" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/clients");

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
curl -X PUT "http://api.enclavei3dev.tk/oauth/clients/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/clients/1");

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
curl -X DELETE "http://api.enclavei3dev.tk/oauth/clients/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/clients/1");

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
curl -X GET -G "http://api.enclavei3dev.tk/oauth/scopes" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/scopes");

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
curl -X GET -G "http://api.enclavei3dev.tk/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/personal-access-tokens");

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
curl -X POST "http://api.enclavei3dev.tk/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/personal-access-tokens");

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
curl -X DELETE "http://api.enclavei3dev.tk/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/oauth/personal-access-tokens/1");

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
curl -X GET -G "http://api.enclavei3dev.tk/login" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/login");

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
curl -X POST "http://api.enclavei3dev.tk/login" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/login");

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
curl -X POST "http://api.enclavei3dev.tk/logout" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/logout");

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
curl -X GET -G "http://api.enclavei3dev.tk/register" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/register");

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
curl -X POST "http://api.enclavei3dev.tk/register" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/register");

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
curl -X GET -G "http://api.enclavei3dev.tk/password/reset" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/password/reset");

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
curl -X POST "http://api.enclavei3dev.tk/password/email" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/password/email");

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
curl -X GET -G "http://api.enclavei3dev.tk/password/reset/1" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/password/reset/1");

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
curl -X POST "http://api.enclavei3dev.tk/password/reset" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/password/reset");

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
curl -X GET -G "http://api.enclavei3dev.tk/home" 
```

```javascript
const url = new URL("http://api.enclavei3dev.tk/home");

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


