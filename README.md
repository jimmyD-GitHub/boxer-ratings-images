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

The images are served from this S3 bucket:

```https://s3.console.aws.amazon.com/s3/buckets/images.boxeratings.com/?region=us-west-2&tab=overview```

## Deployment

To push the images in the /public directory to S3, the following AWS credentials are required:

```text
[default]
aws_access_key_id = <<KEY_ID>>
aws_secret_access_key = <<ACCESS_KEY>>
```

These setting must be stored in **~/.aws/credentials**