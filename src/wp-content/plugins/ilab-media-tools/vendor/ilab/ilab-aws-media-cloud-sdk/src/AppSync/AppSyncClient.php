<?php
namespace ILABAmazon\AppSync;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS AppSync** service.
 * @method \ILABAmazon\Result createApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \ILABAmazon\Result createDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \ILABAmazon\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result createGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGraphqlApiAsync(array $args = [])
 * @method \ILABAmazon\Result createResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverAsync(array $args = [])
 * @method \ILABAmazon\Result createType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTypeAsync(array $args = [])
 * @method \ILABAmazon\Result deleteApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGraphqlApiAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverAsync(array $args = [])
 * @method \ILABAmazon\Result deleteType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTypeAsync(array $args = [])
 * @method \ILABAmazon\Result getDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataSourceAsync(array $args = [])
 * @method \ILABAmazon\Result getFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result getGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGraphqlApiAsync(array $args = [])
 * @method \ILABAmazon\Result getIntrospectionSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntrospectionSchemaAsync(array $args = [])
 * @method \ILABAmazon\Result getResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverAsync(array $args = [])
 * @method \ILABAmazon\Result getSchemaCreationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaCreationStatusAsync(array $args = [])
 * @method \ILABAmazon\Result getType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTypeAsync(array $args = [])
 * @method \ILABAmazon\Result listApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApiKeysAsync(array $args = [])
 * @method \ILABAmazon\Result listDataSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \ILABAmazon\Result listGraphqlApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGraphqlApisAsync(array $args = [])
 * @method \ILABAmazon\Result listResolvers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolversAsync(array $args = [])
 * @method \ILABAmazon\Result listResolversByFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolversByFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypesAsync(array $args = [])
 * @method \ILABAmazon\Result startSchemaCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSchemaCreationAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \ILABAmazon\Result updateDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result updateGraphqlApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGraphqlApiAsync(array $args = [])
 * @method \ILABAmazon\Result updateResolver(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverAsync(array $args = [])
 * @method \ILABAmazon\Result updateType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTypeAsync(array $args = [])
 */
class AppSyncClient extends AwsClient {}