define({ "api": [
  {
    "type": "get",
    "url": "/api/classRoom",
    "title": "Request User information",
    "name": "ClassRoomShow",
    "group": "ClassRoom",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Json",
            "optional": false,
            "field": "ClassRoom",
            "description": "<p>Object in Json</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/ClassRoomController.php",
    "groupTitle": "ClassRoom"
  },
  {
    "type": "get",
    "url": "/api/student",
    "title": "Request User information",
    "name": "StudentIndex",
    "group": "Student",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Json",
            "optional": false,
            "field": "Array",
            "description": "<p>with all students in siystem</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/StudentController.php",
    "groupTitle": "Student"
  },
  {
    "type": "get",
    "url": "/api/student",
    "title": "Request User information",
    "name": "StudentShow",
    "group": "Student",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Json",
            "optional": false,
            "field": "Student",
            "description": "<p>Object in Json</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/StudentController.php",
    "groupTitle": "Student"
  },
  {
    "type": "get",
    "url": "/api/teacher",
    "title": "Request User information",
    "name": "TeacherIndex",
    "group": "Teacher",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Json",
            "optional": false,
            "field": "Array",
            "description": "<p>with all teachers in siystem</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/TeacherController.php",
    "groupTitle": "Teacher"
  },
  {
    "type": "get",
    "url": "/api/teacher",
    "title": "Request User information",
    "name": "TeacherShow",
    "group": "Teacher",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Json",
            "optional": false,
            "field": "Teacher",
            "description": "<p>Object in Json</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/TeacherController.php",
    "groupTitle": "Teacher"
  },
  {
    "type": "post",
    "url": "/api/login",
    "title": "Request User information",
    "name": "UserLogin",
    "group": "User",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "user",
            "description": "<p>login</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Hash",
            "description": ""
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/UserController.php",
    "groupTitle": "User"
  }
] });
