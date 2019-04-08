prep:
	composer install --optimize-autoloader --no-dev

dev:
	export AWS_PROFILE=uneet-$@; sam package --output-template-file packaged.yaml --s3-bucket dev-media-unee-t
	export AWS_PROFILE=uneet-$@; sam deploy --template-file packaged.yaml --stack-name enterprise --capabilities CAPABILITY_IAM --region ap-southeast-1

demo: 
	export AWS_PROFILE=uneet-$@; sam package --output-template-file packaged.yaml --s3-bucket demo-media-unee-t
	export AWS_PROFILE=uneet-$@; sam deploy --template-file packaged.yaml --stack-name enterprise --capabilities CAPABILITY_IAM --region ap-southeast-1

prod: prep
	export AWS_PROFILE=uneet-$@; sam package --output-template-file packaged.yaml --s3-bucket prod-media-unee-t
	export AWS_PROFILE=uneet-$@; sam deploy --template-file packaged.yaml --stack-name enterprise --capabilities CAPABILITY_IAM --region ap-southeast-1

localdev:
	export AWS_PROFILE=uneet-dev; sam local start-api

devlogs:
	export AWS_PROFILE=uneet-dev; sam logs --name enterprise --tail
