Access key ID :AKIA4Y3ZKB56BQQSCQNE
Secret access key:  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.
 arn:aws:iam::878038355836:user/final-year-user

 bucket policy
 {
    "Version": "2012-10-17",
    "Id": "Policy1488494182833",
    "Statement": [
        {
            "Sid": "Stmt1488493308547",
            "Effect": "Allow",
            "Principal": {
                "AWS": "arn:aws:iam::281979644754:user/sample-user"
            },
            "Action": [
                "s3:ListBucket",
                "s3:ListBucketVersions",
                "s3:GetBucketLocation",
                "s3:Get*",
                "s3:Put*"
            ],
            "Resource": "arn:aws:s3:::img-bucket-00123"
        }
    ]
}