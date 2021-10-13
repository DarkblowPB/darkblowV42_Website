<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Redeemcodemanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Generate Code 2
     * 
     * This Function Will Generate You 19 Digits Item Code. (Private Build)
     * 
     * @return item_code
     * @copyright Darkblow Studio
     */
    function GenerateCode2()
    {
        $response = array();

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $separator = '-';
        $prefix = 'DARK';
        $postfix = 'BLOW';

        $length = array(
            'characters_length' => strlen($characters),
            'code' => 19,
            'serial_number' => 4
        );

        $pure_code = array(
            'part_1' => '',
            'part_2' => ''
        );

        for ($i=0; $i < $length['serial_number']; $i++)
        {
            $pure_code['part_1'] .= $characters[rand(0, $length['characters_length'] - 1)];
        }

        for ($i=0; $i < $length['serial_number']; $i++)
        {
            $pure_code['part_2'] .= $characters[rand(0, $length['characters_length'] - 1)];
        }

        $response['code'] = $prefix.$separator.$pure_code['part_1'].$separator.$pure_code['part_2'].$separator.$postfix;

        echo json_encode($response);
    }

    /**
     * Generate Code
     * 
     * This Function Will Be Randomize The Item Code Based On $code_list Dictionary.
     * 
     * The Limit Of Dictionary is up to 999.999.999 Code, You Can Changes The Code As You Wish.
     * 
     * You Can Generate Your Own Code At https://www.voucherify.io/generator
     * 
     * @return string
     * @link https://www.voucherify.io/generator
     * @copyright Darkblow Studio
     */
    function GenerateCode()
    {
        $response = array();

        $randomize = rand(0, 999);

        $code_list = array(
            0	=>'DARK-H9LN-KZNW-BLOW',
            1	=>'DARK-X7DB-9DE6-BLOW',
            2	=>'DARK-RW4G-75ZV-BLOW',
            3	=>'DARK-YXEZ-UUEL-BLOW',
            4	=>'DARK-SEDI-KSJO-BLOW',
            5	=>'DARK-HVY7-APEP-BLOW',
            6	=>'DARK-416H-79ZI-BLOW',
            7	=>'DARK-3KWB-Z2SU-BLOW',
            8	=>'DARK-02BI-0T8D-BLOW',
            9	=>'DARK-27FD-W0NX-BLOW',
            10	=>'DARK-T5W2-AB0D-BLOW',
            11	=>'DARK-5GNK-UT8J-BLOW',
            12	=>'DARK-IME1-LZM9-BLOW',
            13	=>'DARK-FFFW-JCYN-BLOW',
            14	=>'DARK-K14P-NGYR-BLOW',
            15	=>'DARK-OM4S-1LB3-BLOW',
            16	=>'DARK-UTUF-QHZD-BLOW',
            17	=>'DARK-MEN3-MQ9H-BLOW',
            18	=>'DARK-0RRN-HU7V-BLOW',
            19	=>'DARK-C5UU-7P3O-BLOW',
            20	=>'DARK-LCHI-CK5T-BLOW',
            21	=>'DARK-N75B-YF5T-BLOW',
            22	=>'DARK-LZVS-AHQ1-BLOW',
            23	=>'DARK-D6FV-V0H0-BLOW',
            24	=>'DARK-VTED-OOVG-BLOW',
            25	=>'DARK-5MTR-07CC-BLOW',
            26	=>'DARK-P9P8-UKW9-BLOW',
            27	=>'DARK-UK90-T6U6-BLOW',
            28	=>'DARK-ZY9V-XDX7-BLOW',
            29	=>'DARK-8GF6-PCI5-BLOW',
            30	=>'DARK-XQ1X-EWP9-BLOW',
            31	=>'DARK-OXAW-36P5-BLOW',
            32	=>'DARK-1UQO-MU3T-BLOW',
            33	=>'DARK-AN7K-2EEK-BLOW',
            34	=>'DARK-TVCN-VTEL-BLOW',
            35	=>'DARK-I173-KR0V-BLOW',
            36	=>'DARK-1HCY-R5YO-BLOW',
            37	=>'DARK-GH09-XZZO-BLOW',
            38	=>'DARK-L9A5-0NZL-BLOW',
            39	=>'DARK-O6JM-T5HM-BLOW',
            40	=>'DARK-MXQ0-5HN6-BLOW',
            41	=>'DARK-NJ1U-YPK0-BLOW',
            42	=>'DARK-87Q2-1S95-BLOW',
            43	=>'DARK-F3FV-MWLS-BLOW',
            44	=>'DARK-IPL7-161I-BLOW',
            45	=>'DARK-KM1V-9EBG-BLOW',
            46	=>'DARK-4I1A-S8HA-BLOW',
            47	=>'DARK-86SW-QW54-BLOW',
            48	=>'DARK-RDSX-H50A-BLOW',
            49	=>'DARK-56YW-PADD-BLOW',
            50	=>'DARK-RGC0-5CZA-BLOW',
            51	=>'DARK-NKIU-RK8Z-BLOW',
            52	=>'DARK-MY4D-BLRS-BLOW',
            53	=>'DARK-GRV9-CIKR-BLOW',
            54	=>'DARK-U3Y1-6BTL-BLOW',
            55	=>'DARK-NXI0-6ODQ-BLOW',
            56	=>'DARK-U23L-ZVR2-BLOW',
            57	=>'DARK-LVWJ-BH3L-BLOW',
            58	=>'DARK-XEM5-BF24-BLOW',
            59	=>'DARK-2I1X-XPKH-BLOW',
            60	=>'DARK-1OUC-OLRC-BLOW',
            61	=>'DARK-ETFV-VMCH-BLOW',
            62	=>'DARK-H9FN-Z15V-BLOW',
            63	=>'DARK-0740-2T33-BLOW',
            64	=>'DARK-YZZ8-SV63-BLOW',
            65	=>'DARK-S3N6-O3NJ-BLOW',
            66	=>'DARK-RMXA-11VC-BLOW',
            67	=>'DARK-0PM2-QVEF-BLOW',
            68	=>'DARK-CGUA-YUOF-BLOW',
            69	=>'DARK-UC9W-9C5O-BLOW',
            70	=>'DARK-FZYE-RT2Z-BLOW',
            71	=>'DARK-ZOSO-4YCV-BLOW',
            72	=>'DARK-ZYNL-C8YU-BLOW',
            73	=>'DARK-FLG9-8SE7-BLOW',
            74	=>'DARK-895N-1CP5-BLOW',
            75	=>'DARK-JTVT-9UP0-BLOW',
            76	=>'DARK-NZK8-M5WJ-BLOW',
            77	=>'DARK-BL63-90SQ-BLOW',
            78	=>'DARK-HQ9B-EPUA-BLOW',
            79	=>'DARK-GGO7-G9XD-BLOW',
            80	=>'DARK-0NYZ-PG81-BLOW',
            81	=>'DARK-CABO-5449-BLOW',
            82	=>'DARK-SA6P-G9GD-BLOW',
            83	=>'DARK-8CS3-K8NU-BLOW',
            84	=>'DARK-UV6I-JYCU-BLOW',
            85	=>'DARK-X4YR-R3SN-BLOW',
            86	=>'DARK-GD61-HUMC-BLOW',
            87	=>'DARK-W9ZY-L7P4-BLOW',
            88	=>'DARK-IZ1Q-OYWX-BLOW',
            89	=>'DARK-WWPI-9DR0-BLOW',
            90	=>'DARK-S0QG-QOQ2-BLOW',
            91	=>'DARK-ROLN-QXFE-BLOW',
            92	=>'DARK-K19V-8U6X-BLOW',
            93	=>'DARK-CNML-9LCR-BLOW',
            94	=>'DARK-0JFJ-9J83-BLOW',
            95	=>'DARK-SNSK-QN1P-BLOW',
            96	=>'DARK-O5MU-VH6R-BLOW',
            97	=>'DARK-U1PX-9PCK-BLOW',
            98	=>'DARK-VQIE-A2PQ-BLOW',
            99	=>'DARK-03VX-YR7H-BLOW',
            100	=>'DARK-C523-PMEW-BLOW',
            101	=>'DARK-S0N9-NL3R-BLOW',
            102	=>'DARK-SRJC-PP9B-BLOW',
            103	=>'DARK-O8UE-8IR5-BLOW',
            104	=>'DARK-L3QJ-HJAJ-BLOW',
            105	=>'DARK-CCKQ-9UFL-BLOW',
            106	=>'DARK-83WU-7LGS-BLOW',
            107	=>'DARK-5Q8H-R2Y9-BLOW',
            108	=>'DARK-MXRK-G9JH-BLOW',
            109	=>'DARK-XKZG-SAFG-BLOW',
            110	=>'DARK-6OY7-6A77-BLOW',
            111	=>'DARK-99A5-SKXX-BLOW',
            112	=>'DARK-LILL-1KMM-BLOW',
            113	=>'DARK-80VP-ER74-BLOW',
            114	=>'DARK-ETJL-M045-BLOW',
            115	=>'DARK-7P2R-SMB4-BLOW',
            116	=>'DARK-AGHZ-9K4J-BLOW',
            117	=>'DARK-FK10-QK6Z-BLOW',
            118	=>'DARK-E15J-9FP7-BLOW',
            119	=>'DARK-OUOA-HOCP-BLOW',
            120	=>'DARK-6A37-8PXV-BLOW',
            121	=>'DARK-TH1M-RSFJ-BLOW',
            122	=>'DARK-7TEO-QBSP-BLOW',
            123	=>'DARK-5TDF-QUY4-BLOW',
            124	=>'DARK-RNWY-5RK1-BLOW',
            125	=>'DARK-O8H1-Q622-BLOW',
            126	=>'DARK-VBYQ-WJLK-BLOW',
            127	=>'DARK-ACWO-S7KE-BLOW',
            128	=>'DARK-L8YH-M1G5-BLOW',
            129	=>'DARK-7U9L-UOUB-BLOW',
            130	=>'DARK-D3HL-LMIR-BLOW',
            131	=>'DARK-U57X-IIWB-BLOW',
            132	=>'DARK-WKER-6ZD4-BLOW',
            133	=>'DARK-5H5O-SWF4-BLOW',
            134	=>'DARK-8WJE-XVQR-BLOW',
            135	=>'DARK-6OV0-3GOD-BLOW',
            136	=>'DARK-H1Q6-SUNG-BLOW',
            137	=>'DARK-H3IG-IUCA-BLOW',
            138	=>'DARK-44GW-FF46-BLOW',
            139	=>'DARK-FZMO-DBDR-BLOW',
            140	=>'DARK-8KRW-1UIT-BLOW',
            141	=>'DARK-DFVD-HD38-BLOW',
            142	=>'DARK-T21A-MQZR-BLOW',
            143	=>'DARK-T8JL-YBDA-BLOW',
            144	=>'DARK-FEAM-O3G6-BLOW',
            145	=>'DARK-8P4S-18R8-BLOW',
            146	=>'DARK-XQH3-0XT5-BLOW',
            147	=>'DARK-PNZO-Y9WM-BLOW',
            148	=>'DARK-YTGL-O02B-BLOW',
            149	=>'DARK-Y9RG-R6FR-BLOW',
            150	=>'DARK-EDOA-UXT4-BLOW',
            151	=>'DARK-L5Q0-A603-BLOW',
            152	=>'DARK-T9X1-RW11-BLOW',
            153	=>'DARK-A00Q-YSNL-BLOW',
            154	=>'DARK-IR16-JW10-BLOW',
            155	=>'DARK-R4CR-TTKL-BLOW',
            156	=>'DARK-JJX8-JALO-BLOW',
            157	=>'DARK-9BA5-CZ4N-BLOW',
            158	=>'DARK-U6F0-1VIP-BLOW',
            159	=>'DARK-32CN-INGB-BLOW',
            160	=>'DARK-NG2T-NV0B-BLOW',
            161	=>'DARK-C54P-WQ1O-BLOW',
            162	=>'DARK-ZXOZ-WDBS-BLOW',
            163	=>'DARK-UCX4-P45R-BLOW',
            164	=>'DARK-7LC7-CBJ5-BLOW',
            165	=>'DARK-OMS2-1RV1-BLOW',
            166	=>'DARK-SXS9-HELY-BLOW',
            167	=>'DARK-OGWR-3NIV-BLOW',
            168	=>'DARK-BWL6-VEMY-BLOW',
            169	=>'DARK-T8GM-N77M-BLOW',
            170	=>'DARK-NG39-2PA3-BLOW',
            171	=>'DARK-NEIS-A34Y-BLOW',
            172	=>'DARK-WTEL-4N4M-BLOW',
            173	=>'DARK-JR3C-VA7Z-BLOW',
            174	=>'DARK-CBDT-EDZ5-BLOW',
            175	=>'DARK-MRN8-QFVU-BLOW',
            176	=>'DARK-PDUK-8KDZ-BLOW',
            177	=>'DARK-KCDR-NVZY-BLOW',
            178	=>'DARK-Q2I3-GUWP-BLOW',
            179	=>'DARK-3HUW-7IIX-BLOW',
            180	=>'DARK-FPNB-OUAG-BLOW',
            181	=>'DARK-BA21-JWMM-BLOW',
            182	=>'DARK-5DV3-XC7B-BLOW',
            183	=>'DARK-AULO-LX2J-BLOW',
            184	=>'DARK-ENJZ-Z8WZ-BLOW',
            185	=>'DARK-SNLA-TPTI-BLOW',
            186	=>'DARK-YU0Z-FB7B-BLOW',
            187	=>'DARK-L9W0-6TXA-BLOW',
            188	=>'DARK-3U6G-3YDN-BLOW',
            189	=>'DARK-Y42F-RB5L-BLOW',
            190	=>'DARK-26FA-B6VG-BLOW',
            191	=>'DARK-B2UC-2Y0U-BLOW',
            192	=>'DARK-K26X-KJKU-BLOW',
            193	=>'DARK-3J98-ZHGU-BLOW',
            194	=>'DARK-8DAM-T8XV-BLOW',
            195	=>'DARK-9V1M-INWL-BLOW',
            196	=>'DARK-HO2Z-MCQN-BLOW',
            197	=>'DARK-6B1M-PSSD-BLOW',
            198	=>'DARK-B0DG-R6XX-BLOW',
            199	=>'DARK-U1CT-PKAE-BLOW',
            200	=>'DARK-FQR5-IE2V-BLOW',
            201	=>'DARK-WVSJ-C9TA-BLOW',
            202	=>'DARK-X2SW-O4XW-BLOW',
            203	=>'DARK-FMIX-4LBL-BLOW',
            204	=>'DARK-VDBS-686W-BLOW',
            205	=>'DARK-M1FS-TWLS-BLOW',
            206	=>'DARK-3E5K-WH3I-BLOW',
            207	=>'DARK-8KYX-OLKF-BLOW',
            208	=>'DARK-05OF-LQII-BLOW',
            209	=>'DARK-IZQN-E5RN-BLOW',
            210	=>'DARK-8QB1-DQSG-BLOW',
            211	=>'DARK-2MS1-Q9GB-BLOW',
            212	=>'DARK-5Y3K-GMDG-BLOW',
            213	=>'DARK-RCHR-NVH9-BLOW',
            214	=>'DARK-WOAY-FWIP-BLOW',
            215	=>'DARK-NRJI-HIYO-BLOW',
            216	=>'DARK-RD3O-9GRI-BLOW',
            217	=>'DARK-JGOM-44IY-BLOW',
            218	=>'DARK-7R8F-VH8X-BLOW',
            219	=>'DARK-YNWA-D158-BLOW',
            220	=>'DARK-VM2K-R6D7-BLOW',
            221	=>'DARK-7XB8-U74Y-BLOW',
            222	=>'DARK-TANY-MOCB-BLOW',
            223	=>'DARK-IPBT-74T5-BLOW',
            224	=>'DARK-13L5-TMCT-BLOW',
            225	=>'DARK-UNXS-UC4T-BLOW',
            226	=>'DARK-KGWZ-6NZM-BLOW',
            227	=>'DARK-L24U-CVGX-BLOW',
            228	=>'DARK-0AOY-QNZI-BLOW',
            229	=>'DARK-KWNM-32PC-BLOW',
            230	=>'DARK-3L9P-5YFL-BLOW',
            231	=>'DARK-TBZN-UUP2-BLOW',
            232	=>'DARK-Z9SU-G0VX-BLOW',
            233	=>'DARK-HWRI-XNL9-BLOW',
            234	=>'DARK-Q2T2-AFXL-BLOW',
            235	=>'DARK-HJ9B-PHIF-BLOW',
            236	=>'DARK-Z8FW-LA6Y-BLOW',
            237	=>'DARK-GL2V-N1KF-BLOW',
            238	=>'DARK-1VY3-B1GR-BLOW',
            239	=>'DARK-ONCW-WE3A-BLOW',
            240	=>'DARK-9E7F-23R2-BLOW',
            241	=>'DARK-9DQC-2E5Q-BLOW',
            242	=>'DARK-S1DI-QWXJ-BLOW',
            243	=>'DARK-W2RV-9E42-BLOW',
            244	=>'DARK-IO48-4UBJ-BLOW',
            245	=>'DARK-XGS8-4V7W-BLOW',
            246	=>'DARK-75VQ-PQ87-BLOW',
            247	=>'DARK-9HUA-G75X-BLOW',
            248	=>'DARK-HD4O-YZK0-BLOW',
            249	=>'DARK-JCXK-R290-BLOW',
            250	=>'DARK-L7S9-ANMC-BLOW',
            251	=>'DARK-ES43-F85S-BLOW',
            252	=>'DARK-6TCR-U0F0-BLOW',
            253	=>'DARK-PMEM-UVBE-BLOW',
            254	=>'DARK-2XK8-M65T-BLOW',
            255	=>'DARK-C7Z3-2G6D-BLOW',
            256	=>'DARK-WWKY-V24T-BLOW',
            257	=>'DARK-M7CY-XMSX-BLOW',
            258	=>'DARK-CVBL-A9LR-BLOW',
            259	=>'DARK-BDRS-JULE-BLOW',
            260	=>'DARK-YG6W-CSBF-BLOW',
            261	=>'DARK-G4LR-EYHP-BLOW',
            262	=>'DARK-AIC1-LIWU-BLOW',
            263	=>'DARK-KFMJ-5N48-BLOW',
            264	=>'DARK-MX92-P76J-BLOW',
            265	=>'DARK-6VHH-2PJZ-BLOW',
            266	=>'DARK-JCPN-3N9H-BLOW',
            267	=>'DARK-3ONN-W1XU-BLOW',
            268	=>'DARK-V6KW-1C3Y-BLOW',
            269	=>'DARK-CA0T-EUB0-BLOW',
            270	=>'DARK-SRIT-WBRP-BLOW',
            271	=>'DARK-VBXP-W9UT-BLOW',
            272	=>'DARK-BWBF-Q6GT-BLOW',
            273	=>'DARK-VHZT-PVL4-BLOW',
            274	=>'DARK-C830-IA83-BLOW',
            275	=>'DARK-X298-SZ0Y-BLOW',
            276	=>'DARK-D94M-F2GJ-BLOW',
            277	=>'DARK-GZDN-LFHK-BLOW',
            278	=>'DARK-SPKT-UDJF-BLOW',
            279	=>'DARK-ZTLZ-IR08-BLOW',
            280	=>'DARK-29UV-IQ3L-BLOW',
            281	=>'DARK-8O91-XV0N-BLOW',
            282	=>'DARK-C1J9-A74B-BLOW',
            283	=>'DARK-IX5A-ZDAX-BLOW',
            284	=>'DARK-GGA6-I1ID-BLOW',
            285	=>'DARK-FU4C-9P2N-BLOW',
            286	=>'DARK-VM2H-K8VW-BLOW',
            287	=>'DARK-RY6S-OHQW-BLOW',
            288	=>'DARK-8YZN-MYBY-BLOW',
            289	=>'DARK-2PGR-ZVSH-BLOW',
            290	=>'DARK-PCDY-3GML-BLOW',
            291	=>'DARK-Z77D-0Z54-BLOW',
            292	=>'DARK-60AJ-Q8M4-BLOW',
            293	=>'DARK-LCWF-BZMR-BLOW',
            294	=>'DARK-KK9Q-Q3W5-BLOW',
            295	=>'DARK-9W3U-K96G-BLOW',
            296	=>'DARK-RU1O-LSAR-BLOW',
            297	=>'DARK-LAZF-HGFZ-BLOW',
            298	=>'DARK-T65X-DPVW-BLOW',
            299	=>'DARK-SH1Q-F0A6-BLOW',
            300	=>'DARK-3OSJ-YOL8-BLOW',
            301	=>'DARK-96WV-QBRK-BLOW',
            302	=>'DARK-P8IM-0T3H-BLOW',
            303	=>'DARK-X8ZK-EPOS-BLOW',
            304	=>'DARK-UHEW-P9BG-BLOW',
            305	=>'DARK-8SR2-FLG9-BLOW',
            306	=>'DARK-FHBI-QL7Q-BLOW',
            307	=>'DARK-EUYH-K2B5-BLOW',
            308	=>'DARK-EG05-7QHM-BLOW',
            309	=>'DARK-ZV9S-OXMT-BLOW',
            310	=>'DARK-V0MG-Y516-BLOW',
            311	=>'DARK-E9EB-VMVJ-BLOW',
            312	=>'DARK-UPNU-6QF2-BLOW',
            313	=>'DARK-8XAW-F6GQ-BLOW',
            314	=>'DARK-Q0JB-EV1S-BLOW',
            315	=>'DARK-Y71A-CF0Y-BLOW',
            316	=>'DARK-0086-3ZM8-BLOW',
            317	=>'DARK-AF8L-7FPU-BLOW',
            318	=>'DARK-ERKD-WHV1-BLOW',
            319	=>'DARK-0FOM-RP75-BLOW',
            320	=>'DARK-WWYM-NAG2-BLOW',
            321	=>'DARK-RR62-N2T9-BLOW',
            322	=>'DARK-LWZH-XRTC-BLOW',
            323	=>'DARK-M3LM-UQ3W-BLOW',
            324	=>'DARK-GKC8-9FFV-BLOW',
            325	=>'DARK-Y21G-US2N-BLOW',
            326	=>'DARK-I2ZX-O80Y-BLOW',
            327	=>'DARK-993Z-F7OQ-BLOW',
            328	=>'DARK-SW8F-B2DE-BLOW',
            329	=>'DARK-B0E1-GQCG-BLOW',
            330	=>'DARK-SJOU-0XES-BLOW',
            331	=>'DARK-93I4-IPZS-BLOW',
            332	=>'DARK-RK2O-CZ0V-BLOW',
            333	=>'DARK-5IK8-04GR-BLOW',
            334	=>'DARK-W348-Z562-BLOW',
            335	=>'DARK-X8N0-HUIJ-BLOW',
            336	=>'DARK-987N-LXV5-BLOW',
            337	=>'DARK-NZDE-ACL2-BLOW',
            338	=>'DARK-SZR7-NJ62-BLOW',
            339	=>'DARK-V4VL-9M5H-BLOW',
            340	=>'DARK-SPQY-BNW5-BLOW',
            341	=>'DARK-96MO-NX24-BLOW',
            342	=>'DARK-TI20-68QR-BLOW',
            343	=>'DARK-2K07-YYJG-BLOW',
            344	=>'DARK-BZLQ-LWCB-BLOW',
            345	=>'DARK-EKJR-0HJP-BLOW',
            346	=>'DARK-MGJE-9Q47-BLOW',
            347	=>'DARK-SS4Z-OV65-BLOW',
            348	=>'DARK-PQ52-6TX3-BLOW',
            349	=>'DARK-CZWA-FAD9-BLOW',
            350	=>'DARK-K91E-Y796-BLOW',
            351	=>'DARK-D4SQ-SZVN-BLOW',
            352	=>'DARK-JJC4-4Q21-BLOW',
            353	=>'DARK-TB2U-ZSKO-BLOW',
            354	=>'DARK-ZSLQ-JNAT-BLOW',
            355	=>'DARK-FKG2-CBWK-BLOW',
            356	=>'DARK-SRPG-E91V-BLOW',
            357	=>'DARK-40Q9-YBOG-BLOW',
            358	=>'DARK-7RV1-2ZZG-BLOW',
            359	=>'DARK-QZE1-NX6H-BLOW',
            360	=>'DARK-1WFU-FCQP-BLOW',
            361	=>'DARK-MGNV-4VX8-BLOW',
            362	=>'DARK-54V2-86MA-BLOW',
            363	=>'DARK-APKY-SPXT-BLOW',
            364	=>'DARK-4IV6-D0CZ-BLOW',
            365	=>'DARK-LRPI-AGCQ-BLOW',
            366	=>'DARK-GWFG-DHQ4-BLOW',
            367	=>'DARK-G94Z-X9WA-BLOW',
            368	=>'DARK-Z0CC-TQKN-BLOW',
            369	=>'DARK-3EZ4-L1Q0-BLOW',
            370	=>'DARK-1LG8-HMC1-BLOW',
            371	=>'DARK-J8D0-KCF7-BLOW',
            372	=>'DARK-4749-JAM5-BLOW',
            373	=>'DARK-WOOO-CSBG-BLOW',
            374	=>'DARK-V7ON-3JUC-BLOW',
            375	=>'DARK-A62B-T86X-BLOW',
            376	=>'DARK-LUP9-U4YE-BLOW',
            377	=>'DARK-W3ZK-HWIB-BLOW',
            378	=>'DARK-4F5A-P7VU-BLOW',
            379	=>'DARK-LY0B-9WX0-BLOW',
            380	=>'DARK-ORVM-5ZNC-BLOW',
            381	=>'DARK-CUZ9-LOB6-BLOW',
            382	=>'DARK-IUCU-Z5T9-BLOW',
            383	=>'DARK-R2Z0-5DON-BLOW',
            384	=>'DARK-E9MJ-DA8A-BLOW',
            385	=>'DARK-AZHI-ED19-BLOW',
            386	=>'DARK-VQI0-KUX7-BLOW',
            387	=>'DARK-7SI9-R4YR-BLOW',
            388	=>'DARK-LPDX-BY4R-BLOW',
            389	=>'DARK-VIHY-EKPQ-BLOW',
            390	=>'DARK-C9GI-KEDW-BLOW',
            391	=>'DARK-5I9X-JS2D-BLOW',
            392	=>'DARK-1X42-DMPY-BLOW',
            393	=>'DARK-L955-OAE2-BLOW',
            394	=>'DARK-6A4X-PAFZ-BLOW',
            395	=>'DARK-54VU-ATEG-BLOW',
            396	=>'DARK-XW12-B4ZX-BLOW',
            397	=>'DARK-MD7D-40GC-BLOW',
            398	=>'DARK-X439-ZKBA-BLOW',
            399	=>'DARK-D7BX-VE1I-BLOW',
            400	=>'DARK-8IV6-LRQO-BLOW',
            401	=>'DARK-I8TJ-VBFI-BLOW',
            402	=>'DARK-V1SD-ULFQ-BLOW',
            403	=>'DARK-5IVG-8JS6-BLOW',
            404	=>'DARK-V9LV-91PF-BLOW',
            405	=>'DARK-N0FB-MHAB-BLOW',
            406	=>'DARK-FKTM-M3BP-BLOW',
            407	=>'DARK-5IRI-E6G5-BLOW',
            408	=>'DARK-MWSQ-WUPB-BLOW',
            409	=>'DARK-I0JF-Y553-BLOW',
            410	=>'DARK-N69U-42J2-BLOW',
            411	=>'DARK-9VC5-JWW2-BLOW',
            412	=>'DARK-0QKS-LMO4-BLOW',
            413	=>'DARK-Y9E8-V1R4-BLOW',
            414	=>'DARK-WPTS-XPKG-BLOW',
            415	=>'DARK-QTLK-6DM5-BLOW',
            416	=>'DARK-W928-TYRC-BLOW',
            417	=>'DARK-XZ2P-NI0Y-BLOW',
            418	=>'DARK-PQ1W-MKZO-BLOW',
            419	=>'DARK-3EIB-10S0-BLOW',
            420	=>'DARK-C0F1-THHY-BLOW',
            421	=>'DARK-1R63-TPLQ-BLOW',
            422	=>'DARK-8O91-STHI-BLOW',
            423	=>'DARK-CDE6-3VU0-BLOW',
            424	=>'DARK-U4GM-9NZU-BLOW',
            425	=>'DARK-PKX6-TCUD-BLOW',
            426	=>'DARK-U8KC-ZGEK-BLOW',
            427	=>'DARK-VVU2-2RRM-BLOW',
            428	=>'DARK-CKTY-YX3A-BLOW',
            429	=>'DARK-3J52-YCNO-BLOW',
            430	=>'DARK-SVH4-X356-BLOW',
            431	=>'DARK-E5ZU-4UB2-BLOW',
            432	=>'DARK-HBO1-K29L-BLOW',
            433	=>'DARK-VJE5-NOK7-BLOW',
            434	=>'DARK-BG43-DFUO-BLOW',
            435	=>'DARK-09E8-VMZP-BLOW',
            436	=>'DARK-HLAX-4TX8-BLOW',
            437	=>'DARK-C7AB-GG30-BLOW',
            438	=>'DARK-CW02-NIBS-BLOW',
            439	=>'DARK-D7G2-JBX4-BLOW',
            440	=>'DARK-V9VW-VLS5-BLOW',
            441	=>'DARK-BJTU-2HLW-BLOW',
            442	=>'DARK-GDGW-WQEK-BLOW',
            443	=>'DARK-TF3P-2171-BLOW',
            444	=>'DARK-2BA9-OCSS-BLOW',
            445	=>'DARK-XOMQ-VP24-BLOW',
            446	=>'DARK-CUD6-WPLD-BLOW',
            447	=>'DARK-GPW0-6GB9-BLOW',
            448	=>'DARK-HGF9-6L2P-BLOW',
            449	=>'DARK-DM89-L23M-BLOW',
            450	=>'DARK-4V97-OMI5-BLOW',
            451	=>'DARK-VW56-AOZT-BLOW',
            452	=>'DARK-73A5-TLG0-BLOW',
            453	=>'DARK-MSXB-HRF0-BLOW',
            454	=>'DARK-MNK8-AL43-BLOW',
            455	=>'DARK-ZT60-8FZ6-BLOW',
            456	=>'DARK-27D3-5LVP-BLOW',
            457	=>'DARK-Z9BG-75WQ-BLOW',
            458	=>'DARK-VSIH-JMSP-BLOW',
            459	=>'DARK-5KT3-8S4D-BLOW',
            460	=>'DARK-GU2A-4EJN-BLOW',
            461	=>'DARK-QMOV-39ZI-BLOW',
            462	=>'DARK-2RV0-8BG3-BLOW',
            463	=>'DARK-U99S-LSD9-BLOW',
            464	=>'DARK-S54O-RAKN-BLOW',
            465	=>'DARK-325N-36Q1-BLOW',
            466	=>'DARK-BZJP-P0O8-BLOW',
            467	=>'DARK-MOOQ-S953-BLOW',
            468	=>'DARK-GX3Z-90V8-BLOW',
            469	=>'DARK-E4QA-9ACG-BLOW',
            470	=>'DARK-SKWU-OTDT-BLOW',
            471	=>'DARK-LTRS-R8HO-BLOW',
            472	=>'DARK-Y7TN-EVYY-BLOW',
            473	=>'DARK-CC3O-2G9R-BLOW',
            474	=>'DARK-5UBW-AXGJ-BLOW',
            475	=>'DARK-44R5-4ZGR-BLOW',
            476	=>'DARK-OUEO-XK4Z-BLOW',
            477	=>'DARK-HHG9-DYAS-BLOW',
            478	=>'DARK-D7GG-6K3Y-BLOW',
            479	=>'DARK-P9JU-QUZD-BLOW',
            480	=>'DARK-F4U9-EBLT-BLOW',
            481	=>'DARK-46VK-3WIO-BLOW',
            482	=>'DARK-XSM2-ZXT3-BLOW',
            483	=>'DARK-TV5G-ITTC-BLOW',
            484	=>'DARK-P7Z4-VKU1-BLOW',
            485	=>'DARK-YNLZ-ISU9-BLOW',
            486	=>'DARK-8OPK-NKCB-BLOW',
            487	=>'DARK-3N93-FBMN-BLOW',
            488	=>'DARK-JG5Q-P90K-BLOW',
            489	=>'DARK-B0HP-OTEQ-BLOW',
            490	=>'DARK-2BUF-CNJK-BLOW',
            491	=>'DARK-AAJB-FP50-BLOW',
            492	=>'DARK-ABIP-A08J-BLOW',
            493	=>'DARK-7DH4-5ELD-BLOW',
            494	=>'DARK-ELXV-Z4O1-BLOW',
            495	=>'DARK-XNW5-OFKS-BLOW',
            496	=>'DARK-9XG2-M35A-BLOW',
            497	=>'DARK-TIUZ-7192-BLOW',
            498	=>'DARK-A4QH-LS7A-BLOW',
            499	=>'DARK-KO6G-OYQS-BLOW',
            500	=>'DARK-D9Y5-DLYT-BLOW',
            501	=>'DARK-I8OI-N0WZ-BLOW',
            502	=>'DARK-CI8S-645G-BLOW',
            503	=>'DARK-DN0G-J81I-BLOW',
            504	=>'DARK-2H6I-J9A4-BLOW',
            505	=>'DARK-LC9K-TGMU-BLOW',
            506	=>'DARK-XJ1I-QBXD-BLOW',
            507	=>'DARK-3QPW-K55N-BLOW',
            508	=>'DARK-CNYJ-WZY4-BLOW',
            509	=>'DARK-R1G6-ZFEP-BLOW',
            510	=>'DARK-TJJS-NPHZ-BLOW',
            511	=>'DARK-ZQ4H-UZ20-BLOW',
            512	=>'DARK-AA9Y-P3KO-BLOW',
            513	=>'DARK-36UM-OV4D-BLOW',
            514	=>'DARK-BVK3-D9V6-BLOW',
            515	=>'DARK-LSQM-JYIX-BLOW',
            516	=>'DARK-1QOI-PS9A-BLOW',
            517	=>'DARK-B6BX-PW3C-BLOW',
            518	=>'DARK-B7KI-1KYZ-BLOW',
            519	=>'DARK-JLZU-YT9Z-BLOW',
            520	=>'DARK-GQR7-RFM0-BLOW',
            521	=>'DARK-UWRN-4QUU-BLOW',
            522	=>'DARK-TLQV-PTSF-BLOW',
            523	=>'DARK-4PRY-6JRF-BLOW',
            524	=>'DARK-GI78-6Q2T-BLOW',
            525	=>'DARK-N9VM-4SYR-BLOW',
            526	=>'DARK-CP80-Y247-BLOW',
            527	=>'DARK-1RVO-WSSZ-BLOW',
            528	=>'DARK-QN1D-9119-BLOW',
            529	=>'DARK-921F-U5VS-BLOW',
            530	=>'DARK-9U18-2V8J-BLOW',
            531	=>'DARK-51Y5-S7OO-BLOW',
            532	=>'DARK-V8L3-PVRU-BLOW',
            533	=>'DARK-64PT-9FGA-BLOW',
            534	=>'DARK-49X8-CK80-BLOW',
            535	=>'DARK-4XL3-VENH-BLOW',
            536	=>'DARK-EU14-AWNP-BLOW',
            537	=>'DARK-PT33-7814-BLOW',
            538	=>'DARK-UM6M-DOBQ-BLOW',
            539	=>'DARK-58NN-P9HB-BLOW',
            540	=>'DARK-2AZG-YMVK-BLOW',
            541	=>'DARK-HQT4-I09H-BLOW',
            542	=>'DARK-SHEB-6FS2-BLOW',
            543	=>'DARK-N1DE-JUEP-BLOW',
            544	=>'DARK-REZD-KLX8-BLOW',
            545	=>'DARK-BYUC-UGS5-BLOW',
            546	=>'DARK-K5D0-YCF0-BLOW',
            547	=>'DARK-K3SI-7WG7-BLOW',
            548	=>'DARK-MTOL-RCL6-BLOW',
            549	=>'DARK-XCX0-EJM2-BLOW',
            550	=>'DARK-VRRG-AKM9-BLOW',
            551	=>'DARK-9EH7-KSE2-BLOW',
            552	=>'DARK-0ZZT-E32V-BLOW',
            553	=>'DARK-DRR2-UE04-BLOW',
            554	=>'DARK-C4H0-G9TE-BLOW',
            555	=>'DARK-BT8N-6ZHE-BLOW',
            556	=>'DARK-HO70-63ZQ-BLOW',
            557	=>'DARK-YIYE-UB4F-BLOW',
            558	=>'DARK-ABOU-0HOR-BLOW',
            559	=>'DARK-7PIN-CUV3-BLOW',
            560	=>'DARK-H6SD-SBYI-BLOW',
            561	=>'DARK-QV5R-R3YM-BLOW',
            562	=>'DARK-IE50-0PT6-BLOW',
            563	=>'DARK-T42T-8MKZ-BLOW',
            564	=>'DARK-SV7B-9JNJ-BLOW',
            565	=>'DARK-N9CX-TDBB-BLOW',
            566	=>'DARK-LAHW-C39U-BLOW',
            567	=>'DARK-7L8Z-NKAL-BLOW',
            568	=>'DARK-09GC-5455-BLOW',
            569	=>'DARK-HVJP-1F5M-BLOW',
            570	=>'DARK-2GKU-BECA-BLOW',
            571	=>'DARK-M9YH-IG8K-BLOW',
            572	=>'DARK-SC84-YRBW-BLOW',
            573	=>'DARK-003U-7RA1-BLOW',
            574	=>'DARK-AY32-QG67-BLOW',
            575	=>'DARK-8DJA-LMQ6-BLOW',
            576	=>'DARK-5OXC-M1A8-BLOW',
            577	=>'DARK-2E2N-G64E-BLOW',
            578	=>'DARK-YWTB-BO4E-BLOW',
            579	=>'DARK-6JJE-NNNG-BLOW',
            580	=>'DARK-6PZG-H96B-BLOW',
            581	=>'DARK-TRDZ-DPQC-BLOW',
            582	=>'DARK-CYN8-1IL1-BLOW',
            583	=>'DARK-T1TM-LG1W-BLOW',
            584	=>'DARK-6W6W-DJC6-BLOW',
            585	=>'DARK-DPVF-2H64-BLOW',
            586	=>'DARK-8W5O-CMN9-BLOW',
            587	=>'DARK-RALZ-ZR1Q-BLOW',
            588	=>'DARK-I7GK-A5MD-BLOW',
            589	=>'DARK-NDSH-F0S4-BLOW',
            590	=>'DARK-L55I-G0KS-BLOW',
            591	=>'DARK-PYRE-RIAN-BLOW',
            592	=>'DARK-AJLU-5XC1-BLOW',
            593	=>'DARK-QCCL-SN0I-BLOW',
            594	=>'DARK-LG99-ZY0Z-BLOW',
            595	=>'DARK-NSC9-ZLMH-BLOW',
            596	=>'DARK-82FK-SKZO-BLOW',
            597	=>'DARK-S7TD-27BG-BLOW',
            598	=>'DARK-FDEU-CU0X-BLOW',
            599	=>'DARK-UHR5-YX7T-BLOW',
            600	=>'DARK-15SF-67QF-BLOW',
            601	=>'DARK-DXZ2-KRUN-BLOW',
            602	=>'DARK-F16W-5DZR-BLOW',
            603	=>'DARK-5Y2G-EZIS-BLOW',
            604	=>'DARK-EMHZ-K11P-BLOW',
            605	=>'DARK-T27R-VI1Z-BLOW',
            606	=>'DARK-0TGM-SU3L-BLOW',
            607	=>'DARK-NNZ7-FT1F-BLOW',
            608	=>'DARK-HRE4-QQVN-BLOW',
            609	=>'DARK-YO6M-F30W-BLOW',
            610	=>'DARK-EDAV-11C6-BLOW',
            611	=>'DARK-MDS1-AKRQ-BLOW',
            612	=>'DARK-O441-OJ6L-BLOW',
            613	=>'DARK-0CFH-4IUS-BLOW',
            614	=>'DARK-9R0R-GLMF-BLOW',
            615	=>'DARK-XR1P-W9QR-BLOW',
            616	=>'DARK-QMAT-2SDY-BLOW',
            617	=>'DARK-81WH-VM0P-BLOW',
            618	=>'DARK-FO3A-W0D4-BLOW',
            619	=>'DARK-W4T0-UXZL-BLOW',
            620	=>'DARK-YLPS-7FX2-BLOW',
            621	=>'DARK-FDIM-PA95-BLOW',
            622	=>'DARK-S1WV-OBCH-BLOW',
            623	=>'DARK-BZ55-O6JV-BLOW',
            624	=>'DARK-2FF6-3TLL-BLOW',
            625	=>'DARK-UNU0-31QI-BLOW',
            626	=>'DARK-0KR9-3T1R-BLOW',
            627	=>'DARK-DQ5L-NYZ3-BLOW',
            628	=>'DARK-C8I7-9UQJ-BLOW',
            629	=>'DARK-BIGC-KKZB-BLOW',
            630	=>'DARK-B90F-M0FN-BLOW',
            631	=>'DARK-KXSZ-4HHD-BLOW',
            632	=>'DARK-WUFN-1HFE-BLOW',
            633	=>'DARK-Y2SQ-Z4UO-BLOW',
            634	=>'DARK-HBRN-GS7H-BLOW',
            635	=>'DARK-BFEG-KRVR-BLOW',
            636	=>'DARK-C4A2-6FKD-BLOW',
            637	=>'DARK-DNB8-LRUE-BLOW',
            638	=>'DARK-F5KU-XA87-BLOW',
            639	=>'DARK-P8T4-GZ2L-BLOW',
            640	=>'DARK-IRH3-C0B2-BLOW',
            641	=>'DARK-OSOB-2V92-BLOW',
            642	=>'DARK-2OGI-HQES-BLOW',
            643	=>'DARK-ACG3-STB9-BLOW',
            644	=>'DARK-1GMK-4CJN-BLOW',
            645	=>'DARK-A04S-PWS4-BLOW',
            646	=>'DARK-IFN1-QAQA-BLOW',
            647	=>'DARK-HLGB-UTC6-BLOW',
            648	=>'DARK-IJ06-P3M7-BLOW',
            649	=>'DARK-V1AJ-4XOJ-BLOW',
            650	=>'DARK-49E5-HE7Y-BLOW',
            651	=>'DARK-IZ58-Y9OQ-BLOW',
            652	=>'DARK-8O2F-O7XP-BLOW',
            653	=>'DARK-U9MX-GGRU-BLOW',
            654	=>'DARK-YHTE-U7MH-BLOW',
            655	=>'DARK-SGJ1-FNQ6-BLOW',
            656	=>'DARK-YKNF-LUU5-BLOW',
            657	=>'DARK-Z8TL-9F5Z-BLOW',
            658	=>'DARK-09WL-5RPU-BLOW',
            659	=>'DARK-B84P-YEMJ-BLOW',
            660	=>'DARK-DXNE-HPJI-BLOW',
            661	=>'DARK-H4VQ-7K23-BLOW',
            662	=>'DARK-73RY-1CFG-BLOW',
            663	=>'DARK-EWFO-9YLL-BLOW',
            664	=>'DARK-74DT-Z004-BLOW',
            665	=>'DARK-RCBT-ODX1-BLOW',
            666	=>'DARK-JTZ7-J6CP-BLOW',
            667	=>'DARK-D2QL-HMTA-BLOW',
            668	=>'DARK-S251-JTJL-BLOW',
            669	=>'DARK-4NN0-KSYK-BLOW',
            670	=>'DARK-PWN3-AWEM-BLOW',
            671	=>'DARK-76WU-5AVQ-BLOW',
            672	=>'DARK-19TS-RFP7-BLOW',
            673	=>'DARK-MQKR-UXNY-BLOW',
            674	=>'DARK-D6D7-8FM9-BLOW',
            675	=>'DARK-WK2I-LFZ5-BLOW',
            676	=>'DARK-DSD1-Y10R-BLOW',
            677	=>'DARK-I962-KY5V-BLOW',
            678	=>'DARK-SCFE-BWE9-BLOW',
            679	=>'DARK-0TCU-7A07-BLOW',
            680	=>'DARK-EN71-163K-BLOW',
            681	=>'DARK-8XD1-CTJI-BLOW',
            682	=>'DARK-BWQO-8MAV-BLOW',
            683	=>'DARK-ZO7M-VM70-BLOW',
            684	=>'DARK-TSQD-Z5V1-BLOW',
            685	=>'DARK-Q5B1-BZTW-BLOW',
            686	=>'DARK-VM79-R7LL-BLOW',
            687	=>'DARK-6U98-DLX2-BLOW',
            688	=>'DARK-10X7-7BZR-BLOW',
            689	=>'DARK-KSU4-CKBD-BLOW',
            690	=>'DARK-UAUH-GSNL-BLOW',
            691	=>'DARK-FWVG-JRQH-BLOW',
            692	=>'DARK-HZPC-M583-BLOW',
            693	=>'DARK-M0FP-97A7-BLOW',
            694	=>'DARK-MC70-D44J-BLOW',
            695	=>'DARK-DV3I-1ZVO-BLOW',
            696	=>'DARK-AD1R-538Q-BLOW',
            697	=>'DARK-ZB4U-8EHC-BLOW',
            698	=>'DARK-VO4Z-QSZK-BLOW',
            699	=>'DARK-JDNG-CWXV-BLOW',
            700	=>'DARK-ZYRE-XBYV-BLOW',
            701	=>'DARK-XBRA-R1GN-BLOW',
            702	=>'DARK-687J-55K7-BLOW',
            703	=>'DARK-NG1G-IT43-BLOW',
            704	=>'DARK-0LPS-IGIK-BLOW',
            705	=>'DARK-X5BM-8ZRL-BLOW',
            706	=>'DARK-OWJ3-B6RX-BLOW',
            707	=>'DARK-2LH7-QM3X-BLOW',
            708	=>'DARK-NX17-M70F-BLOW',
            709	=>'DARK-AWDM-J6YJ-BLOW',
            710	=>'DARK-XGK8-SS7B-BLOW',
            711	=>'DARK-APYU-B54V-BLOW',
            712	=>'DARK-RW1Q-GEPL-BLOW',
            713	=>'DARK-UK89-QUFS-BLOW',
            714	=>'DARK-I59R-B1J5-BLOW',
            715	=>'DARK-IWO8-CRMC-BLOW',
            716	=>'DARK-PHND-3HT3-BLOW',
            717	=>'DARK-UQ0X-GNBM-BLOW',
            718	=>'DARK-FQ13-2FLO-BLOW',
            719	=>'DARK-SZ3U-JA3C-BLOW',
            720	=>'DARK-QTX1-OMAI-BLOW',
            721	=>'DARK-S3HJ-G2KR-BLOW',
            722	=>'DARK-YJRQ-DWOT-BLOW',
            723	=>'DARK-ZF6R-KVN0-BLOW',
            724	=>'DARK-XV2L-HKFM-BLOW',
            725	=>'DARK-VKMP-XXR6-BLOW',
            726	=>'DARK-4WHB-4UO1-BLOW',
            727	=>'DARK-THTY-PF6O-BLOW',
            728	=>'DARK-T3ZP-V5P5-BLOW',
            729	=>'DARK-XDTB-SZWP-BLOW',
            730	=>'DARK-7Y65-DLIF-BLOW',
            731	=>'DARK-Z5DJ-R76X-BLOW',
            732	=>'DARK-87JR-VK20-BLOW',
            733	=>'DARK-M390-PHP6-BLOW',
            734	=>'DARK-7QCI-WRG3-BLOW',
            735	=>'DARK-6FQT-1YCP-BLOW',
            736	=>'DARK-NAHJ-BT0D-BLOW',
            737	=>'DARK-BY4Q-Z7E7-BLOW',
            738	=>'DARK-T0O9-A2DM-BLOW',
            739	=>'DARK-2TH8-Q5CH-BLOW',
            740	=>'DARK-K9UF-2BCC-BLOW',
            741	=>'DARK-IS8L-5OC8-BLOW',
            742	=>'DARK-4MYS-SL0K-BLOW',
            743	=>'DARK-JG43-SB6F-BLOW',
            744	=>'DARK-H1ON-EYRS-BLOW',
            745	=>'DARK-C18Q-DCD5-BLOW',
            746	=>'DARK-NBI6-4S3B-BLOW',
            747	=>'DARK-8KEG-JU89-BLOW',
            748	=>'DARK-2VF8-KBUF-BLOW',
            749	=>'DARK-88KM-R1N7-BLOW',
            750	=>'DARK-SWXC-8XZQ-BLOW',
            751	=>'DARK-ORJF-BXJ3-BLOW',
            752	=>'DARK-SWTK-5MHU-BLOW',
            753	=>'DARK-BW16-0RQO-BLOW',
            754	=>'DARK-MZDR-DKOO-BLOW',
            755	=>'DARK-T8TG-AE8J-BLOW',
            756	=>'DARK-Y0QM-8A74-BLOW',
            757	=>'DARK-D4VJ-MQFS-BLOW',
            758	=>'DARK-4PMJ-1RVH-BLOW',
            759	=>'DARK-EEMN-L0JA-BLOW',
            760	=>'DARK-BHA2-F6TZ-BLOW',
            761	=>'DARK-WZ1N-GCYF-BLOW',
            762	=>'DARK-8D4B-QN9I-BLOW',
            763	=>'DARK-NZT3-DMBK-BLOW',
            764	=>'DARK-NQ48-YZ36-BLOW',
            765	=>'DARK-R3PO-EWKS-BLOW',
            766	=>'DARK-9WVD-I3HI-BLOW',
            767	=>'DARK-YSXO-ERXF-BLOW',
            768	=>'DARK-W57R-P5JG-BLOW',
            769	=>'DARK-ILU8-0OXF-BLOW',
            770	=>'DARK-A2AS-W0PG-BLOW',
            771	=>'DARK-NZDB-E6IU-BLOW',
            772	=>'DARK-WZNI-DIFR-BLOW',
            773	=>'DARK-WKY6-H654-BLOW',
            774	=>'DARK-E8C8-CYG1-BLOW',
            775	=>'DARK-M8OR-N8FL-BLOW',
            776	=>'DARK-APL5-7R6H-BLOW',
            777	=>'DARK-4EI4-ZMC1-BLOW',
            778	=>'DARK-YJ9Q-QIPE-BLOW',
            779	=>'DARK-BREB-SU3K-BLOW',
            780	=>'DARK-73NF-H6XN-BLOW',
            781	=>'DARK-VQZE-NK2H-BLOW',
            782	=>'DARK-37GB-O4BG-BLOW',
            783	=>'DARK-LHVY-RKOW-BLOW',
            784	=>'DARK-YW40-S0WW-BLOW',
            785	=>'DARK-6OQR-59LP-BLOW',
            786	=>'DARK-W41A-8WFD-BLOW',
            787	=>'DARK-77RO-1GPQ-BLOW',
            788	=>'DARK-4KGZ-32CV-BLOW',
            789	=>'DARK-POJN-JRNK-BLOW',
            790	=>'DARK-7EWR-A4Y7-BLOW',
            791	=>'DARK-AP5W-99T5-BLOW',
            792	=>'DARK-XJ6G-G25Z-BLOW',
            793	=>'DARK-66XP-V1E5-BLOW',
            794	=>'DARK-HRCD-3X45-BLOW',
            795	=>'DARK-HMB1-OOL0-BLOW',
            796	=>'DARK-S2C5-5MFD-BLOW',
            797	=>'DARK-LA7X-DF92-BLOW',
            798	=>'DARK-TVFN-56ZG-BLOW',
            799	=>'DARK-7RKF-C1BD-BLOW',
            800	=>'DARK-JL6U-T4WV-BLOW',
            801	=>'DARK-6CX0-YZQH-BLOW',
            802	=>'DARK-6EXR-FV0I-BLOW',
            803	=>'DARK-XY7O-ZQ54-BLOW',
            804	=>'DARK-EBX4-2XMM-BLOW',
            805	=>'DARK-ETNE-37QL-BLOW',
            806	=>'DARK-X6QI-V7PL-BLOW',
            807	=>'DARK-DUUB-0UHF-BLOW',
            808	=>'DARK-I0AK-QWU1-BLOW',
            809	=>'DARK-KOE5-XZHL-BLOW',
            810	=>'DARK-17AN-EK96-BLOW',
            811	=>'DARK-FJV6-WFS0-BLOW',
            812	=>'DARK-5FYU-D7GC-BLOW',
            813	=>'DARK-HC49-4VRU-BLOW',
            814	=>'DARK-LB5Z-5G4Y-BLOW',
            815	=>'DARK-QLI0-1CBU-BLOW',
            816	=>'DARK-PUNS-F5BG-BLOW',
            817	=>'DARK-XHJW-BNP8-BLOW',
            818	=>'DARK-NRUW-U009-BLOW',
            819	=>'DARK-4SIR-4DSN-BLOW',
            820	=>'DARK-4433-F4C0-BLOW',
            821	=>'DARK-K3BC-5PMK-BLOW',
            822	=>'DARK-ENM2-SH1S-BLOW',
            823	=>'DARK-1MMA-Q55U-BLOW',
            824	=>'DARK-LT8J-S6TA-BLOW',
            825	=>'DARK-NQT8-LVPQ-BLOW',
            826	=>'DARK-INO5-BOOX-BLOW',
            827	=>'DARK-U04H-BYXU-BLOW',
            828	=>'DARK-EFNF-0BDK-BLOW',
            829	=>'DARK-D5N7-39GI-BLOW',
            830	=>'DARK-QGNY-BIS2-BLOW',
            831	=>'DARK-3HYJ-4RRH-BLOW',
            832	=>'DARK-FR2N-UJTO-BLOW',
            833	=>'DARK-1HJ4-FS14-BLOW',
            834	=>'DARK-35C6-5QCV-BLOW',
            835	=>'DARK-BALK-CIID-BLOW',
            836	=>'DARK-VLDJ-0572-BLOW',
            837	=>'DARK-QHCK-RF4E-BLOW',
            838	=>'DARK-KRDJ-ZTCM-BLOW',
            839	=>'DARK-3W6Y-886U-BLOW',
            840	=>'DARK-FCDU-I7NG-BLOW',
            841	=>'DARK-6ZQ9-14O9-BLOW',
            842	=>'DARK-9C4U-IN18-BLOW',
            843	=>'DARK-VJIU-LHF4-BLOW',
            844	=>'DARK-FXQS-AG3G-BLOW',
            845	=>'DARK-GICW-OSIZ-BLOW',
            846	=>'DARK-SK3M-BWE1-BLOW',
            847	=>'DARK-1D5L-MZ0K-BLOW',
            848	=>'DARK-NE6O-WJK3-BLOW',
            849	=>'DARK-PE3B-42BJ-BLOW',
            850	=>'DARK-RT95-VE0X-BLOW',
            851	=>'DARK-DG1M-UJNL-BLOW',
            852	=>'DARK-6LUA-8OLH-BLOW',
            853	=>'DARK-LZHJ-5N4R-BLOW',
            854	=>'DARK-HO6P-312Y-BLOW',
            855	=>'DARK-OP4F-7FV4-BLOW',
            856	=>'DARK-CMCG-947D-BLOW',
            857	=>'DARK-MN7G-1POF-BLOW',
            858	=>'DARK-Q38U-3D3H-BLOW',
            859	=>'DARK-8DJ7-56VM-BLOW',
            860	=>'DARK-7786-C0JK-BLOW',
            861	=>'DARK-H5H2-FGYP-BLOW',
            862	=>'DARK-Z7GQ-LI4Q-BLOW',
            863	=>'DARK-BYV1-63GD-BLOW',
            864	=>'DARK-VI8C-RP0V-BLOW',
            865	=>'DARK-IBNV-AGU4-BLOW',
            866	=>'DARK-OONL-INQP-BLOW',
            867	=>'DARK-Z276-KQGI-BLOW',
            868	=>'DARK-VCUJ-XWET-BLOW',
            869	=>'DARK-CW2T-LO6S-BLOW',
            870	=>'DARK-3G6E-KP6N-BLOW',
            871	=>'DARK-GQZW-J216-BLOW',
            872	=>'DARK-RAWF-SH0N-BLOW',
            873	=>'DARK-IWQX-3KHY-BLOW',
            874	=>'DARK-6794-EYEB-BLOW',
            875	=>'DARK-KYUL-6XV5-BLOW',
            876	=>'DARK-0G3Z-4ZQ7-BLOW',
            877	=>'DARK-Q1WH-QBDY-BLOW',
            878	=>'DARK-RAFS-1ZV3-BLOW',
            879	=>'DARK-2LES-GCGI-BLOW',
            880	=>'DARK-C8JG-7LI5-BLOW',
            881	=>'DARK-GAK4-FULR-BLOW',
            882	=>'DARK-F1J7-3VW3-BLOW',
            883	=>'DARK-5DNR-3RZZ-BLOW',
            884	=>'DARK-FL3S-7HTS-BLOW',
            885	=>'DARK-6U5J-B6AI-BLOW',
            886	=>'DARK-LD4N-0GIB-BLOW',
            887	=>'DARK-XM8Q-89H0-BLOW',
            888	=>'DARK-ZYWZ-GG9V-BLOW',
            889	=>'DARK-TWKD-MHHM-BLOW',
            890	=>'DARK-TY73-7CNM-BLOW',
            891	=>'DARK-RPKP-Z1RI-BLOW',
            892	=>'DARK-ZUMI-Q02C-BLOW',
            893	=>'DARK-XY2L-JKXS-BLOW',
            894	=>'DARK-1RMK-ZQTF-BLOW',
            895	=>'DARK-2K2O-WIFV-BLOW',
            896	=>'DARK-O426-FKW5-BLOW',
            897	=>'DARK-6LLH-HDRZ-BLOW',
            898	=>'DARK-1UYX-1GZP-BLOW',
            899	=>'DARK-5P4M-1KSX-BLOW',
            900	=>'DARK-4C1V-LFDK-BLOW',
            901	=>'DARK-3OPY-H3KH-BLOW',
            902	=>'DARK-ULKY-DSL1-BLOW',
            903	=>'DARK-TM6G-IEWK-BLOW',
            904	=>'DARK-17KC-3291-BLOW',
            905	=>'DARK-KZUP-GCYZ-BLOW',
            906	=>'DARK-N6SP-KLYZ-BLOW',
            907	=>'DARK-UBFJ-CANM-BLOW',
            908	=>'DARK-APTT-BWBP-BLOW',
            909	=>'DARK-XI0W-UCEF-BLOW',
            910	=>'DARK-46Q4-9S8M-BLOW',
            911	=>'DARK-707C-IDRZ-BLOW',
            912	=>'DARK-ZH5Q-CVUK-BLOW',
            913	=>'DARK-PFNV-Y9U5-BLOW',
            914	=>'DARK-0H9F-Q0RP-BLOW',
            915	=>'DARK-FGL2-U3AQ-BLOW',
            916	=>'DARK-7L1Z-OFH7-BLOW',
            917	=>'DARK-MQWX-06X3-BLOW',
            918	=>'DARK-8MUJ-WB86-BLOW',
            919	=>'DARK-SM14-E8KI-BLOW',
            920	=>'DARK-TCMH-O5E9-BLOW',
            921	=>'DARK-R41P-YVYD-BLOW',
            922	=>'DARK-KBYM-Z8H8-BLOW',
            923	=>'DARK-V6O7-R1OX-BLOW',
            924	=>'DARK-Z22T-SUCT-BLOW',
            925	=>'DARK-6K4Q-YI6L-BLOW',
            926	=>'DARK-NOY5-EEIR-BLOW',
            927	=>'DARK-1WLA-5OF8-BLOW',
            928	=>'DARK-C54W-Z1BE-BLOW',
            929	=>'DARK-0X3B-BQNU-BLOW',
            930	=>'DARK-1HRI-OGAP-BLOW',
            931	=>'DARK-UIRQ-YYLD-BLOW',
            932	=>'DARK-59U7-VZKD-BLOW',
            933	=>'DARK-X87E-MQLJ-BLOW',
            934	=>'DARK-79ZG-LWI9-BLOW',
            935	=>'DARK-0798-GVZU-BLOW',
            936	=>'DARK-L94D-L62Q-BLOW',
            937	=>'DARK-0GM7-GC6V-BLOW',
            938	=>'DARK-NFR5-SBJ6-BLOW',
            939	=>'DARK-0SPW-MDMC-BLOW',
            940	=>'DARK-Q2YM-UOO1-BLOW',
            941	=>'DARK-DBHC-8QQG-BLOW',
            942	=>'DARK-WMX1-6LLX-BLOW',
            943	=>'DARK-HW82-AS3G-BLOW',
            944	=>'DARK-7DHV-6DOC-BLOW',
            945	=>'DARK-P8C5-W6LL-BLOW',
            946	=>'DARK-ZZBF-977V-BLOW',
            947	=>'DARK-TGVQ-F9JO-BLOW',
            948	=>'DARK-V8F8-NDIX-BLOW',
            949	=>'DARK-5Z38-K4K4-BLOW',
            950	=>'DARK-9IU1-L2AL-BLOW',
            951	=>'DARK-MUST-NIC8-BLOW',
            952	=>'DARK-ZCF6-6G0I-BLOW',
            953	=>'DARK-FP39-OOYW-BLOW',
            954	=>'DARK-FM8N-07B8-BLOW',
            955	=>'DARK-YB9J-I24H-BLOW',
            956	=>'DARK-9DUZ-BLAM-BLOW',
            957	=>'DARK-OYAP-4KFO-BLOW',
            958	=>'DARK-DKWU-JZUB-BLOW',
            959	=>'DARK-9PUJ-I5P9-BLOW',
            960	=>'DARK-MCRB-2D6S-BLOW',
            961	=>'DARK-D3AX-9QP3-BLOW',
            962	=>'DARK-W0J3-SSX9-BLOW',
            963	=>'DARK-7UVZ-YVA1-BLOW',
            964	=>'DARK-MRG6-NM1I-BLOW',
            965	=>'DARK-EHMC-VA2A-BLOW',
            966	=>'DARK-8RC0-HDX6-BLOW',
            967	=>'DARK-S4T7-BRFD-BLOW',
            968	=>'DARK-1M89-F7NF-BLOW',
            969	=>'DARK-7J9Z-QGTB-BLOW',
            970	=>'DARK-MISW-2SGW-BLOW',
            971	=>'DARK-70VC-MCCS-BLOW',
            972	=>'DARK-9Y34-CAMW-BLOW',
            973	=>'DARK-FTPE-N6BQ-BLOW',
            974	=>'DARK-OCSB-W21W-BLOW',
            975	=>'DARK-TK3K-D4BO-BLOW',
            976	=>'DARK-KN0N-R5FY-BLOW',
            977	=>'DARK-B70W-YKJB-BLOW',
            978	=>'DARK-D07G-N6LL-BLOW',
            979	=>'DARK-GBRD-ER81-BLOW',
            980	=>'DARK-9XMY-615N-BLOW',
            981	=>'DARK-MU3S-SQ5A-BLOW',
            982	=>'DARK-TA9Z-B22V-BLOW',
            983	=>'DARK-BKE9-PI0E-BLOW',
            984	=>'DARK-EKSZ-NWNA-BLOW',
            985	=>'DARK-GBYP-LABO-BLOW',
            986	=>'DARK-RM4W-NKVK-BLOW',
            987	=>'DARK-GPHQ-IWX7-BLOW',
            988	=>'DARK-Y4P5-LZ3P-BLOW',
            989	=>'DARK-PPBL-ZXXP-BLOW',
            990	=>'DARK-E3LH-MOYR-BLOW',
            991	=>'DARK-E3MA-WW9Z-BLOW',
            992	=>'DARK-K40E-ZSHV-BLOW',
            993	=>'DARK-M1TD-0WXG-BLOW',
            994	=>'DARK-20H7-N0XN-BLOW',
            995	=>'DARK-WBO0-F0XW-BLOW',
            996	=>'DARK-7ZD7-DF9P-BLOW',
            997	=>'DARK-GT8V-YCBG-BLOW',
            998	=>'DARK-GG7Z-L9HL-BLOW',
            999	=>'DARK-1LP9-Z2P0-BLOW',
        );

        $response['code'] = $code_list[$randomize];

        echo json_encode($response);
    }

    function CreateNewRedeemCode()
    {
        $response = array();

        $data = array(
            'item_id' => $this->encryption->encrypt($this->input->post('item_id', true)),
            'item_count' => $this->encryption->encrypt($this->input->post('item_count', true)),
            'item_code' => $this->encryption->encrypt($this->input->post('item_code', true)),
            'cash' => $this->encryption->encrypt($this->input->post('cash', true)),
            'type' => $this->encryption->encrypt($this->input->post('type', true))
        );

        if ($this->encryption->decrypt($data['type']) == 'Item')
        {
            $query = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['item_code'])))->row();
            if ($query)
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Code Already Exists.';

                echo json_encode($response);
            }
            else
            {
                $insert = $this->db->insert('item_code', array(
                    'item_id' => $this->encryption->decrypt($data['item_id']),
                    'item_name' => $this->GetItemName($this->encryption->decrypt($data['item_id'])).' - Redeem Code',
                    'item_count' => $this->encryption->decrypt($data['item_count']),
                    'item_alert' => $this->GetItemName($this->encryption->decrypt($data['item_id'])).' '.($this->encryption->decrypt($data['item_count']) / 24 / 60 / 60). 'Days',
                    'item_code' => $this->encryption->decrypt($data['item_code']),
                    'cash' => null,
                    'type' => $this->encryption->decrypt($data['type'])
                ));

                if ($insert)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Created New Redeem Code.';

                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Create New Redeem Code';

                    echo json_encode($response);
                }
            }
        }
        else if ($this->encryption->decrypt($data['type']) == 'Cash')
        {
            $query = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['item_code'])))->row();
            if ($query)
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Code Already Exists.';

                echo json_encode($response);
            }
            else
            {
                $insert = $this->db->insert('item_code', array(
                    'item_id' => null,
                    'item_name' => null,
                    'item_count' => null,
                    'item_alert' => $this->encryption->decrypt($data['cash']).' DR-Cash',
                    'item_code' => $this->encryption->decrypt($data['item_code']),
                    'cash' => $this->encryption->decrypt($data['cash']),
                    'type' => $this->encryption->decrypt($data['type'])
                ));

                if ($insert)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Created New Redeem Code.';

                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Create New Redeem Code';

                    echo json_encode($response);
                }
            }
        }
        else
        {
            $query = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['item_code'])))->row();
            if ($query)
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Code Already Exists.';

                echo json_encode($response);
            }
            else
            {
                $insert = $this->db->insert('item_code', array(
                    'item_id' => $this->encryption->decrypt($data['item_id']),
                    'item_name' => $this->GetItemName($this->encryption->decrypt($data['item_id'])).' - Redeem Code',
                    'item_count' => $this->encryption->decrypt($data['item_count']),
                    'item_alert' => $this->GetItemName($this->encryption->decrypt($data['item_id'])).' '.($this->encryption->decrypt($data['item_count']) / 24 / 60 / 60). 'Days & '.$this->encryption->decrypt($data['cash']).' DR-Cash',
                    'item_code' => $this->encryption->decrypt($data['item_code']),
                    'cash' => $this->encryption->decrypt($data['cash']),
                    'type' => $this->encryption->decrypt($data['type'])
                ));

                if ($insert)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Created New Redeem Code.';

                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Create New Redeem Code';

                    echo json_encode($response);
                }
            }
        }
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function GetAllRedeemCode()
    {
        return $this->db->get('item_code')->result_array();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query)
        {
            return $query->item_name;
        }
    }

    function GetTotalRedeem($item_code)
    {
        return $this->db->get_where('check_user_itemcode', array('item_code' => $item_code))->num_rows();
    }

    function DeleteCode()
    {
        $response = array();

        $data = array(
            'item_code' => $this->encryption->encrypt($this->input->post('item_code', true))
        );

        $query = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['item_code'])))->row();
        if ($query)
        {
            $delete = $this->db->where('item_code', $query->item_code)->delete('item_code');
            if ($delete)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Redeem Code.';

                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Redeem Code.';

                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Redeem Code';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>