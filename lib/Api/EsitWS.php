<?php

namespace Torchbox\Thankq\Api;

class EsitWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'doCommunicationInsert' => 'Torchbox\\Thankq\\Api\\doCommunicationInsert',
      'esitWScommunication' => 'Torchbox\\Thankq\\Api\\esitWScommunication',
      'baseDataType' => 'Torchbox\\Thankq\\Api\\baseDataType',
      'doCommunicationInsertResponse' => 'Torchbox\\Thankq\\Api\\doCommunicationInsertResponse',
      'doContactCommitteeGet' => 'Torchbox\\Thankq\\Api\\doContactCommitteeGet',
      'esitWSdoContactCommitteeGetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactCommitteeGetArgument',
      'doContactCommitteeGetResponse' => 'Torchbox\\Thankq\\Api\\doContactCommitteeGetResponse',
      'esitWSdoContactCommitteeGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactCommitteeGetResult',
      'ArrayOfEsitWScontactCommitee' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWScontactCommitee',
      'esitWScontactCommitee' => 'Torchbox\\Thankq\\Api\\esitWScontactCommitee',
      'ArrayOfEsitWScontactCommiteeMember' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWScontactCommiteeMember',
      'esitWScontactCommiteeMember' => 'Torchbox\\Thankq\\Api\\esitWScontactCommiteeMember',
      'esitWScontact' => 'Torchbox\\Thankq\\Api\\esitWScontact',
      'esitWScontactAddress' => 'Torchbox\\Thankq\\Api\\esitWScontactAddress',
      'esitWScontactAttribute' => 'Torchbox\\Thankq\\Api\\esitWScontactAttribute',
      'esitWSrecordAudit' => 'Torchbox\\Thankq\\Api\\esitWSrecordAudit',
      'esitWScontactDataProtection' => 'Torchbox\\Thankq\\Api\\esitWScontactDataProtection',
      'doContactGet' => 'Torchbox\\Thankq\\Api\\doContactGet',
      'doContactGetResponse' => 'Torchbox\\Thankq\\Api\\doContactGetResponse',
      'esitWSdoContactGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactGetResult',
      'doContactGroupsGet' => 'Torchbox\\Thankq\\Api\\doContactGroupsGet',
      'doContactGroupsGetResponse' => 'Torchbox\\Thankq\\Api\\doContactGroupsGetResponse',
      'esitWSdoContactGroupsGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactGroupsGetResult',
      'ArrayOfEsitWSContactGroup' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSContactGroup',
      'esitWSContactGroup' => 'Torchbox\\Thankq\\Api\\esitWSContactGroup',
      'esitWSGroup' => 'Torchbox\\Thankq\\Api\\esitWSGroup',
      'doContactGroupsSet' => 'Torchbox\\Thankq\\Api\\doContactGroupsSet',
      'esitWSdoContactGroupsSetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactGroupsSetArgument',
      'ArrayOfEsitWSGroupSet' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSGroupSet',
      'esitWSGroupSet' => 'Torchbox\\Thankq\\Api\\esitWSGroupSet',
      'doContactGroupsSetResponse' => 'Torchbox\\Thankq\\Api\\doContactGroupsSetResponse',
      'doContactInsert' => 'Torchbox\\Thankq\\Api\\doContactInsert',
      'esitWSdoContactInsertArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactInsertArgument',
      'doContactInsertResponse' => 'Torchbox\\Thankq\\Api\\doContactInsertResponse',
      'esitWSdoContactInsertResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactInsertResult',
      'doContactLoginInsert' => 'Torchbox\\Thankq\\Api\\doContactLoginInsert',
      'esitWSdoContactLoginInsertArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactLoginInsertArgument',
      'doContactLoginInsertResponse' => 'Torchbox\\Thankq\\Api\\doContactLoginInsertResponse',
      'esitWSdoContactLoginInsertResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactLoginInsertResult',
      'doContactLoginPasswordChange' => 'Torchbox\\Thankq\\Api\\doContactLoginPasswordChange',
      'esitWSdoContactLoginPasswordChangeArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactLoginPasswordChangeArgument',
      'doContactLoginPasswordChangeResponse' => 'Torchbox\\Thankq\\Api\\doContactLoginPasswordChangeResponse',
      'esitWSdoContactLoginPasswordChangeResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactLoginPasswordChangeResult',
      'doContactLoginResetPassword' => 'Torchbox\\Thankq\\Api\\doContactLoginResetPassword',
      'doContactLoginResetPasswordResponse' => 'Torchbox\\Thankq\\Api\\doContactLoginResetPasswordResponse',
      'doContactMailingGet' => 'Torchbox\\Thankq\\Api\\doContactMailingGet',
      'doContactMailingGetResponse' => 'Torchbox\\Thankq\\Api\\doContactMailingGetResponse',
      'esitWSdoContactMailingGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactMailingGetResult',
      'ArrayOfEsitWScontactExtraAddress' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWScontactExtraAddress',
      'esitWScontactExtraAddress' => 'Torchbox\\Thankq\\Api\\esitWScontactExtraAddress',
      'ArrayOfEsitWSmailingPreferenceRecord' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSmailingPreferenceRecord',
      'esitWSmailingPreferenceRecord' => 'Torchbox\\Thankq\\Api\\esitWSmailingPreferenceRecord',
      'esitWSmailingPreference' => 'Torchbox\\Thankq\\Api\\esitWSmailingPreference',
      'ArrayOfEsitWSmailingPreference' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSmailingPreference',
      'doContactMailingSet' => 'Torchbox\\Thankq\\Api\\doContactMailingSet',
      'esitWSdoContactMailingSetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactMailingSetArgument',
      'doContactMailingSetResponse' => 'Torchbox\\Thankq\\Api\\doContactMailingSetResponse',
      'esitWSdoContactMailingSetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactMailingSetResult',
      'doContactSearch' => 'Torchbox\\Thankq\\Api\\doContactSearch',
      'esitWSdoContactSearchArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactSearchArgument',
      'esitWSrecordModified' => 'Torchbox\\Thankq\\Api\\esitWSrecordModified',
      'doContactSearchResponse' => 'Torchbox\\Thankq\\Api\\doContactSearchResponse',
      'esitWSdoContactSearchResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactSearchResult',
      'ArrayOfEsitWSdoContactSearchResultRecord' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSdoContactSearchResultRecord',
      'esitWSdoContactSearchResultRecord' => 'Torchbox\\Thankq\\Api\\esitWSdoContactSearchResultRecord',
      'doContactUpdate' => 'Torchbox\\Thankq\\Api\\doContactUpdate',
      'esitWSdoContactUpdateArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoContactUpdateArgument',
      'doContactUpdateResponse' => 'Torchbox\\Thankq\\Api\\doContactUpdateResponse',
      'esitWSdoContactUpdateResult' => 'Torchbox\\Thankq\\Api\\esitWSdoContactUpdateResult',
      'doDonateLookup' => 'Torchbox\\Thankq\\Api\\doDonateLookup',
      'doDonateLookupResponse' => 'Torchbox\\Thankq\\Api\\doDonateLookupResponse',
      'esitWSdoDonateLookupResult' => 'Torchbox\\Thankq\\Api\\esitWSdoDonateLookupResult',
      'ArrayOfEsitWSdonateSourceCode' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSdonateSourceCode',
      'esitWSdonateSourceCode' => 'Torchbox\\Thankq\\Api\\esitWSdonateSourceCode',
      'ArrayOfEsitWSdonateSourceCodeSuggestedDonation' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSdonateSourceCodeSuggestedDonation',
      'esitWSdonateSourceCodeSuggestedDonation' => 'Torchbox\\Thankq\\Api\\esitWSdonateSourceCodeSuggestedDonation',
      'ArrayOfEsitWSdestinationCode' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSdestinationCode',
      'esitWSdestinationCode' => 'Torchbox\\Thankq\\Api\\esitWSdestinationCode',
      'doDonateMemberInsert' => 'Torchbox\\Thankq\\Api\\doDonateMemberInsert',
      'esitWSdoDonateInsertArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoDonateInsertArgument',
      'esitWSdonation' => 'Torchbox\\Thankq\\Api\\esitWSdonation',
      'doDonateMemberInsertResponse' => 'Torchbox\\Thankq\\Api\\doDonateMemberInsertResponse',
      'esitWSdoDonateInsertResult' => 'Torchbox\\Thankq\\Api\\esitWSdoDonateInsertResult',
      'doEventLookupEvents' => 'Torchbox\\Thankq\\Api\\doEventLookupEvents',
      'doEventLookupEventsResponse' => 'Torchbox\\Thankq\\Api\\doEventLookupEventsResponse',
      'esitWSdoEventLookupEventResult' => 'Torchbox\\Thankq\\Api\\esitWSdoEventLookupEventResult',
      'ArrayOfEsitWSevent' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSevent',
      'esitWSevent' => 'Torchbox\\Thankq\\Api\\esitWSevent',
      'esitWSeventLocation' => 'Torchbox\\Thankq\\Api\\esitWSeventLocation',
      'ArrayOfEsitWSeventAttendeeType' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSeventAttendeeType',
      'esitWSeventAttendeeType' => 'Torchbox\\Thankq\\Api\\esitWSeventAttendeeType',
      'ArrayOfEsitWSeventStructure' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSeventStructure',
      'esitWSeventStructure' => 'Torchbox\\Thankq\\Api\\esitWSeventStructure',
      'doEventPublicInsert' => 'Torchbox\\Thankq\\Api\\doEventPublicInsert',
      'esitWSdoEventInsertBookingArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoEventInsertBookingArgument',
      'ArrayOfEsitWSeventBookingAttendee' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSeventBookingAttendee',
      'esitWSeventBookingAttendee' => 'Torchbox\\Thankq\\Api\\esitWSeventBookingAttendee',
      'doEventPublicInsertResponse' => 'Torchbox\\Thankq\\Api\\doEventPublicInsertResponse',
      'esitWSdoEventInsertBookingResult' => 'Torchbox\\Thankq\\Api\\esitWSdoEventInsertBookingResult',
      'doGiftAidGet' => 'Torchbox\\Thankq\\Api\\doGiftAidGet',
      'doGiftAidGetResponse' => 'Torchbox\\Thankq\\Api\\doGiftAidGetResponse',
      'esitWSdoGiftAidGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoGiftAidGetResult',
      'ArrayOfEsitWSGiftAid' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSGiftAid',
      'esitWSGiftAid' => 'Torchbox\\Thankq\\Api\\esitWSGiftAid',
      'doGiftAidInsert' => 'Torchbox\\Thankq\\Api\\doGiftAidInsert',
      'esitWSdoGiftAidInsertArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoGiftAidInsertArgument',
      'doGiftAidInsertResponse' => 'Torchbox\\Thankq\\Api\\doGiftAidInsertResponse',
      'doGiftAidUpdate' => 'Torchbox\\Thankq\\Api\\doGiftAidUpdate',
      'esitWSdoGiftAidUpdateArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoGiftAidUpdateArgument',
      'doGiftAidUpdateResponse' => 'Torchbox\\Thankq\\Api\\doGiftAidUpdateResponse',
      'doGroupGet' => 'Torchbox\\Thankq\\Api\\doGroupGet',
      'doGroupGetResponse' => 'Torchbox\\Thankq\\Api\\doGroupGetResponse',
      'esitWSdoGroupGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoGroupGetResult',
      'ArrayOfEsitWSGroupContact' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSGroupContact',
      'esitWSGroupContact' => 'Torchbox\\Thankq\\Api\\esitWSGroupContact',
      'doGroupsLookup' => 'Torchbox\\Thankq\\Api\\doGroupsLookup',
      'doGroupsLookupResponse' => 'Torchbox\\Thankq\\Api\\doGroupsLookupResponse',
      'esitWSdoGroupsLookupResult' => 'Torchbox\\Thankq\\Api\\esitWSdoGroupsLookupResult',
      'ArrayOfEsitWSGroup' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSGroup',
      'doLogin' => 'Torchbox\\Thankq\\Api\\doLogin',
      'doLoginResponse' => 'Torchbox\\Thankq\\Api\\doLoginResponse',
      'esitWSdoLoginResult' => 'Torchbox\\Thankq\\Api\\esitWSdoLoginResult',
      'doLookupGet' => 'Torchbox\\Thankq\\Api\\doLookupGet',
      'doLookupGetResponse' => 'Torchbox\\Thankq\\Api\\doLookupGetResponse',
      'esitWSdoLookupGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoLookupGetResult',
      'ArrayOfEsitWSlookup' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSlookup',
      'esitWSlookup' => 'Torchbox\\Thankq\\Api\\esitWSlookup',
      'doMailingPrefLookup' => 'Torchbox\\Thankq\\Api\\doMailingPrefLookup',
      'doMailingPrefLookupResponse' => 'Torchbox\\Thankq\\Api\\doMailingPrefLookupResponse',
      'esitWSdoMailingPrefLookupResult' => 'Torchbox\\Thankq\\Api\\esitWSdoMailingPrefLookupResult',
      'doMembershipGet' => 'Torchbox\\Thankq\\Api\\doMembershipGet',
      'esitWSdoMembershipGetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipGetArgument',
      'doMembershipGetResponse' => 'Torchbox\\Thankq\\Api\\doMembershipGetResponse',
      'esitWSdoMembershipGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipGetResult',
      'esitWSmembershipRecord' => 'Torchbox\\Thankq\\Api\\esitWSmembershipRecord',
      'esitWSmembershipAttribute' => 'Torchbox\\Thankq\\Api\\esitWSmembershipAttribute',
      'ArrayOfEsitWSmembershipContact' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSmembershipContact',
      'esitWSmembershipContact' => 'Torchbox\\Thankq\\Api\\esitWSmembershipContact',
      'ArrayOfEsitWSmembershipInstalment' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSmembershipInstalment',
      'esitWSmembershipInstalment' => 'Torchbox\\Thankq\\Api\\esitWSmembershipInstalment',
      'doMembershipLookup' => 'Torchbox\\Thankq\\Api\\doMembershipLookup',
      'doMembershipLookupResponse' => 'Torchbox\\Thankq\\Api\\doMembershipLookupResponse',
      'esitWSdoMembershipLookupResult' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipLookupResult',
      'ArrayOfEsitWSmembership' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSmembership',
      'esitWSmembership' => 'Torchbox\\Thankq\\Api\\esitWSmembership',
      'ArrayOfString' => 'Torchbox\\Thankq\\Api\\ArrayOfString',
      'doMembershipPay' => 'Torchbox\\Thankq\\Api\\doMembershipPay',
      'esitWSdoMembershipPay' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipPay',
      'doMembershipPayResponse' => 'Torchbox\\Thankq\\Api\\doMembershipPayResponse',
      'esitWSdoMembershipPayResult' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipPayResult',
      'doMembershipSearch' => 'Torchbox\\Thankq\\Api\\doMembershipSearch',
      'esitWSdoMembershipSearchArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipSearchArgument',
      'doMembershipSearchResponse' => 'Torchbox\\Thankq\\Api\\doMembershipSearchResponse',
      'esitWSdoMembershipSearchResult' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipSearchResult',
      'ArrayOfEsitWSmembershipRecord' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSmembershipRecord',
      'doMembershipSet' => 'Torchbox\\Thankq\\Api\\doMembershipSet',
      'esitWSdoMembershipSetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipSetArgument',
      'ArrayOfEsitWScontact' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWScontact',
      'esitWSdirectDebit' => 'Torchbox\\Thankq\\Api\\esitWSdirectDebit',
      'doMembershipSetResponse' => 'Torchbox\\Thankq\\Api\\doMembershipSetResponse',
      'esitWSdoMembershipSetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoMembershipSetResult',
      'doPaymentsGet' => 'Torchbox\\Thankq\\Api\\doPaymentsGet',
      'esitWSdoPaymentsGetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoPaymentsGetArgument',
      'doPaymentsGetResponse' => 'Torchbox\\Thankq\\Api\\doPaymentsGetResponse',
      'esitWSdoPaymentsGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPaymentsGetResult',
      'ArrayOfEsitWSPaymentRecord' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSPaymentRecord',
      'esitWSPaymentRecord' => 'Torchbox\\Thankq\\Api\\esitWSPaymentRecord',
      'doPledgeEdit' => 'Torchbox\\Thankq\\Api\\doPledgeEdit',
      'esitWSdoPledgeEditArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeEditArgument',
      'doPledgeEditResponse' => 'Torchbox\\Thankq\\Api\\doPledgeEditResponse',
      'esitWSdoPledgeEditResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeEditResult',
      'doPledgeGet' => 'Torchbox\\Thankq\\Api\\doPledgeGet',
      'esitWSdoPledgeGetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeGetArgument',
      'doPledgeGetResponse' => 'Torchbox\\Thankq\\Api\\doPledgeGetResponse',
      'esitWSdoPledgeGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeGetResult',
      'esitWSpledgeRecord' => 'Torchbox\\Thankq\\Api\\esitWSpledgeRecord',
      'ArrayOfEsitWSpledgeInstalment' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSpledgeInstalment',
      'esitWSpledgeInstalment' => 'Torchbox\\Thankq\\Api\\esitWSpledgeInstalment',
      'doPledgeLookup' => 'Torchbox\\Thankq\\Api\\doPledgeLookup',
      'doPledgeLookupResponse' => 'Torchbox\\Thankq\\Api\\doPledgeLookupResponse',
      'esitWSdoPledgeLookupResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeLookupResult',
      'ArrayOfEsitWSpledgeSourceCode' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSpledgeSourceCode',
      'esitWSpledgeSourceCode' => 'Torchbox\\Thankq\\Api\\esitWSpledgeSourceCode',
      'doPledgePay' => 'Torchbox\\Thankq\\Api\\doPledgePay',
      'esitWSdoPledgePay' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgePay',
      'doPledgePayResponse' => 'Torchbox\\Thankq\\Api\\doPledgePayResponse',
      'esitWSdoPledgePayResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgePayResult',
      'doPledgeSearch' => 'Torchbox\\Thankq\\Api\\doPledgeSearch',
      'esitWSdoPledgeSearchArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeSearchArgument',
      'doPledgeSearchResponse' => 'Torchbox\\Thankq\\Api\\doPledgeSearchResponse',
      'esitWSdoPledgeSearchResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeSearchResult',
      'ArrayOfEsitWSpledgeRecord' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSpledgeRecord',
      'doPledgeSet' => 'Torchbox\\Thankq\\Api\\doPledgeSet',
      'esitWSdoPledgeSetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeSetArgument',
      'esitWSpledge' => 'Torchbox\\Thankq\\Api\\esitWSpledge',
      'doPledgeSetResponse' => 'Torchbox\\Thankq\\Api\\doPledgeSetResponse',
      'esitWSdoPledgeSetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoPledgeSetResult',
      'doProfileGet' => 'Torchbox\\Thankq\\Api\\doProfileGet',
      'esitWSdoProfileGetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoProfileGetArgument',
      'doProfileGetResponse' => 'Torchbox\\Thankq\\Api\\doProfileGetResponse',
      'esitWSdoProfileGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoProfileGetResult',
      'ArrayOfEsitWSProfile' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWSProfile',
      'esitWSProfile' => 'Torchbox\\Thankq\\Api\\esitWSProfile',
      'doProfileSet' => 'Torchbox\\Thankq\\Api\\doProfileSet',
      'esitWSdoProfileSetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoProfileSetArgument',
      'doProfileSetResponse' => 'Torchbox\\Thankq\\Api\\doProfileSetResponse',
      'esitWSdoProfileSetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoProfileSetResult',
      'doProfileUpdate' => 'Torchbox\\Thankq\\Api\\doProfileUpdate',
      'esitWSdoProfileUpdateArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoProfileUpdateArgument',
      'doProfileUpdateResponse' => 'Torchbox\\Thankq\\Api\\doProfileUpdateResponse',
      'esitWSdoProfileUpdateResult' => 'Torchbox\\Thankq\\Api\\esitWSdoProfileUpdateResult',
      'doTradingLookup' => 'Torchbox\\Thankq\\Api\\doTradingLookup',
      'doTradingLookupResponse' => 'Torchbox\\Thankq\\Api\\doTradingLookupResponse',
      'esitWSdoTradingLookupResult' => 'Torchbox\\Thankq\\Api\\esitWSdoTradingLookupResult',
      'ArrayOfEsitWStradingProduct' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingProduct',
      'esitWStradingProduct' => 'Torchbox\\Thankq\\Api\\esitWStradingProduct',
      'esitWStradingCoreProduct' => 'Torchbox\\Thankq\\Api\\esitWStradingCoreProduct',
      'ArrayOfEsitWStradingCoreProduct' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingCoreProduct',
      'ArrayOfEsitWStradingSourceCode' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingSourceCode',
      'esitWStradingSourceCode' => 'Torchbox\\Thankq\\Api\\esitWStradingSourceCode',
      'ArrayOfEsitWStradingPostageOption' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingPostageOption',
      'esitWStradingPostageOption' => 'Torchbox\\Thankq\\Api\\esitWStradingPostageOption',
      'doTradingOrderGet' => 'Torchbox\\Thankq\\Api\\doTradingOrderGet',
      'esitWSdoTradingOrderGetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoTradingOrderGetArgument',
      'doTradingOrderGetResponse' => 'Torchbox\\Thankq\\Api\\doTradingOrderGetResponse',
      'esitWSdoTradingOrderGetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoTradingOrderGetResult',
      'ArrayOfEsitWStradingOrder' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingOrder',
      'esitWStradingOrder' => 'Torchbox\\Thankq\\Api\\esitWStradingOrder',
      'ArrayOfEsitWStradingOrderProduct' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingOrderProduct',
      'esitWStradingOrderProduct' => 'Torchbox\\Thankq\\Api\\esitWStradingOrderProduct',
      'doTradingOrderSet' => 'Torchbox\\Thankq\\Api\\doTradingOrderSet',
      'esitWSdoTradingOrderSetArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoTradingOrderSetArgument',
      'esitWStradingNewOrder' => 'Torchbox\\Thankq\\Api\\esitWStradingNewOrder',
      'ArrayOfEsitWStradingNewOrderProduct' => 'Torchbox\\Thankq\\Api\\ArrayOfEsitWStradingNewOrderProduct',
      'esitWStradingNewOrderProduct' => 'Torchbox\\Thankq\\Api\\esitWStradingNewOrderProduct',
      'doTradingOrderSetResponse' => 'Torchbox\\Thankq\\Api\\doTradingOrderSetResponse',
      'esitWSdoTradingOrderSetResult' => 'Torchbox\\Thankq\\Api\\esitWSdoTradingOrderSetResult',
      'doUsernameCheck' => 'Torchbox\\Thankq\\Api\\doUsernameCheck',
      'doUsernameCheckResponse' => 'Torchbox\\Thankq\\Api\\doUsernameCheckResponse',
      'esitWSdoUsernameCheckResult' => 'Torchbox\\Thankq\\Api\\esitWSdoUsernameCheckResult',
      'doVolunteerInsert' => 'Torchbox\\Thankq\\Api\\doVolunteerInsert',
      'esitWSdoVolunteerInsertArgument' => 'Torchbox\\Thankq\\Api\\esitWSdoVolunteerInsertArgument',
      'esitWSvolunteerSkill' => 'Torchbox\\Thankq\\Api\\esitWSvolunteerSkill',
      'doVolunteerInsertResponse' => 'Torchbox\\Thankq\\Api\\doVolunteerInsertResponse',
      'esitWSdoVolunteerInsertResult' => 'Torchbox\\Thankq\\Api\\esitWSdoVolunteerInsertResult',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param doCommunicationInsert $parameters
     * @return doCommunicationInsertResponse
     */
    public function doCommunicationInsert(doCommunicationInsert $parameters)
    {
      return $this->__soapCall('doCommunicationInsert', array($parameters));
    }

    /**
     * @param doContactCommitteeGet $parameters
     * @return doContactCommitteeGetResponse
     */
    public function doContactCommitteeGet(doContactCommitteeGet $parameters)
    {
      return $this->__soapCall('doContactCommitteeGet', array($parameters));
    }

    /**
     * @param doContactGet $parameters
     * @return doContactGetResponse
     */
    public function doContactGet(doContactGet $parameters)
    {
      return $this->__soapCall('doContactGet', array($parameters));
    }

    /**
     * @param doContactGroupsGet $parameters
     * @return doContactGroupsGetResponse
     */
    public function doContactGroupsGet(doContactGroupsGet $parameters)
    {
      return $this->__soapCall('doContactGroupsGet', array($parameters));
    }

    /**
     * @param doContactGroupsSet $parameters
     * @return doContactGroupsSetResponse
     */
    public function doContactGroupsSet(doContactGroupsSet $parameters)
    {
      return $this->__soapCall('doContactGroupsSet', array($parameters));
    }

    /**
     * @param doContactInsert $parameters
     * @return doContactInsertResponse
     */
    public function doContactInsert(doContactInsert $parameters)
    {
      return $this->__soapCall('doContactInsert', array($parameters));
    }

    /**
     * @param doContactLoginInsert $parameters
     * @return doContactLoginInsertResponse
     */
    public function doContactLoginInsert(doContactLoginInsert $parameters)
    {
      return $this->__soapCall('doContactLoginInsert', array($parameters));
    }

    /**
     * @param doContactLoginPasswordChange $parameters
     * @return doContactLoginPasswordChangeResponse
     */
    public function doContactLoginPasswordChange(doContactLoginPasswordChange $parameters)
    {
      return $this->__soapCall('doContactLoginPasswordChange', array($parameters));
    }

    /**
     * @param doContactLoginResetPassword $parameters
     * @return doContactLoginResetPasswordResponse
     */
    public function doContactLoginResetPassword(doContactLoginResetPassword $parameters)
    {
      return $this->__soapCall('doContactLoginResetPassword', array($parameters));
    }

    /**
     * @param doContactMailingGet $parameters
     * @return doContactMailingGetResponse
     */
    public function doContactMailingGet(doContactMailingGet $parameters)
    {
      return $this->__soapCall('doContactMailingGet', array($parameters));
    }

    /**
     * @param doContactMailingSet $parameters
     * @return doContactMailingSetResponse
     */
    public function doContactMailingSet(doContactMailingSet $parameters)
    {
      return $this->__soapCall('doContactMailingSet', array($parameters));
    }

    /**
     * @param doContactSearch $parameters
     * @return doContactSearchResponse
     */
    public function doContactSearch(doContactSearch $parameters)
    {
      return $this->__soapCall('doContactSearch', array($parameters));
    }

    /**
     * @param doContactUpdate $parameters
     * @return doContactUpdateResponse
     */
    public function doContactUpdate(doContactUpdate $parameters)
    {
      return $this->__soapCall('doContactUpdate', array($parameters));
    }

    /**
     * @param doDonateLookup $parameters
     * @return doDonateLookupResponse
     */
    public function doDonateLookup(doDonateLookup $parameters)
    {
      return $this->__soapCall('doDonateLookup', array($parameters));
    }

    /**
     * @param doDonateMemberInsert $parameters
     * @return doDonateMemberInsertResponse
     */
    public function doDonateMemberInsert(doDonateMemberInsert $parameters)
    {
      return $this->__soapCall('doDonateMemberInsert', array($parameters));
    }

    /**
     * @param doEventLookupEvents $parameters
     * @return doEventLookupEventsResponse
     */
    public function doEventLookupEvents(doEventLookupEvents $parameters)
    {
      return $this->__soapCall('doEventLookupEvents', array($parameters));
    }

    /**
     * @param doEventPublicInsert $parameters
     * @return doEventPublicInsertResponse
     */
    public function doEventPublicInsert(doEventPublicInsert $parameters)
    {
      return $this->__soapCall('doEventPublicInsert', array($parameters));
    }

    /**
     * @param doGiftAidGet $parameters
     * @return doGiftAidGetResponse
     */
    public function doGiftAidGet(doGiftAidGet $parameters)
    {
      return $this->__soapCall('doGiftAidGet', array($parameters));
    }

    /**
     * @param doGiftAidInsert $parameters
     * @return doGiftAidInsertResponse
     */
    public function doGiftAidInsert(doGiftAidInsert $parameters)
    {
      return $this->__soapCall('doGiftAidInsert', array($parameters));
    }

    /**
     * @param doGiftAidUpdate $parameters
     * @return doGiftAidUpdateResponse
     */
    public function doGiftAidUpdate(doGiftAidUpdate $parameters)
    {
      return $this->__soapCall('doGiftAidUpdate', array($parameters));
    }

    /**
     * @param doGroupGet $parameters
     * @return doGroupGetResponse
     */
    public function doGroupGet(doGroupGet $parameters)
    {
      return $this->__soapCall('doGroupGet', array($parameters));
    }

    /**
     * @param doGroupsLookup $parameters
     * @return doGroupsLookupResponse
     */
    public function doGroupsLookup(doGroupsLookup $parameters)
    {
      return $this->__soapCall('doGroupsLookup', array($parameters));
    }

    /**
     * @param doLogin $parameters
     * @return doLoginResponse
     */
    public function doLogin(doLogin $parameters)
    {
      return $this->__soapCall('doLogin', array($parameters));
    }

    /**
     * @param doLookupGet $parameters
     * @return doLookupGetResponse
     */
    public function doLookupGet(doLookupGet $parameters)
    {
      return $this->__soapCall('doLookupGet', array($parameters));
    }

    /**
     * @param doMailingPrefLookup $parameters
     * @return doMailingPrefLookupResponse
     */
    public function doMailingPrefLookup(doMailingPrefLookup $parameters)
    {
      return $this->__soapCall('doMailingPrefLookup', array($parameters));
    }

    /**
     * @param doMembershipGet $parameters
     * @return doMembershipGetResponse
     */
    public function doMembershipGet(doMembershipGet $parameters)
    {
      return $this->__soapCall('doMembershipGet', array($parameters));
    }

    /**
     * @param doMembershipLookup $parameters
     * @return doMembershipLookupResponse
     */
    public function doMembershipLookup(doMembershipLookup $parameters)
    {
      return $this->__soapCall('doMembershipLookup', array($parameters));
    }

    /**
     * @param doMembershipPay $parameters
     * @return doMembershipPayResponse
     */
    public function doMembershipPay(doMembershipPay $parameters)
    {
      return $this->__soapCall('doMembershipPay', array($parameters));
    }

    /**
     * @param doMembershipSearch $parameters
     * @return doMembershipSearchResponse
     */
    public function doMembershipSearch(doMembershipSearch $parameters)
    {
      return $this->__soapCall('doMembershipSearch', array($parameters));
    }

    /**
     * @param doMembershipSet $parameters
     * @return doMembershipSetResponse
     */
    public function doMembershipSet(doMembershipSet $parameters)
    {
      return $this->__soapCall('doMembershipSet', array($parameters));
    }

    /**
     * @param doPaymentsGet $parameters
     * @return doPaymentsGetResponse
     */
    public function doPaymentsGet(doPaymentsGet $parameters)
    {
      return $this->__soapCall('doPaymentsGet', array($parameters));
    }

    /**
     * @param doPledgeEdit $parameters
     * @return doPledgeEditResponse
     */
    public function doPledgeEdit(doPledgeEdit $parameters)
    {
      return $this->__soapCall('doPledgeEdit', array($parameters));
    }

    /**
     * @param doPledgeGet $parameters
     * @return doPledgeGetResponse
     */
    public function doPledgeGet(doPledgeGet $parameters)
    {
      return $this->__soapCall('doPledgeGet', array($parameters));
    }

    /**
     * @param doPledgeLookup $parameters
     * @return doPledgeLookupResponse
     */
    public function doPledgeLookup(doPledgeLookup $parameters)
    {
      return $this->__soapCall('doPledgeLookup', array($parameters));
    }

    /**
     * @param doPledgePay $parameters
     * @return doPledgePayResponse
     */
    public function doPledgePay(doPledgePay $parameters)
    {
      return $this->__soapCall('doPledgePay', array($parameters));
    }

    /**
     * @param doPledgeSearch $parameters
     * @return doPledgeSearchResponse
     */
    public function doPledgeSearch(doPledgeSearch $parameters)
    {
      return $this->__soapCall('doPledgeSearch', array($parameters));
    }

    /**
     * @param doPledgeSet $parameters
     * @return doPledgeSetResponse
     */
    public function doPledgeSet(doPledgeSet $parameters)
    {
      return $this->__soapCall('doPledgeSet', array($parameters));
    }

    /**
     * @param doProfileGet $parameters
     * @return doProfileGetResponse
     */
    public function doProfileGet(doProfileGet $parameters)
    {
      return $this->__soapCall('doProfileGet', array($parameters));
    }

    /**
     * @param doProfileSet $parameters
     * @return doProfileSetResponse
     */
    public function doProfileSet(doProfileSet $parameters)
    {
      return $this->__soapCall('doProfileSet', array($parameters));
    }

    /**
     * @param doProfileUpdate $parameters
     * @return doProfileUpdateResponse
     */
    public function doProfileUpdate(doProfileUpdate $parameters)
    {
      return $this->__soapCall('doProfileUpdate', array($parameters));
    }

    /**
     * @param doTradingLookup $parameters
     * @return doTradingLookupResponse
     */
    public function doTradingLookup(doTradingLookup $parameters)
    {
      return $this->__soapCall('doTradingLookup', array($parameters));
    }

    /**
     * @param doTradingOrderGet $parameters
     * @return doTradingOrderGetResponse
     */
    public function doTradingOrderGet(doTradingOrderGet $parameters)
    {
      return $this->__soapCall('doTradingOrderGet', array($parameters));
    }

    /**
     * @param doTradingOrderSet $parameters
     * @return doTradingOrderSetResponse
     */
    public function doTradingOrderSet(doTradingOrderSet $parameters)
    {
      return $this->__soapCall('doTradingOrderSet', array($parameters));
    }

    /**
     * @param doUsernameCheck $parameters
     * @return doUsernameCheckResponse
     */
    public function doUsernameCheck(doUsernameCheck $parameters)
    {
      return $this->__soapCall('doUsernameCheck', array($parameters));
    }

    /**
     * @param doVolunteerInsert $parameters
     * @return doVolunteerInsertResponse
     */
    public function doVolunteerInsert(doVolunteerInsert $parameters)
    {
      return $this->__soapCall('doVolunteerInsert', array($parameters));
    }

}
