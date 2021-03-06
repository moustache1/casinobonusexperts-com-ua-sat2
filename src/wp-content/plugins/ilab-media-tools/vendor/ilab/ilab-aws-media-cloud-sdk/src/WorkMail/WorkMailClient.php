<?php
namespace ILABAmazon\WorkMail;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkMail** service.
 * @method \ILABAmazon\Result associateDelegateToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDelegateToResourceAsync(array $args = [])
 * @method \ILABAmazon\Result associateMemberToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMemberToGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \ILABAmazon\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \ILABAmazon\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \ILABAmazon\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteMailboxPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMailboxPermissionsAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \ILABAmazon\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \ILABAmazon\Result deregisterFromWorkMail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterFromWorkMailAsync(array $args = [])
 * @method \ILABAmazon\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \ILABAmazon\Result describeOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationAsync(array $args = [])
 * @method \ILABAmazon\Result describeResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceAsync(array $args = [])
 * @method \ILABAmazon\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateDelegateFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDelegateFromResourceAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateMemberFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberFromGroupAsync(array $args = [])
 * @method \ILABAmazon\Result getMailboxDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMailboxDetailsAsync(array $args = [])
 * @method \ILABAmazon\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \ILABAmazon\Result listGroupMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupMembersAsync(array $args = [])
 * @method \ILABAmazon\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result listMailboxPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMailboxPermissionsAsync(array $args = [])
 * @method \ILABAmazon\Result listOrganizations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationsAsync(array $args = [])
 * @method \ILABAmazon\Result listResourceDelegates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDelegatesAsync(array $args = [])
 * @method \ILABAmazon\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILABAmazon\Result putMailboxPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMailboxPermissionsAsync(array $args = [])
 * @method \ILABAmazon\Result registerToWorkMail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerToWorkMailAsync(array $args = [])
 * @method \ILABAmazon\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \ILABAmazon\Result updateMailboxQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMailboxQuotaAsync(array $args = [])
 * @method \ILABAmazon\Result updatePrimaryEmailAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePrimaryEmailAddressAsync(array $args = [])
 * @method \ILABAmazon\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 */
class WorkMailClient extends AwsClient {}
