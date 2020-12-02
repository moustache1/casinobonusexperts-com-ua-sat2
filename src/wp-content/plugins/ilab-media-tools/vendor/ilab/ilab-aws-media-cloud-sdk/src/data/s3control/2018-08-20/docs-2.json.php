<?php
// This file was auto-generated from sdk-root/src/data/s3control/2018-08-20/docs-2.json
return [ 'version' => '2.0', 'service' => '<p> AWS S3 Control provides access to Amazon S3 control plane operations. </p>', 'operations' => [ 'CreateJob' => '<p>Creates an Amazon S3 batch operations job.</p>', 'DeletePublicAccessBlock' => '<p>Deletes the block public access configuration for the specified account.</p>', 'DescribeJob' => '<p>Retrieves the configuration parameters and status for a batch operations job.</p>', 'GetPublicAccessBlock' => '<p/>', 'ListJobs' => '<p>Lists current jobs and jobs that have ended within the last 30 days for the AWS account making the request.</p>', 'PutPublicAccessBlock' => '<p/>', 'UpdateJobPriority' => '<p>Updates an existing job\'s priority.</p>', 'UpdateJobStatus' => '<p>Updates the status for the specified job. Use this operation to confirm that you want to run a job or to cancel an existing job.</p>', ], 'shapes' => [ 'AccountId' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$AccountId' => '<p/>', 'DeletePublicAccessBlockRequest$AccountId' => '<p>The account ID for the AWS account whose block public access configuration you want to delete.</p>', 'DescribeJobRequest$AccountId' => '<p/>', 'GetPublicAccessBlockRequest$AccountId' => '<p/>', 'ListJobsRequest$AccountId' => '<p/>', 'PutPublicAccessBlockRequest$AccountId' => '<p/>', 'UpdateJobPriorityRequest$AccountId' => '<p/>', 'UpdateJobStatusRequest$AccountId' => '<p/>', ], ], 'BadRequestException' => [ 'base' => '<p/>', 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'JobReport$Enabled' => '<p>Indicates whether the specified job will generate a job-completion report.</p>', 'S3CopyObjectOperation$RequesterPays' => '<p/>', 'S3ObjectMetadata$RequesterCharged' => '<p/>', ], ], 'ConfirmationRequired' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$ConfirmationRequired' => '<p>Indicates whether confirmation is required before Amazon S3 runs the job. Confirmation is only required for jobs created through the Amazon S3 console.</p>', 'JobDescriptor$ConfirmationRequired' => '<p>Indicates whether confirmation is required before Amazon S3 begins running the specified job. Confirmation is required only for jobs created through the Amazon S3 console.</p>', ], ], 'CreateJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateJobResult' => [ 'base' => NULL, 'refs' => [], ], 'DeletePublicAccessBlockRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeJobResult' => [ 'base' => NULL, 'refs' => [], ], 'ExceptionMessage' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$Message' => NULL, 'IdempotencyException$Message' => NULL, 'InternalServiceException$Message' => NULL, 'InvalidNextTokenException$Message' => NULL, 'InvalidRequestException$Message' => NULL, 'JobStatusException$Message' => NULL, 'NotFoundException$Message' => NULL, 'TooManyRequestsException$Message' => NULL, ], ], 'GetPublicAccessBlockOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetPublicAccessBlockRequest' => [ 'base' => NULL, 'refs' => [], ], 'IAMRoleArn' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$RoleArn' => '<p>The Amazon Resource Name (ARN) for the Identity and Access Management (IAM) Role that batch operations will use to execute this job\'s operation on each object in the manifest.</p>', 'JobDescriptor$RoleArn' => '<p>The Amazon Resource Name (ARN) for the Identity and Access Management (IAM) Role assigned to execute the tasks for this job.</p>', ], ], 'IdempotencyException' => [ 'base' => '<p/>', 'refs' => [], ], 'InternalServiceException' => [ 'base' => '<p/>', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => '<p/>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p/>', 'refs' => [], ], 'JobArn' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$JobArn' => '<p>The Amazon Resource Name (ARN) for this job.</p>', ], ], 'JobCreationTime' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$CreationTime' => '<p>A timestamp indicating when this job was created.</p>', 'JobListDescriptor$CreationTime' => '<p>A timestamp indicating when the specified job was created.</p>', ], ], 'JobDescriptor' => [ 'base' => '<p>A container element for the job configuration and status information returned by a <code>Describe Job</code> request.</p>', 'refs' => [ 'DescribeJobResult$Job' => '<p>Contains the configuration parameters and status for the job specified in the <code>Describe Job</code> request.</p>', ], ], 'JobFailure' => [ 'base' => '<p>If this job failed, this element indicates why the job failed.</p>', 'refs' => [ 'JobFailureList$member' => NULL, ], ], 'JobFailureCode' => [ 'base' => NULL, 'refs' => [ 'JobFailure$FailureCode' => '<p>The failure code, if any, for the specified job.</p>', ], ], 'JobFailureList' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$FailureReasons' => '<p>If the specified job failed, this field contains information describing the failure.</p>', ], ], 'JobFailureReason' => [ 'base' => NULL, 'refs' => [ 'JobFailure$FailureReason' => '<p>The failure reason, if any, for the specified job.</p>', ], ], 'JobId' => [ 'base' => NULL, 'refs' => [ 'CreateJobResult$JobId' => '<p>The ID for this job. Amazon S3 generates this ID automatically and returns it after a successful <code>Create Job</code> request.</p>', 'DescribeJobRequest$JobId' => '<p>The ID for the job whose information you want to retrieve.</p>', 'JobDescriptor$JobId' => '<p>The ID for the specified job.</p>', 'JobListDescriptor$JobId' => '<p>The ID for the specified job.</p>', 'UpdateJobPriorityRequest$JobId' => '<p>The ID for the job whose priority you want to update.</p>', 'UpdateJobPriorityResult$JobId' => '<p>The ID for the job whose priority Amazon S3 updated.</p>', 'UpdateJobStatusRequest$JobId' => '<p>The ID of the job whose status you want to update.</p>', 'UpdateJobStatusResult$JobId' => '<p>The ID for the job whose status was updated.</p>', ], ], 'JobListDescriptor' => [ 'base' => '<p>Contains the configuration and status information for a single job retrieved as part of a job list.</p>', 'refs' => [ 'JobListDescriptorList$member' => NULL, ], ], 'JobListDescriptorList' => [ 'base' => NULL, 'refs' => [ 'ListJobsResult$Jobs' => '<p>The list of current jobs and jobs that have ended within the last 30 days.</p>', ], ], 'JobManifest' => [ 'base' => '<p>Contains the configuration information for a job\'s manifest.</p>', 'refs' => [ 'CreateJobRequest$Manifest' => '<p>Configuration parameters for the manifest.</p>', 'JobDescriptor$Manifest' => '<p>The configuration information for the specified job\'s manifest object.</p>', ], ], 'JobManifestFieldList' => [ 'base' => NULL, 'refs' => [ 'JobManifestSpec$Fields' => '<p>If the specified manifest object is in the <code>S3BatchOperations_CSV_20180820</code> format, this element describes which columns contain the required data.</p>', ], ], 'JobManifestFieldName' => [ 'base' => NULL, 'refs' => [ 'JobManifestFieldList$member' => NULL, ], ], 'JobManifestFormat' => [ 'base' => NULL, 'refs' => [ 'JobManifestSpec$Format' => '<p>Indicates which of the available formats the specified manifest uses.</p>', ], ], 'JobManifestLocation' => [ 'base' => '<p>Contains the information required to locate a manifest object.</p>', 'refs' => [ 'JobManifest$Location' => '<p>Contains the information required to locate the specified job\'s manifest.</p>', ], ], 'JobManifestSpec' => [ 'base' => '<p>Describes the format of a manifest. If the manifest is in CSV format, also describes the columns contained within the manifest.</p>', 'refs' => [ 'JobManifest$Spec' => '<p>Describes the format of the specified job\'s manifest. If the manifest is in CSV format, also describes the columns contained within the manifest.</p>', ], ], 'JobNumberOfTasksFailed' => [ 'base' => NULL, 'refs' => [ 'JobProgressSummary$NumberOfTasksFailed' => '<p/>', ], ], 'JobNumberOfTasksSucceeded' => [ 'base' => NULL, 'refs' => [ 'JobProgressSummary$NumberOfTasksSucceeded' => '<p/>', ], ], 'JobOperation' => [ 'base' => '<p>The operation that you want this job to perform on each object listed in the manifest. For more information about the available operations, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/batch-ops-operations.html">Available Operations</a> in the <i>Amazon Simple Storage Service Developer Guide</i>.</p>', 'refs' => [ 'CreateJobRequest$Operation' => '<p>The operation that you want this job to perform on each object listed in the manifest. For more information about the available operations, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/batch-ops-operations.html">Available Operations</a> in the <i>Amazon Simple Storage Service Developer Guide</i>.</p>', 'JobDescriptor$Operation' => '<p>The operation that the specified job is configured to execute on the objects listed in the manifest.</p>', ], ], 'JobPriority' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$Priority' => '<p>The numerical priority for this job. Higher numbers indicate higher priority.</p>', 'JobDescriptor$Priority' => '<p>The priority of the specified job.</p>', 'JobListDescriptor$Priority' => '<p>The current priority for the specified job.</p>', 'UpdateJobPriorityRequest$Priority' => '<p>The priority you want to assign to this job.</p>', 'UpdateJobPriorityResult$Priority' => '<p>The new priority assigned to the specified job.</p>', ], ], 'JobProgressSummary' => [ 'base' => '<p>Describes the total number of tasks that the specified job has executed, the number of tasks that succeeded, and the number of tasks that failed.</p>', 'refs' => [ 'JobDescriptor$ProgressSummary' => '<p>Describes the total number of tasks that the specified job has executed, the number of tasks that succeeded, and the number of tasks that failed.</p>', 'JobListDescriptor$ProgressSummary' => '<p>Describes the total number of tasks that the specified job has executed, the number of tasks that succeeded, and the number of tasks that failed.</p>', ], ], 'JobReport' => [ 'base' => '<p>Contains the configuration parameters for a job-completion report.</p>', 'refs' => [ 'CreateJobRequest$Report' => '<p>Configuration parameters for the optional job-completion report.</p>', 'JobDescriptor$Report' => '<p>Contains the configuration information for the job-completion report if you requested one in the <code>Create Job</code> request.</p>', ], ], 'JobReportFormat' => [ 'base' => NULL, 'refs' => [ 'JobReport$Format' => '<p>The format of the specified job-completion report.</p>', ], ], 'JobReportScope' => [ 'base' => NULL, 'refs' => [ 'JobReport$ReportScope' => '<p>Indicates whether the job-completion report will include details of all tasks or only failed tasks.</p>', ], ], 'JobStatus' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$Status' => '<p>The current status of the specified job.</p>', 'JobListDescriptor$Status' => '<p>The specified job\'s current status.</p>', 'JobStatusList$member' => NULL, 'UpdateJobStatusResult$Status' => '<p>The current status for the specified job.</p>', ], ], 'JobStatusException' => [ 'base' => '<p/>', 'refs' => [], ], 'JobStatusList' => [ 'base' => NULL, 'refs' => [ 'ListJobsRequest$JobStatuses' => '<p>The <code>List Jobs</code> request returns jobs that match the statuses listed in this element.</p>', ], ], 'JobStatusUpdateReason' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$StatusUpdateReason' => '<p/>', 'UpdateJobStatusRequest$StatusUpdateReason' => '<p>A description of the reason why you want to change the specified job\'s status. This field can be any string up to the maximum length.</p>', 'UpdateJobStatusResult$StatusUpdateReason' => '<p>The reason that the specified job\'s status was updated.</p>', ], ], 'JobTerminationDate' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$TerminationDate' => '<p>A timestamp indicating when this job terminated. A job\'s termination date is the date and time when it succeeded, failed, or was canceled.</p>', 'JobListDescriptor$TerminationDate' => '<p>A timestamp indicating when the specified job terminated. A job\'s termination date is the date and time when it succeeded, failed, or was canceled.</p>', ], ], 'JobTotalNumberOfTasks' => [ 'base' => NULL, 'refs' => [ 'JobProgressSummary$TotalNumberOfTasks' => '<p/>', ], ], 'KmsKeyArnString' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$SSEAwsKmsKeyId' => '<p/>', ], ], 'LambdaInvokeOperation' => [ 'base' => '<p>Contains the configuration parameters for a <code>Lambda Invoke</code> operation.</p>', 'refs' => [ 'JobOperation$LambdaInvoke' => '<p>Directs the specified job to invoke an AWS Lambda function on each object in the manifest.</p>', ], ], 'ListJobsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListJobsResult' => [ 'base' => NULL, 'refs' => [], ], 'MaxLength1024String' => [ 'base' => NULL, 'refs' => [ 'S3Tag$Value' => '<p/>', 'S3UserMetadata$value' => NULL, ], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListJobsRequest$MaxResults' => '<p>The maximum number of jobs that Amazon S3 will include in the <code>List Jobs</code> response. If there are more jobs than this number, the response will include a pagination token in the <code>NextToken</code> field to enable you to retrieve the next page of results.</p>', ], ], 'NoSuchPublicAccessBlockConfiguration' => [ 'base' => '<p/>', 'refs' => [], ], 'NoSuchPublicAccessBlockConfigurationMessage' => [ 'base' => NULL, 'refs' => [ 'NoSuchPublicAccessBlockConfiguration$Message' => NULL, ], ], 'NonEmptyMaxLength1024String' => [ 'base' => NULL, 'refs' => [ 'JobManifestLocation$ETag' => '<p>The ETag for the specified manifest object.</p>', 'LambdaInvokeOperation$FunctionArn' => '<p>The Amazon Resource Name (ARN) for the AWS Lambda function that the specified job will invoke for each object in the manifest.</p>', 'ListJobsRequest$NextToken' => '<p>A pagination token to request the next page of results. Use the token that Amazon S3 returned in the <code>NextToken</code> element of the <code>ListJobsResult</code> from the previous <code>List Jobs</code> request.</p>', 'ListJobsResult$NextToken' => '<p>If the <code>List Jobs</code> request produced more than the maximum number of results, you can pass this value into a subsequent <code>List Jobs</code> request in order to retrieve the next page of results.</p>', 'S3CopyObjectOperation$TargetKeyPrefix' => NULL, 'S3Grantee$Identifier' => '<p/>', 'S3Grantee$DisplayName' => '<p/>', 'S3ObjectMetadata$CacheControl' => '<p/>', 'S3ObjectMetadata$ContentDisposition' => '<p/>', 'S3ObjectMetadata$ContentEncoding' => '<p/>', 'S3ObjectMetadata$ContentLanguage' => '<p/>', 'S3ObjectMetadata$ContentMD5' => '<p/>', 'S3ObjectMetadata$ContentType' => '<p/>', 'S3ObjectOwner$ID' => '<p/>', 'S3ObjectOwner$DisplayName' => '<p/>', 'S3Tag$Key' => '<p/>', 'S3UserMetadata$key' => NULL, ], ], 'NonEmptyMaxLength2048String' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$RedirectLocation' => '<p/>', ], ], 'NonEmptyMaxLength256String' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$Description' => '<p>A description for this job. You can use any string within the permitted length. Descriptions don\'t need to be unique and can be used for multiple jobs.</p>', 'JobDescriptor$Description' => '<p>The description for this job, if one was provided in this job\'s <code>Create Job</code> request.</p>', 'JobListDescriptor$Description' => '<p>The user-specified description that was included in the specified job\'s <code>Create Job</code> request.</p>', ], ], 'NonEmptyMaxLength64String' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$ClientRequestToken' => '<p>An idempotency token to ensure that you don\'t accidentally submit the same request twice. You can use any string up to the maximum length.</p>', ], ], 'NotFoundException' => [ 'base' => '<p/>', 'refs' => [], ], 'OperationName' => [ 'base' => NULL, 'refs' => [ 'JobListDescriptor$Operation' => '<p>The operation that the specified job is configured to run on each object listed in the manifest.</p>', ], ], 'PublicAccessBlockConfiguration' => [ 'base' => '<p/>', 'refs' => [ 'GetPublicAccessBlockOutput$PublicAccessBlockConfiguration' => '<p/>', 'PutPublicAccessBlockRequest$PublicAccessBlockConfiguration' => '<p/>', ], ], 'PutPublicAccessBlockRequest' => [ 'base' => NULL, 'refs' => [], ], 'ReportPrefixString' => [ 'base' => NULL, 'refs' => [ 'JobReport$Prefix' => '<p>An optional prefix to describe where in the specified bucket the job-completion report will be stored. Amazon S3 will store the job-completion report at &lt;prefix&gt;/job-&lt;job-id&gt;/report.json.</p>', ], ], 'RequestedJobStatus' => [ 'base' => NULL, 'refs' => [ 'UpdateJobStatusRequest$RequestedJobStatus' => '<p>The status that you want to move the specified job to.</p>', ], ], 'S3AccessControlList' => [ 'base' => '<p/>', 'refs' => [ 'S3AccessControlPolicy$AccessControlList' => '<p/>', ], ], 'S3AccessControlPolicy' => [ 'base' => '<p/>', 'refs' => [ 'S3SetObjectAclOperation$AccessControlPolicy' => '<p/>', ], ], 'S3BucketArnString' => [ 'base' => NULL, 'refs' => [ 'JobReport$Bucket' => '<p>The bucket where specified job-completion report will be stored.</p>', 'S3CopyObjectOperation$TargetResource' => '<p/>', ], ], 'S3CannedAccessControlList' => [ 'base' => NULL, 'refs' => [ 'S3AccessControlPolicy$CannedAccessControlList' => '<p/>', 'S3CopyObjectOperation$CannedAccessControlList' => '<p/>', ], ], 'S3ContentLength' => [ 'base' => NULL, 'refs' => [ 'S3ObjectMetadata$ContentLength' => '<p/>', ], ], 'S3CopyObjectOperation' => [ 'base' => '<p>Contains the configuration parameters for a PUT Copy object operation. Amazon S3 batch operations passes each value through to the underlying PUT Copy object API. For more information about the parameters for this operation, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectCOPY.html">PUT Object - Copy</a>.</p>', 'refs' => [ 'JobOperation$S3PutObjectCopy' => '<p>Directs the specified job to execute a PUT Copy object call on each object in the manifest.</p>', ], ], 'S3ExpirationInDays' => [ 'base' => NULL, 'refs' => [ 'S3InitiateRestoreObjectOperation$ExpirationInDays' => '<p/>', ], ], 'S3GlacierJobTier' => [ 'base' => NULL, 'refs' => [ 'S3InitiateRestoreObjectOperation$GlacierJobTier' => '<p/>', ], ], 'S3Grant' => [ 'base' => '<p/>', 'refs' => [ 'S3GrantList$member' => NULL, ], ], 'S3GrantList' => [ 'base' => NULL, 'refs' => [ 'S3AccessControlList$Grants' => '<p/>', 'S3CopyObjectOperation$AccessControlGrants' => '<p/>', ], ], 'S3Grantee' => [ 'base' => '<p/>', 'refs' => [ 'S3Grant$Grantee' => '<p/>', ], ], 'S3GranteeTypeIdentifier' => [ 'base' => NULL, 'refs' => [ 'S3Grantee$TypeIdentifier' => '<p/>', ], ], 'S3InitiateRestoreObjectOperation' => [ 'base' => '<p>Contains the configuration parameters for an Initiate Glacier Restore job. Amazon S3 batch operations passes each value through to the underlying POST Object restore API. For more information about the parameters for this operation, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectPOSTrestore.html#RESTObjectPOSTrestore-restore-request">Restoring Archives</a>.</p>', 'refs' => [ 'JobOperation$S3InitiateRestoreObject' => '<p>Directs the specified job to execute an Initiate Glacier Restore call on each object in the manifest.</p>', ], ], 'S3KeyArnString' => [ 'base' => NULL, 'refs' => [ 'JobManifestLocation$ObjectArn' => '<p>The Amazon Resource Name (ARN) for a manifest object.</p>', ], ], 'S3MetadataDirective' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$MetadataDirective' => '<p/>', ], ], 'S3ObjectLockLegalHoldStatus' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$ObjectLockLegalHoldStatus' => NULL, ], ], 'S3ObjectLockMode' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$ObjectLockMode' => NULL, ], ], 'S3ObjectMetadata' => [ 'base' => '<p/>', 'refs' => [ 'S3CopyObjectOperation$NewObjectMetadata' => '<p/>', ], ], 'S3ObjectOwner' => [ 'base' => '<p/>', 'refs' => [ 'S3AccessControlList$Owner' => '<p/>', ], ], 'S3ObjectVersionId' => [ 'base' => NULL, 'refs' => [ 'JobManifestLocation$ObjectVersionId' => '<p>The optional version ID to identify a specific version of the manifest object.</p>', ], ], 'S3Permission' => [ 'base' => NULL, 'refs' => [ 'S3Grant$Permission' => '<p/>', ], ], 'S3SSEAlgorithm' => [ 'base' => NULL, 'refs' => [ 'S3ObjectMetadata$SSEAlgorithm' => '<p/>', ], ], 'S3SetObjectAclOperation' => [ 'base' => '<p>Contains the configuration parameters for a Set Object ACL operation. Amazon S3 batch operations passes each value through to the underlying PUT Object acl API. For more information about the parameters for this operation, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectPUTacl.html">PUT Object acl</a>.</p>', 'refs' => [ 'JobOperation$S3PutObjectAcl' => '<p>Directs the specified job to execute a PUT Object acl call on each object in the manifest.</p>', ], ], 'S3SetObjectTaggingOperation' => [ 'base' => '<p>Contains the configuration parameters for a Set Object Tagging operation. Amazon S3 batch operations passes each value through to the underlying PUT Object tagging API. For more information about the parameters for this operation, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectPUTtagging.html">PUT Object tagging</a>.</p>', 'refs' => [ 'JobOperation$S3PutObjectTagging' => '<p>Directs the specified job to execute a PUT Object tagging call on each object in the manifest.</p>', ], ], 'S3StorageClass' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$StorageClass' => '<p/>', ], ], 'S3Tag' => [ 'base' => '<p/>', 'refs' => [ 'S3TagSet$member' => NULL, ], ], 'S3TagSet' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$NewObjectTagging' => '<p/>', 'S3SetObjectTaggingOperation$TagSet' => '<p/>', ], ], 'S3UserMetadata' => [ 'base' => NULL, 'refs' => [ 'S3ObjectMetadata$UserMetadata' => '<p/>', ], ], 'Setting' => [ 'base' => NULL, 'refs' => [ 'PublicAccessBlockConfiguration$BlockPublicAcls' => '<p/>', 'PublicAccessBlockConfiguration$IgnorePublicAcls' => '<p/>', 'PublicAccessBlockConfiguration$BlockPublicPolicy' => '<p/>', 'PublicAccessBlockConfiguration$RestrictPublicBuckets' => '<p/>', ], ], 'SuspendedCause' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$SuspendedCause' => '<p>The reason why the specified job was suspended. A job is only suspended if you create it through the Amazon S3 console. When you create the job, it enters the <code>Suspended</code> state to await confirmation before running. After you confirm the job, it automatically exits the <code>Suspended</code> state.</p>', ], ], 'SuspendedDate' => [ 'base' => NULL, 'refs' => [ 'JobDescriptor$SuspendedDate' => '<p>The timestamp when this job was suspended, if it has been suspended.</p>', ], ], 'TimeStamp' => [ 'base' => NULL, 'refs' => [ 'S3CopyObjectOperation$ModifiedSinceConstraint' => '<p/>', 'S3CopyObjectOperation$UnModifiedSinceConstraint' => '<p/>', 'S3CopyObjectOperation$ObjectLockRetainUntilDate' => NULL, 'S3ObjectMetadata$HttpExpiresDate' => '<p/>', ], ], 'TooManyRequestsException' => [ 'base' => '<p/>', 'refs' => [], ], 'UpdateJobPriorityRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateJobPriorityResult' => [ 'base' => NULL, 'refs' => [], ], 'UpdateJobStatusRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateJobStatusResult' => [ 'base' => NULL, 'refs' => [], ], ],];