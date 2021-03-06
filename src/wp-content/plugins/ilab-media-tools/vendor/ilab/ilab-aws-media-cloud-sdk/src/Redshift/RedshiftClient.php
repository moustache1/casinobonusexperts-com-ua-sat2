<?php
namespace ILABAmazon\Redshift;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Redshift** service.
 *
 * @method \ILABAmazon\Result acceptReservedNodeExchange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptReservedNodeExchangeAsync(array $args = [])
 * @method \ILABAmazon\Result authorizeClusterSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeClusterSecurityGroupIngressAsync(array $args = [])
 * @method \ILABAmazon\Result authorizeSnapshotAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeSnapshotAccessAsync(array $args = [])
 * @method \ILABAmazon\Result batchDeleteClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteClusterSnapshotsAsync(array $args = [])
 * @method \ILABAmazon\Result batchModifyClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchModifyClusterSnapshotsAsync(array $args = [])
 * @method \ILABAmazon\Result cancelResize(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelResizeAsync(array $args = [])
 * @method \ILABAmazon\Result copyClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyClusterSnapshotAsync(array $args = [])
 * @method \ILABAmazon\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \ILABAmazon\Result createClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterParameterGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createClusterSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSecurityGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSnapshotAsync(array $args = [])
 * @method \ILABAmazon\Result createClusterSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSubnetGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \ILABAmazon\Result createHsmClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmClientCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result createHsmConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result createSnapshotCopyGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotCopyGrantAsync(array $args = [])
 * @method \ILABAmazon\Result createSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotScheduleAsync(array $args = [])
 * @method \ILABAmazon\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \ILABAmazon\Result deleteClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterParameterGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteClusterSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSecurityGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSnapshotAsync(array $args = [])
 * @method \ILABAmazon\Result deleteClusterSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSubnetGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteHsmClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmClientCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result deleteHsmConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSnapshotCopyGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotCopyGrantAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \ILABAmazon\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \ILABAmazon\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterDbRevisions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterDbRevisionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterParameterGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterParametersAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterSecurityGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterSnapshotsAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterSubnetGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterTracks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterTracksAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \ILABAmazon\Result describeDefaultClusterParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultClusterParametersAsync(array $args = [])
 * @method \ILABAmazon\Result describeEventCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \ILABAmazon\Result describeEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \ILABAmazon\Result describeHsmClientCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmClientCertificatesAsync(array $args = [])
 * @method \ILABAmazon\Result describeHsmConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmConfigurationsAsync(array $args = [])
 * @method \ILABAmazon\Result describeLoggingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoggingStatusAsync(array $args = [])
 * @method \ILABAmazon\Result describeOrderableClusterOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableClusterOptionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeReservedNodeOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodeOfferingsAsync(array $args = [])
 * @method \ILABAmazon\Result describeReservedNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodesAsync(array $args = [])
 * @method \ILABAmazon\Result describeResize(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResizeAsync(array $args = [])
 * @method \ILABAmazon\Result describeSnapshotCopyGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotCopyGrantsAsync(array $args = [])
 * @method \ILABAmazon\Result describeSnapshotSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotSchedulesAsync(array $args = [])
 * @method \ILABAmazon\Result describeStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorageAsync(array $args = [])
 * @method \ILABAmazon\Result describeTableRestoreStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableRestoreStatusAsync(array $args = [])
 * @method \ILABAmazon\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILABAmazon\Result disableLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableLoggingAsync(array $args = [])
 * @method \ILABAmazon\Result disableSnapshotCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSnapshotCopyAsync(array $args = [])
 * @method \ILABAmazon\Result enableLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableLoggingAsync(array $args = [])
 * @method \ILABAmazon\Result enableSnapshotCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSnapshotCopyAsync(array $args = [])
 * @method \ILABAmazon\Result getClusterCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterCredentialsAsync(array $args = [])
 * @method \ILABAmazon\Result getReservedNodeExchangeOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReservedNodeExchangeOfferingsAsync(array $args = [])
 * @method \ILABAmazon\Result modifyCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterDbRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterDbRevisionAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterIamRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterIamRolesAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterMaintenance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterMaintenanceAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterParameterGroupAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterSnapshotAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterSnapshotScheduleAsync(array $args = [])
 * @method \ILABAmazon\Result modifyClusterSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterSubnetGroupAsync(array $args = [])
 * @method \ILABAmazon\Result modifyEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \ILABAmazon\Result modifySnapshotCopyRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnapshotCopyRetentionPeriodAsync(array $args = [])
 * @method \ILABAmazon\Result modifySnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnapshotScheduleAsync(array $args = [])
 * @method \ILABAmazon\Result purchaseReservedNodeOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedNodeOfferingAsync(array $args = [])
 * @method \ILABAmazon\Result rebootCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootClusterAsync(array $args = [])
 * @method \ILABAmazon\Result resetClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetClusterParameterGroupAsync(array $args = [])
 * @method \ILABAmazon\Result resizeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resizeClusterAsync(array $args = [])
 * @method \ILABAmazon\Result restoreFromClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreFromClusterSnapshotAsync(array $args = [])
 * @method \ILABAmazon\Result restoreTableFromClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreTableFromClusterSnapshotAsync(array $args = [])
 * @method \ILABAmazon\Result revokeClusterSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeClusterSecurityGroupIngressAsync(array $args = [])
 * @method \ILABAmazon\Result revokeSnapshotAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeSnapshotAccessAsync(array $args = [])
 * @method \ILABAmazon\Result rotateEncryptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateEncryptionKeyAsync(array $args = [])
 */
class RedshiftClient extends AwsClient {}
