sam: export AWS_PROFILE = uneet-dev
	sam package     --output-template-file packaged.yaml --s3-bucket php-sls-test
	sam deploy     --template-file packaged.yaml     --stack-name sam-app     --capabilities CAPABILITY_IAM     --region ap-southeast-1
