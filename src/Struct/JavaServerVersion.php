<?php
declare(strict_types=1);

namespace Loper\Minecraft\Protocol\Struct;

use Loper\Minecraft\Protocol\ServerVersion;

enum JavaServerVersion: string implements ServerVersion
{
	case Unknown = 'unknown';
	case JAVA_13W41A = '13w41a-snapshot';
	case JAVA_13W41B = '13w41b-snapshot';
	case JAVA_13W42A = '13w42a-snapshot';
	case JAVA_13W42B = '13w42b-snapshot';
	case JAVA_13W43A = '13w43a-snapshot';
	case JAVA_1_7 = '1.7';
	case JAVA_1_7_1 = '1.7.1';
	case JAVA_1_7_2 = '1.7.2';
	case JAVA_13W47A = '13w47a-snapshot';
	case JAVA_13W47B = '13w47b-snapshot';
	case JAVA_13W47C = '13w47c-snapshot';
	case JAVA_13W47D = '13w47d-snapshot';
	case JAVA_13W47E = '13w47e-snapshot';
	case JAVA_13W48A = '13w48a-snapshot';
	case JAVA_13W48B = '13w48b-snapshot';
	case JAVA_13W49A = '13w49a-snapshot';
	case JAVA_1_7_3 = '1.7.3';
	case JAVA_1_7_4 = '1.7.4';
	case JAVA_1_7_5 = '1.7.5';
	case JAVA_1_7_6_PRE_RELEASE1 = '1.7.6-pre1';
	case JAVA_1_7_6_PRE_RELEASE2 = '1.7.6-pre2';
	case JAVA_1_7_6 = '1.7.6';
	case JAVA_1_7_7 = '1.7.7';
	case JAVA_1_7_8 = '1.7.8';
	case JAVA_1_7_9 = '1.7.9';
	case JAVA_1_7_10_PRE_RELEASE1 = '1.7.10-pre1';
	case JAVA_1_7_10_PRE_RELEASE2 = '1.7.10-pre2';
	case JAVA_1_7_10_PRE_RELEASE3 = '1.7.10-pre3';
	case JAVA_1_7_10_PRE_RELEASE4 = '1.7.10-pre4';
	case JAVA_1_7_10 = '1.7.10';
	case JAVA_14W02A = '14w02a-snapshot';
	case JAVA_14W02B = '14w02b-snapshot';
	case JAVA_14W02C = '14w02c-snapshot';
	case JAVA_14W03A = '14w03a-snapshot';
	case JAVA_14W03B = '14w03b-snapshot';
	case JAVA_14W04A = '14w04a-snapshot';
	case JAVA_14W04B = '14w04b-snapshot';
	case JAVA_14W05A = '14w05a-snapshot';
	case JAVA_14W05B = '14w05b-snapshot';
	case JAVA_14W06A = '14w06a-snapshot';
	case JAVA_14W06B = '14w06b-snapshot';
	case JAVA_14W07A = '14w07a-snapshot';
	case JAVA_14W08A = '14w08a-snapshot';
	case JAVA_14W10A = '14w10a-snapshot';
	case JAVA_14W10B = '14w10b-snapshot';
	case JAVA_14W10C = '14w10c-snapshot';
	case JAVA_14W11A = '14w11a-snapshot';
	case JAVA_14W11B = '14w11b-snapshot';
	case JAVA_14W17A = '14w17a-snapshot';
	case JAVA_14W18A = '14w18a-snapshot';
	case JAVA_14W18B = '14w18b-snapshot';
	case JAVA_14W19A = '14w19a-snapshot';
	case JAVA_14W20A = '14w20a-snapshot';
	case JAVA_14W20B = '14w20b-snapshot';
	case JAVA_14W21A = '14w21a-snapshot';
	case JAVA_14W21B = '14w21b-snapshot';
	case JAVA_14W25A = '14w25a-snapshot';
	case JAVA_14W25B = '14w25b-snapshot';
	case JAVA_14W26A = '14w26a-snapshot';
	case JAVA_14W26B = '14w26b-snapshot';
	case JAVA_14W26C = '14w26c-snapshot';
	case JAVA_14W27A = '14w27a-snapshot';
	case JAVA_14W27B = '14w27b-snapshot';
	case JAVA_14W28A = '14w28a-snapshot';
	case JAVA_14W28B = '14w28b-snapshot';
	case JAVA_14W29A = '14w29a-snapshot';
	case JAVA_14W29B = '14w29b-snapshot';
	case JAVA_14W30A = '14w30a-snapshot';
	case JAVA_14W30B = '14w30b-snapshot';
	case JAVA_14W30C = '14w30c-snapshot';
	case JAVA_14W31A = '14w31a-snapshot';
	case JAVA_14W32A = '14w32a-snapshot';
	case JAVA_14W32B = '14w32b-snapshot';
	case JAVA_14W32C = '14w32c-snapshot';
	case JAVA_14W32D = '14w32d-snapshot';
	case JAVA_14W33A = '14w33a-snapshot';
	case JAVA_14W33B = '14w33b-snapshot';
	case JAVA_14W33C = '14w33c-snapshot';
	case JAVA_14W34A = '14w34a-snapshot';
	case JAVA_14W34B = '14w34b-snapshot';
	case JAVA_14W34C = '14w34c-snapshot';
	case JAVA_14W34D = '14w34d-snapshot';
	case JAVA_1_8_PRE_RELEASE1 = '1.8-pre1';
	case JAVA_1_8_PRE_RELEASE2 = '1.8-pre2';
	case JAVA_1_8_PRE_RELEASE3 = '1.8-pre3';
	case JAVA_1_8 = '1.8';
	case JAVA_1_8_1_PRE_RELEASE1 = '1.8.1-pre1';
	case JAVA_1_8_1_PRE_RELEASE2 = '1.8.1-pre2';
	case JAVA_1_8_1_PRE_RELEASE3 = '1.8.1-pre3';
	case JAVA_1_8_1_PRE_RELEASE4 = '1.8.1-pre4';
	case JAVA_1_8_1_PRE_RELEASE5 = '1.8.1-pre5';
	case JAVA_1_8_1 = '1.8.1';
	case JAVA_1_8_2_PRE_RELEASE1 = '1.8.2-pre1';
	case JAVA_1_8_2_PRE_RELEASE2 = '1.8.2-pre2';
	case JAVA_1_8_2_PRE_RELEASE3 = '1.8.2-pre3';
	case JAVA_1_8_2_PRE_RELEASE4 = '1.8.2-pre4';
	case JAVA_1_8_2_PRE_RELEASE5 = '1.8.2-pre5';
	case JAVA_1_8_2_PRE_RELEASE6 = '1.8.2-pre6';
	case JAVA_1_8_2_PRE_RELEASE7 = '1.8.2-pre7';
	case JAVA_1_8_2 = '1.8.2';
	case JAVA_1_8_3 = '1.8.3';
	case JAVA_1_8_4 = '1.8.4';
	case JAVA_1_8_5 = '1.8.5';
	case JAVA_1_8_6 = '1.8.6';
	case JAVA_1_8_7 = '1.8.7';
	case JAVA_1_8_8 = '1.8.8';
	case JAVA_1_8_9 = '1.8.9';
	case JAVA_15W31A = '15w31a-snapshot';
	case JAVA_15W31B = '15w31b-snapshot';
	case JAVA_15W31C = '15w31c-snapshot';
	case JAVA_15W32A = '15w32a-snapshot';
	case JAVA_15W32B = '15w32b-snapshot';
	case JAVA_15W32C = '15w32c-snapshot';
	case JAVA_15W33A = '15w33a-snapshot';
	case JAVA_15W33B = '15w33b-snapshot';
	case JAVA_15W33C = '15w33c-snapshot';
	case JAVA_15W34A = '15w34a-snapshot';
	case JAVA_15W34B = '15w34b-snapshot';
	case JAVA_15W34C = '15w34c-snapshot';
	case JAVA_15W34D = '15w34d-snapshot';
	case JAVA_15W35A = '15w35a-snapshot';
	case JAVA_15W35B = '15w35b-snapshot';
	case JAVA_15W35C = '15w35c-snapshot';
	case JAVA_15W35D = '15w35d-snapshot';
	case JAVA_15W35E = '15w35e-snapshot';
	case JAVA_15W36A = '15w36a-snapshot';
	case JAVA_15W36B = '15w36b-snapshot';
	case JAVA_15W36C = '15w36c-snapshot';
	case JAVA_15W36D = '15w36d-snapshot';
	case JAVA_15W37A = '15w37a-snapshot';
	case JAVA_15W38A = '15w38a-snapshot';
	case JAVA_15W38B = '15w38b-snapshot';
	case JAVA_15W39A = '15w39a-snapshot';
	case JAVA_15W39B = '15w39b-snapshot';
	case JAVA_15W39C = '15w39c-snapshot';
	case JAVA_15W40A = '15w40a-snapshot';
	case JAVA_15W40B = '15w40b-snapshot';
	case JAVA_15W41A = '15w41a-snapshot';
	case JAVA_15W41B = '15w41b-snapshot';
	case JAVA_15W42A = '15w42a-snapshot';
	case JAVA_15W43A = '15w43a-snapshot';
	case JAVA_15W43B = '15w43b-snapshot';
	case JAVA_15W43C = '15w43c-snapshot';
	case JAVA_15W44A = '15w44a-snapshot';
	case JAVA_15W44B = '15w44b-snapshot';
	case JAVA_15W45A = '15w45a-snapshot';
	case JAVA_15W46A = '15w46a-snapshot';
	case JAVA_15W47A = '15w47a-snapshot';
	case JAVA_15W47B = '15w47b-snapshot';
	case JAVA_15W47C = '15w47c-snapshot';
	case JAVA_15W49A = '15w49a-snapshot';
	case JAVA_15W49B = '15w49b-snapshot';
	case JAVA_15W50A = '15w50a-snapshot';
	case JAVA_15W51A = '15w51a-snapshot';
	case JAVA_15W51B = '15w51b-snapshot';
	case JAVA_16W02A = '16w02a-snapshot';
	case JAVA_16W03A = '16w03a-snapshot';
	case JAVA_16W04A = '16w04a-snapshot';
	case JAVA_16W05A = '16w05a-snapshot';
	case JAVA_16W05B = '16w05b-snapshot';
	case JAVA_16W06A = '16w06a-snapshot';
	case JAVA_16W07A = '16w07a-snapshot';
	case JAVA_16W07B = '16w07b-snapshot';
	case JAVA_1_9_PRE_RELEASE1 = '1.9-pre1';
	case JAVA_1_9_PRE_RELEASE2 = '1.9-pre2';
	case JAVA_1_9_PRE_RELEASE3 = '1.9-pre3';
	case JAVA_1_9_PRE_RELEASE4 = '1.9-pre4';
	case JAVA_1_9 = '1.9';
	case JAVA_1_9_1_PRE_RELEASE1 = '1.9.1-pre1';
	case JAVA_1_9_1_PRE_RELEASE2 = '1.9.1-pre2';
	case JAVA_1_9_1_PRE_RELEASE3 = '1.9.1-pre3';
	case JAVA_1_9_1 = '1.9.1';
	case JAVA_1_9_2 = '1.9.2';
	case JAVA_16W14A = '16w14a-snapshot';
	case JAVA_16W15A = '16w15a-snapshot';
	case JAVA_16W15B = '16w15b-snapshot';
	case JAVA_1_9_3_PRE_RELEASE1 = '1.9.3-pre1';
	case JAVA_1_9_3_PRE_RELEASE2 = '1.9.3-pre2';
	case JAVA_1_9_3_PRE_RELEASE3 = '1.9.3-pre3';
	case JAVA_1_9_3 = '1.9.3';
	case JAVA_1_9_4 = '1.9.4';
	case JAVA_16W20A = '16w20a-snapshot';
	case JAVA_16W21A = '16w21a-snapshot';
	case JAVA_16W21B = '16w21b-snapshot';
	case JAVA_1_10_PRE_RELEASE1 = '1.10-pre1';
	case JAVA_1_10_PRE_RELEASE2 = '1.10-pre2';
	case JAVA_1_10 = '1.10';
	case JAVA_1_10_1 = '1.10.1';
	case JAVA_1_10_2 = '1.10.2';
	case JAVA_16W32A = '16w32a-snapshot';
	case JAVA_16W32B = '16w32b-snapshot';
	case JAVA_16W33A = '16w33a-snapshot';
	case JAVA_16W35A = '16w35a-snapshot';
	case JAVA_16W36A = '16w36a-snapshot';
	case JAVA_16W38A = '16w38a-snapshot';
	case JAVA_16W39A = '16w39a-snapshot';
	case JAVA_16W39B = '16w39b-snapshot';
	case JAVA_16W39C = '16w39c-snapshot';
	case JAVA_16W40A = '16w40a-snapshot';
	case JAVA_16W41A = '16w41a-snapshot';
	case JAVA_16W42A = '16w42a-snapshot';
	case JAVA_16W43A = '16w43a-snapshot';
	case JAVA_16W44A = '16w44a-snapshot';
	case JAVA_1_11_PRE_RELEASE1 = '1.11-pre1';
	case JAVA_1_11 = '1.11';
	case JAVA_16W50A = '16w50a-snapshot';
	case JAVA_1_11_1 = '1.11.1';
	case JAVA_1_11_2 = '1.11.2';
	case JAVA_17W06A = '17w06a-snapshot';
	case JAVA_17W13A = '17w13a-snapshot';
	case JAVA_17W13B = '17w13b-snapshot';
	case JAVA_17W14A = '17w14a-snapshot';
	case JAVA_17W15A = '17w15a-snapshot';
	case JAVA_17W16A = '17w16a-snapshot';
	case JAVA_17W16B = '17w16b-snapshot';
	case JAVA_17W17A = '17w17a-snapshot';
	case JAVA_17W17B = '17w17b-snapshot';
	case JAVA_17W18A = '17w18a-snapshot';
	case JAVA_17W18B = '17w18b-snapshot';
	case JAVA_1_12_PRE_RELEASE1 = '1.12-pre1';
	case JAVA_1_12_PRE_RELEASE2 = '1.12-pre2';
	case JAVA_1_12_PRE_RELEASE3 = '1.12-pre3';
	case JAVA_1_12_PRE_RELEASE4 = '1.12-pre4';
	case JAVA_1_12_PRE_RELEASE5 = '1.12-pre5';
	case JAVA_1_12_PRE_RELEASE6 = '1.12-pre6';
	case JAVA_1_12_PRE_RELEASE7 = '1.12-pre7';
	case JAVA_1_12 = '1.12';
	case JAVA_17W31A = '17w31a-snapshot';
	case JAVA_1_12_1_PRE_RELEASE1 = '1.12.1-pre1';
	case JAVA_1_12_1 = '1.12.1';
	case JAVA_1_12_2_PRE_RELEASE1 = '1.12.2-pre1';
	case JAVA_1_12_2_PRE_RELEASE2 = '1.12.2-pre2';
	case JAVA_1_12_2 = '1.12.2';
	case JAVA_17W43A = '17w43a-snapshot';
	case JAVA_17W43B = '17w43b-snapshot';
	case JAVA_17W45A = '17w45a-snapshot';
	case JAVA_17W45B = '17w45b-snapshot';
	case JAVA_17W46A = '17w46a-snapshot';
	case JAVA_17W47A = '17w47a-snapshot';
	case JAVA_17W47B = '17w47b-snapshot';
	case JAVA_17W48A = '17w48a-snapshot';
	case JAVA_17W49A = '17w49a-snapshot';
	case JAVA_17W49B = '17w49b-snapshot';
	case JAVA_17W50A = '17w50a-snapshot';
	case JAVA_18W01A = '18w01a-snapshot';
	case JAVA_18W02A = '18w02a-snapshot';
	case JAVA_18W03A = '18w03a-snapshot';
	case JAVA_18W03B = '18w03b-snapshot';
	case JAVA_18W05A = '18w05a-snapshot';
	case JAVA_18W06A = '18w06a-snapshot';
	case JAVA_18W07A = '18w07a-snapshot';
	case JAVA_18W07B = '18w07b-snapshot';
	case JAVA_18W07C = '18w07c-snapshot';
	case JAVA_18W08A = '18w08a-snapshot';
	case JAVA_18W08B = '18w08b-snapshot';
	case JAVA_18W09A = '18w09a-snapshot';
	case JAVA_18W10A = '18w10a-snapshot';
	case JAVA_18W10B = '18w10b-snapshot';
	case JAVA_18W10C = '18w10c-snapshot';
	case JAVA_18W10D = '18w10d-snapshot';
	case JAVA_18W11A = '18w11a-snapshot';
	case JAVA_18W14A = '18w14a-snapshot';
	case JAVA_18W14B = '18w14b-snapshot';
	case JAVA_18W15A = '18w15a-snapshot';
	case JAVA_18W16A = '18w16a-snapshot';
	case JAVA_18W19A = '18w19a-snapshot';
	case JAVA_18W19B = '18w19b-snapshot';
	case JAVA_18W20A = '18w20a-snapshot';
	case JAVA_18W20B = '18w20b-snapshot';
	case JAVA_18W20C = '18w20c-snapshot';
	case JAVA_18W21A = '18w21a-snapshot';
	case JAVA_18W21B = '18w21b-snapshot';
	case JAVA_18W22A = '18w22a-snapshot';
	case JAVA_18W22B = '18w22b-snapshot';
	case JAVA_18W22C = '18w22c-snapshot';
	case JAVA_1_13_PRE_RELEASE1 = '1.13-pre1';
	case JAVA_1_13_PRE_RELEASE2 = '1.13-pre2';
	case JAVA_1_13_PRE_RELEASE3 = '1.13-pre3';
	case JAVA_1_13_PRE_RELEASE4 = '1.13-pre4';
	case JAVA_1_13_PRE_RELEASE5 = '1.13-pre5';
	case JAVA_1_13_PRE_RELEASE6 = '1.13-pre6';
	case JAVA_1_13_PRE_RELEASE7 = '1.13-pre7';
	case JAVA_1_13_PRE_RELEASE8 = '1.13-pre8';
	case JAVA_1_13_PRE_RELEASE9 = '1.13-pre9';
	case JAVA_1_13_PRE_RELEASE10 = '1.13-pre10';
	case JAVA_1_13 = '1.13';
	case JAVA_18W30A = '18w30a-snapshot';
	case JAVA_18W30B = '18w30b-snapshot';
	case JAVA_18W31A = '18w31a-snapshot';
	case JAVA_18W32A = '18w32a-snapshot';
	case JAVA_18W33A = '18w33a-snapshot';
	case JAVA_1_13_1_PRE_RELEASE1 = '1.13.1-pre1';
	case JAVA_1_13_1_PRE_RELEASE2 = '1.13.1-pre2';
	case JAVA_1_13_1 = '1.13.1';
	case JAVA_1_13_2_PRE_RELEASE1 = '1.13.2-pre1';
	case JAVA_1_13_2_PRE_RELEASE2 = '1.13.2-pre2';
	case JAVA_1_13_2 = '1.13.2';
	case JAVA_18W43A = '18w43a-snapshot';
	case JAVA_18W43B = '18w43b-snapshot';
	case JAVA_18W43C = '18w43c-snapshot';
	case JAVA_18W44A = '18w44a-snapshot';
	case JAVA_18W45A = '18w45a-snapshot';
	case JAVA_18W46A = '18w46a-snapshot';
	case JAVA_18W47A = '18w47a-snapshot';
	case JAVA_18W47B = '18w47b-snapshot';
	case JAVA_18W48A = '18w48a-snapshot';
	case JAVA_18W48B = '18w48b-snapshot';
	case JAVA_18W49A = '18w49a-snapshot';
	case JAVA_18W50A = '18w50a-snapshot';
	case JAVA_19W02A = '19w02a-snapshot';
	case JAVA_19W03A = '19w03a-snapshot';
	case JAVA_19W03B = '19w03b-snapshot';
	case JAVA_19W03C = '19w03c-snapshot';
	case JAVA_19W04A = '19w04a-snapshot';
	case JAVA_19W04B = '19w04b-snapshot';
	case JAVA_19W05A = '19w05a-snapshot';
	case JAVA_19W06A = '19w06a-snapshot';
	case JAVA_19W07A = '19w07a-snapshot';
	case JAVA_19W08A = '19w08a-snapshot';
	case JAVA_19W08B = '19w08b-snapshot';
	case JAVA_19W09A = '19w09a-snapshot';
	case JAVA_19W11A = '19w11a-snapshot';
	case JAVA_19W11B = '19w11b-snapshot';
	case JAVA_19W12A = '19w12a-snapshot';
	case JAVA_19W12B = '19w12b-snapshot';
	case JAVA_19W13A = '19w13a-snapshot';
	case JAVA_19W13B = '19w13b-snapshot';
	case JAVA_19W14A = '19w14a-snapshot';
	case JAVA_19W14B = '19w14b-snapshot';
	case JAVA_1_14_PRE_RELEASE1 = '1.14-pre1';
	case JAVA_1_14_PRE_RELEASE2 = '1.14-pre2';
	case JAVA_1_14_PRE_RELEASE3 = '1.14-pre3';
	case JAVA_1_14_PRE_RELEASE4 = '1.14-pre4';
	case JAVA_1_14_PRE_RELEASE5 = '1.14-pre5';
	case JAVA_1_14 = '1.14';
	case JAVA_1_14_1_PRE_RELEASE1 = '1.14.1-pre1';
	case JAVA_1_14_1_PRE_RELEASE2 = '1.14.1-pre2';
	case JAVA_1_14_1 = '1.14.1';
	case JAVA_1_14_2_PRE_RELEASE1 = '1.14.2-pre1';
	case JAVA_1_14_2_PRE_RELEASE2 = '1.14.2-pre2';
	case JAVA_1_14_2_PRE_RELEASE3 = '1.14.2-pre3';
	case JAVA_1_14_2_PRE_RELEASE4 = '1.14.2-pre4';
	case JAVA_1_14_2 = '1.14.2';
	case JAVA_1_14_3_PRE_RELEASE1 = '1.14.3-pre1';
	case JAVA_1_14_3_PRE_RELEASE2 = '1.14.3-pre2';
	case JAVA_1_14_3_PRE_RELEASE3 = '1.14.3-pre3';
	case JAVA_1_14_3_PRE_RELEASE4 = '1.14.3-pre4';
	case JAVA_1_14_3 = '1.14.3';
	case JAVA_1_14_4_PRE_RELEASE1 = '1.14.4-pre1';
	case JAVA_1_14_4_PRE_RELEASE2 = '1.14.4-pre2';
	case JAVA_1_14_4_PRE_RELEASE3 = '1.14.4-pre3';
	case JAVA_1_14_4_PRE_RELEASE4 = '1.14.4-pre4';
	case JAVA_1_14_4_PRE_RELEASE5 = '1.14.4-pre5';
	case JAVA_1_14_4_PRE_RELEASE6 = '1.14.4-pre6';
	case JAVA_1_14_4_PRE_RELEASE7 = '1.14.4-pre7';
	case JAVA_1_14_4 = '1.14.4';
	case JAVA_1_14_3_COMBAT_TEST = '1.14.3-combat-test';
	case JAVA_COMBAT_TEST2 = 'Combat Test 2-combat-test2';
	case JAVA_COMBAT_TEST3 = 'Combat Test 3-combat-test3';
	case JAVA_19W34A = '19w34a-snapshot';
	case JAVA_19W35A = '19w35a-snapshot';
	case JAVA_19W36A = '19w36a-snapshot';
	case JAVA_19W37A = '19w37a-snapshot';
	case JAVA_19W38A = '19w38a-snapshot';
	case JAVA_19W38B = '19w38b-snapshot';
	case JAVA_19W39A = '19w39a-snapshot';
	case JAVA_19W40A = '19w40a-snapshot';
	case JAVA_19W41A = '19w41a-snapshot';
	case JAVA_19W42A = '19w42a-snapshot';
	case JAVA_19W44A = '19w44a-snapshot';
	case JAVA_19W45A = '19w45a-snapshot';
	case JAVA_19W45B = '19w45b-snapshot';
	case JAVA_19W46A = '19w46a-snapshot';
	case JAVA_19W46B = '19w46b-snapshot';
	case JAVA_1_15_PRE_RELEASE1 = '1.15-pre1';
	case JAVA_1_15_PRE_RELEASE2 = '1.15-pre2';
	case JAVA_1_15_PRE_RELEASE3 = '1.15-pre3';
	case JAVA_1_15_PRE_RELEASE4 = '1.15-pre4';
	case JAVA_1_15_PRE_RELEASE5 = '1.15-pre5';
	case JAVA_1_15_PRE_RELEASE6 = '1.15-pre6';
	case JAVA_1_15_PRE_RELEASE7 = '1.15-pre7';
	case JAVA_1_15 = '1.15';
	case JAVA_1_15_1_PRE_RELEASE1 = '1.15.1-pre1';
	case JAVA_1_15_1 = '1.15.1';
	case JAVA_1_15_2_PRE_RELEASE1 = '1.15.2-pre1';
	case JAVA_1_15_2_PRE_RELEASE2 = '1.15.2-pre2';
	case JAVA_1_15_2 = '1.15.2';
	case JAVA_COMBAT_TEST4 = 'Combat Test 4-combat-test4';
	case JAVA_COMBAT_TEST5 = 'Combat Test 5-combat-test5';
	case JAVA_SNAPSHOT_20W06A = '20w06a-snapshot';
	case JAVA_20W07A = '20w07a-snapshot';
	case JAVA_20W08A = '20w08a-snapshot';
	case JAVA_20W09A = '20w09a-snapshot';
	case JAVA_20W10A = '20w10a-snapshot';
	case JAVA_20W11A = '20w11a-snapshot';
	case JAVA_20W12A = '20w12a-snapshot';
	case JAVA_20W13A = '20w13a-snapshot';
	case JAVA_20W13B = '20w13b-snapshot';
	case JAVA_20W14A = '20w14a-snapshot';
	case JAVA_20W15A = '20w15a-snapshot';
	case JAVA_20W16A = '20w16a-snapshot';
	case JAVA_20W17A = '20w17a-snapshot';
	case JAVA_20W18A = '20w18a-snapshot';
	case JAVA_20W19A = '20w19a-snapshot';
	case JAVA_20W20A = '20w20a-snapshot';
	case JAVA_20W20B = '20w20b-snapshot';
	case JAVA_20W21A = '20w21a-snapshot';
	case JAVA_20W22A = '20w22a-snapshot';
	case JAVA_1_16_PRE_RELEASE1 = '1.16-pre1';
	case JAVA_1_16_PRE_RELEASE2 = '1.16-pre2';
	case JAVA_1_16_PRE_RELEASE3 = '1.16-pre3';
	case JAVA_1_16_PRE_RELEASE4 = '1.16-pre4';
	case JAVA_1_16_PRE_RELEASE5 = '1.16-pre5';
	case JAVA_1_16_PRE_RELEASE6 = '1.16-pre6';
	case JAVA_1_16_PRE_RELEASE7 = '1.16-pre7';
	case JAVA_1_16_PRE_RELEASE8 = '1.16-pre8';
	case JAVA_1_16_RELEASE_CANDIDATE1 = '1.16-rc1';
	case JAVA_1_16 = '1.16';
	case JAVA_1_16_1 = '1.16.1';
	case JAVA_20W27A = '20w27a-snapshot';
	case JAVA_20W28A = '20w28a-snapshot';
	case JAVA_20W29A = '20w29a-snapshot';
	case JAVA_20W30A = '20w30a-snapshot';
	case JAVA_1_16_2_PRE_RELEASE1 = '1.16.2-pre1';
	case JAVA_1_16_2_PRE_RELEASE2 = '1.16.2-pre2';
	case JAVA_1_16_2_PRE_RELEASE3 = '1.16.2-pre3';
	case JAVA_1_16_2_RELEASE_CANDIDATE1 = '1.16.2-rc1';
	case JAVA_1_16_2_RELEASE_CANDIDATE2 = '1.16.2-rc2';
	case JAVA_1_16_2 = '1.16.2';
	case JAVA_1_16_3_RELEASE_CANDIDATE1 = '1.16.3-rc1';
	case JAVA_1_16_3 = '1.16.3';
	case JAVA_1_16_4_PRE_RELEASE1 = '1.16.4-pre1';
	case JAVA_1_16_4_PRE_RELEASE2 = '1.16.4-pre2';
	case JAVA_1_16_4_RELEASE_CANDIDATE1 = '1.16.4-rc1';
	case JAVA_1_16_4 = '1.16.4';
	case JAVA_1_16_5_RELEASE_CANDIDATE1 = '1.16.5-rc1';
	case JAVA_1_16_5 = '1.16.5';
	case JAVA_COMBAT_TEST6 = 'Combat Test 6-combat-test6';
	case JAVA_COMBAT_TEST7 = 'Combat Test 7-combat-test7';
	case JAVA_COMBAT_TEST7B = 'Combat Test 7b-combat-test7';
	case JAVA_COMBAT_TEST7C = 'Combat Test 7c-combat-test7';
	case JAVA_COMBAT_TEST8 = 'Combat Test 8-combat-test8';
	case JAVA_COMBAT_TEST8B = 'Combat Test 8b-combat-test8';
	case JAVA_COMBAT_TEST8C = 'Combat Test 8c-combat-test8';
	case JAVA_20W45A = '20w45a-snapshot';
	case JAVA_20W46A = '20w46a-snapshot';
	case JAVA_20W48A = '20w48a-snapshot';
	case JAVA_20W49A = '20w49a-snapshot';
	case JAVA_20W51A = '20w51a-snapshot';
	case JAVA_21W03A = '21w03a-snapshot';
	case JAVA_21W05A = '21w05a-snapshot';
	case JAVA_21W05B = '21w05b-snapshot';
	case JAVA_21W06A = '21w06a-snapshot';
	case JAVA_21W07A = '21w07a-snapshot';
	case JAVA_21W08A = '21w08a-snapshot';
	case JAVA_21W08B = '21w08b-snapshot';
	case JAVA_21W10A = '21w10a-snapshot';
	case JAVA_21W11A = '21w11a-snapshot';
	case JAVA_21W13A = '21w13a-snapshot';
	case JAVA_21W14A = '21w14a-snapshot';
	case JAVA_21W15A = '21w15a-snapshot';
	case JAVA_21W16A = '21w16a-snapshot';
	case JAVA_21W17A = '21w17a-snapshot';
	case JAVA_21W18A = '21w18a-snapshot';
	case JAVA_21W19A = '21w19a-snapshot';
	case JAVA_21W20A = '21w20a-snapshot';
	case JAVA_1_17_PRE_RELEASE1 = '1.17-pre1';
	case JAVA_1_17_PRE_RELEASE2 = '1.17-pre2';
	case JAVA_1_17_PRE_RELEASE3 = '1.17-pre3';
	case JAVA_1_17_PRE_RELEASE4 = '1.17-pre4';
	case JAVA_1_17_PRE_RELEASE5 = '1.17-pre5';
	case JAVA_1_17_RELEASE_CANDIDATE1 = '1.17-rc1';
	case JAVA_1_17_RELEASE_CANDIDATE2 = '1.17-rc2';
	case JAVA_1_17 = '1.17';
	case JAVA_1_17_1_PRE_RELEASE1 = '1.17.1-pre1';
	case JAVA_1_17_1_PRE_RELEASE2 = '1.17.1-pre2';
	case JAVA_1_17_1_PRE_RELEASE3 = '1.17.1-pre3';
	case JAVA_1_17_1_RELEASE_CANDIDATE1 = '1.17.1-rc1';
	case JAVA_1_17_1_RELEASE_CANDIDATE2 = '1.17.1-rc2';
	case JAVA_1_17_1 = '1.17.1';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_1 = '1.18-experimental-snapshot1';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_2 = '1.18-experimental-snapshot2';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_3 = '1.18-experimental-snapshot3';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_4 = '1.18-experimental-snapshot4';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_5 = '1.18-experimental-snapshot5';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_6 = '1.18-experimental-snapshot6';
	case JAVA_1_18_EXPERIMENTAL_SNAPSHOT_7 = '1.18-experimental-snapshot7';
	case JAVA_21W37A = '21w37a-snapshot';
	case JAVA_21W38A = '21w38a-snapshot';
	case JAVA_21W39A = '21w39a-snapshot';
	case JAVA_21W40A = '21w40a-snapshot';
	case JAVA_21W41A = '21w41a-snapshot';
	case JAVA_21W42A = '21w42a-snapshot';
	case JAVA_21W43A = '21w43a-snapshot';
	case JAVA_21W44A = '21w44a-snapshot';
	case JAVA_1_18_PRE_RELEASE1 = '1.18-pre1';
	case JAVA_1_18_PRE_RELEASE2 = '1.18-pre2';
	case JAVA_1_18_PRE_RELEASE3 = '1.18-pre3';
	case JAVA_1_18_PRE_RELEASE4 = '1.18-pre4';
	case JAVA_1_18_PRE_RELEASE5 = '1.18-pre5';
	case JAVA_1_18_PRE_RELEASE6 = '1.18-pre6';
	case JAVA_1_18_PRE_RELEASE7 = '1.18-pre7';
	case JAVA_1_18_PRE_RELEASE8 = '1.18-pre8';
	case JAVA_1_18_RELEASE_CANDIDATE1 = '1.18-rc1';
	case JAVA_1_18_RELEASE_CANDIDATE2 = '1.18-rc2';
	case JAVA_1_18_RELEASE_CANDIDATE3 = '1.18-rc3';
	case JAVA_1_18_RELEASE_CANDIDATE4 = '1.18-rc4';
	case JAVA_1_18 = '1.18';
	case JAVA_1_18_1_PRE_RELEASE1 = '1.18.1-pre1';
	case JAVA_1_18_1_RELEASE_CANDIDATE1 = '1.18.1-rc1';
	case JAVA_1_18_1_RELEASE_CANDIDATE2 = '1.18.1-rc2';
	case JAVA_1_18_1_RELEASE_CANDIDATE3 = '1.18.1-rc3';
	case JAVA_1_18_1 = '1.18.1';
	case JAVA_22W03A = '22w03a-snapshot';
	case JAVA_22W05A = '22w05a-snapshot';
	case JAVA_22W06A = '22w06a-snapshot';
	case JAVA_22W07A = '22w07a-snapshot';
	case JAVA_1_18_2_PRE_RELEASE1 = '1.18.2-pre1';
	case JAVA_1_18_2_PRE_RELEASE2 = '1.18.2-pre2';
	case JAVA_1_18_2_PRE_RELEASE3 = '1.18.2-pre3';
	case JAVA_1_18_2_RELEASE_CANDIDATE1 = '1.18.2-rc1';
	case JAVA_1_18_2 = '1.18.2';
	case JAVA_DEEP_DARK_EXPERIMENTAL_SNAPSHOT_1 = 'Deep Dark Experimental Snapshot 1-experimental-snapshot1';
	case JAVA_22W11A = '22w11a-snapshot';
	case JAVA_22W12A = '22w12a-snapshot';
	case JAVA_22W13A = '22w13a-snapshot';
	case JAVA_22W14A = '22w14a-snapshot';
	case JAVA_22W15A = '22w15a-snapshot';
	case JAVA_22W16A = '22w16a-snapshot';
	case JAVA_22W16B = '22w16b-snapshot';
	case JAVA_22W17A = '22w17a-snapshot';
	case JAVA_22W18A = '22w18a-snapshot';
	case JAVA_22W19A = '22w19a-snapshot';
	case JAVA_1_19_PRE_RELEASE1 = '1.19-pre1';
	case JAVA_1_19_PRE_RELEASE2 = '1.19-pre2';
	case JAVA_1_19_PRE_RELEASE3 = '1.19-pre3';
	case JAVA_1_19_PRE_RELEASE4 = '1.19-pre4';
	case JAVA_1_19_PRE_RELEASE5 = '1.19-pre5';
	case JAVA_1_19_RELEASE_CANDIDATE1 = '1.19-rc1';
	case JAVA_1_19_RELEASE_CANDIDATE2 = '1.19-rc2';
	case JAVA_1_19 = '1.19';
	case JAVA_22W24A = '22w24a-snapshot';
	case JAVA_1_19_1_PRE_RELEASE1 = '1.19.1-pre1';
	case JAVA_1_19_1_RELEASE_CANDIDATE1 = '1.19.1-rc1';
	case JAVA_1_19_1_PRE_RELEASE2 = '1.19.1-pre2';
	case JAVA_1_19_1_PRE_RELEASE3 = '1.19.1-pre3';
	case JAVA_1_19_1_PRE_RELEASE4 = '1.19.1-pre4';
	case JAVA_1_19_1_PRE_RELEASE5 = '1.19.1-pre5';
	case JAVA_1_19_1_PRE_RELEASE6 = '1.19.1-pre6';
	case JAVA_1_19_1_RELEASE_CANDIDATE2 = '1.19.1-rc2';
	case JAVA_1_19_1_RELEASE_CANDIDATE3 = '1.19.1-rc3';
	case JAVA_1_19_1 = '1.19.1';
	case JAVA_1_19_2_RELEASE_CANDIDATE1 = '1.19.2-rc1';
	case JAVA_1_19_2_RELEASE_CANDIDATE2 = '1.19.2-rc2';
	case JAVA_1_19_2 = '1.19.2';
	case JAVA_22W42A = '22w42a-snapshot';
	case JAVA_22W43A = '22w43a-snapshot';
	case JAVA_22W44A = '22w44a-snapshot';
	case JAVA_22W45A = '22w45a-snapshot';
	case JAVA_22W46A = '22w46a-snapshot';
	case JAVA_1_19_3_PRE_RELEASE1 = '1.19.3-pre1';
	case JAVA_1_19_3_PRE_RELEASE2 = '1.19.3-pre2';
	case JAVA_1_19_3_PRE_RELEASE3 = '1.19.3-pre3';
	case JAVA_1_19_3_RELEASE_CANDIDATE1 = '1.19.3-rc1';
	case JAVA_1_19_3_RELEASE_CANDIDATE2 = '1.19.3-rc2';
	case JAVA_1_19_3_RELEASE_CANDIDATE3 = '1.19.3-rc3';
	case JAVA_1_19_3 = '1.19.3';
	case JAVA_23W03A = '23w03a-snapshot';
	case JAVA_23W04A = '23w04a-snapshot';
	case JAVA_23W05A = '23w05a-snapshot';
	case JAVA_23W06A = '23w06a-snapshot';
	case JAVA_23W07A = '23w07a-snapshot';
	case JAVA_1_19_4_PRE_RELEASE1 = '1.19.4-pre1';
	case JAVA_1_19_4_PRE_RELEASE2 = '1.19.4-pre2';
	case JAVA_1_19_4_PRE_RELEASE3 = '1.19.4-pre3';
	case JAVA_1_19_4_PRE_RELEASE4 = '1.19.4-pre4';
	case JAVA_1_19_4_RELEASE_CANDIDATE1 = '1.19.4-rc1';
	case JAVA_1_19_4_RELEASE_CANDIDATE2 = '1.19.4-rc2';
	case JAVA_1_19_4_RELEASE_CANDIDATE3 = '1.19.4-rc3';
	case JAVA_1_19_4 = '1.19.4';
	case JAVA_23W12A = '23w12a-snapshot';
	case JAVA_23W13A = '23w13a-snapshot';
	case JAVA_23W14A = '23w14a-snapshot';
	case JAVA_23W16A = '23w16a-snapshot';
	case JAVA_23W17A = '23w17a-snapshot';
	case JAVA_23W18A = '23w18a-snapshot';
	case JAVA_1_20_PRE_RELEASE1 = '1.20-pre1';
	case JAVA_1_20_PRE_RELEASE2 = '1.20-pre2';
	case JAVA_1_20_PRE_RELEASE3 = '1.20-pre3';
	case JAVA_1_20_PRE_RELEASE4 = '1.20-pre4';
	case JAVA_1_20_PRE_RELEASE5 = '1.20-pre5';
	case JAVA_1_20_PRE_RELEASE6 = '1.20-pre6';
	case JAVA_1_20_PRE_RELEASE7 = '1.20-pre7';
	case JAVA_1_20_RELEASE_CANDIDATE1 = '1.20-rc1';
	case JAVA_1_20 = '1.20';
	case JAVA_1_20_1_RELEASE_CANDIDATE1 = '1.20.1-rc1';
	case JAVA_1_20_1 = '1.20.1';

	public function getVersionValue(): string
	{
		return $this->value;
	}


	public function getUnknownVersion(): self
	{
		return self::Unknown;
	}


	public function isUnknown(): bool
	{
		return $this === self::Unknown;
	}
}
