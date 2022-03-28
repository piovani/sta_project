# Posterr

## How to Start the Project
1 - copy the .env.example file and name it to .env:
```
cp .env.example .env
```

2 - run the command:
```
docker-compose up -d
```

3 - create the database:
```
docker exec -it back php artisan migrate:refresh --seed
```

4 - import postman request collection, file path:
```
doc/Sta.postman_collection.json
```

5 - test the requests


## Planning
### Doubts
1 - there is a limit of mentions?
2 - needs to be authorized by the mentioned user
3 - can all users mention other users?

### solution
At the time of publication of the post, I would identify all users mentioned, put in one more field "mentions".   
Create a table "users mentions" and put the post id, the user who mentioned it and the user who was mentioned.
So in future searches to become faster and easier to locate these mentions.

## Self-critique and Scaling
Would not use laravel framework, better use the DDD.
maybe I wouldn't even use PHP.
The Services logic was very good, but very dependent on the Eloquent technology that comes from Laravel. Not leaving it possible to be reused if you need to change technology.
Greater test coverage.
