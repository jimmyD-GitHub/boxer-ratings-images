# boxer-ratings-images
A repository containing all of the boxer thumbnail jpg images used by BoxeRatings.com.

## Development
This application acts an image server (nginx) for the Docker development environment. Use docker-compose to build 
and run it from your docker host:

```shell script
$ docker-compose up --build -d
```

To push a rebuilt version of the image just do:

```shell script
$ docker push jimmydockerhub/boxer-ratings-images:latest
```

## Production

TODO: Probably just bang them in an S3 bucket.