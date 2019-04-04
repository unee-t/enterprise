prep:
	composer install --optimize-autoloader --no-dev

dev:
	AWS_PROFILE=uneet-$@; sam package --output-template-file packaged.yaml --s3-bucket dev-media-unee-t
	AWS_PROFILE=uneet-$@; sam deploy --template-file packaged.yaml --stack-name enterprise --capabilities CAPABILITY_IAM --region ap-southeast-1

demo: 
	AWS_PROFILE=uneet-$@; sam package --output-template-file packaged.yaml --s3-bucket demo-media-unee-t
	AWS_PROFILE=uneet-$@; sam deploy --template-file packaged.yaml --stack-name enterprise --capabilities CAPABILITY_IAM --region ap-southeast-1

prod: prep
	AWS_PROFILE=uneet-$@; sam package --output-template-file packaged.yaml --s3-bucket prod-media-unee-t
	AWS_PROFILE=uneet-$@; sam deploy --template-file packaged.yaml --stack-name enterprise --capabilities CAPABILITY_IAM --region ap-southeast-1

localdev:
	sam local start-api
