<?php
namespace ILABAmazon\DirectConnect;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Direct Connect** service.
 *
 * @method \ILABAmazon\Result acceptDirectConnectGatewayAssociationProposal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptDirectConnectGatewayAssociationProposalAsync(array $args = [])
 * @method \ILABAmazon\Result allocateConnectionOnInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateConnectionOnInterconnectAsync(array $args = [])
 * @method \ILABAmazon\Result allocateHostedConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateHostedConnectionAsync(array $args = [])
 * @method \ILABAmazon\Result allocatePrivateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocatePrivateVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result allocatePublicVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocatePublicVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result allocateTransitVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateTransitVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result associateConnectionWithLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConnectionWithLagAsync(array $args = [])
 * @method \ILABAmazon\Result associateHostedConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateHostedConnectionAsync(array $args = [])
 * @method \ILABAmazon\Result associateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result confirmConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmConnectionAsync(array $args = [])
 * @method \ILABAmazon\Result confirmPrivateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmPrivateVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result confirmPublicVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmPublicVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result confirmTransitVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmTransitVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result createBGPPeer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBGPPeerAsync(array $args = [])
 * @method \ILABAmazon\Result createConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \ILABAmazon\Result createDirectConnectGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectConnectGatewayAsync(array $args = [])
 * @method \ILABAmazon\Result createDirectConnectGatewayAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result createDirectConnectGatewayAssociationProposal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectConnectGatewayAssociationProposalAsync(array $args = [])
 * @method \ILABAmazon\Result createInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInterconnectAsync(array $args = [])
 * @method \ILABAmazon\Result createLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLagAsync(array $args = [])
 * @method \ILABAmazon\Result createPrivateVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPrivateVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result createPublicVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPublicVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result createTransitVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTransitVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBGPPeer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBGPPeerAsync(array $args = [])
 * @method \ILABAmazon\Result deleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDirectConnectGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDirectConnectGatewayAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDirectConnectGatewayAssociationProposal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAssociationProposalAsync(array $args = [])
 * @method \ILABAmazon\Result deleteInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInterconnectAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLagAsync(array $args = [])
 * @method \ILABAmazon\Result deleteVirtualInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVirtualInterfaceAsync(array $args = [])
 * @method \ILABAmazon\Result describeConnectionLoa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionLoaAsync(array $args = [])
 * @method \ILABAmazon\Result describeConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeConnectionsOnInterconnect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsOnInterconnectAsync(array $args = [])
 * @method \ILABAmazon\Result describeDirectConnectGatewayAssociationProposals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewayAssociationProposalsAsync(array $args = [])
 * @method \ILABAmazon\Result describeDirectConnectGatewayAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewayAssociationsAsync(array $args = [])
 * @method \ILABAmazon\Result describeDirectConnectGatewayAttachments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewayAttachmentsAsync(array $args = [])
 * @method \ILABAmazon\Result describeDirectConnectGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectConnectGatewaysAsync(array $args = [])
 * @method \ILABAmazon\Result describeHostedConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHostedConnectionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeInterconnectLoa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInterconnectLoaAsync(array $args = [])
 * @method \ILABAmazon\Result describeInterconnects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInterconnectsAsync(array $args = [])
 * @method \ILABAmazon\Result describeLags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLagsAsync(array $args = [])
 * @method \ILABAmazon\Result describeLoa(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoaAsync(array $args = [])
 * @method \ILABAmazon\Result describeLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationsAsync(array $args = [])
 * @method \ILABAmazon\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILABAmazon\Result describeVirtualGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualGatewaysAsync(array $args = [])
 * @method \ILABAmazon\Result describeVirtualInterfaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualInterfacesAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateConnectionFromLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectionFromLagAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateDirectConnectGatewayAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result updateLag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLagAsync(array $args = [])
 * @method \ILABAmazon\Result updateVirtualInterfaceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVirtualInterfaceAttributesAsync(array $args = [])
 */
class DirectConnectClient extends AwsClient {}
