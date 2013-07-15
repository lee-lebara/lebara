var isGermanSite = false;
var lebara =
{
    vars: {
        selectors: {
            leapFrogRewards: ".leapFrogRewards",
            textBoxWithValue: '.text[title]',
            removeTextAreaRating: '.textArea[title]',
            textArea: 'textarea',
            checkoutAddressTrigger: '.form .showAddress',
            checkoutAddressFields: '.address',
            postCodeLookUpTrigger: '.form .postCodeLookUpTrigger',
            addressFinderWizardTrigger: '.form .addressFinderWizardTrigger',
            postCodeLookUpTrigger1: '.postCodeLookUpTrigger1',
            postCodeLookUpFields1: '.postCodeLookUp1',
            postCodeLookUpFields: '.postCodeLookUp',
            postCodeAddressFieldset: '.address-populated',
            postCodeField: '.postcode .text',
            priceChoice: '#priceChoice',
            countryChoice: '#countryChoice',
            Allform: 'form',
            countryCode: '.countryCode',
            contactEmailField: '#contactEmailInput',
            priceCountryGo: '#priceCountryGo',
            predictiveDropDown: '.predictiveDropDown',
            deactivate: '.deactivate',
            tableHighlight: '.tableHighlight',
            activate: '.activate',
            activateSwitch: '.topUpType .module',
            radioSlider: '.radioSlider input',
            popup: '.popup',
            helpLink: '.helpLink',
            languageSettingsForm: '#languageSetting',
            personalInformationForm: '#personalInformation',
            simFormVariable: '#simForm',
            csServiceForm: '#csServiceFormId',
            retailerServiceForm: '#retailerServiceFormId',
            manageTopUpChannels: '#manageTopUpChannels',
            personalInformationFormFreeSim: '#personalInformationFreeSim',
            storeLocatorSearchForm: '#storeLocatorSearchForm',
            postpayProductForm: '#postpay',
            calledFrom: ".calledFrom",
            formForVoucherSubmission: '#formForVoucherSubmission',
            activationForm: '#activation',
            formForTopupCheckout: '#formForTopupCheckout',
            troubleTicketForm: '#troubleTicket',
            conversationReplyForm: '#conversationReply',
            reviewInformationForm: '#reviewInformation',
            securityCodeForm: '#securityCode',
            storeLocatorAdminForm: '#storeLocatorAdminForm',
            storeLocatorEmailForm: '#storeLocatorEmailForm',
            storeLocatorForm: '#storeLocatorForm',
            changePasswordForm: '#changePassword',
            mgmForm: '#mgmForm',
            contactForm: '#contact',
            cprForm: '#cprForm',
            postCodeLookUpForm: '#postCodeLookUp',
            loginForm: "#login",
            previewLoginForm: "#previewLogin",
            storeLocatorLoginForm: "#storeLocatorLogin",
            loginTrigger: "a.loginTrigger",
            reviewTrigger: "a.reviewTrigger",
            reviewTriggerMain: "a.reviewTriggerMain",
            removeLink: 'a.remove',
            showRatesLink: 'a.showRates',
            basket: '.basket',
            prePayNumberTrigger: '.basket input#upgrade',
            prePayNumberTarget: '.upgradeNumber',
            emptyBasket: '.emptyBasket',
            content: '#content',
            toolTip: ".toolTip",
            commonQuestions: ".commonQuestions a",
            showHowToFindMyNumber: ".showHowToFindMyNumber",
            languageSelector: ".changeLang",
            newLanguageSelector: ".changeLangNew",
            tariffPanel: ".tariffPrePayInternational",
            tariffRoamingPanel: ".tariffPrePayRoaming",
            simSelectionPanel: '.simSelectionPanel',
            simSelectionPanelInput: '.simSelectionPanel input',
            simSelectionPanelLabel: '.simSelectionPanel label',
            simInfoDiv: '.sim-info div.split5',
            boltCheckboxes: ".boltOnsAccordion .option input[type=checkbox]",
            simPrice: ".module .priceAmount",
            totalBolt: ".totalBolt",
            moreInfoLink: ".boltOnsAccordion td .secButton",
            subscribedMoreInfoLink: ".boltOnLanding td .link-2",
            lessInfo: "Less info",
            moreInfo: "More info",
            addToBasketTrigger: '.primaryButton-add',
            planSummaryAdd: 'a#planSummaryAdd',
            categories: '.categories',
            overlayScroller: '.overlay .scrolling',
            categoryLastRowFix: 'div.lastRow:first a',
            toDate: '#toDate',
            fromDate: '#fromDate',
            createTabsShop: '#tabsShop',
            shopPanels: '#shopPanels',
            createTabsHome: '#tabsHome',
            homePanels: '#homePanels',
            billModule: '.billModule',
            showMore: ".showMore",
            bundleShowMore: ".bundleShowMore",
            bundlesModule: '.bundles',
            outOfPlanRates: '.outOfPlanRates',
            handsetBoltons: '.handsetBoltons',
            navigation: '#navigation',
            postCodeFindButton: '#pCodeFind',
            businessTypeSelect: '#businessType',
            navigationItemPrimary: "#navigation ul li:not(#navigation ul li ul li)",
            navigationList: "#navigation ul",
            navigationPrimary: "#navigation ul:not(#navigation ul ul)",
            navigationSecondary: "#navigation ul li ul",
            bundles: ".bundles",
            pinMethod: ".pinMethod",
            pinMethodInput: "input[name=pinMethod]",
            bundleTableRows: ".bundles table tr:not(.noHighlight)",
            bundlesButton: ".bundles .secButton",
            populatedCountry: ".populatedCountry",
            contactByChecked: "input[name='replyTypeCode']:checked",
            changeLanguageList: ".changeLang ul",
            contactEmailField: "#contactEmailInput",
            contactPhoneField: "#contactPhoneInput",
            scheduledTopUpWeekly: "#schedTopupStartWeeklyGroup",
            scheduledTopUpMonthly: "#schedTopupStartMonthlyGroup",
            scheduledTopUpPeriod: ".schedTopupPeriod",
            scheduledTopUpPeriodExtra: ".schedTopupPeriodExtra",
            extraScheduledTopUpWeekly: "#extraSchedTopupStartWeeklyGroup",
            extraScheduledTopUpMonthly: "#extraSchedTopupStartMonthlyGroup",
            validImage: ".validImage",
            validator: ".validator",
            offers: ".offers",
            offerLink: ".offerLink",
            tabbedRadio: ".tabbedRadio .field input",
            tabbedRadioWrapper: ".tabbedRadio",
            simSelectionAlt: ".simSelectionAlt .field input",
            simSelectionAltWrapper: ".simSelectionAlt",
            existingNumber: ".existingNumber",
            ukTariffForm: ".uk",
            btnCancelDialog: ".btnCancelDialog",
            conversationList: ".conversationList",
            conversationListSelectAll: ".conversationList #selectAll",
            multipleAddresses: ".multipleAddresses",
            prevAddress: ".multipleAddresses .prevAddress",
            dateMovedIn: ".dateMovedIn",
            singleConversationDelete: ".singleConversation .secButton-remove",
            singleConversationChange: ".singleConversation .closeConversation",
            unsubscribeTicket: ".unsubscribe .primaryButton",
            termsAndConditions: ".termCondition",
            printButton: ".secButton-print",
            loginTabLink: "#li-tab-3 a",
            overlay: '.overlay',
            successTop: ".successTop",
            selectViewing: ".orderHistoryHeader #viewing",
            reCaptcha: "#recaptcha_widget",
            reCaptchaRefresh: "#recaptcha_widget .reCaptchaRefresh",
            reCaptchaAudio: "#recaptcha_widget .reCaptchaAudio",
            reCaptchaText: "#recaptcha_widget .reCaptchaText",
            reCaptchaHelp: "#recaptcha_widget .reCaptchaHelp",
            roamingDeactivationLink: ".myLebaraRoaming .roamingDeactivation",
            changeAddress: ".changeAddress",
            savedAddress: ".savedAddress",
            partnerViewMore: ".partnerViewMore",
            reviewsAccordion: ".reviewsAccordion",
            ratingLess: "Collapse",
            ratingMore: "Read more",
            reviewsAccordionLink: ".reviewsAccordion div .secButton",
            writeReview: ".writeReview",
            doRating: ".ratings",
            selectedDeliveryCost: "",
            newsLetterForm: '#newsLetterForm',
            mgmForm: '#mgmForm',
            businessSimForm: '#businessSimForm',
            callbackForm: '#callBackForm',
            letUsCallYou: ".letUsCallYou",
            callMeBackSubmit: ".callMeBackSubmit",
            termsAndCondi: ".termsAndCondi",
            moreDetailLink: ".whyLebara .split2 .module a.secButton",
            monthlyAllowance: ".box-2a",
            printPopTrigger: ".printPopTrigger",
            modalWriteReviewIFrame: "#modalWriteReviewIFrame",
            reviewTerrible: "Terrible",
            reviewPoor: "Poor",
            reviewAverage: "Average",
            reviewGood: "Good",
            reviewVerygood: "Very Good",
            reviewExcellent: "Excellent",
            boltonSelectionPanel: ".boltonSelectionPanel",
            euroTariffPanel: ".eurolinePrdictive",
            boltonSelectionPanelInput: ".boltonSelectionPanel input",
            flagSelectionPanel: '.flagSelectionPanel',
            flagSelectionPanelInput: '.flagSelectionPanel input',
            flagSelectionPanelLabel: '.flagSelectionPanel label',
            sendReferTrigger: '.primaryButton-refer',
            mgmRefereeListView: 'collapsed',
            leapFrogSaveSettingConfirm: '#leapFrogSaveSettingConfirm',
            leapFrogSaveSettingCheckboxId: '#rewardOpt',
            recipientDetails: '#recipientDetails',
            deleteMSIDNForm: '#deleteMSIDNForm',
            resendVerificationEmailForm: '#resendVerificationEmailForm',
            userProfileCSAForm: '#userProfileCSAForm'
        },
        paths: {
            validImage: '/assets/images/icons/iconMatched.gif',
            postCodeLookUpJson: '/view/FindAddressController',
            languageSelectorJson: '/view/LanguageSelectorComponentController',
            continentListJson: '../continentList.json',
            countryListJson: '../countryList.json',
            townListJson: '../townList.json',
            searchJson: '/view/SearchComponentController?predective=true',
            postPayPlansHtml: '../postPayPlans.html',
            prePayPlansHtml: '../prePayPlans.html',
            prePayPlansInternationalHtml: '../prePayTopUpInternational.html',
            idManagementComponentJson: '/view/IDManagementComponentController',
            prePayPlansRoamingHtml: '../prePayTopUpRoaming.html',
            calendarImage: '/assets/images/icons/calendar.gif',
            overlaySaveSettings: '../overlays/saveSettings.shtml',
            conflictImage: '/assets/images/icons/conflict.png',
            conflictImageNew: '/assets/images/icons/conflictNew.png',
            unsubscribeModal: '../overlays/unsubscribe.shtml',
            loginModal: '../overlays/login.shtml',
            ratingOn: '/assets/images/icons/on.gif',
            ratingOff: '/assets/images/icons/off.gif',
            getInternationalTariffDetailsUrl: '../prePayTopUpInternational.html',
            mgmReferreStatusJson: '../mgmInvitationSent.json',
            addressFinderNoResponse: 'No Address found for entered post code. Try another post code or try later',
            addressFinderNoofResult: 'Number of Result is too much , please try by entering street'
        },
        regex: {
            alpha: /^[a-z]*$/i
        },
        triggers: {
            passwordPrompt: "false",
            existingNumberPrompt: "false",
            loginPrompt: "false",
            inviteMessagePrompt: "false",
            leapFrogRewardsLoginPopUp: "false",
            showLeapFrogRewardsLoginPopUpAgain: "true",
            showExtraTopupFailPopup: "true"
        },
        strings: {
            en: {
                canSelectUG: "true",
                checkoutAddressTriggerText1: "Enter Manually",
                checkoutAddressTriggerText2: "Enter Automatically",
                helpCategoryTriggerText1: "Maximise categories",
                helpCategoryTriggerText2: "Minimise categories",
                radioSliderTextOn: "on",
                radioSliderTextOff: "off",
                toDateLabel: "To",
                fromDateLabel: "From",
                billModuleText1: "See more bills",
                billModuleText2: "See less bills",
                showMoreText1: "Show detail",
                showMoreText2: "Hide detail",
                bundlesModuleText1: "See more bundles",
                bundlesModuleText2: "See less bundles",
                outOfPlanRatesText1: "Maximise",
                outOfPlanRatesText2: "Minimise",
                handsetBoltonsText1: "Maximise",
                handsetBoltonsText2: "Minimise",
                bundleCollapsed: "Close",
                bundleExpanded: "Expand",
                pinMethodNoteEmail: "Pin will be sent to your registered email address.",
                pinMethodNoteSMS: "Pin will be sent to your registered mobile.",
                offersCloseDetails: "Less info",
                unsubscribeModelHeight: 420,
                unsubscribeModelTitle: "Thank you for your message!",
                changeAddressTrigger1: "Change shipping address",
                changeAddressTrigger2: "Back",
                nonElegibleBoltons: "NonElegibleBoltons",
                addressFound: "Address Found - Please Verify",
                addressNotFound: "No Address Found - Please Verify",
                showText: "See More",
                hideText: "See less",
                remove: "Remove",
                leapFrogRewardsTitle: "Lebara Airtime Club",
                leapFrogSaveSettingsTitle: "leapFrogSaveSettingsTitle",
                leapFrogRewardsLoginPopUpTitle: "Lebara Airtime Club",
                extraTopupFailPopupTitle: "Extra Scheduled Topup",
                extrasFindMorePopupTitle: "Extras",
                extrasFindMoreUnlimitedPopupTitle: "Unlimited",
                continueButton: "Continue",
                masterCardVisa: "MasterCard/Visa",
                restrictedProductids: "",
                unlimitedInstantTopup: ""
            },
            validation: {
                postpayProductForm: {
                    countryChoiceMyCountry: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                csServiceFormId: {
                    csID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9 ]+$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    },
                    retailerID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9 ]+$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    }
                },

                retailerServiceFormId: {
                    retailerID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9 ]+$/
                        }
                    }
                },
                languageSetting: {
                    langTalk: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    langVoiceMail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },

                cprForm: {
                    fName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z������� \\\\.-]+$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }

                    },
                    lName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z������� \\\\.-]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }
                    },
                    cprNonRequired: {
                        // non required phone number
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{6}-[0-9]{4}$/
                        }

                    },
                    street: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "75"
                        }
                    },
                    adline2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    adline3: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    floor: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    pCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{4,4}$/
                        }
                    },
                    city: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    }
                },
                formForVoucherSubmission: {
                    smsCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "8"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]*$/
                        }
                    },
                    mobileNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    rMobileNumber1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    rMobileNumber2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    quantity: {
                    },
                    promotionCode: {
                        Format: {
                            ValidationMessage: "Please enter some value",
                            Regex: /.*/
                        }
                    },
                    terms: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }

                },
                personalInformationFreeSim: {
                    salutationText: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    simQuantity: {

                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    firstName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "32"
                        }
                    },
                    lastName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "60"
                        }
                    },
                    middleName: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,10})^(([a-zA-Z\s\u00A1-\uFFFF]){1,10})$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "10"
                        }
                    },
                    emailID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "40"
                        }
                    },
                    postCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    pCodeFind: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    area: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    },
                    adline1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"

                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    },
                    adLine1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"

                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    },
                    adline1fornonmendatory: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"

                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    },
                    adline2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"

                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.+$/
                        }
                    },
                    adline2fornonmendatory: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.+$/
                        }
                    },
                    city: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    county: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    suburb: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    floor: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{3,3}$/
                        }
                    },
                    floorNonMendatory: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{1,3}$/
                        }
                    },
                    block: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    pCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },

                    address1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    address2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    termsAndConditions: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    marketingOptin: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    overAge: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    contactByEmail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    contactBySMS: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    year: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    month: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    day: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    alternativeContactNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    altContactNumberNonMendatory: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    nationality: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9a-zA-Z]{0,20}$/
                        }
                    },
                    simType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    tariffType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    idType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    stairs: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{3,3}$/

                        }
                    },
                    stairsNonMendatory: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{1,3}$/
                        }
                    },
                    portalNonMendatory: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{1,3}$/
                        }
                    },
                    portal: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{3,3}$/
                        }
                    },
                    door: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{3,3}$/
                        }
                    },
                    doorNonMendatory: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{1,3}$/
                        }
                    },
                    buildingNonMendatory: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{1,3}$/
                        }
                    },
                    building: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z\u00A1-\uFFFF0-9]{3,3}$/
                        }
                    },
                    idValue: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!000|007)^(?!([a-zA-Z0-9]{0,}(123|000)[a-zA-Z0-9]{0,}))^((?!^[a-zA-Z]*$)^([a-zA-Z0-9]{3,}))$/
                        }
                    },
                    idValueSpain: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    viaType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    idPermission: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    vfsOffice: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    selectAddress: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    selectedAddressDrop: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    wizardAdLine1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },

                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    }
                },
                manageTopUpChannels: {
                    pinCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{3,20}$/
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    }
                },
                personalInformation: {
                    acceptTermsAndCondition: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    friendReferrerRequired: {
                        Format: {
                            ValidationMessage: "Please enter a valid msisdn format",
                            Regex: /^0{1}[1-9]{7,20}$/
                        }
                    },
                    mgmReferralMsisdn: {
                        Format: {
                            ValidationMessage: "Please enter a valid msisdn format",
                            Regex: /^0{1}[1-9]{7,20}$/
                        }
                    },
                    stairs: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9a-zA-Z]{0,20}$/
                        }
                    },
                    viaType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    number: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{0,4}$/
                        }
                    },
                    postCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{5,5}$/
                        }
                    },
                    smsCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "8"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]*$/
                        }
                    },
                    mobileNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{7,20}$/

                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "20"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "0"
                        },
                        Activation: {
                            ValidationMessage: "Msisdn is not activated."
                        }
                    },
                    mobileNumber1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{7,20}$/

                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "20"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "0"
                        },
                        Activation: {

                            ValidationMessage: "Msisdn is not activated."
                        }
                    },
                    alternateNumber: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /[0-9]+/
                        }
                    },
                    Nationality: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    tags: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    recaptcha_response_field: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    telephone: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    genderCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    dobYear: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    title: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    emailEnquiry: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    ageGroup: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    phoneNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    rNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{7,20}$/
                        }
                    },
                    idNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!000|007)^(?!([a-zA-Z0-9]{0,}(123|000)[a-zA-Z0-9]{0,}))^((?!^[a-zA-Z]*$)^([a-zA-Z0-9]{3,}))$/

                        }
                    },
                    acceptTermCondition: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    idType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    phoneNumberNonRequired: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    contactNumberRequired: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    cprNonRequired: {
                        Format: {
                            ValidationMessage: "This is a required field",
                            Regex: /^[0-9]{6}-[0-9]{4}$/
                        }

                    },
                    phoneNumberRequired: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    },
                    simNumberRequired: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }
                    },
                    emailAddressNonRequired: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    },
                    interestedIn: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    fName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z������� \\\\.-]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }
                    },
                    contactDetail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    },
                    email: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },

                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    confirmEmail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        },
                        Comparison: {
                            ValidationMessage: "Confirm Email does not match with Email",
                            FieldToCompare: "email"
                        }
                    },
                    lName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z������� \\\\.-]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }
                    },
                    preferedLanguage: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    Nationality: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    idPermission: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    idType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },

                    mobileNum: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^^0{1}[1-9]{7,20}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "20"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "8"
                        }
                    },
                    resellerPhoneNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[1-9]{1}[0-9]{7}$/
                        }
                    },
                    securityNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    accountName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    dob: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    day: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    month: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    year: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    adLine1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    },
                    adLine2: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_required: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    city: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    county: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    county_mandatory: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    termsAndConditions: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    pCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    pCodeFind: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    address1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]*$/
                        }
                    },
                    co: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "75"
                        }
                    },
                    street: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "75"
                        }
                    },
                    houseNumber: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "15"
                        }
                    },
                    side: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "10"
                        }
                    },
                    floor: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "15"
                        }
                    },
                    area: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]*$/
                        }
                    },
                    confirmPassword: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length to 8 alphanumeric characters"

                        },
                        MaxLength: {
                            ValidationMessage: "This field has a maximum length to 15 alphanumeric characters",
                            Length: "15"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/

                        },
                        Comparison: {
                            ValidationMessage: "Confirm Password does not match with Password",
                            FieldToCompare: "password"

                        }
                    },
                    retailerId: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "This field has a maximum length to 17 alphanumeric characters",
                            Length: "17"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length to 4 alphanumeric characters",
                            Length: "4"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /[A-Za-z0-9]$/
                        }
                    },
                    password: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length to 8 alphanumeric characters"

                        },
                        MaxLength: {
                            ValidationMessage: "This field has a maximum length to 50 alphanumeric characters",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/

                        }

                    },
                    selectAddress: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    selectedAddressDrop: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    wizardAdLine1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },

                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,}$/
                        }
                    }

                },

                simForm: {
                    confirmPassword: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length to 8 alphanumeric characters"

                        },
                        MaxLength: {
                            ValidationMessage: "This field has a maximum length to 15 alphanumeric characters",
                            Length: "15"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/
                        },
                        Comparison: {
                            ValidationMessage: "Confirm Password does not match with Password",
                            FieldToCompare: "password"
                        }
                    },
                    password: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length to 8 alphanumeric characters"
                        },
                        MaxLength: {
                            ValidationMessage: "This field has a maximum length to 50 alphanumeric characters",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/
                        }
                    },
                    email: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    confirmEmail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        },
                        Comparison: {
                            ValidationMessage: "Confirm Email does not match with Email",
                            FieldToCompare: "email"
                        }
                    },

                    smsCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "8"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]*$/
                        }
                    }
                },
                contact: {
                    emailSubject: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    emailEnquiry: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    contactDetail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    },
                    email: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },

                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    idNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!000|007)^(?!([a-zA-Z0-9]{0,}(123|000)[a-zA-Z0-9]{0,}))^((?!^[a-zA-Z]*$)^([a-zA-Z0-9]{3,}))$/
                        }
                    },
                    idType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    phoneNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]*$/
                        }
                    },
                    phoneNumberOptional: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]*$/
                        }
                    }
                },
                securityCode: {
                    smsCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "8"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]*$/
                        }
                    }
                },
                storeLocatorAdminForm: {
                    validatestoreRetailerName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    validateaddressLine: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    validateformattedEventStartDate: {
                        Format: {
                            ValidationMessage: "Please enter a valid date in yyyy-mm-dd format",
                            Regex: /^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/
                        }
                    },
                    validateformattedEventEndDate: {
                        Format: {
                            ValidationMessage: "Please enter a valid date in yyyy-mm-dd format",
                            Regex: /^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/
                        }
                    },
                    validateemail: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    }
                },
                troubleTicket: {
                    ticketField: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    ticketSubject: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    ticketEnquiry: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    email: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    phoneNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[0-9]{0,20}$/
                        }
                    }
                },
                conversationReply: {
                    reply: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                activation: {
                    mobileNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{7,20}$/

                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "20"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "0"
                        }
                    }
                },
                login: {
                    emailCsaId: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^^[a-zA-Z0-9]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    },
                    loginID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}|^0{1}[1-9]{1}[0-9]{6,13}$/
                        }
                    },
                    csaEmailId: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}|^0{1}[1-9]{1}[0-9]{6,13}$/
                        }
                    },
                    password: {
                        Required: {
                            ValidationMessage: "This is a required field"

                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length"
                        },
                        MaxLength: {
                            ValidationMessage: "This field has a the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/
                        }
                    }
                },
                previewLogin: {
                    loginID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    password: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                storeLocatorLogin: {
                    loginID: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    password: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                changePassword: {
                    oldPassword: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length"
                        },
                        MaxLength: {
                            ValidationMessage: "This field has a the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/
                        }
                    },
                    newPassword: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length"
                        },
                        MaxLength: {
                            ValidationMessage: "This field has a the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/
                        }
                    },
                    confirmPassword: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length"
                        },
                        MaxLength: {
                            ValidationMessage: "This field has a the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\d|\D]{8,50}$/
                        },
                        Comparison: {
                            ValidationMessage: "Confirm Password does not match with Password",
                            FieldToCompare: "newPassword"
                        }
                    }
                },
                postCodeLookUp: {
                    area: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    adLine1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine1_1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine1_2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine1_3: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine1_4: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine1_5: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine1_6: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "25"
                        }
                    },
                    adLine2: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_1: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_2: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_3: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_4: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_5: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine2_6: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3_1: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3_2: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3_3: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3_4: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3_5: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    adLine3_6: {
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        }
                    },
                    city: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "50"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city_1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "28"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city_2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "28"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city_3: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "28"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city_4: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "28"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city_5: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "28"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    city_6: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "28"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    pCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    pCodeFind: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    address1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    pCode_1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/
                        }
                    },
                    area: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    pCode_2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/
                        }
                    },
                    pCode_3: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/
                        }
                    },
                    pCode_4: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/
                        }
                    },
                    pCode_5: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/
                        }
                    },
                    pCode_6: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/
                        }
                    },
                    pCodeFind_1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    pCodeFind_2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    pCodeFind_3: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    pCodeFind_4: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[A-Za-z0-9 ]{6,20}$/
                        }
                    },
                    idType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    Nationality: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType_1: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType_2: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType_3: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType_4: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType_5: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    addressType_6: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    idNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!000|007)^(?!([a-zA-Z0-9]{0,}(123|000)[a-zA-Z0-9]{0,}))^((?!^[a-zA-Z]*$)^([a-zA-Z0-9]{3,}))$/
                        }
                    },
                    county: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^(?!([\s]{1,})([a-zA-Z\s\u00A1-\uFFFF]){0,30})^(([a-zA-Z\s\u00A1-\uFFFF]){1,30})$/
                        }
                    },
                    recaptcha_response_field: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                reviewInformation: {
                    sitename: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    headline: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /[a-zA-Z]/
                        }
                    },
                    rating: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    comment: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "1000"
                        }
                    }
                },
                callBackForm: {
                    customerName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded <br\>the maximum length",
                            Length: "60"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-ZäöüÄÖÜß \\\\.-]+$/
                        }
                    },
                    contactNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded <br\>the maximum length",
                            Length: "20"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{1}[0-9]*$/
                        }
                    }
                },
                storeLocatorEmailForm: {
                    emailTo: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    }
                },
                storeLocatorForm: {
                    currentLocation: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                businessSimForm: {
                    accountNumber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^C[0-9]{7}$/
                        }
                    },

                    companyName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w&\.\'-]{1,40}$/
                        }
                    },
                    contact: {

                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    email: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    },
                    telephone: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]+$/
                        }
                    },
                    reference: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    promotion: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    simCardNullCredit: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    simCard75Credit: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    callCreditScratch: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    callCreditScratch20: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    prepaidBalanceFree20: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    prepaidBalanceFree30: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    prepaidBalanceUnlimited: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    invoiceStreetNo: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    invoicePostCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    invoiceCity: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    streetNo: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    postCode: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    city: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    regNoChamber: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    },
                    companyContact: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9??????? \\\\.-]+$/
                        }
                    }
                },
                mgmForm: {
                    refereeFirstName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }
                    },
                    refereeLastName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "30"
                        }
                    },
                    refereeEmail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        }
                    }
                },
                newsLetterForm: {
                    firstName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        }
                    },
                    firstName1: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        }
                    },
                    lastName: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        }
                    },
                    lastName1: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z??????? \\\\.-]+$/
                        }
                    },

                    email: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },

                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    email1: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    },
                    repeatEmail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        },
                        Comparison: {
                            ValidationMessage: "Confirm Email does not match with Email",
                            FieldToCompare: "email"
                        }
                    },
                    repeatEmail1: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        },
                        Comparison: {
                            ValidationMessage: "Confirm Email does not match with Email",
                            FieldToCompare: "email"
                        }
                    },
                    msisdn: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{7,20}$/
                        }
                    },
                    msisdn1: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^0{1}[1-9]{7,20}$/
                        }
                    },
                    postCode: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{4,6}$/
                        }
                    },
                    postCode1: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{4,6}$/
                        }
                    },
                    dobYear: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    emailIdForSignUp: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^([a-zA-Z0-9\._\-]+)@([a-zA-Z0-9_\-]+)[\.][a-zA-Z][a-zA-Z]+([a-zA-Z0-9\\.]*[a-zA-Z])+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "100"
                        }
                    }
                },
                recipientDetails: {
                    targetCountryMSISDN: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[0-9]{1,20}$/
                        }
                    },
                    messageText: {
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^.{0,30}$/
                        }
                    },
                    countryChoiceITU: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                storeLocatorSearchForm: {
                    searchStoreCriteria: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    },
                    searchStoreValue: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                formForTopupCheckout: {
                    acceptTermsAndCondition: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        }
                    }
                },
                userProfileCSAForm: {
                    emailCsaId: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^^[a-zA-Z0-9]+$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    },
                    msisdnemail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}|^0{1}[1-9]{1}[0-9]{6,13}$/
                        }
                    }
                },
                resendVerificationEmailForm: {
                    emailCsaId: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^^[a-zA-Z0-9]+$/
                        },

                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    },
                    msisdnemail: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}|^0{1}[1-9]{1}[0-9]{6,13}$/
                        }
                    }

                },
                deleteMSIDNForm: {
                    csaId: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9 ]+$/
                        },
                        MaxLength: {
                            ValidationMessage: "You have exceeded the maximum length",
                            Length: "12"
                        },
                        MinLength: {
                            ValidationMessage: "This field has a minimum length",
                            Length: "4"
                        }
                    },
                    msidn: {
                        Required: {
                            ValidationMessage: "This is a required field"
                        },
                        Format: {
                            ValidationMessage: "Please enter a valid format",
                            Regex: /^[a-zA-Z0-9 ]+$/
                        }
                    }
                }
            }
        },
        counters: {
            parsePostCodeFailure: 0
        },
        arrays: {
            predictiveDropDown: {
                countryList: [],
                continentList: [],
                countryCodeList: [],
                srcList: [],
                destList: [],
                search: []
            }
        }
    },
    init: function () {
        var _sel = lebara.vars.selectors;
        lebara.shopRateRevealer();
        if (lebara.vars.triggers.leapFrogRewardsLoginPopUp == "true" && lebara.vars.triggers.showLeapFrogRewardsLoginPopUpAgain == "true") {
            lebara.leapFrogRewardsLoginPopUp();
        }
        if (lebara.vars.triggers.inviteMessagePrompt == "true") {
            lebara.inviteMessageConfirmPopup();
        }
        if ($(_sel.commonQuestions).length > 0) {
            lebara.modalIframe(_sel.commonQuestions, 400);
        }
        if ($(_sel.loginTrigger).length > 0) {
            lebara.modalIframe(_sel.loginTrigger, 240);
        }
        if ($(_sel.reviewTrigger).length > 0) {
            lebara.modalReviewFrame(_sel.reviewTrigger, 235);
        }
        if ($(_sel.reviewTriggerMain).length > 0) {
            lebara.modalReviewFrame(_sel.reviewTriggerMain, 570);
        }
        if ($(_sel.categories + ' div').length > 2) {
            lebara.categoryToggle();
        }
        if ($(_sel.categoryLastRowFix).length > 0) {
            lebara.categoryLastRowFix();
        }
        if ($(_sel.existingNumber).length > 0) {
            lebara.existingNumber();
        }
        if ($(_sel.multipleAddresses).length > 0) {
            lebara.multipleAddresses();
        }
        if ($(_sel.successTop).length > 0) {
            lebara.successTop();
        }
        if ($(_sel.reCaptcha).length > 0) {
            lebara.reCaptcha();
        }
        if ($(_sel.changeAddress).length > 0) {
            lebara.changeAddress();
        }
        if ($(_sel.offerLink).length > 0) {
            lebara.offers();
        }
        if ($(_sel.offerLink).length > 0) {
            lebara.offersHover();
        }
        if ($(_sel.billModule).length > 0) {
            lebara.billModule();
        }
        if ($(_sel.handsetBoltons).length > 0) {
            lebara.handsetBoltons();
        }
        if ($(_sel.pinMethod).length > 0) {
            lebara.pinMethod();
        }
        if ($(_sel.simSelectionPanel).length > 0) {
            lebara.simSelectionPanel();
        }
        if ($(_sel.flagSelectionPanel).length > 0) {
            lebara.flagSelectionPanel();
        }
        if ($(_sel.boltonSelectionPanel).length > 0) {
            lebara.boltonSelectionPanel();
        }
        if ($(_sel.boltCheckboxes).length > 0) {
            lebara.selectBoltOn();
        }
        if ($(_sel.moreInfoLink).length > 0) {
            lebara.toggleInfo();
        }
        if ($(_sel.subscribedMoreInfoLink).length > 0) {
            lebara.toggleInfo1();
        }
        if ($(_sel.showHowToFindMyNumber).length > 0) {
            lebara.showHowToFindMyNumber();
        }
        if ($(_sel.moreDetailLink).length > 0) {
            lebara.toggleInfo();
        }

        // date picker
        if ($(_sel.toDate).length > 0) {
            lebara.datePicker(_sel.toDate, lebara.vars.strings.en.toDateLabel);
        }
        if ($(_sel.fromDate).length > 0) {
            lebara.datePicker(_sel.fromDate, lebara.vars.strings.en.fromDateLabel);
        }

        if ($(_sel.textBoxWithValue).length > 0) {
            lebara.removeTextBoxValue(_sel.textBoxWithValue);
        }
        if ($(_sel.removeTextAreaRating).length > 0) {
            lebara.removeTextAreaForReview(_sel.removeTextAreaRating);
        }
        if ($(_sel.businessTypeSelect).length > 0) {
            lebara.displayOther();
        }
        if ($(_sel.navigation).length > 0) {
            lebara.Navigation();
        }
        if ($(_sel.checkoutAddressTrigger).length > 0) {
            lebara.showFields();
        }
        if ($(_sel.contactEmailField).length > 0) {
            lebara.contactFieldSwitching();
        }
        if ($(_sel.tabbedRadio).length > 0) {
            lebara.selectedRadioTabs(_sel.tabbedRadioWrapper);
        }
        if ($(_sel.simSelectionAlt).length > 0) {
            lebara.selectedRadioTabs(_sel.simSelectionAltWrapper);
        }

        if ($(_sel.helpLink).length > 0) {
            lebara.HelpTooltips();
        }
        // added for formForVoucherSubmission by shyam
        if ($(_sel.formForVoucherSubmission).length > 0) {
            lebara.FormValidation(_sel.formForVoucherSubmission);
        }
        if ($(_sel.languageSettingsForm).length > 0) {
            lebara.FormValidation(_sel.languageSettingsForm);
        }
        if ($(_sel.cprForm).length > 0) {
            lebara.FormValidation(_sel.cprForm);
        }
        if ($(_sel.personalInformationForm).length > 0) {
            lebara.FormValidation(_sel.personalInformationForm);
            lebara.CheckSubmitStatus();
        }
        if ($(_sel.simFormVariable).length > 0) {
            lebara.FormValidation(_sel.simFormVariable);
            lebara.CheckSubmitStatus();
        }
        if ($(_sel.manageTopUpChannels).length > 0) {
            lebara.FormValidation(_sel.manageTopUpChannels);
        }
        if ($(_sel.personalInformationFormFreeSim).length > 0) {
            lebara.FormValidation(_sel.personalInformationFormFreeSim);
        }
        if ($(_sel.changePasswordForm).length > 0) {
            lebara.FormValidation(_sel.changePasswordForm);
        }
        if ($(_sel.securityCodeForm).length > 0) {
            lebara.FormValidation(_sel.securityCodeForm);
        }
        if ($(_sel.storeLocatorAdminForm).length > 0) {
            lebara.FormValidation(_sel.storeLocatorAdminForm);
        }
        if ($(_sel.formForTopupCheckout).length > 0) {
            lebara.FormValidation(_sel.formForTopupCheckout);
        }
        if ($(_sel.activationForm).length > 0) {
            lebara.FormValidation(_sel.activationForm);
        }
        if ($(_sel.troubleTicketForm).length > 0) {
            lebara.FormValidation(_sel.troubleTicketForm);
        }
        if ($(_sel.conversationReplyForm).length > 0) {
            lebara.FormValidation(_sel.conversationReplyForm);
        }
        if ($(_sel.reviewInformationForm).length > 0) {
            lebara.FormValidation(_sel.reviewInformationForm);
        }
        if ($(_sel.loginForm).length > 0) {
            lebara.FormValidation(_sel.loginForm);
        }
        if ($(_sel.previewLoginForm).length > 0) {
            lebara.FormValidation(_sel.previewLoginForm);
        }
        if ($(_sel.storeLocatorLoginForm).length > 0) {
            lebara.FormValidation(_sel.storeLocatorLoginForm);
        }
        if ($(_sel.storeLocatorEmailForm).length > 0) {
            lebara.FormValidation(_sel.storeLocatorEmailForm);
        }
        if ($(_sel.storeLocatorSearchForm).length > 0) {
            lebara.FormValidation(_sel.storeLocatorSearchForm);
        }
        if ($(_sel.storeLocatorForm).length > 0) {
            lebara.FormValidation(_sel.storeLocatorForm);
        }
        if ($(_sel.recipientDetails).length > 0) {
            lebara.FormValidation(_sel.recipientDetails);
        }
        if ($(_sel.resendVerificationEmailForm).length > 0) {
            lebara.FormValidation(_sel.resendVerificationEmailForm);
        }
        if ($(_sel.userProfileCSAForm).length > 0) {
            lebara.FormValidation(_sel.userProfileCSAForm);
        }
        if ($(_sel.deleteMSIDNForm).length > 0) {
            lebara.FormValidation(_sel.deleteMSIDNForm);
        }
        if ($(_sel.mgmForm).length > 0) {
            lebara.FormValidation(_sel.mgmForm);
        }
        if ($(_sel.postCodeLookUpForm).length > 0) {
            lebara.FormValidation(_sel.postCodeLookUpForm);
        }
        if ($(_sel.contactForm).length > 0) {
            lebara.FormValidation(_sel.contactForm);
        }
        if ($(_sel.Allform).length > 0) {
            lebara.disableCopyPaste();
        }
        if ($(_sel.predictiveDropDown).length > 0) {
            lebara.predictiveDropDown();
        }
        if ($(_sel.deactivate).length > 0) {
            lebara.deactivateSwitcher();
        }
        if ($(_sel.activate).length > 0) {
            lebara.deactivateSwitcher();
        }
        if ($(_sel.tableHighlight).length > 0) {
            lebara.tableHighlight();
        }
        if ($(_sel.radioSlider).length > 0) {
            lebara.radioSlider();
        }
        if ($(_sel.popup).length > 0) {
            lebara.popup();
        }
        if ($(_sel.printButton).length > 0) {
            lebara.printPage($(_sel.printButton));
        }
        if ($(_sel.printPopTrigger).length > 0) {
            lebara.printPopTrigger($(_sel.printPopTrigger));
        }

        if ($(_sel.selectViewing).length > 0) {
            lebara.selectFormSubmit('viewing');
        }

        if ($(_sel.prePayNumberTrigger).length > 0) {
            lebara.toggleFields($(_sel.prePayNumberTrigger), $(_sel.prePayNumberTarget));
        }

        if ($(_sel.postCodeLookUpFields).length > 0) {
            $(_sel.postCodeLookUpTrigger).each(function () {
                $(this).bind("click", function (e) {
                    if (($("#pCodeFind").val() || $("#area").val() || $("#address1").val() || $("#adline2").val() || $("#postCode").val() ) && (($("#pCodeFind").val() == undefined || $("#pCodeFind").val() == '' || $("#pCodeFind").val() != $("#pCodeFind").attr('alt')) && ($("#area").val() == undefined || $("#area").val() == '' || $("#area").val() != $("#area").attr('alt')) && ($("#address1").val() == undefined || $("#address1").val() == '' || $("#address1").val() != $("#address1").attr('alt')) && ($("#adline2").val() == undefined || $("#adline2").val() == '' || $("#adline2").val() != $("#adline2").attr('alt')) && ($("#postCode").val() == undefined || $("#postCode").val() == '' || $("#postCode").val() != $("#postCode").attr('alt')))) {
                        lebara.postCodeGetJson(lebara.vars.paths.postCodeLookUpJson + "?", this);
                    }
                    return false;
                });
            });
            /* AddressFinderWizard */
            $(_sel.addressFinderWizardTrigger).each(function () {
                $(this).bind("click", function (e) {
                    if (($("#pCodeFind").val()) && (($("#pCodeFind").val() == undefined || $("#pCodeFind").val() == '' || $("#pCodeFind").val() != $("#pCodeFind").attr('alt'))
                        )) {
                        lebara.addressFinderWizardGetJson(lebara.vars.paths.postCodeLookUpJson + "?", this);
                    }
                    return false;
                });
            });
        }
        if ($(_sel.postCodeLookUpFields1).length > 0) {
            $(_sel.postCodeLookUpTrigger1).each(function () {
                $(this).bind("click", function (e) {

                    var viaType_var = $("#viaType").val();
                    var fieldBlank = false;

                    if ((viaType_var != undefined) && (viaType_var == null || viaType_var == '' || viaType_var.match(/select/i))) {
                        $("#viaType").blur();
                        fieldBlank = true;
                    }
                    if (($("#address1").val() != undefined) && ($("#address1").val() == null || $("#address1").val() == '')) {
                        $("#address1").blur();
                        fieldBlank = true;
                    }
                    if (($("#address2").val() != undefined) && ($("#address2").val() == null || $("#address2").val() == '')) {
                        $("#address2").blur();
                        fieldBlank = true;
                    }
                    if (($("#number").val() != undefined) && ($("#number").val() == null || $("#number").val() == '')) {
                        $("#number").blur();
                        fieldBlank = true;
                    }
                    if (($("#postCode").val() != undefined) && ($("#postCode").val() == null || $("#postCode").val() == '')) {
                        $("#postCode").blur();
                        fieldBlank = true;
                    }
                    if (($("#pCodeFind").val() != undefined) && ($("#pCodeFind").val() == null || $("#pCodeFind").val() == '')) {
                        $("#pCodeFind").blur();
                        fieldBlank = true;
                    }
                    else if (!fieldBlank && ($("#viaType").val() || $("#address1").val() || $("#number").val() || $("#pCodeFind").val())) {

                        lebara.postCodeGetJson1(lebara.vars.paths.postCodeLookUpJson + "?", this);
                    }
                    return false;
                });
            });
        }

        if ($(_sel.languageSelector).length > 0) {
            lebara.getJson(lebara.vars.paths.languageSelectorJson, lebara.loadLanguageSelector, false);
        }
        if ($(_sel.newLanguageSelector).length > 0) {
            lebara.getJson(lebara.vars.paths.languageSelectorJson, lebara.loadNewLanguageSelector, false);
        }
        if (lebara.vars.triggers.passwordPrompt == "true") {
            lebara.displayPasswordPrompt();
        }
        if (lebara.getParam("openAddressFields").length > 0) {
            lebara.showAddressFieldsForValidation();
        }
        if (lebara.getParam("closeModal").length > 0) {
            parent.lebara.closeModal(true);
        }
        if (lebara.getParam("countryCode").length > 0) {
            lebara.getJson(lebara.vars.paths.countryListJson, lebara.PopulateRates);
        }

        if (lebara.getParam("expandCategories").length > 0) {
            lebara.expandCategoriesByParam();
        }
        // added by shyam: extra condition for login light box for postpay
        // check out migration scenario
        if (lebara.getParam("loginModal").length > 0 || lebara.vars.triggers.loginPrompt == "true") {
            lebara.displayLoginModal();
        }
        if (lebara.vars.triggers.nonElegibleBoltonsModal == "true") {
            lebara.displayNonElegibleBoltonsModal();
        }

        // displayPasswordModal
        if ($(_sel.showRatesLink).length > 0) {
            lebara.showRates();
        }
        if ($(_sel.conversationList).length > 0) {
            lebara.selectAll();
        }
        if ($(_sel.planSummaryAdd).length > 0) {
            lebara.addToBasket(_sel.planSummaryAdd);
        }
        if ($(_sel.addToBasketTrigger).length > 0) {
            lebara.addToBasket(_sel.addToBasketTrigger);
        }
        if ($(_sel.singleConversationDelete).length > 0) {
            lebara.inlineModal(_sel.singleConversationDelete, $("#deleteConversation"));
        }
        if ($(_sel.singleConversationChange).length > 0) {
            lebara.inlineModal(_sel.singleConversationChange, $("#changeConversationStatus"));
        }
        if ($(_sel.unsubscribeTicket).length > 0) {
            lebara.inlineModalForTicketing(_sel.unsubscribeTicket, $("#unsubscribeTicket"), 650);
        }
        if ($(_sel.termsAndConditions).length > 0) {
            lebara.inlineModal(_sel.termsAndConditions, $("#termsCondition"), 660);
        }

        if ($(_sel.roamingDeactivationLink).length > 0) {
            lebara.inlineModal(_sel.roamingDeactivationLink, $("#roamingDeactivation"), 660);
        }
        // Home page set up
        if ($(_sel.createTabsHome).length > 0) {
            lebara.createTabsHome();
        }
        if ($(_sel.homePanels).length > 0) {
            lebara.homePanels(5000);
        }
        if (lebara.getParam("openLoginTab").length > 0 && $(lebara.vars.selectors.loginTabLink).length > 0) {
            $(lebara.vars.selectors.loginTabLink).click();
        }

        // Shop home page setup
        if ($(_sel.createTabsShop).length > 0) {
            lebara.createTabsShop();
        }
        if ($(_sel.shopPanels).length > 0) {
            lebara.shopPanels(5000);
        }
        if ($(_sel.scheduledTopUpPeriod).length > 0) {
            lebara.scheduledTopUp();
        }
        if ($(_sel.scheduledTopUpPeriodExtra).length > 0) {
            lebara.extraScheduledTopUp();
        }
        if ($(_sel.btnCancelDialog).length > 0) {
            $(_sel.btnCancelDialog).bind("click", function () {
                lebara.closeModal(false);
                return false;
            });
        }
        // checkout
        if ($(_sel.letUsCallYou).length > 0) {
            lebara.modalCallBackFrame(_sel.letUsCallYou, 540);
        }
        if ($(_sel.callMeBackSubmit).length > 0) {
            lebara.inlineModalCallMeBack(_sel.callMeBackSubmit, $("#letUsCallYouSubmitModal"), 660);
        }
        if ($(_sel.termsAndCondi).length > 0) {
            lebara.inlineModal(_sel.termsAndCondi, $("#termsAndCondiModal"), 660);
        }

        // Review and Ratings
        if ($(_sel.reviewsAccordion).length > 0) {
            lebara.toggleInfo();
        }
        if ($(_sel.writeReview).length > 0) {
            lebara.inlineModalForCreateReview(_sel.writeReview, $("#writeReviewForm"), 660);
        }
        if ($(_sel.doRating).length > 0) {
            lebara.starRating();
        }

        if ($(_sel.monthlyAllowance).length > 0) {
            lebara.showMonthlyAllowance();
        }

        // callback
        if ($(_sel.callbackForm).length > 0) {
            lebara.FormValidation(_sel.callbackForm);
        }

        // newsletter
        if ($(_sel.newsLetterForm).length > 0) {
            lebara.FormValidation(_sel.newsLetterForm);
        }

        // Added for MGM
        if ($(_sel.mgmForm).length > 0) {
            lebara.FormValidation(_sel.mgmForm);
        }

        // BusinessSimForm
        if ($(_sel.businessSimForm).length > 0) {
            lebara.FormValidation(_sel.businessSimForm);
        }

        if ($(_sel.termsAndCondi).length > 0) {
            lebara.inlineModal(_sel.termsAndCondi, $("#termsAndCondiModal"), 660);
        }

        if ($(_sel.leapFrogRewards).length > 0) {
            lebara.inlineModalForLeapFrogSetting(_sel.leapFrogRewards, $("#leapFrogRewardsPopup"), 660, 'auto', lebara.vars.strings.en.leapFrogRewardsTitle);
        }

        if ($(_sel.leapFrogSaveSettingConfirm).length > 0) {
            lebara.inlineModalForLeapFrogSetting(_sel.leapFrogSaveSettingConfirm, $("#leapFrogRewardsSaveSettings"), 660, 'auto', lebara.vars.strings.en.leapFrogSaveSettingsTitle);
        }

        lebara.postPayPlans();
        // Initializing phase 2 scripts
        lebaraFixes.homePageTabPanel();
        if ($("html").attr("dir") == "rtl") {
            rtlLanguage.languageSwitch()
        }
        ;

        if ($(_sel.retailerServiceForm).length > 0) {
            lebara.FormValidation(_sel.retailerServiceForm);
        }

        if ($(_sel.csServiceForm).length > 0) {
            lebara.FormValidation(_sel.csServiceForm);
        }
        if (lebara.vars.triggers.showExtraTopupFailPopup == "true") {
            lebara.extraTopupFailPopup();
        }

    },
    showMonthlyAllowance: function () {

        $(lebara.vars.selectors.monthlyAllowance).hide();

        $('#SeeMore').toggle(function () {

            $(lebara.vars.selectors.monthlyAllowance).show();
        }, function () {

            $(lebara.vars.selectors.monthlyAllowance).hide();
        })
    },
    checkForCPR: function (objID, obj2) {
        var obj1 = document.getElementById(objID);
        var obj2 = document.getElementById(obj2);

        if (obj1.checked) {
            $('#showDiv').show();
            $('#hideDiv').hide();
            $('#addressExp1').show();
            $('#addressExp').hide();
            $('#fieldSet1').hide();

            obj2.disabled = false;
        }
        else {
            $('#hideDiv').show();
            $('#showDiv').hide();

            $('#addressExp').show();
            $('#addressExp1').hide();
            $('#fieldSet1').show();
            $('#cprNonRequired').attr('value', "");
            $('#cprNonRequired').attr('disabled', "true");

            obj2.disabled = true;
        }
    },
    searchPremiumNumbers: function () {
        $('.module-premNum').each(function () {
            var $premNumModule = $(this);
            var $premiumNumbers = $premNumModule.find('.premNumberList');
            var $premiumNumbersLabels = $premiumNumbers.find('label');
            var $premNumSearchBox = $premNumModule.find('.premNumSearch');
            var $premNumberListNumbers = $premNumModule.find('.premNumberListNumbers');
            var $premNumNotFound = $premNumModule.find('.premNumberListNotFound');

            if ($premNumSearchBox.val() != $premNumSearchBox.attr('title') && $premNumSearchBox.val() != "") {
                $premNumberListNumbers.show();
                $premiumNumbers.find('label').hide();
                $premiumNumbers.find('input[value*=' + $premNumSearchBox.val() + ']').parent().show();
                if ($premiumNumbersLabels.filter(':visible').length == 0) {
                    $premNumNotFound.show();
                    $premNumberListNumbers.hide();
                }
                else {
                    $premNumNotFound.hide();
                }
            }
            else {
                $premNumberListNumbers.show();
                $premiumNumbers.find('label').show();
                $premNumNotFound.hide();
            }
        });
    },
    premiumNumbersLabelsOnlick: function (obj, numberlock, finalPrice) {

        var $premiumNumbersLabels = (obj.parentNode).childNodes;
        for (var i = 0; i < $premiumNumbersLabels.length; i++) {
            if ($premiumNumbersLabels[i].className)
                $premiumNumbersLabels[i].className = '';
        }
        $(obj).addClass('selected');
        premiumNumberLocking(numberlock, finalPrice);
    },
    printPage: function (trigger) {
        $(trigger).bind("click", function () {
            window.print();
            return false;
        });
    },
    printPopTrigger: function (trigger) {
        $(trigger).unbind("click");
        $(trigger).bind("click", function () {
            var printPopPath = $(this).attr('rel');
            printpopwin = window.open(printPopPath, 'printpopwin1', 'directories=no,location=no,menubar=no,toolbar=no,width=720,height=500,scrollbars=yes');
            if (window.focus) {
                printpopwin.focus();
            }

            return false;
        });
    },
    selectAll: function () {
        $(lebara.vars.selectors.conversationListSelectAll).change(function () {
            select(this);
        });
        function select(input) {
            var allRadio = $(lebara.vars.selectors.conversationList).find("table td input");
            if ($(input).is(':checked')) {

                $(allRadio).attr("checked", "checked");
                $('.selectAll').hide();
                $('.unselectAll').show();
            }
            else {
                $(allRadio).removeAttr("checked");
                $('.selectAll').show();
                $('.unselectAll').hide();
            }
        }

    },
    getUkRates: function () {
        var radios = $(lebara.vars.selectors.ukTariffForm).find("input[name='amountGroup']");
        var amountChecked = $(lebara.vars.selectors.ukTariffForm).find("input[name='amountGroup']:checked");

        $(lebara.vars.selectors.ukTariffForm).find('.planSummaryExpanded').css(
            {
                "display": "none"
            });
        if ((amountChecked).length > 0) {

            $(".uk input[name='amountGroup']:checked").each(function () {
                $(this).closest('.field').addClass('selected');
                var amount = $(amountChecked).attr("id");
                $.ajax(
                    {
                        url: lebara.vars.paths.postPayPlansHtml + "?isFormLoaded=true&callGroup=homecountry&countryCode=en&productAttrs=showAllowanceRates&productCode=" + amount,
                        dataType: 'html',
                        type: 'GET',
                        success: lebara.getPlanDetails
                    });
            });
        }
        else {
            var callGroupChecked = $("input[name='callGroup']:checked")
            var callgroupValue = callGroupChecked.attr("value");
            $(".homecountryTariff").children(".simSelectionAlt").children().remove();
            $(".homecountryTariff").children(".simSelectionAlt").append("<div class='product'></div>");

            // Ajax Call added by sumatt to get the postpay products for
            // mycountry and mixed

            var queryString = $('#postpay').serializeArray();
            $.ajax(
                {
                    url: lebara.vars.paths.postPayPlansHtml + "?isAllowanceCountrySelected=true&callgroup=" + callgroupValue,
                    data: queryString,
                    dataType: 'html',
                    type: 'GET',
                    success: function (html) {
                        $(".product").replaceWith(html);
                        lebara.selectedRadioTabs("");
                        $(".uk input[name='amountGroup']").change(function () {
                            if ($(".uk input[name='amountGroup']:checked").attr("checked", "true")) {
                                $(".uk input[name='amountGroup']:checked").each(function () {
                                    var amount = $(this).attr("id");
                                    $('#productCode').val(amount);
                                    $('#productAttrs').val('showAllowanceRates');
                                    $('#allowanceId').val('allowanceId');

                                    var queryString = $('#postpay').serializeArray();
                                    $.ajax(
                                        {
                                            url: lebara.vars.paths.postPayPlansHtml,
                                            cache: false,
                                            data: queryString,
                                            dataType: 'html',
                                            type: 'GET',
                                            success: lebara.getPlanDetails
                                        });

                                });
                            }

                            if ($("a.secButton-min").length > 0) {
                                $("a.secButton-min").each(function () {
                                    $(this).click();
                                });
                            }

                        });
                    }
                });

            $(lebara.vars.selectors.ukTariffForm).find(".bundleRates").html("");
            $(lebara.vars.selectors.ukTariffForm).find(".box-1").css(
                {
                    "display": "none"
                });
        }
    },
    selectedRadioTabs: function (wrapper) {
        if (wrapper == ".tabbedRadio") {
            var wrapper = $(lebara.vars.selectors.tabbedRadioWrapper);
            var radio = $(lebara.vars.selectors.tabbedRadio)
            var selected = $(lebara.vars.selectors.tabbedRadio + ":checked");
            $(lebara.vars.selectors.tabbedRadio).each(function () {
                if ($(this).is(':checked')) {
                    $(this).parents(".field").addClass("selected");
                }
            });

            $(wrapper).find(".field").bind("click", function () {
                $(this).find("input").attr('checked', 'checked');
                $(this).find("input").change();
                $(wrapper).find(".field").unbind("click");
            });

            $(wrapper).find(".field input").change(function () {
                $(wrapper).find(".field").removeClass("selected");
                $(this).parents(".field").addClass("selected")
                if ($(this).attr("id") == "uk") {
                    lebara.getUkRates();
                }
            });
        }
        else {
            var wrapper = $(lebara.vars.selectors.simSelectionAltWrapper);
            var radio = $(lebara.vars.selectors.simSelectionAlt)
            radio.addClass("accessibility");
            var selected = $(lebara.vars.selectors.simSelectionAlt + ":checked");
            $(selected).parents(".field").addClass("selected");
            $(wrapper).find(".field").bind("click", function () {
                $(wrapper).find(".field").removeClass("selected");
                $(this).addClass("selected")

                $(this).find("input").attr('checked', 'checked');
                $(this).find("input").change();
                $(".boltOnBundles").css(
                    {
                        "display": "block"
                    });
            });
        }
    },
    expandCategoriesByParam: function () {
        $(lebara.vars.selectors.categories + ' a.secButton').click();
    },
    closeModal: function (param) {
        $(".ui-dialog").remove();
        if (param == true) {
            window.location.reload();
        }
    },
    disableCopyPaste: function () {
        if ($("#confirmEmail").length > 0) {
            document.getElementById('confirmEmail').onpaste = function () {
                return false
            };
        }
        if ($("#confirmPassword").length > 0) {
            document.getElementById('confirmPassword').onpaste = function () {
                return false
            };
        }
        if ($("#repeatEmail").length > 0) {
            document.getElementById('repeatEmail').onpaste = function () {
                return false
            };
        }
        if ($("#repeatEmail1").length > 0) {
            document.getElementById('repeatEmail1').onpaste = function () {
                return false
            };
        }
    },
    scheduledTopUp: function () {
        $(lebara.vars.selectors.scheduledTopUpPeriod).click(function () {
            if ($(this).val() == "monthly") {
                $(lebara.vars.selectors.scheduledTopUpWeekly).hide();
                $(lebara.vars.selectors.scheduledTopUpMonthly).show();
            }
            else {
                $(lebara.vars.selectors.scheduledTopUpWeekly).show();
                $(lebara.vars.selectors.scheduledTopUpMonthly).hide();
            }
        });
    },
    extraScheduledTopUp: function () {
        $(lebara.vars.selectors.scheduledTopUpPeriodExtra).click(function () {
            if ($(this).val() == "monthly") {
                $(lebara.vars.selectors.extraScheduledTopUpWeekly).hide();
                $(lebara.vars.selectors.extraScheduledTopUpMonthly).show();
            }
            else {
                $(lebara.vars.selectors.extraScheduledTopUpWeekly).show();
                $(lebara.vars.selectors.extraScheduledTopUpMonthly).hide();
            }
        });
    },
    showAddressFieldsForValidation: function () {
        if ($(lebara.vars.selectors.checkoutAddressTrigger).length > 0) {
            $(lebara.vars.selectors.checkoutAddressTrigger).click();
        }
    },
    PopulateRates: function (json) {
        if (json) {
            if ($(lebara.vars.selectors.populatedCountry).length > 0) {
                var code = lebara.getParam("countryCode");
                var input = $(lebara.vars.selectors.populatedCountry).find(lebara.vars.selectors.countryCode);
                var predictive = $(lebara.vars.selectors.populatedCountry).find(".fakeInput input");
                $(input).val(code);
                lebara.onCountrySelected(code, input);
                for (var i = 0, jLen = json.length; i < jLen; i++) {
                    var _item = json[i];
                    if (_item.value == code) {

                        predictive.val(_item.label)
                    }
                }
            }
        }
    },
    bundles: function () {
        if ($(lebara.vars.selectors.bundleTableRows).length > 3) {
            minimize($(lebara.vars.selectors.bundlesButton));
            var html = "<div><a href='#' class='secButton secButton-max'>" + lebara.vars.strings.en.bundleExpanded + "</a></div>"
            if ($('.bundles').parent().find('.roaming').length > 0) {
                html += '<div class="hr"><hr/></div>';
            }

            $(".bundles table").after(html);

            $(lebara.vars.selectors.bundlesButton).toggle(function () {

                maximize(this);
            }, function () {

                minimize(this);

            });
        }
        function minimize(trigger) {
            $(lebara.vars.selectors.bundleTableRows + ":gt(2)").hide();
            $(lebara.vars.selectors.bundleTableRows + ":eq(2)").addClass('last');
            $(trigger).removeClass("secButton-min");
            $(trigger).addClass("secButton-max");
            $(trigger).text(lebara.vars.strings.en.bundleExpanded);
        }

        function maximize(trigger) {
            $(lebara.vars.selectors.bundleTableRows).show();
            $(lebara.vars.selectors.bundleTableRows + ":eq(2)").removeClass('last');
            $(trigger).removeClass("secButton-max");
            $(trigger).addClass("secButton-min");
            $(trigger).text(lebara.vars.strings.en.bundleCollapsed);
        }

    },
    displayOther: function () {
        $("#businessType").change(function () {
            if ($(this).val() == "other") {
                $(".otherField").show();
            }
            else {
                $(".otherField").hide();
            }
        });
    },
    contactFieldSwitching: function () {
        // END HIDE AND SHOW EMAIL AND PHONE INPUTS //
        hideInput();

        $("input[name='replyTypeCode']").change(function () {
            hideInput();
        });
        function hideInput() {

            var selected = $(lebara.vars.selectors.contactByChecked).val();
            // added by mehak
            if (selected == null || selected == 'undefined') {
                $("input[name='replyTypeCode']")[0].checked = true;
            }
            if (selected == "contactByEmail") {
                // added by mehak
                $("#contactDetailEmail").show();
                $("#contactDetailPhone").hide();
                $(lebara.vars.selectors.contactEmailField).show();
                $(lebara.vars.selectors.contactPhoneField).hide();

            }
            else if (selected == "contactByPhone") {
                // added by mehak
                $("#contactDetailPhone").show();
                $("#contactDetailEmail").hide();
            }
        }

    },
    Navigation: function () {
        $("#navigation ul li").mouseover(function () {
            $(this).parents("#navigation").children(".content").children("ul").addClass("hideOriginal");
            $("#navigation ul li").removeClass("hover");
            $(this).addClass("hover");
        });
        $("#navigation ul ul").mouseout(function () {
            $(this).parents("#navigation").children(".content").children("ul").removeClass("hideOriginal");
            $("#navigation ul li").removeClass("hover");
        });
    },
    toggleFields: function (trigger, target) {
        // Generic Display - Do not Change
        show()
        trigger.bind("click", function () {

            show()
        });
        function show() {
            if (trigger.is(':checked')) {
                $(target).show();
            }
            else {
                $(target).hide();
            }
        }

    },
    getParam: function (name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + name + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(window.location.href);
        if (results == null) {
            return "";
        }
        else {
            return results[1];
        }

    },
    selectFormSubmit: function (selectID) {
        $('#' + selectID).change(function () {
            $(this).closest('form').submit();
        });
    },
    displayPasswordPrompt: function () {
        var iframeSrc = lebara.vars.paths.overlaySaveSettings + "?overlay=true";
        var modalTitle = "Enter Password"
        var modalWidth = 700;
        var modalHeight = 240;
        $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" frameborder="0" />').dialog(
            {
                title: modalTitle,
                width: modalWidth,
                height: modalHeight,
                modal: true
            }).width(modalWidth - 25).height(modalHeight - 20);
    },
    displayManageTopupSuccess: function () {
        var iframeSrc = '/components/userprofile/successManageTopUpChannels.jsp' + "?overlay=true";
        var modalTitle = '';
        var modalWidth = 670;
        var modalHeight = 305;

        $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" frameborder="0" />').dialog(
            {
                title: modalTitle,
                width: modalWidth,
                height: modalHeight,
                modal: true
            }).width(modalWidth - 25).height(modalHeight - 20);
    },
    displayNonElegibleBoltonsModal: function () {
        var iframeSrc = lebara.vars.paths.overlaySaveSettings1 + "?overlay=true";
        var modalTitle = lebara.vars.strings.en.nonElegibleBoltons;
        var modalWidth = 700;
        var modalHeight = 305;
        $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" frameborder="0" />').dialog(
            {
                title: modalTitle,
                width: modalWidth,
                height: modalHeight,
                modal: true
            }).width(modalWidth - 25).height(modalHeight - 20);
    },
    displayLoginModal: function () {
        var iframeSrc = lebara.vars.paths.loginModal + "?overlay=true";
        var modalTitle = "Login"
        var modalWidth = 670;
        var modalHeight = 220;
        $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" frameborder="0" />').dialog(
            {
                title: modalTitle,
                width: modalWidth,
                height: modalHeight,
                modal: true
            }).width(modalWidth - 25).height(modalHeight - 20);
    },
    loadLanguageSelector: function (json) {
        var html = "<ul class='clear'/>";
        $(".changeLang").append(html);
        var languageSelected = json[0].currentLanguage;
        if (json) {
            for (var i = 0, jLen = json.length; i < jLen; i++) {
                var _item = json[i];
                curUrl = document.location.href.split("?");

                if (languageSelected == _item.value) {
                    if (curUrl[1] != undefined && (curUrl[1].indexOf("list_reviews") > -1 || curUrl[1].indexOf("orderID") > -1) && curUrl[1].indexOf("isoCode") <= -1) {
                        $(lebara.vars.selectors.changeLanguageList).prepend("<li class='clear first'><a href='" + curUrl[0] + "?" + curUrl[1] + "&isoCode=" + _item.value + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");

                    }
                    else if (curUrl[1] != undefined && (curUrl[1].indexOf("list_reviews") > -1 || curUrl[1].indexOf("orderID") > -1) && curUrl[1].indexOf("isoCode") > -1) {
                        curUrl[1] = curUrl[1].substring(0, curUrl[1].indexOf("isoCode") - 1);
                        $(lebara.vars.selectors.changeLanguageList).prepend("<li class='clear first'><a href='" + curUrl[0] + "?" + curUrl[1] + "&isoCode=" + _item.value + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                    }
                    else {
                        var hashVal;
                        for (var j = 0; j < curUrl.length; j++) {
                            if (curUrl[j].indexOf("#") > -1) {
                                hashVal = curUrl[j].split("#");
                                curUrl[j] = hashVal[0];
                                break;
                            }
                        }
                        if (hashVal != undefined && hashVal[1] != undefined) {
                            $(lebara.vars.selectors.changeLanguageList).prepend("<li class='clear first'><a href='" + curUrl[0] + "?isoCode=" + _item.value + "#" + hashVal[1] + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                        }
                        else {
                            $(lebara.vars.selectors.changeLanguageList).prepend("<li class='clear first'><a href='" + curUrl[0] + "?isoCode=" + _item.value + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                        }
                    }
                }
                else {
                    if (curUrl[1] != undefined && (curUrl[1].indexOf("list_reviews") > -1 || curUrl[1].indexOf("orderID") > -1) && curUrl[1].indexOf("isoCode") <= -1) {
                        $(lebara.vars.selectors.changeLanguageList).append("<li class='clear'><a href='" + curUrl[0] + "?" + curUrl[1] + "&isoCode=" + _item.value + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                    }
                    else if (curUrl[1] != undefined && (curUrl[1].indexOf("list_reviews") > -1 || curUrl[1].indexOf("orderID") > -1) && curUrl[1].indexOf("isoCode") > -1) {
                        curUrl[1] = curUrl[1].substring(0, curUrl[1].indexOf("isoCode") - 1);
                        $(lebara.vars.selectors.changeLanguageList).append("<li class='clear'><a href='" + curUrl[0] + "?" + curUrl[1] + "&isoCode=" + _item.value + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                    }
                    else {
                        var hashVal;
                        for (var j = 0; j < curUrl.length; j++) {
                            if (curUrl[j].indexOf("#") > -1) {
                                hashVal = curUrl[j].split("#");
                                curUrl[j] = hashVal[0];
                                break;
                            }
                        }
                        if (hashVal != undefined && hashVal[1] != undefined) {
                            $(lebara.vars.selectors.changeLanguageList).append("<li class='clear'><a href='" + curUrl[0] + "?isoCode=" + _item.value + "#" + hashVal[1] + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                        }
                        else {
                            $(lebara.vars.selectors.changeLanguageList).append("<li class='clear'><a href='" + curUrl[0] + "?isoCode=" + _item.value + "' title=''><img src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                        }
                    }
                }
            }
            if ($(".changeLang ul li.first").length == 0) {
                $(".changeLang ul > li:first-child").addClass("first");
            }
            ;

            $(lebara.vars.selectors.changeLanguageList).bind("mouseover", function () {
                $(lebara.vars.selectors.changeLanguageList).addClass("languageSelectorOpen");
            });
            $(".changeLang ul li a").bind("mousedown", function () {
                var list = $(this).parents("ul");
                var selectedLang = $(this).attr("title");
            });
            $(lebara.vars.selectors.changeLanguageList).bind("mouseout", function () {

                $(".changeLang ul").removeClass("languageSelectorOpen");
                /* To fix z-index bug in IE7 */
                // $(".searchTopBox
                // input").show();
            });
        }
    },
    loadNewLanguageSelector: function (json) {
        var html = "<ul/>";
        $(".changeLangNew").append(html);
        var langList = ".changeLangNew ul"
        var languageSelected = json[0].currentLanguage;
        if (json) {
            for (var i = 0, jLen = json.length; i < jLen; i++) {
                var _item = json[i];
                curUrl = document.location.href.split("?");
                if (curUrl[1] != undefined && (curUrl[1].indexOf("list_reviews") > -1 || curUrl[1].indexOf("orderID") > -1) && curUrl[1].indexOf("isoCode") <= -1) {
                    $(langList).append("<li><a href='" + curUrl[0] + "?" + curUrl[1] + "&isoCode=" + _item.value + "' title=''><img width='21' height='19' src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                }
                else if (curUrl[1] != undefined && (curUrl[1].indexOf("list_reviews") > -1 || curUrl[1].indexOf("orderID") > -1) && curUrl[1].indexOf("isoCode") > -1) {
                    curUrl[1] = curUrl[1].substring(0, curUrl[1].indexOf("isoCode") - 1);
                    $(langList).append("<li><a href='" + curUrl[0] + "?" + curUrl[1] + "&isoCode=" + _item.value + "' title=''><img width='21' height='19' src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                }
                else {
                    var hashVal;
                    for (var j = 0; j < curUrl.length; j++) {
                        if (curUrl[j].indexOf("#") > -1) {
                            hashVal = curUrl[j].split("#");
                            curUrl[j] = hashVal[0];
                            break;
                        }
                    }
                    if (hashVal != undefined && hashVal[1] != undefined) {

                        $(langList).append("<li><a href='" + curUrl[0] + "?isoCode=" + _item.value + "#" + hashVal[1] + "' title=''><img width='21' height='19' src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                    }
                    else {
                        $(langList).append("<li><a href='" + curUrl[0] + "?isoCode=" + _item.value + "' title='" + _item.language + "'><img width='21' height='19' src='" + _item.flag + "' alt=''/><span>" + _item.language + "</span></a></li>");
                    }
                }
            }
            if ($(".changeLangNew ul li.first").length == 0) {
                $(".changeLangNew ul > li:first-child").addClass("first");
            }
            ;
            $(langList).bind("mouseover", function () {
                $(langList).addClass("languageSelectorOpen");
            });
            $(".changeLangNew ul li a").bind("mousedown", function () {
                var list = $(this).parents("ul");
                var selectedLang = $(this).attr("title");
            });
            $(langList).bind("mouseout", function () {
                $(".changeLangNew ul").removeClass("languageSelectorOpen");
            });
        }
    },
    datePicker: function (inputId, label) {
        var vlabel = $('label[for=' + inputId.substr(1) + ']').html();
        $('label[for=' + inputId.substr(1) + ']').html((vlabel.split(" "))[0]);

        $(inputId).datepicker(
            {
                dateFormat: 'dd/mm/yy',
                showOn: 'both',
                buttonImage: lebara.vars.paths.calendarImage,
                buttonImageOnly: true,
                buttonText: 'Calendar'
            });
    },
    inlineModal: function (trigger, target, modalWidth, modalHeight, modalTitle) {
        $(trigger).bind("click", function () {
            if (!modalWidth) {
                modalWidth = 462;
            }
            if (!modalHeight) {
                modalHeight = 'auto';
            }
            $(target).dialog(
                {
                    modal: true,
                    width: modalWidth,
                    title: modalTitle,
                    height: modalHeight
                });

            if (!modalTitle) {
                $(".ui-dialog-title").hide();
            }

            return false;
        });
    },
    inlineModalForLeapFrogSetting: function (trigger, target, modalWidth, modalHeight, modalTitle) {
        $(trigger).bind("click", function () {
            if (trigger == '#leapFrogSaveSettingConfirm' && $(lebara.vars.selectors.leapFrogSaveSettingCheckboxId).attr('checked'))
                return true;

            if (!modalWidth) {
                modalWidth = 462;
            }
            if (!modalHeight) {
                modalHeight = 'auto';
            }

            $(target).dialog(
                {
                    modal: true,
                    width: modalWidth,
                    title: modalTitle,
                    height: modalHeight
                });
            $(".ui-dialog-titlebar").addClass('ui-dialog-titlebar-leapfrog');
            if (!modalTitle) {
                $(".ui-dialog-title").hide();
            }
            return false;
        });
    },
    inlineModalForTicketing: function (trigger, target, modalWidth, modalTitle) {

        if (UnsubscrError == "y") {
            $(target).dialog(
                {
                    modal: true,
                    width: '650px',
                    height: 'auto',
                    title: lebara.vars.strings.en.unsubscribeModelTitle
                });
        }

        $(trigger).bind("click", function () {
            modalTitle = lebara.vars.strings.en.unsubscribeModelTitle;
            var modalHeight = 'auto';
            var currentValueTicketEnquery = $("#ticketEnquiry").val();
            var currentValueTicketField = $("#ticketField").val();
            var valid = true;

            if (currentValueTicketField == "Unsubscribe" && $.trim($("#ticketSubject").val()).length > 0 && currentValueTicketField != '' && $.trim($("#ticketEnquiry").val()).length > 0 && ($("#ticketEnquiry").val() != $.trim(ticketEnquiryDefaultValue))) {

                if (!modalWidth) {
                    modalWidth = 462;
                }

                $(target).dialog(
                    {
                        modal: true,
                        width: modalWidth,
                        height: modalHeight,
                        title: modalTitle
                    });

                if (!modalTitle) {
                    $(".ui-dialog-title").hide();
                }
                valid = false;
            }
            return valid;
        });
    },
    inlineModalForCreateReview: function (trigger, target, modalWidth, modalTitle) {
        $(trigger).bind("click", function () {
            var isCustomerLoggedIn = $("#isCustomerLoggedIn").val();
            var valid = true;

            if (isCustomerLoggedIn == 'yes') {
                if (!modalWidth) {
                    modalWidth = 462;
                }
                $(target).dialog(
                    {
                        modal: true,
                        width: modalWidth,
                        title: modalTitle
                    });
                if (!modalTitle) {
                    $(".ui-dialog-title").hide();
                }
                valid = false;
            }
            else {

                var url = "${contextPath}/view/content/pl_dashboardLoginSignup";
                Window.location = url;
            }
            return valid;
        });
    },
    ajaxModal: function (trigger, target, modalWidth, modalTitle) {

        if ($('div.commonQuestions').length > 0) {
            target = $('<div class="modal"><div class="popup popup-ajax clear" id="commonQuestionsModal"><div class="modalContent clear"></div></div></div>');
            target.appendTo('body');
        }
        $(trigger).not('.link').click(function () {
            if ($(this).hasClass('partnerViewMore')) {
                modalTitle = $(this).parent().parent().find('h3').html();
            }
            $("body").addClass("commQues");
            $.ajax(
                {
                    url: $(this).attr('href'),
                    dataType: 'html',
                    type: 'GET',
                    success: function (data) {
                        if (!modalWidth) {
                            modalWidth = 462;
                        }
                        var modalContent = $('<div>' + data + '</div>').find('#contentSmall').html();

                        $(target).find('.modalContent').html(modalContent);
                        $(target).dialog(
                            {
                                modal: true,
                                width: modalWidth,
                                title: modalTitle
                            });

                        if (!modalTitle) {
                            $(".ui-dialog-title").hide();
                        }
                    }
                });
            return false;
        });
    },
    inlineModalCallMeBack: function (trigger, target, modalWidth, modalTitle) {
        $(trigger).click(function () {
            $("#letUsCallYouModal").dialog("close");
            if (!modalWidth) {
                modalWidth = 462;
            }
            $(target).dialog(
                {
                    modal: true,
                    width: modalWidth,
                    title: modalTitle
                });
            if (!modalTitle) {
                $(".ui-dialog-title").hide();
            }
            return false;
        });
    },
    addToBasket: function (trigger) {
        $(trigger).bind("click", function () {
            if ($('input[name="terms"]:checked').length > 0 && (document.getElementById("basketQuestionReplace") != null || document.getElementById("basketQuestionReplace") != undefined))// conmdition
            {
                $('#basketQuestionReplace1').dialog(
                    {
                        modal: true,
                        width: 462
                    });
            }
            else if (document.getElementById("basketQuestionReplaceMylebara") != null || document.getElementById("basketQuestionReplaceMylebara") != undefined) {
                $('#basketQuestionReplaceMylebara1').dialog(
                    {
                        modal: true,
                        width: 462
                    });
            }
            else {
                if ($('#productFinalPrice').val() != 0.0 && $('#productFinalPrice').val() != 5.0) {
                    $('#basketQuestion').dialog(
                        {
                            modal: true,
                            width: 462,
                            beforeClose: function () {
                                window.location.reload();
                            }
                        });
                }
                else {
                    $('#basketQuestion').dialog(
                        {
                            modal: true,
                            width: 462
                        });
                }
            }
            $(".ui-dialog-title").hide();
            return false;
        });
    },
    inviteMessageConfirmPopup: function () {
        $('#inviteMessageConfirm').dialog(
            {
                modal: true,
                width: 600
            });
        $(".ui-dialog-title").hide();
        return false;
    },
    leapFrogRewardsLoginPopUp: function () {
        $('#leapFrogRewardsLoginPopUp').dialog(
            {
                modal: true,
                width: 600,
                title: lebara.vars.strings.en.leapFrogRewardsLoginPopUpTitle,
                height: 'auto'
            });
        $(".ui-dialog-titlebar").addClass('ui-dialog-titlebar-leapfrog');
        return false;
    },
    loadPrePayRates: function (html) {
        $(".prePayPlans").remove();
        $(".internationalTariff").remove();
        $(html).insertAfter(".planSummaryExpanded .predictiveDropDown");
    },
    loadPrePayRates1: function (html) {

        $("#planSummaryExpanded1 .prePayPlans").remove();
        $("#planSummaryExpanded1 .internationalTariff").remove();
        $(html).insertAfter("#planSummaryExpanded1 .predictiveDropDown");

    },
    extraTopupFailPopup: function () {
        if ($('#extraTopupFailPopup').length > 0) {
            $('#extraTopupFailPopup').dialog(
                {
                    modal: true,
                    width: 600,
                    title: lebara.vars.strings.en.extraTopupFailPopupTitle,
                    height: 'auto'
                });
        }
        $(".ui-dialog-titlebar").addClass('ui-dialog-titlebar-leapfrog');
        return false;
    },
    extrasFindMorePopup123: function () {
        $('#extrasFindMorePopup').dialog(
            {
                modal: true,
                width: 600,
                title: lebara.vars.strings.en.extrasFindMorePopupTitle,
                height: 'auto'
            });
        $(".ui-dialog-titlebar").addClass('ui-dialog-titlebar-leapfrog');
        return false;
    },
    modalIframe: function (link, modalHeight) {
        // for use for modals that need an iframe
        $(link).not('.link').click(function (event) {
            var iframeSrc = $(this).attr('href') + "?overlay=true";
            var modalTitle = ""

            if ($(this).hasClass('partnerViewMore')) {
                modalTitle = $(this).parent().parent().find('h3').html();
            }
            else {
                modalTitle = $(this).html();
            }
            var modalWidth = 690;
            $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" frameborder="0" />').dialog(
                {
                    title: modalTitle,
                    width: modalWidth,
                    height: modalHeight,
                    modal: true
                }).width(modalWidth - 25).height(modalHeight - 20);
            event.preventDefault();
        });
    },
    modalReviewFrame: function (link, modalHeight) {

        var modalWidth = 750;
        // for use for modals that need an iframe
        $(link).not('.link').click(function (event) {
            var iframeSrc = $(this).attr('href');
            var modalTitle = $(this).attr('name');
            var className = $(this).attr('class');
            defaultOpenReviewFrame = "y";
            if (className.indexOf('reviewTriggerMain') != -1)
                iframeSrc = iframeSrc + "&reviewOverlay=true";
            $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" frameborder="0" id="modalWriteReviewIFrame" />').dialog(
                {
                    title: modalTitle,
                    width: modalWidth,
                    height: modalHeight,
                    modal: true
                }).width(modalWidth - 25).height(modalHeight - 20).bind("dialogclose", function (event, ui) {
                    location.reload();
                });
            event.preventDefault();
        });
    },
    modalCallBackFrame: function (link, modalHeight) {
        // for use for modals that need an iframe
        $(link).not('.link').click(function (event) {
            var iframeSrc = $(this).attr('href');
            var modalTitle = $(this).attr('name');
            var className = $(this).attr('class')
            var width = $(this).attr('width')
            var height = $(this).attr('height')
            var modalWidth = parseInt(width);
            modalHeight = parseInt(height);
            $('<iframe src="' + iframeSrc + '" allowTransparency="true" border="0" id="callBackframe" frameborder="0" />').dialog(
                {
                    title: modalTitle,
                    width: modalWidth,
                    height: modalHeight,
                    modal: true
                }).width(modalWidth - 25).height(modalHeight - 20);
            event.preventDefault();
        });
    },
    showHowToFindMyNumber: function () {
        $(lebara.vars.selectors.showHowToFindMyNumber).click(function () {
            $('#howToFindMyNumber').dialog(
                {
                    modal: true,
                    width: 555
                });
            $(".ui-dialog-title").hide();
            return false;
        })
    },
    showRates: function (link) {
        var obj1 = link;
        if (!obj1) {
            obj1 = $("a.showRates");
        }
        $(obj1).each(function () {
            var Rates = $(this).parents(".bundleRates");
            $(this).toggle(function () {

                if ($(Rates.siblings(".planSummaryExpanded")).attr('id') == 'planSummaryExpanded1') {
                    $(Rates.siblings("#planSummaryExpanded1")).children(".split2").children(".tarrif").remove();
                    $(Rates.siblings("#planSummaryExpanded1")).children(".split2").children(".internationalTariff").remove();
                    $(Rates.siblings("#planSummaryExpanded1")).children(".split2").append("<div class='national tarrif module'></div>")
                }
                else {
                    $(".tarrif").remove();
                    $(".internationalTariff").remove();
                    $(this).parents(".box-1").children(".planSummaryExpanded").children(".split2").append("<div class='national tarrif module'></div>")
                }
                /*
                 * Ajax Call added by sumatt to get the national tarrif for any
                 * product
                 */
                $('#productAttrs').val('showTariff');
                $('#allowanceId').val('allowanceId');
                var queryString = $('#postpay').serializeArray();
                $.ajax(
                    {
                        url: lebara.vars.paths.postPayPlansHtml,
                        data: queryString,
                        dataType: 'html',
                        type: 'GET',
                        success: lebara.getNationalTarrifDetails
                    });

                $(this).removeClass("secButton-max");
                $(this).addClass("secButton-min");
                $(".secButton-print").show();
                var currentTxt = $(this).html();
                $(this).text($(this).attr("rel"));
                $(this).attr("rel", currentTxt);

                if ($(Rates.siblings(".planSummaryExpanded")).attr('id') == 'planSummaryExpanded1') {
                    $(Rates.siblings("#planSummaryExpanded1")).css(
                        {
                            "display": "block"
                        });

                    var heading = $(Rates.siblings("#planSummaryExpanded1")).find("h2").html();
                    var html = "<h2>" + heading + "</h2>"
                    $(Rates.siblings(".planSummaryExpanded1")).find("h2").hide();
                }
                else if ($(Rates.siblings(".planSummaryExpanded")).attr('id') == 'planSummaryExpanded2') {
                    $(Rates.siblings("#planSummaryExpanded2")).css(
                        {
                            "display": "block"
                        });

                    var heading = $(Rates.siblings("#planSummaryExpanded2")).find("h2").html();
                    var html = "<h2>" + heading + "</h2>"
                    $(Rates.siblings(".planSummaryExpanded2")).find("h2").hide();
                }
                else {
                    $(Rates.siblings(".planSummaryExpanded")).css(
                        {
                            "display": "block"
                        });
                    var heading = $(Rates.siblings(".planSummaryExpanded")).find("h2").html();
                    var html = "<h2>" + heading + "</h2>"
                    var placeholder = $(Rates).find(".titlePlaceHolder");
                    $(Rates.siblings(".planSummaryExpanded")).find("h2").hide();
                    placeholder.append(html);
                }

                return false;
            }, function () {

                if ($(Rates.siblings(".planSummaryExpanded")).attr('id') == 'planSummaryExpanded1') {
                    $(Rates.siblings("#planSummaryExpanded1")).find("h2").show();
                    $(Rates.siblings("#planSummaryExpanded1")).css(
                        {
                            "display": "none"
                        });
                }
                else if ($(Rates.siblings(".planSummaryExpanded")).attr('id') == 'planSummaryExpanded2') {
                    $(Rates.siblings("#planSummaryExpanded2")).find("h2").show();
                    $(Rates.siblings("#planSummaryExpanded2")).css(
                        {
                            "display": "none"
                        });
                }
                else {
                    $(Rates.siblings(".planSummaryExpanded")).find("h2").show();
                    $(Rates.siblings(".planSummaryExpanded")).css(
                        {
                            "display": "none"
                        });
                }
                var placeholder = $(Rates).find(".titlePlaceHolder");
                $(this).removeClass("secButton-min");
                $(this).addClass("secButton-max");
                $(".secButton-print").hide();
                var currentTxt = $(this).html();
                $(this).text($(this).attr("rel"));
                $(this).attr("rel", currentTxt);
                $(placeholder).find("h2").remove();
            });
        });
    },
    boltonSelectionPanel: function () {
        if ($(lebara.vars.selectors.boltonSelectionPanelInput).length > 0) {
            $(lebara.vars.selectors.boltonSelectionPanelInput).addClass('accessibility');
        }
        if ($(lebara.vars.selectors.boltonSelectionPanel).length > 0) {
            $(lebara.vars.selectors.boltonSelectionPanel + ':eq(0)').parent().addClass('sim-selected');
            $(lebara.vars.selectors.boltonSelectionPanel + ':eq(0)').children('input').attr('checked', 'checked');
        }
    },
    simSelectionPanel: function () {
        var pound10SimIndexHidden;
        var connectedCountryCatalogHidden;
        if (document.getElementById("pound10SimIndexHidden") != null) {
            pound10SimIndexHidden = document.getElementById("pound10SimIndexHidden").value;
        }

        if (document.getElementById("connectedCountryCatalogHidden") != null) {
            connectedCountryCatalogHidden = document.getElementById("connectedCountryCatalogHidden").value;
        }

        if ($(lebara.vars.selectors.simSelectionPanelInput).length > 0) {
            $(lebara.vars.selectors.simSelectionPanelInput).addClass('accessibility');
        }

        if ($(lebara.vars.selectors.simInfoDiv).length > 0) {
            var addButton = $(lebara.vars.selectors.simInfoDiv + ':last p.button').html();
            $(lebara.vars.selectors.simInfoDiv + ' p.button').html(addButton);
            $(lebara.vars.selectors.simInfoDiv).css('display', 'none');

            // Below condition given by Nidhi for checking Prepay sim which
            // should be 10 by default.
            if ($('#productTypeDiv').attr('value') == 'Prepay' && connectedCountryCatalogHidden == 'uk_product') {
                $(lebara.vars.selectors.simInfoDiv + ':eq(' + pound10SimIndexHidden + ')').css('display', 'block');
            }
            else {
                $(lebara.vars.selectors.simInfoDiv + ':eq(0)').css('display', 'block');
            }
        }

        if ($(lebara.vars.selectors.simSelectionPanelLabel).length > 0) {
            if ($('#productTypeDiv').attr('value') == 'Prepay' && connectedCountryCatalogHidden == 'uk_product') {
                $(lebara.vars.selectors.simSelectionPanelLabel + ':eq(' + pound10SimIndexHidden + ')').parent().addClass('sim-selected');
                $(lebara.vars.selectors.simSelectionPanelLabel + ':eq(' + pound10SimIndexHidden + ')').children('input').attr('checked', 'checked');

                var totalAmount = parseFloat($(lebara.vars.selectors.simPrice, lebara.vars.selectors.simInfoDiv + ':eq(' + pound10SimIndexHidden + ')').html());
                formatterActionUrl = '/view/ProductListComponentController?currencyFormatter=true&totalAmount=' + totalAmount;
                $.get(formatterActionUrl, function (data) {
                    $(".totalPriceAmount").html(data)
                });
            }
            else {
                $(lebara.vars.selectors.simSelectionPanelLabel + ':eq(0)').parent().addClass('sim-selected');
                $(lebara.vars.selectors.simSelectionPanelLabel + ':eq(0)').children('input').attr('checked', 'checked');
            }
            // Changes end
            $(lebara.vars.selectors.simSelectionPanelLabel).click(function (event) {
                if (!$(this).children('input').is(':disabled')) {
                    $(lebara.vars.selectors.simSelectionPanelLabel).parent().removeClass('sim-selected');
                    $(this).parent().addClass('sim-selected');
                }

                if ($(lebara.vars.selectors.simInfoDiv).length > 0) {
                    var displayIndex = $(lebara.vars.selectors.simSelectionPanelLabel).index(this);
                    var totalPriceAmountContainer = $(".totalPriceAmount");
                    var simPrice = parseFloat($(lebara.vars.selectors.simPrice, lebara.vars.selectors.simInfoDiv + ':eq(' + displayIndex + ')').html());
                    var selectedBolts = 0;
                    $(lebara.vars.selectors.boltCheckboxes + ":checked").each(function () {
                        selectedBolts += parseFloat(lebara.extractNumbers($(".priceAmount", $(this).parents("td")).html()))
                    });
                    if (isNaN(simPrice) == true) {
                        simPrice = 0;
                    }
                    if (isNaN(selectedBolts) == true) {
                        selectedBolts = 0;
                    }
                    var totalAmount = (simPrice + selectedBolts);
                    formatterActionUrl = '/view/ProductListComponentController?currencyFormatter=true&totalAmount=' + totalAmount;
                    $.get(formatterActionUrl, function (data) {
                        $(totalPriceAmountContainer).html(data)
                    });
                    $(lebara.vars.selectors.simInfoDiv).css('display', 'none');
                    $(lebara.vars.selectors.simInfoDiv + ':eq(' + displayIndex + ')').css('display', 'block');
                }
            });
        }
    },
    flagSelectionPanel: function () {

        if ($(lebara.vars.selectors.flagSelectionPanelInput).length > 0) {
            $(lebara.vars.selectors.flagSelectionPanelInput).addClass('accessibility');
        }

        if ($(lebara.vars.selectors.simInfoDiv).length > 0) {
            var addButton = $(lebara.vars.selectors.simInfoDiv + ':last p.button').html();
            $(lebara.vars.selectors.simInfoDiv + ' p.button').html(addButton);
            $(lebara.vars.selectors.simInfoDiv).css('display', 'none');
            $(lebara.vars.selectors.simInfoDiv + ':eq(0)').css('display', 'block');
        }

        if ($(lebara.vars.selectors.flagSelectionPanelLabel).length > 0) {
            $(lebara.vars.selectors.flagSelectionPanelLabel + ':eq(0)').parent().addClass('sim-selected');
            $(lebara.vars.selectors.flagSelectionPanelLabel + ':eq(0)').children('input').attr('checked', 'checked');

            $(lebara.vars.selectors.flagSelectionPanelLabel).click(function (event) {
                if (!$(this).children('input').is(':disabled')) {
                    ;
                    $(lebara.vars.selectors.flagSelectionPanelLabel).parent().removeClass('sim-selected');
                    $(this).parent().addClass('sim-selected');
                }

                if ($(lebara.vars.selectors.simInfoDiv).length > 0) {
                    var displayIndex = $(lebara.vars.selectors.flagSelectionPanelLabel).index(this);
                    $(lebara.vars.selectors.simInfoDiv).css('display', 'none');
                    $(lebara.vars.selectors.simInfoDiv + ':eq(' + displayIndex + ')').css('display', 'block');
                }
            });
        }

    },
    extractNumbers: function (alphanumeric) {
        var number = "";
        for (var n = 0; n < alphanumeric.length; n++) {
            var i = alphanumeric.substring(n, n + 1);
            if ((i == "1") || (i == "2") || (i == "3") || (i == "4") || (i == "5") || (i == "6") || (i == "7") || (i == "8") || (i == "9") || (i == "0") || (i == "\.")) {
                // Handset defect fix by Raj
                number += i;
            }
        }
        return number;
    },
    selectBoltOn: function () {
        $(".boltOnsAccordion .radio input[type='checkbox']").attr("checked", "");
        $(lebara.vars.selectors.boltCheckboxes).click(function () {
            var currenttext = $(this).next('label').html();
            $(this).next('label').html($(this).next('label').attr('rel'));
            $(this).next('label').attr('rel', currenttext);
            var displayIndex = $(lebara.vars.selectors.simSelectionPanelLabel).index($(".sim-selected label"));
            var totalPriceAmountContainer = $(".totalPriceAmount");
            var totalBolt = $(".totalBolt");
            if (totalPriceAmountContainer.length == 0) {
                totalPriceAmountContainer = $(".totalPriceAmount");
                totalPriceAmountContainer.push($(".sim-info .option span.price")[0]);

            }
            var currentBoltPrice = parseFloat(lebara.extractNumbers($(".priceAmount", $(this).parents("td")).html()));
            if (this.checked == true) {
                $(this).next("label").html("Added");
                $(this).parents("tr").addClass('selected');
                var totalBol = parseInt($(totalBolt).html()) + 1
                var totalAmount = parseFloat(lebara.extractNumbers($(totalPriceAmountContainer).html())) + parseFloat(currentBoltPrice)
                formatterActionUrl = '/view/ProductListComponentController?currencyFormatter=true&totalAmount=' + totalAmount;
                $.get(formatterActionUrl, function (data) {

                    $(totalPriceAmountContainer).html(data)
                    $(totalBolt).html(totalBol);
                });
            }
            else {
                $(this).next("label").html("Add to package");
                $(this).parents("tr").removeClass('selected');
                // added if block to avoid negative value of total bolton
                // count
                if (parseInt($(totalBolt).html()) > 0) {
                    $(totalBolt).html(parseInt($(totalBolt).html()) - 1)
                }
                // added if block to avoid negative value of total cost
                if (parseFloat(lebara.extractNumbers($(totalPriceAmountContainer).html())) > 0) {
                    var totalAmount = parseFloat(lebara.extractNumbers($(totalPriceAmountContainer).html())) - parseFloat(currentBoltPrice)
                    // Format amount with currency symbol
                    formatterActionUrl = '/view/ProductListComponentController?currencyFormatter=true&totalAmount=' + totalAmount;
                    $.get(formatterActionUrl, function (data) {
                        $(totalPriceAmountContainer).html(data)
                    });
                }
            }
        });
    },
    toggleInfo1: function () {
        $(lebara.vars.selectors.subscribedMoreInfoLink).click(function () {
            var infoContainer = $(this).parents('tr').next('tr');
            if ($(infoContainer).css("display") == "none") {
                $(infoContainer).show();
                $(this).addClass("secButton-down");

                var currenttext = $(this).html();
                $(this).html($(this).attr('rel'));
                $(this).attr('rel', currenttext);

            }
            else {
                $(infoContainer).hide();
                $(this).removeClass("secButton-down");

                var currenttext = $(this).html();
                $(this).html($(this).attr('rel'));
                $(this).attr('rel', currenttext);

            }
            return false;
        });
    },
    toggleInfo: function () {
        $(lebara.vars.selectors.moreInfoLink).click(function () {
            var infoContainer = $(this).parents('tr').next('tr');
            if ($(infoContainer).css("display") == "none") {
                $(infoContainer).show();
                $(this).addClass("secButton-down");

                var currenttext = $(this).html();
                $(this).html($(this).attr('rel'));
                $(this).attr('rel', currenttext);

            }
            else {
                $(infoContainer).hide();
                $(this).removeClass("secButton-down");

                var currenttext = $(this).html();
                $(this).html($(this).attr('rel'));
                $(this).attr('rel', currenttext);

            }
            return false;
        });
        // Bolt-on more-less
        $(lebara.vars.selectors.moreDetailLink).click(function () {
            var infoContainer = $(this).next('p');

            if (infoContainer.hasClass('more-info')) {
                $(infoContainer).removeClass("more-info");
                $(this).addClass("secButton-down");

                var currenttext = $(this).html();
                $(this).html($(this).attr('rel'));
                $(this).attr('rel', currenttext);

            }
            else {
                $(infoContainer).addClass("more-info");
                $(this).removeClass("secButton-down");

                var currenttext = $(this).html();
                $(this).html($(this).attr('rel'));
                $(this).attr('rel', currenttext);

            }
            return false;
        });
        // For Rating and reviews
        $(lebara.vars.selectors.reviewsAccordionLink).click(function () {
            var infoContainer = $(this).parent().parent().next();
            if ($(infoContainer).css("display") == "none") {
                $(this).parents("ul").children("li").each(function () {
                    $(this).children(".header").children(".clear").children(".secButton").text("Read more");
                });
                $(this).html(lebara.vars.selectors.ratingLess);
                $(this).addClass("secButton-down");
                $(this).attr("title", lebara.vars.selectors.ratingLess);
                $(lebara.vars.selectors.reviewsAccordion).accordian();
            }
            else {
                $(this).html(lebara.vars.selectors.ratingMore);
                $(this).attr("title", lebara.vars.selectors.ratingMore);
                $(this).removeClass("secButton-down");
                $(lebara.vars.selectors.reviewsAccordion).accordian();
            }
            return false;
        });
    },
    starRating: function () {
        $(".ratings").children("img").mouseover(function () {
            if ($("#ratingval").val() == 0) {
                var indexval = $(this).index();
                $(".ratings").children("img").each(function (indx, val) {
                    if (indx <= indexval) {
                        val.src = lebara.vars.paths.ratingOn;
                    }
                });
            }
        }).mouseout(function () {
                if ($("#ratingval").val() == 0) {
                    var indexval = $(this).index();
                    $(".ratings").children("img").each(function (indx, val) {
                        val.src = lebara.vars.paths.ratingOff;
                    });
                }
            }).click(function () {
                $(this).parents('.ratings').nextAll('.errorTooltip').addClass('accessibility');
                var indexval = $(this).index();
                var myrate = [lebara.vars.selectors.reviewTerrible, lebara.vars.selectors.reviewPoor, lebara.vars.selectors.reviewAverage, lebara.vars.selectors.reviewVerygood, lebara.vars.selectors.reviewExcellent];
                $("#rstatus").html(myrate[indexval]);

                $("#ratingval").val(($(this).index()) * 1 + 1);
                $(".ratings").children("img").each(function (indx, val) {
                    if (indx <= indexval) {
                        val.src = lebara.vars.paths.ratingOn;
                    }
                    else {
                        val.src = lebara.vars.paths.ratingOff;
                    }
                });
            });
    },
    existingNumber: function () {
        $(lebara.vars.selectors.existingNumber + ' .box-2').hide();
        $(lebara.vars.selectors.existingNumber + ' .box-2 input').attr('disabled', 'disabled');

        $(lebara.vars.selectors.existingNumber + ' .box-2').filter('.checked').show();

        $(lebara.vars.selectors.existingNumber + ' .box-2').filter('.checked').find('input').removeAttr('disabled');

        $(lebara.vars.selectors.existingNumber + ' input').removeAttr('checked');
        $(lebara.vars.selectors.existingNumber + ' input.checked').attr('checked', 'true');

        if ($(lebara.vars.selectors.existingNumber + ' input[name=existingNum]:checked').attr("id") == "existingNum2") {
            $(lebara.vars.selectors.existingNumber + ' input[name=existingNum]:checked').parents(".field").next().css("display", "block");
            if (lebara.vars.triggers.retailerCheckout == "true") {
                $(lebara.vars.selectors.existingNumber + ' .box-2 input').removeAttr('disabled');
            }

        }
        else if ($(lebara.vars.selectors.existingNumber + ' input[name=existingNum]:checked').attr("id") == "existingNum3") {
            $(lebara.vars.selectors.existingNumber + ' input[name=existingNum]:checked').parents(".field").next().css("display", "block");

        }
        else if ($(lebara.vars.selectors.existingNumber + ' input[name=existingNum]:checked').attr("id") == "existingNum1") {
            if (lebara.vars.triggers.retailerCheckout == "true") {
                $(lebara.vars.selectors.existingNumber + ' input[name=existingNum]:checked').parents(".field").next().css("display", "block");
                $(lebara.vars.selectors.existingNumber + ' .box-2 input').removeAttr('disabled');
            }
        }

        $(lebara.vars.selectors.existingNumber + ' #existingNum1').click(function () {
            $(lebara.vars.selectors.existingNumber + ' .box-2').hide();
            $(lebara.vars.selectors.existingNumber + ' .box-2 input').attr('disabled', 'disabled');
        })

        $(lebara.vars.selectors.existingNumber + ' .radio label').click(function () {
            $(this).parent().children('input').click();
            return false;
        })

        $(lebara.vars.selectors.existingNumber + ' input[name=existingNum]').click(function () {
            $(lebara.vars.selectors.existingNumber + ' .box-2').hide();
            $(lebara.vars.selectors.existingNumber + ' .box-2 input').attr('disabled', 'disabled');
            var radioIndex = $(lebara.vars.selectors.existingNumber + ' input[name=existingNum]').index(this);

            if (lebara.vars.triggers.retailerCheckout == "true") {
                if (radioIndex >= 0) {
                    $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex) + ')').show();
                    $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex) + ') input').removeAttr('disabled');
                }
            }
            else {
                if (radioIndex > 0) {
                    $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex - 1) + ')').show();
                    $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex - 1) + ') input').removeAttr('disabled');
                }
            }
        })
        // added by shyam for Prepay-PostPay migration
        if (lebara.vars.triggers.existingNumberPrompt == "true") {
            var radioIndex = 2;
            if (lebara.vars.triggers.retailerCheckout == "true") {
                $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex) + ')').show();
                $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex) + ') input').removeAttr('disabled');
            }
            else {
                $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex - 1) + ')').show();
                $(lebara.vars.selectors.existingNumber + ' .box-2:eq(' + (radioIndex - 1) + ') input').removeAttr('disabled');
            }
        }
    },
    changeAddress: function () {
        var postcodeLookup = $(lebara.vars.selectors.postCodeLookUpFields);
        var changeAddress = $(lebara.vars.selectors.changeAddress);
        var savedAddress = $(lebara.vars.selectors.savedAddress);
        var redeemAddressChanged = "";
        var addressFields = $('fieldset.address');
        var savedAddressDl = $('.redeemRewardsDetails .savedAddress dl');
        var newSavedAddress = "";

        $('#redeemAddress1').attr('checked', 'checked');
        // to show the address fields open in case address validation fails for
        // rewards redemption
        if (showHideAddress) {
            $('.address').attr("style", "display:block;")
            savedAddress.hide();

        }
        else {
            postcodeLookup.hide();
            savedAddress.show();
        }
        changeAddress.toggle(function () {
            postcodeLookup.show();
            savedAddress.hide();
            changeAddress.html(lebara.vars.strings.en.changeAddressTrigger2).addClass('secButton-back');
            $('#redeemAddress2').attr('checked', 'checked');
            return false;
        }, function () {
            postcodeLookup.hide();
            savedAddress.show();
            changeAddress.html(lebara.vars.strings.en.changeAddressTrigger1).removeClass('secButton-back');
            if (redeemAddressChanged != "changed") {
                $('#redeemAddress1').attr('checked', 'checked');
            }
            else {
                var addressSplit = savedAddressDl.find('dd:eq(0)').html().split(/<br.*?>/gi);

                addressFields.find('#adLine1').val(addressSplit[0]);

                if (addressSplit[1] != null) {
                    addressFields.find('#adLine2').val(addressSplit[1]);
                }
                else {
                    addressFields.find('#adLine2').val("");
                }

                if (addressSplit[2] != null) {
                    addressFields.find('#adLine3').val(addressSplit[2]);
                }
                else {
                    addressFields.find('#adLine3').val("");
                }

                addressFields.find('#city').val(savedAddressDl.find('dd:eq(1)').text());
                addressFields.find('#county').val(savedAddressDl.find('dd:eq(2)').text());
                addressFields.find('#pCode').val(savedAddressDl.find('dd:eq(3)').text());
            }
            return false;
        });
        $('.redeemRewardsDetails .changeAddressButton a').click(function () {
            newSavedAddress = "";
            newSavedAddress += "<dt>Address</dt><dd>";
            newSavedAddress += addressFields.find('#adLine1').val();
            if (addressFields.find('#adLine2').val() != "") {
                newSavedAddress += "<br />" + addressFields.find('#adLine2').val()
            }
            ;
            if (addressFields.find('#adLine3').val() != "") {
                newSavedAddress += "<br />" + addressFields.find('#adLine3').val()
            }
            ;
            newSavedAddress += "</dd><dt>City</dt><dd>";
            newSavedAddress += addressFields.find('#city').val();
            newSavedAddress += "</dd><dt>County</dt><dd>";
            newSavedAddress += addressFields.find('#county').val();
            newSavedAddress += "</dd><dt>Post Code</dt><dd>";
            newSavedAddress += addressFields.find('#pCode').val();
            newSavedAddress += "</dd>";
            savedAddressDl.html(newSavedAddress);
            redeemAddressChanged = "changed";
            $(lebara.vars.selectors.changeAddress).click();
            return false;
        })
    },
    yearCheck: function (yearCheckDate, addressIndex) {
        var numberOfYears = 3;
        var today = new Date();
        var requiredMonth = "0" + (today.getMonth() + 1);
        requiredMonth = requiredMonth.slice(-2);
        var requiredYear = today.getFullYear() - numberOfYears;
        var requiredDate = requiredYear + requiredMonth;

        if (parseFloat(yearCheckDate) >= parseFloat(requiredDate)) {
            $(lebara.vars.selectors.prevAddress + ':eq(' + addressIndex + ')').show();
            $(lebara.vars.selectors.prevAddress + ':eq(' + addressIndex + ') input[name^=pCodeFind]').removeAttr('disabled');
            $(lebara.vars.selectors.prevAddress + ':eq(' + addressIndex + ') select[name$=year], ' + lebara.vars.selectors.prevAddress + ':eq(' + addressIndex + ') select[name$=month]').val(' ');

            $("#month_" + (addressIndex + 1)).val($("#month_" + (addressIndex + 1)).children('#monthSelected').val());
            $("#year_" + (addressIndex + 1)).val($("#year_" + (addressIndex + 1)).children('#yearSelected').val());
            $("#addressType_" + (addressIndex + 1)).val($("#addressType_" + (addressIndex + 1)).children('#addTypeSelected').val());

            $("#stayerror").hide();
        }
        else if (parseFloat(yearCheckDate) < parseFloat(requiredDate)) {
            $(lebara.vars.selectors.prevAddress + ':gt(' + addressIndex + '),' + lebara.vars.selectors.prevAddress + ':eq(' + addressIndex + ')').hide();
        }
        else {
            $(lebara.vars.selectors.prevAddress + ':gt(' + addressIndex + ')', +lebara.vars.selectors.prevAddress + ':eq(' + addressIndex + ')').hide();
            if (parseFloat(requiredDate) >= parseFloat(yearCheckDate)) {
                $("#stayerror").hide();
            }
        }
    },
    multipleAddresses: function () {
        $(lebara.vars.selectors.prevAddress + ' input[name^=pCodeFind]').attr('disabled', 'disabled');
        $(lebara.vars.selectors.multipleAddresses + ' select[name$=year], ' + lebara.vars.selectors.multipleAddresses + ' select[name$=month]').val(' ');
        $(lebara.vars.selectors.dateMovedIn + ' select[name$=month], ' + lebara.vars.selectors.dateMovedIn + ' select[name$=year]').change(function () {
            var movedIn = $(this).closest(lebara.vars.selectors.dateMovedIn);
            var index = $(lebara.vars.selectors.dateMovedIn).index(movedIn);

            var selectedMonth = "0" + $(movedIn).find('select[name$=month]').val();
            selectedMonth = selectedMonth.slice(-2);
            var selectedYear = $(this).closest(lebara.vars.selectors.dateMovedIn).find('select[name$=year]').val();
            var selectedDate = selectedYear + selectedMonth;
        })
    },
    successTop: function () {
        $(lebara.vars.selectors.successTop + ' a.close').click(function () {
            $(lebara.vars.selectors.successTop).hide();
            $('.innerContentBody').removeClass('successTopBody');
        })
    },
    reCaptcha: function () {
        $(lebara.vars.selectors.reCaptchaRefresh).click(function () {
            Recaptcha.reload();
            return false;
        });

        $(lebara.vars.selectors.reCaptchaAudio).click(function () {
            Recaptcha.switch_type('audio');
            return false;
        });

        $(lebara.vars.selectors.reCaptchaText).click(function () {
            Recaptcha.switch_type('image');
            return false;
        });

        $(lebara.vars.selectors.reCaptchaHelp).click(function () {
            Recaptcha.showhelp();
            return false;
        });
    },
    getPlanDetails: function (html, amount) {
        $('.tariffForm').each(function () {
            if ($(this).css('display') === 'block') {
                $("#box-1").remove();
                var selectedRow = $('.selected').parent('.prodSptr');
                selectedRow.after(html);
                lebara.showRates($(this).find("a.showRates"));
                lebara.addToBasket($(this).find(".primaryButton-add"));
            }
        });
    },
    getNationalTarrifDetails: function (html) {
        $(".tarrif").html(html);
    },
    getEuroTariffDetails: function (html) {
        $(lebara.vars.selectors.euroTariffPanel).find(".euroPrepayRateTables").remove();
        $(lebara.vars.selectors.euroTariffPanel).append(html);
    },
    getTariffDetails: function (html) {
        $(lebara.vars.selectors.tariffPanel).find(".prepayRateTables").remove();
        $(".internationalTariff").remove();
        $(lebara.vars.selectors.tariffPanel).append(html);
    },
    getTariffDetailsRoaming: function (html) {
        $(lebara.vars.selectors.tariffRoamingPanel).find("p").remove();
        $(lebara.vars.selectors.tariffRoamingPanel).find(".prepayRateTables").remove();
        $(lebara.vars.selectors.tariffRoamingPanel).append(html);
    },
    onCountrySelected: function (SelectedLink, Input) {
        var amountChecked = ($(Input).parents("fieldset.tariffForm").find("input[name='amountGroup']:checked"));
        var countryCode = SelectedLink;
        var amount = amountChecked.attr("id");
        var callGroupChecked = $("input[name='callGroup']:checked")
        var callgroup = callGroupChecked.attr("id");
        var callgroupValue = callGroupChecked.attr("value");
        var international = $(Input).parents(lebara.vars.selectors.tariffPanel);
        var roaming = $(Input).parents(lebara.vars.selectors.tariffRoamingPanel);
        var tariffForm = $(Input).parents("fieldset.tariffForm");

        if ($('#addAccountPage') != undefined && $('#addAccountPage').val()) {
            lebara.regexCountryMsisdn(countryCode);
        }
        if ($(tariffForm).length > 0) {
            // PostPay Choose Plan
            var planSummary = $(Input).parents(".planSummaryExpanded");
            if ((planSummary).length > 0 && planSummary.attr('id') == undefined) {
                $.ajax(
                    {
                        url: lebara.vars.paths.prePayPlansHtml + "?internationalTariff=true&isoCode=" + countryCode + "&productCode=" + $('#productCode').val() + "&tariffType=" + $('#tariffType').val(),
                        dataType: 'html',
                        type: 'GET',
                        success: lebara.loadPrePayRates
                    });
                return false;
            }
            else if ((planSummary).length > 0 && planSummary.attr('id') == 'planSummaryExpanded1') {
                $.ajax(
                    {
                        url: lebara.vars.paths.prePayPlansHtml + "?internationalTariff=true&isoCode=" + countryCode + "&productCode=" + $('#productCode').val() + "&tariffType=" + $('#tariffType').val(),
                        dataType: 'html',
                        type: 'GET',
                        success: lebara.loadPrePayRates1
                    });
                return false;
            }

            var panel = $(tariffForm).find(".simSelectionAlt");
            $(panel).css(
                {
                    "display": "block"
                });

            if ($(tariffForm).find("a.secButton-min").length > 0) {
                $(tariffForm).find("a.secButton-min").each(function () {
                    $(this).click();
                });
            }

            if (callgroupValue == 'mixed') {
                $(".mixedTariff").children(".simSelectionAlt").children().remove();
                $(".mixedTariff").children(".simSelectionAlt").append("<div class='product'></div>");
            }
            else if (callgroupValue == 'mc') {
                $(".mycountryTariff").children(".simSelectionAlt").children().remove();
                $(".mycountryTariff").children(".simSelectionAlt").append("<div class='product'></div>");
            }
            /*
             * Ajax Call added by sumatt to get the postpay products for mycountry and mixed
             *
             */
            var queryString = $('#postpay').serializeArray();
            $('#productCode').val(amount);
            $.ajax(
                {
                    url: lebara.vars.paths.postPayPlansHtml + "?isAllowanceCountrySelected=true&callgroup=" + callgroupValue,
                    data: queryString,
                    dataType: 'html',
                    type: 'GET',
                    success: function (html) {

                        $(".product").replaceWith(html);
                        lebara.selectedRadioTabs("");
                        var simlabels = $(panel).find("label.simSelectionLabel");
                        $(simlabels).each(function () {

                            $(this).click(function () {

                                $(simlabels).parent().removeClass("sim-selected");
                                $(this).parent().addClass("sim-selected");
                                $(this).children('input').attr('checked', 'checked');

                                var amount = $(this).find('.input').find('input').attr("id");
                                if (amount == undefined) {
                                    amount = $(this).next('div').find('input').attr("id");
                                }
                                $('#productCode').val(amount);
                                $('#productAttrs').val('showAllowanceRates');
                                $('#allowanceId').val('allowanceId');
                                var queryString = $('#postpay').serializeArray();
                                $.ajax(
                                    {
                                        url: lebara.vars.paths.postPayPlansHtml,
                                        data: queryString,
                                        cache: false,
                                        dataType: 'html',
                                        type: 'GET',
                                        success: lebara.getPlanDetails
                                    });

                                if ($("a.secButton-min").length > 0) {
                                    $("a.secButton-min").each(function () {
                                        $(this).click();
                                    });
                                }
                                document.getElementById("testId").style.display = "none";
                            });
                        });
                        $('.simSelectionLabel').eq(0).trigger('click');
                    }
                });
        }
        if ($(international).length > 0) {

            if (countryCode == null || countryCode == "") {
                countryCode = $((international).find(".countryCode")).val();
            }
            var _url = lebara.vars.paths.prePayPlansInternationalHtml + "?tariffType=international&countryCode=" + countryCode
            var _success = lebara.getTariffDetails
            $.ajax(
                {
                    url: getTariffDetailsUrl,
                    data: 'isoCode=' + countryCode + '&productCode=' + $('#productCode').val(),
                    dataType: 'html',
                    type: 'GET',
                    success: _success
                });
            // Google analytics for using the international tariff tool
            if (typeof gaqCategory != 'undefined' && typeof gaqAction != 'undefined') {
                _gaq.push(['_trackEvent', gaqCategory, gaqAction, countryCode]);
            }

        }
        if ($(roaming).length > 0) {
            var _url = lebara.vars.paths.prePayPlansRoamingHtml + "?tariffType=roaming&continentCode=" + countryCode
            var _success = lebara.getTariffDetailsRoaming
            $.ajax(
                {
                    url: getRoamingTariffDetailsUrl,
                    data: 'zoneCode=' + countryCode,
                    dataType: 'html',
                    type: 'GET',
                    success: _success
                });
        }
        else {
            if (typeof getAjxIntnlTariffPlanSelectDetail == 'function') {
                getAjxIntnlTariffPlanSelectDetail();
            }
            $(".ratesPanel,.outputPanel").show();
        }
    },
    regexCountryMsisdn: function (countryCode) {
        var _url = lebara.vars.paths.idManagementComponentJson + "?countryCode=" + countryCode

        var _success = lebara.idmanagementsuccess;

        $.ajax(
            {
                url: _url,
                dataType: 'html',
                type: 'GET',
                success: _success
            });

    },
    idmanagementsuccess: function (responseData) {
        lebara.vars.strings.validation.personalInformation.mobileNumber.Format.Regex = responseData;
        var target = document.getElementById("mobileNumber");
        lebara.eventDispatcher(target);
    },
    eventDispatcher: function (target) {
        if (document.createEvent) {
            var evt = document.createEvent('HTMLEvents');
            evt.initEvent('blur', false, false);
            target.dispatchEvent(evt);
            var evt1 = document.createEvent('HTMLEvents');
            evt1.initEvent('change', false, false);
            target.dispatchEvent(evt1);

        }
        else if (document.createEventObject) {
            target.fireEvent('onchange');
            target.fireEvent('onblur');
        }

    },
    postPayPlans: function () {
        $(".boltOnBundles").css(
            {
                "display": "none"
            });
        $(".callPlanForm .radio input[name='callGroup']").change(function () {
            $(".callPlans div").css(
                {
                    "display": "none"
                });
            $(".tariffForm").css(
                {
                    "display": "none"
                });
            $(".boltOnBundles").css(
                {
                    "display": "none"
                });

            var _selectedPlan = this.id;

            $(".callPlans ." + _selectedPlan).css(
                {
                    "display": "block"
                });
            $("fieldset." + _selectedPlan).css(
                {
                    "display": "block"
                });
            lebara.showRates($("fieldset." + _selectedPlan).find("a.showRates"));
        });
        $('.callPlanForm .radio input#mixed').change();
        $('.callPlanForm .radio input#mixed').attr("checked", "checked");

    },
    categoryLastRowFix: function () {
        var newHeight = 0;
        $(lebara.vars.selectors.categoryLastRowFix).each(function () {
            if ($(this).height() > newHeight) {
                newHeight = $(this).height();
            }
        })
        $(lebara.vars.selectors.categoryLastRowFix).each(function () {
            $(this).css(
                {
                    'min-height': newHeight,
                    'margin-bottom': '0px',
                    'padding-bottom': '0px'
                })
        })
    },
    categoryToggle: function () {
        $(lebara.vars.selectors.categories + ' div').not(lebara.vars.selectors.categories + ' div:eq(0)').not(lebara.vars.selectors.categories + ' div:eq(1)').addClass('hide');
        $(lebara.vars.selectors.categories + ' div:eq(1)').addClass('lastRow');
        $(lebara.vars.selectors.categories + ' a.secButton').css('display', 'block');

        $(lebara.vars.selectors.categories + ' a.secButton').toggle(function () {
            $(lebara.vars.selectors.categories + ' div').removeClass('hide');
            $(lebara.vars.selectors.categories + ' div:eq(1)').removeClass('lastRow');

            $(this).removeClass('secButton-max').addClass('secButton-min');
            $(this).html(lebara.vars.strings.en.helpCategoryTriggerText2);
            lebara.categoryLastRowFix();
            return false;
        }, function () {
            $(lebara.vars.selectors.categories + ' div').not(lebara.vars.selectors.categories + ' div:eq(0)').not(lebara.vars.selectors.categories + ' div:eq(1)').addClass('hide');
            $(lebara.vars.selectors.categories + ' div:eq(1)').addClass('lastRow');

            $(this).removeClass('secButton-min').addClass('secButton-max');
            $(this).html(lebara.vars.strings.en.helpCategoryTriggerText1);
            return false;
        });
    },
    billModule: function () {
        var minShown = 4;
        if ($(lebara.vars.selectors.billModule + ' li').length > minShown) {
            $(lebara.vars.selectors.billModule + ' li:gt(' + (minShown - 1) + ')').hide();
            $(lebara.vars.selectors.billModule).append('<div></div>');
            $('<a href="#" title="' + lebara.vars.strings.en.billModuleText1 + '" class="secButton secButton-max sidePanel2">' + lebara.vars.strings.en.billModuleText1 + '</a>').appendTo(lebara.vars.selectors.billModule + ' div').toggle(function () {
                $(lebara.vars.selectors.billModule + ' li:gt(' + (minShown - 1) + ')').show();
                $(this).html(lebara.vars.strings.en.billModuleText2).removeClass('secButton-max').addClass('secButton-min').attr('title', lebara.vars.strings.en.billModuleText2);
            }, function () {
                $(lebara.vars.selectors.billModule + ' li:gt(' + (minShown - 1) + ')').hide();
                $(this).html(lebara.vars.strings.en.billModuleText1).removeClass('secButton-min').addClass('secButton-max').attr('title', lebara.vars.strings.en.billModuleText1);
            })
        }
    },
    showMore: function () {
        $('<a href="#" title="' + lebara.vars.strings.en.showMoreText1 + '" class="secButton secButton-max  sidePanel2" id="SeeMore">' + lebara.vars.strings.en.showMoreText1 + '</a>').appendTo('.showMore').toggle(function () {
            $(lebara.vars.selectors.showMore).show();
            $(this).html(lebara.vars.strings.en.showMoreText2).removeClass('secButton-max').addClass('secButton-min').attr('title', lebara.vars.strings.en.showMoreText2);
        }, function () {
            $(this).html(lebara.vars.strings.en.showMoreText1).removeClass('secButton-min').addClass('secButton-max').attr('title', lebara.vars.strings.en.showMoreText1);
        })
    },
    bundleShowMore: function () {

        var _sel = lebara.vars.selectors;
        if ($(_sel.helpLink).length > 0) {
            lebara.HelpTooltips();
        }

        $('<a href="#" title="' + lebara.vars.strings.en.showMoreText1 + '" class="secButton secButton-min  sidePanel2" id="SeeMore">' + lebara.vars.strings.en.showMoreText1 + '</a>').appendTo('.bundleShowMore').toggle(function () {
            $('#usageDetailsSection').hide();
            $(this).html(lebara.vars.strings.en.showMoreText2).removeClass('secButton-min').addClass('secButton-max').attr('title', lebara.vars.strings.en.showMoreText2);
        }, function () {
            $('#usageDetailsSection').show();
            $(this).html(lebara.vars.strings.en.showMoreText1).removeClass('secButton-max').addClass('secButton-min').attr('title', lebara.vars.strings.en.showMoreText1);
        })
    },
    offersHover: function () {
        $(lebara.vars.selectors.offerLink).not('.offerLinkUnavailable').hover(function () {
            $(this).addClass('offerLinkHover');
            $(this).find('img:eq(0)').hide();
            $(this).find('img:eq(1)').show();
        }, function () {
            $(this).removeClass('offerLinkHover');
            $(this).find('img:eq(1)').hide();
            $(this).find('img:eq(0)').show();
        })
    },
    offers: function () {
        var offerLinkElem = $(lebara.vars.selectors.offerLink);

        $('.offerDetails').hide();
        var h2Height = 0;
        var pHeight = 0;
        offerLinkElem.each(function () {
            if ($(this).find('h2').height() > h2Height) {
                h2Height = $(this).find('h2').height();
            }
            ;
            if ($(this).find('p').height() > pHeight) {
                pHeight = $(this).find('p').height();
            }
            ;
        });
        offerLinkElem.find('h2').css('min-height', h2Height);
        offerLinkElem.find('p').css('min-height', pHeight);
        var offerLinkHeight = 0;
        offerLinkElem.each(function () {
            if ($(this).height() > offerLinkHeight) {
                offerLinkHeight = $(this).height();
            }
            ;
        });
        offerLinkElem.css('min-height', offerLinkHeight + 1);

        offerLinkElem.filter(':gt(' + (offerLinkElem.length - 4) + ')').css('margin-bottom', 0);

        var offersHeight = $(lebara.vars.selectors.offers).height();
        var offersLeft = 0;
        var offersBttmMargin = parseFloat($(lebara.vars.selectors.offers).css('margin-bottom').replace("px", ""));

        var chosenLink;
        var prevChosenLink;
        var linkMax;
        var linkRow;

        $(offerLinkElem).click(function (e) {
            /* Products - make redeem button link */
            if ($(e.target).hasClass('redeem')) {
                return true;
            }

            if (!$(this).parent().children().is(':animated')) {
                // moves required rows downwards to make room for details box
                function moveRows(amount, finalMove) {
                    var requiredLink = chosenLink;
                    var requiredLinkMax = linkMax;
                    var requiredLinkRow = linkRow;

                    $(lebara.vars.selectors.offers).animate(
                        {
                            "margin-bottom": amount + 26 + offersBttmMargin
                        }, 'slow');

                    if (finalMove != false) {
                        $(offerLinkElem).css(
                            {
                                opacity: 1,
                                display: "block"
                            });
                        offerLinkElem.not(requiredLink).children(':not(h2):not(.noFade)').animate(
                            {
                                "opacity": 1
                            }, 'slow');
                        offerLinkElem.not(requiredLink).children('.noFade').children().animate(
                            {
                                "opacity": 1
                            }, 'slow');
                    }
                    else {
                        requiredLink = prevChosenLink;
                        requiredLinkMax = prevLinkMax;
                        requiredLinkRow = prevLinkRow;
                    }

                    if (requiredLinkRow == 1) {
                        offerLinkElem.not(requiredLink).animate(
                            {
                                "top": amount + 26
                            }, 'slow');
                    }
                    else {
                        $(lebara.vars.selectors.offerLink + ':gt(' + requiredLinkMax + ')').not(requiredLink).animate(
                            {
                                "top": amount + 26
                            }, 'slow');
                        if (finalMove != false) {
                            $(lebara.vars.selectors.offerLink + ':lt(' + (requiredLinkMax + 1) + ')').animate(
                                {
                                    "top": 0
                                }, 'slow');
                        }
                    }
                }

                // displays the details box
                function displayDetails() {
                    var detailsBox = $('.detailsBox');

                    $(chosenLink).children(':not(h2):not(.noFade)').animate(
                        {
                            "opacity": 0
                        }, 'slow');
                    $(chosenLink).children('.noFade').children().animate(
                        {
                            "opacity": 0
                        }, 'slow');
                    $(chosenLink).animate(
                        {
                            "top": 0
                        }, 'slow', function () {
                            moveRows(slideAmount)

                            var detailBox = '<div class="box box-1 detailsBox offerDetails"><h2>' + $(chosenLink).children('h2').text() + '</h2></div>';
                            offersLeft = $(chosenLink).position().left;
                            $(detailBox).appendTo(lebara.vars.selectors.offers).css(
                                {
                                    position: 'absolute',
                                    left: offersLeft,
                                    top: $(chosenLink).position().top,
                                    height: $(chosenLink).height(),
                                    width: 181
                                }).animate(
                                {
                                    "width": 652,
                                    "height": detailBoxHeight,
                                    "left": 0
                                }, 'slow', function () {
                                    var detailsHtml = $(detailId).html();
                                    $(this).html(detailsHtml);

                                    var productThumbnails = $(this).find('ul.productThumbnails');
                                    if ($(productThumbnails).length > 0) {

                                        var largeImagesToAdd = "";
                                        $(productThumbnails).find('li a:gt(0)').each(function () {
                                            largeImagesToAdd += '<img src="' + $(this).attr('href') + '" alt="' + $(this).find('img').attr('alt') + '" class="largeImage" />';
                                        })
                                        $(largeImagesToAdd).insertBefore(productThumbnails);
                                        $(productThumbnails).find('li a').click(function () {

                                            var thumbIndex = $(productThumbnails).find('li a').index(this);
                                            $('.detailsBox .largeImage').hide();
                                            $('.detailsBox .largeImage:eq(' + (thumbIndex) + ')').show();
                                            return false;
                                        })
                                    }

                                    $('.detailsBox .offerDetailsHead').append('<a class="secButton secButton-back" href="#">' + lebara.vars.strings.en.offersCloseDetails + '</a>')
                                    $('.detailsBox .offerDetailsHead .secButton').click(function () {
                                        prevChosenLink = chosenLink;
                                        prevLinkMax = linkMax;
                                        prevLinkRow = linkRow;
                                        minimiseAll();
                                        return false;
                                    });
                                    $('.detailsBox *:not(hr):not(.offerDetailsHead):not(h2):not(.offer-balloon span)').hide();
                                    $('.detailsBox *:not(hr):not(.offerDetailsHead):not(.offer-balloon span):not(.largeImage:gt(0))').fadeIn('fast');
                                });
                            // scroll page to correct position
                            var scrollOffset = ($(window).height() - slideAmount) / 3;
                            if (scrollOffset < 10) {
                                scrollOffset = 10;
                            }
                            $('html,body').animate(
                                {
                                    scrollTop: $('.detailsBox').offset().top - scrollOffset
                                }, 'slow');

                            $(chosenLink).css(
                                {
                                    opacity: 0,
                                    display: "none"
                                });

                            addLastClass();

                        });
                }

                // minimises details so page is in the same state as when it
                // loaded
                function minimiseAll(openNew) {
                    $('.detailsBox *:not(hr):not(h2):not(div.offerDetailsHead):not(.offer-balloon span)').fadeOut('fast');

                    moveRows(offerLinkOuterHeight, false);

                    $('.detailsBox').animate(
                        {
                            "width": "181px",
                            "height": offerLinkHeight,
                            "left": offersLeft
                        }, 'slow', function () {
                            $('.detailsBox').remove();
                            $(offerLinkElem).children(':not(h2):not(.noFade)').animate(
                                {
                                    "opacity": 1
                                }, 'slow');
                            $(offerLinkElem).children('.noFade').children().animate(
                                {
                                    "opacity": 1
                                }, 'slow');
                            $(offerLinkElem).css(
                                {
                                    opacity: 1,
                                    display: "block"
                                });
                            $(offerLinkElem).animate(
                                {
                                    "top": 0
                                }, 'slow');
                            addLastClass();
                            $(lebara.vars.selectors.offers).animate(
                                {
                                    "margin-bottom": offersBttmMargin
                                }, 'slow', function () {
                                    // This runs if another box opens immediatly after
                                    // the minimisation
                                    if (openNew == true) {
                                        $(lebara.vars.selectors.offers).animate(
                                            {
                                                "margin-bottom": offerLinkOuterHeight + 26 + offersBttmMargin
                                            }, 'slow');
                                        moveRows(offerLinkOuterHeight);
                                        displayDetails();
                                    }
                                });
                        });
                }

                // The 'last' class is required on the last offer link of each row.
                // This function makes sure the class is added to the correct
                // links as the links move around
                function addLastClass() {
                    $(offerLinkElem).removeClass('last');
                    $(lebara.vars.selectors.offerLink + ':visible').each(function (i) {
                        if ((i + 1) % 3 == 0)
                            $(this).addClass('last');
                    });
                }

                // link that was previously clicked and its row properties
                prevChosenLink = chosenLink;
                prevLinkMax = linkMax;
                prevLinkRow = linkRow;

                // set clicked link
                chosenLink = this;

                // slide amount and detail box height
                var slideAmount;
                var detailBoxHeight;

                var detailId = $(chosenLink).find('a').attr('href');

                // sometimes on chrome and safari it automatically adds display:
                // none, this is a work around to fix the issue
                $(detailId).find('a').css(
                    {
                        display: "block"
                    });

                var offerLinkHeight = $(chosenLink).height();
                var offerLinkOuterHeight = $(chosenLink).outerHeight();
                var detailHeight = $(detailId).height();
                var detailOuterHeight = $(detailId).outerHeight();

                if (detailOuterHeight > offerLinkOuterHeight) {
                    slideAmount = detailOuterHeight;
                    detailBoxHeight = detailHeight;
                }
                else {
                    slideAmount = offerLinkOuterHeight;
                    detailBoxHeight = offerLinkHeight;
                }

                // the height offers container needs to grow to when links move
                // down
                var offersHeightNew = offersHeight + $(this).outerHeight();

                // details about the chosen link and row it sits on
                var linkIndex = $(offerLinkElem).index(this);
                linkRow = Math.ceil((linkIndex + 1) / 3);
                linkMax = (linkRow * 3) - 4;

                // animate selected and details
                if ($('.detailsBox').length > 0) {
                    minimiseAll(true);
                }
                else {
                    moveRows(offerLinkOuterHeight);
                    displayDetails();
                }
                var offersURL = (document.URL).split('#')[0];
                window.location = offersURL + detailId;
            }
            return false;
        });
    },
    pinMethod: function () {
        function setPinMethodNote() {
            if ($(lebara.vars.selectors.pinMethodInput + ':checked').val() == 'email') {
                $(lebara.vars.selectors.pinMethod + ' p').text(lebara.vars.strings.en.pinMethodNoteEmail);
            }
            else if ($(lebara.vars.selectors.pinMethodInput + ':checked').val() == 'sms') {
                $(lebara.vars.selectors.pinMethod + ' p').text(lebara.vars.strings.en.pinMethodNoteSMS);
            }
        }


        $(lebara.vars.selectors.pinMethod).append('<p></p>');
        setPinMethodNote();

        $(lebara.vars.selectors.pinMethodInput).change(function () {
            setPinMethodNote();
        });
    },
    outOfPlanRates: function () {
        $(lebara.vars.selectors.outOfPlanRates).hide();

        $('<a href="#" title="' + lebara.vars.strings.en.outOfPlanRatesText1 + '" class="secButton secButton-max sidePanel2">' + lebara.vars.strings.en.outOfPlanRatesText1 + '</a>').appendTo('.yourPlan .module:first').toggle(function () {
            $(lebara.vars.selectors.outOfPlanRates).show();
            $(this).html(lebara.vars.strings.en.outOfPlanRatesText2).removeClass('secButton-max').addClass('secButton-min').attr('title', lebara.vars.strings.en.outOfPlanRatesText2);
        }, function () {
            $(lebara.vars.selectors.outOfPlanRates).hide();
            $(this).html(lebara.vars.strings.en.outOfPlanRatesText1).removeClass('secButton-min').addClass('secButton-max').attr('title', lebara.vars.strings.en.outOfPlanRatesText1);
        })
    },
    handsetBoltons: function () {
        $(lebara.vars.selectors.handsetBoltons).show();

        $('<a href="#" title="' + lebara.vars.strings.en.handsetBoltonsText2 + '" class="secButton secButton-min sidePanel2">' + lebara.vars.strings.en.handsetBoltonsText2 + '</a>').appendTo('.boltons').toggle(function () {
            $(lebara.vars.selectors.handsetBoltons).hide();
            $(this).html(lebara.vars.strings.en.handsetBoltonsText1).removeClass('secButton-min').addClass('secButton-max').attr('title', lebara.vars.strings.en.handsetBoltonsText1);
        }, function () {
            $(lebara.vars.selectors.handsetBoltons).show();
            $(this).html(lebara.vars.strings.en.handsetBoltonsText2).removeClass('secButton-max').addClass('secButton-min').attr('title', lebara.vars.strings.en.handsetBoltonsText2);
        })
    },
    showFields: function () {
        $(lebara.vars.selectors.checkoutAddressTrigger).toggle(function () {

            $(this).closest('fieldset').find(lebara.vars.selectors.checkoutAddressFields).show();
            $(this).text(lebara.vars.strings.en.checkoutAddressTriggerText2);
            $(this).removeClass('secButton-max').addClass('secButton-min');

            var _allFields = $(this).closest('fieldset').find(lebara.vars.selectors.checkoutAddressFields).find(".text");

            // Please do not Change it , please discuss with Gaurav or
            // Mehak, modified for Rewards

            if (document.getElementById("FROMREWARDS"))
                $(_allFields).removeAttr("readonly");
            else {
                if (!document.getElementById("dynamicFreeSim")) {
                    $(_allFields).removeAttr("disabled");
                }
            }

            // ////////// Ends here
            $(this).closest('fieldset').find('.postCodePopulate').css(
                {
                    'display': 'none'
                });

            // multiple addresses
            if ($(lebara.vars.selectors.multipleAddresses).length > 0) {
                var index = $('.showAddress').index(this);
            }

            $('#chkBox').attr('checked', false);
            $('#cprNonRequired').attr('value', "");
            $('#cprNonRequired').attr('disabled', true);
            $('#hideUKfindAddress').hide();
            $('#pleaseEnterMsg').show();
            return false;
        }, function () {
            $(this).closest('fieldset').find(lebara.vars.selectors.checkoutAddressFields).hide();
            $(this).text(lebara.vars.strings.en.checkoutAddressTriggerText1);
            $(this).removeClass('secButton-min').addClass('secButton-max');
            // multiple addresses
            if ($(lebara.vars.selectors.multipleAddresses).length > 0) {
                var index = $('.showAddress').index(this);
            }
            $('#chkBox').attr('checked', true);
            $('#cprNonRequired').attr('disabled', false);

            return false;
        });
    },
    deactivateSwitcher: function () {
        var isUnlimitedchecked = new Boolean();
        isUnlimitedchecked = true;
        function deactivate() {
            $(lebara.vars.selectors.deactivate).find('input,select').not('.topupType').attr('disabled', 'disabled');
            $(lebara.vars.selectors.deactivate).find('input[type=text]').attr('readonly', 'readonly');
            $(lebara.vars.selectors.deactivate).children('.mask-wrapper').children('.mask').css('display', 'block');
            $(lebara.vars.selectors.deactivate).find('li').removeClass('sim-selected');
        }

        function activate() {
            var selectedRadio = $(lebara.vars.selectors.activate).children('label.topupHeaderLabel').children('input');

            if ($(lebara.vars.selectors.activate).find(lebara.vars.selectors.radioSlider).length > 0) {
                $(lebara.vars.selectors.activate).find(lebara.vars.selectors.radioSlider).removeAttr("disabled");
                var radioSliderObj = $(lebara.vars.selectors.activate).find(lebara.vars.selectors.radioSlider);
                var radioSliderVal = $(radioSliderObj).filter(':checked').val();
                if (radioSliderVal == "true") {
                    $(lebara.vars.selectors.activate).find('input,select').removeAttr("disabled").closest('.field').removeClass('deactivate');
                    $(lebara.vars.selectors.activate).find('h3').removeClass('deactivate');
                }
                else {
                    $(lebara.vars.selectors.activate).find('h3').addClass('deactivate');
                }
            }
            else {
                $(lebara.vars.selectors.activate).find('input,select').removeAttr("disabled");
            }

            $(lebara.vars.selectors.activate).find('input[type=text]').removeAttr('readonly');
            $(lebara.vars.selectors.activate).children('label.topupHeaderLabel').addClass('topupHeaderLabel-active');
            $(lebara.vars.selectors.activate).children('label.topupHeaderLabel').children('input').attr('checked', 'checked')
            $(lebara.vars.selectors.activate).children('.mask-wrapper').children('.mask').css('display', 'none');

            var restrictedProductids = eval(lebara.vars.strings.en.restrictedProductids);

            if (restrictedProductids != null) {
                for (var i = 0; i < restrictedProductids.length; i++) {
                    var obj = restrictedProductids[i];

                    var productId = obj["label"];

                    deactivateUnlimitedTopupProduct(productId)
                }
            }
            if ($('#unlimited').hasClass('activate')) {
                if (isUnlimitedchecked) {
                    var eligibleObject = findFirstEligibleUnlimited();

                    if (eligibleObject != null) {
                        $("#unlimited").find("input[type=radio]").not(eligibleObject).parent().parent().removeClass("sim-selected");

                        $(eligibleObject).parent().parent().addClass('sim-selected');
                        $(eligibleObject).attr('checked', 'checked');
                        isUnlimitedchecked = false;
                    }
                    else {

                        $("#unlimited").find("input[type=radio]").parent().parent().removeClass("sim-selected");
                        isUnlimitedchecked = false;
                    }
                }
            }
            if ($(selectedRadio).val() == "instantTopup" || $(selectedRadio).val() == "extraInstantTopup") {
                $(".promoVoucher").show();
                $(".promoVoucher input").removeAttr("disabled");
                $('#regBreadId').hide();
                $('#unRegBreadId').show();

                $(".postFinance").show();

                $('#MasterCard').html("<span class='primaryButton-body'><span>&nbsp;</span>" + lebara.vars.strings.en.masterCardVisa + "</span>");

            }
            else {
                if ($('#userUnReg').val() == 'false') {
                    $('#regBreadId').hide();
                    $('#unRegBreadId').show();
                }
                else {
                    $('#regBreadId').show();
                    $('#unRegBreadId').hide();
                }
                $(".promoVoucher input").attr("disabled", "disabled");
                $(".promoVoucher").hide();
                $(".postFinance").hide();

                $('#MasterCard').html("<span class='primaryButton-body'><span>&nbsp;</span>" + lebara.vars.strings.en.continueButton + " </span>");
            }
        }

        /* INITIALISE */
        deactivate();
        activate();
        $('.instantTopupValuePanel label').css('margin-bottom', '0px');
        $('.instantTopupValuePanelExtra label').css('margin-bottom', '0px');
        $('label.topupHeaderLabel input').addClass('accessibility');
        $('.mask').each(function () {
            var width = $(this).parent().parent().width();
            var height = $(this).parent().parent().height();
            $(this).css(
                {
                    'width': width,
                    'height': height
                })
        });
        /* hide/show correct drop down */
        if ($('.schedTopupPeriod:checked').val() == "monthly") {
            $(lebara.vars.selectors.scheduledTopUpWeekly).hide();
            $(lebara.vars.selectors.scheduledTopUpMonthly).show();
        }
        else {
            $(lebara.vars.selectors.scheduledTopUpWeekly).show();
            $(lebara.vars.selectors.scheduledTopUpMonthly).hide();
        }
        if ($('.schedTopupPeriodExtra:checked').val() == "monthly") {
            $(lebara.vars.selectors.extraScheduledTopUpWeekly).hide();
            $(lebara.vars.selectors.extraScheduledTopUpMonthly).show();
        }
        else {
            $(lebara.vars.selectors.extraScheduledTopUpWeekly).show();
            $(lebara.vars.selectors.extraScheduledTopUpMonthly).hide();
        }
        /* change position of divs */
        $('fieldset.radioSlider').each(function () {
            $(this).find('div.radioSliderStatus').appendTo(this);
        })
        $('.schedTopupPeriod').closest('div.field.normal').appendTo('.periodSelector');
        $('.schedTopupPeriodExtra').closest('div.field.extra').appendTo('.periodSelectorExtra');

        var firstEligibleTopup;
        /* MODULE CLICK */
        $(lebara.vars.selectors.activateSwitch).click(function () {
            if (!$(this).hasClass('activate')) {
                $(lebara.vars.selectors.activateSwitch).removeClass('activate').addClass('deactivate');
                $(lebara.vars.selectors.activateSwitch).children('label').removeClass('topupHeaderLabel-active');
                deactivate();

                $(this).removeClass('deactivate').addClass('activate');
                // added to select extra instant top up sim
                $(lebara.vars.selectors.simSelectionPanelLabel).parent().removeClass('sim-selected');
                $(this).find("ul.simSelectionPanel li").eq("0").addClass('sim-selected');
                $(this).find("ul.simSelectionPanel li").eq("0").find("input[type=radio]").attr('checked', 'checked');
                // changes for unlimited topup

                $("#message").hide();
                if ($(this).attr('id') == "unlimited") {
                    var restrictedids = eval(lebara.vars.strings.en.restrictedProductids);

                    if (restrictedids != null) {
                        var eligibleObject = findFirstEligibleUnlimited();

                        if (eligibleObject != null) {
                            $("#unlimited").find("input[type=radio]").not(eligibleObject).parent().parent().removeClass("sim-selected");

                            $(eligibleObject).parent().parent().addClass('sim-selected');
                            $(eligibleObject).attr('checked', 'checked');
                        }
                        else {
                            $("#unlimited").find("input[type=radio]").parent().parent().removeClass("sim-selected");

                        }
                    }
                }
                var inputEx = $(this).find("ul.simSelectionPanel li input")[0];
                if (inputEx && $(inputEx).attr('id').indexOf('extraInstantTopupValue') >= 0) {
                    $(inputEx).trigger('click');
                }
            }
            activate();
        });
        /* MODULE HOVER */
        $(lebara.vars.selectors.activateSwitch).hover(function () {
            $(this).children('label').addClass("topupHeaderLabel-active");
        }, function () {
            if ($(this).hasClass('deactivate')) {
                $(this).children('label').removeClass("topupHeaderLabel-active");
            }
        });
        // start unlimited top up
        function deactivateUnlimitedTopupProduct(productId) {
            var listOfTopups = $("#unlimited").find("input[type=radio]");
            for (var i = 0; i < listOfTopups.length; i++) {
                var obj = listOfTopups[i];

                if ($(obj).attr("value") == productId) {
                    $(obj).attr('disabled', 'disabled');
                }
            }
        }

        // for registered unlimited top up
        function findFirstEligibleUnlimited() {
            var inner = 0;
            var listOfTopups = $("#unlimited").find("input[type=radio]").not('.topupType');
            var restrictedProductids = eval(lebara.vars.strings.en.restrictedProductids);
            if (listOfTopups != null) {
                if (restrictedProductids != null) {
                    for (var outer = 0; outer < listOfTopups.length; outer++) {
                        var outerObject = listOfTopups[outer];
                        for (; inner < restrictedProductids.length; inner++) {
                            var innerObject = restrictedProductids[inner];
                            var productId = innerObject['label'];

                            if ($(outerObject).attr("value") == productId) {
                                break;
                            }
                        }
                        if (inner == restrictedProductids.length) {
                            return outerObject;
                        }
                    }
                }
                else {
                    var firstObject = $("#unlimited").find("input[type=radio]").not('.topupType').eq("0");
                    return firstObject;
                }
            }
        }

    },
    tableHighlight: function () {
        $(".tableHighlight tr").hover(function () {
            $(this).not(".noHighlight").addClass("trHoverColor");
        }, function () {
            $(this).not(".noHighlight").removeClass("trHoverColor");
        });
    },
    radioSlider: function () {
        function toggleRadioSlider() {
            $('div.slider').each(function () {
                var radioButSelector = "input[name=" + $(this).attr('id') + "]:checked";
                var selected = $(radioButSelector).val();

                if (selected == "true") {
                    $(this).closest("fieldset").find("div.radioSliderStatus span").text(" " + lebara.vars.strings.en.radioSliderTextOn);
                    $(this).find('label.on').removeClass('deselectedOn').addClass('selectedOn');
                    $(this).find('label.off').removeClass('selectedOff').addClass('deselectedOff');
                }
                else {
                    $(this).closest("fieldset").find("div.radioSliderStatus span").text(" " + lebara.vars.strings.en.radioSliderTextOff);
                    $(this).find('label.on').removeClass('selectedOn').addClass('deselectedOn');
                    $(this).find('label.off').removeClass('deselectedOff').addClass('selectedOff');
                }
            })
        }


        $(lebara.vars.selectors.radioSlider).addClass('accessibility');
        toggleRadioSlider();
        $('.radioSlider div label').each(function () {
            var newWidth = $(this).width() + 4;
            $(this).css('min-width', newWidth);
        })

        $(lebara.vars.selectors.radioSlider).click(function () {
            toggleRadioSlider();
        });
    },
    popup: function () {
        $(lebara.vars.selectors.popup).click(function () {

        });
    },
    getJson: function (_url, _success, _cache) {
        if (_cache != false) {
            _cache = true;
        }

        // fix done for IE, to set the cache forcefully.
        $.ajaxSetup(
            {
                cache: _cache
            });

        $.ajax(
            {
                url: _url,
                dataType: 'json',
                type: 'GET',
                cache: _cache,
                success: _success
            });

    },
    postCodeGetJson: function (_url, trigger) {

        $(".postCodeLookUpTrigger").addClass("accessibility");
        $(".postCodeSearching").removeClass("accessibility");
        var _postcode = "";
        if ($("#pCodeFind").val()) {
            _postcode = $("#pCodeFind").val();
            _url = _url + "postcode=" + ($("#pCodeFind").val());
        }
        else if ($("#postCode").val()) {
            _postcode = $("#postCode").val();
            _url = _url + "postcode=" + ($("#postCode").val());
        }

        if ($("#area").val()) {
            _url = _url + "&area=" + $("#area").val();
        }
        if ($("#address1").val()) {
            _url = _url + "&address1=" + ($("#address1").val());
        }
        else if ($("#adline2").val()) {
            _url = _url + "&address1=" + ($("#adline2").val());
        }
        _url = encodeURI(_url + "&areaValidate=" + $('#areaFlag').val() + "&houseNumValidate=" + $('#houseNumFlag').val() + "&postCodeValidate=" + $('#postCodeFlag').val());

        $.ajax(
            {
                url: _url,
                dataType: 'json',
                type: 'GET',
                error: function (json) {
                    $(".postCodeLookUpTrigger").removeClass("accessibility");
                    $(".postCodeSearching").addClass("accessibility");
                },
                success: function (json) {
                    var currentFieldSet = $(trigger).parents("fieldset");
                    $(".postCodeLookUpTrigger").removeClass("accessibility");
                    $(".postCodeSearching").addClass("accessibility");
                    if (json) {
                        $("#addressFindMsg").show();

                        if ($(_postcode)) {
                            $((currentFieldSet).find(".postCodePopulate select.text option[value!='']")).remove();
                            for (var i = 0, jLen = json.length; i < jLen; i++) {
                                var _item = json[i];
                                $(currentFieldSet).find(".postCodePopulate select.text").append($("<option value='" + _item.monica + "'>" + _item.address + "</option>"));
                            }
                            if ($(currentFieldSet).find(".postCodePopulate select.text option").length > 0) {
                                $(currentFieldSet).find(".postCodePopulate").show();
                                $(currentFieldSet).find(".address").hide();

                                if (isGermanSite) {
                                    document.getElementById("activate").style.display = 'none';
                                    document.getElementById("activateTextPara").style.display = 'none';
                                }

                                if (null != $('#hideUKfindAddress') && undefined != $('#hideUKfindAddress')) {
                                    $('#hideUKfindAddress').show();
                                }
                                lebara.populatePostCode(json, currentFieldSet);
                                return false;
                            }
                            else {
                                $(currentFieldSet).find(".postCodePopulate").hide();
                                $('#hideUKfindAddress').hide();
                            }
                        }
                    }
                    else {
                        // display Manual Address Fields if PostcodeJSon Fails 3
                        // times
                        lebara.vars.counters.parsePostCodeFailure++;
                        if (lebara.vars.counters.parsePostCodeFailure == 3) {

                            $(currentFieldSet).find(".showAddress").click();
                        }

                    }
                }
            });
    },
    addressFinderWizardGetJson: function (_url, trigger) {
        // alert("IN address finder wizrar function");
        $(".addressFinderWizardTrigger").addClass("accessibility");
        $(".postCodeSearching").removeClass("accessibility");
        $("#selectAddress").removeClass("validFieldBg");

        var _postcode = "";
        var date = new Date();
        if ($("#pCodeFind").val()) {
            _postcode = $("#pCodeFind").val();
            _url = _url + "postcode=" + ($("#pCodeFind").val());
        }
        if ($("#area").val()) {
            _url = encodeURI(_url + "&date=" + date.getTime() + "&areaValidate=true&houseNumValidate=" + $('#houseNumFlag').val() + "&postCodeValidate=" + $('#postCodeFlag').val()) + "&area=" + encodeURIComponent($("#area").val());
        }
        else {
            _url = encodeURI(_url + "&date=" + date.getTime() + "&areaValidate=" + $('#areaFlag').val() + "&houseNumValidate=" + $('#houseNumFlag').val() + "&postCodeValidate=" + $('#postCodeFlag').val());
        }

        $.ajax(
            {
                url: _url,
                dataType: 'json',
                type: 'GET',
                cache: false,
                contentType: "application/json;charset=UTF-8",
                error: function (json) {
                    wizardGetJsonError();
                },
                success: function (json) {
                    if (json && json[0].showStreet == "true") {
                        // alert("in if condition");
                        if (document.getElementById("street_field")) {
                            document.getElementById("street_field").style.display = "block";
                            document.getElementById("showstreetinaddresswiz").value = "true";

                        }
                        $('#wizardLoadingDiv').hide();
                        $(".addressFinderWizardTrigger").removeClass("accessibility");
                        $(".postCodeSearching").addClass("accessibility");
                        // $("#pCodeFind").attr("readonly","readonly");
                        // return wizardGetJsonError();
                    }
                    else {
                        // alert("in else condition");
                        // document.getElementById("street_field").style.display
                        // = "none";
                        if (document.getElementById("showstreetinaddresswiz").value == "true" && document.getElementById("area").value == "") {
                            document.getElementById("street_field").style.display = "none";
                            // document.getElementById("area").value =""
                            document.getElementById("showstreetinaddresswiz").value = "false";
                        }
                        if (json == undefined) {
                            return wizardGetJsonError();
                        }
                        var currentFieldSet = $(trigger).parents("fieldset");
                        $(".addressFinderWizardTrigger").removeClass("accessibility");
                        $(".postCodeSearching").addClass("accessibility");
                        $("#pCodeFind").attr("readonly", "readonly");
                        $(".addressFinderWizardTrigger").css("display", "none");
                        $(".resetDisplay").css("display", "block");
                        $(".populatedAddress").hide();
                        $(".addressFinderWizardSubmit").attr('disabled', 'disabled');
                        $(".addressFinderWizardSubmit").addClass("disabledPrimaryBut");
                        // $("#pCodeFind").blur() ;

                        if (json) {

                            $("#addressFindMsg").show();

                            if ($(_postcode)) {
                                $((currentFieldSet).find(".postCodePopulate select.text option[value!='']")).remove();

                                for (var i = 0, jLen = json.length; i < jLen; i++) {
                                    var _item = json[i];
                                    $(currentFieldSet).find(".postCodePopulate select.text").append($("<option value='" + _item.monica + "'>" + _item.address + "</option>"));
                                }
                                if ($(currentFieldSet).find(".postCodePopulate select.text option").length > 0) {

                                    $(currentFieldSet).find("#addressDrop").hide();
                                    $(currentFieldSet).find("#wizardAdLine1").val('');
                                    $("#populatedaddress1").val('');
                                    $(currentFieldSet).find("#houseNo").hide();

                                    $(currentFieldSet).find(".postCodePopulate").show();

                                    lebara.populateAddressFinderWizard(json, currentFieldSet);
                                    return false;
                                }
                                else {
                                    $(currentFieldSet).find(".postCodePopulate").hide();

                                }
                            }

                        }
                    }

                }
            });

    },
    postCodeGetJson1: function (_url, trigger) {

        var viaType_var = $("#viaType").val();
        var postCode = '';
        $(".postCodeLookUpTrigger1").addClass("accessibility");
        $(".postCodeSearching").removeClass("accessibility");

        if ($("#pCodeFind").val()) {
            postCode = $("#pCodeFind").val();
        }
        else {
            postCode = $("#postCode").val();
        }

        if (postCode != null && postCode != '') {
            _url = _url + "postcode=" + postCode;
        }

        if (viaType_var != "" && !viaType_var.match(/select/i)) {
            _url = _url + "&area=" + $("#viaType").val();
        }
        if ($("#address1").val()) {
            _url = _url + "&address1=" + ($("#address1").val());
        }
        _url = encodeURI(_url + "&areaValidate=" + $('#areaFlag').val() + "&houseNumValidate=" + $('#houseNumFlag').val() + "&postCodeValidate=" + $('#postCodeFlag').val());

        $.ajax(
            {
                url: _url,
                dataType: 'json',
                type: 'GET',

                error: function (json) {
                    $(".postCodeLookUpTrigger1").removeClass("accessibility");
                    $(".postCodeSearching").addClass("accessibility");
                    if (document.getElementById('addFoundNotFound')) {
                        document.getElementById('addFoundNotFound').innerHTML = '<p> <img src="/assets/images/icons/conflict.png" alt="found">&nbsp;&nbsp;<strong>' + lebara.vars.strings.en.addressNotFound + '</strong></p>';
                    }
                },
                success: function (json) {
                    var currentFieldSet = $(trigger).parents("fieldset");
                    $(".postCodeLookUpTrigger1").removeClass("accessibility");
                    $(".postCodeSearching").addClass("accessibility");

                    if (json) {

                        var _postcode = $("#pCodeFind").val();

                        if ($(_postcode)) {

                            if (document.getElementById('addFoundNotFound') && json.length > 0) {
                                document.getElementById('addFoundNotFound').innerHTML = '<p> <img src="/assets/images/icons/iconMatched.gif" alt="found">&nbsp;&nbsp;<strong>' + lebara.vars.strings.en.addressFound + '</strong></p>';
                            }
                            else if (document.getElementById('addFoundNotFound')) {
                                document.getElementById('addFoundNotFound').innerHTML = '<p> <img src="/assets/images/icons/conflict.png" alt="found">&nbsp;&nbsp;<strong>' + lebara.vars.strings.en.addressNotFound + '</strong></p>';
                            }

                            $((currentFieldSet).find(".postCodePopulate select.text option[value!='']")).remove();
                            for (var i = 0, jLen = json.length; i < jLen; i++) {
                                var _item = json[i];
                                $(currentFieldSet).find(".postCodePopulate select.text").append($("<option value='" + _item.monica + "'>" + _item.address + "</option>"));
                            }
                            if ($(currentFieldSet).find(".postCodePopulate select.text option").length > 0) {
                                $(currentFieldSet).find(".postCodePopulate").show();
                                $(currentFieldSet).find(".address").hide();
                                lebara.populatePostCode1(json, currentFieldSet);
                                return false;
                            }
                            else {
                                $(currentFieldSet).find(".postCodePopulate").hide();

                            }

                        }
                    }
                    else {
                        // display Manual Address Fields if PostcodeJSon
                        // Fails 3 times
                        lebara.vars.counters.parsePostCodeFailure++;
                        if (lebara.vars.counters.parsePostCodeFailure == 3) {

                            $(currentFieldSet).find(".showAddress").click();
                        }

                    }
                }
            });

    },
    populatePostCode1: function (json, currentFieldSet) {
        $(".postCodePopulate select.text").unbind();
        // code fix for 1273943
        $(".postCodePopulate select.text").change(function () {
            $(".postCodePopulate select.text option:selected").each(function () {
                if ($(this).val() != "") {
                    $.ajax(
                        {
                            url: '/view/FindAddressController?getAddress=true&monica=' + $(this).val(),
                            dataType: 'json',
                            type: 'GET',
                            success: function (json) {
                                if (json) {
                                    // change to signify whether address entered using find
                                    // address functioanlity
                                    if (!(document.getElementById("isFindAddress") == undefined)) {
                                        document.getElementById("isFindAddress").value = "true";
                                    }

                                    for (var i = 0, jLen = json.length; i < jLen; i++) {
                                        var _item = json[i];
                                        var allFields = $(currentFieldSet).find(".address .text");
                                        $(currentFieldSet).find(".address").css(
                                            {
                                                "display": "block"
                                            });
                                        $("#city").val(_item.city);
                                        $("#county").val(_item.county);
                                        $("#city").select();
                                        $("#city").blur();
                                        $("#county").select();
                                        $("#county").blur();

                                        // //////////////START : Changes done by Vishal
                                        // to override Number, ViaName & ViaType
                                        // fields//////////////

                                        var address1 = _item.adline1;
                                        var address2 = _item.adline2;
                                        var address3 = _item.adline3;

                                        var viaNameRegex = lebara.vars.strings.validation.personalInformationFreeSim.address1.Format.Regex;
                                        var hNoRegex;
                                        // HouseNo. field's id is 'address2' in ES free
                                        // sim journey.
                                        if ($("#number").val() == undefined) {
                                            hNoRegex = lebara.vars.strings.validation.personalInformationFreeSim.address2.Format.Regex;
                                        }
                                        else {
                                            hNoRegex = lebara.vars.strings.validation.personalInformation.number.Format.Regex;
                                        }

                                        // Overrideing the Number field with address1 of
                                        // ESB values.
                                        if (address1 != '' && address1 != null && hNoRegex.test(address1)) {

                                            if ($("#number").val() == undefined) {
                                                $("#address2").val(address1);
                                            }
                                            else {
                                                $("#number").val(address1);
                                            }
                                        }
                                        // Overrideing the Via Name field with address2
                                        // of ESB values.
                                        if (address2 != '' && address2 != null && viaNameRegex.test(address2)) {
                                            $("#address1").val(address2);
                                        }
                                        if (address3 != '' && address3 != null && ($('#viaType option[value=' + address3 + ']').length > 0)) {
                                            $("#viaType").val(address3);
                                        }

                                        $(allFields).siblings(".errorTooltip").remove();
                                        $((allFields).parents(".field")).removeClass("invalidField");

                                        if (document.getElementById("FROMREWARDS")) {
                                            $(allFields).not('select').attr("readonly", "readonly");
                                        }
                                        else {
                                            $(allFields).not('select').attr("disabled", "disabled");
                                        }

                                        $(".buttonBar .primaryButton").click(function () {
                                            $(allFields).removeAttr("disabled");
                                            $(allFields).attr("readonly", "readonly");
                                        });
                                        $(".submitBtnFreeSim #btnESFreeSim").click(function () {
                                            $(allFields).removeAttr("disabled");
                                            $(allFields).attr("readonly", "readonly");
                                        });
                                        if (isGermanSite && !isErrorOccured) {
                                            // Show Activate button.
                                            lebara.showHideFields(currentFieldSet);
                                        }
                                    }
                                }
                            }
                        });
                }
                else {
                    $(currentFieldSet).find(".address").css(
                        {
                            "display": "none"
                        });
                    if (isGermanSite && !isErrorOccured) {
                        // Hide Activate button.
                        document.getElementById("activate").style.display = 'none';
                        document.getElementById("activateTextPara").style.display = 'none';

                        // Make a red border around address drop-down.
                        document.getElementById("address").style.borderColor = '#FF0000';
                    }
                }
            });
            if ($(currentFieldSet).parents("#personalInformationFreeSim").length > 0) {
                $(".pcodemsg").css("display", "none");
            }

        });
    },
    populatePostCode: function (json, currentFieldSet) {
        $(".postCodePopulate select.text").change(function () {
            $(".postCodePopulate select.text option:selected").each(function () {
                if ($(this).val() != "") {
                    $.ajax(
                        {
                            url: '/view/FindAddressController?getAddress=true&monica=' + $(this).val(),
                            dataType: 'json',
                            type: 'GET',
                            success: function (json) {
                                if (json) {
                                    // change to signify whether address entered using find
                                    // address functioanlity
                                    if (!(document.getElementById("isFindAddress") == undefined)) {
                                        document.getElementById("isFindAddress").value = "true";
                                    }
                                    $('#hideUKfindAddress').hide();
                                    $('#addressFoundBelowMsg').show();
                                    for (var i = 0, jLen = json.length; i < jLen; i++) {
                                        var _item = json[i];
                                        var allFields = $(currentFieldSet).find(".address .text");
                                        $(currentFieldSet).find(".address").css(
                                            {
                                                "display": "block"
                                            });
                                        $(currentFieldSet).find(".address .adline1 input.text").val(_item.adline1);
                                        $(currentFieldSet).find(".address .adline1 input.text").select();
                                        $(currentFieldSet).find(".address .adline1 input.text").blur();
                                        $(currentFieldSet).find(".addressFree .adline2 input.text").val(_item.adline2);
                                        $(currentFieldSet).find(".address .adline2 input.text").val(_item.adline2);
                                        $(currentFieldSet).find(".address .adline2 ").removeAttr("disabled");
                                        $(currentFieldSet).find(".address .adline3 input.text").val(_item.adline3);
                                        $(currentFieldSet).find(".address .city input.text").val(_item.city);
                                        $(currentFieldSet).find(".address .city input.text").blur();
                                        $(currentFieldSet).find(".address .county input.text").val(_item.county);
                                        $(currentFieldSet).find(".address .suburb input.text").val(_item.suburb);
                                        $(currentFieldSet).find(".address .country input.text").val(_item.country);
                                        $(currentFieldSet).find(".address .postcode input.text").val(_item.postCode);
                                        $(allFields).siblings(".errorTooltip").remove();
                                        $((allFields).parents(".field")).removeClass("invalidField");

                                        // Please do not Change it , please discuss with
                                        // Gaurav or Mehak , Modified for Rewards
                                        if (document.getElementById("FROMREWARDS"))
                                            $(allFields).not('select').attr("readonly", "readonly");
                                        else if (document.getElementById("hideUKfindAddress")) {
                                            var _validImage = lebara.vars.paths.validImage;
                                            $(allFields).removeAttr("disabled");
                                            $(allFields).select();
                                            $(allFields).blur();
                                        }
                                        else
                                            $(allFields).not('select').attr("disabled", "disabled");
                                        // //////// Ends here

                                        $(".buttonBar .primaryButton").click(function () {
                                            $(allFields).removeAttr("disabled");
                                            $(allFields).attr("readonly", "readonly");
                                        });

                                        $(".submitBtn .freeSimRequest").click(function () {
                                            $(allFields).removeAttr("disabled");
                                            $(allFields).attr("readonly", "readonly");
                                        });
                                        if (isGermanSite) {
                                            // Show Activate button.
                                            lebara.showHideFields(currentFieldSet);
                                        }
                                    }
                                }
                            }
                        });
                }
                else {
                    $(currentFieldSet).find(".address").css(
                        {
                            "display": "none"
                        });
                    if (isGermanSite && !isErrorOccured) {
                        // Hide Activate button.
                        document.getElementById("activate").style.display = 'none';
                        document.getElementById("activateTextPara").style.display = 'none';

                        // Make a red border around address drop-down.
                        document.getElementById("address").style.borderColor = '#FF0000';
                    }
                }
            });
            if ($(currentFieldSet).parents("#personalInformationFreeSim").length > 0) {
                $(".pcodemsg").css("display", "none");
            }

        });
    },
    populateAddressFinderWizard: function (json, currentFieldSet) {
        $(".postCodePopulate select.text").unbind('change');
        $(".postCodePopulate select.text").change(function () {
            $(".postCodePopulate select.text option:selected").each(function () {
                $('#wizardLoadingDiv').show();
                $("#houseNo").removeClass("validField");
                $(".populatedAddress").hide();
                $(currentFieldSet).find("#wizardAdLine1").val('');
                $("#populatedaddress1").val('');
                $("#wizardAdLine1").removeClass("validFieldBg").parent().removeClass("validField");
                $("#wizardAdLine1").parent().removeClass("invalidFieldBg").parent().removeClass("invalidField");
                $("#houseNo .input .errorTooltip").css("display", "none");
                $("#houseNo .input .validImage").css("display", "none");
                $(".addressFinderWizardSubmit").attr("disabled", true);
                $(".addressFinderWizardSubmit").addClass("disabledPrimaryBut");
                if ($("#selectAddress").parent().find(".validFieldBg")) {
                    $("#selectAddress").parent().find(".validImage").css("display", "inline");
                }
                // added for activation
                $("#activate").hide();
                $("#activateTextPara").hide();
                if ($(this).val() != "") {

                    $.ajax(
                        {
                            url: '/view/FindAddressController?getAddress=true&monica=' + $(this).val(),
                            dataType: 'json',
                            type: 'GET',

                            error: function (json) {

                                return wizardPopulateJsonError();
                            },
                            success: function (json) {
                                if (json == undefined) {
                                    return wizardPopulateJsonError();
                                }
                                if (json) {
                                    $('#wizardLoadingDiv').hide();
                                    for (var i = 0, jLen = json.length; i < jLen; i++) {
                                        var _item = json[i];

                                        var address = $(".postCodePopulate select.text option:selected").text();

                                        $(currentFieldSet).find("#adLine2").val(_item.adline2);
                                        $(currentFieldSet).find("#city").val(_item.city);
                                        $(currentFieldSet).find("#postCode").val(_item.postCode);
                                        $(currentFieldSet).find("#selectedAddress").val(address);

                                        $('#populatedaddress2').val(_item.adline2);
                                        $('#populatedcity').val(_item.city);
                                        $('#populatedpostCode').val(_item.postCode);

                                        if ($("#houseNo .input").find(".validFieldBg")) {
                                            $("#houseNo .input").find(".validImage").removeClass("validImage");
                                        }

                                        document.getElementById("houseNo").style.display = 'block';
                                        $(".populatedAddress").show();
                                        // Added for activation
                                        $("#activate").show();
                                        $("#activateTextPara").show();

                                        return true;
                                    }
                                }
                            }
                        });
                }
                else {
                    $('#wizardLoadingDiv').hide();
                    document.getElementById("houseNo").style.display = 'none';

                }
            });
        });
    },
    showHideFields: function (currentFieldSet) {
        $(function () {

            var addLine1 = $(currentFieldSet).find(".address .adline1 input.text").val();
            var city = $(currentFieldSet).find(".address .city input.text").val();
            var pCode = $(currentFieldSet).find(".address .postcode input.text").val();
            var addLine2 = $(currentFieldSet).find(".address .adline2 input.text").val();
            var addLine3 = $(currentFieldSet).find(".address .adline3 input.text").val();

            if (addLine1 != '' && city != '' && pCode != '') {
                // Show Activate Button.
                document.getElementById("activate").style.display = 'block';
                document.getElementById("activateTextPara").style.display = 'block';
            }

            // Hide the empty address fields.
            if (addLine2 == '') {
                document.getElementById("addLine2Div").style.display = 'none';
            }

            if (addLine3 == '') {
                document.getElementById("addLine3Div").style.display = 'none';
            }

            // Make a green border around address drop-down.
            document.getElementById("address").style.borderColor = '#00B432';
        });
    },
    predictiveDropDown: function () {
        $(function () {
            var townSet = $(".townSet");
            var input = $(".townSet .fakeInput input");
            if ((townSet).length > 0) {

                $.ajax(
                    {
                        url: lebara.vars.paths.townListJson,
                        dataType: "json",
                        data: {
                            maxRows: 12,
                            minLength: 2
                        },
                        success: function (data) {
                            var x = [];
                            var y = [];
                            for (i = 0; i < data.length; i = i + 1) {
                                x.push(data[i]);
                            }
                            lebara.vars.arrays.predictiveDropDown.townList = x;

                            $(input).each(function () {
                                var input = this;
                                var inputId = $(this).attr("id")

                                $(input).autocomplete(
                                    {

                                        source: function (req, responseFn) {
                                            var re = $.ui.autocomplete.escapeRegex(req.term);
                                            var matcher = new RegExp("^" + re, "i");
                                            var a = $.grep(lebara.vars.arrays.predictiveDropDown.townList, function (item, index) {
                                                return matcher.test(item.label);

                                            });
                                            responseFn(a);

                                        },
                                        focus: function (event, ui) {
                                            $(event.target).val(ui.item.label);
                                            return false;
                                        },
                                        select: function (event, ui) {
                                            $(event.target).val(ui.item.label);
                                            $("#townCode").val(ui.item.value);

                                            lebara.onCountrySelected(ui.item.value, input)
                                            return false;
                                        }
                                    });
                            });
                        }
                    });

            }
        });
        $(function () {
            var continentSet = $(".continentSet");
            var input = $(".continentSet .fakeInput input");

            if ((continentSet).length > 0) {

                $.ajax(
                    {
                        url: externalContinentListUrl,
                        dataType: "json",
                        data: {
                            maxRows: 12,
                            minLength: 2
                        },
                        success: function (data) {
                            var x = [];
                            var y = [];
                            for (i = 0; i < data.length; i = i + 1) {
                                x.push(data[i]);
                            }
                            lebara.vars.arrays.predictiveDropDown.continentList = x;

                            $(input).each(function () {
                                var input = this;
                                var inputId = $(this).attr("id")

                                $(input).autocomplete(
                                    {

                                        source: function (req, responseFn) {
                                            var re = $.ui.autocomplete.escapeRegex(req.term);
                                            var matcher = new RegExp("^" + re, "i");
                                            var a = $.grep(lebara.vars.arrays.predictiveDropDown.continentList, function (item, index) {
                                                return matcher.test(item.label);

                                            });
                                            responseFn(a);

                                        },
                                        focus: function (event, ui) {
                                            $(event.target).val(ui.item.label);
                                            return false;
                                        },
                                        select: function (event, ui) {
                                            $(event.target).val(ui.item.label);
                                            $("#continentCode").val(ui.item.value);

                                            lebara.onCountrySelected(ui.item.value, input)
                                            return false;
                                        }
                                    });
                            });
                        }
                    });
            }
        });
        // Give the input the autocomplete function - Interanation Product
        $(function () {
            var interanationalDestSet = $(".interanationalDestSet");
            var input = $(".interanationalDestSet .fakeInput input");
            if ((interanationalDestSet).length > 0) {

                $(input).each(function () {
                    var input = this;
                    var inputId = $(this).attr("id");

                    $(input).autocomplete(
                        {
                            source: function (req, responseFn) {

                                /*
                                 * Start - Updated by Vishal to fetch different
                                 * country lists for Allowance countries &
                                 * Tariff Countries.
                                 */

                                if (inputId == 'countryChoiceInternational' || inputId == 'countryChoiceInternational1' || inputId == 'countryChoiceInternational2') {
                                    destCountrylistUrl = '/view/ProductListComponentController?tariffCountries=true&productCode=' + $('#productCode').val() + "&tariffType=" + $('#tariffType').val();
                                }

                                else if (inputId == '' || inputId == 'countryChoiceMyCountry') {
                                    destCountrylistUrl = '/view/ProductListComponentController?allowanceCountries=true';
                                }
                                $.ajax(
                                    {
                                        url: destCountrylistUrl,
                                        dataType: "json",
                                        cache: false,
                                        data: {
                                            maxRows: 12,
                                            minLength: 2
                                        },
                                        success: function (data) {
                                            var x = [];
                                            var y = [];

                                            for (i = 0; i < data.length; i = i + 1) {
                                                x.push(data[i]);
                                            }

                                            lebara.vars.arrays.predictiveDropDown.destList = x;

                                            var re = $.ui.autocomplete.escapeRegex(req.term);
                                            var matcher = new RegExp("^" + re, "i");
                                            var a = $.grep(lebara.vars.arrays.predictiveDropDown.destList, function (item, index) {
                                                return matcher.test(item.label);

                                            });
                                            responseFn(a);

                                        }
                                    });

                                /*
                                 * End - Updated by Vishal to fetch different
                                 * country lists for Allowance countries &
                                 * Tariff Countries.
                                 */

                            },
                            focus: function (event, ui) {
                                $(event.target).val(ui.item.label);
                                return false;
                            },
                            select: function (event, ui) {

                                $(event.target).val(ui.item.label);
                                // for ID Managment by Gaurav , Please consult
                                // before overriding

                                if ($("#destCountryCode") && $("#destCountryCode").val() != undefined) {
                                    $("#destCountryCode").val(ui.item.value);
                                }
                                else {
                                    $(".countryCode").val(ui.item.value);
                                }
                                if ((".simValue #priceCountryGo").length > 0) {
                                    $(".simValue #priceCountryGo").click();
                                }

                                var srcCountryCode = $('#srcCountryCode').val();
                                var destCountryCode = $('#destCountryCode').val()
                                if (srcCountryCode != null && destCountryCode != null && srcCountryCode != "" && destCountryCode != "") {
                                    var _success = lebara.getEuroTariffDetails
                                    $.ajax(
                                        {
                                            url: lebara.vars.paths.getInternationalTariffDetailsUrl,
                                            data: 'src_isoCode=' + srcCountryCode + '&dest_isoCode=' + destCountryCode,
                                            dataType: 'html',
                                            type: 'GET',
                                            success: _success
                                        });
                                }

                                return false;

                            }
                        });
                });
            }
        });
        // Give the input the autocomplete function - Interanation Product
        $(function () {
            var interanationalSet = $(".interanationalSet");
            var input = $(".interanationalSet .fakeInput input");
            if ((interanationalSet).length > 0) {

                $(input).each(function () {
                    var input = this;
                    var inputId = $(this).attr("id");
                    $(input).autocomplete(
                        {
                            source: function (req, responseFn) {

                                /*
                                 * Start - Updated by Vishal to fetch different
                                 * country lists for Allowance countries &
                                 * Tariff Countries.
                                 */

                                if (inputId == 'countryChoiceInternational' || inputId == 'countryChoiceInternational1' || inputId == 'countryChoiceInternational2') {
                                    internationalCountrylistUrl = '/view/ProductListComponentController?tariffCountries=true&productCode=' + $('#productCode').val() + "&tariffType=" + $('#tariffType').val();
                                }
                                else if (inputId == '' || inputId == 'countryChoiceMyCountry') {
                                    internationalCountrylistUrl = '/view/ProductListComponentController?allowanceCountries=true';
                                }

                                $.ajax(
                                    {
                                        url: internationalCountrylistUrl,
                                        dataType: "json",
                                        cache: false,
                                        data: {
                                            maxRows: 12,
                                            minLength: 2
                                        },
                                        success: function (data) {
                                            var x = [];
                                            var y = [];

                                            for (i = 0; i < data.length; i = i + 1) {
                                                x.push(data[i]);
                                            }

                                            lebara.vars.arrays.predictiveDropDown.srcList = x;

                                            var re = $.ui.autocomplete.escapeRegex(req.term);
                                            var matcher = new RegExp("^" + re, "i");
                                            var a = $.grep(lebara.vars.arrays.predictiveDropDown.srcList, function (item, index) {
                                                return matcher.test(item.label);

                                            });
                                            responseFn(a);
                                        }
                                    });

                                /*
                                 * End - Updated by Vishal to fetch different
                                 * country lists for Allowance countries &
                                 * Tariff Countries.
                                 */

                            },
                            focus: function (event, ui) {
                                $(event.target).val(ui.item.label);
                                return false;
                            },
                            select: function (event, ui) {

                                $(event.target).val(ui.item.label);
                                // for ID Managment by Gaurav , Please consult
                                // before overriding

                                if ($("#srcCountryCode") && $("#srcCountryCode").val() != undefined) {
                                    $("#srcCountryCode").val(ui.item.value);
                                }
                                else {
                                    $(".countryCode").val(ui.item.value);
                                }

                                if ((".simValue #priceCountryGo").length > 0) {
                                    $(".simValue #priceCountryGo").click();
                                }

                                var srcCountryCode = $('#srcCountryCode').val();
                                var destCountryCode = $('#destCountryCode').val()
                                if (srcCountryCode != null && destCountryCode != null && srcCountryCode != "" && destCountryCode != "") {
                                    var _success = lebara.getEuroTariffDetails
                                    $.ajax(
                                        {
                                            url: lebara.vars.paths.getInternationalTariffDetailsUrl,
                                            data: 'src_isoCode=' + srcCountryCode + '&dest_isoCode=' + destCountryCode,
                                            dataType: 'html',
                                            type: 'GET',
                                            success: _success
                                        });
                                }
                                return false;
                            }
                        });
                });
            }
        });
        // Give the input the autocomplete function - Countries
        $(function () {
            var _sel = lebara.vars.selectors;

            var autComplete = true;
            var acSelectedIndex = 0;
            var acTop = 0;
            var acHeight = 0;
            var countrySet = $(".countrySet");
            var input = $(".countrySet .fakeInput input");
            if ((countrySet).length > 0) {
                $(input).each(function () {
                    var input = this;
                    var inputId = $(this).attr("id");

                    // nithish
                    var grandparent1 = $('input').closest(lebara.vars.selectors.predictiveDropDown);
                    $(input).autocomplete(
                        {
                            source: function (req, responseFn) {

                                /*
                                 * Start - Updated by Vishal to fetch different country
                                 * lists for Allowance countries & Tariff Countries.
                                 */

                                if (inputId == 'countryChoiceInternational' || inputId == 'countryChoiceInternational1' || inputId == 'countryChoiceInternational2') {

                                    if ($(_sel.postpayProductForm).length > 0 || $(_sel.calledFrom).length > 0) {
                                        externalCountrylistUrl = '/view/ProductListComponentController?tariffCountries=true&calledFrom=postpayProductForm&productCode=' + $('#productCode').val() + "&tariffType=" + $('#tariffType').val();
                                    }
                                    else {
                                        externalCountrylistUrl = '/view/ProductListComponentController?tariffCountries=true&productCode=' + $('#productCode').val() + "&tariffType=" + $('#tariffType').val();
                                    }

                                }
                                else if (inputId == '' || inputId == 'countryChoiceMyCountry') {
                                    if ($(_sel.postpayProductForm).length > 0) {
                                        externalCountrylistUrl = '/view/ProductListComponentController?allowanceCountries=true&calledFrom=postpayProductForm';
                                    }
                                    else {
                                        externalCountrylistUrl = '/view/ProductListComponentController?allowanceCountries=true';
                                    }

                                }

                                if (grandparent1.hasClass("countrySet") && grandparent1.hasClass("ukrates")) {
                                    externalCountrylistUrl = getCountryListInRatesJourneyUrl;

                                    // vaibhav
                                    var str = $("#countryChoice1").val();

                                    if (str.length <= 1)// Less than one to
                                    // accomodate for space
                                    // between flag and the
                                    // country name
                                    {
                                        $(document).keydown(function (e) {
                                            if ($("#flagSelect") && ((e.keyCode == 46))) {
                                                // alert(str.length+" first");
                                                $(".flagInput").addClass("flagSelectDim2").removeClass("flagSelectDim1");
                                                $('.fakeInput img').attr('src', '');

                                            }
                                            else if (e.keyCode == 8) {
                                                var newstr = $("#countryChoice1").val();
                                                if (newstr.length == 1) {
                                                    $(".flagInput").addClass("flagSelectDim2").removeClass("flagSelectDim1");
                                                    $('.fakeInput img').attr('src', '');
                                                }
                                            }
                                        });
                                    }
                                }
                                // After deployment
                                $(document).keydown(function (e) {
                                    if (e.keyCode == 40) {
                                        // Down arrow
                                        if ($('.countrySet ul.dropdownList .ui-menu-item').length > 5) {
                                            acHeight = $('.countrySet ul.dropdownList .ui-menu-item').length * $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight();
                                        }
                                        else {
                                            acHeight = $('.countrySet ul.dropdownList').height();
                                        }
                                        e.preventDefault();
                                        e.stopImmediatePropagation();
                                        prevIndex = (acSelectedIndex - 1) < 0 ? ($('.ui-menu-item').length - 1) : (acSelectedIndex - 1);

                                        $('.ui-state-hover').removeClass('ui-state-hover');

                                        $('.ui-menu-item').eq(acSelectedIndex).find('a.ui-corner-all').addClass('ui-state-hover');
                                        acSelectedIndex++;
                                        if (acSelectedIndex == $('.ui-menu-item').length) {
                                            acSelectedIndex = 0;
                                        }
                                        if ((acSelectedIndex > 4) && (acHeight > $('.countrySet ul.dropdownList').height())) {
                                            min = $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight() * (acSelectedIndex - 4);
                                            max = $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight() * (acSelectedIndex);
                                            if (max > $('.countrySet ul.dropdownList').scrollTop()) {
                                                $('.countrySet ul.dropdownList').scrollTop(min);
                                            }
                                        }
                                        else {
                                            $('.countrySet ul.dropdownList').scrollTop(0);
                                        }

                                    }
                                    else if (e.keyCode == 38) {
                                        // Up arrow

                                        e.preventDefault();
                                        e.stopImmediatePropagation();

                                        if ($('.countrySet ul.dropdownList .ui-menu-item').length > 5) {
                                            acHeight = $('.countrySet ul.dropdownList .ui-menu-item').length * $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight();
                                        }
                                        else {
                                            acHeight = $('.countrySet ul.dropdownList').height();
                                        }
                                        prevIndex = (acSelectedIndex + 1) > ($('.ui-menu-item').length - 2) ? 0 : (acSelectedIndex + 1);

                                        $('.ui-state-hover').removeClass('ui-state-hover');

                                        $('.ui-menu-item').eq(acSelectedIndex).find('a.ui-corner-all').addClass('ui-state-hover');

                                        if ((acSelectedIndex <= ($('.ui-menu-item').length - 5) && (acSelectedIndex != 0)) && (acHeight > $('.countrySet ul.dropdownList').height())) {
                                            min = $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight() * (acSelectedIndex - 1);
                                            max = $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight() * (acSelectedIndex + 4);
                                            if (min < $('.countrySet ul.dropdownList').scrollTop()) {
                                                $('.countrySet ul.dropdownList').scrollTop(min);
                                            }
                                        }
                                        else {
                                            min = $('.countrySet ul.dropdownList .ui-menu-item').eq(1).outerHeight() * ($('.ui-menu-item').length - 6);
                                            $('.countrySet ul.dropdownList').scrollTop(min);
                                        }
                                        acSelectedIndex--;
                                        if (acSelectedIndex < 0) {
                                            acSelectedIndex = $('.ui-menu-item').length - 1;
                                        }

                                    }
                                    else {
                                        acSelectedIndex = 0;
                                    }
                                });

                                $.ajax(
                                    {
                                        url: externalCountrylistUrl,
                                        dataType: "json",
                                        cache: false,
                                        data: {
                                            maxRows: 5,
                                            minLength: 2
                                        },
                                        success: function (data) {
                                            var x = [];
                                            var y = [];

                                            for (i = 0; i < data.length; i = i + 1) {
                                                x.push(data[i]);
                                            }

                                            lebara.vars.arrays.predictiveDropDown.countryList = x;

                                            var re = $.ui.autocomplete.escapeRegex(req.term);
                                            var matcher = new RegExp("^" + re, "i");
                                            var a = $.grep(lebara.vars.arrays.predictiveDropDown.countryList, function (item, index) {
                                                return matcher.test(item.label);

                                            });
                                            // if rates
                                            if (grandparent1.hasClass("countrySet") && grandparent1.hasClass("ukrates")) {
                                                if (a.length > 0) {
                                                    var b = new Array;

                                                    for (i = 0; i < a.length; i++) {
                                                        if (a[i].dialCode == "null") {
                                                            b[i] = a[i].flag;
                                                            a[i].label = a[i].label;
                                                        }
                                                        else {
                                                            b[i] = a[i].flag;
                                                            a[i].label = a[i].label + " +" + a[i].dialCode;
                                                        }
                                                    }

                                                    $("#listItemsDiv").css("display", "block");
                                                    $('#refineSearch').css('z-index', '100');
                                                    if (i > 5) {
                                                        $("#refineSearch").css("display", "block");
                                                    }
                                                    else {
                                                        $("#refineSearch").css("display", "none");
                                                    }
                                                }
                                                else {
                                                    $("#listItemsDiv").css("display", "none");
                                                    $("#refineSearch").css("display", "none");
                                                }

                                                var newList = "";

                                                for (var i = 0, jLen = a.length; i < jLen; i++) {
                                                    var _item = a[i];
                                                    newList += "<li class='ui-menu-item clickitem'><a href='#' class='ui-corner-all";
                                                    if (i == acSelectedIndex) {
                                                        newList += ' ui-state-hover';
                                                    }
                                                    if (_item.dialCode == "null") {
                                                        newList += "' title=" + _item.value + ">" + _item.label + "&nbsp;" + "<img id='clickitemimg' src= " + _item.flag + " /></a></li>";
                                                    }
                                                    else {
                                                        newList += "' title=" + _item.value + ">" + _item.label + "<img id='clickitemimg' src= " + _item.flag + " /></a></li>";
                                                    }

                                                }

                                                $(grandparent1).find("ul.dropdownList").html(newList);
                                                $(grandparent1).find("ul.dropdownList").show();

                                                if ($(".dropdownListPosition").css("top") != "492px") {
                                                    $(".dropdownListPosition").css("margin-top", "29px");
                                                    $(".dropdownListPosition").css("margin-left", "7px");
                                                }

                                                countrySelector();
                                                // After deployment
                                                $(".ui-menu-item").bind('mouseover', function (event) {
                                                    $(".ui-corner-all").removeClass('ui-state-hover');

                                                    $(this).find('.ui-corner-all').addClass('ui-state-hover');

                                                    $(".ui-menu-item").each(function (i) {
                                                        if ($(this).find('.ui-state-hover').length > 0) {
                                                            acSelectedIndex = i;
                                                        }
                                                    })
                                                })

                                                $(input).bind('keydown.autocomplete', function (e) {
                                                    if (e.which == 13 && $("ul.dropdownList").is(':visible')) {
                                                        $("#listItemsDiv").hide();
                                                        $("#refineSearch").hide();
                                                        $("ul.dropdownList").hide();
                                                        var countryNameAndDialCode = $(".ui-menu-item").eq(acSelectedIndex).find(".ui-corner-all").text();
                                                        var text = "";
                                                        var i = 0;
                                                        var j;

                                                        if (countryNameAndDialCode.search(" +") != -1) {
                                                            while (i < countryNameAndDialCode.length) {
                                                                text += countryNameAndDialCode[i];
                                                                i++;
                                                                if (countryNameAndDialCode[i] == "+") {
                                                                    j = i + 1;
                                                                    break;
                                                                }
                                                            }
                                                            text += " (ext. +";
                                                            while (j < countryNameAndDialCode.length) {
                                                                text += countryNameAndDialCode[j];
                                                                j++;
                                                            }
                                                            text += ")";
                                                        }
                                                        else {
                                                            text = countryNameAndDialCode;
                                                        }
                                                        $(".ui-autocomplete-input").val(text);
                                                        $("img#flagSelect").attr('src', ($(".ui-menu-item").eq(acSelectedIndex).find(".ui-corner-all img").attr('src')));
                                                        $("img#flagSelect").removeClass('flagSelectDim2');
                                                        $("img#flagSelect").addClass('flagSelectDim1');
                                                        parseRatePlans($("ul.dropdownList li a.ui-state-hover").attr("title"), $(".ui-menu-item").eq(acSelectedIndex).find(".ui-corner-all").text())
                                                        acSelectedIndex = 0;
                                                    }

                                                });
                                                // After deployment end
                                                return false;
                                                $(this).parent().parent().find("ul.dropdownList").html(newList);
                                                $(this).parent().parent().find("ul.dropdownList").attr("display:block;");
                                                // start - adding flag images to the
                                                // autocomplete list
                                                $(".ui-autocomplete li.ui-menu-item").not(".clickitem").each(function (index) {
                                                    var prevHTML = $(this).find("a").html();
                                                    $(this).find("a").html("<img src='" + b[index] + "' style='height: 17px; margin-left: 5px; margin-right: 10px; width: 29px;'/>" + prevHTML);

                                                });
                                                // end - adding flag images to the
                                                // autocomplete list
                                                // start - aligning the refinesearch and top
                                                // image withrespect to image in input field
                                                if ($('.fakeInput img').attr('src') != "") {

                                                    $('#refineSearch').css('margin-left', '40px');

                                                    $('#listItemsDiv').css('margin-left', '40px');
                                                }
                                                else {
                                                    $('#refineSearch').css('margin-left', '8px');

                                                    $('#listItemsDiv').css('margin-left', '8px');
                                                }
                                                // end - aligning the refinesearch and top
                                                // image withrespect to image in input field
                                            }
                                            else {

                                                responseFn(a);
                                            }
                                        }// success -- event
                                    });

                                /*
                                 * End - Updated by Vishal to fetch different country lists
                                 * for Allowance countries & Tariff Countries.
                                 */

                            },
                            focus: function (event, ui) {
                                if (grandparent1.hasClass("countrySet") && grandparent1.hasClass("ukrates")) {
                                    var x = ui.item.label;
                                    var q = x.search(">");
                                    // alert(q);
                                    q++;
                                    var text = "";
                                    while (q < x.length) {
                                        text += x[q];
                                        q++;
                                    }

                                    $(event.target).val(text);

                                }
                                else {
                                    $(event.target).val(ui.item.label);
                                }
                                return false;
                            },
                            select: function (event, ui) {
                                // if rates
                                if (grandparent1.hasClass("countrySet") && grandparent1.hasClass("ukrates")) {
                                    // default image
                                    if ($(".flagInput").hasClass("flagSelectDim2")) {
                                        $(".flagInput").removeClass("flagSelectDim2").addClass("flagSelectDim1");
                                    }
                                    // end default image
                                    $("#flagSelect").attr("src", ui.item.flag);
                                    autComplete = false;
                                    // both
                                    var x = ui.item.label;
                                    var q = x.search(">");
                                    q++;
                                    var text = "";
                                    while (q < x.length) {
                                        text += x[q];
                                        q++;
                                        if (x[q] == "+") {
                                            break;
                                        }
                                    }
                                    if (ui.item.dialCode == "null") {
                                        $(event.target).val(text + " ");
                                    }
                                    else {
                                        $(event.target).val(text + "(ext. +" + ui.item.dialCode + ")");
                                    }
                                    parseRatePlans(ui.item.value, text);
                                    // else
                                }
                                else {
                                    autComplete = false;
                                    $(event.target).val(ui.item.label);
                                }
                                // END -- if rates
                                // for ID Managment by Gaurav , Please consult before
                                // overriding

                                if ($("#countryCode") && $("#countryCode").val() != undefined) {
                                    $("#countryCode").val(ui.item.value);
                                }
                                else {
                                    $(".countryCode").val(ui.item.value);
                                }
                                if ((".simValue #priceCountryGo").length > 0) {
                                    $(".simValue #priceCountryGo").click();
                                }

                                if (document.getElementById("POSTPAY_REFRESH") && inputId == 'countryChoiceMyCountry') {
                                    $('.selectedCountryFlag').attr('src', $('.siteMediaURL').attr('value') + ui.item.flag);
                                }
                                lebara.onCountrySelected(ui.item.value, input)
                                return false;
                            },
                            // if rates

                            close: function (event) {
                                $("#listItemsDiv").css("display", "none");
                                $("#refineSearch").css("display", "none");
                                // $("#refineSearch").css("display","none");
                            },
                            open: function () {

                            }
                            // END -- if rates no else
                        });
                });
                var input1 = $(".countryCallPlanLeft .countrySet .fakeInput input");
                $(input1).bind('blur', function () {
                    if (autComplete) {
                        var SelectedLink = $(".countryCallPlanLeft").find(".countryCode").val();
                        var Input = this;
                        var currentVal = $(Input).val().toLowerCase();
                        var resultFound = false;
                        var externalCountrylistUrl = '/view/ProductListComponentController?allowanceCountries=true&calledFrom=postpayProductForm';
                        $.getJSON(externalCountrylistUrl, function (data) {
                            $.each(data, function (i, item) {
                                if (item.label.toLowerCase() == currentVal) {
                                    $(".countryCode").val(item.value);
                                    $(".input").removeClass("invalidField");
                                    $(".input").removeClass("invalidFieldBg");
                                    if (item.flag != null) {
                                        $('.selectedCountryFlag').attr("src", item.flag);
                                    }
                                    lebara.onCountrySelected(SelectedLink, Input);
                                    resultFound = true;
                                }
                            });
                            if (document.getElementById("temp") != undefined) {
                                document.getElementById("temp").value = 'true';
                            }
                            if (!resultFound) {
                                if (document.getElementById("temp") != undefined) {
                                    document.getElementById("temp").value = 'false';
                                }
                                $(".countryCallPlanLeft .input").removeClass("validField").parent().addClass("invalidField");
                                $(".countryCallPlanLeft .input").removeClass("validFieldBg").addClass("invalidFieldBg");

                                if (($(".countryCallPlanLeft").html()).indexOf("conflictNew.png") > -1) {
                                    if ($(".countryCallPlanLeft .input").hasClass('errorTooltip')) {
                                        $("a.infoError").remove();
                                    }
                                }
                                else {
                                    var alertVal = document.getElementById("errorAlert").value;
                                    $('<a href="#" class="infoError" tabindex="-1"><img src="../../assets/images/icons/conflictNew.png" class="invalidimg" alt="InValid" /><div class="infovalidatorSpainID"><div><span></span><ul>' + alertVal + '</ul></div></div></a>').insertAfter($("#firstdropdown"));
                                }
                                $(".countryCallPlanLeft .input").parent().find("img.validImage").remove();
                                document.getElementById("testId").style.display = "none";
                            }
                            else {
                                $(".countryCallPlanLeft .input").parent().removeClass("invalidFieldBg");
                                if (($(".countryCallPlanLeft .input").parent().html()).indexOf("iconMatched.gif") > -1) {

                                }
                                else {
                                    $(".countryCallPlanLeft .input").parent().parent().removeClass("invalidField");
                                    $("a.infoError").remove();
                                }
                                $(".countryCallPlanLeft .input").parent().find("img.invalidimg").remove();
                            }
                        });
                    }
                    else {
                        autComplete = true;
                    }
                });
            }
        });
        // Give the input the autocomplete function - Search
        $(function () {
            var search = $(".search");
            var input = $(".search .fakeInput input");

            if ((search).length > 0) {

                $.ajax(
                    {
                        url: lebara.vars.paths.searchJson,
                        dataType: "json",
                        data: {
                            maxRows: 12,
                            minLength: 2
                        },
                        success: function (data) {
                            var x = [];
                            var y = [];

                            for (i = 0; i < data.length; i = i + 1) {
                                x.push(data[i]);
                            }

                            lebara.vars.arrays.predictiveDropDown.search = x;
                            $(input).each(function () {
                                var input = this;
                                var inputId = $(this).attr("id")

                                $(input).autocomplete(
                                    {
                                        source: function (req, responseFn) {
                                            var re = $.ui.autocomplete.escapeRegex(req.term);
                                            var matcher = new RegExp("^" + re, "i");
                                            var a = $.grep(lebara.vars.arrays.predictiveDropDown.search, function (item, index) {
                                                return matcher.test(item.label);
                                            });
                                            responseFn(a);
                                        },
                                        focus: function (event, ui) {
                                            $(event.target).val(ui.item.label);
                                            return false;
                                        }
                                    });
                            });
                        }
                    });
            }
        });
        function listSelectorforEuro() {
            $("ul.dropdownList li a").click(function (evt) {
                evt.preventDefault();
                var pickup = $(this).text();
                var countryCode = $(this).attr("title");
                var destinationInput = $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find(".fakeInput input");
                var dropDown = $(this).parents(".dropdownList");
                var countryCodeInput = $(dropDown).siblings(".countryCode");
                var completeGroup = $(this).parents(".eurolinePrdictive");
                // / This code is setting the country code value in the
                // Hidden Variable
                if ((countryCodeInput).length > 0) {
                    countryCodeInput.val(countryCode);
                }

                /* this code is for setting the value in Text */
                destinationInput.val(pickup);
                destinationInput.removeClass("initial");
                destinationInput.addClass("real");
                $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find("a.clearInput").show();
                $(this).parent().parent().hide();
                var Input = destinationInput;

                if ($(completeGroup).length > 0) {
                    if (countryCode != null || countryCode != "") {

                        var srcCountryCode = $('#srcCountryCode').val();
                        var destCountryCode = $('#destCountryCode').val()
                        if (srcCountryCode != null && destCountryCode != null && srcCountryCode != "" && destCountryCode != "") {
                            var _success = lebara.getEuroTariffDetails
                            $.ajax(
                                {
                                    url: lebara.vars.paths.getInternationalTariffDetailsUrl,
                                    data: 'src_isoCode=' + srcCountryCode + '&dest_isoCode=' + destCountryCode,
                                    dataType: 'html',
                                    type: 'GET',
                                    success: _success
                                });
                        }
                    }
                }

            });
        }

        // Clicking on a list item puts it into the input box.
        function listSelector() {

            $("ul.dropdownList li a").click(function (evt) {
                evt.preventDefault();
                var pickup = $(this).text();
                var countryCode = $(this).attr("title");
                if ($(".countryCallPlanLeft ul.dropdownList li a").length > 0) {
                    if ($(this).parents(".countryCallPlanLeft").length > 0) {
                        $(".input").removeClass("invalidField");
                        $(".input").removeClass("invalidFieldBg");
                        $("a.infoError").remove();
                    }
                }
                // Google Analytic Code
                if (document.getElementById("temp") != undefined) {
                    document.getElementById("temp").value = 'true';
                }
                var destinationInput = $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find(".fakeInput input");
                var dropDown = $(this).parents(".dropdownList");

                // This was changed because with class .countryCode we are not able
                // to get the object (for ID Management by gaurav) so made # ,
                // please consult before modifying)
                if ($("#countryCode") && $("#countryCode").val() != undefined) {
                    var countryCodeInput = $(dropDown).siblings("#countryCode");
                }
                else {
                    var countryCodeInput = $(dropDown).siblings(".countryCode");
                }
                // //// Ends here
                var continentCodeInput = $(dropDown).siblings("#continentCode");

                // This code is setting the country code value in the Hidden Variable
                if ((countryCodeInput).length > 0) {
                    countryCodeInput.val(countryCode);
                }
                if ((continentCodeInput).length > 0) {
                    continentCodeInput.val(countryCode);
                }
                // /////////////////////////////////////
                /* this code is for setting the value in Text */

                destinationInput.val(pickup);

                destinationInput.removeClass("initial");
                destinationInput.addClass("real");
                $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find("a.clearInput").show();
                $(this).parent().parent().hide();

                var planSummary = $(this).parents(".planSummaryExpanded");

                if ((planSummary).length > 0 && planSummary.attr('id') == undefined) {
                    $.ajax(
                        {
                            url: lebara.vars.paths.prePayPlansHtml + "?internationalTariff=true&isoCode=" + countryCode + "&productCode=" + $('#productCode').val() + "&tariffType=" + $('#tariffType').val(),
                            dataType: 'html',
                            type: 'GET',
                            success: lebara.loadPrePayRates
                        });
                    return false;
                }
                else if ((planSummary).length > 0 && planSummary.attr('id') == 'planSummaryExpanded1') {

                    $.ajax(
                        {
                            url: lebara.vars.paths.prePayPlansHtml + "?internationalTariff=true&isoCode=" + countryCode + "&productCode=" + $('#productCode').val() + "&tariffType=" + $('#tariffType').val(),
                            dataType: 'html',
                            type: 'GET',
                            success: lebara.loadPrePayRates1
                        });
                    return false;
                }
                else {
                    if (document.getElementById("POSTPAY_REFRESH") && $(dropDown).siblings("#firstdropdown").find("#countryChoiceMyCountry").attr("id") == 'countryChoiceMyCountry') {
                        $('.selectedCountryFlag').attr('src', $('.siteMediaURL').attr('value') + ($(this).siblings("span.selectedCountryflag")).attr('title'));
                    }
                    lebara.onCountrySelected(countryCode, destinationInput);
                }
            });
        }

        // On clicking on the document after down down open, it closes it
        $(document).click(function () {
            $("a.beta").parent().parent().find("ul.dropdownList").attr("style", "display:none;");
            $("#listItemsDiv").css("display", "none");
            $("#refineSearch").css("display", "none");
        });
        // On clicking on the down arrow, the list of items is created - countrySet
        $("a.beta").click(function () {
            var currentStatus = $.trim($(this).parent().parent().find("ul.dropdownList").attr("style") + " ".toLowerCase());
            if ($('.bestDealContent .rhs-content .arrowHighlight').length == 1) {
                $('.bestDealContent .rhs-content .arrowHighlight').hide();
                $('.bestDealContent .rhs-content .lastOption').show();
            }

            if (currentStatus == "display: block;" || currentStatus == "DISPLAY: block") {
                $("#listItemsDiv").css("display", "none");
                $("#refineSearch").css("display", "none");
                $(this).parent().parent().find("ul.dropdownList").attr("style", "display:none;");
            }
            else {
                var grandparent = $(this).closest(lebara.vars.selectors.predictiveDropDown);
                if (grandparent.hasClass("continentSet")) {
                    $.getJSON(externalContinentListUrl, function (data) {
                        var newList = "";
                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];

                            var itemValue = _item.value
                            itemValue = itemValue.replace(/\s/g, "%20");
                            newList += "<li class='ui-menu-item'><a href='#' class='ui-corner-all' title=" + itemValue + ">" + _item.label + "</a></li>";

                        }
                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        listSelector();
                        return false;
                    });
                }
                else if (grandparent.hasClass("interanationalSet")) {
                    $.getJSON(internationalCountrylistUrl, function (data) {
                        var newList = "";
                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];
                            if (_item.value == 'DK') {
                                newList += "<li class='ui-menu-item' style='color:activeborder;'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "</a></li>";
                            }
                            else {
                                newList += "<li class='ui-menu-item'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "</a></li>";
                            }
                        }
                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        listSelectorforEuro();
                        return false;
                    });
                }
                else if (grandparent.hasClass("interanationalDestSet")) {
                    $.getJSON(destCountrylistUrl, function (data) {
                        var newList = "";
                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];
                            if (_item.value == 'DK') {
                                newList += "<li class='ui-menu-item' style='color:activeborder;'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "</a></li>";
                            }
                            else {
                                newList += "<li class='ui-menu-item'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "</a></li>";
                            }
                        }
                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        listSelectorforEuro();
                        return false;
                    });
                }
                else if (grandparent.hasClass("countrySet") && grandparent.hasClass("ukrates")) {

                    //var getCountryListRatesJourneyUrl = 'http://www.lebara.co.uk/view/RatesJourneyPlansDisplayComponentController?method=getCountryListInRatesJourney&tariffType=DEFAULT'

                    $.getJSON(getCountryListInRatesJourneyUrl, function (data) {
                        var newList = "";

                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];
                            if (_item.dialCode == "null") {
                                newList += "<li class='ui-menu-item clickitem'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "&nbsp;" + "<img id='clickitemimg' src= " + _item.flag + " /></a></li>";
                            }
                            else {
                                newList += "<li class='ui-menu-item clickitem'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "&nbsp;+" + _item.dialCode + "<img id='clickitemimg' src= " + _item.flag + " /></a></li>";
                            }

                        }

                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        $("#listItemsDiv").css("display", "block");
                        if ($(".dropdownListPosition").css("top") != "492px") {
                            $(".dropdownListPosition").css("margin-top", "29px");
                            $(".dropdownListPosition").css("margin-left", "7px");
                        }
                        countrySelector();
                        return false;
                    });
                }
                else if (grandparent.hasClass("countrySet")) {
                    $.getJSON(externalCountrylistUrl, function (data) {
                        var newList = "";

                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];
                            newList += "<li class='ui-menu-item'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "</a><span class='selectedCountryflag' title= " + _item.flag + "></span></li>";

                        }
                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        listSelector();
                        return false;
                    });
                }
                /*
                 * Added to get Countries drop down for ITU Page on click of Drop
                 * down icon
                 */
                else if (grandparent.hasClass("ituCountrySet")) {
                    $.getJSON(externalCountrylistUrl, function (data) {
                        var newList = "";

                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];
                            newList += "<li class='ui-menu-item'><a href='#' class='ui-corner-all' title=" + _item.value + "-" + _item.dialingCode + "><img src='" + siteMediaUrl + _item.flag + "'/>" + _item.label + "</a><span class='selectedCountryflag' title= " + _item.flag + "></span></li>";
                        }
                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        lebara.listSelectorForLF();
                        return false;
                    });
                }
                else {
                    $.getJSON(lebara.vars.paths.townListJson, function (data) {
                        var newList = "";
                        for (var i = 0, jLen = data.length; i < jLen; i++) {
                            var _item = data[i];
                            newList += "<li class='ui-menu-item'><a href='#' class='ui-corner-all' title=" + _item.value + ">" + _item.label + "</a></li>";
                        }
                        $(grandparent).find("ul.dropdownList").html(newList);
                        $(grandparent).find("ul.dropdownList").show();
                        listSelector();
                        return false;
                    });
                }
            }
            return false;
        });
        // On clearing text in input, re-instate initial text and colour
        $("a.clearInput").click(function () {
            var currentInput = $(this).parent().find("input");
            var srcdestCountryCode = $(this).parent().parent().siblings("input");
            /*
             * Added By Gaurav Reason because once you are clearing the predictive
             * dropdown it is not clearing the hidden variable value ( for ID
             * management)
             */

            if ($("#countryCode") && $("#countryCode").val() != undefined) {
                $("#countryCode").val('');
            }
            else if ($(srcdestCountryCode).attr("id") == "srcCountryCode") {
                $("#srcCountryCode").val('');

                $(lebara.vars.selectors.euroTariffPanel).find(".euroPrepayRateTables").remove();

            }
            else if ($(srcdestCountryCode).attr("id") == "destCountryCode") {
                $("#destCountryCode").val('');
                $(lebara.vars.selectors.euroTariffPanel).find(".euroPrepayRateTables").remove();
            }
            else if ($("#countryCodeSection1") && $("#countryCodeSection1").val() != undefined) {

                $("#countryCodeSection1").val('');
            }
            else if ($("#countryCodeSection2") && $("#countryCodeSection2").val() != undefined) {

                $("#countryCodeSection2").val('');
            }
            // /////////Ends Here///////
            var pickup = currentInput.attr("alt");
            currentInput.val(pickup);
            $(this).hide();
            currentInput.addClass("initial");
            currentInput.removeClass("real");
            return false;
        });
        // On focus on the input, remove initial text and colour
        $(".fakeInput input").focus(function () {
            $("ul.dropdownList").hide();
            if ($(this).val() == $(this).attr("alt")) {
                $(this).val("");
            }
            $(this).removeClass("initial");
            $(this).addClass("real");
            $(this).parent().find("a.clearInput").show();
        });
        // Once a key has been typed into the input box, the 'X to clear' appears
        $('.fakeInput input').keyup(function () {
            $(this).parent().find("a.clearInput").show();
            var userInput = $(this).val();

        });
    },
    shopRateRevealer: function () {

        if ($(".simValue").length > 0) {

            $(lebara.vars.selectors.priceChoice).change(function () {

                if ($(lebara.vars.selectors.priceChoice).val() != -1) {
                    if ($(".countryCode").val()) {
                        $(".ratesPanel,.outputPanel").show();
                        $('.whatDoIGetPanels').css('margin-top', '15px');

                    }
                }
                $(".priceChoiceValue").text($(lebara.vars.selectors.priceChoice).val());
            });

            $(lebara.vars.selectors.priceCountryGo).click(function () {

                if ($(lebara.vars.selectors.priceChoice).val() != -1) {

                    if ($(".countryCode").val()) {
                        $(".ratesPanel,.outputPanel").show();
                        $('.whatDoIGetPanels').css('margin-top', '15px');

                    }
                }
                return false;
            });
        }
    },
    countryChecker: function (whichPredictiveDropDown) {
        i = 0;
        var selectedPredictiveDropDown;
        if (whichPredictiveDropDown) {
            selectedPredictiveDropDown = whichPredictiveDropDown;
        }
        else {
            selectedPredictiveDropDown = $(lebara.vars.selectors.countryChoice);
        }
        for (i = 0; i < (lebara.vars.arrays.predictiveDropDown.countryList).length; i++) {
            if ((lebara.vars.arrays.predictiveDropDown.countryList[i].toLowerCase()) == selectedPredictiveDropDown.val().toLowerCase()) {
                i = (lebara.vars.arrays.predictiveDropDown.countryList).length + 1;
                return true;
            }
        }
        return false;
    },
    FormValidation: function (formId) {

        $(formId).each(function () {
            var _formId = this.id

            var _formspecific = (lebara.vars.strings.validation[_formId]);

            for (var i = 0, forms = $(_formspecific).length; i < forms; i++) {
                /* STYLING FOR SERVERSIDE VALIDATION */

                $(formId).find((".input .text, .input textarea, .input checkbox, .label .radio, .label1 .radio")).each(function () {

                    var _fieldId = (this).id;
                    var _fieldspecific = _formspecific[_fieldId]

                    /* Added for MGM dynamic fields validation */
                    if (formId == '#mgmForm' && (_fieldId.indexOf('refereeFirstName') >= 0 || _fieldId.indexOf('refereeLastName') >= 0 || _fieldId.indexOf('refereeEmail') >= 0 )) {
                        _fieldspecific = _formspecific[_fieldId.split('_')[0]];
                    }
                    if (formId == '#storeLocatorAdminForm' && (_fieldId.indexOf('validatestoreRetailerName') >= 0 || _fieldId.indexOf('validatestoreName') >= 0 || _fieldId.indexOf('validateaddressLine') >= 0 || _fieldId.indexOf('validatelocationType') >= 0 || _fieldId.indexOf('validateformattedEventStartDate') >= 0 || _fieldId.indexOf('validateformattedEventEndDate') >= 0 || _fieldId.indexOf('validateemail') >= 0)) {
                        _fieldspecific = _formspecific[_fieldId.split('_')[0]];
                    }

                    /* End */
                    if (_fieldspecific) {
                        var _required = _fieldspecific["Required"]
                        var _format = _fieldspecific["Format"]
                        var _minlength = _fieldspecific["MinLength"]
                        var _maxlength = _fieldspecific["MaxLength"]
                        var _comparison = _fieldspecific["Comparison"]
                        var _selectedField = ($(this).parents(".field:not(.dob)"));
                        /*
                         * added by sucheta for configuration based validation for
                         * findaddress
                         */
                        if (_fieldId == "area" && ($('#areaFlag').val() == "false")) {
                            _required = false;
                        }
                        if (_fieldId == "address1" && ($('#houseNumFlag').val() == "false")) {
                            _required = false;
                        }
                        if (_fieldId == "pCodeFind" && ($('#postCodeFlag').val() == "false")) {
                            _required = false;
                        }
                        if (_fieldId == "retailerID" && ($('#validateRetailerID').val() == "false")) {
                            _required = false;
                        }
                        if (_fieldId == "middleName" && ($('#middleName').val() == "false")) {
                            _required = false;
                        }

                        $(_selectedField).each(function () {

                            var validator = $(this).find(".ssValidator");
                            if ((validator).length > 0) {
                                var _input = $(this).find(".input .text, .input textarea, .input checkbox, .label .radio, .label1 .radio");
                                var _text = $(validator).html();

                                $(validator).hide();

                                Invalid(_input, this, _text, "serverSide");
                            }

                        });

                        $("#" + _fieldId).bind("blur", function () {
                            if ((_maxlength) && ($(_required).length == 0)) {
                                if ($(this).val()) {

                                    var _type = "maxlength";
                                    var _length = _maxlength["Length"];

                                    // if minlength test
                                    if (this.value.length > _length) {

                                        Invalid(this, _selectedField, _maxlength, _type);
                                    }
                                    else {

                                        Valid(this, _selectedField);
                                    }

                                }

                            }
                            if ((_minlength) && ($(_required).length == 0)) {
                                if ($(this).val()) {

                                    if (_minlength) {

                                        var _type = "minlength";
                                        var _length = _minlength["Length"];
                                        // if minlength test
                                        if ((this.value.length) < _length) {

                                            Invalid(this, _selectedField, _minlength, _type);
                                        }
                                        else {

                                            Valid(this, _selectedField);
                                        }
                                    }

                                }

                            }
                            if ((_format) && ($(_required).length == 0)) {
                                if ($(this).val()) {
                                    if (_format["Regex"] === "alpha") {

                                        var _regex = new RegExp(/^[a-z]*$/i);
                                    }

                                    if (_format["Regex"] === "postcode") {

                                        var _regex = new RegExp(/^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/);
                                    }
                                    else {
                                        var _regex = new RegExp(_format["Regex"]);
                                    }

                                    var _type = "format"
                                    if (this.value != this.alt && _regex.test($(this).val()))
                                    // if format Test
                                    {

                                        Valid(this, _selectedField);
                                    }
                                    else {
                                        Invalid(this, _selectedField, _format, _type);

                                    }
                                }
                            }
                            if (_required) {
                                var _type = "required"

                                if ($(this).val() && this.value != this.alt) {

                                    var dob = $(_selectedField).parents(".dob");
                                    if ($(dob).length <= 0) {
                                        if ((this.value) == 'select' || (this.value) == 'SELECT' || (this.value) == 'Select') {
                                            Invalid(this, _selectedField, _required, _type);
                                            return;
                                        }
                                        else {

                                            Valid(this, _selectedField);
                                        }
                                    }

                                    // if required Test

                                    // If minlength
                                    if (_minlength) {

                                        var _type = "minlength";
                                        var _length = _minlength["Length"];

                                        // if minlength test
                                        if ((this.value.length) < _length) {

                                            Invalid(this, _selectedField, _minlength, _type);
                                            return;
                                        }
                                        else {

                                            Valid(this, _selectedField);
                                        }
                                    }

                                    // If minlength End
                                    // If maxlength
                                    if (_maxlength) {

                                        var _type = "maxlength";
                                        var _length = _maxlength["Length"];

                                        // if minlength test
                                        if (this.value.length > _length) {
                                            Invalid(this, _selectedField, _maxlength, _type);
                                            return;
                                        }
                                        else {

                                            Valid(this, _selectedField);
                                        }
                                    }

                                    // If maxlength End

                                    if (_format) {
                                        if (_format["Regex"] === "alpha") {

                                            var _regex = new RegExp(/^[a-z]*$/i);
                                        }

                                        if (_format["Regex"] === "postcode") {

                                            var _regex = new RegExp(/^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/);
                                        }
                                        else {
                                            var _regex = new RegExp(_format["Regex"]);
                                        }
                                        var _type = "format"
                                        if (this.value != this.alt && _regex.test($(this).val())) {

                                            Valid(this, _selectedField);
                                        }
                                        else {
                                            Invalid(this, _selectedField, _format, _type);
                                            return;

                                        }
                                    }
                                    else {
                                        var dob = $(_selectedField).parents(".dob");
                                        var dob_input = $(_selectedField).parents(".dob > .input");

                                        if ($(dob).length > 0) {
                                            var monthVal = dob.find("#month").val()
                                            var dayVal = dob.find("#day").val()
                                            var yearVal = dob.find("#year").val()
                                            if (monthVal && dayVal && yearVal) {
                                                // If required dob
                                                if (validateDate(monthVal, dayVal, yearVal)) {
                                                    Valid(dob_input, dob);
                                                }
                                                else {
                                                    Invalid(dob_input, dob);
                                                }
                                            }

                                        }
                                        else {
                                            Valid(this, _selectedField);
                                        }
                                    }

                                    if (_comparison) {

                                        var _type = "comparison";
                                        var _valueToCompare = ($("#" + _comparison["FieldToCompare"]).val())
                                        var _value = $(this).val();

                                        if ((_valueToCompare) === (_value)) {
                                            Valid(this, _selectedField);
                                        }
                                        else {

                                            Invalid(this, _selectedField, _comparison, _type);
                                            return;
                                        }

                                    }
                                    // if required Test end
                                }
                                else {

                                    var dob = $(_selectedField).parents(".dob");
                                    var dob_input = $(_selectedField).parents(".dob > .input");

                                    if ($(dob).length > 0) {
                                        Invalid(dob_input, dob, _required, _type);

                                    }
                                    else {
                                        Invalid(this, _selectedField, _required, _type);
                                        return;
                                    }

                                }

                            }

                        });
                    }

                });
            }
            /* Written to hightlight all the Dob fields together */
            $(".dob  .field").each(function (i) {
                if ($(this).hasClass('invalidField')) {
                    $(this).removeClass('invalidField');
                    $(".dob").addClass('invalidField');
                    $(".dob .errorTooltip").css('padding-left', '10px');
                }
            });
        });
        /* Method to valide date field including leap year */
        function validateDate(monthVal, dayVal, yearVal) {
            var monthVal = +monthVal - 1;
            // Convert to numbers with "+"
            // prefix
            var date = new Date(yearVal, monthVal, dayVal);
            // Use the prober
            // constructor
            return date.getFullYear() == yearVal && date.getMonth() == monthVal && date.getDate() == dayVal;
        }

        function Valid(input, _selectedField) {

            var _validator = $(input).siblings(lebara.vars.selectors.validator);
            var _validImage = lebara.vars.paths.validImage;

            // Valid - add valid class to field and add image - build
            // function
            $(_selectedField).addClass("validField");
            $(_selectedField).removeClass("invalidField");
            if ($(_selectedField.find(lebara.vars.selectors.validImage)).length > 0) {
                // If valid image

            }
            else {
                $("<img src='" + _validImage + "' class='validImage' alt='Valid' />").insertAfter(input);
            }
            if ($('.validField').length > 0) {
                $(".primaryButtonDisabled").removeAttr("disabled");
                $('div.validField div.input select').addClass("validFieldBg");
                $('div.validField div.input input[type="text"]').addClass("validFieldBg");
                $('div.validField div.input input[type="password"]').addClass("validFieldBg");
                $('div.validField div.input textarea').addClass("validFieldBg");
                $('div.validField div.input[type="checkbox"]').addClass("validFieldBg");
                $('div.validField checkbox').addClass("validFieldBg");
                $('div.validField').parent().parent().removeClass("invalidField");
                $('div.validField div.input').removeClass("invalidFieldBg");
                if (!$("#messageText").hasClass("validFieldBg")) {
                    $(".primaryButtonDisabled").attr("disabled", "true");
                }
            }

            $((_selectedField).find(".errorTooltip")).remove();
        }

        function Invalid(input, _selectedField, validationMessage, type) {
            var normalExclaimPic = lebara.vars.paths.conflictImageNew;
            var _selectedFieldRequired = $(input).siblings("." + type);
            // Invalid - add validator with validation message - build
            // function
            $(_selectedField).find(lebara.vars.selectors.validImage).remove();
            if ((_selectedFieldRequired).length > 0) {
            }
            else {

                $(_selectedField).find(".errorTooltip").remove();
                $(_selectedField).addClass("invalidField");
                if ($('.invalidField').length > 0) {
                    $('div.validField div.input select').removeClass("validFieldBg");
                    $('div.validField div.input textarea').removeClass("validFieldBg");
                    $('div.validField div.input[type="checkbox"]').removeClass("validFieldBg");
                    $('div.invalidField div.input').addClass("invalidFieldBg");
                    $('div.invalidField div.input').parent().removeClass("validField");
                    if (!$("#messageText").hasClass("validFieldBg")) {
                        $(".primaryButtonDisabled").attr("disabled", "true");
                    }
                }
                $("<a href='#' class='errorTooltip " + type + "' title='Error' tabindex='-1'><img src='" + normalExclaimPic + "' alt='error' /></a>").insertAfter(input);

                var Etooltip = $(_selectedField).find(".errorTooltip");
                $(Etooltip).each(function () {
                    $(this).bind("mouseover", function () {
                        showTooltip(this);
                    });
                    $(this).bind("click", function () {
                        showTooltip(this);
                        return false;
                    });
                    $(this).bind("mouseout", function () {
                        $(lebara.vars.selectors.validator).remove();
                    });
                    function showTooltip(errorToolTipTrigger) {
                        if (validationMessage["ValidationMessage"]) {
                            var msg = validationMessage["ValidationMessage"];
                        }
                        else {
                            var msg = validationMessage;
                        }
                        var _html = "<div class='validator'><div><span></span><ul>" + msg + "</ul></div></div>";
                        var _Pos = $(errorToolTipTrigger).offset();
                        if ($(errorToolTipTrigger).parent().hasClass('dob')) {
                            _Pos.left = _Pos.left - 10;
                            _Pos.top = _Pos.top + 5;
                        }
                        var _width = ($(errorToolTipTrigger).width())

                        // Condition for RTL specific to change
                        // direction for validator tip starts here
                        if ($("html").attr("dir") == "rtl") {
                            $(_html).appendTo($(errorToolTipTrigger).parents("div.field").children("div.input"));
                        }
                        else {
                            $(lebara.vars.selectors.content).append(_html);
                            $(lebara.vars.selectors.overlay).append(_html);
                        }
                        // Condition for RTL specific to change
                        // direction for validator tip starts here

                        $(lebara.vars.selectors.validator).css(
                            {
                                "display": "none"
                            });
                        $(lebara.vars.selectors.validator + " ul li:last-child").css(
                            {
                                "padding-bottom": "0px"
                            });

                        // Condition for RTL specific to change
                        // direction for validator tip starts here
                        if ($("html").attr("dir") == "rtl") {
                            var topPosition = "-" + parseInt($(lebara.vars.selectors.validator).height() / 3) + "px";
                            if ($.browser.msie && $.browser.version == "7.0" && $(errorToolTipTrigger).parent().hasClass('dob')) {
                                var rightPosition = parseInt($(errorToolTipTrigger).parents("div.field").children("div.input").width() + 160) + "px";
                            }
                            else if ($.browser.msie && $.browser.version == "7.0" && $(errorToolTipTrigger).parents().hasClass('address')) {
                                var rightPosition = parseInt($(errorToolTipTrigger).parents("div.field").children("div.input").width() - 160) + "px";
                            }
                            else {
                                var rightPosition = parseInt($(errorToolTipTrigger).parents("div.field").children("div.input").width() + 10) + "px";
                            }
                            $(lebara.vars.selectors.validator).css(
                                {
                                    "right": rightPosition,
                                    "top": topPosition
                                });
                        }
                        else {
                            $(lebara.vars.selectors.validator).css(
                                {
                                    "left": ((parseInt(_Pos.left)) + _width + 20) + "px",
                                    "top": (parseInt(_Pos.top - 17) + "px")
                                });
                        }
                        // Condition for RTL specific to change
                        // direction for validator tip starts here

                        $(lebara.vars.selectors.validator).show();
                    }

                });
            }
        }

    },
    HelpTooltips: function () {

        $(lebara.vars.selectors.helpLink).each(function () {
            $(this).bind("mouseover", function () {
                showTooltip(this);
                // Condition for RTL specific to change direction for
                // toolTip tip starts here
                if ($("html").attr("dir") == "rtl") {
                    $(this).parents("div.field").children("div.input").attr("style", "position:relative");
                }
                // Condition for RTL specific to change direction for
                // toolTip tip starts here
            });
            $(this).bind("click", function () {
                showTooltip(this);
                return false;
            });
            $(this).bind("mouseout", function () {
                $(lebara.vars.selectors.toolTip).remove();
                // Condition for RTL specific to change direction for toolTip
                // tip starts here
                if ($("html").attr("dir") == "rtl") {
                    $(this).parents("div.field").children("div.input").removeAttr("style");
                }
                // Condition for RTL specific to change direction for toolTip
                // tip starts here
            });
            function showTooltip(helpLink) {

                var _selectedHelp = new String($(helpLink).attr("href"));
                var _help = $('.help ' + _selectedHelp).siblings('p');
                if ((_help).length > 0) {
                    var _Pos = $(helpLink).offset();
                    var _html = "<div class='toolTip'><div><span></span>" + _help.html() + "</div></div>";
                    var _width = ($(helpLink).width())

                    // Condition for RTL specific to change direction for
                    // toolTip tip starts here
                    if ($("html").attr("dir") == "rtl") {
                        $(_html).appendTo($(helpLink).parents("div.field").children("div.input"));
                    }
                    else {
                        $(_help.html()).appendTo(_html);

                    }
                    // Condition for RTL specific to change direction for
                    // toolTip tip starts here

                    $(lebara.vars.selectors.content).append(_html);
                    $(lebara.vars.selectors.toolTip).css(
                        {
                            "display": "none"
                        });
                    // Condition for RTL specific to change direction for
                    // toolTip tip starts here
                    if ($("html").attr("dir") == "rtl") {
                        var topPosition = "-" + parseInt($(lebara.vars.selectors.toolTip).height() / 3) + "px";
                        if ($.browser.msie && $.browser.version == "7.0" && $(helpLink).parent().hasClass('dob')) {
                            var rightPosition = parseInt($(helpLink).parents("div.field").children("div.input").width() + 160) + "px";
                        }
                        else if ($.browser.msie && $.browser.version == "7.0" && $(helpLink).parents().hasClass('address')) {
                            var rightPosition = parseInt($(helpLink).parents("div.field").children("div.input").width() - 160) + "px";
                        }
                        else {
                            var rightPosition = parseInt($(helpLink).parents("div.field").children("div.input").width() + 10) + "px";
                        }
                        $(lebara.vars.selectors.toolTip).css(
                            {
                                "right": rightPosition,
                                "top": topPosition
                            });
                    }
                    else {
                        $(lebara.vars.selectors.toolTip).css(
                            {
                                "left": ((parseInt(_Pos.left)) + _width + 10) + "px",
                                "top": (parseInt(_Pos.top - 17) + "px")
                            });
                    }
                    // Condition for RTL specific to change direction for
                    // toolTip tip starts here
                    $(lebara.vars.selectors.toolTip).show();
                }
            }

        });
    },
    removeTextAreaValue: function () {

        $("textarea").focus(function () {

            if (this.value == this.defaultValue) {
                this.value = "";
            }
        });
    },
    removeTextAreaForReview: function (selector) {

        $(selector).each(function () {

            if (($(this).val() == null || $(this).val() == '') || ($(this).val() == defaultMessage)) {

                $(this).val($(this).attr("title"));
                if ($.trim($(this).val()) == "")
                    $(this).val($(this).attr("title"));
                $(this).focus(function () {
                    if ($(this).val() == $(this).attr("title"))
                        $(this).val("");
                }).blur(function () {
                        if ($.trim($(this).val()) == "")
                            $(this).val($(this).attr("title"));
                    });
            }
        });
        $("form").submit(function () {
            $(selector).each(function () {
                if ($(this).val() == this.title) {
                    $(this).val("");
                }
            });
        });
    },
    removeTextBoxValue: function (selector) {

        $(selector).each(function () {
            $(this).val($(this).attr("title"));
            if ($.trim($(this).val()) == "")
                $(this).val($(this).attr("title"));
            $(this).focus(function () {
                if ($(this).val() == $(this).attr("title"))
                    $(this).val("");
            }).blur(function () {
                    if ($.trim($(this).val()) == "")
                        $(this).val($(this).attr("title"));
                });
        });
        $("form").submit(function () {
            $(selector).each(function () {
                if ($(this).val() == this.title) {
                    $(this).val("");
                }
            });
        });
    },
    createTabsShop: function () {
        // Init jQuery UI Tabs
        $('#tabsShop').tabs();
    },
    createTabsHome: function () {
        // Init jQuery UI Tabs
        $('#tabsHome').tabs();

        // Add some CSS to switch from NONJS to JS Tabs
        $('#tabsHome #tabs-2 .tabSectionNoJS').css('display', 'none');

        // Set up the page style for the JS PrePay / Monthly Switcher
        $('#tabsHome #tabs-2 #lblradioPostPay').addClass('off');
        $('#tabsHome #tabs-2 #radioPrePaySwitch').addClass('left');
        $('#tabsHome #tabs-2 #radioPrePay').attr('checked', 'checked');
        // Force
        // select
        // the
        // first
        // radio
        // value

        // button Switcher
        $('#tabsHome #tabs-2 #lblradioPostPay').click(function () {
            $('#tabsHome #tabs-2 #lblradioPostPay').removeClass('off');
            $('#tabsHome #tabs-2 #lblradioPrePay').addClass('off');
            $('#tabsHome #radioPrePaySwitch').removeClass('left');
            $('#tabsHome #radioPrePaySwitch').addClass('right');
        });

        $('#tabsHome #tabs-2 #lblradioPrePay').click(function () {
            $('#tabsHome #tabs-2 #lblradioPostPay').addClass('off');
            $('#tabsHome #tabs-2 #lblradioPrePay').removeClass('off');
            $('#tabsHome #radioPrePaySwitch').addClass('left');
            $('#tabsHome #radioPrePaySwitch').removeClass('right');
        });
    },
    homePanels: function (speed) {
        // Set the opacity of all panels to 0
        var elem = $('#homePanels li');
        elem.fadeOut(0);
        // .css('opacity', 0);
        // Get the first panel and display it (set it to full opacity)
        $('#homePanels li:first').fadeIn(0);
        // .css({opacity: 1.0});
        // Call the gallery function to run the slideshow
        var timer = setInterval('lebara.homePanelsStartStop()', speed);

        var liCounter = $('#homeSlider #homeSliderInner li').length;

        $('#homeSlider #homeSliderInner .stepNav ol').addClass('split' + liCounter);
        // pause the slideshow on click
        $('#homeSlider li').click(function () {
            // stop rotate
            clearInterval(timer);
            // What item was clicked / remove the first 2 chars / convert to
            // lower
            var whoAmI = $(this).attr("id").substr(2).toLowerCase();

            $('#homeSlider li').removeClass('active');
            $(this).addClass('active');

            // Switch BG images based on panel number and add the . class to the
            // front of it
            var pageBG = "." + whoAmI;
            // Get the path based on the above class
            var PageBGURL = $('#imgPreLoader').find(pageBG).attr('src');
            // Create the string for the URL for the image
            PageBGURL = 'url("' + PageBGURL + '")';
            // Add the string to the background-image
            $('#content').css('background-image', PageBGURL);

            $('#homePanels li').fadeOut(0).removeClass('show').stop();
            $("#homePanels #" + whoAmI).fadeIn(0).addClass('show');
        });
    },
    homePanelsStartStop: function () {
        // if no li's have the show class, grab the first one
        var current = ($('#homePanels li.show') ? $('#homePanels li.show') : $('#homePanels li:first'));
        var currentSlider = ($('#homeSlider li.active') ? $('#homeSlider li.active') : $('#homeSlider li:first'));
        // Get next li, if it reached the end of the slideshow, rotate it back
        // to the first li
        var next = ((current.next().length) ? (current.next()) : $('#homePanels li:first'));
        var nextSlider = ((currentSlider.next().length) ? (currentSlider.next()) : $('#homeSlider li:first'));

        // Set the fade in effect for the next li, show class has higher z-index
        $('#homePanels li.show').fadeOut(1000, function () {
            $(this).removeClass('show');
            next.fadeIn(1000).addClass('show');
            ;
        });
        // Change css on HomeSLider
        currentSlider.removeClass('active');
        nextSlider.addClass('active');

        // Switch BG images based on panel number and add the . class to the
        // front of it
        var pageBG = "." + next.attr("id");
        // Get the path based on the above class
        var PageBGURL = $('#imgPreLoader').find(pageBG).attr('src');
        // Create the string for the URL for the image
        PageBGURL = 'url("' + PageBGURL + '")';
        // Add the string to the background-image
        $('#content').css('background-image', PageBGURL);

    },
    shopPanels: function (speed) {
        // Set the opacity of all panels to 0.3
        $('#shopPanels li').css(
            {
                opacity: 0.3
            });
        // Get the first panel and display it (set it to full opacity)
        $('#shopPanels li:first').css(
            {
                opacity: 1.0
            });
        // Call the gallery function to run the slideshow
        var timer = setInterval('lebara.shopPanelsStartStop()', speed);

        // pause the slideshow on mouse over
        $('#shopPanels li').hover(function () {
            // stop rotate
            clearInterval(timer);
            // remove opacity from all panels
            $('#shopPanels li').stop().animate(
                {
                    opacity: 0.3
                }, 1000).removeClass('show');
            // add opacity to hover
            $(this).css(
                {
                    opacity: 0.3
                }).addClass('show').stop().animate(
                {
                    opacity: 1.0
                }, 1000);

            // Switch BG images based on panel number and add the . class to the
            // front of it
            var pageBG = "." + $(this).attr("id");
            // Get the path based on the above class
            var PageBGURL = $('#imgPreLoader').find(pageBG).attr('src');
            // Create the string for the URL for the image
            PageBGURL = 'url("' + PageBGURL + '")';
            // Add the string to the background-image
            $('#content').css('background-image', PageBGURL);
        }, function () {
            timer = setInterval('lebara.shopPanelsStartStop()', speed);
        });
    },
    shopPanelsStartStop: function () {
        // if no li's have the show class, grab the first one
        var current = ($('#shopPanels li.show') ? $('#shopPanels li.show') : $('#shopPanels li:first'));
        // Get next li, if it reached the end of the slideshow, rotate it back
        // to the first li
        var next = ((current.next().length) ? (current.next()) : $('#shopPanels li:first'));
        // Set the fade in effect for the next li, show class has higher z-index
        next.css(
            {
                opacity: 0.3
            }).addClass('show').animate(
            {
                opacity: 1.0
            }, 1000);
        // Hide the current image
        current.animate(
            {
                opacity: 0.3
            }, 1000).removeClass('show');

        // Switch BG images based on panel number and add the . class to the
        // front of it
        var pageBG = "." + next.attr("id");
        // Get the path based on the above class
        var PageBGURL = $('#imgPreLoader').find(pageBG).attr('src');
        // Create the string for the URL for the image
        PageBGURL = 'url("' + PageBGURL + '")';
        // Add the string to the background-image
        $('#content').css('background-image', PageBGURL);
    },
    CheckSubmitStatus: function () {
        $("#personalInformation").submit(function () {
            $("#freeSimRequest").attr('disabled', 'disabled');
            $("#freeSimRequest").addClass("disabledPrimaryBut");
            return true;
        });
    },
    onCountrySelectedForLF: function (countryCode, countryName, dialingCode, Input) {
        $("#countryCode").val(countryCode);
        $("#dialingCode").val(dialingCode);
        if ($('#ituHomePage') != undefined && $('#ituHomePage').val()) {
            lebara.getOperators(countryCode, countryName);
            $(".disabled").css("top", "119px", "height", "393px");
        }
        $("#dialingCode").val(dialingCode);

    },
    getOperators: function (countryCode, countryName) {
        var _url = "/view/InternationalTopupComponentController?method=loadOperators&countryCode=" + countryCode;
        var _success = lebara.doSuccess;

        $.ajax(
            {
                url: _url,
                dataType: 'html',
                type: 'GET',
                success: function (html) {
                    $("#targetCountryMSISDN").removeClass("validFieldBg");
                    $("#dialingCode").removeClass("validFieldBg");

                    $("#targetCountryMSISDN").val('');
                    $(".offerSelectionPanelTop").hide();
                    $(".noituProducts").hide();
                    $('#messageText').val('');
                    $('.messageTextMain').parents().removeClass('invalidField');
                    $('.messageTextMain').removeClass('invalidFieldBg');
                    $('.messageTextMain .errorTooltip').remove();
                    $('#messageText').removeClass('validFieldBg');
                    $(".messageTextMain .validImage").remove();
                    $(".recDetailsValid .validImage").remove();
                    $(".ituOperatorsList").replaceWith(html);
                    $(".operatorCountrylabel").text(countryName);
                    if ($("#messageText").val('')) {
                        $("#messageText").attr("disabled", "true");
                    }
                    $("#targetCountryMSISDN").focus();

                }
            });

    },
    fetchProducts: function (countryCode, targetCountryMSISDN, dialingCode) {
        var _url = "/view/InternationalTopupComponentController?method=fetchProducts&countryCode=" + countryCode + "&msisdn=" + targetCountryMSISDN + "&dialingCode=" + dialingCode;

        $.ajax(
            {
                url: _url,
                dataType: 'html',
                type: 'GET',
                success: function (html) {
                    $(".ituProductInfoList").replaceWith(html);
                    if ((targetCountryMSISDN).length > 0 && $("#productAmount").val() && $("#productAmount").val() != undefined) {

                        $('#messageText').val('');
                        $("#messageText").attr("disabled", "true");
                        $('.messageTextMain').parents().removeClass('invalidField');
                        $('.messageTextMain').removeClass('invalidFieldBg');
                        $('.messageTextMain .errorTooltip').remove();
                        $(".disabled").css("display", "none");
                    }
                    else {
                        $(".disabled").css("display", "block");
                        $(".offerSelectionPanelTop").css("display", "none");
                    }

                }
            });
    },
    listSelectorForLF: function listSelectorForLF() {
        $("#fakeTopInput a.clearInput").click(function () {
            $("#selectedCntryImage").attr("src", "");
            $("#selectedCntryImage").hide();
        });

        $("ul.dropdownList li a").click(function (evt) {
            evt.preventDefault();
            var pickup = $(this).text();
            var title = $(this).attr("title");
            var array = title.split("-");
            var countryCode = array[0];
            var dialingCode = array[1];
            var selectedImage = $(this).next("span").attr("title");
            var destinationInput = $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find(".fakeInput input");
            var dropDown = $(this).parents(".dropdownList");

            destinationInput.val(pickup);
            destinationInput.removeClass("initial");
            destinationInput.addClass("real");
            $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find("a.clearInput").show();
            $(this).parent().parent().hide();
            lebara.onCountrySelectedForLF(countryCode, pickup, dialingCode, destinationInput);
            $("#selectedCntryImage").attr("src", selectedImage);
            $("#selectedCntryImage").show();
        });
    }
}
var lebaraFixes =
{
    homePageTabPanel: function () {
        $("#li-tab-2").addClass("showBorder2");
        $("#tabs-holder li#li-tab-1 a").click(function () {
            $("#tabs-holder li").removeClass("showBorder2");
            $("#li-tab-2").addClass("showBorder2");
        });
        $("#tabs-holder li#li-tab-3 a").click(function () {
            $("#tabs-holder li").removeClass("showBorder2");
            $("#li-tab-1").addClass("showBorder2");
        });
        $("#tabs-holder li#li-tab-2 a").click(function () {
            $("#tabs-holder li").removeClass("showBorder2");
        });
    }
}
// reCAPTCHA variables
var RecaptchaOptions =
{
    theme: 'custom',
    custom_theme_widget: 'recaptcha_widget'
};
// RTL function starts here
var rtlLanguage =
{
    // Scripts for image gallery on corporate home page starts here
    languageSwitch: function () {
        $(".deliveryAddress dt").each(function () {
            if ($.trim($(this).text()) == "Address") {
                var currentHeightDT = $(this).next("dd").height();
                $(this).height(currentHeightDT);
            }
        });
    }
}

// RTL function ends here

// mewly added
$(document).ready(function () {
    $('.default-value').each(function () {
        var default_value = this.value;
        $(this).css('color', '#666');
        $(this).focus(function () {
            if (this.value == default_value) {
                this.value = '';
                $(this).css('color', '#666');
            }
        });
        $(this).blur(function () {
            if (this.value == '') {
                $(this).css('color', '#dd0000');
                this.value = default_value;
            }
        });
    });
    /* MGM start */

    if ($('.imgInviteValue').attr('title') > 0) {
        if (lebara.vars.selectors.mgmRefereeListView == 'expanded') {
            $(".tableBasic").before("<span class='alignRight'><a class='secButton' title='see more' id='toggle_link'>" + lebara.vars.strings.en.hideText + "</a></span>");
        }
        else {
            $(".tableBasic").before("<span class='alignRight'><a class='secButton' title='see more' id='toggle_link'>" + lebara.vars.strings.en.showText + "</a></span>");
        }
        $('a#toggle_link').click(function () {

            if ($('a#toggle_link').text() == lebara.vars.strings.en.showText) {
                $('a#toggle_link').text(lebara.vars.strings.en.hideText);
                $.ajax(
                    {
                        url: "/view/MGMComponentController?refreeList=true",
                        dataType: 'html',
                        type: 'GET',
                        cache: false,
                        success: function (html) {
                            if (null != html && html.indexOf("<tr") == -1) {
                                window.location = "/view/content/pl_dashboardLoginSignup?targetUrl=/view/content/pl_MGMLoggedIn";
                            }
                            else {

                                if ($('#tablebasic').html() && $('#tablebasic').html() != undefined) {
                                    $('#tablebasic').html($('#tablebasic').html() + html)
                                }
                                else {

                                    $('#tablebasic').html(html);
                                }
                            }
                        }
                    });

            }
            else {
                $('#tablebasic').empty();
                $('#tablebasic').html('<TBODY></TBODY>');
                $('a#toggle_link').text(lebara.vars.strings.en.showText);
            }
            return false;
        });
        if ($('#expandViewID').val() == 'true') {
            if ($('a#toggle_link').text() == lebara.vars.strings.en.showText) {
                $('a#toggle_link').text(lebara.vars.strings.en.hideText);
                $.ajax(
                    {
                        url: "/view/MGMComponentController?refreeList=true",
                        dataType: 'html',
                        type: 'GET',
                        success: function (html) {
                            if (null != html && html.indexOf("<tr") == -1) {
                                window.location = "/view/content/pl_dashboardLoginSignup?targetUrl=/view/content/pl_MGMLoggedIn";
                            }
                            else {

                                if ($('#tablebasic').html() && $('#tablebasic').html() != '' && $('#tablebasic').html() != undefined) {
                                    $('#tablebasic').html($('#tablebasic').html() + html);
                                }
                                else {

                                    $('#tablebasic').html(html);
                                }
                            }
                        }
                    });

            }
            else {
                $('#tablebasic').empty();
                $('#tablebasic').html('<TBODY></TBODY>');
                $('a#toggle_link').text(lebara.vars.strings.en.showText);
            }
        }
    }

    /* MGM End */

    /* Leap Frog Start */

    var urlValue = "";
    $('#leapFrogRewardsRemindLaterAction').click(function () {
        $.ajax(
            {
                url: '/view/RewardSettingComponentController?saveLeapFrogStatus=true&rewardStatus=0',
                dataType: 'html',
                type: 'GET',
                cache: false,
                success: function (html) {
                    lebara.closeModal(false);
                }
            });
    });
    $('#leapFrogRewardsNoThanksAction').click(function () {
        $.ajax(
            {
                url: '/view/RewardSettingComponentController?saveLeapFrogStatus=true&rewardStatus=-1',
                dataType: 'html',
                type: 'GET',
                cache: false,
                success: function (html) {
                    lebara.closeModal(false);
                }
            });
    });
    $('#leapFrogRewardsSubscribeAction').click(function () {
        window.location = "/view/content/pl_leapfrog_reward";
    });
    /* Leap Frog END */

    /* Leap Frog Phase 2b start */

    $("#targetCountryMSISDN").blur(function () {

        /*--Code for changing the text of Message Text Area by default */
        $('.messageTextMain').parents().removeClass('invalidField');
        $('.messageTextMain').removeClass('invalidFieldBg');
        $('.messageTextMain .errorTooltip').remove();

        $('.messageTextMain').parents().removeClass('validField');
        $('#messageText').removeClass('validFieldBg');
        $(".messageTextMain .validImage").remove();

        $('#messageText').val('');
        $("#messageText").attr("disabled", "true");
        /* --End for changing the text of Message Text Area by default */

        $(".disabled").css("display", "block");

        /* For Hiding the Products Info List */
        $(".offerSelectionPanelTop").css("display", "none");
    });
    /* Function to be called on click of 'Submit OK Button' in ITU Home Page */
    $("#submitOKButton").click(function () {

        /*
         * Will invoke ajax call only when there are no failed client side
         * validations on Target MSISDN Field
         */
        if (!$("#inputFields").hasClass("invalidFieldBg")) {
            var targetCountryMSISDN = $("#targetCountryMSISDN").val();
            var countryCode = $("#countryCode").val();
            var dialingCode = $("#dialingCode").val();
            lebara.fetchProducts(countryCode, targetCountryMSISDN, dialingCode);

        }
    });
    /* Leap Frog Phase 2b end */

    // Moved inline content from dashboardMain.jsp
    if (null != document.getElementById("hiddenCampaignId")) {
        var id = $('#hiddenCampaignId').val();
        $.ajax(
            {
                url: '/view/CampaignListComponentController?compUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    if (data.indexOf('compaignContent') > -1) {
                        $('#campaign').html(data);
                        $('#campaign').show();
                        $('#campaign').removeClass('box-1 box');

                    }
                    else {
                        $('#campaign').hide();
                    }
                }
            });
    }

    if (null != document.getElementById("hiddenDashboardId")) {
        var id = $('#hiddenDashboardId').val();
        $.ajax(
            {
                url: '/view/DashboardComponentController?compUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#dashboard').html(data);
                    if ($(lebara.vars.selectors.bundles).length > 0) {
                        lebara.bundles();
                    }
                    if ($('.helpLink').length > 0) {
                        lebara.HelpTooltips();
                    }
                }
            });
    }

    if (null != document.getElementById("hiddenPostpayDashboardId")) {
        var id = $('#hiddenPostpayDashboardId').val();
        $.ajax(
            {
                url: '/view/PostpayTariffDashboardComponentController?componentUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#postpayDashboard').html(data);

                }
            });
    }

    if (null != document.getElementById("hiddenBoltonId")) {
        var id = $('#hiddenBoltonId').val();
        $.ajax(
            {
                url: '/view/BoltOnComponentController?compUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#bolton').html(data);
                }
            });
    }
    if (null != document.getElementById("hiddenPassesUsageHistoryId")) {
        var id = $('#hiddenPassesUsageHistoryId').val();
        $.ajax(
            {
                url: '/view/DashboardHistoryComponentController?compUid=' + id + '&usageHistoryType=Passes',
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#passesUsageHistory').html(data);
                }
            });
    }
    if (null != document.getElementById("hiddenExtraUsageHistoryId")) {
        var id = $('#hiddenExtraUsageHistoryId').val();
        $.ajax(
            {
                url: '/view/DashboardHistoryComponentController?compUid=' + id + '&usageHistoryType=Extras',
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#extraUsageHistory').html(data);
                }
            });
    }
    if (null != document.getElementById("hiddenUsageHistoryId")) {
        var id = $('#hiddenUsageHistoryId').val();
        $.ajax(
            {
                url: '/view/DashboardHistoryComponentController?compUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#usageHistory').html(data);
                }
            });
    }
    if (null != document.getElementById("hiddenOtherHistoryId")) {
        var id = $('#hiddenOtherHistoryId').val();
        $.ajax(
            {
                url: '/view/DashboardHistoryComponentController?compUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#otherHistory').html(data);
                }
            });
    }

    if (null != document.getElementById("hiddenTicketManagementId")) {
        var id = $('#hiddenTicketManagementId').val();
        $.ajax(
            {
                url: '/view/TicketManagementComponentController?compUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#ticketManagement').html(data);
                }
            });
    }
    if (null != document.getElementById("hiddenBundleUsageDashboardId")) {
        var id = $('#hiddenBundleUsageDashboardId').val();

        $.ajax(
            {
                url: '/view/PostpayBundleUsageDashboardComponentController?componentUid=' + id,
                cache: false,
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#postpayBundleDashboard').html(data);
                    if (data.indexOf('box-1 box') > -1) {
                        $('#postpayBundleDashboard').removeClass("box-1 box");
                    }

                }
            });
    }
    /* End of part dashboardMain.jsp */

    /* Changes for ManageTopupChannels */
    $('#manageTopUpChannels').change(function () {
        if ($('#activateTopup1').attr('checked')) {
            if ($('#userRegisterd').val() == 'true') {
                $('#notRegUser').hide();
                $('#regUser').show();
                $('.topupChannelContainer').show();
            }
            else {
                $('#regUser').hide();
                $('#notRegUser').show();
                $('.topupChannelContainer').show();
            }
        }

        if ($('#activateTopup2').attr('checked')) {
            $('.topupChannelContainer').hide();
        }

    });
    $(".privacyText a").click(function (event) {
        event.preventDefault();
        $(".privacyTextMore").toggle();
    });
    /* End of ManageTopupChannels */

    /* AutoRegistration */
    if ($(".checkMe").is(":checked")) {
        $(".signUpFieldsMyLebara").css("display", "block");
    }
    $(".checkMe").click(function () {
        if ($(".checkMe").is(":checked")) {
            $(".whySignUpRequired").hide();
            $(".signUpFieldsMyLebara").show();
        }
        else {
            $(".whySignUpRequired").show();
            $(".signUpFieldsMyLebara").hide();
        }
    });
    /* End AutoRegistration */

    //
    $("#countryChoice1").click(function () {
        $(this).select();
    });
    if ($('#search').length === 1) {
        /*$('#search .searchbox').bind('focus', function(e)
         {
         if($(e.target).val() == 'Search')
         {
         $(e.target).val('');
         }
         });
         $('#search .searchbox').bind('blur', function(e)
         {
         if($(e.target).val() == '')
         {
         $(e.target).val('Search');
         }
         });*/
    }
    //

    /* Start Best Deals */

    if ($('.bestDealContent .rhs-content .lastOption').length == 1) {

        $('.bestDealContent .rhs-content .lastOption').hide();
    }
    if ($('.tNcs').length >= 1) {
        $('.tNcs').unbind('click').bind('click', function (e) {
            var u = "tsNcs.html";
            $.ajax(
                {
                    cache: false,
                    url: u,
                    dataType: "html",
                    content: document.body,
                    success: function (data) {
                        $('#basic-modal-content').modal();
                        $('.simplemodal-wrap').append(data);
                        $.modal.setPosition();
                    }
                })
        });
    }

    /* End Best Deals*/

    if ($('.renewExpire').length >= 1) {
        $('.renewExpire').unbind('click').bind('click', function (e) {
            var u = "autoRenew.html";
            $.ajax(
                {
                    cache: false,
                    url: u,
                    dataType: "html",
                    content: document.body,
                    success: function (data) {
                        $('#basic-modal-content').modal();
                        $('.simplemodal-wrap').append(data);
                        $.modal.setPosition();
                    }
                })
        });
    }

});
$(function () {
    var _sel = lebara.vars.selectors;
    var autComplete = true;
    var ituCountrySet = $(".ituCountrySet");
    var input = $(".ituCountrySet .fakeInput input");
    if ((ituCountrySet).length > 0) {

        $(input).each(function () {
            var input = this;
            var inputId = $(this).attr("id");

            $(input).autocomplete(
                {
                    source: function (req, responseFn) {

                        $.ajax(
                            {
                                url: externalCountrylistUrl, // added by dev team
                                dataType: "json",
                                cache: false,
                                data: {
                                    maxRows: 12,
                                    minLength: 2
                                },
                                success: function (data) {
                                    var x = [];
                                    var y = [];

                                    for (i = 0; i < data.length; i = i + 1) {
                                        x.push(data[i]);
                                    }

                                    lebara.vars.arrays.predictiveDropDown.countryList = x;

                                    var re = $.ui.autocomplete.escapeRegex(req.term);
                                    var matcher = new RegExp("^" + re, "i");
                                    var a = $.grep(lebara.vars.arrays.predictiveDropDown.countryList, function (item, index) {
                                        return matcher.test(item.label);

                                    });
                                    for (i = 0; i < a.length; i = i + 1) {
                                        a[i].label = "<img src='" + siteMediaUrl + a[i].flag + "'/>" + a[i].label;
                                    }
                                    responseFn(a);

                                }
                            });
                    },
                    focus: function (event, ui) {
                        var curItem = ui.item.label;
                        var flagValue = curItem.substring(10, curItem.lastIndexOf("'/>"));
                        var curLabel = curItem.substring(curItem.indexOf("/>") + 2, curItem.length);
                        $("#selectedCntryImage").attr("src", flagValue);
                        $("#selectedCntryImage").show();
                        $(event.target).val(curLabel);
                        $("#fakeTopInput a.clearInput").click(function () {
                            $("#selectedCntryImage").attr("src", "");
                            $("#selectedCntryImage").hide();
                        });
                        return false;
                    },
                    select: function (event, ui) {
                        autComplete = false;
                        $(event.target).val(ui.item.label);
                        if ($("#countryCode") && $("#countryCode").val() != undefined) {
                            $("#countryCode").val(ui.item.value);
                        }
                        var curItem = ui.item.label;
                        var flagValue = curItem.substring(10, curItem.lastIndexOf("'/>"));
                        var curLabel = curItem.substring(curItem.indexOf("/>") + 2, curItem.length);
                        lebara.onCountrySelectedForLF(ui.item.value, curLabel, ui.item.dialingCode, input);
                        $("#selectedCntryImage").attr("src", flagValue);
                        $("#selectedCntryImage").show();
                        $(input).val(curLabel);
                        $("#fakeTopInput a.clearInput").click(function () {
                            $("#selectedCntryImage").attr("src", "");
                            $("#selectedCntryImage").hide();
                        });
                        return false;

                    }
                });

        });
    }
});
/* Moved inline content from InternationalTariffPlanSelectView.jsp */
function getAjxIntnlTariffPlanSelectDetail() {
    var PriceChoice = $('#priceChoice :selected').text();
    $('.priceChoiceValue').html(PriceChoice);
    var queryString = 'isoCode=' + $('#countryCode').val() + '&method=getInternationalTariffPlanView&viewName=internationaltariffPlanSelect&priceChoice=' + $('#priceChoice').val() + '&tariffType=' + $('#tariffType').val();
    $.ajax(
        {
            url: '/view/TariffComponentController',
            dataType: 'json',
            data: queryString,
            success: function (data) {
                var PriceChoice = $('#priceChoice :selected').text();
                $('.priceChoiceValue').html(PriceChoice);

                $('#countryabc').html(data.tariff[0].countryname);
                for (var i = 1; i <= data.tariff.length; i++) {
                    $('#rateType' + i).html(data.tariff[i - 1].rateType);
                    var desc = data.tariff[i - 1].desc;
                    if (desc == "null") {
                        desc = '';
                    }
                    temphtml = '' + data.tariff[i - 1].ratePrice + ' ' + desc;
                    $('#tariffPrice' + i).html(temphtml);
                }
                tempHtml = '';
                for (var i = 1; i <= data.tariff.length; i++) {
                    if (i <= 3) {
                        tempHtml = tempHtml + '<p class="outputChoices"><span class="lumpRateLandline">' + data.tariff[i - 1].calcVal + '</span>';
                        if (i != 3) {
                            tempHtml = labelcostunit;
                        }
                        tempHtml = tempHtml + data.tariff[i - 1].rateType + '*</p>';
                        if (i != 3) {
                            tempHtml = labelinternationalor;
                        }
                    }
                    else if (i != data.tariff.length) {
                        tempHtml = tempHtml + '<p class="outputChoices"><span class="lumpRateLandline">' + data.tariff[i - 1].calcVal + '</span>' + data.tariff[i - 1].rateType + '*</p>';
                        if (i != data.tariff.length - 1) {
                            tempHtml = labelinternationalor;
                        }
                    }
                }
                $('#temp').html(tempHtml);
            }
        });
}

/* --End internationalTariffPlanSelectView.jsp */

/* Moved inline content from internationalTariffPlanSelectView.jsp */
function getInternationalPrepayPostpayTariffDetails() {
    var queryString = 'isoCode=' + $('#countryCode').val() + '&method=getInternationalPrepayPostpayTariffDetails&planType=' + $('#planType').val();
    $.get('/view/TariffComponentController', queryString, function (data) {
        $('#ajaxRespPlaceHolder').html($(data).html());
    });
}

function getPostPayCountryList() {
    var queryString = 'method=getPostPayCountryList';
    $.ajax(
        {
            type: "GET",
            url: '/view/TariffComponentController',
            data: queryString,
            dataType: "text",
            success: function (data) {
                countryData.countryCodes = '[' + data + ']';
            }
        });
}

function setPlan(tariffPlan) {
    var postPayPreChecked = $("input[name='radioPostPayPrePay']:checked")

    var prodyctType = postPayPreChecked.attr("value");
    if (prodyctType == 'post-pay') {
        externalCountrylistUrl = '/view/TariffComponentController?method=getPostPayCountryList'
        getTariffDetailsUrl = '/view/TariffComponentController?method=getInternationalPrepayPostpayTariffDetails&planType=postpay';

    }
    else {
        externalCountrylistUrl = '/view/TariffComponentController?method=getPrePayCountryList&tariffType=' + tariffPlan + '';
        getCountryListInRatesJourneyUrl = '/view/RatesJourneyPlansDisplayComponentController?method=getCountryListInRatesJourney&tariffType=DEFAULT';
        getTariffDetailsUrl = '/view/TariffComponentController?method=getInternationalTariffDetails&tariffType=' + tariffPlan + '';
        getTariffDetailsForSelectedCountryInRatesJourneyUrl = '/view/RatesJourneyPlansDisplayComponentController?method=getTariffDetailsForSelectedCountryInRatesJourney&tariffType=DEFAULT';
    }
}

/* --End internationalTariffPlanSelectView.jsp */

/* AddressFinderWizard initialisation */
function initAddressFinderWizard() {
    if (addressFinderWizardCheck != 'true') {
        $(".addressFinderWizardSubmit").removeAttr('disabled');
    }
    if (($("#postCode").val() != null) && ($("#postCode").val() != '' )) {
        $(".addressFinderWizardSubmit").removeAttr('disabled');
    }
    if (addFinderWizardSelectAdd != '') {
        $("#pCodeFind").attr("readonly", "readonly");
        $(".resetDisplay").css("display", "block");
        $(".addressFinderWizardTrigger").css("display", "none");
        $("#houseNo").show();
        $(".addressFinderWizardSubmit").removeAttr('disabled');
    }
    $(".resetDisplay").click(function () {
        $("#pCodeFind").removeAttr("readonly");

        $(".resetDisplay").css("display", "none");
        $(".addressFinderWizardTrigger").css("display", "block");
        $("#addressDrop").css("display", "none");
        $(".postCodePopulate").css("display", "none");
        $("#houseNo").css("display", "none");
        $(".populatedAddress").hide();
        $(".addressFinderWizardSubmit").attr("disabled", true);
        $(".addressFinderWizardSubmit").addClass("disabledPrimaryBut");

        $("#selectAddress").removeClass("validFieldBg").parent().removeClass("validField");
        $("#selectAddress").parent().removeClass("invalidFieldBg").parent().removeClass("invalidField");
        $("#selectAddress").parent().find(".errorTooltip").css("display", "none");

        $("#selectAddress").parent().find(".validImage").css("display", "none");
        $("#wizardAdLine1").parent().find(".validImage").css("display", "none");
        // added for activation
        $("#activate").hide();
        $("#activateTextPara").hide();

        // for hiding street which was added for FNASL5
        if (document.getElementById("street_field")) {
            document.getElementById("street_field").style.display = "none";
            document.getElementById("area").value = "";
            document.getElementById("showstreetinaddresswiz").value = "false";
        }

    });
    $("#wizardAdLine1").blur(function () {
        if ($("#wizardAdLine1").parent().parent().hasClass('validField')) {
            $(".addressFinderWizardSubmit").removeAttr('disabled');
            $(".addressFinderWizardSubmit").removeClass("disabledPrimaryBut");

            $('#populatedaddress1').val($('#wizardAdLine1').val());
        }
        else {
            $(".addressFinderWizardSubmit").attr("disabled", true);
            $(".addressFinderWizardSubmit").addClass("disabledPrimaryBut");

        }
        if ($("#wizardAdLine1").val() == '' || $("#wizardAdLine1").val() == null) {
            $("#wizardAdLine1").parent().addClass("invalidFieldBg").parent().addClass("invalidField");
            $("#houseNo .input .errorTooltip").css("display", "inline");
        }
    });

    $("#pCodeFind").blur(function () {
        $("#pCodeFind").siblings(".wizardError").remove();
        // $(".wizardError").remove();
        if ($("#pCodeFind").parent().parent().hasClass('validField')) {

            $(".addressFinderWizardTrigger").removeAttr('disabled');
            $(".addressFinderWizardTrigger").removeClass("disabledPrimaryBut");
        }
        else {
            $(".addressFinderWizardTrigger").attr("disabled", true);
            $(".addressFinderWizardTrigger").addClass("disabledPrimaryBut");

        }

    });

    $("#area").blur(function () {
        $("#area").siblings(".wizardError").remove();

        if ($("#area").parent().parent().hasClass('validField')) {

            $(".addressFinderWizardTrigger").removeAttr('disabled');
            $(".addressFinderWizardTrigger").removeClass("disabledPrimaryBut");
        }
        else if ($("#area").parent().parent().hasClass('invalidField')) {
            $(".addressFinderWizardTrigger").attr("disabled", true);
            $(".addressFinderWizardTrigger").addClass("disabledPrimaryBut");

        }
        if ($("#area").val() == "") {
            $("#area").parent().removeClass("invalidFieldBg").parent().removeClass("invalidField");
            $(".addressFinderWizardTrigger").removeAttr('disabled');
            $(".addressFinderWizardTrigger").removeClass("disabledPrimaryBut");

        }

    });
}

/* AddressFinderWizard */
function hideSubmitButton() {
    $(".addressFinderWizardSubmit").attr("disabled");
}

function submitAutoRegistration() {
    var url = '/view/ActivationComponentController?validateOtacSecurityCode=true';
    url = url + '&' + $('#personalInformation').serialize();
    $('#autoRegistrationCompId').html($('#loadingDiv').html());
    $.ajax(
        {
            url: url,
            cache: false,
            type: 'post',
            dataType: 'script',
            success: function (data) {
                $('#autoRegistrationCompId').html(data);
                if (data && $('#autoRegistrationCompId').find('#systemError').length > 0) {
                    var frm = $('#autoRegistrationCompId').find('#systemError');
                    frm.submit();
                }
                lebara.init();
            },
            error: function () {
                if (document.getElementById("systemError")) {
                    var frm = document.getElementById("systemError");
                    frm.submit();
                }
            }
        });
}

function handleActivationAutoRegistration() {
    var url = '/view/ActivationComponentController?handleAutoRegistration=true';
    url = url + '&' + $('#personalInformation').serialize();
    $.ajax(
        {
            url: url,
            cache: false,
            type: 'post',
            success: function (data) {
                $('#autoRegistrationCompId').html(data);
                lebara.init();
                $(".checkMe").click(function () {
                    if ($(".checkMe").is(":checked")) {
                        $(".whySignUpRequired").hide();
                        $(".signUpFieldsMyLebara").show();
                    }
                    else {
                        $(".whySignUpRequired").show();
                        $(".signUpFieldsMyLebara").hide();
                    }
                });
            }
        });
}

function handlePrepayCheckoutAutoRegistration() {
    var url = '/view/OrderConfirmationComponentController?userDetails=true';
    // url = url
    var postData = $('#personalInformation').serialize();
    // $('#autoRegistrationCompId').html($('#loadingDiv').html());
    $.ajax(
        {
            url: url,
            cache: false,
            type: 'post',
            data: postData,
            success: function (data) {
                $('#autoRegistrationCompId').html(data);
                lebara.init();
                if ($('.helpLink').length > 0) {
                    lebara.HelpTooltips();
                }
                $(".checkMe").click(function () {
                    if ($(".checkMe").is(":checked")) {
                        $(".whySignUpRequired").hide();
                        $(".signUpFieldsMyLebara").show();

                    }
                    else {
                        $(".whySignUpRequired").show();
                        $(".signUpFieldsMyLebara").hide();
                    }
                });
            }
        });
}

function submitLoginFormFromAutoReg() {
    $('#loginIdAutoReg').val($('#personalInformation').find('#email').val());
    $('#passAutoReg').val($('#personalInformation').find('#password').val());
    $('#loginAutoReg').submit();
}

function wizardGetJsonError() {
    var normalExclaimPic = lebara.vars.paths.conflictImageNew;
    var idInvalidMessage = lebara.vars.paths.addressFinderNoResponse;
    var noOfResultInvalidMessage = lebara.vars.paths.addressFinderNoofResult;

    if (document.getElementById("showstreetinaddresswiz").value == "true") {
        $("#area").removeClass("validFieldBg").parent().parent().removeClass("validField");
        $("#area").parent().addClass("invalidFieldBg").parent().addClass("invalidField");

        $("#area").parent().find(".validImage").remove();
        $("#area").siblings(".wizardError").remove();
        $('<a href="#" class="wizardError"><img src="' + normalExclaimPic + '" alt="InValid" /><div class="infovalidatorSpainPD"><div><span></span><ul>' + noOfResultInvalidMessage + '</ul></div></div></a>').insertAfter("#area");
    }
    else {

        $("#pCodeFind").removeClass("validFieldBg").parent().parent().removeClass("validField");
        $("#pCodeFind").parent().addClass("invalidFieldBg").parent().addClass("invalidField");

        $("#pCodeFind").parent().find(".validImage").remove();
        $("#pCodeFind").siblings(".wizardError").remove();
        // $(".wizardError").remove();
        $('<a href="#" class="wizardError"><img src="' + normalExclaimPic + '" alt="InValid" /><div class="infovalidatorSpainPD"><div><span></span><ul>' + idInvalidMessage + '</ul></div></div></a>').insertAfter("#pCodeFind");
    }

    $(".addressFinderWizardTrigger").removeClass("accessibility");
    $(".postCodeSearching").addClass("accessibility");

}

function wizardPopulateJsonError() {
    $('#wizardLoadingDiv').hide();
    document.getElementById("houseNo").style.display = 'none';
    $('#selectAddressNoResponse').dialog(
        {
            modal: true,
            width: 400,
            title: false,
            height: 'auto'
        });
    $('.ui-dialog-title').remove();
    $('.ui-resizable-handle').remove();
    $('.ui-dialog .ui-dialog-content').css('padding-bottom', '0');
    $("#selectAddress").blur();
}

// form: personalInformationFreeSim submission
function validateFormSubmitStatus(formId) {
    formId = "#" + formId;
    var validatedCheck = true;
    $(formId).each(function () {
        var _formId = this.id

        var _formspecific = (lebara.vars.strings.validation[_formId]);

        for (var i = 0, forms = $(_formspecific).length; i < forms; i++) {
            /* STYLING FOR SERVERSIDE VALIDATION */

            $(formId).find((".input .text, .input textarea, .input checkbox, .label .radio, .label1 .radio")).each(function () {

                var _fieldId = (this).id;
                var _fieldspecific = _formspecific[_fieldId]

                /* Added for MGM dynamic fields validation */
                if (formId == '#mgmForm' && (_fieldId.indexOf('refereeFirstName') >= 0 || _fieldId.indexOf('refereeLastName') >= 0 || _fieldId.indexOf('refereeEmail') >= 0 )) {
                    _fieldspecific = _formspecific[_fieldId.split('_')[0]];
                }
                if (formId == '#storeLocatorAdminForm' && (_fieldId.indexOf('validatestoreRetailerName') >= 0 || _fieldId.indexOf('validatestoreName') >= 0 || _fieldId.indexOf('validateaddressLine') >= 0 || _fieldId.indexOf('validatelocationType') >= 0 || _fieldId.indexOf('validateformattedEventStartDate') >= 0 || _fieldId.indexOf('validateformattedEventEndDate') >= 0 || _fieldId.indexOf('validateemail') >= 0)) {
                    _fieldspecific = _formspecific[_fieldId.split('_')[0]];
                }

                /* End */
                if (_fieldspecific) {
                    var _required = _fieldspecific["Required"]
                    var _format = _fieldspecific["Format"]
                    var _minlength = _fieldspecific["MinLength"]
                    var _maxlength = _fieldspecific["MaxLength"]
                    var _comparison = _fieldspecific["Comparison"]
                    var _selectedField = ($(this).parents(".field:not(.dob)"));
                    /*
                     * added by sucheta for configuration based validation for
                     * findaddress
                     */
                    if (_fieldId == "area" && ($('#areaFlag').val() == "false")) {
                        _required = false;
                    }
                    if (_fieldId == "address1" && ($('#houseNumFlag').val() == "false")) {
                        _required = false;
                    }
                    if (_fieldId == "pCodeFind" && ($('#postCodeFlag').val() == "false")) {
                        _required = false;
                    }
                    if (_fieldId == "retailerID" && ($('#validateRetailerID').val() == "false")) {
                        _required = false;
                    }
                    if (_fieldId == "middleName" && ($('#middleName').val() == "false")) {
                        _required = false;
                    }

                    $(_selectedField).each(function () {

                        var validator = $(this).find(".ssValidator");
                        if ((validator).length > 0) {
                            var _input = $(this).find(".input .text, .input textarea, .input checkbox, .label .radio, .label1 .radio");
                            var _text = $(validator).html();

                            $(validator).hide();

                            Invalid(_input, this, _text, "serverSide");
                        }
                    });

                    $("#" + _fieldId).each(function () {

                        if ($(this).parent().parent().parent().hasClass('validImageNone')) {
                            Valid(this, _selectedField);
                            return;
                        }

                        if ((_maxlength) && ($(_required).length == 0)) {
                            if ($(this).val()) {

                                var _type = "maxlength";
                                var _length = _maxlength["Length"];

                                // if minlength test
                                if (this.value.length > _length) {
                                    Invalid(this, _selectedField, _maxlength, _type);
                                    validatedCheck = false;
                                }
                                else {
                                    Valid(this, _selectedField);
                                }

                            }

                        }
                        if ((_minlength) && ($(_required).length == 0)) {
                            if ($(this).val()) {

                                if (_minlength) {
                                    var _type = "minlength";
                                    var _length = _minlength["Length"];
                                    // if minlength test
                                    if ((this.value.length) < _length) {

                                        Invalid(this, _selectedField, _minlength, _type);
                                        validatedCheck = false;
                                    }
                                    else {

                                        Valid(this, _selectedField);
                                    }
                                }

                            }

                        }
                        if ((_format) && ($(_required).length == 0)) {
                            if ($(this).val()) {
                                if (_format["Regex"] === "alpha") {

                                    var _regex = new RegExp(/^[a-z]*$/i);
                                }

                                if (_format["Regex"] === "postcode") {

                                    var _regex = new RegExp(/^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/);
                                }
                                else {
                                    var _regex = new RegExp(_format["Regex"]);
                                }

                                var _type = "format"
                                if (this.value != this.alt && _regex.test($(this).val()))
                                // if format Test
                                {

                                    Valid(this, _selectedField);
                                }
                                else {
                                    Invalid(this, _selectedField, _format, _type);
                                    validatedCheck = false;

                                }
                            }
                        }
                        if (_required) {
                            var _type = "required"

                            if ($(this).val() && this.value != this.alt) {

                                var dob = $(_selectedField).parents(".dob");
                                if ($(dob).length <= 0) {
                                    if ((this.value) == 'select' || (this.value) == 'SELECT' || (this.value) == 'Select') {
                                        Invalid(this, _selectedField, _required, _type);
                                        validatedCheck = false;
                                    }
                                    else {

                                        Valid(this, _selectedField);
                                    }
                                }

                                // if required Test

                                // If minlength
                                if (_minlength) {

                                    var _type = "minlength";
                                    var _length = _minlength["Length"];

                                    // if minlength test
                                    if ((this.value.length) < _length) {

                                        Invalid(this, _selectedField, _minlength, _type);
                                        validatedCheck = false;
                                    }
                                    else {

                                        Valid(this, _selectedField);
                                    }
                                }

                                // If minlength End
                                // If maxlength
                                if (_maxlength) {

                                    var _type = "maxlength";
                                    var _length = _maxlength["Length"];

                                    // if minlength test
                                    if (this.value.length > _length) {
                                        Invalid(this, _selectedField, _maxlength, _type);
                                        validatedCheck = false;
                                    }
                                    else {

                                        Valid(this, _selectedField);
                                    }
                                }

                                // If maxlength End

                                if (_format) {
                                    if (_format["Regex"] === "alpha") {

                                        var _regex = new RegExp(/^[a-z]*$/i);
                                    }

                                    if (_format["Regex"] === "postcode") {

                                        var _regex = new RegExp(/^(GIR0AA)|((([A-PR-UWYZ][0-9][0-9]?)|(([A-PR-UWYZ][A-HK-Z][0-9][0-9]?)|(([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Z][0-9][ABEHMNPRVWXY]))))[0-9][ABD-HJLNP-UW-Z]{2})$/);
                                    }
                                    else {
                                        var _regex = new RegExp(_format["Regex"]);
                                    }
                                    var _type = "format"
                                    if (this.value != this.alt && _regex.test($(this).val())) {

                                        Valid(this, _selectedField);
                                    }
                                    else {
                                        Invalid(this, _selectedField, _format, _type);
                                        validatedCheck = false;

                                    }
                                }
                                else {
                                    var dob = $(_selectedField).parents(".dob");
                                    var dob_input = $(_selectedField).parents(".dob > .input");

                                    if ($(dob).length > 0) {
                                        var monthVal = dob.find("#month").val()
                                        var dayVal = dob.find("#day").val()
                                        var yearVal = dob.find("#year").val()
                                        if (monthVal && dayVal && yearVal) {
                                            // If required dob
                                            if (validateDate(monthVal, dayVal, yearVal)) {
                                                Valid(dob_input, dob);
                                            }
                                            else {
                                                Invalid(dob_input, dob);
                                                validatedCheck = false;
                                            }
                                        }

                                    }
                                    else {
                                        Valid(this, _selectedField);
                                    }
                                }

                                if (_comparison) {

                                    var _type = "comparison";
                                    var _valueToCompare = ($("#" + _comparison["FieldToCompare"]).val())
                                    var _value = $(this).val();

                                    if ((_valueToCompare) === (_value)) {
                                        Valid(this, _selectedField);
                                    }
                                    else {

                                        Invalid(this, _selectedField, _comparison, _type);
                                        validatedCheck = false;
                                    }

                                }
                                // if required Test end
                            }
                            else {

                                var dob = $(_selectedField).parents(".dob");
                                var dob_input = $(_selectedField).parents(".dob > .input");

                                if ($(dob).length > 0) {
                                    Invalid(dob_input, dob, _required, _type);
                                    validatedCheck = false;

                                }
                                else {
                                    Invalid(this, _selectedField, _required, _type);
                                    validatedCheck = false;
                                }

                            }

                        }

                    });
                }

            });
        }
        /* Written to hightlight all the Dob fields together */
        $(".dob  .field").each(function (i) {
            if ($(this).hasClass('invalidField')) {
                $(this).removeClass('invalidField');
                $(".dob").addClass('invalidField');
                $(".dob .errorTooltip").css('padding-left', '10px');
            }
        });
    });
    /* Method to valide date field including leap year */
    function validateDate(monthVal, dayVal, yearVal) {
        var monthVal = +monthVal - 1;
        // Convert to numbers with "+"
        // prefix
        var date = new Date(yearVal, monthVal, dayVal);
        // Use the prober
        // constructor
        return date.getFullYear() == yearVal && date.getMonth() == monthVal && date.getDate() == dayVal;
    }

    function Valid(input, _selectedField) {

        var _validator = $(input).siblings(lebara.vars.selectors.validator);
        var _validImage = lebara.vars.paths.validImage;

        // Valid - add valid class to field and add image - build
        // function
        $(_selectedField).addClass("validField");
        $(_selectedField).removeClass("invalidField");
        if ($(_selectedField.find(lebara.vars.selectors.validImage)).length > 0) {
            // If valid image

        }
        else {
            $("<img src='" + _validImage + "' class='validImage' alt='Valid' />").insertAfter(input);
        }
        if ($('.validField').length > 0) {
            $(".primaryButtonDisabled").removeAttr("disabled");
            $('div.validField div.input select').addClass("validFieldBg");
            $('div.validField div.input input[type="text"]').addClass("validFieldBg");
            $('div.validField div.input input[type="password"]').addClass("validFieldBg");
            $('div.validField div.input textarea').addClass("validFieldBg");
            $('div.validField div.input[type="checkbox"]').addClass("validFieldBg");
            $('div.validField checkbox').addClass("validFieldBg");
            $('div.validField').parent().parent().removeClass("invalidField");
            $('div.validField div.input').removeClass("invalidFieldBg");
            if (!$("#messageText").hasClass("validFieldBg")) {
                $(".primaryButtonDisabled").attr("disabled", "true");
            }
        }

        $((_selectedField).find(".errorTooltip")).remove();
    }

    function Invalid(input, _selectedField, validationMessage, type) {
        var normalExclaimPic = lebara.vars.paths.conflictImageNew;
        var _selectedFieldRequired = $(input).siblings("." + type);
        // Invalid - add validator with validation message - build
        // function
        $(_selectedField).find(lebara.vars.selectors.validImage).remove();
        if ((_selectedFieldRequired).length > 0) {
        }
        else {

            $(_selectedField).find(".errorTooltip").remove();
            $(_selectedField).addClass("invalidField");
            if ($('.invalidField').length > 0) {
                $('div.validField div.input select').removeClass("validFieldBg");
                $('div.validField div.input textarea').removeClass("validFieldBg");
                $('div.validField div.input[type="checkbox"]').removeClass("validFieldBg");
                $('div.invalidField div.input').addClass("invalidFieldBg");
                $('div.invalidField div.input').parent().removeClass("validField");
                if (!$("#messageText").hasClass("validFieldBg")) {
                    $(".primaryButtonDisabled").attr("disabled", "true");
                }
            }
            $("<a href='#' class='errorTooltip " + type + "' title='Error' tabindex='-1'><img src='" + normalExclaimPic + "' alt='error' /></a>").insertAfter(input);

            var Etooltip = $(_selectedField).find(".errorTooltip");
            $(Etooltip).each(function () {
                $(this).bind("mouseover", function () {
                    showTooltip(this);
                });
                $(this).bind("click", function () {
                    showTooltip(this);
                    return false;
                });
                $(this).bind("mouseout", function () {
                    $(lebara.vars.selectors.validator).remove();
                });
                function showTooltip(errorToolTipTrigger) {
                    if (validationMessage["ValidationMessage"]) {
                        var msg = validationMessage["ValidationMessage"];
                    }
                    else {
                        var msg = validationMessage;
                    }
                    var _html = "<div class='validator'><div><span></span><ul>" + msg + "</ul></div></div>";
                    var _Pos = $(errorToolTipTrigger).offset();
                    if ($(errorToolTipTrigger).parent().hasClass('dob')) {
                        _Pos.left = _Pos.left - 10;
                        _Pos.top = _Pos.top + 5;
                    }
                    var _width = ($(errorToolTipTrigger).width())

                    // Condition for RTL specific to change
                    // direction for validator tip starts here
                    if ($("html").attr("dir") == "rtl") {
                        $(_html).appendTo($(errorToolTipTrigger).parents("div.field").children("div.input"));
                    }
                    else {
                        $(lebara.vars.selectors.content).append(_html);
                        $(lebara.vars.selectors.overlay).append(_html);
                    }
                    // Condition for RTL specific to change
                    // direction for validator tip starts here

                    $(lebara.vars.selectors.validator).css(
                        {
                            "display": "none"
                        });
                    $(lebara.vars.selectors.validator + " ul li:last-child").css(
                        {
                            "padding-bottom": "0px"
                        });

                    // Condition for RTL specific to change
                    // direction for validator tip starts here
                    if ($("html").attr("dir") == "rtl") {
                        var topPosition = "-" + parseInt($(lebara.vars.selectors.validator).height() / 3) + "px";
                        if ($.browser.msie && $.browser.version == "7.0" && $(errorToolTipTrigger).parent().hasClass('dob')) {
                            var rightPosition = parseInt($(errorToolTipTrigger).parents("div.field").children("div.input").width() + 160) + "px";
                        }
                        else if ($.browser.msie && $.browser.version == "7.0" && $(errorToolTipTrigger).parents().hasClass('address')) {
                            var rightPosition = parseInt($(errorToolTipTrigger).parents("div.field").children("div.input").width() - 160) + "px";
                        }
                        else {
                            var rightPosition = parseInt($(errorToolTipTrigger).parents("div.field").children("div.input").width() + 10) + "px";
                        }
                        $(lebara.vars.selectors.validator).css(
                            {
                                "right": rightPosition,
                                "top": topPosition
                            });
                    }
                    else {
                        $(lebara.vars.selectors.validator).css(
                            {
                                "left": ((parseInt(_Pos.left)) + _width + 20) + "px",
                                "top": (parseInt(_Pos.top - 17) + "px")
                            });
                    }
                    // Condition for RTL specific to change
                    // direction for validator tip starts here

                    $(lebara.vars.selectors.validator).show();
                }

            });
        }

    }

    return validatedCheck;
}

function parseRatePlans(countryCode, countryName) {
    var getTariffDetailsForSelectedCountryInRatesJourneyUrl = '/view/RatesJourneyPlansDisplayComponentController?method=getTariffDetailsForSelectedCountryInRatesJourney&tariffType=DEFAULT&isoCode=' + countryCode;

    $.getJSON(getTariffDetailsForSelectedCountryInRatesJourneyUrl, function (data) {
        var newList = "";

        for (var i = 0, jLen = data.length; i < jLen; i++) {

            var _item = data[i];
            $('#planName').html(_item.planName);
            $('#planHeadLine').html(_item.planHeadLine);
            $("#planImageURL").attr("src", _item.planImageURL);
            $('#planInfoLine1').html(_item.planInfoLine1);
            $('#planInfoLine2').html(_item.planInfoLine2);
            $('#planInfoLine3').html(_item.planInfoLine3);
            $('#planButtonText').html(_item.planButtonText);
            $('#planButtonURL').attr("href", _item.planButtonUrl);
            $('#planName_2').html(_item.planName_2);
            $('#planHeadLine_2').html(_item.planHeadLine_2);
            $("#planImageURL_2").attr("src", _item.planImageURL_2);
            $('#planInfoLine1_2').html(_item.planInfoLine1_2);
            $('#planInfoLine2_2').html(_item.planInfoLine2_2);
            $('#planInfoLine3_2').html(_item.planInfoLine3_2);
            $('#planButtonText_2').html(_item.planButtonText_2);
            $('#planButtonURL_2').attr("href", _item.planButtonUrl_2);

        }
        $('#defaultCall').hide();
        $('#isBoxCall').show();
        return false;

    });
}

function countrySelector() {

    $("ul.dropdownList li a").click(function (evt) {
        $("#listItemsDiv").css("display", "none");
        evt.preventDefault();
        var pickup = $(this).text();
        var countryCode = $(this).attr("title");

        // default image
        if ($(".flagInput").hasClass("flagSelectDim2")) {
            $(".flagInput").removeClass("flagSelectDim2").addClass("flagSelectDim1");
        }
        // end default image

        $("#flagSelect").attr("src", $("ul.dropdownList li a img").attr("src"));
        if ($(".countryCallPlanLeft ul.dropdownList li a").length > 0) {
            if ($(this).parents(".countryCallPlanLeft").length > 0) {
                $(".input").removeClass("invalidField");
                $(".input").removeClass("invalidFieldBg");
                $("a.infoError").remove();
            }
        }
        // Google Analytic Code
        if (document.getElementById("temp") != undefined) {
            document.getElementById("temp").value = 'true';
        }
        var destinationInput = $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find(".fakeInput input");
        var dropDown = $(this).parents(".dropdownList");

        // This was changed because with class .countryCode we are not able
        // to get the object (for ID Management by gaurav) so made # ,
        // please consult before modifying)
        if ($("#countryCode") && $("#countryCode").val() != undefined) {
            var countryCodeInput = $(dropDown).siblings("#countryCode");
        }
        else {
            var countryCodeInput = $(dropDown).siblings(".countryCode");
        }

        // / This code is setting the country code value in the Hidden
        // Variable
        if ((countryCodeInput).length > 0) {
            countryCodeInput.val(countryCode);
        }

        var flag = $(this).find('img').attr('src');
        $("#flagSelect").attr("src", flag);
        var plusAt = pickup.indexOf('+');

        var countryName = pickup.substring(0, plusAt);
        var countryDialCode = pickup.substring(plusAt + 1);
        if (countryName) {
            destinationInput.val(countryName + "(ext. +" + countryDialCode + ")");
        }
        else {
            destinationInput.val(countryDialCode);
        }
        destinationInput.removeClass("initial");
        destinationInput.addClass("real");
        $(this).closest(lebara.vars.selectors.predictiveDropDown).children().find("a.clearInput").show();
        $(this).parent().parent().hide();
        parseRatePlans(countryCode, pickup.substring(0, pickup.indexOf("+")));

    });
}