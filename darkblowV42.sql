/*
 Navicat Premium Data Transfer

 Source Server         : Postgres 5432
 Source Server Type    : PostgreSQL
 Source Server Version : 140000
 Source Host           : localhost:5432
 Source Catalog        : darkblowproject
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140000
 File Encoding         : 65001

 Date: 11/01/2022 21:57:16
*/


-- ----------------------------
-- Sequence structure for account_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."account_id_seq";
CREATE SEQUENCE "public"."account_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for api_keys_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."api_keys_id_seq";
CREATE SEQUENCE "public"."api_keys_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for api_keys_limit_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."api_keys_limit_id_seq";
CREATE SEQUENCE "public"."api_keys_limit_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for api_keys_logs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."api_keys_logs_id_seq";
CREATE SEQUENCE "public"."api_keys_logs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for auto_ban_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."auto_ban_seq";
CREATE SEQUENCE "public"."auto_ban_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ban_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ban_seq";
CREATE SEQUENCE "public"."ban_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for channels_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."channels_id_seq";
CREATE SEQUENCE "public"."channels_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for check_event_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."check_event_seq";
CREATE SEQUENCE "public"."check_event_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for check_user_attendance_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."check_user_attendance_id_seq";
CREATE SEQUENCE "public"."check_user_attendance_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for check_user_itemcode_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."check_user_itemcode_seq";
CREATE SEQUENCE "public"."check_user_itemcode_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for check_user_voucher_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."check_user_voucher_id_seq";
CREATE SEQUENCE "public"."check_user_voucher_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for clan_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."clan_seq";
CREATE SEQUENCE "public"."clan_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for clans_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."clans_id_seq";
CREATE SEQUENCE "public"."clans_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for contas_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."contas_seq";
CREATE SEQUENCE "public"."contas_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for event_attendance_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."event_attendance_id_seq";
CREATE SEQUENCE "public"."event_attendance_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for gameservers_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."gameservers_id_seq";
CREATE SEQUENCE "public"."gameservers_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for gift_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."gift_id_seq";
CREATE SEQUENCE "public"."gift_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ipsystem_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ipsystem_id_seq";
CREATE SEQUENCE "public"."ipsystem_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for item_voucher_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."item_voucher_id_seq";
CREATE SEQUENCE "public"."item_voucher_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for items_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."items_id_seq";
CREATE SEQUENCE "public"."items_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for jogador_amigo_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."jogador_amigo_seq";
CREATE SEQUENCE "public"."jogador_amigo_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for jogador_inventario_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."jogador_inventario_seq";
CREATE SEQUENCE "public"."jogador_inventario_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for jogador_mensagem_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."jogador_mensagem_seq";
CREATE SEQUENCE "public"."jogador_mensagem_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for launcher_launcherkey_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."launcher_launcherkey_id_seq";
CREATE SEQUENCE "public"."launcher_launcherkey_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for launcher_loghistory_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."launcher_loghistory_id_seq";
CREATE SEQUENCE "public"."launcher_loghistory_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for launcher_version_control_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."launcher_version_control_id_seq";
CREATE SEQUENCE "public"."launcher_version_control_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for loja_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."loja_seq";
CREATE SEQUENCE "public"."loja_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for message_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."message_id_seq";
CREATE SEQUENCE "public"."message_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for player_characters_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."player_characters_id_seq";
CREATE SEQUENCE "public"."player_characters_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for player_eqipment_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."player_eqipment_id_seq";
CREATE SEQUENCE "public"."player_eqipment_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for player_friends_player_account_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."player_friends_player_account_id_seq";
CREATE SEQUENCE "public"."player_friends_player_account_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for player_topups_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."player_topups_seq";
CREATE SEQUENCE "public"."player_topups_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for players_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."players_id_seq";
CREATE SEQUENCE "public"."players_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for storage_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."storage_seq";
CREATE SEQUENCE "public"."storage_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for templates_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."templates_id_seq";
CREATE SEQUENCE "public"."templates_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for trade_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."trade_id_seq";
CREATE SEQUENCE "public"."trade_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_adminpanel_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_adminpanel_id_seq";
CREATE SEQUENCE "public"."web_adminpanel_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_all_log_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_all_log_id_seq";
CREATE SEQUENCE "public"."web_all_log_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 999999999
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_api_data_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_api_data_id_seq";
CREATE SEQUENCE "public"."web_api_data_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_download_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_download_seq";
CREATE SEQUENCE "public"."web_download_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_email_confirmation_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_email_confirmation_id_seq";
CREATE SEQUENCE "public"."web_email_confirmation_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_exchangeticket_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_exchangeticket_seq";
CREATE SEQUENCE "public"."web_exchangeticket_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_giftitem_log_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_giftitem_log_seq";
CREATE SEQUENCE "public"."web_giftitem_log_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 99999999
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_launcher_ipaddress_id
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_launcher_ipaddress_id";
CREATE SEQUENCE "public"."web_launcher_ipaddress_id" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_news_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_news_id_seq";
CREATE SEQUENCE "public"."web_news_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 999999999
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_quickslide_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_quickslide_id_seq";
CREATE SEQUENCE "public"."web_quickslide_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 999999999
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_rankinfo_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_rankinfo_id_seq";
CREATE SEQUENCE "public"."web_rankinfo_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 99
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_recharge_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_recharge_id_seq";
CREATE SEQUENCE "public"."web_recharge_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 999999999
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_report_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_report_id_seq";
CREATE SEQUENCE "public"."web_report_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_tokenkey_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_tokenkey_id_seq";
CREATE SEQUENCE "public"."web_tokenkey_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for webdata_news_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."webdata_news_seq";
CREATE SEQUENCE "public"."webdata_news_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 999999999
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for webshop_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."webshop_id_seq";
CREATE SEQUENCE "public"."webshop_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 999999999
START 1
CACHE 1;

-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS "public"."accounts";
CREATE TABLE "public"."accounts" (
  "login" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "password" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "player_id" int8 NOT NULL DEFAULT nextval('account_id_seq'::regclass),
  "player_name" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "name_color" int4 NOT NULL DEFAULT 0,
  "clan_id" int4 NOT NULL DEFAULT 0,
  "rank" int4 NOT NULL DEFAULT 31,
  "gp" int4 NOT NULL DEFAULT 250000,
  "exp" int4 NOT NULL DEFAULT 1690000,
  "pc_cafe" int4 NOT NULL DEFAULT 1,
  "fights" int4 NOT NULL DEFAULT 0,
  "fights_win" int4 NOT NULL DEFAULT 0,
  "fights_lost" int4 NOT NULL DEFAULT 0,
  "kills_count" int4 NOT NULL DEFAULT 0,
  "deaths_count" int4 NOT NULL DEFAULT 0,
  "headshots_count" int4 NOT NULL DEFAULT 0,
  "escapes" int4 NOT NULL DEFAULT 0,
  "access_level" int4 NOT NULL DEFAULT 0,
  "lastip" varchar(32) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "email" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "last_rankup_date" int8 NOT NULL DEFAULT 1010000,
  "money" int4 NOT NULL DEFAULT 10000,
  "online" bool NOT NULL DEFAULT false,
  "weapon_primary" int4 NOT NULL DEFAULT 100003004,
  "weapon_secondary" int4 NOT NULL DEFAULT 601002003,
  "weapon_melee" int4 NOT NULL DEFAULT 702001001,
  "weapon_thrown_normal" int4 NOT NULL DEFAULT 803007001,
  "weapon_thrown_special" int4 NOT NULL DEFAULT 904007002,
  "char_red" int4 NOT NULL DEFAULT 1001001005,
  "char_blue" int4 NOT NULL DEFAULT 1001002006,
  "char_helmet" int4 NOT NULL DEFAULT 1102003001,
  "char_dino" int4 NOT NULL DEFAULT 1006003041,
  "char_beret" int4 NOT NULL DEFAULT 0,
  "brooch" int4 NOT NULL DEFAULT 10,
  "insignia" int4 NOT NULL DEFAULT 124,
  "medal" int4 NOT NULL DEFAULT 403,
  "blue_order" int4 NOT NULL DEFAULT 147,
  "mission_id1" int4 NOT NULL DEFAULT 0,
  "clanaccess" int4 NOT NULL DEFAULT 0,
  "clandate" int4 NOT NULL DEFAULT 0,
  "effects" int8 NOT NULL DEFAULT 0,
  "fights_draw" int4 NOT NULL DEFAULT 0,
  "mission_id2" int4 NOT NULL DEFAULT 0,
  "mission_id3" int4 NOT NULL DEFAULT 0,
  "totalkills_count" int4 NOT NULL DEFAULT 0,
  "totalfights_count" int4 NOT NULL DEFAULT 0,
  "status" int8 NOT NULL DEFAULT '4294967295'::bigint,
  "last_login" int8 NOT NULL DEFAULT 0,
  "clan_game_pt" int4 NOT NULL DEFAULT 0,
  "clan_wins_pt" int4 NOT NULL DEFAULT 0,
  "last_mac" macaddr NOT NULL DEFAULT '00:00:00:00:00:00'::macaddr,
  "ban_obj_id" int8 NOT NULL DEFAULT 0,
  "kuyraicoin" int4 NOT NULL DEFAULT 1000,
  "hint_question" text COLLATE "pg_catalog"."default",
  "hint_answer" text COLLATE "pg_catalog"."default",
  "date_registered" varchar COLLATE "pg_catalog"."default",
  "email_verification" int4 DEFAULT 0
)
;

-- ----------------------------
-- Records of accounts
-- ----------------------------
INSERT INTO "public"."accounts" VALUES ('darkblow003', 'd250ed959463e3a789bba1a3ad1dfdfc', 195, '', 0, 0, 31, 250000, 1690000, 1, 0, 0, 0, 0, 0, 0, 0, 0, '::1', 'imamrasyidbackup@gmail.com', 1010000, 10000, 'f', 100003004, 601002003, 702001001, 803007001, 904007002, 1001001005, 1001002006, 1102003001, 1006003041, 0, 10, 124, 403, 147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, 1000, 'What was your childhood nickname?', 'imam', '09-12-2021 11:39:40', 0);
INSERT INTO "public"."accounts" VALUES ('darkblow002', 'afa5872b34d51600059662e04e91d7da', 2, 'Bukan [DEV] EyeTracker', 0, 0, 31, 206000, 1690000, 1, 0, 0, 0, 0, 0, 0, 0, 0, '127.0.0.1', 'imamrasyid1@gmail.com', 1010000, 2000029997, 'f', 0, 601034001, 702001237, 803007075, 904007043, 1001001286, 1001002287, 1102003008, 1006003041, 1103003010, 10, 124, 403, 147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4294967295, 2111220659, 0, 0, '28:39:26:0f:73:84', 0, 3323, 'What was your childhood nickname?', 'imam', NULL, 1);
INSERT INTO "public"."accounts" VALUES ('darkblow001', 'afa5872b34d51600059662e04e91d7da', 1, '[DEV] EyeTracker', 0, 0, 54, 184092, 1690112, 1, 2, 0, 1, 0, 0, 0, 0, 6, '127.0.0.1', 'imamrasyid@gmail.com', 1010000, 99997410, 'f', 100003004, 601002003, 702001001, 803007001, 904007002, 1001001005, 1001002004, 1104003246, 1006003041, 0, 10, 124, 403, 147, 0, 0, 0, 0, 1, 0, 0, 0, 2, 4294967295, 2201011543, 0, 0, '28:39:26:0f:73:84', 0, 123, 'What was your childhood nickname?', 'imam', '09-12-2021 11:39:40', 1);
INSERT INTO "public"."accounts" VALUES ('darkblow005', 'd250ed959463e3a789bba1a3ad1dfdfc', 196, '', 0, 0, 31, 250000, 1690000, 1, 0, 0, 0, 0, 0, 0, 0, 0, '::1', 'imamrasyidhorizon@gmail.com', 1010000, 10000, 'f', 100003004, 601002003, 702001001, 803007001, 904007002, 1001001005, 1001002006, 1102003001, 1006003041, 0, 10, 124, 403, 147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, 1000, 'What was your childhood nickname?', 'imam', '23-12-2021 12:19:40', 0);
INSERT INTO "public"."accounts" VALUES ('testakun', 'ea4c03400aaa4b8f5c4901474fb91278', 4, '', 0, 0, 31, 250000, 1690000, 1, 0, 0, 0, 0, 0, 0, 0, 0, '::1', 'testakun@gmail.com', 1010000, 10000, 'f', 100003004, 601002003, 702001001, 803007001, 904007002, 1001001005, 1001002006, 1102003001, 1006003041, 0, 10, 124, 403, 147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, 1000, 'What was your childhood nickname?', 'testakun', '29-12-2021 01:24:16', 0);
INSERT INTO "public"."accounts" VALUES ('testakun24', 'ea4c03400aaa4b8f5c4901474fb91278', 5, '', 0, 0, 31, 250000, 1690000, 1, 0, 0, 0, 0, 0, 0, 0, 0, '::1', 'testakun24@gmail.com', 1010000, 10000, 'f', 100003004, 601002003, 702001001, 803007001, 904007002, 1001001005, 1001002006, 1102003001, 1006003041, 0, 10, 124, 403, 147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, 1000, 'What was your childhood nickname?', 'testakun', '29-12-2021 01:24:32', 0);
INSERT INTO "public"."accounts" VALUES ('deni24pmk', 'ea4c03400aaa4b8f5c4901474fb91278', 6, 'Test', 0, 0, 31, 250103, 1690130, 1, 2, 1, 0, 0, 0, 0, 0, -1, '26.116.228.153', 'deni@gmail.com', 1010000, 99999999, 'f', 100003004, 601002003, 702001001, 803007001, 904007002, 1001001005, 1001002006, 1102003001, 1006003041, 0, 10, 124, 403, 147, 0, 0, 0, 0, 1, 0, 0, 0, 2, 4294967295, 2112291339, 0, 0, '00:00:00:00:00:00', 0, 1000, 'What was your childhood nickname?', 'Komodo', '29-12-2021 01:25:09', 0);

-- ----------------------------
-- Table structure for ban_history
-- ----------------------------
DROP TABLE IF EXISTS "public"."ban_history";
CREATE TABLE "public"."ban_history" (
  "object_id" int8 NOT NULL DEFAULT nextval('ban_seq'::regclass),
  "provider_id" int8 NOT NULL DEFAULT 0,
  "type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "value" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "reason" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "start_date" timestamp(6) NOT NULL DEFAULT '2000-01-01 00:00:00'::timestamp without time zone,
  "end_date" timestamp(6) NOT NULL DEFAULT '2000-01-01 00:00:00'::timestamp without time zone
)
;

-- ----------------------------
-- Records of ban_history
-- ----------------------------

-- ----------------------------
-- Table structure for check_user_attendance
-- ----------------------------
DROP TABLE IF EXISTS "public"."check_user_attendance";
CREATE TABLE "public"."check_user_attendance" (
  "id" int4 NOT NULL DEFAULT nextval('check_user_attendance_id_seq'::regclass),
  "player_id" int4,
  "item_reward" varchar(255) COLLATE "pg_catalog"."default",
  "item_count" int4,
  "date_claimed" varchar(255) COLLATE "pg_catalog"."default" DEFAULT nextval('check_user_attendance_id_seq'::regclass),
  "event_id" int4
)
;

-- ----------------------------
-- Records of check_user_attendance
-- ----------------------------
INSERT INTO "public"."check_user_attendance" VALUES (34, 1, '100003009', 2592000, '29-11-2021', 71);

-- ----------------------------
-- Table structure for check_user_itemcode
-- ----------------------------
DROP TABLE IF EXISTS "public"."check_user_itemcode";
CREATE TABLE "public"."check_user_itemcode" (
  "uid" int4,
  "item_code" varchar(255) COLLATE "pg_catalog"."default",
  "username" varchar(255) COLLATE "pg_catalog"."default",
  "date_redeemed" varchar(255) COLLATE "pg_catalog"."default",
  "id" int4 DEFAULT nextval('check_user_itemcode_seq'::regclass)
)
;

-- ----------------------------
-- Records of check_user_itemcode
-- ----------------------------
INSERT INTO "public"."check_user_itemcode" VALUES (1, 'DARK-2KZR-88VN-BLOW', NULL, '19-12-2021 01:14:35', 33);
INSERT INTO "public"."check_user_itemcode" VALUES (6, 'DARK-3Y0L-WUG5-BLOW', NULL, '29-12-2021 01:47:55', 34);

-- ----------------------------
-- Table structure for check_user_voucher
-- ----------------------------
DROP TABLE IF EXISTS "public"."check_user_voucher";
CREATE TABLE "public"."check_user_voucher" (
  "id" int4 NOT NULL DEFAULT nextval('check_user_voucher_id_seq'::regclass),
  "uid" int4,
  "voucher" varchar(255) COLLATE "pg_catalog"."default",
  "date" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of check_user_voucher
-- ----------------------------

-- ----------------------------
-- Table structure for clan_data
-- ----------------------------
DROP TABLE IF EXISTS "public"."clan_data";
CREATE TABLE "public"."clan_data" (
  "clan_id" int4 NOT NULL DEFAULT nextval('clan_seq'::regclass),
  "clan_rank" int4 NOT NULL DEFAULT 0,
  "clan_name" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "owner_id" int8 NOT NULL DEFAULT 0,
  "logo" int8 NOT NULL DEFAULT 0,
  "color" int4 NOT NULL DEFAULT 0,
  "clan_info" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "clan_news" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "create_date" int4 NOT NULL DEFAULT 0,
  "autoridade" int4 NOT NULL DEFAULT 0,
  "limite_rank" int4 NOT NULL DEFAULT 0,
  "limite_idade" int4 NOT NULL DEFAULT 0,
  "limite_idade2" int4 NOT NULL DEFAULT 0,
  "partidas" int4 NOT NULL DEFAULT 0,
  "vitorias" int4 NOT NULL DEFAULT 0,
  "derrotas" int4 NOT NULL DEFAULT 0,
  "pontos" float4 NOT NULL DEFAULT 1000,
  "max_players" int4 NOT NULL DEFAULT 50,
  "clan_exp" int4 NOT NULL DEFAULT 0,
  "best_exp" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "best_participation" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "best_wins" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "best_kills" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "best_headshot" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of clan_data
-- ----------------------------

-- ----------------------------
-- Table structure for clan_invites
-- ----------------------------
DROP TABLE IF EXISTS "public"."clan_invites";
CREATE TABLE "public"."clan_invites" (
  "clan_id" int4 NOT NULL DEFAULT 0,
  "player_id" int8 NOT NULL DEFAULT 0,
  "dateinvite" int4 NOT NULL DEFAULT 0,
  "text" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of clan_invites
-- ----------------------------

-- ----------------------------
-- Table structure for events_attendance
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_attendance";
CREATE TABLE "public"."events_attendance" (
  "id" int4 NOT NULL DEFAULT nextval('event_attendance_id_seq'::regclass),
  "day" int4 NOT NULL,
  "item_id" int4 NOT NULL,
  "item_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "item_count" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "total_claim" int4 NOT NULL,
  "date" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of events_attendance
-- ----------------------------

-- ----------------------------
-- Table structure for events_login
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_login";
CREATE TABLE "public"."events_login" (
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0,
  "reward_id" int4 NOT NULL DEFAULT 0,
  "reward_count" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of events_login
-- ----------------------------
INSERT INTO "public"."events_login" VALUES (2111241814, 2111241815, 100003002, 2592000);

-- ----------------------------
-- Table structure for events_mapbonus
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_mapbonus";
CREATE TABLE "public"."events_mapbonus" (
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0,
  "map_id" int4 NOT NULL DEFAULT 0,
  "stage_type" int4 NOT NULL DEFAULT 0,
  "percent_xp" int4 NOT NULL DEFAULT 0,
  "percent_gp" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of events_mapbonus
-- ----------------------------

-- ----------------------------
-- Table structure for events_playtime
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_playtime";
CREATE TABLE "public"."events_playtime" (
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0,
  "title" varchar(30) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "seconds_target" int8 NOT NULL DEFAULT 1000,
  "good_reward1" int4 NOT NULL DEFAULT 0,
  "good_reward2" int4 NOT NULL DEFAULT 0,
  "good_count1" int4 NOT NULL DEFAULT 0,
  "good_count2" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of events_playtime
-- ----------------------------

-- ----------------------------
-- Table structure for events_quest
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_quest";
CREATE TABLE "public"."events_quest" (
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of events_quest
-- ----------------------------

-- ----------------------------
-- Table structure for events_rankup
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_rankup";
CREATE TABLE "public"."events_rankup" (
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0,
  "percent_xp" int4 NOT NULL DEFAULT 0,
  "percent_gp" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of events_rankup
-- ----------------------------
INSERT INTO "public"."events_rankup" VALUES (2109010000, 2109010000, 1, 1);

-- ----------------------------
-- Table structure for events_register
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_register";
CREATE TABLE "public"."events_register" (
  "id" varchar(255) COLLATE "pg_catalog"."default",
  "item_id" varchar(255) COLLATE "pg_catalog"."default",
  "item_name" varchar(255) COLLATE "pg_catalog"."default",
  "item_category" varchar(255) COLLATE "pg_catalog"."default",
  "item_count" varchar(255) COLLATE "pg_catalog"."default",
  "stock" int4,
  "is_active" bool
)
;

-- ----------------------------
-- Records of events_register
-- ----------------------------
INSERT INTO "public"."events_register" VALUES ('1', '100003001', 'SG-550 Ext.', '1', '2592000', 10, 't');

-- ----------------------------
-- Table structure for events_visit
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_visit";
CREATE TABLE "public"."events_visit" (
  "event_id" int4 NOT NULL DEFAULT nextval('check_event_seq'::regclass),
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0,
  "title" varchar(59) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "checks" int4 NOT NULL DEFAULT 7,
  "goods1" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "counts1" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "goods2" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "counts2" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of events_visit
-- ----------------------------

-- ----------------------------
-- Table structure for events_xmas
-- ----------------------------
DROP TABLE IF EXISTS "public"."events_xmas";
CREATE TABLE "public"."events_xmas" (
  "start_date" int8 NOT NULL DEFAULT 0,
  "end_date" int8 NOT NULL DEFAULT 0,
  "reward_id" int4 NOT NULL,
  "reward_count" int4 NOT NULL
)
;

-- ----------------------------
-- Records of events_xmas
-- ----------------------------

-- ----------------------------
-- Table structure for friends
-- ----------------------------
DROP TABLE IF EXISTS "public"."friends";
CREATE TABLE "public"."friends" (
  "owner_id" int8 NOT NULL DEFAULT 0,
  "friend_id" int8 NOT NULL DEFAULT 0,
  "state" int4 NOT NULL DEFAULT 0,
  "removed" bool NOT NULL DEFAULT false
)
;

-- ----------------------------
-- Records of friends
-- ----------------------------

-- ----------------------------
-- Table structure for info_basic_items
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_basic_items";
CREATE TABLE "public"."info_basic_items" (
  "acquisition" int4 NOT NULL,
  "item_id" int4 NOT NULL,
  "item_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "item_count" int4 NOT NULL,
  "item_equip" int4 NOT NULL
)
;

-- ----------------------------
-- Records of info_basic_items
-- ----------------------------
INSERT INTO "public"."info_basic_items" VALUES (0, 601002003, 'K-5', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 702001001, 'M-7', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 803007001, 'K-400', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 904007002, 'Smoke', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001001005, 'Red Bulls', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001002006, 'Acid Pol', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1102003001, 'Basic helmet', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 100003004, 'K2', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 300005003, 'SG6-69', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 200004006, 'K1', 1, 3);

-- ----------------------------
-- Table structure for info_channels
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_channels";
CREATE TABLE "public"."info_channels" (
  "server_id" int4 NOT NULL DEFAULT 0,
  "channel_id" int4 NOT NULL DEFAULT 0,
  "type" int4 NOT NULL DEFAULT 0,
  "announce" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of info_channels
-- ----------------------------
INSERT INTO "public"."info_channels" VALUES (1, 0, 1, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 1, 1, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 2, 1, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 3, 1, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 4, 1, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 5, 6, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 6, 6, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 9, 7, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 9, 7, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');
INSERT INTO "public"."info_channels" VALUES (1, 7, 4, 'WELCOME TO POINTBLANK DARKBLOW PRIVATE SERVER - BETA TEST MODE');

-- ----------------------------
-- Table structure for info_cupons_flags
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_cupons_flags";
CREATE TABLE "public"."info_cupons_flags" (
  "item_id" int4 NOT NULL,
  "effect_flag" int8 NOT NULL
)
;

-- ----------------------------
-- Records of info_cupons_flags
-- ----------------------------

-- ----------------------------
-- Table structure for info_gameservers
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_gameservers";
CREATE TABLE "public"."info_gameservers" (
  "id" int4 NOT NULL,
  "state" int4 NOT NULL,
  "type" int4 NOT NULL,
  "ip" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "port" int4 NOT NULL,
  "sync_port" int4 NOT NULL,
  "max_players" int4 NOT NULL
)
;

-- ----------------------------
-- Records of info_gameservers
-- ----------------------------
INSERT INTO "public"."info_gameservers" VALUES (1, 1, 1, '127.0.0.1', 39191, 1909, 1000);
INSERT INTO "public"."info_gameservers" VALUES (0, 1, 1, '127.0.0.1', 39190, 1908, 1000);

-- ----------------------------
-- Table structure for info_login_configs
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_login_configs";
CREATE TABLE "public"."info_login_configs" (
  "config_id" int4 NOT NULL DEFAULT 0,
  "onlyGM" bool NOT NULL DEFAULT false,
  "missions" bool NOT NULL DEFAULT true,
  "UserFileList" varchar(32) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "Version" varchar(8) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "GiftSystem" bool NOT NULL DEFAULT false,
  "ExitURL" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of info_login_configs
-- ----------------------------
INSERT INTO "public"."info_login_configs" VALUES (1, 'f', 't', '5CA56B1E483FF9E24F62BE21C6BA6670', '1.15.42', 't', '');

-- ----------------------------
-- Table structure for info_missions
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_missions";
CREATE TABLE "public"."info_missions" (
  "mission_id" int4 NOT NULL DEFAULT 0,
  "price" int4 NOT NULL DEFAULT 0,
  "enable" bool NOT NULL DEFAULT false
)
;

-- ----------------------------
-- Records of info_missions
-- ----------------------------
INSERT INTO "public"."info_missions" VALUES (14, 15000, 't');
INSERT INTO "public"."info_missions" VALUES (15, 15000, 't');
INSERT INTO "public"."info_missions" VALUES (16, 15000, 't');
INSERT INTO "public"."info_missions" VALUES (2, 3000, 't');
INSERT INTO "public"."info_missions" VALUES (3, 3000, 't');
INSERT INTO "public"."info_missions" VALUES (17, 15000, 't');
INSERT INTO "public"."info_missions" VALUES (13, 0, 't');
INSERT INTO "public"."info_missions" VALUES (1, 0, 'f');
INSERT INTO "public"."info_missions" VALUES (5, 5000, 't');
INSERT INTO "public"."info_missions" VALUES (6, 5000, 't');
INSERT INTO "public"."info_missions" VALUES (7, 10000, 't');
INSERT INTO "public"."info_missions" VALUES (8, 10000, 't');
INSERT INTO "public"."info_missions" VALUES (9, 12000, 't');
INSERT INTO "public"."info_missions" VALUES (10, 12000, 't');
INSERT INTO "public"."info_missions" VALUES (11, 15000, 't');
INSERT INTO "public"."info_missions" VALUES (12, 15000, 't');

-- ----------------------------
-- Table structure for info_rank_awards
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_rank_awards";
CREATE TABLE "public"."info_rank_awards" (
  "rank_id" int4 NOT NULL,
  "item_id" int4 NOT NULL,
  "item_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "item_count" int4 NOT NULL,
  "item_equip" int4 NOT NULL
)
;

-- ----------------------------
-- Records of info_rank_awards
-- ----------------------------
INSERT INTO "public"."info_rank_awards" VALUES (0, 100003193, 'AUG LionFlame', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (0, 601002017, 'C. Phyton G D', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (0, 702001149, 'Fang Blade Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (0, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (1, 200004026, 'Kriss S.V G', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (1, 601014004, 'Dual D-Eagle G', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (1, 702001011, 'Amok Kukri D', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (1, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (2, 300005087, 'Cheytac M200 PBIC2014', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (2, 601002023, 'IMI Uzi 9mm', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (2, 702001066, 'DEATH_SCYTHE', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (2, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (3, 400006017, 'M1887 D', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (3, 601002022, 'Colt 45', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (3, 702001012, 'Mine Axe D', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (3, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (4, 100003121, 'AK47 PBIC2013', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (4, 702001147, 'Karambit', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (4, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (5, 200004075, 'P90 G', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (5, 702001024, 'CandyCane', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (5, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (6, 300005015, 'L11501 G', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (6, 702001021, 'Keris', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (6, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (7, 400006018, 'SPAS15_MSC', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (7, 702001041, 'Arabian Sword', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (7, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (8, 100003114, 'M401 Elite', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (8, 702001017, 'FANG_BLASE', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (8, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (9, 200004136, 'OA93 G', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (9, 702001017, 'FANG_BLASE', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (9, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (10, 300005017, 'L115A1_D', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (10, 803007062, 'K400 Alien', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (11, 400006011, '870MCS_W_D', 172800, 1);
INSERT INTO "public"."info_rank_awards" VALUES (11, 702001047, 'Keris XMAS', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (12, 601002052, 'C. Python TOY', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (12, 1001001034, 'Bella', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (13, 601002011, 'Glock18', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (13, 1001001011, 'Reinforced_D-Fox', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (14, 601002011, 'Glock18', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (14, 1001002014, 'Reinforced_Hide', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (15, 601002021, 'Glock18 D', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (15, 1001002051, 'Hide Kopassus', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (16, 601002021, 'Glock18 D', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (16, 1105003001, 'Santa HAT', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (17, 601002026, 'HK69', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (17, 1001002033, 'Chou', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (18, 601002083, 'C. Phyton BEAST', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (18, 1001001013, 'Reinforced_ViperRed', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (19, 601002083, 'C. Phyton BEAST', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (19, 1001002012, 'Reinforced_Leopard', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (20, 601002083, 'C. Phyton BEAST', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (20, 1001002053, 'Hide Soccer', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (21, 702001017, 'FANG_BLADE', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (21, 1104003015, 'Alien Masc', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (22, 702001017, 'FANG_BLADE', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (22, 1104003131, 'Mask Sheep', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (23, 702001017, 'FANG_BLADE', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (23, 1104003129, 'Mask PBIC2013', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (24, 702001004, 'Kukri', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (24, 1105003018, 'Chicken Hat', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (25, 702001049, 'Arabian Sword 2', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (25, 1105003010, 'Cangaceiro Hat', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (26, 702001009, 'M7 G', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (26, 1105003009, 'TOY Hat', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (27, 702001018, 'Ballistic Knife', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (27, 1105003001, 'Santa Hat', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (28, 100003063, 'AUG A3 Esport', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (28, 702001009, 'M7 G', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (29, 300005128, 'RangeMaster 338 CAMO', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (29, 702001012, 'Mine Axe D', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (30, 300005132, 'Tactilite T2 G', 259200, 1);
INSERT INTO "public"."info_rank_awards" VALUES (30, 702001066, 'Death Scythe', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (31, 702001057, 'Fang Blade Inferno', 2592001, 1);
INSERT INTO "public"."info_rank_awards" VALUES (31, 1105003010, 'Cangaceiro Hat', 2592001, 1);
INSERT INTO "public"."info_rank_awards" VALUES (32, 200004011, 'P90_DOTSIGHT', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (32, 702001011, 'Amok Kukri D', 2592001, 1);
INSERT INTO "public"."info_rank_awards" VALUES (33, 1300027003, 'Recarregamento Rapido', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (34, 1301047000, 'Alteração de Nick', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (35, 1300030003, 'Bullet Proof Vest', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (36, 1300026003, 'Troca Rápida', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (37, 1300032003, 'Hollow Point Plus', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (38, 1300017003, 'Receber Drop', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (39, 1301047000, 'Alteração de nick', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (40, 1300162007, 'O bom perdedor', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (41, 1300080003, '100% Redução de Respawn', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (42, 1300031007, 'Bala de Ferro', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (43, 1300034030, 'C4 Speed Kit', 0, 1);
INSERT INTO "public"."info_rank_awards" VALUES (44, 1301047000, 'Alteração de nick', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (45, 1001001286, 'Viper General', 2592000, 1);
INSERT INTO "public"."info_rank_awards" VALUES (45, 1001002287, 'Hide General', 2592000, 1);
INSERT INTO "public"."info_rank_awards" VALUES (45, 1103003016, 'Beret General', 1, 3);
INSERT INTO "public"."info_rank_awards" VALUES (46, 0, '0', 0, 1);
INSERT INTO "public"."info_rank_awards" VALUES (47, 0, '0', 0, 1);
INSERT INTO "public"."info_rank_awards" VALUES (48, 0, '0', 0, 1);
INSERT INTO "public"."info_rank_awards" VALUES (49, 0, '0', 0, 1);
INSERT INTO "public"."info_rank_awards" VALUES (50, 0, '0', 0, 1);

-- ----------------------------
-- Table structure for item_code
-- ----------------------------
DROP TABLE IF EXISTS "public"."item_code";
CREATE TABLE "public"."item_code" (
  "item_id" varchar(32) COLLATE "pg_catalog"."default",
  "item_name" varchar(255) COLLATE "pg_catalog"."default",
  "item_count" varchar(255) COLLATE "pg_catalog"."default",
  "item_alert" varchar(255) COLLATE "pg_catalog"."default",
  "item_code" varchar(255) COLLATE "pg_catalog"."default",
  "cash" varchar(32) COLLATE "pg_catalog"."default",
  "type" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of item_code
-- ----------------------------
INSERT INTO "public"."item_code" VALUES ('200004196', 'Kriss S.V Harimau - Redeem Code', '2592000', 'Kriss S.V Harimau 30Days', 'DARK-2KZR-88VN-BLOW', NULL, 'Item');
INSERT INTO "public"."item_code" VALUES (NULL, NULL, NULL, '50000 DR-Cash', 'DARK-MKNS-997X-BLOW', '50000', 'Cash');
INSERT INTO "public"."item_code" VALUES ('200004214', 'OA-93 PBNC2015 U.S. - Redeem Code', '2592000', 'OA-93 PBNC2015 U.S. 30Days', 'DARK-3Y0L-WUG5-BLOW', NULL, 'Item');
INSERT INTO "public"."item_code" VALUES ('100003002', 'AK-47 Ext. - Redeem Code', '259200', 'AK-47 Ext. 3Days', 'DARK-OF2O-318V-BLOW', NULL, 'Item');

-- ----------------------------
-- Table structure for item_goods_sets
-- ----------------------------
DROP TABLE IF EXISTS "public"."item_goods_sets";
CREATE TABLE "public"."item_goods_sets" (
  "set_id" int4 NOT NULL,
  "set_name" varchar(255) COLLATE "pg_catalog"."default",
  "visible" bool DEFAULT true
)
;

-- ----------------------------
-- Records of item_goods_sets
-- ----------------------------

-- ----------------------------
-- Table structure for item_goods_sets_items
-- ----------------------------
DROP TABLE IF EXISTS "public"."item_goods_sets_items";
CREATE TABLE "public"."item_goods_sets_items" (
  "set_id" int4 NOT NULL,
  "item_id" int4 NOT NULL,
  "item_name" varchar(255) COLLATE "pg_catalog"."default",
  "item_consume" int4,
  "item_count" int4,
  "price_money" int4,
  "price_points" int4
)
;

-- ----------------------------
-- Records of item_goods_sets_items
-- ----------------------------

-- ----------------------------
-- Table structure for item_voucher
-- ----------------------------
DROP TABLE IF EXISTS "public"."item_voucher";
CREATE TABLE "public"."item_voucher" (
  "id" int4 NOT NULL DEFAULT nextval('item_voucher_id_seq'::regclass),
  "voucher_item" varchar(255) COLLATE "pg_catalog"."default",
  "voucher_cash" varchar(255) COLLATE "pg_catalog"."default",
  "voucher_webcoin" varchar(255) COLLATE "pg_catalog"."default",
  "voucher_code" varchar(255) COLLATE "pg_catalog"."default",
  "active" bool
)
;

-- ----------------------------
-- Records of item_voucher
-- ----------------------------

-- ----------------------------
-- Table structure for launcher_launcherkey
-- ----------------------------
DROP TABLE IF EXISTS "public"."launcher_launcherkey";
CREATE TABLE "public"."launcher_launcherkey" (
  "id" int4 NOT NULL DEFAULT nextval('launcher_launcherkey_id_seq'::regclass),
  "key" int4,
  "status" int4
)
;

-- ----------------------------
-- Records of launcher_launcherkey
-- ----------------------------
INSERT INTO "public"."launcher_launcherkey" VALUES (9, 91291707, 0);
INSERT INTO "public"."launcher_launcherkey" VALUES (10, 868373180, 0);
INSERT INTO "public"."launcher_launcherkey" VALUES (11, 616959124, 0);
INSERT INTO "public"."launcher_launcherkey" VALUES (12, 95895454, 0);
INSERT INTO "public"."launcher_launcherkey" VALUES (13, 805483974, 1);
INSERT INTO "public"."launcher_launcherkey" VALUES (14, 189975010, 0);
INSERT INTO "public"."launcher_launcherkey" VALUES (15, 158914754, 0);

-- ----------------------------
-- Table structure for launcher_loghistory
-- ----------------------------
DROP TABLE IF EXISTS "public"."launcher_loghistory";
CREATE TABLE "public"."launcher_loghistory" (
  "id" int4 NOT NULL DEFAULT nextval('launcher_loghistory_id_seq'::regclass),
  "ip_address" varchar(255) COLLATE "pg_catalog"."default",
  "date_created" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of launcher_loghistory
-- ----------------------------
INSERT INTO "public"."launcher_loghistory" VALUES (1, '::1', '25-12-2021 07:54:37');
INSERT INTO "public"."launcher_loghistory" VALUES (2, '::1', '25-12-2021 09:02:46');
INSERT INTO "public"."launcher_loghistory" VALUES (3, '::1', '25-12-2021 09:04:11');
INSERT INTO "public"."launcher_loghistory" VALUES (4, '::1', '25-12-2021 09:06:46');
INSERT INTO "public"."launcher_loghistory" VALUES (5, '::1', '25-12-2021 18:55:31');
INSERT INTO "public"."launcher_loghistory" VALUES (6, '::1', '25-12-2021 18:58:23');
INSERT INTO "public"."launcher_loghistory" VALUES (7, '::1', '25-12-2021 22:54:40');
INSERT INTO "public"."launcher_loghistory" VALUES (8, '::1', '25-12-2021 22:56:10');
INSERT INTO "public"."launcher_loghistory" VALUES (9, '::1', '25-12-2021 22:56:34');
INSERT INTO "public"."launcher_loghistory" VALUES (10, '::1', '25-12-2021 23:14:03');
INSERT INTO "public"."launcher_loghistory" VALUES (11, '::1', '25-12-2021 23:14:47');
INSERT INTO "public"."launcher_loghistory" VALUES (12, '::1', '25-12-2021 23:42:31');

-- ----------------------------
-- Table structure for launcher_version_control
-- ----------------------------
DROP TABLE IF EXISTS "public"."launcher_version_control";
CREATE TABLE "public"."launcher_version_control" (
  "id" int4 NOT NULL DEFAULT nextval('launcher_version_control_id_seq'::regclass),
  "ip_address" varchar(255) COLLATE "pg_catalog"."default",
  "mac_address" varchar(255) COLLATE "pg_catalog"."default",
  "current_patch_version" int4,
  "current_launcher_version" int4,
  "date_created" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of launcher_version_control
-- ----------------------------

-- ----------------------------
-- Table structure for nick_history
-- ----------------------------
DROP TABLE IF EXISTS "public"."nick_history";
CREATE TABLE "public"."nick_history" (
  "player_id" int8 NOT NULL DEFAULT 0,
  "from_nick" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "to_nick" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "change_date" int8 NOT NULL DEFAULT 0,
  "motive" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of nick_history
-- ----------------------------
INSERT INTO "public"."nick_history" VALUES (6, '', 'Test', 2112291336, 'First nick');

-- ----------------------------
-- Table structure for player_bonus
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_bonus";
CREATE TABLE "public"."player_bonus" (
  "player_id" int8 NOT NULL DEFAULT 0,
  "bonuses" int4 NOT NULL DEFAULT 0,
  "sightcolor" int4 NOT NULL DEFAULT 4,
  "freepass" int4 NOT NULL DEFAULT 0,
  "fakerank" int4 NOT NULL DEFAULT 55,
  "fakenick" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of player_bonus
-- ----------------------------
INSERT INTO "public"."player_bonus" VALUES (177, 0, 4, 0, 55, '');
INSERT INTO "public"."player_bonus" VALUES (1, 0, 4, 0, 55, '');
INSERT INTO "public"."player_bonus" VALUES (2, 0, 4, 0, 55, '');
INSERT INTO "public"."player_bonus" VALUES (6, 0, 4, 0, 55, '');

-- ----------------------------
-- Table structure for player_configs
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_configs";
CREATE TABLE "public"."player_configs" (
  "owner_id" int8 NOT NULL DEFAULT 0,
  "config" int4 NOT NULL DEFAULT 55,
  "sangue" int4 NOT NULL DEFAULT 1,
  "mira" int4 NOT NULL DEFAULT 0,
  "mao" int4 NOT NULL DEFAULT 0,
  "audio1" int4 NOT NULL DEFAULT 100,
  "audio2" int4 NOT NULL DEFAULT 60,
  "audio_enable" int4 NOT NULL DEFAULT 7,
  "sensibilidade" int4 NOT NULL DEFAULT 50,
  "visao" int4 NOT NULL DEFAULT 70,
  "mouse_invertido" int4 NOT NULL DEFAULT 0,
  "msgconvite" int4 NOT NULL DEFAULT 0,
  "chatsussurro" int4 NOT NULL DEFAULT 0,
  "macro" int4 NOT NULL DEFAULT 31,
  "macro_1" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "macro_2" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "macro_3" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "macro_4" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "macro_5" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "keys" bytea NOT NULL DEFAULT '\x'::bytea
)
;

-- ----------------------------
-- Records of player_configs
-- ----------------------------
INSERT INTO "public"."player_configs" VALUES (177, 55, 3, 2, 0, 30, 60, 6, 10, 80, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\000\\032\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\001\\002\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\026\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\037\\000\\000\\000\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000\\377\\377\\377\\377\\000E\\000\\000\\000');
INSERT INTO "public"."player_configs" VALUES (2, 55, 1, 0, 0, 100, 60, 6, 50, 70, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\026\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\037\\000\\000\\000\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000\\377\\377\\377\\377\\000E\\000\\000\\000');
INSERT INTO "public"."player_configs" VALUES (1, 55, 3, 2, 0, 50, 15, 6, 10, 80, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\000\\032\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\001\\002\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\026\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\037\\000\\000\\000\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000\\377\\377\\377\\377\\000E\\000\\000\\000');
INSERT INTO "public"."player_configs" VALUES (6, 55, 1, 0, 0, 100, 60, 6, 50, 70, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\026\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\037\\000\\000\\000\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000\\377\\377\\377\\377\\000E\\000\\000\\000');

-- ----------------------------
-- Table structure for player_events
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_events";
CREATE TABLE "public"."player_events" (
  "player_id" int8 NOT NULL DEFAULT 0,
  "last_visit_event_id" int4 NOT NULL DEFAULT 0,
  "last_visit_sequence1" int4 NOT NULL DEFAULT 0,
  "last_visit_sequence2" int4 NOT NULL DEFAULT 0,
  "next_visit_date" int4 NOT NULL DEFAULT 0,
  "last_xmas_reward_date" int8 NOT NULL DEFAULT 0,
  "last_playtime_date" int8 NOT NULL DEFAULT 0,
  "last_playtime_value" int4 NOT NULL DEFAULT 0,
  "last_playtime_finish" int4 NOT NULL DEFAULT 0,
  "last_login_date" int8 NOT NULL DEFAULT 0,
  "last_quest_date" int8 NOT NULL DEFAULT 0,
  "last_quest_finish" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of player_events
-- ----------------------------
INSERT INTO "public"."player_events" VALUES (177, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- ----------------------------
-- Table structure for player_items
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_items";
CREATE TABLE "public"."player_items" (
  "object_id" int8 NOT NULL DEFAULT nextval('items_id_seq'::regclass),
  "owner_id" int8 NOT NULL DEFAULT 0,
  "item_id" int4 NOT NULL DEFAULT 0,
  "item_name" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "count" int8 NOT NULL DEFAULT 0,
  "category" int4 NOT NULL DEFAULT 0,
  "equip" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of player_items
-- ----------------------------
INSERT INTO "public"."player_items" VALUES (2, 6, 200004214, 'OA-93 PBNC2015 U.S. - Redeem Code', 2592000, 1, 1);
INSERT INTO "public"."player_items" VALUES (3, 1, 1104003246, 'Meia-Mask PBTC2016', 2201041652, 2, 2);
INSERT INTO "public"."player_items" VALUES (4, 1, 1001002004, 'Keen Eyes', 100, 2, 1);

-- ----------------------------
-- Table structure for player_messages
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_messages";
CREATE TABLE "public"."player_messages" (
  "object_id" int4 NOT NULL DEFAULT nextval('message_id_seq'::regclass),
  "owner_id" int8 NOT NULL DEFAULT 0,
  "sender_id" int8 NOT NULL DEFAULT 0,
  "clan_id" int4 NOT NULL DEFAULT 0,
  "sender_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "text" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "type" int4 NOT NULL DEFAULT 0,
  "state" int4 NOT NULL DEFAULT 1,
  "expire" int8 NOT NULL DEFAULT 0,
  "cb" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of player_messages
-- ----------------------------

-- ----------------------------
-- Table structure for player_missions
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_missions";
CREATE TABLE "public"."player_missions" (
  "owner_id" int8 NOT NULL DEFAULT 0,
  "actual_mission" int4 NOT NULL DEFAULT 0,
  "card1" int4 NOT NULL DEFAULT 0,
  "card2" int4 NOT NULL DEFAULT 0,
  "card3" int4 NOT NULL DEFAULT 0,
  "card4" int4 NOT NULL DEFAULT 0,
  "mission1" bytea NOT NULL DEFAULT '\x'::bytea,
  "mission2" bytea NOT NULL DEFAULT '\x'::bytea,
  "mission3" bytea NOT NULL DEFAULT '\x'::bytea,
  "mission4" bytea NOT NULL DEFAULT '\x'::bytea
)
;

-- ----------------------------
-- Records of player_missions
-- ----------------------------
INSERT INTO "public"."player_missions" VALUES (177, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (1, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (2, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (6, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');

-- ----------------------------
-- Table structure for player_titles
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_titles";
CREATE TABLE "public"."player_titles" (
  "owner_id" int8 NOT NULL DEFAULT 0,
  "titleequiped1" int4 NOT NULL DEFAULT 0,
  "titleequiped2" int4 NOT NULL DEFAULT 0,
  "titleequiped3" int4 NOT NULL DEFAULT 0,
  "titleflags" int8 NOT NULL DEFAULT 0,
  "titleslots" int4 NOT NULL DEFAULT 1
)
;

-- ----------------------------
-- Records of player_titles
-- ----------------------------

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS "public"."shop";
CREATE TABLE "public"."shop" (
  "good_id" int4 NOT NULL DEFAULT 0,
  "item_id" int4 NOT NULL DEFAULT 0,
  "item_name" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "price_gold" int4 NOT NULL DEFAULT 0,
  "price_cash" int4 NOT NULL DEFAULT 0,
  "count" int4 NOT NULL DEFAULT 0,
  "buy_type" int4 NOT NULL DEFAULT 0,
  "buy_type2" int4 NOT NULL DEFAULT 0,
  "buy_type3" int4 NOT NULL DEFAULT 0,
  "tag" int4 NOT NULL DEFAULT 0,
  "title" int4 NOT NULL DEFAULT 0,
  "visibility" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO "public"."shop" VALUES (10011, 100003010, 'M4A1 S.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10048, 100003036, 'AUG A3', 38000, 0, 100, 1, 1, 2, 0, 12, 0);
INSERT INTO "public"."shop" VALUES (10016, 100003017, 'AK-47 Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10018, 100003021, 'M4A1 SI.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10014, 100003014, 'SG-550 S.', 24000, 0, 100, 1, 1, 2, 0, 8, 0);
INSERT INTO "public"."shop" VALUES (10017, 100003019, 'SG-550 Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10020, 100003021, 'M4A1 SI.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10019, 100003021, 'M4A1 SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10023, 100003022, 'M4A1 Wh.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10024, 100003023, 'M4A1 Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10028, 100003025, 'AK-47 SI.+', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10026, 100003025, 'AK-47 SI.+', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10025, 100003023, 'M4A1 Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10027, 100003025, 'AK-47 SI.+', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10030, 100003027, 'G36C Ext. [D-Cash]', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10032, 100003029, 'G36C Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10029, 100003027, 'G36C Ext. [D-Cash]', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10034, 100003031, 'G36C SI. +20% [EXP&POINTS]', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10033, 100003031, 'G36C SI. +20% [EXP&POINTS]', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10035, 100003031, 'G36C SI. +20% [EXP&POINTS]', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10038, 100003032, 'F2000 SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10036, 100003032, 'F2000 SI.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10037, 100003032, 'F2000 SI.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10041, 100003033, 'AK SOPMOD +20%', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10039, 100003033, 'AK SOPMOD +20%', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10044, 100003034, 'G36C SI. +20% [EXP+]', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10040, 100003033, 'AK SOPMOD +20%', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10043, 100003034, 'G36C SI. +20% [EXP+]', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10046, 100003035, 'SG 550 S D.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10045, 100003035, 'SG 550 S D.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10013, 100003013, 'G36C Ext.', 38000, 0, 100, 1, 1, 2, 0, 10, 0);
INSERT INTO "public"."shop" VALUES (10051, 100003037, 'AUG A3 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10050, 100003037, 'AUG A3 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10049, 100003037, 'AUG A3 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10054, 100003038, 'G36C D.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10052, 100003038, 'G36C D.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10053, 100003038, 'G36C D.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10057, 100003039, 'AK SOPMOD D', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10055, 100003039, 'AK SOPMOD D', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10058, 100003040, 'AUG A3 D', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10060, 100003040, 'AUG A3 D', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10059, 100003040, 'AUG A3 D', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10062, 100003041, 'AK SOPMOD CG.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10061, 100003041, 'AK SOPMOD CG.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10065, 100003042, 'M4 SR-16 Lv1', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10063, 100003041, 'AK SOPMOD CG.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10064, 100003042, 'M4 SR-16 Lv1', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10066, 100003042, 'M4 SR-16 Lv1', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10069, 100003043, 'M4 SR-16 Lv2', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10067, 100003043, 'M4 SR-16 Lv2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10068, 100003043, 'M4 SR-16 Lv2', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10080, 100003049, 'FAMAS G2', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10070, 100003044, 'M4 SR-16 Lv3', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10072, 100003044, 'M4 SR-16 Lv3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10075, 100003045, 'M4 SR-16 F.C.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10071, 100003044, 'M4 SR-16 Lv3', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10073, 100003045, 'M4 SR-16 F.C.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10076, 100003046, 'F2000 Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10078, 100003048, 'AUG A3 Black', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10077, 100003048, 'AUG A3 Black', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10079, 100003048, 'AUG A3 Black', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10081, 100003049, 'FAMAS G2', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10084, 100003050, 'FAMAS G2 Commando', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10083, 100003050, 'FAMAS G2 Commando', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10082, 100003050, 'FAMAS G2 Commando', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10087, 100003051, 'FAMAS G2 Sniper', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10085, 100003051, 'FAMAS G2 Sniper', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10086, 100003051, 'FAMAS G2 Sniper', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10088, 100003052, 'FAMAS G2 M203', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10090, 100003052, 'FAMAS G2 M203', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10089, 100003052, 'FAMAS G2 M203', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10009, 100003010, 'M4A1 S.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10091, 100003053, 'SS2-V4 Para Sniper', 36000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10092, 100003054, 'AK-47 Gold D', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10015, 100003015, 'AK SOPMOD Ext.', 38000, 0, 100, 1, 1, 2, 0, 12, 0);
INSERT INTO "public"."shop" VALUES (10003, 100003003, 'M4A1 Ext.', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10004, 100003004, 'K-2', 23000, 0, 100, 0, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10005, 100003005, 'F2000 Ext.', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10002, 100003002, 'AK-47 Ext.', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10007, 100003009, 'AK-47 G.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10010, 100003010, 'M4A1 S.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10006, 100003009, 'AK-47 G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10008, 100003009, 'AK-47 G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10102, 100003062, 'FAMAS G2 Commando E-Sports', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10103, 100003063, 'AUG A3 E-Sports', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10106, 100003064, 'Famas G2 Commando Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10109, 100003065, 'AUG A3 Blue', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10108, 100003064, 'Famas G2 Commando Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10107, 100003064, 'Famas G2 Commando Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10112, 100003068, 'AK-47 FC Red', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10096, 100003060, 'M4A1.', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10113, 100003068, 'AK-47 FC Red', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10119, 100003086, 'AK-47 Goddess', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10115, 100003069, 'SCAR-H CQC', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10111, 100003065, 'AUG A3 Blue', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10114, 100003068, 'AK-47 FC Red', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10116, 100003071, 'AUG A3 PBIC', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10121, 100003090, 'Famas G2 Digital', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10123, 100003090, 'Famas G2 Digital', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10122, 100003090, 'Famas G2 Digital', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10117, 100003071, 'AUG A3 PBIC', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10120, 100003087, 'Famas G2 Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10124, 100003091, 'Famas G2 Commando PBTN', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10133, 100003094, 'SCAR-L Carbine', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10128, 100003092, 'AK SOPMOD R', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10129, 100003092, 'AK SOPMOD R', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10125, 100003091, 'Famas G2 Commando PBTN', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10127, 100003092, 'AK SOPMOD R', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10135, 100003094, 'SCAR-L Carbine', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10130, 100003093, 'AUG A3 Blitz', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10132, 100003093, 'AUG A3 Blitz', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10137, 100003095, 'SCAR-L Recon', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10136, 100003095, 'SCAR-L Recon', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10134, 100003094, 'SCAR-L Carbine', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10131, 100003093, 'AUG A3 Blitz', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10140, 100003096, 'SCAR-L FC', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10146, 100003098, 'M4A1 GRS', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10143, 100003097, 'AUG A3 GRS', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10141, 100003096, 'SCAR-L FC', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10139, 100003096, 'SCAR-L FC', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10138, 100003095, 'SCAR-L Recon', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10147, 100003098, 'M4A1 GRS', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10144, 100003097, 'AUG A3 GRS', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10145, 100003098, 'M4A1 GRS', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10142, 100003097, 'AUG A3 GRS', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10150, 100003099, 'AK SOPMOD GRS', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10148, 100003099, 'AK SOPMOD GRS', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10149, 100003099, 'AK SOPMOD GRS', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10152, 100003100, 'Famas G2 GRS', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10164, 100003106, 'AUG A3 GSL', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10156, 100003103, 'M4 SR-16 D Hunter', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10155, 100003103, 'M4 SR-16 D Hunter', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10151, 100003100, 'Famas G2 GRS', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10158, 100003104, 'AUG A3 GSL', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10157, 100003103, 'M4 SR-16 D Hunter', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10154, 100003102, 'HK-417', 36000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10159, 100003104, 'AUG A3 GSL', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10161, 100003105, 'Famas G2 Commando GSL', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10163, 100003105, 'Famas G2 Commando GSL', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10160, 100003104, 'AUG A3 GSL', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10162, 100003105, 'Famas G2 Commando GSL', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10169, 100003109, 'AUG A3 TW1st', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10165, 100003106, 'AUG A3 GSL', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10171, 100003111, 'AUG A3 Commando', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10174, 100003112, 'AUG A3 Turkey', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10177, 100003114, 'M4A1 Elite', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10166, 100003106, 'AUG A3 GSL', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10167, 100003109, 'AUG A3 TW1st', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10168, 100003109, 'AUG A3 TW1st', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10172, 100003111, 'AUG A3 Commando', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10170, 100003111, 'AUG A3 Commando', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10175, 100003112, 'AUG A3 Turkey', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10178, 100003114, 'M4A1 Elite', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10176, 100003114, 'M4A1 Elite', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10179, 100003115, 'AN-94', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10181, 100003117, 'SG550 Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10182, 100003118, 'Pindad SS2-V4 Para Sniper Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10093, 100003057, 'Vz. 52', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10104, 100003063, 'AUG A3 E-Sports', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10180, 100003116, 'F2000 Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10095, 100003060, 'M4A1.', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10097, 100003060, 'M4A1.', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10118, 100003071, 'AUG A3 PBIC', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10099, 100003061, 'SS2-V4 Para Sniper Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10105, 100003063, 'AUG A3 E-Sports', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10101, 100003062, 'FAMAS G2 Commando E-Sports', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10110, 100003065, 'AUG A3 Blue', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10098, 100003061, 'SS2-V4 Para Sniper Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10205, 100003130, 'AUG A3 G Bloody', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10201, 100003128, 'AUG A3 Azerbaijan', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10196, 100003125, 'AK-47 F.C', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10198, 100003125, 'AK-47 F.C', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10194, 100003122, 'AK47 PBIC2013', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10200, 100003128, 'AUG A3 Azerbaijan', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10199, 100003128, 'AUG A3 Azerbaijan', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10197, 100003125, 'AK-47 F.C', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10202, 100003129, 'AUG A3 Bloody', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10206, 100003130, 'AUG A3 G Bloody', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10204, 100003129, 'AUG A3 Bloody', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10203, 100003129, 'AUG A3 Bloody', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10213, 100003142, 'AUG A3 TH 1st Anniversary', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10207, 100003130, 'AUG A3 G Bloody', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10208, 100003131, 'AUG A3 LATIN3', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10209, 100003131, 'AUG A3 LATIN3', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10211, 100003142, 'AUG A3 TH 1st Anniversary', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10215, 100003143, 'FG 42', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10214, 100003143, 'FG 42', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10212, 100003142, 'AUG A3 TH 1st Anniversary', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10218, 100003144, 'AUG A3 R', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10216, 100003143, 'FG 42', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10219, 100003144, 'AUG A3 R', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10221, 100003146, 'G36C Elite', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10228, 100003148, 'AUG A3 CS', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10222, 100003146, 'G36C Elite', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10217, 100003144, 'AUG A3 R', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10224, 100003147, 'AUG A3 Inferno', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10225, 100003147, 'AUG A3 Inferno', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10220, 100003146, 'G36C Elite', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10226, 100003148, 'AUG A3 CS', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10234, 100003151, 'TAR-21 BR Camo', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10229, 100003149, 'AUG A3 GSL2014', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10233, 100003151, 'TAR-21 BR Camo', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10223, 100003147, 'AUG A3 Inferno', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10227, 100003148, 'AUG A3 CS', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10237, 100003152, 'AK SOPMOD BR Camo', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10238, 100003153, 'SC-2010', 36000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10232, 100003151, 'TAR-21 BR Camo', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10231, 100003149, 'AUG A3 GSL2014', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10235, 100003152, 'AK SOPMOD BR Camo', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10252, 100003159, 'AUG A3 PBIC2014', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10239, 100003154, 'SC-2010 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10243, 100003155, 'AUG A3 Brazuca', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10241, 100003154, 'SC-2010 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10236, 100003152, 'AK SOPMOD BR Camo', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10244, 100003155, 'AUG A3 Brazuca', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10242, 100003155, 'AUG A3 Brazuca', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10240, 100003154, 'SC-2010 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10246, 100003157, 'AUG A3 Champion', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10247, 100003157, 'AUG A3 Champion', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10256, 100003160, 'AUG A3 BR 4th Anniversary', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10245, 100003157, 'AUG A3 Champion', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10248, 100003158, 'AUG A3 W.O.E', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10249, 100003158, 'AUG A3 W.O.E', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10250, 100003158, 'AUG A3 W.O.E', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10253, 100003159, 'AUG A3 PBIC2014', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10255, 100003160, 'AUG A3 BR 4th Anniversary', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10251, 100003159, 'AUG A3 PBIC2014', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10259, 100003161, 'AUG A3 Pied', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10257, 100003161, 'AUG A3 Pied', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10258, 100003161, 'AUG A3 Pied', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10260, 100003163, 'AUG A3 PC Cafe', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10261, 100003164, 'AUG A3 G E-Sport', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10263, 100003164, 'AUG A3 G E-Sport', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10262, 100003164, 'AUG A3 G E-Sport', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10266, 100003165, 'AUG A3 Toy', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10268, 100003167, 'AN-94 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10265, 100003165, 'AUG A3 Toy', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10269, 100003167, 'AN-94 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10272, 100003168, 'HK-417 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10267, 100003167, 'AN-94 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10264, 100003165, 'AUG A3 Toy', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10273, 100003169, 'TAR-21 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10270, 100003168, 'HK-417 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10192, 100003122, 'AK47 PBIC2013', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10185, 100003119, 'AK-47 Elite', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10184, 100003119, 'AK-47 Elite', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10271, 100003168, 'HK-417 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10190, 100003121, 'M4A1 PBIC2013', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10188, 100003120, 'AUG A3 PBIC2013', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10186, 100003120, 'AUG A3 PBIC2013', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10189, 100003121, 'M4A1 PBIC2013', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10195, 100003123, 'TAR-21', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10191, 100003121, 'M4A1 PBIC2013', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10193, 100003122, 'AK47 PBIC2013', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10288, 100003175, 'SCAR-L Carbine D.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10286, 100003175, 'SCAR-L Carbine D.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10290, 100003176, 'SCAR-L Recon D. (Noname)', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10293, 100003177, 'XM8 GOLD', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10287, 100003175, 'SCAR-L Carbine D.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10289, 100003176, 'SCAR-L Recon D. (Noname)', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10301, 100003181, 'AUG A3 Sheep', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10294, 100003177, 'XM8 GOLD', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10291, 100003176, 'SCAR-L Recon D. (Noname)', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10295, 100003178, 'AUG A3 CoupleBreaker', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10297, 100003178, 'AUG A3 CoupleBreaker', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10302, 100003181, 'AUG A3 Sheep', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10292, 100003177, 'XM8 GOLD', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10298, 100003180, 'AUG A3 CNY 2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10300, 100003180, 'AUG A3 CNY 2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10299, 100003180, 'AUG A3 CNY 2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10306, 100003182, 'TAR-21 Sheep', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10304, 100003182, 'TAR-21 Sheep', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10312, 100003184, 'AUG A3 Newborn 2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10303, 100003181, 'AUG A3 Sheep', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10305, 100003182, 'TAR-21 Sheep', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10311, 100003184, 'AUG A3 Newborn 2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10308, 100003183, 'AUG A3 GRS2', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10313, 100003185, 'SC-2010 Newborn 2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10318, 100003186, 'AUG A3 GSL 2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10309, 100003183, 'AUG A3 GRS2', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10310, 100003184, 'AUG A3 Newborn 2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10307, 100003183, 'AUG A3 GRS2', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10314, 100003185, 'SC-2010 Newborn 2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10316, 100003186, 'AUG A3 GSL 2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10315, 100003185, 'SC-2010 Newborn 2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10320, 100003187, 'AUG A3 PBNC 6', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10324, 100003188, 'AUG A3 Ongame', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10323, 100003188, 'AUG A3 Ongame', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10317, 100003186, 'AUG A3 GSL 2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10319, 100003187, 'AUG A3 PBNC 6', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10321, 100003187, 'AUG A3 PBNC 6', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10327, 100003189, 'AUG A3 Redemption', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10329, 100003190, 'AUG A3 Summer', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10331, 100003191, 'SC-2010 Rose', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10326, 100003189, 'AUG A3 Redemption', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10325, 100003189, 'AUG A3 Redemption', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10332, 100003191, 'SC-2010 Rose', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10328, 100003190, 'AUG A3 Summer', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10281, 100003171, 'AUG A3 LATIN4', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10333, 100003191, 'SC-2010 Rose', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10334, 100003192, 'AUG A3 Rose', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10335, 100003192, 'AUG A3 Rose', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10336, 100003192, 'AUG A3 Rose', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10339, 100003193, 'AUG A3 LionFlame', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10340, 100003194, 'AUG A3 Independence', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10338, 100003193, 'AUG A3 Lion Flame', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10344, 100003195, 'AUG A3 Brazil', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10343, 100003195, 'AUG A3 Brazil', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10341, 100003194, 'AUG A3 Independence', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10337, 100003193, 'AUG A3 Lion Flame', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10342, 100003194, 'AUG A3 Independence', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10351, 100003197, 'AUG A3 4Game', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10347, 100003196, 'AUG A3 PBST2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10352, 100003198, 'AUG A3 4Game SE', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10345, 100003195, 'AUG A3 Brazil', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10348, 100003196, 'AUG A3 PBST2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10350, 100003197, 'AUG A3 4Game', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10354, 100003198, 'AUG A3 4Game SE', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10353, 100003198, 'AUG A3 4Game SE', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10356, 100003199, 'AUG A3 México', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10349, 100003197, 'AUG A3 4Game', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10355, 100003199, 'AUG A3 México', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10358, 100003200, 'AUG A3 Bolivia', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10357, 100003199, 'AUG A3 México', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10359, 100003200, 'AUG A3 Bolivia', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10361, 100003201, 'AUG A3 Equador', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10360, 100003200, 'AUG A3 Bolivia', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10362, 100003201, 'AUG A3 Equador', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10275, 100003169, 'TAR-21 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10277, 100003170, 'SCAR-L Carbine Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10280, 100003171, 'AUG A3 LATIN4', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10278, 100003170, 'SCAR-L Carbine Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10330, 100003190, 'AUG A3 Summer', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10279, 100003171, 'AUG A3 LATIN4', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10283, 100003173, 'AUG A3 Carnival', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10285, 100003174, 'XM8', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10284, 100003173, 'AUG A3 Carnival', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10282, 100003173, 'AUG A3 Carnival', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10381, 100003207, 'AUG A3 Lebaran2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10371, 100003204, 'AUG A3 Argentina', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10374, 100003205, 'AUG A3 Chile', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10382, 100003209, 'Vz.52 BlackPearl', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10376, 100003206, 'AUG A3 Peru', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10379, 100003207, 'AUG A3 Lebaran2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10378, 100003206, 'AUG A3 Peru', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10385, 100003210, 'AUG A3 Egypt', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10388, 100003211, 'AUG A3 Jordan', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10380, 100003207, 'AUG A3 Lebaran2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10384, 100003209, 'Vz.52 BlackPearl', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10387, 100003210, 'AUG A3 Egypt', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10383, 100003209, 'Vz.52 BlackPearl', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10389, 100003211, 'AUG A3 Jordan', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10393, 100003212, 'AUG A3 Saudi', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10386, 100003210, 'AUG A3 Egypt', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10392, 100003212, 'AUG A3 Saudi', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10390, 100003211, 'AUG A3 Jordan', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10391, 100003212, 'AUG A3 Saudi', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10395, 100003213, 'AUG A3 UAE', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10394, 100003213, 'AUG A3 UAE', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10399, 100003214, 'AUG A3 PBNC2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10398, 100003214, 'AUG A3 PBNC2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10396, 100003213, 'AUG A3 UAE', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10405, 100003216, 'AUG A3 Mech', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10402, 100003215, 'AUG A3 PBTC2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10401, 100003215, 'AUG A3 PBTC2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10403, 100003216, 'AUG A3 Mech', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10400, 100003215, 'AUG A3 PBTC2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10404, 100003216, 'AUG A3 Mech', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10411, 100003218, 'SCAR-L  F.C PBNC2015US', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10406, 100003217, 'AUG A3 DarkDays', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10408, 100003217, 'AUG A3 DarkDays', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10407, 100003217, 'AUG A3 DarkDays', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10412, 100003219, 'AUG A3 PBIC2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10409, 100003218, 'SCAR-L  F.C PBNC2015US', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10410, 100003218, 'SCAR-L  F.C PBNC2015US', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10413, 100003219, 'AUG A3 PBIC2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10414, 100003219, 'AUG A3 PBIC2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10417, 100003221, 'AK-47 SOPMOD Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10420, 100003222, 'AUG A3 VeraCruz', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10421, 100003223, 'M14-EBR', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10415, 100003221, 'AK-47 SOPMOD Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10416, 100003221, 'AK-47 SOPMOD Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10423, 100003224, 'AUG A3 Basketball', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10424, 100003224, 'AUG A3 Basketball', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10425, 100003225, 'AK-47 SOPMOD Medical', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10422, 100003224, 'AUG A3 Basketball', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10418, 100003222, 'AUG A3 VeraCruz', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10426, 100003225, 'AK-47 SOPMOD Medical', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10430, 100003226, 'SC-2010 Medical', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10431, 100003227, 'AUG A3 Cobra', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10427, 100003225, 'AK-47 SOPMOD Medical', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10428, 100003226, 'SC-2010 Medical', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10432, 100003227, 'AUG A3 Cobra', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10439, 100003229, 'G36C Ext. Camo Soldier', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10434, 100003228, 'AUG A3 Camo Soldier', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10433, 100003227, 'AUG A3 Cobra', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10429, 100003226, 'SC-2010 Medical', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10441, 100003231, 'AUG A3 Steam', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10435, 100003228, 'AUG A3 Camo Soldier', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10436, 100003228, 'AUG A3 Camo Soldier', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10438, 100003229, 'G36C Ext. Camo Soldier', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10437, 100003229, 'G36C Ext. Camo Soldier', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10443, 100003232, 'AUG A3 Fear', 0, 36, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10442, 100003231, 'AUG A3 Steam', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10444, 100003232, 'AUG A3 Fear', 0, 34, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10450, 100003234, 'AUG A3 Latin5', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10446, 100003233, 'AUG A3 SPY', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10447, 100003233, 'AUG A3 SPY', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10448, 100003233, 'AUG A3 SPY', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10445, 100003232, 'AUG A3 Fear', 0, 35, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10451, 100003234, 'AUG A3 Latin5', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10365, 100003202, 'AUG A3 Colombia', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10368, 100003203, 'AUG A3 Venezuela', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10449, 100003234, 'AUG A3 Latin5', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10370, 100003204, 'AUG A3 Argentina', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10364, 100003202, 'AUG A3 Colombia', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10366, 100003202, 'AUG A3 Colombia', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10375, 100003205, 'AUG A3 Chile', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10369, 100003203, 'AUG A3 Venezuela', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10372, 100003204, 'AUG A3 Argentina', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10377, 100003206, 'AUG A3 Peru', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10367, 100003203, 'AUG A3 Venezuela', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10466, 100003242, 'SC-2010 XMAS2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10469, 100003243, 'AUG A3 Monkey', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10459, 100003240, 'AUG A3 DFN', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10467, 100003242, 'SC-2010 XMAS2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10463, 100003241, 'AUG A3 XMAS2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10468, 100003243, 'AUG A3 Monkey', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10476, 100003245, 'AUG A3 Arena Deluxe', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10471, 100003244, 'AUG A3 Arena Normal', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10473, 100003244, 'AUG A3 Arena Normal', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10472, 100003244, 'AUG A3 Arena Normal', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10470, 100003243, 'AUG A3 Monkey', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10478, 100003247, 'AK-12 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10479, 100003247, 'AK-12 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10474, 100003245, 'AUG A3 Arena Deluxe', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10477, 100003246, 'AK-12', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10480, 100003247, 'AK-12 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10475, 100003245, 'AUG A3 Arena Deluxe', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10486, 100003249, 'AUG A3 Silence', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10483, 100003248, 'AUG A3 VeraCruz 2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10484, 100003249, 'AUG A3 Silence', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10482, 100003248, 'AUG A3 VeraCruz 2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10481, 100003248, 'AUG A3 VeraCruz 2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10489, 100003250, 'AUG A3 Cupid', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10487, 100003250, 'AUG A3 Cupid', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10485, 100003249, 'AUG A3 Silence', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10495, 100003252, 'AK SOPMOD Sakura', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10490, 100003251, 'AUG A3 Sakura', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10491, 100003251, 'AUG A3 Sakura', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10492, 100003251, 'AUG A3 Sakura', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10494, 100003252, 'AK SOPMOD Sakura', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10493, 100003252, 'AK SOPMOD Sakura', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10496, 100003253, 'AUG A3 Serpent', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10498, 100003253, 'AUG A3 Serpent', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10497, 100003253, 'AUG A3 Serpent', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10500, 100003254, 'WaterGun 2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10499, 100003254, 'WaterGun 2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10503, 100003255, 'AUG A3 GRS3', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10502, 100003255, 'AUG A3 GRS3', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10501, 100003254, 'WaterGun 2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10507, 100003256, 'AUG A3 Beast', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10504, 100003255, 'AUG A3 GRS3', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10510, 100003257, 'AUG A3 PBGC', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10506, 100003256, 'AUG A3 Beast', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10512, 100003258, 'AUG A3 GSL2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10505, 100003256, 'AUG A3 Beast', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10508, 100003257, 'AUG A3 PBGC', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10509, 100003257, 'AUG A3 PBGC', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10515, 100003259, 'AUG A3 Tiger-Normal', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10516, 100003259, 'AUG A3 Tiger-Normal', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10514, 100003259, 'AUG A3 Tiger-Normal', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10511, 100003258, 'AUG A3 GSL2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10517, 100003260, 'AUG A3 Tiger-Deluxe', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10518, 100003260, 'AUG A3 Tiger-Deluxe', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10520, 100003261, 'AUG A3 Midnight2', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10522, 100003261, 'AUG A3 Midnight2', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10519, 100003260, 'AUG A3 Tiger-Deluxe', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10525, 100003262, 'AUG A3 Skeleton', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10521, 100003261, 'AUG A3 Midnight2', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10526, 100003263, 'AUG A3 E-Sport2', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10523, 100003262, 'AUG A3 Skeleton', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10528, 100003263, 'AUG A3 E-Sport2', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10524, 100003262, 'AUG A3 Skeleton', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10527, 100003263, 'AUG A3 E-Sport2', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10529, 100003264, 'Famas G2 M203 E-Sport2', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10530, 100003264, 'Famas G2 M203 E-Sport2', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10532, 100003265, 'AUG A3 Dragon', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10531, 100003264, 'Famas G2 M203 E-Sport2', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10534, 100003265, 'AUG A3 Dragon', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10539, 100003267, 'AUG A3 Mummy', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10536, 100003266, 'AUG A3 PBWC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10537, 100003266, 'AUG A3 PBWC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10455, 100003236, 'K2C', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10533, 100003265, 'AUG A3 Dragon', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10454, 100003235, 'AUG A3 Obsidian', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10540, 100003267, 'AUG A3 Mummy', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10458, 100003238, 'AUG A3 Spy-Deluxe', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10538, 100003267, 'AUG A3 Mummy', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10452, 100003235, 'AUG A3 Obsidian', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10456, 100003238, 'AUG A3 Spy-Deluxe', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10457, 100003238, 'AUG A3 Spy-Deluxe', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10464, 100003241, 'AUG A3 XMAS2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10462, 100003241, 'AUG A3 XMAS2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10461, 100003240, 'AUG A3 DFN', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10460, 100003240, 'AUG A3 DFN', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10548, 100003271, 'AUG A3 ID 1stAnni', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10552, 100003272, 'AUG A3 Strike', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10553, 100003272, 'AUG A3 Strike', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10559, 100003274, 'AUG A3 Demonic', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10555, 100003273, 'SC-2010 Strike', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10557, 100003274, 'AUG A3 Demonic', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10562, 100003275, 'AUG A3 Dolphin', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10558, 100003274, 'AUG A3 Demonic', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10570, 100003278, 'AUG A3 Lebaran2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10560, 100003275, 'AUG A3 Dolphin', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10565, 100003276, 'SC-2010 Dolphin', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10563, 100003276, 'SC-2010 Dolphin', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10561, 100003275, 'AUG A3 Dolphin', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10564, 100003276, 'SC-2010 Dolphin', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10569, 100003278, 'AUG A3 Lebaran2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10571, 100003278, 'AUG A3 Lebaran2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10567, 100003277, 'AUG A3 Blue Diamond', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10577, 100003280, 'AUG A3 Woody', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10568, 100003277, 'AUG A3 Blue Diamond', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10546, 100003270, 'Pindad SS2 V5 Silver', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10576, 100003280, 'AUG A3 Woody', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10573, 100003279, 'AUG A3 Alien', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10578, 100003281, 'XM8 Woody', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10574, 100003279, 'AUG A3 Alien', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10575, 100003280, 'AUG A3 Woody', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10580, 100003281, 'XM8 Woody', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10583, 100003282, 'Famas G2 Newborn2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10579, 100003281, 'XM8 Woody', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10582, 100003282, 'Famas G2 Newborn2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10581, 100003282, 'Famas G2 Newborn2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10586, 100003283, 'AUG A3 Puzzle', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10590, 100003285, 'Groza Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10585, 100003283, 'AUG A3 Puzzle', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10584, 100003283, 'AUG A3 Puzzle', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10587, 100003284, 'Groza', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10588, 100003285, 'Groza Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10589, 100003285, 'Groza Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10593, 100003286, 'Groza Silver', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10591, 100003286, 'Groza Silver', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10597, 100003288, 'Groza Russian Normal', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10608, 100003291, 'AUG A3 PBIC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10594, 100003287, 'SC-2010 Dracula', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10599, 100003288, 'Groza Russian Normal', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10598, 100003288, 'Groza Russian Normal', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10595, 100003287, 'SC-2010 Dracula', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10600, 100003289, 'Groza Russian Deluxe', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10596, 100003287, 'SC-2010 Dracula', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10602, 100003289, 'Groza Russian Deluxe', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10603, 100003290, 'AUG A3 Liberty', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10601, 100003289, 'Groza Russian Deluxe', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10606, 100003291, 'AUG A3 PBIC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10610, 100003292, 'SC-2010 PBIC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10604, 100003290, 'AUG A3 Liberty', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10605, 100003290, 'AUG A3 Liberty', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10609, 100003292, 'SC-2010 PBIC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10607, 100003291, 'AUG A3 PBIC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10612, 100003293, 'K2C PBIC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10613, 100003293, 'K2C PBIC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10611, 100003292, 'SC-2010 PBIC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10617, 100003294, 'AUG A3 PBTC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10620, 100003295, 'AUG A3 Dark Steel', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10618, 100003295, 'AUG A3 Dark Steel', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10615, 100003294, 'AUG A3 PBTC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10616, 100003294, 'AUG A3 PBTC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10623, 100003296, 'AUG A3 PBNC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10622, 100003296, 'AUG A3 PBNC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10619, 100003295, 'AUG A3 Dark Steel', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10624, 100003297, 'Pindad SS2 V5 PBNC2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10621, 100003296, 'AUG A3 PBNC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10626, 100003297, 'Pindad SS2 V5 PBNC2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10625, 100003297, 'Pindad SS2 V5 PBNC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10543, 100003269, 'Pindad SS2 V5 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10629, 100003298, 'AUG A3 PBST2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10542, 100003269, 'Pindad SS2 V5 Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10545, 100003270, 'Pindad SS2 V5 Silver', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10549, 100003271, 'AUG A3 ID 1stAnni', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10628, 100003298, 'AUG A3 PBST2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10572, 100003279, 'AUG A3 Alien', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10554, 100003273, 'SC-2010 Strike', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10551, 100003272, 'AUG A3 Strike', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10547, 100003270, 'Pindad SS2 V5 Silver', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10556, 100003273, 'SC-2010 Strike', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10550, 100003271, 'AUG A3 ID 1stAnni', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10641, 100003302, 'AUG A3 Gorgeous', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10644, 100003303, 'AUG A3 Mystic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10642, 100003303, 'AUG A3 Mystic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10639, 100003302, 'AUG A3 Gorgeous', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10645, 100003304, 'Pindad SS2 V5 Mystic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10640, 100003302, 'AUG A3 Gorgeous', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10646, 100003304, 'Pindad SS2 V5 Mystic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10649, 100003305, 'G11', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10650, 100003305, 'G11', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10648, 100003305, 'G11', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10651, 100003306, 'SIG-Sauer MCX', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10671, 100003312, 'AUG A3 Latin6', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10652, 100003306, 'SIG-Sauer MCX', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10653, 100003306, 'SIG-Sauer MCX', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10655, 100003307, 'G11 G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10659, 100003308, 'G11 SI.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10654, 100003307, 'G11 G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10656, 100003307, 'G11 G.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10658, 100003308, 'G11 SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10660, 100003309, 'SIG-Sauer MCX G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10657, 100003308, 'G11 SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10662, 100003309, 'SIG-Sauer MCX G.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10664, 100003310, 'SIG-Sauer MCX SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10661, 100003309, 'SIG-Sauer MCX G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10667, 100003311, 'AUG A3 Pahlawan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10668, 100003311, 'AUG A3 Pahlawan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10666, 100003311, 'AUG A3 Pahlawan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10663, 100003310, 'SIG-Sauer MCX SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10665, 100003310, 'SIG-Sauer MCX SI.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10670, 100003312, 'AUG A3 Latin6', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10672, 100003313, 'Cane Gun', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10680, 100003316, 'Pindad SS2 V5 Ice', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10669, 100003312, 'AUG A3 Latin6', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10673, 100003313, 'Cane Gun', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10674, 100003313, 'Cane Gun', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10675, 100003315, 'AUG A3 Ice', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10676, 100003315, 'AUG A3 Ice', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10683, 100003317, 'AUG A3 Chicken', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10678, 100003316, 'Pindad SS2 V5 Ice', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10681, 100003317, 'AUG A3 Chicken', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10682, 100003317, 'AUG A3 Chicken', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10679, 100003316, 'Pindad SS2 V5 Ice', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10684, 100003318, 'AUG A3 Hybridman', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10685, 100003318, 'AUG A3 Hybridman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10686, 100003318, 'AUG A3 Hybridman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10688, 100003319, 'Pindad SS2 V5 Lightning', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10690, 100003323, 'AUG A3 Pirates', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10691, 100003323, 'AUG A3 Pirates', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10689, 100003319, 'Pindad SS2 V5 Lightning', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10692, 100003323, 'AUG A3 Pirates', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10687, 100003319, 'Pindad SS2 V5 Lightning', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10696, 100003325, 'AUG A3 Mech Hero', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10697, 100003325, 'AUG A3 Mech Hero', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10700, 100003326, 'Famas G2 Commando Fire', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10694, 100003324, 'AUG A3 Beyond', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10693, 100003324, 'AUG A3 Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10702, 100003327, 'AUG A3 Cursed Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10698, 100003325, 'AUG A3 Mech Hero', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10706, 100003328, 'AUG A3 PBGC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10701, 100003326, 'Famas G2 Commando Fire', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10704, 100003327, 'AUG A3 Cursed Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10703, 100003327, 'AUG A3 Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10699, 100003326, 'Famas G2 Commando Fire', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10708, 100003329, 'AUG A3 PBGC 2017 Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10707, 100003328, 'AUG A3 PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10705, 100003328, 'AUG A3 PBGC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10710, 100003329, 'AUG A3 PBGC 2017 Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10709, 100003329, 'AUG A3 PBGC 2017 Deluxe', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10712, 100003330, 'Pindad SS2 V5 PBGC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10716, 100003331, 'AUG A3 Nev0', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10713, 100003330, 'Pindad SS2 V5 PBGC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10715, 100003331, 'AUG A3 Nev0', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10711, 100003330, 'Pindad SS2 V5 PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10631, 100003299, 'AUG A3 Supreme', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10630, 100003299, 'AUG A3 Supreme', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10633, 100003300, 'AUG A3 Halloween 2016', 0, 39, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10714, 100003331, 'AUG A3 Nev0', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10634, 100003300, 'AUG A3 Halloween 2016', 0, 37, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10635, 100003300, 'AUG A3 Halloween 2016', 0, 38, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10643, 100003303, 'AUG A3 Mystic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10636, 100003301, 'AK-12 Gorgeous', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10638, 100003301, 'AK-12 Gorgeous', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10637, 100003301, 'AK-12 Gorgeous', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10726, 100003335, 'AUG A3 GSL 2017', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10730, 100003337, 'AUG A3 Renegade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10733, 100003338, 'MSBS', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10729, 100003336, 'AUG A3 Samurai', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10731, 100003337, 'AUG A3 Renegade', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10735, 100003339, 'MSBS SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10734, 100003339, 'MSBS SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10736, 100003339, 'MSBS SI.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10738, 100003340, 'MSBS G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10741, 100003341, 'AUG A3 Chicano', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10739, 100003340, 'MSBS G.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10743, 100003342, 'AK-47 Ext. Chicano', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10737, 100003340, 'MSBS G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10740, 100003341, 'AUG A3 Chicano', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10745, 100003342, 'AK-47 Ext. Chicano', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10742, 100003341, 'AUG A3 Chicano', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10747, 100003343, 'AUG A3 Beach', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10744, 100003342, 'AK-47 Ext. Chicano', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10746, 100003343, 'AUG A3 Beach', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10748, 100003343, 'AUG A3 Beach', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10758, 100003347, 'AUG A3 Green', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10751, 100003345, 'AUG A3 Comic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10756, 100003346, 'AK-47 Ext. Comic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10755, 100003346, 'AK-47 Ext. Comic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10757, 100003346, 'AK-47 Ext. Comic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10761, 100003348, 'SC-2010 Green', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10760, 100003347, 'AUG A3 Green', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10771, 100003351, 'FAMAS G2 Commando PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10765, 100003349, 'AUG A3 MNB3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10763, 100003348, 'SC-2010 Green', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10732, 100003337, 'AUG A3 Renegade', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10759, 100003347, 'AUG A3 Green', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10764, 100003349, 'AUG A3 MNB3', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10762, 100003348, 'SC-2010 Green', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10769, 100003350, 'AUG A3 PBWC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10767, 100003350, 'AUG A3 PBWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10768, 100003350, 'AUG A3 PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10766, 100003349, 'AUG A3 MNB3', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10775, 100003352, 'AUG A3 CNPB T5', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10772, 100003351, 'FAMAS G2 Commando PBWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10770, 100003351, 'FAMAS G2 Commando PBWC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10776, 100003353, 'SC-2010 CNPB T5', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10774, 100003352, 'AUG A3 CNPB T5', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10777, 100003353, 'SC-2010 CNPB T5', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10780, 100003354, 'AUG A3 Mech', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10773, 100003352, 'AUG A3 CNPB T5', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10781, 100003354, 'AUG A3 Mech', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10778, 100003353, 'SC-2010 CNPB T5', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10786, 100003356, 'SC-2010 Lebaran 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10784, 100003355, 'AUG A3 Lebaran 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10782, 100003355, 'AUG A3 Lebaran 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10779, 100003354, 'AUG A3 Mech', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10787, 100003356, 'SC-2010 Lebaran 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10785, 100003356, 'SC-2010 Lebaran 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10783, 100003355, 'AUG A3 Lebaran 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10794, 100003359, 'AUG A3 ID 2nd Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10788, 100003357, 'AUG A3 Nagi-Basic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10791, 100003358, 'AUG A3 Nagi-Deluxe', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10797, 100003360, 'Pindad SS2 V5 ID 2nd Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10789, 100003357, 'AUG A3 Nagi-Basic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10793, 100003358, 'AUG A3 Nagi-Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10796, 100003359, 'AUG A3 ID 2nd Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10790, 100003357, 'AUG A3 Nagi-Basic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10792, 100003358, 'AUG A3 Nagi-Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10798, 100003360, 'Pindad SS2 V5 ID 2nd Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10799, 100003360, 'Pindad SS2 V5 ID 2nd Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10805, 100003362, 'AUG A3 Brazuca2', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10801, 100003361, 'AUG A3 Gravity', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10802, 100003361, 'AUG A3 Gravity', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10720, 100003333, 'M4A1 F.C Talos', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10717, 100003332, 'Famas G2 Commando Talos', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10800, 100003361, 'AUG A3 Gravity', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10719, 100003332, 'Famas G2 Commando Talos', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10721, 100003333, 'M4A1 F.C Talos', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10803, 100003362, 'AUG A3 Brazuca2', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10723, 100003334, 'AUG A3 Salvation', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10722, 100003333, 'M4A1 F.C Talos', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10725, 100003334, 'AUG A3 Salvation', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10728, 100003336, 'AUG A3 Samurai', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10724, 100003334, 'AUG A3 Salvation', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10863, 100003382, 'AUG A3 Aguila', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10862, 100003382, 'AUG A3 Aguila', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10861, 100003382, 'AUG A3 Aguila', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10875, 100003386, 'AUG A3 Military', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10865, 100003383, 'SC-2010 Aguila', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10874, 100003386, 'AUG A3 Military', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10878, 100003387, 'AUG A3 PBIC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10877, 100003387, 'AUG A3 PBIC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10876, 100003387, 'AUG A3 PBIC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10887, 100003390, 'AUG A3 TSE', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10886, 100003390, 'AUG A3 TSE', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10885, 100003390, 'AUG A3 TSE', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10889, 100003391, 'FAMAS G2 Commando TSE', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10888, 100003391, 'FAMAS G2 Commando TSE', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10807, 100003363, 'SC-2010 Brazuca2', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10808, 100003363, 'SC-2010 Brazuca2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10806, 100003363, 'SC-2010 Brazuca2', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10811, 100003364, 'AUG A3 Ramadan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10815, 100003366, 'SC-2010 Bolt', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10820, 100003367, 'AUG A3 Vacance', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10818, 100003367, 'AUG A3 Vacance', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10819, 100003367, 'AUG A3 Vacance', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10823, 100003368, 'AUG A3 Phantom', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10833, 100003372, 'SC-2010 PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10831, 100003372, 'SC-2010 PBNC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10836, 100003373, 'Tar-21 Newborn 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10837, 100003374, 'AUG A3 Ottoman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10838, 100003374, 'AUG A3 Ottoman', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10839, 100003374, 'AUG A3 Ottoman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10842, 100003375, 'AUG A3 Kemerdekaan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10855, 100003380, 'AUG A3 7th Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10860, 100003381, 'SC-2010 7th Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10858, 100003381, 'SC-2010 7th Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10859, 100003381, 'SC-2010 7th Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10866, 100003383, 'SC-2010 Aguila', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10864, 100003383, 'SC-2010 Aguila', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10869, 100003384, 'AUG A3 PBST-ES', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10867, 100003384, 'AUG A3 PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10868, 100003384, 'AUG A3 PBST-ES', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10870, 100003385, 'SC-2010 PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10872, 100003385, 'SC-2010 PBST-ES', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10880, 100003388, 'Pindad SS2 V5 PBIC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10881, 100003388, 'Pindad SS2 V5 PBIC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10879, 100003388, 'Pindad SS2 V5 PBIC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10884, 100003389, 'K2C PBIC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10882, 100003389, 'K2C PBIC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10883, 100003389, 'K2C PBIC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10890, 100003391, 'FAMAS G2 Commando TSE', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10891, 100003392, 'AUG A3 Rebel', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10809, 100003364, 'AUG A3 Ramadan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10821, 100003368, 'AUG A3 Phantom', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10810, 100003364, 'AUG A3 Ramadan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10813, 100003365, 'AUG A3 Bolt', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10812, 100003365, 'AUG A3 Bolt', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10814, 100003365, 'AUG A3 Bolt', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10816, 100003366, 'SC-2010 Bolt', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10824, 100003369, 'AUG A3 PBTC2017', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10826, 100003370, 'AUG A3 PBNC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10825, 100003370, 'AUG A3 PBNC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10827, 100003370, 'AUG A3 PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10828, 100003371, 'Pindad SS2 V5 PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10830, 100003371, 'Pindad SS2 V5 PBNC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10873, 100003386, 'AUG A3 Military', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10817, 100003366, 'SC-2010 Bolt', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10902, 100003395, 'SC-2010 HALLOWEEN 2017', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10898, 100003394, 'AUG A3 HALLOWEEN2017', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10914, 100003399, 'AUG A3 Fire Dragon', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10904, 100003396, 'AUG A3 Shatter Z1', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10907, 100003397, 'AUG A3 Shatter UM', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10910, 100003398, 'AUG A3 PBIWC2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10906, 100003397, 'AUG A3 Shatter UM', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10905, 100003396, 'AUG A3 Shatter Z1', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10908, 100003397, 'AUG A3 Shatter UM', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10912, 100003399, 'AUG A3 Fire Dragon', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10915, 100003400, 'AUG A3 Latin7', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10913, 100003399, 'AUG A3 Fire Dragon', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10920, 100003402, 'SC-2010 Desert Hound', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10917, 100003400, 'AUG A3 Latin7', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10919, 100003401, 'AUG A3 Desert Hound', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10923, 100003403, 'M4A1 Freedom', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10918, 100003401, 'AUG A3 Desert Hound', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10916, 100003400, 'AUG A3 Latin7', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10924, 100003403, 'M4A1 Freedom', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10921, 100003402, 'SC-2010 Desert Hound', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10922, 100003403, 'M4A1 Freedom', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10925, 100003404, 'SCAR-L FC Freedom', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10929, 100003405, 'AUG A3 X-MAS 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10932, 100003407, 'AUG A3 HBAR SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10930, 100003405, 'AUG A3 X-MAS 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10927, 100003404, 'SCAR-L FC Freedom', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10926, 100003404, 'SCAR-L FC Freedom', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10928, 100003405, 'AUG A3 X-MAS 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10931, 100003406, 'AUG A3 HBAR', 42000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10935, 100003408, 'AUG A3 HBAR G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10938, 100003426, 'AUG A3 Pandora', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10933, 100003407, 'AUG A3 HBAR SI.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10940, 100003426, 'AUG A3 Pandora', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10936, 100003408, 'AUG A3 HBAR G.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10937, 100003408, 'AUG A3 HBAR G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10939, 100003426, 'AUG A3 Pandora', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10946, 100003428, 'AUG A3 Nevasca', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10942, 100003427, 'AUG A3 Puppy', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10943, 100003427, 'AUG A3 Puppy', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10941, 100003427, 'AUG A3 Puppy', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10947, 100003429, 'SC-2010 Nevasca', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10949, 100003429, 'SC-2010 Nevasca', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10945, 100003428, 'AUG A3 Nevasca', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10944, 100003428, 'AUG A3 Nevasca', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10948, 100003429, 'SC-2010 Nevasca', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10950, 100003430, 'SC-2010 RRQ', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10953, 100003431, 'AUG HBAR PANDORA', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10952, 100003430, 'SC-2010 RRQ', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10955, 100003431, 'AUG HBAR PANDORA', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10962, 100003434, 'AUG A3 Heart Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10951, 100003430, 'SC-2010 RRQ', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10956, 100003432, 'AUG A3 Blue TH', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10954, 100003431, 'AUG HBAR PANDORA', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10958, 100003433, 'AUG A3 Zepetto', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10964, 100003435, 'G11 Acrylic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10897, 100003394, 'AUG A3 HALLOWEEN2017', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10957, 100003433, 'AUG A3 Zepetto', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10961, 100003434, 'AUG A3 Heart Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10963, 100003435, 'G11 Acrylic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10968, 100003436, 'AUG A3 Acrylic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10970, 100003437, 'AUG A3 GRSV', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10965, 100003435, 'G11 Acrylic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10966, 100003436, 'AUG A3 Acrylic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10973, 100003439, 'Aug A3 Nusantara', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10967, 100003436, 'AUG A3 Acrylic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10971, 100003437, 'AUG A3 GRSV', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10969, 100003437, 'AUG A3 GRSV', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10972, 100003438, 'SC-2010 Underworld', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10974, 100003439, 'Aug A3 Nusantara', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10977, 100003440, 'SC-2010 Nusantara', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10975, 100003439, 'Aug A3 Nusantara', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10976, 100003440, 'SC-2010 Nusantara', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10978, 100003440, 'SC-2010 Nusantara', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10899, 100003394, 'AUG A3 HALLOWEEN2017', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10981, 100003441, 'AUG A3 Graduation', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10894, 100003393, 'SC-2010 Rebel', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10896, 100003393, 'SC-2010 Rebel', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10895, 100003393, 'SC-2010 Rebel', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10960, 100003434, 'AUG A3 Heart Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10900, 100003395, 'SC-2010 HALLOWEEN 2017', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10909, 100003398, 'AUG A3 PBIWC2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10903, 100003396, 'AUG A3 Shatter Z1', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10901, 100003395, 'SC-2010 HALLOWEEN 2017', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10995, 100003447, 'AUG A3 Holi', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10989, 100003444, 'AUG A3 Latin Championship', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10991, 100003445, 'AUG A3 Space Basic', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10996, 100003447, 'AUG A3 Holi', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11002, 100003449, 'AUG A3 DIGITAL', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10993, 100003445, 'AUG A3 Space Basic', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10997, 100003448, 'SC-2010 Holi', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10999, 100003448, 'SC-2010 Holi', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10998, 100003448, 'SC-2010 Holi', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11003, 100003450, 'AK 47 DIGITAL', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11000, 100003449, 'AUG A3 DIGITAL', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11005, 100003450, 'AK 47 DIGITAL', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11004, 100003450, 'AK 47 DIGITAL', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11010, 100003452, 'SC-2010 M1LGR4U', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11007, 100003451, 'AUG  A3 M1LGR4U', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11001, 100003449, 'AUG A3 DIGITAL', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11011, 100003452, 'SC-2010 M1LGR4U', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10987, 100003443, 'Battle Box Lion', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11014, 100003453, 'AUG A3 Maze', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11009, 100003452, 'SC-2010 M1LGR4U', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11012, 100003453, 'AUG A3 Maze', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11008, 100003451, 'AUG  A3 M1LGR4U', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11017, 100003454, 'AUG A3 PBWC2018', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11023, 100003456, 'AUG A3 Vittoria', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11016, 100003454, 'AUG A3 PBWC2018', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11013, 100003453, 'AUG A3 Maze', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11015, 100003454, 'AUG A3 PBWC2018', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11019, 100003455, 'SC-2010 PBWC2018', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11021, 100003456, 'AUG A3 Vittoria', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11029, 100003465, 'MSBS Lebaran 2018 (Noname)', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11022, 100003456, 'AUG A3 Vittoria', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11028, 100003464, 'SC-2010 Lebaran 2018', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11033, 100003470, 'AUG A3 Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11027, 100003464, 'SC-2010 Lebaran 2018', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11031, 100003465, 'MSBS Lebaran 2018 (Noname)', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11030, 100003465, 'MSBS Lebaran 2018 (Noname)', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11032, 100003470, 'AUG A3 Arcade', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11034, 100003470, 'AUG A3 Arcade', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11036, 100003471, 'AUG A3 Surfing', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11035, 100003471, 'AUG A3 Surfing', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11037, 100003471, 'AUG A3 Surfing', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11038, 100003472, 'SC-2010 Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11039, 100003472, 'SC-2010 Milkyway', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11040, 100003472, 'SC-2010 Milkyway', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11042, 100003473, 'MSBS Milkyway', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11041, 100003473, 'MSBS Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11043, 100003473, 'MSBS Milkyway', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11045, 100003474, 'AUG A3 Brazuca3', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11046, 100003474, 'AUG A3 Brazuca3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11044, 100003474, 'AUG A3 Brazuca3', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11054, 100003477, 'AUG A3 Football Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11048, 100003475, 'SC-2010 Brazuca3', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11050, 100003476, 'AUG A3 Football', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11049, 100003475, 'SC-2010 Brazuca3', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11047, 100003475, 'SC-2010 Brazuca3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11052, 100003476, 'AUG A3 Football', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11051, 100003476, 'AUG A3 Football', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11055, 100003477, 'AUG A3 Football Deluxe', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11053, 100003477, 'AUG A3 Football Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11058, 100003480, 'AUG A3 HBAR Renegade2 (End Of List)', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11056, 100003480, 'AUG A3 HBAR Renegade2 (End Of List)', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11057, 100003480, 'AUG A3 HBAR Renegade2 (End Of List)', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11059, 200004001, 'MP5K Ext.', 25000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11060, 200004002, 'Spectre Ext.', 25000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11061, 200004004, 'MP7 Ext.', 22000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11062, 200004005, 'Kriss S.V Cupid', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11064, 200004005, 'Kriss S.V Cupid', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11063, 200004005, 'Kriss S.V Cupid', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11066, 200004008, 'UMP45 Ext.', 18000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11067, 200004009, 'Spectre W', 28000, 0, 100, 1, 1, 2, 0, 20, 0);
INSERT INTO "public"."shop" VALUES (10988, 100003444, 'AUG A3 Latin Championship', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11065, 200004007, 'MP5K G.', 26000, 0, 100, 1, 1, 2, 0, 20, 0);
INSERT INTO "public"."shop" VALUES (10979, 100003441, 'AUG A3 Graduation', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10983, 100003442, 'Groza Graduation', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10984, 100003442, 'Groza Graduation', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10986, 100003443, 'Battle Box Lion', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10985, 100003443, 'Battle Box Lion', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10990, 100003444, 'AUG A3 Latin Championship', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10992, 100003445, 'AUG A3 Space Basic', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10994, 100003447, 'AUG A3 Holi', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11082, 200004021, 'K-1 Silver', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11077, 200004020, 'Spectre Silver', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11084, 200004023, 'UMP45 Sl.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11081, 200004021, 'K-1 Silver', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11079, 200004020, 'Spectre Silver', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11088, 200004026, 'Kriss S.V Gold', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11080, 200004021, 'K-1 Silver', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11085, 200004023, 'UMP45 Sl.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11087, 200004026, 'Kriss S.V Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11083, 200004023, 'UMP45 Sl.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11089, 200004027, 'P90 M.C.S.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11092, 200004029, 'P90 Ext D', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11093, 200004029, 'P90 Ext D', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11086, 200004026, 'Kriss S.V Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11095, 200004031, 'Kriss S.V.D', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11097, 200004031, 'Kriss S.V.D', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11090, 200004027, 'P90 M.C.S.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11094, 200004029, 'P90 Ext D', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11096, 200004031, 'Kriss S.V.D', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11099, 200004032, 'P90 M.C D', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11101, 200004033, 'AKS74U Ext.', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11098, 200004032, 'P90 M.C D', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11104, 200004037, 'MP7 Silver', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11100, 200004032, 'P90 M.C D', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11107, 200004038, 'MP7 S.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11110, 200004039, 'Kriss S.V Black', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11102, 200004037, 'MP7 Silver', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11103, 200004037, 'MP7 Silver', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11112, 200004041, 'MP5K Silver D ', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11106, 200004038, 'MP7 S.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11105, 200004038, 'MP7 S.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11113, 200004041, 'MP5K Silver D ', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11114, 200004043, 'SS1-R5 Carbine ', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11111, 200004041, 'MP5K Silver D ', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11108, 200004039, 'Kriss S.V Black', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11116, 200004045, 'MP7 Ext. D ', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11115, 200004045, 'MP7 Ext. D ', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11123, 200004047, 'Kriss S.V Batik D.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11117, 200004045, 'MP7 Ext. D ', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11119, 200004046, 'UMP45 Ext. D ', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11120, 200004046, 'UMP45 Ext. D ', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11118, 200004046, 'UMP45 Ext. D ', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11125, 200004049, 'SS1-R5 Carbine Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11121, 200004047, 'Kriss S.V Batik D.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11122, 200004047, 'Kriss S.V Batik D.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11124, 200004049, 'SS1-R5 Carbine Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11129, 200004050, 'Kriss S.V E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11128, 200004050, 'Kriss S.V E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11130, 200004052, 'Kriss S.V Batik', 48000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11126, 200004049, 'SS1-R5 Carbine Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11127, 200004050, 'Kriss S.V E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11135, 200004060, 'Kriss S.V IC', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11132, 200004054, 'Kriss S.V Vector ', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11133, 200004054, 'Kriss S.V Vector ', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11136, 200004060, 'Kriss S.V IC', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11134, 200004060, 'Kriss S.V IC', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11138, 200004075, 'P90 Gold ', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11142, 200004078, 'P90 PBTN ', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11137, 200004075, 'P90 Gold ', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11139, 200004075, 'P90 Gold ', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11141, 200004078, 'P90 PBTN ', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11143, 200004079, 'Kriss S.V PBTN ', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11140, 200004078, 'P90 PBTN ', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11144, 200004079, 'Kriss S.V PBTN ', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11147, 200004081, 'MP7 GRS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11145, 200004079, 'Kriss S.V PBTN ', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11149, 200004082, 'P90 MC GRS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11148, 200004081, 'MP7 GRS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11146, 200004081, 'MP7 GRS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11151, 200004082, 'P90 MC GRS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11150, 200004082, 'P90 MC GRS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11154, 200004083, 'Kriss S.V GRS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11153, 200004083, 'Kriss S.V GRS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11152, 200004083, 'Kriss S.V GRS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11156, 200004085, 'P90 Newborn', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11157, 200004085, 'P90 Newborn', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11159, 200004087, 'Kriss S.V GSL', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11155, 200004085, 'P90 Newborn', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11069, 200004011, 'P90 Ext.', 50000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11071, 200004014, 'MP5K Silver', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11158, 200004087, 'Kriss S.V GSL', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11072, 200004014, 'MP5K Silver', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11075, 200004017, 'P90 Ext. Cupid', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11076, 200004017, 'P90 Ext. Cupid', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11074, 200004017, 'P90 Ext. Cupid', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11078, 200004020, 'Spectre Silver', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11171, 200004103, 'Kriss S.V PBIC2013', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11172, 200004106, 'PP-19 Bizon', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11173, 200004107, 'MP9 Ext', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11177, 200004110, 'Kriss S.V Turkey', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11176, 200004108, 'Kriss S.V Silence', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11178, 200004110, 'Kriss S.V Turkey', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11174, 200004108, 'Kriss S.V Silence', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11179, 200004110, 'Kriss S.V Turkey', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11182, 200004112, 'P90 M.C Bloody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11184, 200004113, 'P90 M.C. LATIN3', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11181, 200004112, 'P90 M.C Bloody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11180, 200004112, 'P90 M.C Bloody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11185, 200004113, 'P90 M.C. LATIN3', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11183, 200004113, 'P90 M.C. LATIN3', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11187, 200004114, 'P90 Ext BR Camo', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11186, 200004114, 'P90 Ext BR Camo', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11188, 200004114, 'P90 Ext BR Camo', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11189, 200004115, 'Kriss S.V Sakura', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11191, 200004115, 'Kriss S.V Sakura', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11190, 200004115, 'Kriss S.V Sakura', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11196, 200004118, 'P90 Serpent', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11200, 200004121, 'Kriss S.V TH 1st Anniversary', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11192, 200004116, 'Kriss S.V Serpent', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11193, 200004116, 'Kriss S.V Serpent', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11195, 200004118, 'P90 Serpent', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11197, 200004118, 'P90 Serpent', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11198, 200004121, 'Kriss S.V TH 1st Anniversary', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11201, 200004123, 'Kriss S.V R', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11199, 200004121, 'Kriss S.V TH 1st Anniversary', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11202, 200004123, 'Kriss S.V R', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11203, 200004123, 'Kriss S.V R', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11204, 200004126, 'Kriss S.V Inferno', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11205, 200004126, 'Kriss S.V Inferno', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11207, 200004128, 'P90 Inferno', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11206, 200004126, 'Kriss S.V Inferno', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11208, 200004128, 'P90 Inferno', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11210, 200004129, 'P90 Ext PBNC5', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11209, 200004128, 'P90 Inferno', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11211, 200004129, 'P90 Ext PBNC5', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11213, 200004130, 'Kriss S.V GSL2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11212, 200004129, 'P90 Ext PBNC5', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11215, 200004130, 'Kriss S.V GSL2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11214, 200004130, 'Kriss S.V GSL2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11216, 200004132, 'Kriss S.V Midnight', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11218, 200004132, 'Kriss S.V Midnight', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11219, 200004134, 'OA-93', 48000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11220, 200004136, 'OA-93 Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11221, 200004136, 'OA-93 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11222, 200004136, 'OA-93 Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11224, 200004138, 'P90 Brazuca', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11223, 200004138, 'P90 Brazuca', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11227, 200004139, 'Kriss S.V Brazuca', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11225, 200004138, 'P90 Brazuca', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11228, 200004139, 'Kriss S.V Brazuca', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11231, 200004142, 'Kriss S.V Champion', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11229, 200004142, 'Kriss S.V Champion', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11234, 200004144, 'Kriss S.V W.O.E', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11226, 200004139, 'Kriss S.V Brazuca', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11233, 200004144, 'Kriss S.V W.O.E', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11237, 200004146, 'P90 Ext PBIC2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11232, 200004144, 'Kriss S.V W.O.E', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11235, 200004146, 'P90 Ext PBIC2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11236, 200004146, 'P90 Ext PBIC2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11239, 200004155, 'Kriss S.V G E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11244, 200004157, 'Kriss S.V Toy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11240, 200004155, 'Kriss S.V G E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11242, 200004157, 'Kriss S.V Toy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11243, 200004157, 'Kriss S.V Toy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11247, 200004159, 'OA-93 D.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11245, 200004159, 'OA-93 D.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11246, 200004159, 'OA-93 D.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11249, 200004161, 'MP9 Ext Gold', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11248, 200004161, 'MP9 Ext Gold', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11250, 200004161, 'MP9 Ext Gold', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11238, 200004151, 'Kriss S.V PC Cafe', 50000, 0, 100, 1, 1, 2, 0, 4, 0);
INSERT INTO "public"."shop" VALUES (11162, 200004089, 'P90 GSL', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11164, 200004096, 'AKS74U Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11168, 200004100, 'MP5K Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11165, 200004097, 'UMP45 Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11170, 200004103, 'Kriss S.V PBIC2013', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11169, 200004103, 'Kriss S.V PBIC2013', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11175, 200004108, 'Kriss S.V Silence', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11230, 200004142, 'Kriss S.V Champion', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11260, 200004165, 'OA-93 X-MAS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11261, 200004165, 'OA-93 X-MAS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11262, 200004165, 'OA-93 X-MAS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11264, 200004167, 'PP-19 Bizon X-MAS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11265, 200004167, 'PP-19 Bizon X-MAS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11266, 200004168, 'Kriss S.V X-MAS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11267, 200004168, 'Kriss S.V X-MAS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11263, 200004167, 'PP-19 Bizon X-MAS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11272, 200004172, 'Kriss S.V CNY 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11269, 200004170, 'Kriss S.V CoupleBreaker', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11268, 200004168, 'Kriss S.V X-MAS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11274, 200004172, 'Kriss S.V CNY 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11277, 200004174, 'P90 M.C Sheep', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11273, 200004172, 'Kriss S.V CNY 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11275, 200004174, 'P90 M.C Sheep', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11279, 200004175, 'Kriss S.V GRS2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11281, 200004178, 'Kriss S.V Newborn 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11278, 200004175, 'Kriss S.V GRS2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11276, 200004174, 'P90 M.C Sheep', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11283, 200004178, 'Kriss S.V Newborn 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11285, 200004180, 'OA-93 GSL2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11280, 200004175, 'Kriss S.V GRS2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11282, 200004178, 'Kriss S.V Newborn 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11289, 200004182, 'P90 Ext Silence GSL2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11284, 200004180, 'OA-93 GSL2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11288, 200004182, 'P90 Ext Silence GSL2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11286, 200004180, 'OA-93 GSL2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11290, 200004185, 'Kriss S.V Ongame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11287, 200004182, 'P90 Ext Silence GSL2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11298, 200004188, 'Kriss S.V Redemption', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11296, 200004188, 'Kriss S.V Redemption', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11292, 200004185, 'Kriss S.V Ongame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11299, 200004190, 'P90 Ext Redemption', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11291, 200004185, 'Kriss S.V Ongame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11301, 200004190, 'P90 Ext Redemption', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11302, 200004191, 'Kriss S.V Summer', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11304, 200004191, 'Kriss S.V Summer', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11303, 200004191, 'Kriss S.V Summer', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11307, 200004193, 'EVO 3 (ERROR ANIM)', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11305, 200004193, 'EVO 3 (ERROR ANIM)', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11306, 200004193, 'EVO 3 (ERROR ANIM)', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11308, 200004194, 'EVO 3 G. (ERROR ANIM)', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11255, 200004163, 'P90 Ext. LATIN4', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11310, 200004194, 'EVO 3 G. (ERROR ANIM)', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11309, 200004194, 'EVO 3 G. (ERROR ANIM)', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11313, 200004195, 'P90 M.C. Rose', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11312, 200004195, 'P90 M.C. Rose', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11311, 200004195, 'P90 M.C. Rose', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11315, 200004196, 'Kriss S.V Harimau', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11316, 200004196, 'Kriss S.V Harimau', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11314, 200004196, 'Kriss S.V Harimau', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11319, 200004198, 'OA-93 Independence', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11317, 200004198, 'OA-93 Independence', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11322, 200004200, 'P90 M.C Brasil', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11320, 200004200, 'P90 M.C Brasil', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11325, 200004201, 'Kriss S.V Flame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11321, 200004200, 'P90 M.C Brasil', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11324, 200004201, 'Kriss S.V Flame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11323, 200004201, 'Kriss S.V Flame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11327, 200004203, 'OA-93 PBST2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11326, 200004203, 'OA-93 PBST2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11328, 200004203, 'OA-93 PBST2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11332, 200004207, 'Kriss S.V PBTC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11330, 200004205, 'Kriss S.V PBNC2015', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11329, 200004205, 'Kriss S.V PBNC2015', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11331, 200004205, 'Kriss S.V PBNC2015', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11334, 200004207, 'Kriss S.V PBTC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11333, 200004207, 'Kriss S.V PBTC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11335, 200004209, 'Kriss S.V Mech', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11336, 200004209, 'Kriss S.V Mech', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11337, 200004209, 'Kriss S.V Mech', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11252, 200004162, 'PP-19 Bizon Gold', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11253, 200004162, 'PP-19 Bizon Gold', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11254, 200004163, 'P90 Ext. LATIN4', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11256, 200004163, 'P90 Ext. LATIN4', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11257, 200004164, 'MP9 Ext. X-MAS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11258, 200004164, 'MP9 Ext. X-MAS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11259, 200004164, 'MP9 Ext. X-MAS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11300, 200004190, 'P90 Ext Redemption', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11349, 200004216, 'Kriss S.V PBIC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11347, 200004216, 'Kriss S.V PBIC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11353, 200004219, 'P90 M.C Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11354, 200004219, 'P90 M.C Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11348, 200004216, 'Kriss S.V PBIC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11350, 200004218, 'P90 Ext PBIC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11355, 200004219, 'P90 M.C Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11352, 200004218, 'P90 Ext PBIC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11358, 200004220, 'P90 M.C VeraCruz', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11361, 200004221, 'Kriss S.V Sheep', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11357, 200004220, 'P90 M.C VeraCruz', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11356, 200004220, 'P90 M.C VeraCruz', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11360, 200004221, 'Kriss S.V Sheep', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11359, 200004221, 'Kriss S.V Sheep', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11362, 200004223, 'Kriss S.V Basketball', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11363, 200004223, 'Kriss S.V Basketball', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11367, 200004225, 'OA-93 Basketball', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11366, 200004225, 'OA-93 Basketball', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11364, 200004223, 'Kriss S.V Basketball', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11370, 200004227, 'P90 Basketball', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11365, 200004225, 'OA-93 Basketball', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11368, 200004227, 'P90 Basketball', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11371, 200004228, 'OA-93 Medical', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11375, 200004230, 'P90 Ext Medical', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11369, 200004227, 'P90 Basketball', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11378, 200004231, 'MP9 Ext. D.', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11374, 200004230, 'P90 Ext Medical', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11376, 200004230, 'P90 Ext Medical', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11372, 200004228, 'OA-93 Medical', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11377, 200004231, 'MP9 Ext. D.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11380, 200004232, 'OA-93 Cobra', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11379, 200004231, 'MP9 Ext. D.', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11384, 200004234, 'P90 M.C Camo Soldier', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11381, 200004232, 'OA-93 Cobra', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11385, 200004234, 'P90 M.C Camo Soldier', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11382, 200004232, 'OA-93 Cobra', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11391, 200004237, 'Kriss S.V Fear', 0, 3, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11387, 200004235, 'Kriss S.V Steam', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11383, 200004234, 'P90 M.C Camo Soldier', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11388, 200004235, 'Kriss S.V Steam', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11386, 200004235, 'Kriss S.V Steam', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11390, 200004237, 'Kriss S.V Fear', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11392, 200004239, 'P90 Ext Fear', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11397, 200004240, 'P90 M.C SPY', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11389, 200004237, 'Kriss S.V Fear', 0, 2, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11393, 200004239, 'P90 Ext Fear', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11401, 200004242, 'Kriss S.V Obsidian', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11394, 200004239, 'P90 Ext Fear', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11396, 200004240, 'P90 M.C SPY', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11395, 200004240, 'P90 M.C SPY', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11400, 200004241, 'P90 M.C Latin5', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11399, 200004241, 'P90 M.C Latin5', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11402, 200004242, 'Kriss S.V Obsidian', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11405, 200004244, 'P90 M.C Spy-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11403, 200004242, 'Kriss S.V Obsidian', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11406, 200004244, 'P90 M.C Spy-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11404, 200004244, 'P90 M.C Spy-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11407, 200004245, 'Kriss S.V DFN', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11409, 200004245, 'Kriss S.V DFN', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11408, 200004245, 'Kriss S.V DFN', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11410, 200004247, 'OA-93 DFN', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11414, 200004249, 'Kriss S.V XMAS2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11411, 200004247, 'OA-93 DFN', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11419, 200004253, 'Kriss S.V Monkey', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11412, 200004247, 'OA-93 DFN', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11415, 200004249, 'Kriss S.V XMAS2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11416, 200004251, 'OA-93 XMAS2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11422, 200004255, 'Kriss S.V GRS3', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11413, 200004249, 'Kriss S.V XMAS2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11417, 200004251, 'OA-93 XMAS2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11423, 200004255, 'Kriss S.V GRS3', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11418, 200004251, 'OA-93 XMAS2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11427, 200004258, 'Kriss S.V Beast', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11420, 200004253, 'Kriss S.V Monkey', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11424, 200004255, 'Kriss S.V GRS3', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11340, 200004210, 'P90 Mech', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11425, 200004258, 'Kriss S.V Beast', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11342, 200004212, 'Kriss S.V DarkDays', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11343, 200004212, 'Kriss S.V DarkDays', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11345, 200004214, 'OA-93 PBNC2015 U.S.', 0, 4999, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11341, 200004212, 'Kriss S.V DarkDays', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11344, 200004214, 'OA-93 PBNC2015 U.S.', 0, 999, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11346, 200004214, 'OA-93 PBNC2015 U.S.', 0, 1899, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11434, 200004263, 'Kriss S.V GSL2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11439, 200004265, 'Kriss S.V Twilight', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11437, 200004265, 'Kriss S.V Twilight', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11442, 200004267, 'Kriss S.V Skeleton', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11441, 200004267, 'Kriss S.V Skeleton', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11444, 200004269, 'P90 Ext Skeleton', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11440, 200004267, 'Kriss S.V Skeleton', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11445, 200004269, 'P90 Ext Skeleton', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11443, 200004269, 'P90 Ext Skeleton', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11447, 200004270, 'Kriss S.V E-Sport2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11452, 200004273, 'OA-93 PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11446, 200004270, 'Kriss S.V E-Sport2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11448, 200004270, 'Kriss S.V E-Sport2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11450, 200004272, 'P90 Ext. Dragon', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11449, 200004272, 'P90 Ext. Dragon', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11453, 200004273, 'OA-93 PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11454, 200004273, 'OA-93 PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11455, 200004275, 'Kriss S.V PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11460, 200004277, 'P90 Ext. PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11457, 200004275, 'Kriss S.V PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11456, 200004275, 'Kriss S.V PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11459, 200004277, 'P90 Ext. PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11463, 200004278, 'Kriss S.V Mummy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11466, 200004280, 'Kriss S.V ID 1stAnni', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11458, 200004277, 'P90 Ext. PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11461, 200004278, 'Kriss S.V Mummy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11465, 200004280, 'Kriss S.V ID 1stAnni', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11462, 200004278, 'Kriss S.V Mummy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11468, 200004282, 'P90 Ext. 1stAnni', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11472, 200004283, 'Kriss S.V Strike', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11464, 200004280, 'Kriss S.V ID 1stAnni', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11469, 200004282, 'P90 Ext. 1stAnni', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11470, 200004283, 'Kriss S.V Strike', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11467, 200004282, 'P90 Ext. 1stAnni', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11474, 200004285, 'P90 Ext. Silence Strike', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11478, 200004286, 'Kriss S.V Demonic', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11475, 200004285, 'P90 Ext. Silence Strike', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11471, 200004283, 'Kriss S.V Strike', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11476, 200004286, 'Kriss S.V Demonic', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11481, 200004288, 'P90 Ext. Silence Demonic', 0, 920, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11477, 200004286, 'Kriss S.V Demonic', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11482, 200004289, 'Kriss S.V Dolphin', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11479, 200004288, 'P90 Ext. Silence Demonic', 0, 4899, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11485, 200004291, 'P90 Ext Dolphin', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11483, 200004289, 'Kriss S.V Dolphin', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11480, 200004288, 'P90 Ext. Silence Demonic', 0, 1670, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11487, 200004291, 'P90 Ext Dolphin', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11489, 200004292, 'OA-93 Blue Diamond', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11484, 200004289, 'Kriss S.V Dolphin', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11493, 200004294, 'P90 Ext Lebaran 2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11488, 200004292, 'OA-93 Blue Diamond', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11486, 200004291, 'P90 Ext Dolphin', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11498, 200004297, 'P90 Ext. Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11490, 200004292, 'OA-93 Blue Diamond', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11433, 200004262, 'P90 PBGC', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11494, 200004295, 'Kriss S.V Lebaran 2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11491, 200004294, 'P90 Ext Lebaran 2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11496, 200004295, 'Kriss S.V Lebaran 2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11501, 200004298, 'Kriss S.V Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11495, 200004295, 'Kriss S.V Lebaran 2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11500, 200004298, 'Kriss S.V Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11503, 200004300, 'OA-93 Woody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11502, 200004298, 'Kriss S.V Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11499, 200004297, 'P90 Ext. Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11505, 200004300, 'OA-93 Woody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11507, 200004302, 'OA-93 Newborn2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11509, 200004304, 'Kriss S.V Puzzle', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11504, 200004300, 'OA-93 Woody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11506, 200004302, 'OA-93 Newborn2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11508, 200004302, 'OA-93 Newborn2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11510, 200004304, 'Kriss S.V Puzzle', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11511, 200004304, 'Kriss S.V Puzzle', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11512, 200004306, 'P90 Ext. Puzzle', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11514, 200004306, 'P90 Ext. Puzzle', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11431, 200004262, 'P90 PBGC', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11513, 200004306, 'P90 Ext. Puzzle', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11429, 200004260, 'Kriss S.V PBGC', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11430, 200004260, 'Kriss S.V PBGC', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11432, 200004262, 'P90 PBGC', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11492, 200004294, 'P90 Ext Lebaran 2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11438, 200004265, 'Kriss S.V Twilight', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11435, 200004263, 'Kriss S.V GSL2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11436, 200004263, 'Kriss S.V GSL2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11523, 200004309, 'OA-93 Liberty', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11525, 200004311, 'P90 Ext. Liberty', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11528, 200004312, 'Kriss S.V PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11529, 200004312, 'Kriss S.V PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11530, 200004314, 'OA-93 PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11532, 200004314, 'OA-93 PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11531, 200004314, 'OA-93 PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11535, 200004316, 'Kriss S.V PBTC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11533, 200004316, 'Kriss S.V PBTC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11538, 200004318, 'Kriss S.V Dark Steel', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11536, 200004318, 'Kriss S.V Dark Steel', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11534, 200004316, 'Kriss S.V PBTC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11541, 200004320, 'P90 Ext. Dark Steel', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11537, 200004318, 'Kriss S.V Dark Steel', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11544, 200004321, 'Kriss S.V PBNC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11542, 200004321, 'Kriss S.V PBNC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11539, 200004320, 'P90 Ext. Dark Steel', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11540, 200004320, 'P90 Ext. Dark Steel', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11547, 200004323, 'Kriss S.V PBST2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11543, 200004321, 'Kriss S.V PBNC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11548, 200004325, 'Kriss S.V Supreme', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11546, 200004323, 'Kriss S.V PBST2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11550, 200004325, 'Kriss S.V Supreme', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11549, 200004325, 'Kriss S.V Supreme', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11551, 200004327, 'P90 Ext. Supreme', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11552, 200004327, 'P90 Ext. Supreme', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11554, 200004328, 'OA-93 Halloween 2016', 0, 6, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11555, 200004328, 'OA-93 Halloween 2016', 0, 4, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11558, 200004330, 'Kriss S.V Gorgeous', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11556, 200004328, 'OA-93 Halloween 2016', 0, 5, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11559, 200004330, 'Kriss S.V Gorgeous', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11557, 200004330, 'Kriss S.V Gorgeous', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11561, 200004332, 'OA-93 Gorgeous', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11562, 200004332, 'OA-93 Gorgeous', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11564, 200004335, 'Kriss S.V Mystic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11560, 200004332, 'OA-93 Gorgeous', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11565, 200004335, 'Kriss S.V Mystic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11563, 200004335, 'Kriss S.V Mystic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11566, 200004336, 'OA-93 Pahlawan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11567, 200004336, 'OA-93 Pahlawan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11568, 200004336, 'OA-93 Pahlawan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11569, 200004338, 'P90 Ext. Pahlawan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11571, 200004338, 'P90 Ext. Pahlawan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11574, 200004339, 'Kriss S.V Latin6', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11573, 200004339, 'Kriss S.V Latin6', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11572, 200004339, 'Kriss S.V Latin6', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11575, 200004341, 'P90 Ext. Latin6', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11576, 200004341, 'P90 Ext. Latin6', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11577, 200004341, 'P90 Ext. Latin6', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11578, 200004342, 'Kriss S.V Ice', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11579, 200004342, 'Kriss S.V Ice', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11580, 200004342, 'Kriss S.V Ice', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11583, 200004344, 'P90 Ext. Ice', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11582, 200004344, 'P90 Ext. Ice', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11581, 200004344, 'P90 Ext. Ice', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11585, 200004345, 'Kriss S.V Chicken', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11586, 200004345, 'Kriss S.V Chicken', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11584, 200004345, 'Kriss S.V Chicken', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11587, 200004347, 'Kriss S.V Hybridman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11588, 200004347, 'Kriss S.V Hybridman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11589, 200004347, 'Kriss S.V Hybridman', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11590, 200004349, 'OA-93 Hybridman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11592, 200004349, 'OA-93 Hybridman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11591, 200004349, 'OA-93 Hybridman', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11595, 200004353, 'MX-4 SI.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11594, 200004351, 'P90 Ext. Lightning', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11596, 200004353, 'MX-4 SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11597, 200004353, 'MX-4 SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11599, 200004354, 'MX-4 G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11598, 200004354, 'MX-4 G.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11600, 200004354, 'MX-4 G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11603, 200004355, 'Kriss S.V Pirates', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11601, 200004355, 'Kriss S.V Pirates', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11516, 200004307, 'PP-19 Bizon Russian Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11515, 200004307, 'PP-19 Bizon Russian Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11520, 200004308, 'PP-19 Bizon Russian Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11522, 200004309, 'OA-93 Liberty', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11519, 200004308, 'PP-19 Bizon Russian Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11521, 200004309, 'OA-93 Liberty', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11524, 200004311, 'P90 Ext. Liberty', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11527, 200004312, 'Kriss S.V PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11613, 200004362, 'OA-93 MechHero', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11615, 200004362, 'OA-93 MechHero', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11610, 200004361, 'P90 Ext. Beyond', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11616, 200004364, 'OA-93 Fire', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11614, 200004362, 'OA-93 MechHero', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11617, 200004364, 'OA-93 Fire', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11618, 200004364, 'OA-93 Fire', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11626, 200004370, 'P90 Ext. Cursed Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11621, 200004366, 'Kriss S.V Cursed Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11622, 200004368, 'OA-93 Cursed Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11624, 200004368, 'OA-93 Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11623, 200004368, 'OA-93 Cursed Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11619, 200004366, 'Kriss S.V Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11628, 200004371, 'Kriss S.V PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11627, 200004370, 'P90 Ext. Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11625, 200004370, 'P90 Ext. Cursed Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11630, 200004371, 'Kriss S.V PBGC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11632, 200004373, 'OA-93 PBGC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11638, 200004376, 'P90 MC Talos', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11629, 200004371, 'Kriss S.V PBGC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11634, 200004375, 'P90 Ext. PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11631, 200004373, 'OA-93 PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11633, 200004373, 'OA-93 PBGC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11637, 200004376, 'P90 MC Talos', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11635, 200004375, 'P90 Ext. PBGC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11639, 200004376, 'P90 MC Talos', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11636, 200004375, 'P90 Ext. PBGC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11641, 200004377, 'Kriss S.V Salvation', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11642, 200004377, 'Kriss S.V Salvation', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11643, 200004379, 'OA-93 Salvation', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11640, 200004377, 'Kriss S.V Salvation', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11645, 200004379, 'OA-93 Salvation', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11647, 200004381, 'Kriss S.V GSL 2017', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11652, 200004383, 'OA-93 GSL 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11649, 200004381, 'Kriss S.V GSL 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11646, 200004381, 'Kriss S.V GSL 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11648, 200004381, 'Kriss S.V GSL 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11654, 200004385, 'Kriss S.V Samurai', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11658, 200004387, 'Kriss S.V Renegade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11650, 200004383, 'OA-93 GSL 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11653, 200004383, 'OA-93 GSL 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11651, 200004383, 'OA-93 GSL 2017', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11664, 200004393, 'Kriss S.V Naga', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11656, 200004385, 'Kriss S.V Samurai', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11655, 200004385, 'Kriss S.V Samurai', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11657, 200004387, 'Kriss S.V Renegade', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11666, 200004395, 'P90 Ext. Naga', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11659, 200004387, 'Kriss S.V Renegade', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11661, 200004392, 'Kriss S.V Beach Dummy (Picture Dragon)', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11665, 200004393, 'Kriss S.V Naga', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11670, 200004396, 'Kriss S.V Comic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11663, 200004393, 'Kriss S.V Naga', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11668, 200004395, 'P90 Ext. Naga', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11672, 200004398, 'BattleBox Dragon [BUG]', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11673, 200004400, 'Kriss S.V Green', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11667, 200004395, 'P90 Ext. Naga', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11671, 200004396, 'Kriss S.V Comic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11669, 200004396, 'Kriss S.V Comic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11674, 200004400, 'Kriss S.V Green', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11678, 200004402, 'P90 Ext. Green', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11675, 200004400, 'Kriss S.V Green', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11679, 200004403, 'Kriss S.V MNB3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11680, 200004403, 'Kriss S.V MNB3', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11676, 200004402, 'P90 Ext. Green', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11677, 200004402, 'P90 Ext. Green', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11681, 200004403, 'Kriss S.V MNB3', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11684, 200004405, 'OA-93 MNB3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11689, 200004408, 'Kriss S.V PBWC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11687, 200004407, 'P90 Ext. MNB3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11683, 200004405, 'OA-93 MNB3', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11686, 200004407, 'P90 Ext. MNB3', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11682, 200004405, 'OA-93 MNB3', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11685, 200004407, 'P90 Ext. MNB3', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11606, 200004357, 'Kriss S.V Beyond', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11605, 200004357, 'Kriss S.V Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11604, 200004357, 'Kriss S.V Beyond', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11688, 200004408, 'Kriss S.V PBWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11609, 200004359, 'OA-93 Beyond', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11607, 200004359, 'OA-93 Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11612, 200004361, 'P90 Ext. Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11608, 200004359, 'OA-93 Beyond', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11611, 200004361, 'P90 Ext. Beyond', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11700, 200004416, 'Kriss S.V Lebaran 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11701, 200004416, 'Kriss S.V Lebaran 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11702, 200004416, 'Kriss S.V Lebaran 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11697, 200004415, 'P90 Ext. Mech ID', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11705, 200004418, 'P90 Ext. Lebaran 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11706, 200004426, 'Kriss S.V Graffiti', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11703, 200004418, 'P90 Ext. Lebaran 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11709, 200004428, 'OA-93 Graffiti', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11711, 200004428, 'OA-93 Graffiti', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11708, 200004426, 'Kriss S.V Graffiti', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11710, 200004428, 'OA-93 Graffiti', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11707, 200004426, 'Kriss S.V Graffiti', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11714, 200004441, 'Kriss S.V Vacance 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11716, 200004443, 'OA-93 Vacance 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11713, 200004441, 'Kriss S.V Vacance 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11715, 200004443, 'OA-93 Vacance 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11712, 200004441, 'Kriss S.V Vacance 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11719, 200004452, 'Kriss S.V PBNC 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11718, 200004450, 'Kriss S.V PBTC2017', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11720, 200004452, 'Kriss S.V PBNC 2017', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11717, 200004443, 'OA-93 Vacance 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11724, 200004454, 'P90 Ext. PBNC 2017', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11723, 200004454, 'P90 Ext. PBNC 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11721, 200004452, 'Kriss S.V PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11722, 200004454, 'P90 Ext. PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11730, 200004457, 'P90 Ext. Silincer Newborn 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11726, 200004455, 'OA-93 PBNC 2017', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11727, 200004455, 'OA-93 PBNC 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11728, 200004457, 'P90 Ext. Silincer Newborn 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11725, 200004455, 'OA-93 PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11732, 200004458, 'Kriss S.V Ottoman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11733, 200004458, 'Kriss S.V Ottoman', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11731, 200004458, 'Kriss S.V Ottoman', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11735, 200004460, 'P90 Ext. Ottoman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11734, 200004460, 'P90 Ext. Ottoman', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11737, 200004461, 'OA-93 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11738, 200004461, 'OA-93 Kemerdekaan', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11739, 200004461, 'OA-93 Kemerdekaan', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11736, 200004460, 'P90 Ext. Ottoman', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11741, 200004463, 'P90 Ext. Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11743, 200004464, 'MX4 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11742, 200004463, 'P90 Ext. Kemerdekaan', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11744, 200004464, 'MX4 Kemerdekaan', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11746, 200004465, 'Kriss S.V Brightness', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11740, 200004463, 'P90 Ext. Kemerdekaan', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11748, 200004465, 'Kriss S.V Brightness', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11745, 200004464, 'MX4 Kemerdekaan', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11747, 200004465, 'Kriss S.V Brightness', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11749, 200004467, 'P90 Ext. Brightness', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11751, 200004467, 'P90 Ext. Brightness', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11750, 200004467, 'P90 Ext. Brightness', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11752, 200004468, 'Kriss S.V Darkness', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11755, 200004470, 'P90 Ext. Darkness', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11754, 200004468, 'Kriss S.V Darkness', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11757, 200004470, 'P90 Ext. Darkness', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11756, 200004470, 'P90 Ext. Darkness', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11753, 200004468, 'Kriss S.V Darkness', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11760, 200004471, 'Kriss S.V 7th Anniversary', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11759, 200004471, 'Kriss S.V 7th Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11761, 200004473, 'P90 Ext. 7th Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11765, 200004474, 'OA-93 Aguila', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11769, 200004476, 'OA-93 PBST-ES', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11763, 200004473, 'P90 Ext. 7th Anniversary', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11768, 200004476, 'OA-93 PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11764, 200004474, 'OA-93 Aguila', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11766, 200004474, 'OA-93 Aguila', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11770, 200004478, 'MX4 PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11767, 200004476, 'OA-93 PBST-ES', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11773, 200004479, 'Kriss S.V PBST-ES', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11772, 200004478, 'MX4 PBST-ES', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11771, 200004478, 'MX4 PBST-ES', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11775, 200004479, 'Kriss S.V PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11774, 200004479, 'Kriss S.V PBST-ES', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11691, 200004410, 'OA-93 PBWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11692, 200004410, 'OA-93 PBWC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11693, 200004410, 'OA-93 PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11696, 200004412, 'P90 Ext. CNPB T5', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11699, 200004415, 'P90 Ext. Mech ID', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11695, 200004412, 'P90 Ext. CNPB T5', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11698, 200004415, 'P90 Ext. Mech ID', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11694, 200004412, 'P90 Ext. CNPB T5', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11789, 200004493, 'OA-93 Rebel', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11792, 200004495, 'Kriss S.V Rebel', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11790, 200004495, 'Kriss S.V Rebel', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11787, 200004493, 'OA-93 Rebel', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11786, 200004488, 'P90 Ext. PBIC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11791, 200004495, 'Kriss S.V Rebel', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11797, 200004498, 'OA93 HALLOWEEN2017', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11800, 200004500, 'P90 EXT HALLOWEEN2017', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11794, 200004497, 'P90 Ext. Rebel', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11796, 200004498, 'OA93 HALLOWEEN2017', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11793, 200004497, 'P90 Ext. Rebel', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11804, 200004501, 'Kriss S.V Shatter Z1', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11801, 200004500, 'P90 EXT HALLOWEEN2017', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11803, 200004501, 'Kriss S.V Shatter Z1', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11799, 200004500, 'P90 EXT HALLOWEEN2017', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11805, 200004503, 'Kriss S.V Shatter UM', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11802, 200004501, 'Kriss S.V Shatter Z1', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11806, 200004503, 'Kriss S.V Shatter UM', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11810, 200004505, 'OA-93 Shatter Z1', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11809, 200004505, 'OA-93 Shatter Z1', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11807, 200004503, 'Kriss S.V Shatter UM', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11814, 200004509, 'Kriss S.V PBIWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11812, 200004507, 'OA-93 Shatter UM', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11811, 200004507, 'OA-93 Shatter UM', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11817, 200004511, 'OA-93 PBIWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11815, 200004509, 'Kriss S.V PBIWC 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11813, 200004507, 'OA-93 Shatter UM', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11819, 200004513, 'T77.', 0, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11818, 200004511, 'OA-93 PBIWC 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11820, 200004515, 'T77 SI.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11821, 200004515, 'T77 SI.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11825, 200004517, 'T77 G.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11822, 200004515, 'T77 SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11826, 200004519, 'Kriss S.V FIREDRAGON', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11827, 200004519, 'Kriss S.V FIREDRAGON', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11823, 200004517, 'T77 G.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11824, 200004517, 'T77 G.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11831, 200004521, 'P90 EXT FIREDRAGON', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11829, 200004521, 'P90 EXT FIREDRAGON', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11828, 200004519, 'Kriss S.V FIREDRAGON', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11830, 200004521, 'P90 EXT FIREDRAGON', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11832, 200004522, 'OA93 FIREDRAGON', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11833, 200004522, 'OA93 FIREDRAGON', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15375, 200004524, 'Test', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11837, 200004559, 'Kriss S.V RRQ', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11834, 200004522, 'OA93 FIREDRAGON', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11838, 200004561, 'P90 Ext. RRQ', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11835, 200004559, 'Kriss S.V RRQ', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11836, 200004559, 'Kriss S.V RRQ', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11776, 200004481, 'P90 MC PBST-ES', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11844, 200004564, 'Kriss S.V Zepetto', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11839, 200004562, 'OA-93 RRQ', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11778, 200004481, 'P90 MC PBST-ES', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11845, 200004564, 'Kriss S.V Zepetto', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11852, 200004570, 'P90 Ext. Acrylic', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11846, 200004564, 'Kriss S.V Zepetto', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11847, 200004566, 'OA-93 Zepetto', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11848, 200004566, 'OA-93 Zepetto', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11855, 200004578, 'Kriss S.V Nusantara', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11854, 200004578, 'Kriss S.V Nusantara', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11849, 200004566, 'OA-93 Zepetto', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11788, 200004493, 'OA-93 Rebel', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11851, 200004570, 'P90 Ext. Acrylic', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11850, 200004570, 'P90 Ext. Acrylic', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11853, 200004578, 'Kriss S.V Nusantara', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11856, 200004580, 'OA-93 Nusantara', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11858, 200004580, 'OA-93 Nusantara', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11857, 200004580, 'OA-93 Nusantara', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11859, 200004582, 'P90 Ext. Nusantara', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11860, 200004582, 'P90 Ext. Nusantara', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11861, 200004582, 'P90 Ext. Nusantara', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11781, 200004482, 'P90 Ext. PBST-ES', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11864, 200004583, 'Kriss S.V Graduation', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11784, 200004488, 'P90 Ext. PBIC 2017', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11785, 200004488, 'P90 Ext. PBIC 2017', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11795, 200004497, 'P90 Ext. Rebel', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11874, 200004596, 'OA-93 Holi', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11873, 200004594, 'Kriss S.V Rebels', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11875, 200004596, 'OA-93 Holi', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11877, 200004598, 'KRISS S.V DIGITAL', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11878, 200004598, 'Kriss S.V DIGITAL', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11881, 200004600, 'Kriss S.V M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11876, 200004596, 'OA-93 Holi', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11882, 200004600, 'Kriss S.V M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11879, 200004598, 'Kriss S.V DIGITAL', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11885, 200004601, 'Kriss S.V M1LGR4U DUMMY', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11888, 200004602, 'P90 M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11880, 200004600, 'Kriss S.V M1LGR4U DUMMY', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11883, 200004601, 'Kriss S.V M1LGR4U DUMMY', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11884, 200004601, 'Kriss S.V M1LGR4U DUMMY', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11887, 200004602, 'P90 M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11889, 200004603, 'Kriss S.V Maze', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11891, 200004603, 'Kriss S.V Maze', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11886, 200004602, 'P90 M1LGR4U', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11894, 200004605, 'OA-93 Maze', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11892, 200004605, 'OA-93 Maze', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11893, 200004605, 'OA-93 Maze', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11895, 200004607, 'OA-93 PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11896, 200004607, 'OA-93 PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11900, 200004609, 'Kriss S.V PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11899, 200004609, 'Kriss S.V PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11897, 200004607, 'OA-93 PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11898, 200004609, 'Kriss S.V PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11903, 200004611, 'Kriss S.V Vitoria', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11901, 200004611, 'Kriss S.V Vitoria', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11902, 200004611, 'Kriss S.V Vitoria', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11911, 200004617, 'OA-93 GSL 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11905, 200004613, 'OA-93 Vitoria', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11904, 200004613, 'OA-93 Vitoria', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11908, 200004615, 'Kriss S.V GSL 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11906, 200004613, 'OA-93 Vitoria', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11907, 200004615, 'Kriss S.V GSL 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11909, 200004615, 'Kriss S.V GSL 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11910, 200004617, 'OA-93 GSL 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11914, 200004621, 'OA-93 Midnight [BUG]', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11916, 200004623, 'P90 Ext. White Rabbit', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11912, 200004617, 'OA-93 GSL 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11915, 200004623, 'P90 Ext. White Rabbit', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11918, 200004624, 'Kriss S.V Ramdhan 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11919, 200004624, 'Kriss S.V Ramdhan 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11917, 200004623, 'P90 Ext. White Rabbit', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11920, 200004624, 'Kriss S.V Ramdhan 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11922, 200004626, 'Kriss S.V Paladin', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11928, 200004630, 'Kriss S.V Lebaran 2018', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11921, 200004626, 'Kriss S.V Paladin', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11924, 200004628, 'OA-93 Paladin', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11929, 200004630, 'Kriss S.V Lebaran 2018', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11923, 200004626, 'Kriss S.V Paladin', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11926, 200004628, 'OA-93 Paladin', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11931, 200004632, 'OA-93 Lebaran 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11925, 200004628, 'OA-93 Paladin', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11927, 200004630, 'Kriss S.V Lebaran 2018', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11930, 200004632, 'OA-93 Lebaran 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11933, 200004634, 'APC9 Lebaran 2019', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11932, 200004632, 'OA-93 Lebaran 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11937, 200004635, 'Kriss S.V GunZeeD', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11935, 200004634, 'APC9 Lebaran 2019', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11936, 200004635, 'Kriss S.V GunZeeD', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11938, 200004635, 'Kriss S.V GunZeeD', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11934, 200004634, 'APC9 Lebaran 2019', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11941, 200004637, 'OA-93 GunZeeD', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11943, 200004639, 'Kriss S.V Arcade', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11940, 200004637, 'OA-93 GunZeeD', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11950, 200004643, 'Kriss S.V Surfing', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11944, 200004639, 'Kriss S.V Arcade', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11947, 200004641, 'OA-93 Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11942, 200004639, 'Kriss S.V Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11949, 200004643, 'Kriss S.V Surfing', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11946, 200004641, 'OA-93 Arcade', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11945, 200004641, 'OA-93 Arcade', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11948, 200004643, 'Kriss S.V Surfing', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11866, 200004585, 'P90 Ext. Graduation', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11862, 200004583, 'Kriss S.V Graduation', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11865, 200004585, 'P90 Ext. Graduation', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11868, 200004586, 'OA-93 Graduation', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11867, 200004585, 'P90 Ext. Graduation', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11869, 200004586, 'OA-93 Graduation', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11871, 200004594, 'Kriss S.V Rebels', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11872, 200004594, 'Kriss S.V Rebels', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11962, 200004651, 'APC9 Milkyway', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11965, 200004654, 'P90 Ext. Brazuca3', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11961, 200004651, 'APC9 Milkyway', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11964, 200004654, 'P90 Ext. Brazuca3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11966, 200004655, 'Kriss S.V Latin Championship 2', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11960, 200004651, 'APC9 Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11967, 200004655, 'Kriss S.V Latin Championship 2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11963, 200004654, 'P90 Ext. Brazuca3', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11970, 200004657, 'OA-93 Renegade2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11969, 200004657, 'OA-93 Renegade2', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11972, 200004659, 'Kriss S.V Renegade2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11973, 200004659, 'Kriss S.V Renegade2', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11975, 200004661, 'P90 Ext. Renegade2 (End Of List)', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11971, 200004657, 'OA-93 Renegade2', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11981, 200018007, 'Dual Uzi Silencer', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11978, 200018004, 'Dual Uzi', 30000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11974, 200004659, 'Kriss S.V Renegade2', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11977, 200004661, 'P90 Ext. Renegade2 (End Of List)', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11976, 200004661, 'P90 Ext. Renegade2 (End Of List)', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11982, 200018008, 'Dual Mini Uzi Silencer', 30000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11979, 200018005, 'Dual Mini Uzi', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11983, 200018009, 'Dual Micro Uzi Silencer', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11980, 200018006, 'Dual Micro Uzi', 25000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11984, 200018011, 'Dual Micro Uzi Silencer Sl.', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11986, 200018013, 'Dual Mini Uzi G', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11985, 200018013, 'Dual Mini Uzi G', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11987, 200018128, 'Dual Uzi Mini Talos', 0, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11988, 200018139, 'Dragon [BUG] (End Of List)', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11989, 300005001, 'Dragunov', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11990, 300005002, 'PSG-1', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11991, 300005004, 'SSG-69 S.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11993, 300005004, 'SSG-69 S.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11992, 300005004, 'SSG-69 S.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11994, 300005005, 'L115A1', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11996, 300005007, 'PSG-1 S.', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11999, 300005008, 'SSG-69 Silver', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11997, 300005008, 'SSG-69 Silver', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12000, 300005009, 'PSG-1 Silver', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11998, 300005008, 'SSG-69 Silver', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12001, 300005009, 'PSG-1 Silver', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12002, 300005009, 'PSG-1 Silver', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12003, 300005010, 'Dragunov Silver', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12008, 300005011, 'Dragunov CS.', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12007, 300005011, 'Dragunov CS.', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12004, 300005010, 'Dragunov Silver', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12005, 300005010, 'Dragunov Silver', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12009, 300005012, 'Dragunov CG.', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12010, 300005014, 'Dragunov Gold D.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11959, 200004649, 'OA-93 Milkyway', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12006, 300005011, 'Dragunov CS.', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12015, 300005015, 'L115A1 Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12011, 300005014, 'Dragunov Gold D.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12012, 300005014, 'Dragunov Gold D.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12013, 300005015, 'L115A1 Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12019, 300005018, 'M4 SPR Lvl-1', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12014, 300005015, 'L115A1 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12018, 300005017, 'L115A1 D', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12022, 300005019, 'M4 SPR Lvl-2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12016, 300005017, 'L115A1 D', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12021, 300005019, 'M4 SPR Lvl-2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12023, 300005020, 'M4 SPR Lvl-3', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12020, 300005019, 'M4 SPR Lvl-2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12024, 300005020, 'M4 SPR Lvl-3', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12025, 300005020, 'M4 SPR Lvl-3', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12029, 300005022, 'Rangemaster 7.62', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12026, 300005021, 'Rangemaster .338', 30000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12032, 300005023, 'Rangemaster 7.62 STBY', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12027, 300005022, 'Rangemaster 7.62', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12028, 300005022, 'Rangemaster 7.62', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12031, 300005023, 'Rangemaster 7.62 STBY', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12034, 300005026, 'L115A1 Black', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12030, 300005023, 'Rangemaster 7.62 STBY', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12039, 300005028, 'Dragunov D', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12036, 300005026, 'L115A1 Black', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12037, 300005028, 'Dragunov D', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11952, 200004645, 'OA-93 Surfing', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12033, 300005024, 'PSG-1 Gold', 30000, 0, 100, 1, 1, 2, 0, 16, 0);
INSERT INTO "public"."shop" VALUES (11953, 200004645, 'OA-93 Surfing', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11954, 200004647, 'Kriss S.V Milkyway', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11957, 200004649, 'OA-93 Milkyway', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11956, 200004647, 'Kriss S.V Milkyway', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11955, 200004647, 'Kriss S.V Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11958, 200004649, 'OA-93 Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12102, 300005073, 'Cheytac M200 R', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12101, 300005073, 'Cheytac M200 R', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12100, 300005073, 'Cheytac M200 R', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12104, 300005075, 'PSG1 Elite', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12103, 300005075, 'PSG1 Elite', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12109, 300005077, 'SVU Elite', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12110, 300005077, 'SVU Elite', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12112, 300005078, 'VSK94 Elite', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12114, 300005078, 'VSK94 Elite', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12113, 300005078, 'VSK94 Elite', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12120, 300005080, 'Cheytac M200 PBNC5', 0, 1700, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12118, 300005080, 'Cheytac M200 PBNC5', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12122, 300005081, 'L115A1 GSL2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12123, 300005081, 'L115A1 GSL2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12121, 300005081, 'L115A1 GSL2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12041, 300005030, 'Cheytac M200', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12045, 300005032, 'Barrett M82A1', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12046, 300005032, 'Barrett M82A1', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12047, 300005032, 'Barrett M82A1', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12049, 300005033, 'L115A1 E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12052, 300005035, 'SVU', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12054, 300005036, 'L115A1 SE', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12055, 300005036, 'L115A1 SE', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12053, 300005036, 'L115A1 SE', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12058, 300005047, 'Dragunov Red', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12071, 300005055, 'Cheytac M200 GSL', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12073, 300005055, 'Cheytac M200 GSL', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12076, 300005056, 'L115A1 Black', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12074, 300005056, 'L115A1 Black', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12075, 300005056, 'L115A1 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12079, 300005057, 'Cheytac M200 Bloody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12077, 300005057, 'Cheytac M200 Bloody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12078, 300005057, 'Cheytac M200 Bloody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12080, 300005058, 'CheyTac M200 GRS EV', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12081, 300005058, 'CheyTac M200 GRS EV', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12083, 300005059, 'PSG1 Reload', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12084, 300005060, 'Rangermaster .338 Reload', 34000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12087, 300005063, 'CheyTac M200 Turkey', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12085, 300005063, 'CheyTac M200 Turkey', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12086, 300005063, 'CheyTac M200 Turkey', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12115, 300005079, 'Cheytac M200 Inferno', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12092, 300005065, 'L115A1 BR Camo', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12088, 300005064, 'L115A1 LATIN3', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12090, 300005064, 'L115A1 LATIN3', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12089, 300005064, 'L115A1 LATIN3', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12091, 300005065, 'L115A1 BR Camo', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12093, 300005065, 'L115A1 BR Camo', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12095, 300005068, 'XM2010', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12094, 300005068, 'XM2010', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12096, 300005071, 'Cheytac M200 TH 1st Anniversary', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12125, 300005083, 'Cheytac M200 Brazuca', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12098, 300005071, 'Cheytac M200 TH 1st Anniversary', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12097, 300005071, 'Cheytac M200 TH 1st Anniversary', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12099, 300005072, 'Walther WA2000', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12107, 300005076, 'Dragunov Elite', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12106, 300005076, 'Dragunov Elite', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12108, 300005076, 'Dragunov Elite', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12111, 300005077, 'SVU Elite', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12116, 300005079, 'Cheytac M200 Inferno', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12124, 300005083, 'Cheytac M200 Brazuca', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12128, 300005084, 'Cheytac M200 Champion', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12117, 300005079, 'Cheytac M200 Inferno', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12119, 300005080, 'Cheytac M200 PBNC5', 0, 5000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12043, 300005031, 'Winchester M70', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12129, 300005084, 'Cheytac M200 Champion', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12042, 300005031, 'Winchester M70', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12057, 300005047, 'Dragunov Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12137, 300005087, 'Cheytac M200 PBIC2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12138, 300005087, 'Cheytac M200 PBIC2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12142, 300005089, 'L115A1 PC Cafe', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12141, 300005088, 'L115A1 Pied', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12140, 300005088, 'L115A1 Pied', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12143, 300005090, 'Cheytac M200 Merdeka (Tiger)', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12148, 300005091, 'Cheytac M200 G E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12144, 300005090, 'Cheytac M200 Merdeka (Tiger)', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12145, 300005090, 'Cheytac M200 Merdeka (Tiger)', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12149, 300005092, 'L115A1 Toy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12147, 300005091, 'Cheytac M200 G E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12146, 300005091, 'Cheytac M200 G E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12151, 300005092, 'L115A1 Toy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12153, 300005093, 'VSK94 Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12156, 300005094, 'SVU Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12150, 300005092, 'L115A1 Toy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12155, 300005094, 'SVU Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12157, 300005094, 'SVU Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12152, 300005093, 'VSK94 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12158, 300005095, 'DSR-1 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12161, 300005096, 'Cheytac M200 LATIN4', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12159, 300005095, 'DSR-1 Gold', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12160, 300005095, 'DSR-1 Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12162, 300005096, 'Cheytac M200 LATIN4', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12163, 300005096, 'Cheytac M200 LATIN4', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12164, 300005097, 'Cheytac M200 Carnival', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12169, 300005098, 'DSR-1 D.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12166, 300005097, 'Cheytac M200 Carnival', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12172, 300005099, 'Cheytac M200 CoupleBreaker', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12168, 300005098, 'DSR-1 D.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12170, 300005099, 'Cheytac M200 CoupleBreaker', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12171, 300005099, 'Cheytac M200 CoupleBreaker', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12174, 300005100, 'Cheytac M200 GRS2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12175, 300005100, 'Cheytac M200 GRS2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12173, 300005100, 'Cheytac M200 GRS2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12178, 300005101, 'L115A1 Newborn 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12176, 300005101, 'L115A1 Newborn 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12177, 300005101, 'L115A1 Newborn 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12181, 300005102, 'Cheytac M200 GSL2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12179, 300005102, 'Cheytac M200 GSL2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12180, 300005102, 'Cheytac M200 GSL2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12184, 300005103, 'Cheytac M200 PBNC 6', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12183, 300005103, 'Cheytac M200 PBNC 6', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12182, 300005103, 'Cheytac M200 PBNC 6', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12187, 300005104, 'Cheytac M200 Ongame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12185, 300005104, 'Cheytac M200 Ongame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12186, 300005104, 'Cheytac M200 Ongame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12189, 300005105, 'Cheytac M200 Redemption', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12191, 300005106, 'L115A1 Summer', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12188, 300005105, 'Cheytac M200 Redemption', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12192, 300005106, 'L115A1 Summer', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12193, 300005106, 'L115A1 Summer', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12133, 300005086, 'Dragunov W.O.E', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12194, 300005107, 'Dragunov Rose', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12195, 300005107, 'Dragunov Rose', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12196, 300005107, 'Dragunov Rose', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12199, 300005108, 'Cheytac M200 Lionflame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12197, 300005108, 'Cheytac M200 Lionflame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12198, 300005108, 'Cheytac M200 Lionflame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12202, 300005109, 'L115A1 Harimau', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12201, 300005109, 'L115A1 Harimau', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12200, 300005109, 'L115A1 Harimau', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12207, 300005111, 'Cheytac M200 PBST2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12204, 300005110, 'Cheytac M200 Brazil', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12205, 300005110, 'Cheytac M200 Brazil', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12203, 300005110, 'Cheytac M200 Brazil', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12208, 300005111, 'Cheytac M200 PBST2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12206, 300005111, 'Cheytac M200 PBST2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12210, 300005112, 'Cheytac M200 4Game', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12209, 300005112, 'Cheytac M200 4Game', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12211, 300005112, 'Cheytac M200 4Game', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12214, 300005113, 'Cheytac M200 4Game SE', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12213, 300005113, 'Cheytac M200 4Game SE', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12215, 300005114, 'Cheytac M200 PBNC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12132, 300005085, 'Cheytac M200 W.O.E', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12130, 300005085, 'Cheytac M200 W.O.E', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12131, 300005085, 'Cheytac M200 W.O.E', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12135, 300005086, 'Dragunov W.O.E', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12134, 300005086, 'Dragunov W.O.E', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12139, 300005088, 'L115A1 Pied', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12154, 300005093, 'VSK94 Gold', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12234, 300005120, 'Cheytac M200 PBIC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12233, 300005120, 'Cheytac M200 PBIC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12238, 300005121, 'Cheytac M200 Gold', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12236, 300005121, 'Cheytac M200 Gold', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12237, 300005121, 'Cheytac M200 Gold', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12240, 300005122, 'Cheytac M200 VeraCruz', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12239, 300005122, 'Cheytac M200 VeraCruz', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12241, 300005122, 'Cheytac M200 VeraCruz', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12250, 300005126, 'Cheytac M200 Medical', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12242, 300005123, 'Tactilite T2', 42000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12244, 300005124, 'Cheytac M200 Sheep', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12251, 300005126, 'Cheytac M200 Medical', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12253, 300005127, 'L115A1 Cobra', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12254, 300005127, 'L115A1 Cobra', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12252, 300005127, 'L115A1 Cobra', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12257, 300005128, 'Rangermaster .338 Camo Soldier', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12255, 300005128, 'Rangermaster .338 Camo Soldier', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12259, 300005130, 'Cheytac M200 Steam', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12260, 300005130, 'Cheytac M200 Steam', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12258, 300005130, 'Cheytac M200 Steam', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12263, 300005131, 'Cheytac M200 Fear', 0, 7, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12261, 300005131, 'Cheytac M200 Fear', 0, 8, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12262, 300005131, 'Cheytac M200 Fear', 0, 9, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12266, 300005132, 'Tactilite T2 G.', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12264, 300005132, 'Tactilite T2 G.', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12268, 300005133, 'DSR-1 SPY', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12265, 300005132, 'Tactilite T2 G.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12267, 300005133, 'DSR-1 SPY', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12269, 300005133, 'DSR-1 SPY', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12272, 300005134, 'Cheytac M200 Latin5', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12270, 300005134, 'Cheytac M200 Latin5', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12277, 300005136, 'DSR-1 Spy-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12278, 300005136, 'DSR-1 Spy-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12276, 300005136, 'DSR-1 Spy-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12280, 300005137, 'Cheytac M200 DFN', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12281, 300005137, 'Cheytac M200 DFN', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12279, 300005137, 'Cheytac M200 DFN', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12302, 300005144, 'Cheytac M200 Silence', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12217, 300005114, 'Cheytac M200 PBNC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12219, 300005115, 'Cheytac M200 PBTC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12220, 300005115, 'Cheytac M200 PBTC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12223, 300005116, 'SVU PBTC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12221, 300005116, 'SVU PBTC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12222, 300005116, 'SVU PBTC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12226, 300005117, 'L115A1 Mech', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12224, 300005117, 'L115A1 Mech', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12225, 300005117, 'L115A1 Mech', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12229, 300005118, 'Cheytac M200 DarkDays', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12227, 300005118, 'Cheytac M200 DarkDays', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12228, 300005118, 'Cheytac M200 DarkDays', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12231, 300005119, 'XM2010 PBNC2015US', 0, 1020, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12232, 300005119, 'XM2010 PBNC2015US', 0, 4750, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12230, 300005119, 'XM2010 PBNC2015US', 0, 2990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12245, 300005124, 'Cheytac M200 Sheep', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12243, 300005124, 'Cheytac M200 Sheep', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12247, 300005125, 'L115A1 Basketball', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12246, 300005125, 'L115A1 Basketball', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12248, 300005125, 'L115A1 Basketball', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12249, 300005126, 'Cheytac M200 Medical', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12310, 300005148, 'Cheytac M200 Sakura', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12307, 300005147, 'Cheytac M200 Cupid', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12312, 300005148, 'Cheytac M200 Sakura', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12313, 300005149, 'Cheytac M200 Serpent', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12311, 300005148, 'Cheytac M200 Sakura', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12314, 300005149, 'Cheytac M200 Serpent', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12317, 300005150, 'Cheytac M200 GRS3', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12316, 300005150, 'Cheytac M200 GRS3', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12318, 300005150, 'Cheytac M200 GRS3', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12319, 300005151, 'Cheytac M200 Beast', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12320, 300005151, 'Cheytac M200 Beast', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12321, 300005151, 'Cheytac M200 Beast', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12323, 300005152, 'Cheytac M200 PBGC', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12324, 300005152, 'Cheytac M200 PBGC', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12322, 300005152, 'Cheytac M200 PBGC', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12325, 300005153, 'Cheytac M200 GSL2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12326, 300005153, 'Cheytac M200 GSL2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12328, 300005154, 'Tactilite T2 GSL2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12327, 300005153, 'Cheytac M200 GSL2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12329, 300005154, 'Tactilite T2 GSL2016		', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12330, 300005154, 'Tactilite T2 GSL2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12332, 300005155, 'Cheytac M200 Tiger-Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12331, 300005155, 'Cheytac M200 Tiger-Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12333, 300005155, 'Cheytac M200 Tiger-Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12335, 300005156, 'Cheytac M200 Tiger-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12336, 300005156, 'Cheytac M200 Tiger-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12338, 300005158, 'Cheytac M200 Midnight2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12337, 300005157, 'AS 50', 48000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12339, 300005158, 'Cheytac M200 Midnight2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12340, 300005158, 'Cheytac M200 Midnight2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12341, 300005159, 'AS 50 G.', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12344, 300005160, 'Cheytac M200 Skeleton', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12343, 300005159, 'AS 50 G.', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12342, 300005159, 'AS 50 G.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12346, 300005160, 'Cheytac M200 Skeleton', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12348, 300005161, 'Tactilite T2 E-Sports2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12345, 300005160, 'Cheytac M200 Skeleton', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12349, 300005161, 'Tactilite T2 E-Sports2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12352, 300005162, 'Tactilite T2 Dragon', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12347, 300005161, 'Tactilite T2 E-Sports2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12350, 300005162, 'Tactilite T2 Dragon', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12355, 300005163, 'Cheytac M200 PBWC 2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12351, 300005162, 'Tactilite T2 Dragon', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12353, 300005163, 'Cheytac M200 PBWC 2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12354, 300005163, 'Cheytac M200 PBWC 2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12358, 300005164, 'AS 50 D.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12356, 300005164, 'AS 50 D.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12360, 300005165, 'Cheytac M200 ID 1stAnni', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12357, 300005164, 'AS 50 D.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12364, 300005166, 'Cheytac M200 Strike', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12361, 300005165, 'Cheytac M200 ID 1stAnni', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12362, 300005166, 'Cheytac M200 Strike', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12366, 300005167, 'Cheytac M200 Demonic', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12370, 300005168, 'Cheytac M200 Dolphin', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12363, 300005166, 'Cheytac M200 Strike', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12369, 300005168, 'Cheytac M200 Dolphin', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12365, 300005167, 'Cheytac M200 Demonic', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12367, 300005167, 'Cheytac M200 Demonic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12372, 300005169, 'L115A1 Dolphin', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12368, 300005168, 'Cheytac M200 Dolphin', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12373, 300005169, 'L115A1 Dolphin', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12376, 300005170, 'Cheytac M200 Blue Diamond', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12371, 300005169, 'L115A1 Dolphin', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12375, 300005170, 'Cheytac M200 Blue Diamond', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12374, 300005170, 'Cheytac M200 Blue Diamond', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12377, 300005171, 'Tactilite T2 Blue Diamond', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12381, 300005172, 'Cheytac M200 Lebaran2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12380, 300005172, 'Cheytac M200 Lebaran2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12379, 300005171, 'Tactilite T2 Blue Diamond', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12382, 300005172, 'Cheytac M200 Lebaran2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12384, 300005173, 'Cheytac M200 Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12383, 300005173, 'Cheytac M200 Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12305, 300005146, 'PGM-Hecate2 G.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12385, 300005173, 'Cheytac M200 Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12303, 300005145, 'PGM Hecate2', 38000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12306, 300005146, 'PGM-Hecate2 G.', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12304, 300005146, 'PGM-Hecate2 G.', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12378, 300005171, 'Tactilite T2 Blue Diamond', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12308, 300005147, 'Cheytac M200 Cupid', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12309, 300005147, 'Cheytac M200 Cupid', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12393, 300005176, 'Tactilite T2 Newborn2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12394, 300005176, 'Tactilite T2 Newborn2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12397, 300005177, 'Tactilite T2 Puzzle', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12396, 300005177, 'Tactilite T2 Puzzle', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12403, 300005179, 'Dragunov Russian Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12398, 300005178, 'Dragunov Russian Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12400, 300005178, 'Dragunov Russian Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12399, 300005178, 'Dragunov Russian Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12402, 300005179, 'Dragunov Russian Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12406, 300005180, 'Tactilite T2 Liberty', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12401, 300005179, 'Dragunov Russian Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12408, 300005181, 'Cheytac M200 PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12409, 300005181, 'Cheytac M200 PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12405, 300005180, 'Tactilite T2 Liberty', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12407, 300005181, 'Cheytac M200 PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12410, 300005182, 'Tactilite T2 PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12412, 300005182, 'Tactilite T2 PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12411, 300005182, 'Tactilite T2 PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12415, 300005183, 'Cheytac M200 PBTC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12413, 300005183, 'Cheytac M200 PBTC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12414, 300005183, 'Cheytac M200 PBTC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12417, 300005184, 'AS-50 PBTC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12416, 300005184, 'AS-50 PBTC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12418, 300005184, 'AS-50 PBTC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12420, 300005185, 'Cheytac M200 Dark Steel', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12421, 300005185, 'Cheytac M200 Dark Steel', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12423, 300005186, 'Cheytac M200 PBNC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12419, 300005185, 'Cheytac M200 Dark Steel', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12424, 300005186, 'Cheytac M200 PBNC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12422, 300005186, 'Cheytac M200 PBNC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12427, 300005187, 'Cheytac M200 PBST2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12425, 300005187, 'Cheytac M200 PBST2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12426, 300005187, 'Cheytac M200 PBST2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12428, 300005188, 'Cheytac M200 Supreme', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12433, 300005189, 'Cheytac M200 Halloween 2016', 0, 11, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12429, 300005188, 'Cheytac M200 Supreme', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12432, 300005189, 'Cheytac M200 Halloween 2016', 0, 10, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12436, 300005190, 'Cheytac M200 Azerbaijan', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12431, 300005189, 'Cheytac M200 Halloween 2016', 0, 12, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12434, 300005190, 'Cheytac M200 Azerbaijan', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12435, 300005190, 'Cheytac M200 Azerbaijan', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12438, 300005191, 'Cheytac M200 Mystic', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12437, 300005191, 'Cheytac M200 Mystic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12440, 300005192, 'Tactilite T2 Pahlawan', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12439, 300005191, 'Cheytac M200 Mystic', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12441, 300005192, 'Tactilite T2 Pahlawan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12445, 300005193, 'Cheytac M200 Latin6', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12442, 300005192, 'Tactilite T2 Pahlawan', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12443, 300005193, 'Cheytac M200 Latin6', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12450, 300005195, 'Cheytac M200 Chicken', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12444, 300005193, 'Cheytac M200 Latin6', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12446, 300005194, 'Cheytac M200 Ice', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12447, 300005194, 'Cheytac M200 Ice', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12448, 300005194, 'Cheytac M200 Ice', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12454, 300005196, 'Cheytac M200 Hybridman', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12452, 300005196, 'Cheytac M200 Hybridman', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12451, 300005195, 'Cheytac M200 Chicken', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12449, 300005195, 'Cheytac M200 Chicken', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12457, 300005197, 'L115A1 Lightning', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12455, 300005197, 'L115A1 Lightning', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12456, 300005197, 'L115A1 Lightning', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12459, 300005198, 'Cheytac M200 Pirates', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12460, 300005198, 'Cheytac M200 Pirates', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12462, 300005199, 'Cheytac M200 Beyond', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12458, 300005198, 'Cheytac M200 Pirates', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12463, 300005199, 'Cheytac M200 Beyond', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12461, 300005199, 'Cheytac M200 Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12466, 300005200, 'AS-50 Beyond', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12465, 300005200, 'AS-50 Beyond', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12467, 300005201, 'Tactilite T2 MechHero (D-Cash [Days])', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12464, 300005200, 'AS-50 Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12386, 300005174, 'L115A1 Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12387, 300005174, 'L115A1 Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12469, 300005201, 'Tactilite T2 MechHero (D-Cash [Days])', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12390, 300005175, 'Cheytac M200 Woody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12389, 300005175, 'Cheytac M200 Woody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12395, 300005177, 'Tactilite T2 Puzzle', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12392, 300005176, 'Tactilite T2 Newborn2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12391, 300005175, 'Cheytac M200 Woody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12475, 300005203, 'Cheytac M200 Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12484, 300005206, 'Tactilite T2 PBGC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12476, 300005204, 'Tactilite T2 Cursed Valentine', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12478, 300005204, 'Tactilite T2 Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12480, 300005205, 'Cheytac M200 PBGC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12479, 300005205, 'Cheytac M200 PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12482, 300005206, 'Tactilite T2 PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12487, 300005207, 'L115A1 Talos', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12483, 300005206, 'Tactilite T2 PBGC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12490, 300005208, 'Tactilite T2 Salvation', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12485, 300005207, 'L115A1 Talos', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12488, 300005208, 'Tactilite T2 Salvation', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12486, 300005207, 'L115A1 Talos', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12489, 300005208, 'Tactilite T2 Salvation', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12491, 300005209, 'AS-50 GSL 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12494, 300005210, 'Tactilite T2 Samurai', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12492, 300005209, 'AS-50 GSL 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12499, 300005211, 'AS-50 Renegade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12496, 300005210, 'Tactilite T2 Samurai', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12495, 300005210, 'Tactilite T2 Samurai', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12497, 300005211, 'AS-50 Renegade', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12501, 300005212, 'Cheytac M200 Chicano', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12500, 300005212, 'Cheytac M200 Chicano', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12498, 300005211, 'AS-50 Renegade', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12502, 300005212, 'Cheytac M200 Chicano', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12505, 300005213, 'PGM-Hecate2 Beach', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12503, 300005213, 'PGM-Hecate2 Beach', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12507, 300005214, 'Cheytac M200 Naga', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12508, 300005214, 'Cheytac M200 Naga', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12506, 300005214, 'Cheytac M200 Naga', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12509, 300005215, 'Cheytac M200 Comic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12512, 300005216, 'Tactilite T2 Green', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12510, 300005215, 'Cheytac M200 Comic', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12511, 300005215, 'Cheytac M200 Comic', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12514, 300005216, 'Tactilite T2 Green', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12513, 300005216, 'Tactilite T2 Green', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12516, 300005217, 'AS-50 MNB 3', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12517, 300005217, 'AS-50 MNB 3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12515, 300005217, 'AS-50 MNB 3', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12523, 300005219, 'Tactilite T2 PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12518, 300005218, 'Cheytac M200 PBWC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12520, 300005218, 'Cheytac M200 PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12521, 300005219, 'Tactilite T2 PBWC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12526, 300005220, 'Cheytac M200 CNPB-T5', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12525, 300005220, 'Cheytac M200 CNPB-T5', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12524, 300005220, 'Cheytac M200 CNPB-T5', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12532, 300005222, 'Tactilite T2 Lebaran 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12531, 300005222, 'Tactilite T2 Lebaran 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12530, 300005222, 'Tactilite T2 Lebaran 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12471, 300005202, 'Tactilite T2 Fire', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12534, 300005223, 'Cheytac M200 Nagi Basic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12533, 300005223, 'Cheytac M200 Nagi Basic', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12535, 300005223, 'Cheytac M200 Nagi Basic', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12536, 300005224, 'Cheytac M200 Nagi-Deluxe', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12539, 300005225, 'AS 50 ID 2stAnni', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12537, 300005224, 'Cheytac M200 Nagi-Deluxe', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12538, 300005224, 'Cheytac M200 Nagi-Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12543, 300005226, 'Tactilite T2 ID 2stAnni', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12542, 300005226, 'Tactilite T2 ID 2stAnni', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12544, 300005226, 'Tactilite T2 ID 2stAnni', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12546, 300005227, 'Tactilite T2 Graffiti', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12545, 300005227, 'Tactilite T2 Graffiti', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12547, 300005227, 'Tactilite T2 Graffiti', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12550, 300005228, 'L115A1 Brazuca2', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12549, 300005228, 'L115A1 Brazuca2', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12548, 300005228, 'L115A1 Brazuca2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12551, 300005229, 'Cheytac M200 Brazuca2', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12472, 300005202, 'Tactilite T2 Fire', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12470, 300005202, 'Tactilite T2 Fire', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12473, 300005203, 'Cheytac M200 Cursed Valentine', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12474, 300005203, 'Cheytac M200 Cursed Valentine', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12477, 300005204, 'Tactilite T2 Cursed Valentine', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12481, 300005205, 'Cheytac M200 PBGC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12504, 300005213, 'PGM-Hecate2 Beach', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12540, 300005225, 'AS 50 ID 2stAnni', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12541, 300005225, 'AS 50 ID 2stAnni', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12560, 300005232, 'Barrett M82A1 Premium', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12558, 300005231, 'Tactilite T2 Bolt', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12564, 300005233, 'Cheytac M200 Vacance', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12561, 300005232, 'Barrett M82A1 Premium', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12563, 300005233, 'Cheytac M200 Vacance', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12570, 300005235, 'AS-50 Phantom', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12565, 300005233, 'Cheytac M200 Vacance', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12567, 300005234, 'Tactilite T2 ID Vacance', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12568, 300005234, 'Tactilite T2 ID Vacance', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12572, 300005236, 'AS-50 PBTC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12566, 300005234, 'Tactilite T2 ID Vacance', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12569, 300005235, 'AS-50 Phantom', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12573, 300005236, 'AS-50 PBTC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12575, 300005237, 'Cheytac M200 PBNC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12577, 300005237, 'Cheytac M200 PBNC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12574, 300005236, 'AS-50 PBTC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12578, 300005238, 'Tactilite T2 PBNC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12579, 300005238, 'Tactilite T2 PBNC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12580, 300005238, 'Tactilite T2 PBNC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12582, 300005239, 'Cheytac M200 Newborn 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12581, 300005239, 'Cheytac M200 Newborn 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12583, 300005239, 'Cheytac M200 Newborn 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12584, 300005240, 'Cheytac M200 Ottoman', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12586, 300005240, 'Cheytac M200 Ottoman', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12585, 300005240, 'Cheytac M200 Ottoman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12587, 300005241, 'Tactilite T2 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12589, 300005241, 'Tactilite T2 Kemerdekaan', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12588, 300005241, 'Tactilite T2 Kemerdekaan', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12591, 300005242, 'AS-50 Kemerdekaan', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12592, 300005242, 'AS-50 Kemerdekaan', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12590, 300005242, 'AS-50 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12594, 300005243, 'Cheytac M200 Brightness', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12593, 300005243, 'Cheytac M200 Brightness', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12595, 300005243, 'Cheytac M200 Brightness', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12597, 300005244, 'Cheytac M200 Darkness', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12596, 300005244, 'Cheytac M200 Darkness', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12598, 300005244, 'Cheytac M200 Darkness', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12599, 300005245, 'L115A1 7th Anniversary', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12600, 300005245, 'L115A1 7th Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12604, 300005246, 'Cheytac M200 7th Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12602, 300005246, 'Cheytac M200 7th Anniversary', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12603, 300005246, 'Cheytac M200 7th Anniversary', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12606, 300005247, 'PGM Hecate2 7th Anniversary', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12607, 300005247, 'PGM Hecate2 7th Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12605, 300005247, 'PGM Hecate2 7th Anniversary', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12608, 300005248, 'Cheytac M200 Aguila', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12609, 300005248, 'Cheytac M200 Aguila', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12610, 300005248, 'Cheytac M200 Aguila', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12611, 300005249, 'Tactilite T2 PBST-ES', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12612, 300005249, 'Tactilite T2 PBST-ES', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12613, 300005249, 'Tactilite T2 PBST-ES', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12615, 300005250, 'Tactilite T2 Military', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12618, 300005251, 'Cheytac M200 PBIC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12616, 300005250, 'Tactilite T2 Military', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12614, 300005250, 'Tactilite T2 Military', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12617, 300005251, 'Cheytac M200 PBIC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12619, 300005251, 'Cheytac M200 PBIC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12621, 300005252, 'AS-50 PBIC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12622, 300005252, 'AS-50 PBIC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12620, 300005252, 'AS-50 PBIC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12624, 300005253, 'Cheytac M200 TSE', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12623, 300005253, 'Cheytac M200 TSE', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12625, 300005253, 'Cheytac M200 TSE', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12626, 300005254, 'SSG69 TSE', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12628, 300005254, 'SSG69 TSE', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12630, 300005255, 'L115A1 Rebel', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12631, 300005255, 'L115A1 Rebel', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12629, 300005255, 'L115A1 Rebel', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12633, 300005256, 'CHEYTAC M200 HALLOWEEN2017', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12632, 300005256, 'CHEYTAC M200 HALLOWEEN2017', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12634, 300005256, 'CHEYTAC M200 HALLOWEEN2017', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12555, 300005230, 'Cheytac M200 Ramadan', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12553, 300005229, 'Cheytac M200 Brazuca2', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12554, 300005230, 'Cheytac M200 Ramadan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12557, 300005231, 'Tactilite T2 Bolt', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12559, 300005231, 'Tactilite T2 Bolt', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12562, 300005232, 'Barrett M82A1 Premium', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12571, 300005235, 'AS-50 Phantom', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12646, 300005260, 'Tactilite T2 PBIWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12643, 300005259, 'Cheytac M200 PBIWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12645, 300005260, 'Tactilite T2 PBIWC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12649, 300005261, 'Tactilite T2 Fire Dragon', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12644, 300005260, 'Tactilite T2 PBIWC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12647, 300005261, 'Tactilite T2 Fire Dragon', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12652, 300005262, 'Cheytac M200 Latin7', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12648, 300005261, 'Tactilite T2 Fire Dragon', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12654, 300005263, 'Tactilite T2 Desert Hound', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12650, 300005262, 'Cheytac M200 Latin7', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12653, 300005263, 'Tactilite T2 Desert Hound', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12651, 300005262, 'Cheytac M200 Latin7', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12658, 300005264, 'Tactilite T2 Freedom', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12655, 300005263, 'Tactilite T2 Desert Hound', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12661, 300005265, 'Cheytac M200 X-MAS 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12656, 300005264, 'Tactilite T2 Freedom', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12657, 300005264, 'Tactilite T2 Freedom', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12664, 300005266, 'Tactilite T2 X-MAS 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12662, 300005266, 'Tactilite T2 X-MAS 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12659, 300005265, 'Cheytac M200 X-MAS 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12663, 300005266, 'Tactilite T2 X-MAS 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12666, 300005267, 'AS-50 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12669, 300005268, 'Barrett M82A1 Black', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12670, 300005268, 'Barrett M82A1 Black', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12667, 300005267, 'AS-50 Black', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12665, 300005267, 'AS-50 Black', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12671, 300005269, 'Cheytac M200 Black', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12672, 300005269, 'Cheytac M200 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12668, 300005268, 'Barrett M82A1 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12675, 300005270, 'Tactilite T2 Black', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12673, 300005269, 'Cheytac M200 Black', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12678, 300005271, 'AS-50 Red', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12674, 300005270, 'Tactilite T2 Black', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12679, 300005271, 'AS-50 Red', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12676, 300005270, 'Tactilite T2 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12677, 300005271, 'AS-50 Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12688, 300005274, 'L115A1 Red', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12681, 300005272, 'Barrett M82A1 Red', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12686, 300005274, 'L115A1 Red', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12680, 300005272, 'Barrett M82A1 Red', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12684, 300005273, 'Cheytac M200 Red', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12683, 300005273, 'Cheytac M200 Red', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12691, 300005275, 'Tactilite T2 Red', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12687, 300005274, 'L115A1 Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12689, 300005275, 'Tactilite T2 Red', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12694, 300005276, 'AS-50 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12685, 300005273, 'Cheytac M200 Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12698, 300005278, 'Cheytac M200 Blue', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12692, 300005276, 'AS-50 Blue', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12693, 300005276, 'AS-50 Blue', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12695, 300005277, 'Barrett M82A1 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12700, 300005278, 'Cheytac M200 Blue', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12696, 300005277, 'Barrett M82A1 Blue', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12699, 300005278, 'Cheytac M200 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12703, 300005279, 'L115A1 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12701, 300005279, 'L115A1 Blue', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12705, 300005280, 'Tactilite T2 Blue', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12704, 300005280, 'Tactilite T2 Blue', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12702, 300005279, 'L115A1 Blue', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12706, 300005280, 'Tactilite T2 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12707, 300005281, 'Tactilite T2 Pandora', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12709, 300005281, 'Tactilite T2 Pandora', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12710, 300005282, 'Cheytac M200 Pandora', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12638, 300005258, 'Cheytac M200 Shatter UM', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12697, 300005277, 'Barrett M82A1 Blue', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12712, 300005282, 'Cheytac M200 Pandora', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12711, 300005282, 'Cheytac M200 Pandora', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12714, 300005283, 'Tactilite T2 Puppy', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12713, 300005283, 'Tactilite T2 Puppy', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12717, 300005284, 'L115A1 Nevasca', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12715, 300005283, 'Tactilite T2 Puppy', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12718, 300005284, 'L115A1 Nevasca', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12720, 300005285, 'Cheytac M200 Nevasca', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12716, 300005284, 'L115A1 Nevasca', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12640, 300005258, 'Cheytac M200 Shatter UM', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12637, 300005257, 'Cheytac M200 Shatter Z1', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12721, 300005285, 'Cheytac M200 Nevasca', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12682, 300005272, 'Barrett M82A1 Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12635, 300005257, 'Cheytac M200 Shatter Z1', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12641, 300005259, 'Cheytac M200 PBIWC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12639, 300005258, 'Cheytac M200 Shatter UM', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12642, 300005259, 'Cheytac M200 PBIWC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12727, 300005287, 'Tactilite T2 Heart Valentine', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12731, 300005289, 'Tactilite T2 GRSV', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12730, 300005288, 'Tactilite T2 Acrylic', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12733, 300005289, 'Tactilite T2 GRSV', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12734, 300005290, 'Cheytac M200 GRSV', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12736, 300005290, 'Cheytac M200 GRSV', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12732, 300005289, 'Tactilite T2 GRSV', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12737, 300005291, 'Tactilite T2 Nusantara', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12735, 300005290, 'Cheytac M200 GRSV', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12742, 300005292, 'Barrett M28A1 Nusantara', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12739, 300005291, 'Tactilite T2 Nusantara', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12740, 300005292, 'Barrett M28A1 Nusantara', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12738, 300005291, 'Tactilite T2 Nusantara', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12741, 300005292, 'Barrett M28A1 Nusantara', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12744, 300005293, 'Cheytac M200 Graduation', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12748, 300005294, 'Cheytac M200 Latin Championship', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12751, 300005297, 'L115A1 Rebels', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12745, 300005293, 'Cheytac M200 Graduation', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12746, 300005294, 'Cheytac M200 Latin Championship', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12747, 300005294, 'Cheytac M200 Latin Championship', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12749, 300005297, 'L115A1 Rebels', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12754, 300005298, 'Tactilite T2 Holi', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12753, 300005298, 'Tactilite T2 Holi', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12750, 300005297, 'L115A1 Rebels', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12757, 300005300, 'CHEYTAC M200 DIGITAL', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12752, 300005298, 'Tactilite T2 Holi', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12756, 300005300, 'CHEYTAC M200 DIGITAL', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12759, 300005301, 'TACTILITE T2 M1LGR4U', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12758, 300005301, 'TACTILITE T2 M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12755, 300005300, 'CHEYTAC M200 DIGITAL', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12760, 300005301, 'TACTILITE T2 M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12766, 300005303, 'Cheytac M200 Maze', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12761, 300005302, 'CHEYTAC M200 M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12762, 300005302, 'CHEYTAC M200 M1LGR4U', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12763, 300005302, 'CHEYTAC M200 M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12767, 300005304, 'Cheytac M200 PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12764, 300005303, 'Cheytac M200 Maze', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12772, 300005305, 'Tactilite T2 PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12765, 300005303, 'Cheytac M200 Maze', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12770, 300005305, 'Tactilite T2 PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12768, 300005304, 'Cheytac M200 PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12771, 300005305, 'Tactilite T2 PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12776, 300005307, 'Tactilite T2 GSL 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12774, 300005306, 'Tactilite T2 Vitoria', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12775, 300005306, 'Tactilite T2 Vitoria', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12777, 300005307, 'Tactilite T2 GSL 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12773, 300005306, 'Tactilite T2 Vitoria', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12780, 300005308, 'Cheytac M200 GSL 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12778, 300005307, 'Tactilite T2 GSL 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12779, 300005308, 'Cheytac M200 GSL 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12784, 300005309, 'Cheytac M200 Midnight4', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12781, 300005308, 'Cheytac M200 GSL 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12782, 300005309, 'Cheytac M200 Midnight4', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12786, 300005310, 'Cheytac M200 White Rabbit', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12785, 300005310, 'Cheytac M200 White Rabbit', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12783, 300005309, 'Cheytac M200 Midnight4', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12788, 300005311, 'L115A1 White Rabbit', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12789, 300005311, 'L115A1 White Rabbit', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12787, 300005310, 'Cheytac M200 White Rabbit', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12790, 300005311, 'L115A1 White Rabbit', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12793, 300005313, 'Cheytac M200 Ramadhan 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12791, 300005313, 'Cheytac M200 Ramadhan 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12795, 300005314, 'Tactilite T2 Ramadhan 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12792, 300005313, 'Cheytac M200 Ramadhan 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12799, 300005315, 'Cheytac M200 Paladin', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12794, 300005314, 'Tactilite T2 Ramadhan 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12798, 300005315, 'Cheytac M200 Paladin', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12797, 300005315, 'Cheytac M200 Paladin', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12803, 300005316, 'Tactilite T2 Lebaran 2018', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12805, 300005316, 'Tactilite T2 Lebaran 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12801, 300005316, 'Tactilite T2 Lebaran 2018', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12724, 300005286, 'Tactilite T2 RRQ', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12723, 300005286, 'Tactilite T2 RRQ', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12726, 300005287, 'Tactilite T2 Heart Valentine', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12722, 300005286, 'Tactilite T2 RRQ', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12725, 300005287, 'Tactilite T2 Heart Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12728, 300005288, 'Tactilite T2 Acrylic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12729, 300005288, 'Tactilite T2 Acrylic', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12812, 300005320, 'Cheytac M200 Arcade', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12811, 300005319, 'PGM Hecate2 Trinitum', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12814, 300005320, 'Cheytac M200 Arcade', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12813, 300005320, 'Cheytac M200 Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12816, 300005321, 'Tactilite T2 Arcade', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12817, 300005321, 'Tactilite T2 Arcade', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12819, 300005323, 'Cheytac M200 Surfing', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12818, 300005323, 'Cheytac M200 Surfing', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12815, 300005321, 'Tactilite T2 Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12823, 300005324, 'Tactilite T2 Surfing', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12820, 300005323, 'Cheytac M200 Surfing', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12822, 300005324, 'Tactilite T2 Surfing', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12825, 300005325, 'Tactilite T2 Milkyway', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12826, 300005325, 'Tactilite T2 Milkyway', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12821, 300005324, 'Tactilite T2 Surfing', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12829, 300005326, 'Cheytac M200 Brazuca3', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12830, 300005327, 'Tactilite T2 Brazuca3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12827, 300005326, 'Cheytac M200 Brazuca3', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12828, 300005326, 'Cheytac M200 Brazuca3', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12834, 300005328, 'Cheytac M200 Football', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12832, 300005327, 'Tactilite T2 Brazuca3', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12831, 300005327, 'Tactilite T2 Brazuca3', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12838, 300005329, 'Cheytac M200 Football Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12833, 300005328, 'Cheytac M200 Football', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12835, 300005328, 'Cheytac M200 Football', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12836, 300005329, 'Cheytac M200 Football Deluxe', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12837, 300005329, 'Cheytac M200 Football Deluxe', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12840, 300005331, 'Tactilite T2 Renegade2 (End Of List)', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12843, 400006004, '870MCS W.', 24000, 0, 100, 1, 1, 2, 0, 35, 0);
INSERT INTO "public"."shop" VALUES (12839, 300005331, 'Tactilite T2 Renegade2 (End Of List)', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12846, 400006005, 'M1887  ', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12841, 300005331, 'Tactilite T2 Renegade2 (End Of List)', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12845, 400006005, 'M1887  ', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12844, 400006005, 'M1887', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12849, 400006006, 'SPAS-15 SL', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12847, 400006006, 'SPAS-15 SL', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12851, 400006010, 'M1887 W. ', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12848, 400006006, 'SPAS-15 SL', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12854, 400006011, '870MCS W. D ', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12857, 400006012, 'SPAS-15 D ', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12852, 400006011, '870MCS W. D ', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12850, 400006010, 'M1887 W. ', 0, 0, 1000, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12856, 400006012, 'SPAS-15 D ', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12855, 400006012, 'SPAS-15 D ', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12858, 400006014, '870MCS SI D ', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12859, 400006014, '870MCS SI D ', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12860, 400006014, '870MCS SI D ', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12865, 400006016, 'SPAS-15 SI D ', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12861, 400006015, '870MCS D ', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12863, 400006015, '870MCS D ', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12864, 400006016, 'SPAS-15 SI D ', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12862, 400006015, '870MCS D ', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12869, 400006017, 'M1887 D ', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12866, 400006016, 'SPAS-15 SI D ', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12867, 400006017, 'M1887 D ', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12868, 400006017, 'M1887 D ', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12870, 400006018, 'SPAS-15 MSC ', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12871, 400006018, 'SPAS-15 MSC ', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12874, 400006019, 'JackHammer ', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12873, 400006019, 'JackHammer ', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12872, 400006018, 'SPAS-15 MSC ', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12877, 400006020, 'Kel-Tec KSG', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12875, 400006019, 'JackHammer ', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12878, 400006020, 'Kel-Tec KSG-15', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12881, 400006021, 'M1887 SL', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12879, 400006021, 'M1887 SL', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12880, 400006021, 'M1887 SL', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12883, 400006026, 'M1887 W GRS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12884, 400006026, 'M1887 W GRS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12887, 400006027, 'M1887 PBNC', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12886, 400006027, 'M1887 PBNC', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12882, 400006026, 'M1887 W GRS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12885, 400006027, 'M1887 PBNC', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12842, 400006003, 'SPAS-15', 32000, 0, 100, 1, 1, 2, 0, 37, 0);
INSERT INTO "public"."shop" VALUES (12890, 400006028, 'M1887W GRS EV', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12889, 400006028, 'M1887W GRS EV', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12800, 300005316, 'Tactilite T2 Lebaran 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12807, 300005318, 'Tactilite T2 Trinitum', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12808, 300005318, 'Tactilite T2 Trinitum', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12802, 300005316, 'Tactilite T2 Lebaran 2018', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12810, 300005319, 'PGM Hecate2 Trinitum', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12806, 300005318, 'Tactilite T2 Trinitum', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12809, 300005319, 'PGM Hecate2 Trinitum', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12895, 400006030, 'M1887 Bloody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12903, 400006034, 'M1887 R', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12900, 400006033, 'M1887 W TH 1st Anniversary', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12905, 400006034, 'M1887 R', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12901, 400006033, 'M1887 W TH 1st Anniversary', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12902, 400006033, 'M1887 W TH 1st Anniversary', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12904, 400006034, 'M1887 R', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12907, 400006035, 'M1887 PBNC5', 0, 4300, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12906, 400006035, 'M1887 PBNC5', 0, 1500, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12908, 400006035, 'M1887 PBNC5', 0, 800, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12909, 400006036, 'Kel-Tec KSG 15 GSL2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12910, 400006036, 'Kel-Tec KSG 15 GSL2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12913, 400006037, 'M1887 Brazuca', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12912, 400006037, 'M1887 Brazuca', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12914, 400006037, 'M1887 Brazuca', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12917, 400006038, 'M1887 PBIC2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12915, 400006038, 'M1887 PBIC2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12916, 400006038, 'M1887 PBIC2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12918, 400006039, 'UTS-15', 42000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12920, 400006040, 'SPAS-15 NonLogo PBSC2013', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12921, 400006040, 'SPAS-15 NonLogo PBSC2013', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12922, 400006041, 'M1887 Lion-Heart', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12923, 400006041, 'M1887 Lion-Heart', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12925, 400006042, 'Zombie Slayer', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12926, 400006042, 'Zombie Slayer', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12927, 400006042, 'Zombie Slayer', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12928, 400006043, 'Remington ETA', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12929, 400006044, 'Remington ETA G.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12930, 400006044, 'Remington ETA G.', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12931, 400006044, 'Remington ETA G.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12933, 400006046, 'UTS-15 D', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12932, 400006046, 'UTS-15 D', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12934, 400006046, 'UTS-15 D', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12937, 400006047, 'Cerberus', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12936, 400006047, 'Cerberus', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12935, 400006047, 'Cerberus', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12940, 400006048, 'UTS-15 G.', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12938, 400006048, 'UTS-15 G.', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12939, 400006048, 'UTS-15 G.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12941, 400006049, 'M1887 GSL2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12945, 400006051, 'Water Gun', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12943, 400006049, 'M1887 GSL2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12946, 400006051, 'Water Gun', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12948, 400006052, 'M1887 Summer', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12944, 400006051, 'Water Gun', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12947, 400006052, 'M1887 Summer', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12954, 400006054, 'SPAS-15 PBNC2015', 0, 1699, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12950, 400006053, 'M1887 PBNC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12953, 400006054, 'SPAS-15 PBNC2015', 0, 899, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12956, 400006055, 'M1887 PBTC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12958, 400006055, 'M1887 PBTC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12957, 400006055, 'M1887 PBTC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12959, 400006056, 'M1887 Mech', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12960, 400006056, 'M1887 Mech', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12961, 400006056, 'M1887 Mech', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12964, 400006057, 'SPAS-15 MSC PBNC2015 U.S.', 0, 5999, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12963, 400006057, 'SPAS-15 MSC PBNC2015 U.S.', 0, 999, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12966, 400006058, 'M1887 PBIC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12967, 400006058, 'M1887 PBIC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12965, 400006058, 'M1887 PBIC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12968, 400006059, 'M1887 Gold', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12970, 400006059, 'M1887 Gold', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12969, 400006059, 'M1887 Gold', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12973, 400006060, 'M1887 Medical', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12972, 400006060, 'M1887 Medical', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12971, 400006060, 'M1887 Medical', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12976, 400006061, 'M1887 Steam', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12974, 400006061, 'M1887 Steam', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12975, 400006061, 'M1887 Steam', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12978, 400006062, 'M1887 Obsidian', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12977, 400006062, 'M1887 Obsidian', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12979, 400006062, 'M1887 Obsidian', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12892, 400006029, 'SPAS-15 PBSC 2013 ', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12891, 400006029, 'SPAS-15 PBSC 2013 ', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12893, 400006029, 'SPAS-15 PBSC 2013 ', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12894, 400006030, 'M1887 Bloody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12897, 400006032, 'SPAS-15 Elite', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12899, 400006032, 'SPAS-15 Elite', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12898, 400006032, 'SPAS-15 Elite', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12911, 400006036, 'Kel-Tec KSG 15 GSL2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12987, 400006065, 'M1887 Cupid', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12989, 400006066, 'M1887 GRS3', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12993, 400006067, 'M1887 Beast', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12991, 400006066, 'M1887 GRS3', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12992, 400006067, 'M1887 Beast', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12997, 400006068, 'M1887 PBGC', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12994, 400006067, 'M1887 Beast', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13000, 400006069, 'M1887 Skeleton', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12996, 400006068, 'M1887 PBGC', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12999, 400006069, 'M1887 Skeleton', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12998, 400006069, 'M1887 Skeleton', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13001, 400006070, 'M1887 Dragon', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13003, 400006070, 'M1887 Dragon', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13002, 400006070, 'M1887 Dragon', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13007, 400006072, 'M1887 Dolphin', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13005, 400006071, 'M1887 ID 1stAnni', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13004, 400006071, 'M1887 ID 1stAnni', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13008, 400006072, 'M1887 Dolphin', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13009, 400006072, 'M1887 Dolphin', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13011, 400006073, 'SPAS-15 Blue Diamond', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13012, 400006073, 'SPAS-15 Blue Diamond', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13014, 400006074, 'M1887 Lebaran2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13010, 400006073, 'SPAS-15 Blue Diamond', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13015, 400006074, 'M1887 Lebaran2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13013, 400006074, 'M1887 Lebaran2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12983, 400006064, 'M1887 Arena Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13018, 400006075, 'M1887 Woody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13021, 400006076, 'M1887 Newborn2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13017, 400006075, 'M1887 Woody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13016, 400006075, 'M1887 Woody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13020, 400006076, 'M1887 Newborn2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13024, 400006077, 'M1887 Liberty', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13025, 400006078, 'M1887 PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13022, 400006077, 'M1887 Liberty', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13026, 400006078, 'M1887 PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13027, 400006078, 'M1887 PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13028, 400006079, 'M1887 PBTC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13029, 400006079, 'M1887 PBTC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13031, 400006080, 'M1887 Dark Steel', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13032, 400006080, 'M1887 Dark Steel', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13033, 400006080, 'M1887 Dark Steel', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13036, 400006081, 'M1887 PBNC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13034, 400006081, 'M1887 PBNC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13035, 400006081, 'M1887 PBNC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13037, 400006082, 'M1887 Supreme', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13038, 400006082, 'M1887 Supreme', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13039, 400006082, 'M1887 Supreme', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13042, 400006083, 'M1887 Gorgeous', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13041, 400006083, 'M1887 Gorgeous', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13040, 400006083, 'M1887 Gorgeous', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13045, 400006084, 'Cerberus Gorgeous', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13044, 400006084, 'Cerberus Gorgeous', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13043, 400006084, 'Cerberus Gorgeous', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13046, 400006085, 'M1887 Mystic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13048, 400006085, 'M1887 Mystic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13047, 400006085, 'M1887 Mystic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13049, 400006086, 'M1887 Pahlawan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13050, 400006086, 'M1887 Pahlawan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13053, 400006087, 'Candy Cane Shotgun X-MAS 2016', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13052, 400006087, 'Candy Cane Shotgun X-MAS 2016', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13057, 400006088, 'Zombie Slayer Ice', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13056, 400006088, 'Zombie Slayer Ice', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13055, 400006088, 'Zombie Slayer Ice', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13060, 400006089, 'M1887 Lightning', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13059, 400006089, 'M1887 Lightning', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13058, 400006089, 'M1887 Lightning', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13062, 400006090, 'M1887 Beyond', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13063, 400006090, 'M1887 Beyond', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13061, 400006090, 'M1887 Beyond', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13064, 400006091, 'Remington ETA Mech-Hero', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13065, 400006091, 'Remington ETA Mech-Hero', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13066, 400006091, 'Remington ETA Mech-Hero', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13067, 400006092, 'SPAS-15 Fire', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13069, 400006092, 'SPAS-15 Fire', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12982, 400006063, 'M1887 Arena Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12985, 400006064, 'M1887 Arena Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12984, 400006064, 'M1887 Arena Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12986, 400006065, 'M1887 Cupid', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12988, 400006065, 'M1887 Cupid', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13023, 400006077, 'M1887 Liberty', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12990, 400006066, 'M1887 GRS3', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12995, 400006068, 'M1887 PBGC', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13075, 400006094, 'M1887 PBGC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13080, 400006096, 'M1887 GSL 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13076, 400006095, '870MCS Talos', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13079, 400006096, 'M1887 GSL 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13082, 400006097, 'M1887 Renegade', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13084, 400006097, 'M1887 Renegade', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13087, 400006098, 'M1887 Chicano', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13083, 400006097, 'M1887 Renegade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13085, 400006098, 'M1887 Chicano', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13086, 400006098, 'M1887 Chicano', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13088, 400006099, 'M1887 Beach', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13090, 400006099, 'M1887 Beach', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13089, 400006099, 'M1887 Beach', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13091, 400006100, 'M1887 Naga', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13093, 400006100, 'M1887 Naga', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13092, 400006100, 'M1887 Naga', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13094, 400006101, 'M1887 Comic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13095, 400006101, 'M1887 Comic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13098, 400006102, 'M1887 Green', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13100, 400006103, 'M1887 PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13096, 400006101, 'M1887 Comic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13101, 400006103, 'M1887 PBWC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13099, 400006102, 'M1887 Green', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13097, 400006102, 'M1887 Green', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13104, 400006104, 'M1887 Mech', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13105, 400006104, 'M1887 Mech', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13103, 400006104, 'M1887 Mech', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13106, 400006105, 'M1887 Lebaran 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13107, 400006105, 'M1887 Lebaran 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13112, 400006107, 'M1887 Nagi-Deluxe', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13108, 400006105, 'M1887 Lebaran 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13111, 400006106, 'M1887 Nagi-Basic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13109, 400006106, 'M1887 Nagi-Basic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13110, 400006106, 'M1887 Nagi-Basic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13114, 400006107, 'M1887 Nagi-Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13117, 400006108, 'Zombie Slayer ID 2nd Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13113, 400006107, 'M1887 Nagi-Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13116, 400006108, 'Zombie Slayer ID 2nd Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13118, 400006109, 'M1887 ID 2nd Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13115, 400006108, 'Zombie Slayer ID 2nd Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13120, 400006109, 'M1887 ID 2nd Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13124, 400006111, 'M1887 Vacance', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13122, 400006110, 'M1887 Ramadhan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13119, 400006109, 'M1887 ID 2nd Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13123, 400006110, 'M1887 Ramadhan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13127, 400006112, 'M1887 PBTC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13121, 400006110, 'M1887 Ramadhan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13129, 400006112, 'M1887 PBTC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13131, 400006113, 'M1887 PBNC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13126, 400006111, 'M1887 Vacance', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13128, 400006112, 'M1887 PBTC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13130, 400006113, 'M1887 PBNC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13134, 400006114, 'UTS-15 Newborn 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13135, 400006114, 'UTS-15 Newborn 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13132, 400006113, 'M1887 PBNC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13136, 400006115, 'SF Shotgun', 0, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13133, 400006114, 'UTS-15 Newborn 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13139, 400006116, 'M1887 Ottoman', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13137, 400006116, 'M1887 Ottoman', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13138, 400006116, 'M1887 Ottoman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13141, 400006117, 'M1887 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13144, 400006118, 'Cerberus Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13140, 400006117, 'M1887 Kemerdekaan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13148, 400006119, 'M1887 PBIC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13142, 400006117, 'M1887 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13147, 400006119, 'M1887 PBIC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13146, 400006119, 'M1887 PBIC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13143, 400006118, 'Cerberus Kemerdekaan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13151, 400006120, 'Cerberus Fire Dragon', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13150, 400006120, 'Cerberus Fire Dragon', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13154, 400006121, 'Zombie Slayer Latin7', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13149, 400006120, 'Cerberus Fire Dragon', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13152, 400006121, 'Zombie Slayer Latin7', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13155, 400006122, 'M1887 Freedom', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13156, 400006122, 'M1887 Freedom', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13153, 400006121, 'Zombie Slayer Latin7', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13070, 400006093, 'M1887 Cursed Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13072, 400006093, 'M1887 Cursed Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13074, 400006094, 'M1887 PBGC 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13071, 400006093, 'M1887 Cursed Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13073, 400006094, 'M1887 PBGC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13081, 400006096, 'M1887 GSL 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13077, 400006095, '870MCS Talos', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13161, 400006124, 'M1887 X-MAS 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13171, 400006128, 'SPAS-15 Black', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13167, 400006127, 'M1887 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13169, 400006127, 'M1887 Black', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13170, 400006128, 'SPAS-15 Black', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13168, 400006127, 'M1887 Black', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13174, 400006129, 'Remington ETA Black', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13173, 400006129, 'Remington ETA Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13172, 400006128, 'SPAS-15 Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13175, 400006129, 'Remington ETA Black', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13176, 400006130, 'JackHammer RED', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13178, 400006130, 'JackHammer RED', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13177, 400006130, 'JackHammer RED', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13180, 400006131, 'M1887 Red', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13179, 400006131, 'M1887 Red', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13181, 400006131, 'M1887 Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13183, 400006132, 'SPAS-15 RED', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13192, 400006135, 'M1887 Blue', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13182, 400006132, 'SPAS-15 RED', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13190, 400006134, 'JackHammer Blue', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13185, 400006133, 'Remington ETA Red', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13186, 400006133, 'Remington ETA Red', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13187, 400006133, 'Remington ETA Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13189, 400006134, 'JackHammer Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13191, 400006135, 'M1887 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13196, 400006136, 'SPAS-15 Blue', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13193, 400006135, 'M1887 Blue', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13195, 400006136, 'SPAS-15 Blue', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13197, 400006137, 'Remington ETA Blue', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13198, 400006137, 'Remington ETA Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13199, 400006137, 'Remington ETA Blue', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13202, 400006139, 'M1887 Zepetto', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13201, 400006139, 'M1887 Zepetto', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13200, 400006138, 'M1887 Pandora', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13203, 400006139, 'M1887 Zepetto', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13162, 400006124, 'M1887 X-MAS 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13194, 400006136, 'SPAS-15 Blue', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13204, 400006140, 'M1887 Heart Valentine', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13205, 400006140, 'M1887 Heart Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13208, 400006141, 'M1887 Nusantara', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13206, 400006140, 'M1887 Heart Valentine', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13207, 400006141, 'M1887 Nusantara', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13211, 400006143, 'M1887 Latin Championship', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13209, 400006141, 'M1887 Nusantara', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13214, 400006144, 'M1887 DIGITAL', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13212, 400006143, 'M1887 Latin Championship', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13213, 400006143, 'M1887 Latin Championship', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13216, 400006144, 'M1887 DIGITAL', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13218, 400006146, 'M1887 PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13217, 400006146, 'M1887 PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13215, 400006144, 'M1887 DIGITAL', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13224, 400006148, 'M1887 Ramadhan 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13221, 400006147, 'M1887 GSL 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13219, 400006146, 'M1887 PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13220, 400006147, 'M1887 GSL 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13222, 400006147, 'M1887 GSL 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13223, 400006148, 'M1887 Ramadhan 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13227, 400006149, 'Cerberus Lebaran 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13226, 400006149, 'Cerberus Lebaran 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13225, 400006148, 'M1887 Ramadhan 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13230, 400006150, 'UTS-15 Trinitum', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13231, 400006150, 'UTS-15 Trinitum', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13228, 400006149, 'Cerberus Lebaran 2018', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13232, 400006151, 'M1887 GunZeeD', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13235, 400006152, 'M1887 Arcade', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13229, 400006150, 'UTS-15 Trinitum', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13233, 400006151, 'M1887 GunZeeD', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13234, 400006151, 'M1887 GunZeeD', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13237, 400006152, 'M1887 Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13239, 400006153, 'M1887 Surfing', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13238, 400006153, 'M1887 Surfing', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13241, 400006154, 'Cerberus Milkyway [BUG SKIN]', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13240, 400006153, 'M1887 Surfing', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13242, 400006154, 'Cerberus Milkyway [BUG SKIN]', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13245, 400006155, 'M1887 Latin Championship 2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13243, 400006154, 'Cerberus Milkyway [BUG SKIN]', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13159, 400006123, 'Cerberus X-MAS 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13158, 400006123, 'Cerberus X-MAS 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13160, 400006123, 'Cerberus X-MAS 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13184, 400006132, 'SPAS-15 RED', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13165, 400006126, 'JackHammer Black', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13164, 400006126, 'JackHammer Black', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13163, 400006124, 'M1887 X-MAS 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13252, 500010007, 'RPD SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13253, 500010007, 'RPD SI.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13255, 500010009, 'L86 LSW XMAS', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13256, 500010011, 'Ultimax 100', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13257, 500010012, 'Ultimax 100 G.', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13258, 500010012, 'Ultimax 100 G.', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13259, 500010012, 'Ultimax 100 G.', 0, 9000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13260, 500010013, 'Ultimax 100 Madness', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13264, 500010014, 'Ultimax 100 Mummy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13268, 500010015, 'L86 LSW Beach', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13262, 500010013, 'Ultimax 100 Madness', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13261, 500010013, 'Ultimax 100 Madness', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13267, 500010015, 'L86 LSW Beach', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13266, 500010015, 'L86 LSW Beach', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13263, 500010014, 'Ultimax 100 Mummy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13270, 500010016, 'Ultimax 100 Acrylic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13272, 601002001, 'Desert Eagle', 18000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13269, 500010016, 'Ultimax 100 Acrylic', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13273, 601002002, 'MK 23 Ext.', 14000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13271, 500010016, 'Ultimax 100 Acrylic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13276, 601002011, 'Glock 18', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13275, 601002007, 'C. Python', 20000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13274, 601002005, 'D-Eagle Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13279, 601002012, 'C. Python D', 0, 6000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13278, 601002012, 'C. Python D', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13277, 601002012, 'C. Python D', 0, 600, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13280, 601002013, 'RB 454 SS2M', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13284, 601002016, 'RB 454 SS8M+S', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13285, 601002016, 'RB 454 SS8M+S', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13282, 601002015, 'RB 454 SS8M', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13281, 601002014, 'RB 454 SS5M', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13283, 601002016, 'RB 454 SS8M+S', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13287, 601002017, 'C. Python G', 0, 6000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13286, 601002017, 'C. Python G', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13292, 601002019, 'Mk 23 Ext. D', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13290, 601002018, 'C. Python G D', 0, 600, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13288, 601002018, 'C. Python G D', 0, 6000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13293, 601002019, 'Mk 23 Ext. D', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13294, 601002021, 'Glock 18 D', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13291, 601002019, 'Mk 23 Ext. D', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13295, 601002021, 'Glock 18 D', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13296, 601002021, 'Glock 18 D', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13299, 601002023, 'IMI Uzi 9mm', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13297, 601002022, 'Colt 45', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13300, 601002023, 'IMI Uzi 9mm', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13301, 601002024, 'Kriss Vector SDP', 30000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13298, 601002023, 'IMI Uzi 9mm', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13303, 601002026, 'HK69', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13304, 601002026, 'HK69', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13302, 601002026, 'HK69', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13306, 601002027, 'MK23 SI', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13308, 601002028, 'M79', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13310, 601002028, 'M79', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13307, 601002027, 'MK23 SI', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13305, 601002027, 'MK23 SI', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13313, 601002029, 'GL-06', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13311, 601002029, 'GL-06', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13309, 601002028, 'M79', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13315, 601002033, 'Glock 18 PBNC', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13317, 601002034, 'R.B 454 SS8M+S PBSC2013', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13314, 601002033, 'Glock 18 PBNC', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13320, 601002035, 'MK.23 Reload', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13316, 601002033, 'Glock 18 PBNC', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13318, 601002034, 'R.B 454 SS8M+S PBSC2013', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13322, 601002036, 'Desert Eagle Reload', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13319, 601002034, 'R.B 454 SS8M+S PBSC2013', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13324, 601002037, 'Glock 18 Turkey', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13323, 601002036, 'Desert Eagle Reload', 0, 0, 1000, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13321, 601002035, 'MK.23 Reload', 0, 1, 1000, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13325, 601002037, 'Glock 18 Turkey', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13326, 601002037, 'Glock 18 Turkey', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13328, 601002039, 'Glock 18 Azerbaijan', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13327, 601002039, 'Glock 18 Azerbaijan', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13333, 601002047, 'Glock 18 BR Camo', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13329, 601002039, 'Glock 18 Azerbaijan', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13330, 601002040, 'C. Python CS', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13331, 601002040, 'C. Python CS', 0, 1300, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13335, 601002047, 'Glock 18 BR Camo', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13334, 601002047, 'Glock 18 BR Camo', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13248, 500010001, 'Mk 46 Ext.', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13249, 500010002, 'Mk 46 Silver', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13246, 400006155, 'M1887 Latin Championship 2', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13247, 400006156, 'M1887 Renegade2 (End Of List)', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13251, 500010004, 'L86 LSW', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13254, 500010007, 'RPD SI.', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13250, 500010003, 'RPD', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13344, 601002052, 'C. Python Toy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13345, 601002054, 'GL-06 ANC 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13347, 601002054, 'GL-06 ANC 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13350, 601002057, 'D-Eagle Ongame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13349, 601002057, 'D-Eagle Ongame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13348, 601002057, 'D-Eagle Ongame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13351, 601002058, 'C. Python Summer', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13352, 601002058, 'C. Python Summer', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13354, 601002059, 'C. Python Rose', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13358, 601002060, 'C. Python Brazil', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13355, 601002059, 'C. Python Rose', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13356, 601002059, 'C. Python Rose', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13362, 601002061, 'Glock 18 PBST2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13357, 601002060, 'C. Python Brazil', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13359, 601002060, 'C. Python Brazil', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13360, 601002061, 'Glock 18 PBST2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13363, 601002062, 'Glock 18 4Game', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13364, 601002062, 'Glock 18 4Game', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13361, 601002061, 'Glock 18 PBST2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13365, 601002062, 'Glock 18 4Game', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13366, 601002063, 'Glock 18 4Game SE', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13367, 601002063, 'Glock 18 4Game SE', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13368, 601002063, 'Glock 18 4Game SE', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13370, 601002064, 'D-Eagle Lebaran2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13371, 601002064, 'D-Eagle Lebaran2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13369, 601002064, 'D-Eagle Lebaran2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13372, 601002067, 'C. Python PBNC2015', 0, 699, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13376, 601002068, 'R.B Mech', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13373, 601002067, 'C. Python PBNC2015', 0, 2899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13377, 601002068, 'R.B Mech', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13374, 601002067, 'C. Python PBNC2015', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13375, 601002068, 'R.B Mech', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13380, 601002069, 'Kriss Vector SDP DarkDays', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13382, 601002070, 'R.B 454 SS8M+S PBIC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13381, 601002070, 'R.B 454 SS8M+S PBIC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13385, 601002071, 'Glock 18 G.', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13378, 601002069, 'Kriss Vector SDP DarkDays', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13386, 601002071, 'Glock 18 G.', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13383, 601002070, 'R.B 454 SS8M+S PBIC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13384, 601002071, 'Glock 18 G.', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13387, 601002072, 'C. Python VeraCruz', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13389, 601002072, 'C. Python VeraCruz', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13388, 601002072, 'C. Python VeraCruz', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13390, 601002073, 'R.B 454 SS8M+S Cobra', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13391, 601002073, 'R.B 454 SS8M+S Cobra', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13392, 601002073, 'R.B 454 SS8M+S Cobra', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13394, 601002074, 'Kriss Vector SDP Camo Soldier', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13397, 601002075, 'MK.23 SPY', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13395, 601002074, 'Kriss Vector SDP Camo Soldier', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13398, 601002075, 'MK.23 SPY', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13393, 601002074, 'Kriss Vector SDP Camo Soldier', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13396, 601002075, 'MK.23 SPY', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13401, 601002076, 'C. Python Latin5', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13404, 601002077, 'MK.23 Spy-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13399, 601002076, 'C. Python Latin5', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13402, 601002077, 'MK.23 Spy-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13403, 601002077, 'MK.23 Spy-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13408, 601002080, 'C. Python Arena Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13407, 601002079, 'C. Python Arena Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13406, 601002079, 'C. Python Arena Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13412, 601002081, 'R.B 454 SS8M+S Vera Cruz 2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13405, 601002079, 'C. Python Arena Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13410, 601002080, 'C. Python Arena Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13409, 601002080, 'C. Python Arena Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13413, 601002081, 'R.B 454 SS8M+S Vera Cruz 2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13415, 601002082, 'C. Python Sakura', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13411, 601002081, 'R.B 454 SS8M+S Vera Cruz 2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13416, 601002082, 'C. Python Sakura', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13414, 601002082, 'C. Python Sakura', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13417, 601002083, 'C. Python Beast', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13418, 601002083, 'C. Python Beast', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13419, 601002083, 'C. Python Beast', 0, 2950, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13420, 601002084, 'C. Python GSL2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13337, 601002049, 'C. Python Brazuca', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13340, 601002050, 'R.B 454 SS8M NonLogo PBSC2013', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13422, 601002084, 'C. Python GSL2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13338, 601002049, 'C. Python Brazuca', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13339, 601002050, 'R.B 454 SS8M NonLogo PBSC2013', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13346, 601002054, 'GL-06 ANC 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13342, 601002052, 'C. Python Toy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13343, 601002052, 'C. Python Toy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13433, 601002088, 'Glock 18 Mummy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13436, 601002089, 'MK.23 Blue Diamond', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13430, 601002087, 'C. Python PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13431, 601002087, 'C. Python PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13432, 601002088, 'Glock 18 Mummy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13440, 601002091, 'MK.23 Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13435, 601002089, 'MK.23 Blue Diamond', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13439, 601002091, 'MK.23 Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13437, 601002089, 'MK.23 Blue Diamond', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13438, 601002091, 'MK.23 Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13427, 601002086, 'Desert Eagle Tiger-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13443, 601002092, 'C. Python Newborn2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13444, 601002093, 'Kriss Vector SDP Puzzle', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13441, 601002092, 'C. Python Newborn2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13446, 601002093, 'Kriss Vector SDP Puzzle', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13447, 601002094, 'U22 Neos', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13445, 601002093, 'Kriss Vector SDP Puzzle', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13448, 601002095, 'U22 Neos S.', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13453, 601002096, 'U22 Neos G.', 0, 6000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13449, 601002095, 'U22 Neos S.', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13450, 601002095, 'U22 Neos S.', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13452, 601002096, 'U22 Neos G.', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13451, 601002096, 'U22 Neos G.', 0, 600, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13457, 601002098, 'C. Python Dark Steel', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13455, 601002097, 'C. Python PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13456, 601002097, 'C. Python PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13458, 601002098, 'C. Python Dark Steel', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13459, 601002098, 'C. Python Dark Steel', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13460, 601002099, 'R.B 454 SS8M+S PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13462, 601002099, 'R.B 454 SS8M+S PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13465, 601002100, 'C. Python Supreme', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13461, 601002099, 'R.B 454 SS8M+S PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13464, 601002100, 'C. Python Supreme', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13468, 601002101, 'C. Python Mystic', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13463, 601002100, 'C. Python Supreme', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13467, 601002101, 'C. Python Mystic', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13469, 601002102, 'Luger P08', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13472, 601002103, 'Luger SI.', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13466, 601002101, 'C. Python Mystic', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13471, 601002103, 'Luger SI.', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13470, 601002103, 'Luger SI.', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13475, 601002104, 'Luger G.', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13478, 601002105, 'C. Python Latin6', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13476, 601002105, 'C. Python Latin6', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13474, 601002104, 'Luger G.', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13473, 601002104, 'Luger G.', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13480, 601002106, 'C. Python Ice', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13483, 601002107, 'C. Python Chicken', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13477, 601002105, 'C. Python Latin6', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13484, 601002107, 'C. Python Chicken', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13487, 601002108, 'C. Python Hybridman', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13481, 601002106, 'C. Python Ice', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13486, 601002108, 'C. Python Hybridman', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13482, 601002107, 'C. Python Chicken', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13488, 601002109, 'Taurus 454SS Scope Lightning', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13485, 601002108, 'C. Python Hybridman', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13490, 601002109, 'Taurus 454SS Scope Lightning', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13489, 601002109, 'Taurus 454SS Scope Lightning', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13493, 601002110, 'Kriss Vector SDP Mech Hero', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13491, 601002110, 'Kriss Vector SDP Mech Hero', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13492, 601002110, 'Kriss Vector SDP Mech Hero', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13496, 601002111, 'Kriss Vector SDP Fire', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13497, 601002112, 'TEC-9', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13494, 601002111, 'Kriss Vector SDP Fire', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13495, 601002111, 'Kriss Vector SDP Fire', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13498, 601002112, 'TEC-9', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13499, 601002112, 'TEC-9', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13500, 601002113, 'TEC-9 SI.', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13501, 601002113, 'TEC-9 SI.', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13505, 601002114, 'TEC-9 G.', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13502, 601002113, 'TEC-9 SI.', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13507, 601002115, 'Glock 18 Samurai', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13508, 601002115, 'Glock 18 Samurai', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13503, 601002114, 'TEC-9 G.', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13510, 601002116, 'C. Python Naga', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13506, 601002115, 'Glock 18 Samurai', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13423, 601002085, 'Desert Eagle Tiger-Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13424, 601002085, 'Desert Eagle Tiger-Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13425, 601002085, 'Desert Eagle Tiger-Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13442, 601002092, 'C. Python Newborn2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13428, 601002086, 'Desert Eagle Tiger-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13429, 601002087, 'C. Python PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13426, 601002086, 'Desert Eagle Tiger-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13523, 601002120, 'C. Python Nagi Deluxe', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13516, 601002118, 'C. Python PBWC 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13518, 601002119, 'C. Python Nagi Basic', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13521, 601002120, 'C. Python Nagi Deluxe', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13520, 601002119, 'C. Python Nagi Basic', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13522, 601002120, 'C. Python Nagi Deluxe', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13525, 601002121, 'Luger Brazuca2', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13529, 601002122, 'C. Python Ramadan', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13526, 601002121, 'Luger Brazuca2', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13524, 601002121, 'Luger Brazuca2', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13527, 601002122, 'C. Python Ramadan', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13532, 601002123, 'C. Python Vacance 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13528, 601002122, 'C. Python Ramadan', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13533, 601002124, 'R.B 454 SS8M+S PBTC 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13531, 601002123, 'C. Python Vacance 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13530, 601002123, 'C. Python Vacance 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13534, 601002124, 'R.B 454 SS8M+S PBTC 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13537, 601002125, 'C. Python PBNC 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13538, 601002125, 'C. Python PBNC 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13536, 601002125, 'C. Python PBNC 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13541, 601002126, 'Taurus 454SS Scope PBNC 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13543, 601002127, 'C. Python Ottoman', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13539, 601002126, 'Taurus 454SS Scope PBNC 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13540, 601002126, 'Taurus 454SS Scope PBNC 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13546, 601002128, 'Taurus 454SS Scope Brightness', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13542, 601002127, 'C. Python Ottoman', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13544, 601002127, 'C. Python Ottoman', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13549, 601002129, 'Taurus 454SS Scope Darkness', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13548, 601002129, 'Taurus 454SS Scope Darkness', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13547, 601002128, 'Taurus 454SS Scope Brightness', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13545, 601002128, 'Taurus 454SS Scope Brightness', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13550, 601002129, 'Taurus 454SS Scope Darkness', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13553, 601002130, 'TEC-9 PBST-ES', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13552, 601002130, 'TEC-9 PBST-ES', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13554, 601002131, 'C. Python PBST-ES', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13551, 601002130, 'TEC-9 PBST-ES', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13559, 601002132, 'C. Python PBIC 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13556, 601002131, 'C. Python PBST-ES', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13555, 601002131, 'C. Python PBST-ES', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13560, 601002133, 'C. Python Rebel', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13557, 601002132, 'C. Python PBIC 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13563, 601002134, 'C. Python Fire Dragon', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13558, 601002132, 'C. Python PBIC 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13565, 601002134, 'C. Python Fire Dragon', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13564, 601002134, 'C. Python Fire Dragon', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13562, 601002133, 'C. Python Rebel', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13568, 601002137, 'C. Python Freedom', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13570, 601002138, 'C. Python Puppy', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13566, 601002137, 'C. Python Freedom', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13567, 601002137, 'C. Python Freedom', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13571, 601002138, 'C. Python Puppy', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13572, 601002142, 'U22 Neos Acrylic', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13569, 601002138, 'C. Python Puppy', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13574, 601002142, 'U22 Neos Acrylic', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13576, 601002143, 'Taurus 454SS Scope GRSV', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13573, 601002142, 'U22 Neos Acrylic', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13575, 601002143, 'Taurus 454SS Scope GRSV', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13577, 601002143, 'Taurus 454SS Scope GRSV', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13580, 601002144, 'Taurus 454SS Scope Nusantara', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13583, 601002147, 'C. Python Holi', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13582, 601002147, 'C. Python Holi', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13579, 601002144, 'Taurus 454SS Scope Nusantara', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13581, 601002147, 'C. Python Holi', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13585, 601002148, 'C. Python PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13584, 601002148, 'C. Python PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13588, 601002153, 'Taurus 454SS Scope Milkyway', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13587, 601002153, 'Taurus 454SS Scope Milkyway', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13586, 601002148, 'C. Python PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13591, 601002154, 'C. Python Football', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13589, 601002153, 'Taurus 454SS Scope Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13592, 601002154, 'C. Python Football', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13511, 601002116, 'C. Python Naga', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13590, 601002154, 'C. Python Football', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13594, 601002155, 'C. Python Football Deluxe', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13514, 601002117, 'Desert Eagle Comic', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13509, 601002116, 'C. Python Naga', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13512, 601002117, 'Desert Eagle Comic', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13519, 601002119, 'C. Python Nagi Basic', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13515, 601002118, 'C. Python PBWC 2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13517, 601002118, 'C. Python PBWC 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13603, 601013008, 'C. Python Cutlass', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13600, 601013007, 'P99&HAK Reload', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13604, 601014001, 'Dual Handgun', 23000, 0, 100, 1, 1, 2, 0, 32, 0);
INSERT INTO "public"."shop" VALUES (13606, 601014004, 'Dual D-Eagle G.', 0, 600, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13607, 601014004, 'Dual D-Eagle G.', 0, 6000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13608, 601014004, 'Dual D-Eagle G.', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13609, 601014006, 'Dual D-Eagle D', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13611, 601014008, 'Dual Handgun', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13613, 601014011, 'Dual D-Eagle GRS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13614, 601014011, 'Dual D-Eagle GRS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13610, 601014007, 'Dual HK45', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13612, 601014011, 'Dual D-Eagle GRS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13617, 601014012, 'Dual HK45 Halloween', 0, 13, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13615, 601014012, 'Dual HK45 Halloween', 0, 14, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13618, 601014015, 'Dual D-Eagle BR Camo', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13616, 601014012, 'Dual HK45 Halloween', 0, 15, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13620, 601014015, 'Dual D-Eagle BR Camo', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13619, 601014015, 'Dual D-Eagle BR Camo', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13621, 601014016, 'Dual D-Eagle G E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13624, 601014017, 'Scorpion Vz.61', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13625, 601014018, 'Scorpion Vz.61 G.', 0, 600, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13623, 601014016, 'Dual D-Eagle G E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13622, 601014016, 'Dual D-Eagle G E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13627, 601014018, 'Scorpion Vz.61 G.', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13630, 601014019, 'Dual D-Eagle Lebaran2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13629, 601014019, 'Dual D-Eagle Lebaran2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13628, 601014019, 'Dual D-Eagle Lebaran2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13632, 601014020, 'Scorpion Vz.61 Woody', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13631, 601014020, 'Scorpion Vz.61 Woody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13638, 601014023, 'Scorpion Vz. 61 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13634, 601014022, 'Scorpion Vz. 61 Newborn 2017', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13633, 601014020, 'Scorpion Vz.61 Woody', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13637, 601014023, 'Scorpion Vz. 61 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13635, 601014022, 'Scorpion Vz. 61 Newborn 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13636, 601014022, 'Scorpion Vz. 61 Newborn 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13639, 601014023, 'Scorpion Vz. 61 Kemerdekaan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13642, 601014024, 'Scorpion Vz. 61 7th Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13641, 601014024, 'Scorpion Vz. 61 7th Anniversary', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13644, 601014025, 'Scorpion Vz. 61 Latin7', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13645, 601014025, 'Scorpion Vz. 61 Latin7', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13640, 601014024, 'Scorpion Vz. 61 7th Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13648, 601014028, 'Scorpion Vz. 61 Arcade', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13643, 601014025, 'Scorpion Vz. 61 Latin7', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13647, 601014028, 'Scorpion Vz. 61 Arcade', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13652, 601034002, 'Compound Bow Silver', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13651, 601034001, 'Compound Bow', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13650, 601034001, 'Compound Bow', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13649, 601034001, 'Compound Bow', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13655, 601034003, 'Compound Bow Gold [BUG]', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13654, 601034002, 'Compound Bow Silver', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13657, 601034003, 'Compound Bow Gold [BUG]', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13653, 601034002, 'Compound Bow Silver', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13660, 601034005, 'Compound Bow Black [BUG]', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13656, 601034003, 'Compound Bow Gold [BUG]', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13659, 601034005, 'Compound Bow Black [BUG]', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13658, 601034005, 'Compound Bow Black [BUG]', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13662, 702001002, 'M-9', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13663, 702001002, 'M-9', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13666, 702001009, 'M-7 Gold', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13661, 702001002, 'M-9', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13665, 702001007, 'Mini Axe', 20000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13667, 702001009, 'M-7 Gold', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13668, 702001009, 'M-7 Gold', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13671, 702001011, 'Amok Kukri D', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13669, 702001011, 'Amok Kukri D', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13674, 702001012, 'Mini Axe D', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13673, 702001012, 'Mini Axe D', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13670, 702001011, 'Amok Kukri D', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13677, 702001014, 'Combat Machete', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13672, 702001012, 'Mini Axe D', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13676, 702001014, 'Combat Machete', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13680, 702001017, 'Fang Blade', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13605, 601014002, 'Dual D-Eagle', 23000, 0, 100, 1, 1, 2, 0, 32, 0);
INSERT INTO "public"."shop" VALUES (13679, 702001017, 'Fang Blade', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13595, 601002155, 'C. Python Football Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13598, 601002156, 'C. Python Latin Championship2', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13596, 601002156, 'C. Python Latin Championship2', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13597, 601002156, 'C. Python Latin Championship2', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13601, 601013008, 'C. Python Cutlass', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13599, 601013001, 'P99&HAK', 22000, 0, 100, 1, 1, 2, 0, 30, 0);
INSERT INTO "public"."shop" VALUES (13664, 702001004, 'Amok Kukri', 22000, 0, 100, 1, 1, 2, 0, 28, 0);
INSERT INTO "public"."shop" VALUES (13688, 702001024, 'Candy Cane', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13691, 702001025, 'Field Shovel', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13690, 702001025, 'Field Shovel', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13694, 702001037, 'Ballistic Knife GRS', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13689, 702001025, 'Field Shovel', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13693, 702001037, 'Ballistic Knife GRS', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13695, 702001041, 'Arabian Sword', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13692, 702001037, 'Ballistic Knife GRS', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13696, 702001041, 'Arabian Sword', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13698, 702001042, 'M-9 PBNC', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13699, 702001042, 'M-9 PBNC', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13700, 702001042, 'M-9 PBNC', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13701, 702001043, 'Combat Machete Gold', 0, 700, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13703, 702001043, 'Combat Machete Gold', 0, 300, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13706, 702001044, 'Combat Machete PBSC2013', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13702, 702001043, 'Combat Machete Gold', 0, 3000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13705, 702001044, 'Combat Machete PBSC2013', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13704, 702001044, 'Combat Machete PBSC2013', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13709, 702001046, 'Amok Kukri Turkey', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13708, 702001046, 'Amok Kukri Turkey', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13707, 702001046, 'Amok Kukri Turkey', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13711, 702001047, 'Keris XMAS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13710, 702001047, 'Keris XMAS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13712, 702001047, 'Keris XMAS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13715, 702001049, 'Arabian Sword E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13714, 702001049, 'Arabian Sword E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13717, 702001050, 'Fang Blade PBNC5', 0, 2600, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13718, 702001050, 'Fang Blade PBNC5', 0, 700, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13713, 702001049, 'Arabian Sword E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13720, 702001051, 'Fang Blade GSL2014', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13723, 702001052, 'Fang Blade Brazuca', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13716, 702001050, 'Fang Blade PBNC5', 0, 1300, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13724, 702001052, 'Fang Blade Brazuca', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13721, 702001051, 'Fang Blade GSL2014', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13722, 702001052, 'Fang Blade Brazuca', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13726, 702001057, 'Fang Blade Inferno', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13727, 702001057, 'Fang Blade Inferno', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13725, 702001057, 'Fang Blade Inferno', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13729, 702001058, 'Chinese Cleaver', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13730, 702001058, 'Chinese Cleaver', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13733, 702001059, 'Combat Machete White', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13731, 702001059, 'Combat Machete White', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13728, 702001058, 'Chinese Cleaver', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13735, 702001064, 'Badminton Racket', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13734, 702001064, 'Badminton Racket', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13732, 702001059, 'Combat Machete White', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13739, 702001065, 'Keris G E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13738, 702001065, 'Keris G E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13736, 702001064, 'Badminton Racket', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13737, 702001065, 'Keris G E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13741, 702001066, 'Death Scythe', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13742, 702001066, 'Death Scythe', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13740, 702001066, 'Death Scythe', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13743, 702001067, 'Fang Blade LATIN4', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13748, 702001069, 'Ice Fork', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13747, 702001069, 'Ice Fork', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13746, 702001069, 'Ice Fork', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13745, 702001067, 'Fang Blade LATIN4', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13751, 702001070, 'Combat Machete Carnival', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13749, 702001070, 'Combat Machete Carnival', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13750, 702001070, 'Combat Machete Carnival', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13752, 702001071, 'Goat Hammer', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13755, 702001073, 'Chinese Cleaver CNY 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13753, 702001071, 'Goat Hammer', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13754, 702001071, 'Goat Hammer', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13756, 702001073, 'Chinese Cleaver CNY 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13757, 702001073, 'Chinese Cleaver CNY 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13759, 702001077, 'Fang Blade Newborn 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13758, 702001077, 'Fang Blade Newborn 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13762, 702001078, 'Fang Blade PBNC6', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13760, 702001077, 'Fang Blade Newborn 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13763, 702001078, 'Fang Blade PBNC6', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13765, 702001079, 'Fang Blade Ongame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13761, 702001078, 'Fang Blade PBNC6', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13767, 702001080, 'Field Shovel Royal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13681, 702001018, 'Ballistic Knife', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13764, 702001079, 'Fang Blade Ongame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13683, 702001018, 'Ballistic Knife', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13682, 702001018, 'Ballistic Knife', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13684, 702001021, 'Keris', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13685, 702001023, 'Keris S.', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13687, 702001023, 'Keris S.', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13686, 702001023, 'Keris S.', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13780, 702001093, 'Combat Machete Brazil', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13775, 702001083, 'Nunchaku', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13783, 702001094, 'Fang Blade PBST2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13778, 702001084, 'Combat Machete Rose', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13777, 702001084, 'Combat Machete Rose', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13787, 702001095, 'Combat Machete 4Game', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13781, 702001093, 'Combat Machete Brazil', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13779, 702001093, 'Combat Machete Brazil', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13782, 702001094, 'Fang Blade PBST2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13789, 702001096, 'Combat Machete 4Game SE', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13784, 702001094, 'Fang Blade PBST2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13788, 702001096, 'Combat Machete 4Game SE', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13786, 702001095, 'Combat Machete 4Game', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13790, 702001096, 'Combat Machete 4Game SE', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13791, 702001097, 'Hair Dryer Indonesia', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13792, 702001097, 'Hair Dryer Indonesia', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13796, 702001098, 'Hair Dryer', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13793, 702001097, 'Hair Dryer Indonesia', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13795, 702001098, 'Hair Dryer', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13794, 702001098, 'Hair Dryer', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13802, 702001103, 'Bamboo Spear', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13800, 702001103, 'Bamboo Spear', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13805, 702001104, 'Keris PBIC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13804, 702001104, 'Keris PBIC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13801, 702001103, 'Bamboo Spear', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13803, 702001104, 'Keris PBIC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13807, 702001106, 'Combat Machete Newborn2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13808, 702001106, 'Combat Machete VeraCruz', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13809, 702001108, 'Fang Blade Cobra', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13810, 702001108, 'Fang Blade Cobra', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13811, 702001108, 'Fang Blade Cobra', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13813, 702001110, 'Ballistic Knife Spy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13814, 702001110, 'Ballistic Knife Spy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13812, 702001110, 'Ballistic Knife Spy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13817, 702001113, 'Fang Blade Latin5', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13816, 702001113, 'Fang Blade Latin5', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13815, 702001113, 'Fang Blade Latin5', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13820, 702001114, 'Ballistic Knife Spy-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13818, 702001114, 'Ballistic Knife Spy-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13819, 702001114, 'Ballistic Knife Spy-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13821, 702001119, 'Combat Machete DFN', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13823, 702001119, 'Combat Machete DFN', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13822, 702001119, 'Combat Machete DFN', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13826, 702001120, 'Monkey Hammer', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13824, 702001120, 'Monkey Hammer', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13825, 702001120, 'Monkey Hammer', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13829, 702001122, 'Butterfly Knife', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13827, 702001122, 'Butterfly Knife', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13828, 702001122, 'Butterfly Knife', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13832, 702001123, 'Fang Blade Arena Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13830, 702001123, 'Fang Blade Arena Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13831, 702001123, 'Fang Blade Arena Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13834, 702001124, 'Fang Blade Arena Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13833, 702001124, 'Fang Blade Arena Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13836, 702001127, 'Fang Blade Sakura', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13838, 702001127, 'Fang Blade Sakura', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13837, 702001127, 'Fang Blade Sakura', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13840, 702001129, 'Keris Beast', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13841, 702001129, 'Keris Beast', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13839, 702001129, 'Keris Beast', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13844, 702001130, 'Fang Blade PBGC', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13843, 702001130, 'Fang Blade PBGC', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13842, 702001130, 'Fang Blade PBGC', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13846, 702001131, 'Fang Blade GSL2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13845, 702001131, 'Fang Blade GSL2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13847, 702001131, 'Fang Blade GSL2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13848, 702001132, 'Fang Blade Tiger-Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13849, 702001132, 'Fang Blade Tiger-Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13850, 702001132, 'Fang Blade Tiger-Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13853, 702001133, 'Fang Blade Tiger-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13852, 702001133, 'Fang Blade Tiger-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13851, 702001133, 'Fang Blade Tiger-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13768, 702001080, 'Field Shovel Royal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13771, 702001082, 'Arabian Sword Midnight', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13772, 702001082, 'Arabian Sword Midnight', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13770, 702001082, 'Arabian Sword Midnight', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13774, 702001083, 'Nunchaku', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13773, 702001083, 'Nunchaku', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13776, 702001084, 'Combat Machete Rose', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13860, 702001138, 'Combat Machete PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13865, 702001139, 'Amok Kukri Mummy', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13863, 702001139, 'Amok Kukri Mummy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13866, 702001140, 'Mini Axe Poison', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13868, 702001140, 'Mini Axe Poison', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13871, 702001143, 'Amok Kukri Poison', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13867, 702001140, 'Mini Axe Poison', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13869, 702001143, 'Amok Kukri Poison', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13870, 702001143, 'Amok Kukri Poison', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13872, 702001144, 'Keris ID 1stAnni', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13873, 702001144, 'Keris ID 1stAnni', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13874, 702001144, 'Keris ID 1stAnni', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13875, 702001145, 'Combat Machete Strike', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13877, 702001145, 'Combat Machete Strike', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13876, 702001145, 'Combat Machete Strike', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13880, 702001146, 'Death Scythe Demonic', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13881, 702001147, 'Karambit', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13882, 702001147, 'Karambit', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13878, 702001146, 'Death Scythe Demonic', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13883, 702001147, 'Karambit', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13886, 702001148, 'Ladle Lebaran2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13884, 702001148, 'Ladle Lebaran2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13885, 702001148, 'Ladle Lebaran2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13887, 702001149, 'Fang Blade Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13889, 702001149, 'Fang Blade Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13891, 702001150, 'Combat Machete Newborn2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13888, 702001149, 'Fang Blade Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13890, 702001150, 'Combat Machete Newborn2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13894, 702001151, 'Ballistic Knife Russian Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13893, 702001151, 'Ballistic Knife Russian Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13892, 702001150, 'Combat Machete White', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13897, 702001153, 'Ballistic Knife Russian Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13896, 702001153, 'Ballistic Knife Russian Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13895, 702001151, 'Ballistic Knife Russian Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13899, 702001155, 'Combat Machete PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13898, 702001153, 'Ballistic Knife Russian Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13900, 702001155, 'Combat Machete PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13904, 702001159, 'Fang Blade Dark Steel', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13903, 702001159, 'Fang Blade Dark Steel', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13901, 702001155, 'Combat Machete PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13905, 702001160, 'Arabian Sword PBNC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13902, 702001159, 'Fang Blade Dark Steel', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13906, 702001160, 'Arabian Sword PBNC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13908, 702001161, 'Fang Blade Supreme', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13910, 702001161, 'Fang Blade Supreme', 0, 4899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13909, 702001161, 'Fang Blade Supreme', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13912, 702001162, 'Halloween Hammer', 0, 18, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13911, 702001162, 'Halloween Hammer', 0, 17, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13915, 702001164, 'Fang Blade Mystic', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13913, 702001162, 'Halloween Hammer', 0, 16, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13916, 702001164, 'Fang Blade Mystic', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13919, 702001165, 'Amok Kukri Pahlawan', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13917, 702001165, 'Amok Kukri Pahlawan', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13914, 702001164, 'Fang Blade Mystic', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13918, 702001165, 'Amok Kukri Pahlawan', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13921, 702001166, 'Amok Kukri Latin6', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13920, 702001166, 'Amok Kukri Latin6', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13923, 702001167, 'Fang Blade Ice', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13924, 702001167, 'Fang Blade Ice', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13922, 702001166, 'Amok Kukri Latin6', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13925, 702001167, 'Fang Blade Ice', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13928, 702001168, 'Chicken Hammer', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13927, 702001168, 'Chicken Hammer', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13926, 702001168, 'Chicken Hammer', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13929, 702001170, 'Keris Lightning', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13933, 702001171, 'Fang Blade Pirates', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13930, 702001170, 'Keris Lightning', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13931, 702001170, 'Keris Lightning', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13936, 702001173, 'Ice Fork Fire', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13938, 702001174, 'Keris PBGC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13932, 702001171, 'Fang Blade Pirates', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13856, 702001136, 'Fang Blade Dragon', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13939, 702001174, 'Keris PBGC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13857, 702001137, 'Amok Kukri PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13854, 702001136, 'Fang Blade Dragon', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13859, 702001137, 'Amok Kukri PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13862, 702001138, 'Combat Machete PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13861, 702001138, 'Combat Machete PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13864, 702001139, 'Amok Kukri Mummy', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13949, 702001180, 'Arabian Sword Beach', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13952, 702001181, 'Amok Kukri Komik', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13950, 702001181, 'Amok Kukri Komik', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13951, 702001181, 'Amok Kukri Komik', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13955, 702001182, 'Fang Blade Green', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13958, 702001183, 'Butterfly Knife PBWC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13954, 702001182, 'Fang Blade Green', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13956, 702001183, 'Butterfly Knife PBWC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13957, 702001183, 'Butterfly Knife PBWC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13960, 702001184, 'Karambit CNPB-T5', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13961, 702001184, 'Karambit CNPB-T5', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13962, 702001185, 'Combat Machete Lebaran 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13964, 702001185, 'Combat Machete Lebaran 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13966, 702001186, 'Combat Machete Nagi-Basic', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13963, 702001185, 'Combat Machete Lebaran 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13965, 702001186, 'Combat Machete Nagi-Basic', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13967, 702001186, 'Combat Machete Nagi-Basic', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13968, 702001187, 'Combat Machete Nagi-Deluxe', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13970, 702001187, 'Combat Machete Nagi-Deluxe', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13973, 702001188, 'Karambit ID 2stAnni', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13972, 702001188, 'Karambit ID 2stAnni', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13971, 702001188, 'Karambit ID 2stAnni', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13974, 702001189, 'Fang Blade ID 2stAnni', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13975, 702001189, 'Fang Blade ID 2stAnni', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13976, 702001189, 'Fang Blade ID 2stAnni', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13978, 702001190, 'Ballistic Knife Brazuca2', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13979, 702001190, 'Ballistic Knife Brazuca2', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13977, 702001190, 'Ballistic Knife Brazuca2', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13981, 702001193, 'Karambit Ramadan', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13980, 702001193, 'Karambit Ramadan', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13982, 702001193, 'Karambit Ramadan', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13984, 702001194, 'Fang Blade Ramadan', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13985, 702001194, 'Fang Blade Ramadan', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13986, 702001195, 'Combat Machete Bolt', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13988, 702001195, 'Combat Machete Bolt', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13987, 702001195, 'Combat Machete Bolt', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13991, 702001196, 'Arabian Sword Phantom', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13989, 702001196, 'Arabian Sword Phantom', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13990, 702001196, 'Arabian Sword Phantom', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13993, 702001197, 'Arabian Sword PBTC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13992, 702001197, 'Arabian Sword PBTC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13995, 702001198, 'Keris PBNC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13994, 702001197, 'Arabian Sword PBTC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13996, 702001198, 'Keris PBNC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13997, 702001198, 'Keris PBNC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14000, 702001200, 'Amok Kukri Newborn 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13998, 702001200, 'Amok Kukri Newborn 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14003, 702001201, 'Fang Blade Ottoman', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14001, 702001201, 'Fang Blade Ottoman', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14002, 702001201, 'Fang Blade Ottoman', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14007, 702001202, 'Karambit 7th Anniversary', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14008, 702001202, 'Karambit 7th Anniversary', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14009, 702001202, 'Keris Kemerde', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14005, 702001202, 'Keris Kemerde', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14006, 702001202, 'Keris Kemerde', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14010, 702001203, 'Karambit 7th Anniversary', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14015, 702001204, 'Butterflyknife 7th Anniversary', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14012, 702001203, 'Karambit 7th Anniversary', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14011, 702001203, 'Karambit 7th Anniversary', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14013, 702001204, 'Butterflyknife 7th Anniversary', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14014, 702001204, 'Butterflyknife 7th Anniversary', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14016, 702001208, 'Amok Kukri PBIC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14017, 702001208, 'Amok Kukri PBIC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14018, 702001208, 'Amok Kukri PBIC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14021, 702001209, 'Combat Machete Rebel', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14019, 702001209, 'Combat Machete Rebel', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14020, 702001209, 'Combat Machete Rebel', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14023, 702001210, 'Syringe Halloween', 0, 19, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14022, 702001210, 'Syringe Halloween', 0, 20, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13942, 702001176, 'Amok Kukri Talos', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13943, 702001176, 'Amok Kukri Talos', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13941, 702001176, 'Amok Kukri Talos', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13945, 702001178, 'Fang Blade Renegade', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13948, 702001180, 'Arabian Sword Beach', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13947, 702001180, 'Arabian Sword Beach', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13953, 702001182, 'Fang Blade Green', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13969, 702001187, 'Combat Machete Nagi-Deluxe', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13999, 702001200, 'Amok Kukri Newborn 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14032, 702001213, 'Fang Blade Latin7', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14033, 702001213, 'Fang Blade Latin7', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14035, 702001214, 'Karambit Desert Hound', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14036, 702001214, 'Karambit Desert Hound', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14040, 702001218, 'Puppy Hammer', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14037, 702001216, 'Rudolph Hammer', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14039, 702001216, 'Rudolph Hammer', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14043, 702001220, 'Karambit Nevasca', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14038, 702001216, 'Rudolph Hammer', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14044, 702001220, 'Karambit Nevasca', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14046, 702001222, 'Chocolate Stick', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14041, 702001218, 'Puppy Hammer', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14045, 702001220, 'Karambit Nevasca', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14051, 702001223, 'Karambit GRSV', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14047, 702001222, 'Chocolate Stick', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14048, 702001222, 'Chocolate Stick', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14052, 702001225, 'Diploma', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14050, 702001223, 'Karambit GRSV', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14049, 702001223, 'Karambit GRSV', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14053, 702001225, 'Diploma', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14057, 702001226, 'Fang Blade Latin Championship', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14055, 702001226, 'Fang Blade Latin Championship', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14054, 702001225, 'Diploma', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14060, 702001229, 'Combat Machete Holi', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14059, 702001229, 'Combat Machete Holi', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14056, 702001226, 'Fang Blade Latin Championship', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14066, 702001234, 'Amok Kukri PBWC 2018', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14063, 702001232, 'KARAMBIT M1LGR4U', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14058, 702001229, 'Combat Machete Holi', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14061, 702001232, 'KARAMBIT M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14062, 702001232, 'KARAMBIT M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14064, 702001234, 'Amok Kukri PBWC 2018', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14067, 702001235, 'Butterfly Knife Vittoria', 0, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14068, 702001237, 'Butterfly Knife White Rabbit', 0, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14070, 702001243, 'Combat Machete Arcade', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14069, 702001243, 'Combat Machete Arcade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14071, 702001243, 'Combat Machete Arcade', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14074, 702001244, 'Fang Blade Surfing', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14073, 702001244, 'Fang Blade Surfing', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14078, 702001247, 'Karambit Football', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14075, 702001246, 'Karambit Brazuca3', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14072, 702001244, 'Fang Blade Surfing', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14076, 702001246, 'Karambit Brazuca3', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14077, 702001246, 'Karambit Brazuca3', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14083, 702001248, 'Karambit Football Deluxe', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14080, 702001247, 'Karambit Football', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14082, 702001248, 'Karambit Football Deluxe', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14079, 702001247, 'Karambit Football', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14081, 702001248, 'Karambit Football Deluxe', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14085, 702001249, 'Karambit Renegade2', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14089, 702015002, 'Dual Knife D', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14086, 702001249, 'Karambit Renegade2', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14084, 702001249, 'Karambit Renegade2', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14093, 702015003, 'Dual Bone Knife', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14091, 702015003, 'Dual BoneKnife', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14088, 702015002, 'Dual Knife D', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14096, 702015004, 'Dual Knife EV', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14092, 702015003, 'Dual Bone Knife', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14094, 702015004, 'Dual Knife EV', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14095, 702015004, 'Dual Knife EV', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14097, 702015005, 'Dual Bone Knife GRS EV', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14099, 702015005, 'Dual Bone Knife GRS EV', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14098, 702015005, 'Dual Bone Knife GRS EV', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14102, 702015006, 'Dual Knife PBNC', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14103, 702015007, 'Dual Bone Knife GRS2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14101, 702015006, 'Dual Knife PBNC', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14100, 702015006, 'Dual Knife PBNC', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14108, 702015008, 'Kunai', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14105, 702015007, 'Dual Bone Knife GRS2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14111, 702015009, 'Dual Bone Knife PBNC2015', 0, 2899, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14104, 702015007, 'Dual Bone Knife GRS2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14027, 702001211, 'AITOROSONEGRO', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14106, 702015008, 'Kunai', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14107, 702015008, 'Kunai', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14026, 702001211, 'AITOROSONEGRO', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14025, 702001211, 'AITOROSONEGRO', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14087, 702015001, 'Dual Knife ', 22000, 0, 100, 1, 1, 2, 0, 26, 0);
INSERT INTO "public"."shop" VALUES (14030, 702001212, 'Fang Blade Fire Dragon', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14031, 702001213, 'Fang Blade Latin7', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14034, 702001214, 'Karambit Desert Hound', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14028, 702001212, 'Fang Blade Fire Dragon', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14122, 702015013, 'Dual Bone Knife Skeleton', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14115, 702015011, 'Dual Knife Vera Cruz 2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14120, 702015012, 'Kunai Serpent', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14124, 702015014, 'Dual Bone Knife E-Sports2', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14119, 702015012, 'Kunai Serpent', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14121, 702015013, 'Dual Bone Knife Skeleton', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14129, 702015015, 'Dual Sword TH', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14123, 702015013, 'Dual Bone Knife Skeleton', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14125, 702015014, 'Dual Bone Knife E-Sports2', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14132, 702015016, 'Bone Knife Beyond', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14126, 702015014, 'Dual Bone Knife E-Sports2', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14127, 702015015, 'Dual Sword TH', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14131, 702015016, 'Bone Knife Beyond', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14128, 702015015, 'Dual Sword TH', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14130, 702015016, 'Bone Knife Beyond', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14133, 702015017, 'Dual Bone Knife PBGC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14138, 702015018, 'Samurai Sword', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14137, 702015018, 'Samurai Sword', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14135, 702015017, 'Dual Bone Knife PBGC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14136, 702015018, 'Samurai Sword', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14141, 702015019, 'Dual Bone Knife PBNC 2017', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14139, 702015019, 'Dual Bone Knife PBNC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14143, 702015021, 'Bone Knife Military', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14140, 702015019, 'Dual Bone Knife PBNC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14145, 702015022, 'Bone Knife Desert Hound', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14144, 702015021, 'Bone Knife Military', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14142, 702015021, 'Bone Knife Military', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14148, 702015023, 'Bone Knife Zepetto', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14147, 702015022, 'Bone Knife Desert Hound', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14146, 702015022, 'Bone Knife Desert Hound', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14151, 702015024, 'Dual Bone Knife Nusantara', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14150, 702015023, 'Bone Knife Zepetto', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14149, 702015023, 'Bone Knife Zepetto', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14153, 702015024, 'Dual Bone Knife Nusantara', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14152, 702015024, 'Dual Bone Knife Nusantara', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14156, 702015025, 'Dual Knife M9 Digital', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14158, 702015026, 'BONEKNIFE M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14160, 702015028, 'Bone Knife Lebaran 2018', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14155, 702015025, 'Dual Knife M9 Digital', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14154, 702015025, 'Dual Knife M9 Digital', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14161, 702015028, 'Bone Knife Lebaran 2018', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14162, 702015028, 'Bone Knife Lebaran 2018', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14159, 702015026, 'BONEKNIFE M1LGR4U', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14165, 702015030, 'Dual Bone Knife Milkyway', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14164, 702015030, 'Dual Bone Knife Milkyway', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14163, 702015030, 'Dual Bone Knife Milkyway', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14166, 702023002, 'Black Knuckles ', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14168, 702023003, 'Brass Knuckles ', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14169, 702023003, 'Brass Knuckles ', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14167, 702023003, 'Brass Knuckles ', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14171, 702023004, 'Silver Knuckles ', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14172, 702023004, 'Silver Knuckles ', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14170, 702023004, 'Silver Knuckles ', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14173, 702023005, 'Pumpkin knuckles', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14174, 702023005, 'Pumpkin knuckles', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14177, 702023006, 'Spiked Knuckle ', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14175, 702023005, 'Pumpkin knuckles', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14176, 702023006, 'Spiked Knuckle ', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14178, 702023006, 'Spiked Knuckle ', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14181, 702023007, 'Ballock Knuckle', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14180, 702023007, 'Ballock Knuckle', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14179, 702023007, 'Ballock Knuckle', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14182, 702023009, 'Garena Knuckles', 0, 700, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14184, 702023009, 'Garena Knuckles', 0, 300, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14186, 702023010, 'Zombie Knuckle', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14185, 702023010, 'Zombie Knuckle', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14187, 702023010, 'Zombie Knuckle', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14189, 702023011, 'Knuckle Karambit', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14188, 702023011, 'Knuckle Karambit', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14192, 803007006, 'C-5 D', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14191, 803007004, 'C-5', 20000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14190, 702023011, 'Knuckle Karambit', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14193, 803007006, 'C-5 D', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14194, 803007006, 'C-5 D', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14110, 702015009, 'Dual Bone Knife PBNC2015', 0, 899, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14112, 702015010, 'Dual Bone Knife Camo Soldier', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14113, 702015010, 'Dual Bone Knife Camo Soldier', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14114, 702015010, 'Dual Bone Knife Camo Soldier', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14118, 702015012, 'Kunai Serpent', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14116, 702015011, 'Dual Knife Vera Cruz 2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14117, 702015011, 'Dual Knife Vera Cruz 2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14201, 803007016, 'C-5 EV', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14203, 803007018, 'K-413 G', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14207, 803007019, 'Ketupat Grenade', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14205, 803007019, 'Ketupat Grenade', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14208, 803007020, 'Candy Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14210, 803007020, 'Candy Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14209, 803007020, 'Candy Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14211, 803007023, 'Ramadan Fanoos', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14214, 803007024, 'Ma''amoul Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14213, 803007023, 'Ramadan Fanoos', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14215, 803007024, 'Ma''amoul Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14212, 803007023, 'Ramadan Fanoos', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14216, 803007024, 'Ma''amoul Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14219, 803007026, 'Decoy Bomb', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14222, 803007027, 'M-14 Mine', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14220, 803007027, 'M-14 Mine', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14218, 803007026, 'Decoy Bomb', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14217, 803007026, 'Decoy Bomb', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14223, 803007028, 'K-479', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14224, 803007028, 'K-479', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14221, 803007027, 'M-14 Mine', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14225, 803007028, 'K-479', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14227, 803007030, 'Easter Day Egg Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14229, 803007033, 'Soccer Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14228, 803007030, 'Easter Day Egg Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14231, 803007033, 'Soccer Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14230, 803007033, 'Soccer Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14232, 803007034, 'K-413 Dual', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14234, 803007034, 'K-413 Dual', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14235, 803007035, 'M-14 Mine D', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14233, 803007034, 'K-413 Dual', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14236, 803007035, 'M-14 Mine D', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14237, 803007035, 'M-14 Mine D', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14239, 803007036, 'K-413 T.P Double Bomb', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14241, 803007037, 'K-413 PC Cafe', 22000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14242, 803007038, 'ShuttleCock Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14240, 803007036, 'K-413 T.P Double Bomb', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14238, 803007036, 'K-413 T.P Double Bomb', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14244, 803007038, 'ShuttleCock Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14245, 803007039, 'SepakTakraw Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14243, 803007038, 'ShuttleCock Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14246, 803007039, 'SepakTakraw Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14248, 803007040, 'M18A1 Claymore', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14247, 803007039, 'SepakTakraw Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14250, 803007040, 'M18A1 Claymore', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14253, 803007042, 'Sheep Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14256, 803007044, 'C-5 ANC 2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14249, 803007040, 'M18A1 Claymore', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14251, 803007042, 'Sheep Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14254, 803007044, 'C-5 ANC 2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14255, 803007044, 'C-5 ANC 2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14259, 803007045, 'K-413 Dual Chocolate', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14257, 803007045, 'K-413 Dual Chocolate', 0, 900, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14261, 803007047, 'K-413 Redemption', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14263, 803007049, 'K-413 4Game', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14258, 803007045, 'K-413 Dual Chocolate', 0, 3500, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14260, 803007047, 'K-413 Redemption', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14262, 803007047, 'K-413 Redemption', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14264, 803007049, 'K-413 4Game', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14199, 803007016, 'C-5 EV', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14267, 803007050, 'K-413 4Game SE', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14265, 803007049, 'K-413 4Game', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14269, 803007052, 'Snowman Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14266, 803007050, 'K-413 4Game SE', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14274, 803007053, 'Water Bomb', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14270, 803007052, 'Snowman Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14271, 803007052, 'Snowman Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14276, 803007054, 'K-413 Tiger-Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14273, 803007053, 'Water Bomb', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14275, 803007054, 'K-413 Tiger-Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14278, 803007055, 'K-413 Tiger-Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14280, 803007055, 'K-413 Tiger-Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14282, 803007056, 'C-5 PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14279, 803007055, 'K-413 Tiger-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14283, 803007056, 'C-5 PBWC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14281, 803007056, 'C-5 PBWC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14286, 803007057, 'Mummy Grenade', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14197, 803007009, 'Chocolate Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14196, 803007009, 'Chocolate Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14198, 803007009, 'Chocolate Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14200, 803007016, 'C-5 EV', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14268, 803007050, 'K-413 4Game SE', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14204, 803007018, 'K-413 G', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14202, 803007018, 'K-413 G', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14292, 803007062, 'K-400 Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14291, 803007062, 'K-400 Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14300, 803007065, 'K-413 Russian Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14294, 803007063, 'K-413 Puzzle', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14297, 803007064, 'K-413 Russian Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14299, 803007065, 'K-413 Russian Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14298, 803007064, 'K-413 Russian Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14296, 803007064, 'K-413 Russian Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14304, 803007066, 'Soccer Ball Bomb', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14302, 803007066, 'Soccer Ball Bomb', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14305, 803007067, 'C-5 PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14307, 803007067, 'C-5 PBIC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14306, 803007067, 'C-5 PBIC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14308, 803007068, 'C-5 PBNC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14310, 803007068, 'C-5 PBNC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14312, 803007070, 'K-413 Ice', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14309, 803007068, 'C-5 PBNC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14313, 803007070, 'K-413 Ice', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14311, 803007070, 'K-413 Ice', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14316, 803007071, 'C-5 Lightning', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14314, 803007071, 'C-5 Lightning', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14315, 803007071, 'C-5 Lightning', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14319, 803007072, 'K-413 Fire', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14317, 803007072, 'K-413 Fire', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14318, 803007072, 'K-413 Fire', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14321, 803007073, 'Beer Barrel Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14322, 803007073, 'Beer Barrel Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14320, 803007073, 'Beer Barrel Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14324, 803007074, 'Beer Glass Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14323, 803007074, 'Beer Glass Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14325, 803007074, 'Beer Glass Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14328, 803007075, 'Volley Ball Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14327, 803007075, 'Volley Ball Grenade', 0, 2099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14330, 803007076, 'C-5 PBIC 2017', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14331, 803007076, 'C-5 PBIC 2017', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14329, 803007076, 'C-5 PBIC 2017', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14332, 803007077, 'K 400 M1LGR4U', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14333, 803007077, 'K 400 M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14334, 803007077, 'K 400 M1LGR4U', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14336, 803007079, 'C5 PBWC 2018', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14335, 803007079, 'C5 PBWC 2018', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14337, 803007079, 'C5 PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14338, 803007083, 'K-413 FootBall', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14340, 803007083, 'K-413 FootBall', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14339, 803007083, 'K-413 FootBall', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14341, 803007084, 'K-413 FootBall Deluxe', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14342, 803007084, 'K-413 FootBall Deluxe', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14343, 803007084, 'K-413 FootBall Deluxe', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14344, 904007003, 'FlashBang', 8000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14345, 904007005, 'WP Smoke', 20000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14348, 904007010, 'Smoke Plus', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14346, 904007010, 'Smoke Plus', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14347, 904007010, 'Smoke Plus', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14349, 904007011, 'Medical Kit', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14350, 904007011, 'Medical Kit', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14351, 904007011, 'Medical Kit', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14352, 904007012, 'WP Smoke Plus', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14354, 904007012, 'WP Smoke Plus', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14355, 904007013, 'FlashBang Plus', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14356, 904007013, 'FlashBang Plus', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14357, 904007013, 'FlashBang Plus', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14360, 904007014, 'Halloween Medical Kit', 0, 24, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14359, 904007014, 'Halloween Medical Kit', 0, 23, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14358, 904007014, 'Halloween Medical Kit', 0, 22, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14363, 904007015, 'Chocolate Medical Kit', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14362, 904007015, 'Chocolate Medical Kit', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14361, 904007015, 'Chocolate Medical Kit', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14365, 904007021, 'Medical Kit Lotus', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14366, 904007021, 'Medical Kit Lotus', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14364, 904007021, 'Medical Kit Lotus', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14368, 904007025, 'Medical Kit Opor Ayam', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14367, 904007025, 'Medical Kit Opor Ayam', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14369, 904007025, 'Medical Kit Opor Ayam', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14370, 904007029, 'Medical Kit PBNC5', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14371, 904007029, 'Medical Kit PBNC5', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14372, 904007029, 'Medical Kit PBNC5', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14287, 803007058, 'K-413 Blue Diamond', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14289, 803007058, 'K-413 Blue Diamond', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14288, 803007058, 'K-413 Blue Diamond', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14290, 803007062, 'K-400 Alien', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14293, 803007063, 'K-413 Puzzle', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14295, 803007063, 'K-413 Puzzle', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14380, 904007043, 'Medical Kit Kurma', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14383, 904007046, 'Medical Kit PBNC6', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14384, 904007046, 'Medical Kit PBNC6', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14382, 904007046, 'Medical Kit PBNC6', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14386, 904007048, 'Medical Kit [Noname] [BUG]', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14387, 904007048, 'Medical Kit [Noname] [BUG]', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14385, 904007048, 'Medical Kit [Noname] [BUG]', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14388, 904007051, 'Medical Kit PBNC2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14389, 904007051, 'Medical Kit PBNC2015', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14391, 904007059, 'Smoke Pink', 18000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14390, 904007051, 'Medical Kit PBNC2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14392, 904007060, 'Smoke Blue', 18000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14395, 904007069, 'CS Gas', 0, 1099, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14393, 904007061, 'Smoke Yellow', 18000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14394, 904007069, 'CS Gas', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14377, 904007032, 'Medical Kit Lotus2014', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14398, 1001001007, 'D-Fox (+20% EXP)', 0, 2500, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14400, 1001001007, 'D-Fox (+20% EXP)', 0, 980, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14403, 1001001010, 'Viper Red Boost (+30% Points)', 0, 980, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14401, 1001001010, 'Viper Red Boost (+30% Points)', 0, 2500, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14402, 1001001010, 'Viper Red Boost (+30% Points)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14404, 1001001011, 'Reinforced D-Fox', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14381, 904007043, 'Medical Kit Kurma', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14409, 1001001017, 'Reinforced Combo Viper Red (+30% Points)', 0, 2500, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14406, 1001001015, 'Reinforced Combo D-Fox (+20% EXP)', 0, 2500, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14408, 1001001015, 'Reinforced Combo D-Fox (+20% EXP)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14410, 1001001017, 'Reinforced Combo Viper Red (+30% Points)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14415, 1001001022, 'Reinforced Tarantula', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14413, 1001001021, 'Reinforced Red Bulls', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14414, 1001001021, 'Reinforced Red Bulls', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14412, 1001001021, 'Reinforced Red Bulls', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14419, 1001001025, 'D-Fox', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14417, 1001001022, 'Reinforced Tarantula', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14416, 1001001022, 'Reinforced Tarantula', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14420, 1001001025, 'D-Fox', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14428, 1001001036, 'Reinforced Rica', 0, 2250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14421, 1001001028, 'Viper Red', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14423, 1001001028, 'Viper Red', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14418, 1001001025, 'D-Fox', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14425, 1001001034, 'Rica', 1, 1, 50, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14427, 1001001036, 'Reinforced Rica', 0, 990, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14424, 1001001034, 'Rica', 25000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14440, 1001001055, 'Viper Shadow [R]', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14431, 1001001049, 'Tarantula -  RED (20% Exp)', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14426, 1001001036, 'Reinforced Rica', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14429, 1001001049, 'Tarantula -  RED (20% Exp)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14433, 1001001050, 'Red Bulls Point+20%', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14430, 1001001049, 'Tarantula -  RED (20% Exp)', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14435, 1001001054, 'World Tarantula [R]', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14432, 1001001050, 'Red Bulls Point+20%', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14434, 1001001050, 'Red Bulls Point+20%', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14437, 1001001054, 'World Tarantula [R]', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14436, 1001001054, 'World Tarantula [R]', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14452, 1001001096, 'Viper Red Bouncer', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14439, 1001001055, 'Viper Shadow [R]', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14438, 1001001055, 'Viper Shadow [R]', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14443, 1001001068, 'Viper Kopassus [R]', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14445, 1001001069, 'Bella FBI [R]', 0, 990, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14442, 1001001068, 'Viper Kopassus [R]', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14444, 1001001069, 'Bella FBI [R]', 0, 2250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14447, 1001001084, 'Viper Red Pirate [BUG]', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14446, 1001001069, 'Bella FBI [R]', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14448, 1001001084, 'Viper Red Pirate [BUG]', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14451, 1001001095, 'Viper Red Demolition', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14450, 1001001087, 'Gangstar ViperRed', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14449, 1001001084, 'Viper Red Pirate [BUG]', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14453, 1001001096, 'Viper Red Bouncer', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14454, 1001001096, 'Viper Red Bouncer', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14456, 1001001109, 'Bella FireFighter', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14457, 1001001109, 'Bella FireFighter', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14455, 1001001109, 'Bella FireFighter', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14397, 1001001003, 'Tarantula', 22000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14396, 904007069, 'CS Gas', 0, 890, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14373, 904007031, 'Easter Day Medical Kit', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14375, 904007031, 'Easter Day Medical Kit', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14407, 1001001015, 'Reinforced Combo D-Fox (+20% EXP)', 0, 980, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14378, 904007032, 'Medical Kit Lotus2014', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14405, 1001001013, 'Reinforced Viper Red', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14379, 904007043, 'Medical Kit Kurma', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14376, 904007032, 'Medical Kit Lotus2014', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14467, 1001001286, 'General Viper Red', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14468, 1001001286, 'General Viper Red', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14469, 1001001286, 'General Viper Red', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14474, 1001001320, 'Infiltrate Rica', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14471, 1001001295, 'Hitman Viper Red', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14472, 1001001295, 'Hitman Viper Red', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14470, 1001001295, 'Hitman Viper Red', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14477, 1001001360, 'Viper Red Medic', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14478, 1001001360, 'Viper Red Medic', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14482, 1001001394, 'Tarantula Ninja', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14479, 1001001375, 'D-Fox Hawaian Gang [BUG]', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14476, 1001001360, 'Viper Red Medic', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14481, 1001001375, 'D-Fox Hawaian Gang [BUG]', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14483, 1001001415, 'Bella HalloweenNurse [R]', 0, 25, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14494, 1001002004, 'Keen Eyes', 1, 0, 50, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14480, 1001001375, 'D-Fox Hawaian Gang [BUG]', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14485, 1001001415, 'Bella HalloweenNurse [R]', 0, 27, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14488, 1001001421, 'Bella Rangda', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14487, 1001001421, 'Bella Rangda', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14484, 1001001415, 'Bella HalloweenNurse [R]', 0, 26, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14486, 1001001421, 'Bella Rangda', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14492, 1001001465, 'Bella PinkChoco [R]', 0, 2250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14491, 1001001465, 'Bella PinkChoco [R]', 0, 990, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14489, 1001001436, 'ViperRed Rudolph', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14490, 1001001465, 'Bella PinkChoco [R]', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14493, 1001002004, 'Keen Eyes', 22000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14463, 1001001275, 'Captain Rica', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14497, 1001002008, 'Leopard (+20% EXP)', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14500, 1001002009, 'Hide (+30% Gold)', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14496, 1001002008, 'Leopard (+20% EXP)', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14495, 1001002008, 'Leopard (+20% EXP)', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14499, 1001002009, 'Hide (+30% Gold)', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14498, 1001002009, 'Hide (+30% Gold)', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14501, 1001002016, 'Reinforced Combo Leopard (+20% EXP) [R]', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14506, 1001002018, 'Reinforced Combo Hide (+30% Gold) [R]', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14502, 1001002016, 'Reinforced Combo Leopard (+20% EXP) [R]', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14510, 1001002033, 'Chou', 25000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14504, 1001002018, 'Reinforced Combo Hide (+30% Gold) [R]', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14509, 1001002033, 'Chou', 1, 0, 50, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14511, 1001002035, 'Reinforced Chou [R]', 0, 2250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14512, 1001002035, 'Reinforced Chou [R]', 0, 990, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14516, 1001002047, 'Keen Eyes - Garena (20%Exp)', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14513, 1001002035, 'Reinforced Chou [R]', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14515, 1001002047, 'Keen Eyes - Garena (20%Exp)', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14514, 1001002047, 'Keen Eyes - Garena (20%Exp)', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14519, 1001002051, 'Hide Kopassus [R]', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14518, 1001002051, 'Hide Kopassus [R]', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14517, 1001002051, 'Hide Kopassus [R]', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14521, 1001002052, 'Leopard Bope', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14522, 1001002052, 'Leopard Bope', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14520, 1001002052, 'Leopard Bope', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14528, 1001002056, 'Hide Commando', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14524, 1001002053, 'Hide World Cup 2014', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14523, 1001002053, 'Hide Cup [R]', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14530, 1001002062, 'Infected Acid Paul', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14525, 1001002053, 'Hide World Cup 2014', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14526, 1001002056, 'Hide Commando', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14529, 1001002062, 'Infected Acid Paul', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14532, 1001002063, 'Infected Keen Eyes', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14527, 1001002056, 'Hide Commando', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14533, 1001002063, 'Infected Keen Eyes', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14534, 1001002063, 'Infected Keen Eyes', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14537, 1001002064, 'Infected Hide', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14538, 1001002065, 'Infected Leopard', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14536, 1001002064, 'Infected Hide', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14535, 1001002064, 'Infected Hide', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14540, 1001002065, 'Infected Leopard', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14539, 1001002065, 'Infected Leopard', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14541, 1001002067, 'Hide Strike [R]', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14460, 1001001127, 'Red Bulls Ninja', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14543, 1001002067, 'Hide Strike [R]', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14507, 1001002026, 'Leopard Normal', 0, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14542, 1001002067, 'Hide Strike [R]', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14462, 1001001268, 'Tarantula CrocSuit', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14458, 1001001127, 'Red Bulls Ninja', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14505, 1001002018, 'Reinforced Combo Hide (+30% Gold) [R]', 0, 7000, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14461, 1001001137, 'D-Fox Hitman', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14508, 1001002027, 'Hide Normal', 0, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14465, 1001001283, 'Pirate Tarantula', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14464, 1001001283, 'Pirate Tarantula', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14466, 1001001283, 'Pirate Tarantula', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14473, 1001001302, 'P1000 Tarantula', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14557, 1001002305, 'P1000 Keen Eyes', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14558, 1001002311, 'Infiltrate Chou', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14559, 1001002353, 'Hide Summer Vacation', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14560, 1001002413, 'Chou Pocong', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14561, 1001002418, 'Chou HalloweenNurse [R]', 0, 30, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14563, 1001002418, 'Chou HalloweenNurse [R]', 0, 29, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14564, 1001002439, 'Hide Rudolph', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14562, 1001002418, 'Chou HalloweenNurse [R]', 0, 28, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14567, 1001002462, 'Chou MintChoco [R]', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14565, 1001002462, 'Chou MintChoco [R]', 0, 990, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14566, 1001002462, 'Chou MintChoco [R]', 0, 2250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14569, 1006003032, 'Elite Dino', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14568, 1006003032, 'Elite Dino', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14571, 1006003044, 'Raptor Mercury Dino (Reinforced Raptor)', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14570, 1006003032, 'Elite Dino', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14572, 1006003044, 'Raptor Mercury Dino (Reinforced Raptor)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14574, 1006003045, 'Sting Mars Dino (Reinforced Sting)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14579, 1006003046, 'Acid Vulcan Dino (Reinforced Acid)', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14576, 1006003045, 'Sting Mars Dino (Reinforced Sting)', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14575, 1006003045, 'Sting Mars Dino (Reinforced Sting)', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14577, 1006003046, 'Acid Vulcan Dino (Reinforced Acid)', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14578, 1006003046, 'Acid Vulcan Dino (Reinforced Acid)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14583, 1102003003, 'Reinforced Headgear', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14580, 1102003002, 'Normal Headgear', 0, 0, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14581, 1102003003, 'Reinforced Headgear', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14584, 1102003006, 'Target Tracking Headgear', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14586, 1102003006, 'Target Tracking Headgear', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14582, 1102003003, 'Reinforced Headgear', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14587, 1102003007, 'Reinforced Headgear Plus (Super Headgear)', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14589, 1102003007, 'Reinforced Headgear Plus (Super Headgear)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14585, 1102003006, 'Target Tracking Headgear', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14591, 1102003008, 'Super Headgear', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14588, 1102003007, 'Reinforced Headgear Plus (Super Headgear)', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14592, 1102003008, 'Super Headgear', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14590, 1102003008, 'Super Headgear', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14594, 1102003009, 'Angel Ring', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14593, 1102003009, 'Angel Ring', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14595, 1102003009, 'Angel Ring', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14596, 1103003001, 'Assault Beret', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14599, 1103003002, 'Sniper Beret', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14598, 1103003001, 'Assault Beret', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14601, 1103003002, 'Sniper Beret', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14597, 1103003001, 'Assault Beret', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14603, 1103003003, 'Shoting Beret', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14600, 1103003002, 'Sniper Beret', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14602, 1103003003, 'Shoting Beret', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14604, 1103003003, 'Shoting Beret', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14546, 1001002144, 'Chou FBI [R]', 0, 2250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14547, 1001002156, 'Keen Eyes Ninja', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14606, 1103003004, 'SMG Beret', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14607, 1103003004, 'SMG Beret', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14608, 1103003005, 'Shotgun Beret', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14610, 1103003005, 'Shotgun Beret', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14609, 1103003005, 'Shotgun Beret', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14613, 1103003006, 'Champion Clan Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14611, 1103003006, 'Champion Clan Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14612, 1103003006, 'Champion Clan Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14615, 1103003007, 'Red Star Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14614, 1103003007, 'Red Star Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14616, 1103003007, 'Red Star Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14619, 1103003008, 'Yellow Star Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14618, 1103003008, 'Yellow Star Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14617, 1103003008, 'Yellow Star Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14621, 1103003009, 'Cross Knife Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14620, 1103003009, 'Cross Knife Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14623, 1103003010, 'PBTN Champion Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14552, 1001002270, 'Keen Eyes SAS', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14628, 1103003011, 'PB Black Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14624, 1103003010, 'PBTN Champion Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14625, 1103003010, 'PBTN Champion Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14626, 1103003011, 'PB Black Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14629, 1103003012, 'Turkish Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14544, 1001002144, 'Chou FBI [R]', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14548, 1001002157, 'Swat-Sniper Keen Eyes', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14550, 1001002183, 'Jumpsuit Hide', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14549, 1001002175, 'Gengster Hide', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14551, 1001002225, 'Leopard Hitman', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14622, 1103003009, 'Cross Knife Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14556, 1001002287, 'General Hide', 0, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14553, 1001002278, 'Captain Chou', 0, 990, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14554, 1001002278, 'Captain Chou', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14638, 1103003015, 'Cobra Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14641, 1103003016, 'Beret General', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14643, 1103003016, 'Beret General', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14642, 1103003016, 'Beret General', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14646, 1103003017, 'Beret Brazil', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14645, 1103003017, 'Beret Brazil', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14647, 1103003018, 'Beret VeraCruz 2016', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14649, 1103003018, 'Beret VeraCruz 2016', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14651, 1103003019, '1st Anniversary ID Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14648, 1103003018, 'Beret VeraCruz 2016', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14650, 1103003019, '1st Anniversary ID Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14654, 1103003020, 'Beret Strike', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14652, 1103003019, '1st Anniversary ID Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14656, 1103003021, 'Beret Russian Normal', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14655, 1103003020, 'Beret Strike', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14653, 1103003020, 'Beret Strike', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14658, 1103003021, 'Beret Russian Normal', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14657, 1103003021, 'Beret Russian Normal', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14661, 1103003022, 'Beret Russian Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14660, 1103003022, 'Beret Russian Deluxe', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14659, 1103003022, 'Beret Russian Deluxe', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14663, 1103003023, 'PBNC 2016 Beret', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14664, 1103003023, 'PBNC 2016 Beret', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14662, 1103003023, 'PBNC 2016 Beret', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14666, 1103003024, 'Fire Beret', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14665, 1103003024, 'Fire Beret', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14667, 1103003024, 'Fire Beret', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14669, 1103003025, 'PBGC 2017 Beret', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14670, 1103003025, 'PBGC 2017 Beret', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14672, 1103003026, 'Green Beret', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14671, 1103003026, 'Green Beret', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14673, 1103003026, 'Green Beret', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14676, 1103003027, 'PBNC 2017 Beret', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14675, 1103003027, 'PBNC 2017 Beret', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14679, 1103003028, 'Blangkon Kemerdekaan Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14674, 1103003027, 'PBNC 2017 Beret', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14677, 1103003028, 'Blangkon Kemerdekaan Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14680, 1103003029, 'Beret 7th Anniversary', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14678, 1103003028, 'Blangkon Kemerdekaan Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14681, 1103003029, 'Beret 7th Anniversary', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14684, 1103003030, 'Military Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14682, 1103003029, 'Beret 7th Anniversary', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14687, 1103003031, 'Beret FireDragon', 0, 900, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14683, 1103003030, 'Military Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14685, 1103003030, 'Military Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14686, 1103003031, 'Beret FireDragon', 0, 1780, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14688, 1103003031, 'Beret FireDragon', 0, 2450, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14692, 1103003033, 'RRQ Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14691, 1103003032, 'Beret Desert Hound', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14693, 1103003033, 'RRQ Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14689, 1103003032, 'Beret Desert Hound', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14694, 1103003033, 'RRQ Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14696, 1103003034, 'BeretM1LGR4U (Noname)', 0, 1780, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14695, 1103003034, 'BeretM1LGR4U (Noname)', 0, 2450, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14699, 1103003037, 'Beret Brazuca3', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14697, 1103003034, 'BeretM1LGR4U (Noname)', 0, 900, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14700, 1103003037, 'Beret Brazuca3', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14698, 1103003037, 'Beret Brazuca3', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14701, 1104003001, 'White Mask Set', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14702, 1104003002, 'Black Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14703, 1104003003, 'Russian Blue Tiger Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14704, 1104003004, 'Korean Marine Corps Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14705, 1104003005, 'France Desert Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14706, 1104003006, 'Flame Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14707, 1104003007, 'Two-Toned Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14708, 1104003008, 'Iron Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14637, 1103003014, 'Beret Bope', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14710, 1104003009, 'Target Mask', 0, 1350, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14709, 1104003009, 'Target Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14712, 1104003010, 'Pumpkin Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14716, 1104003012, 'Golden Smile Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14717, 1104003012, 'Golden Smile Mask', 0, 2650, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14631, 1103003012, 'Turkish Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14633, 1103003013, 'Kopassus Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14634, 1103003013, 'Kopassus Beret', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14711, 1104003009, 'Target Mask', 0, 2650, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14635, 1103003014, 'Beret Bope', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14640, 1103003015, 'Cobra Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14636, 1103003014, 'Beret Bope', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14639, 1103003015, 'Cobra Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14632, 1103003013, 'Kopassus Beret', 0, 900, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14729, 1104003019, 'Panda Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14730, 1104003020, 'Egg Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14722, 1104003014, 'Pierrot Mask', 0, 2650, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14728, 1104003018, 'Jason Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14734, 1104003024, 'England Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14756, 1104003046, 'Latin Bahamas Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14735, 1104003025, 'France Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14736, 1104003026, 'Germany Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14737, 1104003027, 'Italy Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14738, 1104003028, 'Japan Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14739, 1104003029, 'South Africa Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14740, 1104003030, 'Korean Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14741, 1104003031, 'Spanyol Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14742, 1104003032, 'Tiger Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14743, 1104003033, 'Jester Bw Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14744, 1104003034, 'Roschach Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14745, 1104003035, 'Mask Russia', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14746, 1104003036, 'Ukraine Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14747, 1104003037, 'Belorus Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14748, 1104003038, 'Kazahstan Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14749, 1104003039, 'Red Devil Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14750, 1104003040, 'B. Eagle Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14751, 1104003041, 'G. Crocodile Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14752, 1104003042, 'Y. Canary Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14753, 1104003043, 'Lions Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14755, 1104003045, 'Frail Skull Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14795, 1104003101, 'Punisher Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14757, 1104003047, 'Latin Bolivia Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14758, 1104003048, 'Latin Cayman Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14759, 1104003049, 'Latin Chile Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14760, 1104003050, 'Latin Colombia Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14761, 1104003051, 'Latin Costarica Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14762, 1104003052, 'Latin Honduras Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14763, 1104003053, 'Latin Jamaica Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14764, 1104003054, 'Latin Mexico Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14765, 1104003055, 'Latin Nicaragua Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14766, 1104003056, 'Latin Panama Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14767, 1104003057, 'Latin Paraguay Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14768, 1104003058, 'Latin Dominican Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14769, 1104003059, 'Latin Equador Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14770, 1104003060, 'Latin FR Guyana Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14771, 1104003061, 'Latin Guatemala Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14772, 1104003062, 'Latin Guyana Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14773, 1104003063, 'Latin Haiti Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14774, 1104003064, 'Latin Peru Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14776, 1104003066, 'Latin Suriname Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14777, 1104003067, 'Latin Trinidad Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14778, 1104003068, 'Latin Uruguay Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14779, 1104003069, 'Latin Venezuela Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14780, 1104003070, 'Latin Argentina Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14781, 1104003071, 'Dino Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14782, 1104003072, 'Raptr Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14783, 1104003073, 'Canada Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14784, 1104003074, 'Mask Inglaterra', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14785, 1104003075, 'Mask EUA', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14786, 1104003076, 'Indonesia Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14787, 1104003077, 'Mask PBTN', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14788, 1104003078, 'Butterfly Mask Set', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14789, 1104003079, 'Red Eyes Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14790, 1104003096, 'Mocking Cartoon Mask Set (Troll Meme)', 0, 1, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14791, 1104003097, 'Impassive Cartoon Mask Set (Respect Meme)', 0, 2, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14792, 1104003098, 'Confused Cartoon Mask Set (Ffuu Meme)', 0, 3, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14793, 1104003099, 'Trex Headgear', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14794, 1104003100, 'Trojan Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14723, 1104003014, 'Pierrot Mask', 0, 1350, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14796, 1104003107, 'Mask PBIC2012', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14797, 1104003113, 'Gatotkaca Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14799, 1104003115, 'Mask set of Korea marine corps', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14800, 1104003116, 'Desert Mask Set Of France Army', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14801, 1104003117, 'Gatotkaca Gold Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14802, 1104003118, 'PBSC Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14803, 1104003119, 'PBTN DIGITAL MASK', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14804, 1104003121, 'Garena Gold Mask (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14805, 1104003122, 'Garena Red Mask (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14720, 1104003013, 'Skull Mask', 0, 1350, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14721, 1104003013, 'Skull Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14719, 1104003013, 'Skull Mask', 0, 2650, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14724, 1104003014, 'Pierrot Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14731, 1104003021, 'Death Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14733, 1104003023, 'Mask Brasil', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14726, 1104003016, 'Red Eye Alien Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14727, 1104003017, 'Red Cross Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14725, 1104003015, 'Blue Eye Alien Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14888, 1104003218, 'Mask Obsidian', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14817, 1104003136, 'Unicorn Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14818, 1104003137, 'TH 1st Anniversary Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14819, 1104003142, 'WC 2014 Argentina Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14820, 1104003143, 'WC 2014 Brazil Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14821, 1104003144, 'WC 2014 Chile Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14822, 1104003145, 'WC 2014 Colombia Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14823, 1104003146, 'WC 2014 Equador Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14824, 1104003147, 'WC 2014 England Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14825, 1104003148, 'WC 2014 France Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14826, 1104003149, 'WC 2014 Germany Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14827, 1104003150, 'WC 2014 Italy Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14828, 1104003151, 'WC 2014 Japan Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14829, 1104003152, 'WC 2014 Korea Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14830, 1104003153, 'WC 2014 Spain Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14832, 1104003155, 'WC 2014 Uruguay Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14833, 1104003156, 'WC 2014 Honduras Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14834, 1104003157, 'WC 2014 Mexico Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14835, 1104003158, 'WC 2014 CostaRica Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14837, 1104003160, 'WC 2014 Greece Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14838, 1104003161, 'WC 2014 Netherlands Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14839, 1104003162, 'WC 2014 Belgium Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14840, 1104003163, 'WC 2014 Bosnia and Herzegovina Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14841, 1104003164, 'WC 2014 Switzerland Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14842, 1104003165, 'WC 2014 Croatia Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14843, 1104003166, 'WC 2014 Portugal Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14844, 1104003167, 'WC 2014 Ghana Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14845, 1104003168, 'WC 2014 Nigeria Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14846, 1104003169, 'WC 2014 Algeria Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14847, 1104003170, 'WC 2014 Cameroon Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14848, 1104003171, 'WC 2014 Cote d''Ivoire Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14849, 1104003172, 'WC 2014 Iran Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14850, 1104003173, 'WC 2014 Australia Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14851, 1104003174, 'WC 2014 Russia Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14852, 1104003176, 'Egg AcidPol Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14853, 1104003176, 'Egg AcidPol Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14855, 1104003178, 'Brazuca Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14856, 1104003179, 'Indonesia Mask (GW)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14857, 1104003180, 'Sol Mask (BUG TRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14858, 1104003181, 'Sol Mask Premium (BUG TRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14859, 1104003182, 'Mask PBIC2014', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14860, 1104003183, 'Mask PBSC2013 NonLogo (BUG TRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14861, 1104003186, 'Mask Midnight (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14862, 1104003187, 'Mask Latin4', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14863, 1104003188, 'Mask Latin4 Premium', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14864, 1104003189, 'Mask GRS2', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14865, 1104003190, 'Mask GSL2015', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14866, 1104003191, 'Mask Ongame', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14867, 1104003192, 'Mask Ongame Premium', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14868, 1104003193, 'Mask D-Fox Egg', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14869, 1104003194, 'Mask Viper Egg', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14870, 1104003195, 'Mask Songkran2015', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14871, 1104003196, 'Mask Lion Flame', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14872, 1104003197, 'Mask Harimau', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14873, 1104003199, 'Mask África do Sul', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14874, 1104003200, 'Mask 4Game SE', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14875, 1104003201, 'Mask Madness', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14876, 1104003202, 'Mask Madness Premium', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14877, 1104003204, 'Mask PBTC2015', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14878, 1104003205, 'Meia-Mask PBTC2015', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14879, 1104003206, 'Mask Mech', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14881, 1104003210, 'Mask PBIC2015', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14882, 1104003211, 'Mask Red Cross (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14883, 1104003213, 'Mask Cobra', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14884, 1104003214, 'Mask Fear', 0, 31, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14885, 1104003215, 'Mask Spy-Normal', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14886, 1104003216, 'Mask Latin5 PREMIUM', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14887, 1104003217, 'Mask Latin5', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14889, 1104003219, 'Mask Spy-Deluxe', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14812, 1104003129, 'Mask PBIC2013', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14890, 1104003220, 'Mask DFN', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14891, 1104003222, 'Mask Arena-Normal', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14807, 1104003124, 'Black Snake Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14808, 1104003125, 'Egg Tarantula Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14809, 1104003126, 'GSL Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14810, 1104003127, 'Egg RedBulls Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14811, 1104003128, 'Mask PBNC4', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14813, 1104003131, 'Sheep Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14816, 1104003135, 'LATIN3 Premium Mask (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14814, 1104003132, 'Zombie Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14815, 1104003134, 'LATIN3 Mask (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14904, 1104003235, 'ID 1stAnni Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14905, 1104003236, 'Demonic Mask', 0, 920, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14906, 1104003237, 'Mask Blue Diamond', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14907, 1104003238, 'Mask Puzzle', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14908, 1104003241, 'Mask Liberty', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14909, 1104003242, 'PBIC 2016 Basic Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14910, 1104003243, 'PBIC 2016 Premium Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14911, 1104003244, 'Mask PBTC2016', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14900, 1104003231, 'Mask Midnight2', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14913, 1104003246, 'Meia-Mask PBTC2016', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14914, 1104003247, 'Mask Furious', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14915, 1104003248, 'Mask Clown BR', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14917, 1104003250, 'Mask Chain', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14918, 1104003251, 'Mask Phantom', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14919, 1104003252, 'Mask Halloween 2016', 0, 32, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14920, 1104003253, 'Mask NightHunter', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14921, 1104003254, 'Mask Eagle17', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14922, 1104003256, 'Mask Canary17', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14923, 1105003001, 'Santa Cap', 23000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14924, 1105003002, 'ChineseHat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14926, 1105003002, 'ChineseHat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14925, 1105003002, 'ChineseHat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14929, 1105003003, 'Bandana Indonesia', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14927, 1105003003, 'Bandana Indonesia', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14932, 1105003004, 'Cowboy Hat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14931, 1105003004, 'Cowboy Hat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14930, 1105003004, 'Cowboy Hat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14935, 1105003005, 'Bandana (GW)', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14934, 1105003005, 'Bandana (GW)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14933, 1105003005, 'Bandana (GW)', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14939, 1105003007, 'ChineseHat2', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14942, 1105003008, 'Kopassus Hat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14944, 1105003008, 'Kopassus Hat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14943, 1105003008, 'Kopassus Hat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14945, 1105003009, 'Toy Hat', 1, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14946, 1105003010, 'Carnival Hat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14948, 1105003010, 'Carnival Hat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14947, 1105003010, 'Carnival Hat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14950, 1105003011, 'Soldier Day Hat(Paper Hat)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14949, 1105003011, 'Soldier Day Hat(Paper Hat)', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14951, 1105003011, 'Soldier Day Hat(Paper Hat)', 0, 12340, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14953, 1105003012, 'Bicorne Hat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14954, 1105003012, 'Bicorne Hat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14952, 1105003012, 'Bicorne Hat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14956, 1105003013, 'Camo Soldier Boonie Hat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14957, 1105003013, 'Camo Soldier Boonie Hat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14955, 1105003013, 'Camo Soldier Boonie Hat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14960, 1105003014, 'Cowboy Hat (GM)', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14958, 1105003014, 'Cowboy Hat (GM)', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14963, 1105003016, 'Monkey Mask', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14961, 1105003016, 'Monkey Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14962, 1105003016, 'Monkey Mask', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14966, 1105003017, 'Pot Lebaran 2016 (Topi Panci)', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14964, 1105003017, 'Pot Lebaran 2016 (Topi Panci)', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14965, 1105003017, 'Pot Lebaran 2016 (Topi Panci)', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14967, 1105003018, 'Mask Chicken', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14968, 1105003019, 'Valentine Witch Hat', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14969, 1105003019, 'Valentine Witch Hat', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14970, 1105003019, 'Valentine Witch Hat', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14971, 1105003020, 'Mask Snorkeling', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14973, 1105003020, 'Mask Snorkeling', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14972, 1105003020, 'Mask Snorkeling', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14976, 1105003021, 'Puppy Mask', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14975, 1105003021, 'Puppy Mask', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14974, 1105003021, 'Puppy Mask', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14977, 1105003022, 'Graduation Cap', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14979, 1105003022, 'Graduation Cap', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14978, 1105003022, 'Graduation Cap', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14980, 1105003032, 'Fes Hat Milkyway', 0, 1499, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14982, 1105003032, 'Fes Hat Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14894, 1104003225, 'Mask Serpent', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14896, 1104003227, 'Mask GRS3', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14897, 1104003228, 'Mask PBGC', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14898, 1104003229, 'Mask GSL2016', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14899, 1104003230, 'Mask Tiger Deluxe', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14901, 1104003232, 'Mask Skeleton', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14902, 1104003233, 'Mask E-Sports2', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14903, 1104003234, 'Mask Mummy', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14912, 1104003245, 'Mask PBST2016', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14928, 1105003003, 'Bandana Indonesia', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14941, 1105003007, 'ChineseHat2', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14989, 1200009000, 'Fake Rank [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14990, 1200010000, 'Temporary Nickname 1D [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14991, 1200011000, 'Free Move (Duration) [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14992, 1200014000, 'Color Change Crosshair [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14993, 1200017000, 'Quick Change Weapon [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14994, 1200026000, 'Quick Change Reload [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14995, 1200027000, 'MAX HP Up 10% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14996, 1200028000, 'Invincible +1 Sec. [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14997, 1200029000, 'Bullet Proof Vest 5% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14998, 1200030000, 'Damage Up, Accuracy Down [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14999, 1200031000, 'Munição Hollow Point [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15000, 1200032000, 'FlashBang Protection [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15001, 1200033000, 'C4 Speed Up [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15002, 1200034000, 'Increase Grenade Slot +1 [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15003, 1200035000, 'Damage & Accuracy Up, Move Down [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15004, 1200036000, '200% EXP Up [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15005, 1200037000, '200% Point Up [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15006, 1200038000, 'Mega Hp 5% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15007, 1200040000, 'Bullet Proof Vest Plus 10% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15008, 1200044000, 'Quick Respawn 50% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15009, 1200064000, 'Quick Respawn 50% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15011, 1200078000, 'Hollow Point Ammo Plus [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15012, 1200079000, '20% Defense Up [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15013, 1200080000, 'Quick Respawn 100% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15014, 1200119000, '150% Point Up [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15015, 1200168000, 'Get Dropped Weapon [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15016, 1200170000, 'Full Metal Jacket Ammo EV [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15017, 1200185000, 'Ammo Up Cyberindo + 10% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15018, 1200242000, 'Increase Smoke Slot +1 [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15020, 1300002007, '130% EXP UP', 0, 1500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15021, 1300002030, '130% EXP UP', 0, 2500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15022, 1300003003, '150% EXP UP', 0, 500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15024, 1300003030, '150% EXP UP', 0, 2500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14986, 1200006000, 'Nick Color[E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15025, 1300004003, '130% Point UP', 0, 500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15026, 1300004007, '130% Point UP', 0, 1500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15027, 1300004030, '130% Point UP', 0, 2500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15028, 1300006003, 'Call Sign Recolor', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15029, 1300006007, 'Call Sign Recolor', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15030, 1300006030, 'Call Sign Recolor', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15031, 1300007003, 'Quick Respawn 30%', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15032, 1300007007, 'Quick Respawn 30%', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15033, 1300007030, 'Quick Respawn 30%', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15034, 1300008003, 'Ammo Up', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15035, 1300008007, 'Ammo Up', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15036, 1300008030, 'Ammo Up', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15037, 1300009003, 'Fake Rank', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15038, 1300009007, 'Fake Rank', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15040, 1300010003, 'Temporary Nickname 1D', 0, 1, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15041, 1300010007, 'Temporary Nickname 7D', 0, 1, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15042, 1300010030, 'Temporary Nickname 30D', 0, 1, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15043, 1300011003, 'Free Move (Duration)', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15044, 1300011007, 'Free Move (Duration)', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15045, 1300011030, 'Free Move (Duration)', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15046, 1300014003, 'Color Change Crosshair', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15047, 1300014007, 'Color Change Crosshair', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15048, 1300014030, 'Color Change Crosshair', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15049, 1300026003, 'Quick Change Weapon', 0, 750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15050, 1300026007, 'Quick Change Weapon', 0, 1800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15051, 1300026030, 'Quick Change Weapon', 0, 2875, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15052, 1300027003, 'Quick Change Reload', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15053, 1300027007, 'Quick Change Reload', 0, 1990, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15054, 1300027030, 'Quick Change Reload', 0, 3200, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15055, 1300028003, 'MAX HP Up 10%', 0, 750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15056, 1300028007, 'MAX HP Up 10%', 0, 1650, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15057, 1300028030, 'MAX HP Up 10%', 0, 3300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15059, 1300029007, 'Invincible +1 Sec.', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15060, 1300029030, 'Invincible +1 Sec.', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15061, 1300030003, 'Bullet Proof Vest 5%', 0, 450, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15062, 1300030007, 'Bullet Proof Vest 5%', 0, 900, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15063, 1300030030, 'Bullet Proof Vest 5%', 0, 3600, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15064, 1300031003, 'Damage Up, Accuracy Down', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15065, 1300031007, 'Damage Up, Accuracy Down', 0, 890, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15066, 1300031030, 'Damage Up, Accuracy Down', 0, 2990, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15067, 1300032003, 'Hollow Point Ammo', 0, 980, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15019, 1300002003, '130% EXP UP', 0, 500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14983, 1200002000, '130% EXP UP [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14984, 1200003000, '150% EXP UP [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15023, 1300003007, '150% EXP UP', 0, 1500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14985, 1200004000, '130% Point UP [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14988, 1200008000, 'Ammo Up [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15075, 1300034030, 'C4 Speed Up', 0, 2750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15076, 1300035003, 'Increase Grenade Slot +1', 0, 800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15077, 1300035007, 'Increase Grenade Slot +1', 0, 1750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15078, 1300035030, 'Increase Grenade Slot +1', 0, 2650, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15079, 1300036003, 'Jacketed Hollow Point Ammo', 0, 825, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15080, 1300036007, 'Jacketed Hollow Point Ammo', 0, 1750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15081, 1300036030, 'Jacketed Hollow Point Ammo', 0, 3100, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15082, 1300037003, '200% EXP Up', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15083, 1300037007, '200% EXP Up', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15084, 1300037030, '200% EXP Up', 0, 2750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15086, 1300038007, '200% Point Up', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15087, 1300038030, '200% Point Up', 0, 2750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15088, 1300040003, 'Mega HP 5%', 0, 650, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15089, 1300040007, 'Mega HP 5%', 0, 1350, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15090, 1300040030, 'Mega HP 5%', 0, 3210, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15091, 1300044003, 'Bullet Proof Vest Plus 10%', 0, 900, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15092, 1300044007, 'Bullet Proof Vest Plus 10%', 0, 1600, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15093, 1300044030, 'Bullet Proof Vest Plus 10%', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15094, 1300064003, 'Quick Respawn 50%', 0, 650, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15095, 1300064007, 'Quick Respawn 50%', 0, 1350, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15096, 1300064030, 'Quick Respawn 50%', 0, 3210, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15097, 1300065003, 'Bullet Proof Vest Plus (GM) 90%', 0, 999999999, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15098, 1300065007, 'Bullet Proof Vest Plus (GM) 90%', 0, 999999999, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15099, 1300065030, 'Bullet Proof Vest Plus (GM) 90%', 0, 999999999, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15100, 1300077003, 'Quick Respawn 20%', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15101, 1300077007, 'Quick Respawn 20%', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15102, 1300077030, 'Quick Respawn 20%', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15103, 1300078003, 'Hollow Point Ammo Plus', 0, 890, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15104, 1300078007, 'Hollow Point Ammo Plus', 0, 1850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15105, 1300078030, 'Hollow Point Ammo Plus', 0, 3500, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15107, 1300079007, 'Metal Bullet Proof Vest 20%', 0, 1699, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15108, 1300079030, 'Metal Bullet Proof Vest 20%', 0, 3199, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15109, 1300080001, 'Quick Respawn 100%', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15110, 1300080007, 'Quick Respawn 100%', 0, 700, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15111, 1300080030, 'Quick Respawn 100%', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15112, 1300119003, '150% Point Up', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15113, 1300119007, '150% Point Up', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15114, 1300119030, '150% Point Up', 0, 2750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15115, 1300168003, 'Get Dropped Weapon', 0, 600, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15116, 1300168007, 'Get Dropped Weapon', 0, 1400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15117, 1300168030, 'Get Dropped Weapon', 0, 6000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15118, 1300170003, 'Full Metal jacket Ammo EV', 0, 600, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15119, 1300170007, 'Full Metal Jacket Ammo EV', 0, 1400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15120, 1300170030, 'Full Metal Jacket Ammo EV', 0, 6000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15121, 1300185003, 'Ammo Up Cyberindo + 10%', 0, 1, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15122, 1300185007, 'Ammo Up Cyberindo + 10%', 0, 1, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15123, 1300185030, 'Ammo Up Cyberindo + 10%', 0, 1, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15124, 1300242003, 'Increase Smoke Slot +1', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15125, 1300242007, 'Increase Smoke Slot +1', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15126, 1300242030, 'Increase Smoke Slot +1', 0, 2750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15136, 1301047000, 'Change nickname', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15128, 1301015000, 'Darkblow Login Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15129, 1301039000, 'Giga Bomb', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15130, 1301041000, 'Defcon 1 Pack', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15131, 1301042000, 'Defcon 2 Pack', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15073, 1300034003, 'C4 Speed Up', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15132, 1301043000, 'Defcon 3 Pack', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15133, 1301045000, 'Random Box of Weapons 2', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15135, 1301046000, 'Mini Bomb', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15137, 1301048000, 'Reset Win / Losers', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15138, 1301049000, 'Reset Kill / Death', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15139, 1301050000, 'Reset Kabur', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15140, 1301051000, 'Change clan name', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15141, 1301052000, 'Change clan badge', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15142, 1301053000, 'Reset Clan Win / Losers', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15143, 1301055000, 'Clan Member +50', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15144, 1301057000, 'Camo Soldier Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15145, 1301058000, 'Mega Bomb', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15146, 1301059000, 'Weapon Crate', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15147, 1301060000, 'Survival Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15148, 1301061000, 'Mega Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15149, 1301068000, 'Giga Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15150, 1301085000, 'PB Inspector', 22000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15151, 1301087000, 'Gift Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15152, 1301090000, 'Dual Uzi Supply Kit 1d', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15153, 1301097000, 'Famas G2 Supply Kit 1d', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15069, 1300032030, 'Hollow Point Ammo', 0, 3400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15070, 1300033003, 'FlashBang Protection', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15071, 1300033007, 'FlashBang Protection', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15072, 1300033030, 'FlashBang Protection', 0, 2750, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15074, 1300034007, 'C4 Speed Up', 0, 850, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15161, 1301108000, 'Che Guevara Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15160, 1301108000, 'Random Box of Cheguevara', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15163, 1301115000, '1000 Points', 1, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15164, 1301116000, '5000 Points', 1, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15162, 1301114000, '500 Points', 1, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15165, 1301117000, '10000 Points', 1, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15167, 1301118000, '30000 Points', 1, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15168, 1301120000, 'Random Box Gold Bomb', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15169, 1301121000, 'Random Box Gold Bomb Premium', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15170, 1301129000, 'Christmas Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15171, 1301131000, 'Facebook Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15172, 1301143000, 'M18A1 Claymore Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15173, 1301144000, 'Sakura Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15174, 1301145000, 'Premium Sakura Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15175, 1301146000, 'Sakura Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15176, 1301147000, 'Serpent Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15177, 1301148000, 'AUG A3 Random Box (7D)', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15178, 1301151000, 'Premium PC Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15179, 1301152000, 'Random Box Beast', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15210, 1301227000, 'AUG A3 Ecuador Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15181, 1301154000, 'Random Box Serpent', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15182, 1301155000, 'Loyal Troppers Gift Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15183, 1301156000, 'PBGC 2016 Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15184, 1301157000, 'Premium PBGC 2016 Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15185, 1301172000, 'Darkblow Wekeend Gift Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15186, 1301176000, 'E-Sports 2 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15187, 1301177000, 'Medic Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15188, 1301179000, 'Skeleton Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15189, 1301180000, 'Random Box Sniper 7D', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15191, 1301191000, 'Darkblow Starter Package', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15193, 1301202000, 'Random Box Silence', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15197, 1301207000, 'Darkblow Mech Series Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15199, 1301211000, 'Random Box Mummy', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15200, 1301212000, 'Random Box Dragon', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15201, 1301215000, 'PBWC 2016 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15202, 1301216000, 'Mummy Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15203, 1301217000, 'Dragon Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15204, 1301220000, 'Dual Kunai Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15205, 1301221000, 'PBWC 2016 Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15207, 1301224000, 'AUG A3 Bolivia Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15208, 1301225000, 'AUG A3 Chile Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15209, 1301226000, 'AUG A3 Colombia Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15211, 1301228000, 'AUG A3 Mexico Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15212, 1301229000, 'AUG A3 Peru Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15214, 1301240000, 'Random Box Cupid', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15215, 1301241000, 'Random Box Demonic', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15216, 1301243000, 'Wayang Supply Kit A', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15217, 1301244000, 'Wayang Supply Kit B', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15218, 1301245000, 'AUG A3 Silincer Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15219, 1301246000, 'Medical Kit Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15220, 1301247000, 'Explosive Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15221, 1301248000, 'Kriss S.V Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15222, 1301249000, 'SuperHeadgear Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15224, 1301250000, 'Premium Aug Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15223, 1301250000, 'Premium AUG Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15226, 1301253000, 'Darkblow Summer Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15225, 1301251000, 'Turkey Weapon Package', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15227, 1301254000, 'Darkblow Tiger Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15228, 1301258000, 'Darkblow Premium Tiger Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15229, 1301260000, 'Character Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15230, 1301261000, 'Silencer Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15231, 1301262000, 'P90 Ext. Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15232, 1301263000, 'Kriss S.V Red Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15233, 1301264000, 'Premium Limited Edition Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15159, 1301104000, 'Famas G2 Supply Kit 30d', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15157, 1301102000, 'Famas G2 Supply Kit 3d', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15235, 1301269000, 'Ballistic Knife Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15236, 1301273000, 'Darkblow Starter Package 2', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15237, 1301279000, 'Cerberus Shotgun Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15156, 1301100000, 'Dual Uzi Supply Kit 30d', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15234, 1301265000, 'Premium Item Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15158, 1301103000, 'Famas G2 Supply Kit 7d', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15180, 1301153000, 'Random Box Sakura', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15198, 1301210000, 'Random Box PBWC', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15244, 1301291000, 'Blue Diamond Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15245, 1301297000, 'Darkblow New Year 2020 Package V1', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15249, 1301305000, 'Random Box GSL2016', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15247, 1301299000, 'Random Box Blue Diamond', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15248, 1301300000, 'Random Box Dolphin', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15240, 1301282000, 'Quick Change Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15250, 1301306000, 'Random Box Newborn2016', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15251, 1301307000, 'Metal Bullet Proof Vest Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15252, 1301308000, 'Hollow Point Ammo Plus Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15253, 1301309000, 'Premium Demonic Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15254, 1301310000, 'Indonesian Weapon Package', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15255, 1301311000, 'C4 Speed Kit Lucky Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15257, 1301313000, 'Kemerdekaan Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15258, 1301318000, 'Woody Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15259, 1301322000, 'PBIC Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15260, 1301323000, 'Premium PBIC Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15261, 1301324000, 'Premium Knife Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15262, 1301325000, 'PBST 2017 Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15263, 1301326000, 'Random Box DarkSteel', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15264, 1301331000, 'Dark Steel Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15265, 1301332000, 'Supreme Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15266, 1301333000, 'PBIC 2016 Supply Kit (Normal)', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15267, 1301334000, 'PBIC 2016 Supply Kit (Premium)', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15268, 1301335000, 'Random Box Supreme', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15269, 1301336000, 'Random Box Special PBIC', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15270, 1301502000, 'Peti Harta Gatotkaca', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15271, 1301506000, 'DSR-1 Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15272, 1301507000, 'Random Box Unique Mask', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15273, 1301508000, 'Dual K-413 Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15274, 1301517000, 'PBNC4 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15275, 1301519000, 'Garena Premium Gacha A', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15276, 1301520000, 'Garena Premium Gacha B', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15277, 1301521000, 'Ramadhan Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15278, 1301527000, 'Random Box Points', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15279, 1301528000, 'Crimson Random Box A', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15280, 1301529000, 'Crimson Random Box B', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15281, 1301532000, 'Cross Over Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15282, 1301545000, 'World Cup 2014 Random Box A', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15283, 1301546000, 'World Cup 2014 Random Box B', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15284, 1301547000, 'World Cup 2014 Random Box C', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15286, 1301549000, 'PBNC5 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15287, 1301554000, 'Brazuca Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15288, 1301562000, 'World Cup 2014 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15289, 1301564000, 'Flaming Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15290, 1301575000, 'PBIC 2014 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15291, 1301584000, 'M1887 Lion Heart Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15292, 1301587000, 'Winter X Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15293, 1301588000, 'New Year Gift Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15294, 1301589000, 'New Year 2015 Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15295, 1301591000, 'Collection Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15296, 1301602000, 'C.S Apologize Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15297, 1301605000, 'Sorry Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15298, 1301606000, 'Thanks Random Box 1', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15299, 1301607000, 'Thanks Random Box 2', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15300, 1301608000, 'New Year AUG A3 Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15301, 1301615000, 'Goat Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15302, 1301616000, 'Premium CNY Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15310, 1301647000, 'Random Box AK Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15304, 1301618000, 'Point Bomb Special', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15306, 1301619000, 'Random Box Mix PBIC', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15305, 1301619000, 'Mix PBIC Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15308, 1301621000, 'KID Gacha', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15307, 1301620000, 'AUG A3 Lucky Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15309, 1301646000, 'Random Box Elite Pro', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15312, 1301649000, 'Random Box G36C Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15243, 1301290000, 'Dolphin Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15313, 1301650000, 'Random Box M4A1 Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15314, 1301651000, 'Random Box PSG1 Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15315, 1301652000, 'Random Box SPAS-15 Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15316, 1301653000, 'Random Box SVU Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15317, 1301654000, 'Random Box VSK94 Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15318, 1301663000, 'Random Box Every Day', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15319, 1301664000, 'Random Box Everyday Login Plus', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15320, 1301794000, 'Random Box PBIC2015', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15239, 1301281000, 'Premium Dolphin Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15246, 1301298000, 'Random Box Alien', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15303, 1301617000, 'Point Bomb Mini', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15242, 1301289000, 'Alien Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15241, 1301283000, 'Darkblow Ultimate Package', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15327, 1302014000, 'Random Box Woody A', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15328, 1302016000, 'Random Box Woody B', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15329, 1302017000, 'Random Box Halloween 2016', 0, 33, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15330, 1302122000, 'Premium Cheytac Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15331, 1302266000, 'OA-7 Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15332, 1302379000, '2018 Premium Knife Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15333, 1500000001, 'Point 1,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15335, 1500000003, 'Point 3,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15336, 1500000004, 'Point 4,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15337, 1500000005, 'Point 5,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15338, 1500000006, 'Point 6,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15339, 1500000007, 'Point 7,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15340, 1500000008, 'Point 8,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15341, 1500000009, 'Point 9,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15342, 1500000010, 'Point 10,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15343, 1500000011, 'Point 11,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15344, 1500000012, 'Point 12,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15345, 1500000013, 'Point 13,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15346, 1500000014, 'Point 14,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15347, 1500000015, 'Point 15,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15348, 1500000016, 'Point 16,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15349, 1500000017, 'Point 17,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15350, 1500000018, 'Point 18,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15351, 1500000019, 'Point 19,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15352, 1500000020, 'Point 20,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15353, 1500000022, 'Point 22,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15354, 1500000024, 'Point 24,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15355, 1500000025, 'Point 25,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15356, 1500000028, 'Point 28,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15357, 1500000030, 'Point 30,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15358, 1500000032, 'Point 32,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15360, 1500000036, 'Point 36,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15361, 1500000040, 'Point 40,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15362, 1500000045, 'Point 45,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15363, 1500000050, 'Point 50,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15364, 1500000055, 'Point 55000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15365, 1500000060, 'Point 70,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15366, 1500000100, 'Point 100,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15368, 1500000300, 'Point 300,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15369, 1500000500, 'Point 500,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15370, 1500001000, 'Point 100 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15371, 1500002003, 'Point 3,200 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15372, 1501000000, 'Point 1,000,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15373, 1503000000, 'Point 3,000,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15374, 1508000000, 'Point 8,000,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10012, 100003011, 'K-201 Ext.', 1, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10056, 100003039, 'AK SOPMOD D', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10126, 100003091, 'Famas G2 Commando PBTN', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10100, 100003062, 'FAMAS G2 Commando E-Sports', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10153, 100003100, 'Famas G2 GRS', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10173, 100003112, 'AUG A3 Turkey', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10183, 100003119, 'AK-47 Elite', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10210, 100003131, 'AUG A3 LATIN3', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10230, 100003149, 'AUG A3 GSL2014', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10254, 100003160, 'AUG A3 BR 4th Anniversary', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10274, 100003169, 'TAR-21 Gold', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10322, 100003188, 'AUG A3 Ongame', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10296, 100003178, 'AUG A3 CoupleBreaker', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10346, 100003196, 'AUG A3 PBST2015', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10363, 100003201, 'AUG A3 Equador', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10419, 100003222, 'AUG A3 VeraCruz', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10373, 100003205, 'AUG A3 Chile', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10397, 100003214, 'AUG A3 PBNC2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10440, 100003231, 'AUG A3 Steam', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10453, 100003235, 'AUG A3 Obsidian', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10465, 100003242, 'SC-2010 XMAS2015', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10488, 100003250, 'AUG A3 Cupid', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10513, 100003258, 'AUG A3 GSL2016', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10535, 100003266, 'AUG A3 PBWC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15322, 1301852000, 'Random Box Character A', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10001, 100003001, 'SG-550 Ext.', 24000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10031, 100003027, 'G36C Ext. [D-Cash]', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15323, 1301853000, 'Random Box Character B', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15324, 1301854000, 'Random Box Camo Soldier', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10074, 100003045, 'M4 SR-16 F.C.', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10276, 100003170, 'SCAR-L Carbine Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15326, 1301901000, 'Random Box Horror', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15325, 1301895000, 'Random Box Monkey', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10094, 100003057, 'Vz. 52', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10695, 100003324, 'AUG A3 Beyond', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11968, 200004655, 'Kriss S.V Latin Championship 2', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11939, 200004637, 'OA-93 GunZeeD', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11951, 200004645, 'OA-93 Surfing', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10718, 100003332, 'Famas G2 Commando Talos', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10727, 100003336, 'AUG A3 Samurai', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10804, 100003362, 'AUG A3 Brazuca2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10795, 100003359, 'AUG A3 ID 2nd Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10822, 100003368, 'AUG A3 Phantom', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10871, 100003385, 'SC-2010 PBST-ES', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10845, 100003376, 'Pindad SS2 V5 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10959, 100003433, 'AUG A3 Zepetto', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11006, 100003451, 'AUG  A3 M1LGR4U', 0, 1350, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11890, 200004603, 'Kriss S.V Maze', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10980, 100003441, 'AUG A3 Graduation', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10982, 100003442, 'Groza Graduation', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11025, 100003464, 'SC-2010 Lebaran 2018', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11068, 200004010, 'P90 MC', 45000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11995, 300005006, 'Dragunov Gold', 32000, 0, 100, 1, 1, 2, 0, 14, 0);
INSERT INTO "public"."shop" VALUES (11091, 200004027, 'P90 M.C.S.', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10911, 100003398, 'AUG A3 PBIWC2017', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11109, 200004039, 'Kriss S.V Black', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10934, 100003407, 'AUG A3 HBAR SI.', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11167, 200004099, 'SS1-R5 Carbine Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10893, 100003392, 'AUG A3 Rebel', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10614, 100003293, 'K2C PBIC2016', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11194, 200004116, 'Kriss S.V Serpent', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11217, 200004132, 'Kriss S.V Midnight', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11241, 200004155, 'Kriss S.V G E-Sport', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11251, 200004162, 'PP-19 Bizon Gold', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11271, 200004170, 'Kriss S.V CoupleBreaker', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11293, 200004187, 'P90 Ext Ongame', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11318, 200004198, 'OA-93 Independence', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11339, 200004210, 'P90 Mech', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11351, 200004218, 'P90 Ext PBIC2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11373, 200004228, 'OA-93 Medical', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11398, 200004241, 'P90 M.C Latin5', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11421, 200004253, 'Kriss S.V Monkey', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11426, 200004258, 'Kriss S.V Beast', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11428, 200004260, 'Kriss S.V PBGC', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11451, 200004272, 'P90 Ext. Dragon', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11473, 200004285, 'P90 Ext. Silence Strike', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11497, 200004297, 'P90 Ext. Alien', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11517, 200004307, 'PP-19 Bizon Russian Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11526, 200004311, 'P90 Ext. Liberty', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11545, 200004323, 'Kriss S.V PBST2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11570, 200004338, 'P90 Ext. Pahlawan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11593, 200004351, 'P90 Ext. Lightning', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11602, 200004355, 'Kriss S.V Pirates', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11620, 200004366, 'Kriss S.V Cursed Valentine', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11644, 200004379, 'OA-93 Salvation', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11690, 200004408, 'Kriss S.V PBWC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11704, 200004418, 'P90 Ext. Lebaran 2017', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11729, 200004457, 'P90 Ext. Silincer Newborn 2017', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11758, 200004471, 'Kriss S.V 7th Anniversary', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11777, 200004481, 'P90 MC PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11816, 200004509, 'Kriss S.V PBIWC 2017', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10544, 100003269, 'Pindad SS2 V5 Gold', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11863, 200004583, 'Kriss S.V Graduation', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10566, 100003277, 'AUG A3 Blue Diamond', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10592, 100003286, 'Groza Silver', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11870, 200004586, 'OA-93 Graduation', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11913, 200004619, 'Kriss S.V Midnight [BUG]', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12017, 300005017, 'L115A1 D', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11131, 200004054, 'Kriss S.V Vector ', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10751, 100003345, 'AUG A3 Comic', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12038, 300005028, 'Dragunov D', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12040, 300005029, 'VSK94', 26000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12061, 300005050, 'L115A1 PBTN', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12082, 300005058, 'CheyTac M200 GRS EV', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12105, 300005075, 'PSG1 Elite', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10627, 100003298, 'AUG A3 PBST2016', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12126, 300005083, 'Cheytac M200 Brazuca', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12127, 300005084, 'Cheytac M200 Champion', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12136, 300005087, 'Cheytac M200 PBIC2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11070, 200004013, 'Kriss S.V', 48000, 0, 100, 1, 1, 2, 0, 24, 0);
INSERT INTO "public"."shop" VALUES (10647, 100003304, 'Pindad SS2 V5 Mystic', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10677, 100003315, 'AUG A3 Ice', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11160, 200004087, 'Kriss S.V GSL', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12283, 300005138, 'Cheytac M200 XMAS2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12300, 300005144, 'Cheytac M200 Silence', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12315, 300005149, 'Cheytac M200 Serpent', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12334, 300005156, 'Cheytac M200 Tiger-Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12359, 300005165, 'Cheytac M200 ID 1stAnni', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12388, 300005174, 'L115A1 Alien', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12404, 300005180, 'Tactilite T2 Liberty', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12430, 300005188, 'Cheytac M200 Supreme', 0, 920, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12453, 300005196, 'Cheytac M200 Hybridman', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12468, 300005201, 'Tactilite T2 MechHero (D-Cash [Days])', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12493, 300005209, 'AS-50 GSL 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12519, 300005218, 'Cheytac M200 PBWC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12552, 300005229, 'Cheytac M200 Brazuca2', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12576, 300005237, 'Cheytac M200 PBNC 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12601, 300005245, 'L115A1 7th Anniversary', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12627, 300005254, 'SSG69 TSE', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12636, 300005257, 'Cheytac M200 Shatter Z1', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13646, 601014028, 'Scorpion Vz. 61 Arcade', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13675, 702001014, 'Combat Machete', 0, 990, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12660, 300005265, 'Cheytac M200 X-MAS 2017', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12690, 300005275, 'Tactilite T2 Red', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12708, 300005281, 'Tactilite T2 Pandora', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12719, 300005285, 'Cheytac M200 Nevasca', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12743, 300005293, 'Cheytac M200 Graduation', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12235, 300005120, 'Cheytac M200 PBIC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12804, 300005316, 'Tactilite T2 Lebaran 2018', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12824, 300005325, 'Tactilite T2 Milkyway', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12853, 400006011, '870MCS W. D ', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12876, 400006020, 'Kel-Tec KSG-15', 0, 2100, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12888, 400006028, 'M1887W GRS EV', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12896, 400006030, 'M1887 Bloody', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12919, 400006040, 'SPAS-15 NonLogo PBSC2013', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12942, 400006049, 'M1887 GSL2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12962, 400006057, 'SPAS-15 MSC PBNC2015 U.S.', 0, 1899, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12980, 400006063, 'M1887 Arena Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12981, 400006063, 'M1887 Arena Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13006, 400006071, 'M1887 ID 1stAnni', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13030, 400006079, 'M1887 PBTC2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13068, 400006092, 'SPAS-15 Fire', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13051, 400006086, 'M1887 Pahlawan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13078, 400006095, '870MCS Talos', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13102, 400006103, 'M1887 PBWC 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13125, 400006111, 'M1887 Vacance', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13145, 400006118, 'Cerberus Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13157, 400006122, 'M1887 Freedom', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13166, 400006126, 'JackHammer Black', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13188, 400006134, 'JackHammer Blue', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13210, 400006142, 'Zombie Slayer Graduation', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13236, 400006152, 'M1887 Arcade', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13265, 500010014, 'Ultimax 100 Mummy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13289, 601002018, 'C. Python G D', 0, 1400, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13312, 601002029, 'GL-06', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13332, 601002040, 'C. Python CS', 0, 750, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13336, 601002049, 'C. Python Brazuca', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13353, 601002058, 'C. Python Summer', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13379, 601002069, 'Kriss Vector SDP DarkDays', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13400, 601002076, 'C. Python Latin5', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13421, 601002084, 'C. Python GSL2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13434, 601002088, 'Glock 18 Mummy', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13454, 601002097, 'C. Python PBIC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13479, 601002106, 'C. Python Ice', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13504, 601002114, 'TEC-9 G.', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13513, 601002117, 'Desert Eagle Comic', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13535, 601002124, 'R.B 454 SS8M+S PBTC 2017', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13561, 601002133, 'C. Python Rebel', 0, 999, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13578, 601002144, 'Taurus 454SS Scope Nusantara', 0, 650, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13593, 601002155, 'C. Python Football Deluxe', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13602, 601013008, 'C. Python Cutlass', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13626, 601014018, 'Scorpion Vz.61 G.', 0, 6000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13678, 702001017, 'Fang Blade', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13697, 702001041, 'Arabian Sword', 0, 420, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13719, 702001051, 'Fang Blade GSL2014', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13744, 702001067, 'Fang Blade LATIN4', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13766, 702001079, 'Fang Blade Ongame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13769, 702001080, 'Field Shovel Royal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12190, 300005105, 'Cheytac M200 Redemption', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12212, 300005113, 'Cheytac M200 4Game SE', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12216, 300005114, 'Cheytac M200 PBNC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12256, 300005128, 'Rangermaster .338 Camo Soldier', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12769, 300005304, 'Cheytac M200 PBWC 2018', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13907, 702001160, 'Arabian Sword PBNC2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13934, 702001171, 'Fang Blade Pirates', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13940, 702001174, 'Keris PBGC 2017', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13959, 702001184, 'Karambit CNPB-T5', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13983, 702001194, 'Fang Blade Ramadan', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14004, 702001202, 'Karambit 7th Anniversary', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14024, 702001210, 'Syringe Halloween', 0, 21, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14042, 702001218, 'Puppy Hammer', 0, 1350, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14065, 702001234, 'Amok Kukri PBWC 2018', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14090, 702015002, 'Dual Knife D', 0, 1220, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14109, 702015009, 'Dual Bone Knife PBNC2015', 0, 1299, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14157, 702015026, 'BONEKNIFE M1LGR4U', 0, 1, 604800, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14183, 702023009, 'Garena Knuckles', 0, 3000, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14195, 803007008, 'K-413 Grenade', 18000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14206, 803007019, 'Ketupat Grenade', 0, 350, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14226, 803007030, 'Easter Day Egg Grenade', 0, 1150, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14252, 803007042, 'Sheep Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14277, 803007054, 'K-413 Tiger-Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14285, 803007057, 'Mummy Grenade', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14301, 803007065, 'K-413 Russian Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14326, 803007075, 'Volley Ball Grenade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14353, 904007012, 'WP Smoke Plus', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14374, 904007031, 'Easter Day Medical Kit', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14422, 1001001028, 'Viper Red', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14441, 1001001068, 'Viper Kopassus [R]', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14459, 1001001127, 'Red Bulls Ninja', 0, 1, 1, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14475, 1001001356, 'Viper Red Summer Vacation', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14503, 1001002016, 'Reinforced Combo Leopard (+20% EXP) [R]', 0, 3000, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (13785, 702001095, 'Combat Machete 4Game', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14627, 1103003011, 'PB Black Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14545, 1001002144, 'Chou FBI [R]', 0, 990, 259200, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14893, 1104003224, 'Mask do Cupido', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14630, 1103003012, 'Turkish Beret', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14644, 1103003017, 'Beret Brazil', 0, 1780, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14668, 1103003025, 'PBGC 2017 Beret', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14690, 1103003032, 'Beret Desert Hound', 0, 2450, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14713, 1104003011, 'Pink Death Mask [BUG]', 0, 1, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14718, 1104003012, 'Golden Smile Mask', 0, 1350, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14732, 1104003022, 'Mask Argentina', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14754, 1104003044, 'B. Storm Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14775, 1104003065, 'Latin Puertorico Mask', 0, 750, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14798, 1104003114, 'Blue tiger mask set of Russian army', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14806, 1104003123, 'Garena White Mask (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14831, 1104003154, 'WC 2014 U.S.A Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14854, 1104003177, 'Mask Midnight (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14880, 1104003209, 'Meia-Mask PBIC2015', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14892, 1104003223, 'Mask Arena-Deluxe', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (13855, 702001136, 'Fang Blade Dragon', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14916, 1104003249, 'Skull Half Mask', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14940, 1105003007, 'ChineseHat2', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14959, 1105003014, 'Cowboy Hat (GM)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14981, 1105003032, 'Fes Hat Milkyway', 0, 3200, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15039, 1300009030, 'Fake Rank', 0, 3000, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14987, 1200007000, 'Quick Respawn 30% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14555, 1001002278, 'Captain Chou', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14605, 1103003004, 'SMG Beret', 0, 1, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15010, 1200065000, 'Quick Respawn 20% [E]', 0, 1, 1, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13835, 702001124, 'Fang Blade Arena Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15058, 1300029003, 'Invincible +1 Sec.', 0, 300, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15068, 1300032007, 'Hollow Point Ammo', 0, 1875, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15085, 1300038003, '200% Point Up', 0, 400, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15106, 1300079001, 'Metal Bullet Proof Vest 20%', 0, 999, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15377, 1301000000, 'Angpao', 0, 0, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15376, 1301001000, 'Dual Kunai Gacha TH', 0, 0, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15127, 1301013000, 'Darkblow Package Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15213, 1301230000, 'AUG A3 Venezuela Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15238, 1301280000, 'Dolphin Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15256, 1301312000, 'Premium Kemerdekaan Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15311, 1301648000, 'Random Box Dragunov Elite', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13879, 702001146, 'Death Scythe Demonic', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15321, 1301850000, 'X-MAS Mission Box', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15334, 1500000002, 'Point 2,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15359, 1500000035, 'Point 35,000 [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14399, 1001001007, 'D-Fox (+20% EXP)', 0, 4500, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (13806, 702001106, 'Combat Machete VeraCruz', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14531, 1001002062, 'Infected Acid Paul', 0, 30000, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (15190, 1301180000, 'Sniper Random Box (7D)', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15166, 1301118000, '30.000 Points', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15134, 1301045000, 'Weapon Crate 2', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15285, 1301548000, 'World Cup 2014 Random Box D', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13858, 702001137, 'Amok Kukri PBWC2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12064, 300005052, 'Cheytac M200 GRS', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12068, 300005054, 'SVU S', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12072, 300005055, 'Cheytac M200 GSL', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12065, 300005053, 'L115A1 PBNC', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10843, 100003376, 'Pindad SS2 V5 Kemerdekaan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10844, 100003376, 'Pindad SS2 V5 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10848, 100003377, 'SC-2010 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10852, 100003379, 'AUG A3 Darkness', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10851, 100003378, 'AUG A3 Brightness', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10849, 100003378, 'AUG A3 Brightness', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10854, 100003379, 'AUG A3 Darkness', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10853, 100003379, 'AUG A3 Darkness', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15155, 1301099000, 'Dual Uzi Supply Kit 7d', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15192, 1301195000, 'Medical Kit Random Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10857, 100003380, 'AUG A3 7th Anniversary', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10856, 100003380, 'AUG A3 7th Anniversary', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10832, 100003372, 'SC-2010 PBNC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10835, 100003373, 'Tar-21 Newborn 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12060, 300005050, 'L115A1 PBTN', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12059, 300005050, 'L115A1 PBTN', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12062, 300005052, 'Cheytac M200 GRS', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10187, 100003120, 'AUG A3 PBIC2013', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12066, 300005053, 'L115A1 PBNC', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12067, 300005053, 'L115A1 PBNC', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12165, 300005097, 'Cheytac M200 Carnival', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12069, 300005054, 'SVU S', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12070, 300005054, 'SVU S', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12522, 300005219, 'Tactilite T2 PBWC 2017', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12556, 300005230, 'Cheytac M200 Ramadan', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12301, 300005144, 'Cheytac M200 Silence', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14895, 1104003226, 'Mask Songkran2016', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (13944, 702001178, 'Fang Blade Renegade', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15378, 1301066000, 'Point Gachapon I', 0, 0, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10829, 100003371, 'Pindad SS2 V5 PBNC 2017', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15154, 1301098000, 'Dual Uzi Supply Kit 3d Error', 0, 1, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12063, 300005052, 'Cheytac M200 GRS', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10834, 100003373, 'Tar-21 Newborn 2017', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10841, 100003375, 'AUG A3 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12056, 300005047, 'Dragunov Red', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13937, 702001173, 'Ice Fork Fire', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13935, 702001173, 'Ice Fork Fire', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13946, 702001178, 'Fang Blade Renegade', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10541, 100003268, 'Pindad SS2 V5', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10632, 100003299, 'AUG A3 Supreme', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15379, 1301067000, 'Point Gachapon II', 0, 0, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15194, 1301203000, 'Random Box E-Sport2', 0, 3000, 3, 1, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11020, 100003455, 'SC-2010 PBWC2018', 0, 900, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11018, 100003455, 'SC-2010 PBWC2018', 0, 3650, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11779, 200004482, 'P90 Ext. PBST-ES', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10846, 100003377, 'SC-2010 Kemerdekaan', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10847, 100003377, 'SC-2010 Kemerdekaan', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10850, 100003378, 'AUG A3 Brightness', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11024, 100003458, 'AUG A3 Midnight', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10892, 100003392, 'AUG A3 Rebel', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11025, 100003464, 'SC-2010 Lebaran 2018', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11660, 200004392, 'Kriss S.V Beach Dummy (Picture Dragon)', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11798, 200004498, 'OA93 HALLOWEEN2017', 0, 1, 2592000, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11780, 200004482, 'P90 Ext. PBST-ES', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11808, 200004505, 'OA-93 Shatter Z1', 0, 900, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10840, 100003375, 'AUG A3 Kemerdekaan', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12044, 300005031, 'Winchester M70', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12035, 300005026, 'L115A1 Black', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12050, 300005033, 'L115A1 E-Sport', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12048, 300005033, 'L115A1 E-Sport', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12051, 300005034, 'DSR-1', 28000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12796, 300005314, 'Tactilite T2 Ramadhan 2018', 0, 1799, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13244, 400006155, 'M1887 Latin Championship 2', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13341, 601002050, 'R.B 454 SS8M NonLogo PBSC2013', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11073, 200004014, 'MP5K Silver', 0, 1350, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11270, 200004170, 'Kriss S.V CoupleBreaker', 0, 1399, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11662, 200004392, 'Kriss S.V Beach Dummy (Picture Dragon)', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11762, 200004473, 'P90 Ext. 7th Anniversary', 0, 3650, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13054, 400006087, 'Candy Cane Shotgun X-MAS 2016', 0, 3200, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14029, 702001212, 'Fang Blade Fire Dragon', 0, 1, 259200, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14134, 702015017, 'Dual Bone Knife PBGC 2017', 0, 1000, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14284, 803007057, 'Mummy Grenade', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14573, 1006003044, 'Raptor Mercury Dino (Reinforced Raptor)', 0, 2250, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14411, 1001001017, 'Reinforced Combo Viper Red (+30% Points)', 0, 980, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (11294, 200004187, 'P90 Ext Ongame', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11295, 200004187, 'P90 Ext Ongame', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11297, 200004188, 'Kriss S.V Redemption', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11338, 200004210, 'P90 Mech', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11518, 200004308, 'PP-19 Bizon Russian Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11553, 200004327, 'P90 Ext. Supreme', 0, 1670, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12167, 300005098, 'DSR-1 D.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12218, 300005115, 'Cheytac M200 PBTC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12271, 300005134, 'Cheytac M200 Latin5', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12275, 300005135, 'Cheytac M200 Obsidian', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12273, 300005135, 'Cheytac M200 Obsidian', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12949, 400006052, 'M1887 Summer', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12952, 400006053, 'M1887 PBNC2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12951, 400006053, 'M1887 PBNC2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12955, 400006054, 'SPAS-15 PBNC2015', 0, 4999, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12274, 300005135, 'Cheytac M200 Obsidian', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12284, 300005138, 'Cheytac M200 XMAS2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10022, 100003022, 'M4A1 Wh.', 0, 3699, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10021, 100003022, 'M4A1 Wh.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10042, 100003034, 'G36C SI. +20% [EXP+]', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (10047, 100003035, 'SG 550 S D.', 0, 890, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11161, 200004089, 'P90 GSL', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11163, 200004089, 'P90 GSL', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (11166, 200004098, 'Spectre Reload', 32000, 0, 100, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12282, 300005138, 'Cheytac M200 XMAS2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12285, 300005139, 'Tactilite T2 XMAS2015', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12287, 300005139, 'Tactilite T2 XMAS2015', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12286, 300005139, 'Tactilite T2 XMAS2015', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12288, 300005140, 'Cheytac M200 Monkey', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12290, 300005140, 'Cheytac M200 Monkey', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12289, 300005140, 'Cheytac M200 Monkey', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12291, 300005141, 'Cheytac M200 Arena Normal', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12293, 300005141, 'Cheytac M200 Arena Normal', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12292, 300005141, 'Cheytac M200 Arena Normal', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12296, 300005142, 'Cheytac M200 Arena Deluxe', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12295, 300005142, 'Cheytac M200 Arena Deluxe', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12294, 300005142, 'Cheytac M200 Arena Deluxe', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12299, 300005143, 'Cheytac M200 Vera Cruz 2016', 0, 1, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12298, 300005143, 'Cheytac M200 Vera Cruz 2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12297, 300005143, 'Cheytac M200 Vera Cruz 2016', 0, 1, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (12924, 400006041, 'M1887 Lion-Heart', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13019, 400006076, 'M1887 Newborn2016', 0, 1, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13798, 702001101, 'Fang Blade PBNC2015', 0, 1499, 604800, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13797, 702001101, 'Fang Blade PBNC2015', 0, 899, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (13799, 702001101, 'Fang Blade PBNC2015', 0, 3999, 2592000, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14272, 803007053, 'Water Bomb', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14303, 803007066, 'Soccer Ball Bomb', 0, 450, 259200, 2, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15195, 1301204000, 'Platinum Box', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15196, 1301205000, 'Character Random Box (7D)', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15206, 1301223000, 'AUG A3 Argentina Supply Kit', 0, 3000, 3, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (15367, 1500000200, 'Point 200,000  [NOT VISIBLE]', 0, 1, 1, 1, 1, 2, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (14836, 1104003159, 'GSL 2014 Mask (BUGTRAP)', 0, 790, 259200, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14936, 1105003006, 'Fes Hat', 0, 1230, 604800, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14937, 1105003006, 'Fes Hat', 0, 2340, 2592000, 2, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (14938, 1105003006, 'Fes Hat', 0, 790, 259200, 2, 1, 2, 0, 0, 0);

-- ----------------------------
-- Table structure for shop_set
-- ----------------------------
DROP TABLE IF EXISTS "public"."shop_set";
CREATE TABLE "public"."shop_set" (
  "good_id" int4 NOT NULL DEFAULT 0,
  "item_id" int4 NOT NULL DEFAULT 0,
  "item_name" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "price_gold" int4 NOT NULL DEFAULT 0,
  "price_cash" int4 NOT NULL DEFAULT 0,
  "count" int4 NOT NULL DEFAULT 0,
  "buy_type" int4 NOT NULL DEFAULT 0,
  "buy_type2" int4 NOT NULL DEFAULT 0,
  "buy_type3" int4 NOT NULL DEFAULT 0,
  "tag" int4 NOT NULL DEFAULT 0,
  "title" int4 NOT NULL DEFAULT 0,
  "visibility" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of shop_set
-- ----------------------------

-- ----------------------------
-- Table structure for tournament_rules
-- ----------------------------
DROP TABLE IF EXISTS "public"."tournament_rules";
CREATE TABLE "public"."tournament_rules" (
  "tournament" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "name_exception" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of tournament_rules
-- ----------------------------

-- ----------------------------
-- Table structure for trade_market
-- ----------------------------
DROP TABLE IF EXISTS "public"."trade_market";
CREATE TABLE "public"."trade_market" (
  "id" int4 NOT NULL DEFAULT nextval('trade_id_seq'::regclass),
  "item_id" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "item_name" varchar(255) COLLATE "pg_catalog"."default",
  "item_category" int4,
  "item_duration" varchar(255) COLLATE "pg_catalog"."default",
  "item_price" varchar(255) COLLATE "pg_catalog"."default",
  "item_owner" varchar(255) COLLATE "pg_catalog"."default",
  "day" varchar(255) COLLATE "pg_catalog"."default",
  "month" varchar(255) COLLATE "pg_catalog"."default",
  "year" varchar(255) COLLATE "pg_catalog"."default",
  "valid_duration" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of trade_market
-- ----------------------------
INSERT INTO "public"."trade_market" VALUES (8, '100003011', 'K-201 Ext.', 1, '7776000', '123', '177', '26', '10', '1970', '1 Month');
INSERT INTO "public"."trade_market" VALUES (9, '100003010', 'M4A1 S.', 1, '7776000', '200', '177', '26', '10', '1970', '1 Month');
INSERT INTO "public"."trade_market" VALUES (10, '100003453', 'AUG A3 Maze', 1, '259200', '500', '177', '27', '10', '1970', '1 Month');
INSERT INTO "public"."trade_market" VALUES (11, '100003003', 'M4A1 Ext.', 1, '315576000', '2000', '177', '01', '11', '2021', '1 Month');

-- ----------------------------
-- Table structure for web_api_keys
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_api_keys";
CREATE TABLE "public"."web_api_keys" (
  "id" int4 NOT NULL DEFAULT nextval('api_keys_id_seq'::regclass),
  "user_id" int4,
  "api_key" varchar(40) COLLATE "pg_catalog"."default",
  "level" int4,
  "ignore_limits" int4,
  "is_private_key" int4,
  "ip_addresses" text COLLATE "pg_catalog"."default",
  "date_created" int4
)
;

-- ----------------------------
-- Records of web_api_keys
-- ----------------------------
INSERT INTO "public"."web_api_keys" VALUES (1, 1, 'darkblowpbreborn', 1, 1, 0, '127.0.0.1', 1);

-- ----------------------------
-- Table structure for web_api_limits
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_api_limits";
CREATE TABLE "public"."web_api_limits" (
  "id" int4 NOT NULL DEFAULT nextval('api_keys_limit_id_seq'::regclass),
  "uri" varchar(255) COLLATE "pg_catalog"."default",
  "count" int4,
  "hour_started" int4,
  "api_key" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of web_api_limits
-- ----------------------------

-- ----------------------------
-- Table structure for web_api_logs
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_api_logs";
CREATE TABLE "public"."web_api_logs" (
  "id" int4 NOT NULL DEFAULT nextval('api_keys_logs_id_seq'::regclass),
  "uri" varchar(255) COLLATE "pg_catalog"."default",
  "method" varchar(255) COLLATE "pg_catalog"."default",
  "params" text COLLATE "pg_catalog"."default",
  "api_key" varchar(255) COLLATE "pg_catalog"."default",
  "ip_address" varchar(255) COLLATE "pg_catalog"."default",
  "time" int4,
  "rtime" float4,
  "authorized" varchar(255) COLLATE "pg_catalog"."default",
  "response_code" int4
)
;

-- ----------------------------
-- Records of web_api_logs
-- ----------------------------

-- ----------------------------
-- Table structure for web_download_clientlauncher
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_download_clientlauncher";
CREATE TABLE "public"."web_download_clientlauncher" (
  "id" int4 NOT NULL DEFAULT nextval('web_download_seq'::regclass),
  "file_name" varchar COLLATE "pg_catalog"."default",
  "file_url" varchar COLLATE "pg_catalog"."default",
  "type" varchar COLLATE "pg_catalog"."default",
  "size" varchar COLLATE "pg_catalog"."default",
  "version" varchar(255) COLLATE "pg_catalog"."default",
  "date" date
)
;

-- ----------------------------
-- Records of web_download_clientlauncher
-- ----------------------------
INSERT INTO "public"."web_download_clientlauncher" VALUES (16, 'asdasd', 'https://www.google.com', 'client', '123', '123', '2021-12-20');

-- ----------------------------
-- Table structure for web_email_confirmation
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_email_confirmation";
CREATE TABLE "public"."web_email_confirmation" (
  "id" int4 NOT NULL DEFAULT nextval('web_email_confirmation_id_seq'::regclass),
  "account_id" varchar(255) COLLATE "pg_catalog"."default",
  "email" varchar(255) COLLATE "pg_catalog"."default",
  "token" varchar(255) COLLATE "pg_catalog"."default",
  "valid" int4
)
;

-- ----------------------------
-- Records of web_email_confirmation
-- ----------------------------
INSERT INTO "public"."web_email_confirmation" VALUES (5, 'darkblow005', 'imamrasyidhorizon@gmail.com', '7?TN926HcJtsBd5wC9X3q-F-V4lbOAF?xWBxXbKp0GFEQcID-VZ9nodjrTIE6s7y1DTpJW2V=vCcTAfEOXoKbMTE?sLzu4-G6TF96WRQfpwmd3s0orYc2qp3hIxOODbQ', 1);
INSERT INTO "public"."web_email_confirmation" VALUES (6, 'testakun', 'testakun@gmail.com', 'gbetsaPZISY5not-708j3cdv=OAvXppLO5qXa4NJY3olPl2GS8?A5j-FUwO9j34kIYD=GxAZxvMoJBmdqLw062Iz5eXHbjgs=hFufm3ZnOIXk??Vyp?Bp9Ee?=doEbfv', 1);
INSERT INTO "public"."web_email_confirmation" VALUES (7, 'testakun24', 'testakun24@gmail.com', 'S0dFs0ivKNxkCNto7lWgqBw?QCPgfIWaOom4S?EDyOYU=2KncwErs0NQIMRSRUAAu-mv-3u?kYJfzOPnWm3CikTWoTsNNxxEOlE9S3lchAsx3L1vtkpj5yHjjoY1WY?M', 1);
INSERT INTO "public"."web_email_confirmation" VALUES (8, 'deni24pmk', 'deni@gmail.com', 'XDQOOBeMnTWJKHmAnT?ACF0svhgwgD1NvTr5E9I097t?NPju4DmSw3xi7WTWGMdEqHcpmf?vmpexok9NAXERYrK9egE6lbocliHR?NFpyNC6avz1L00m73fbS?zw9Qp7', 1);

-- ----------------------------
-- Table structure for web_exchangeticket
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_exchangeticket";
CREATE TABLE "public"."web_exchangeticket" (
  "id" int4 NOT NULL DEFAULT nextval('web_exchangeticket_seq'::regclass),
  "item_id" varchar(255) COLLATE "pg_catalog"."default",
  "item_name" varchar(255) COLLATE "pg_catalog"."default",
  "item_count" varchar(255) COLLATE "pg_catalog"."default",
  "item_price" varchar(255) COLLATE "pg_catalog"."default",
  "item_img" varchar(255) COLLATE "pg_catalog"."default",
  "stock" varchar(255) COLLATE "pg_catalog"."default",
  "visible" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of web_exchangeticket
-- ----------------------------
INSERT INTO "public"."web_exchangeticket" VALUES (11, '300005232', 'Barrett M82A1 Premium', '2592000', '3000', 'BARRET_PREMIUM.png', '1', 't');

-- ----------------------------
-- Table structure for web_ipbanned
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_ipbanned";
CREATE TABLE "public"."web_ipbanned" (
  "ip_address" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of web_ipbanned
-- ----------------------------

-- ----------------------------
-- Table structure for web_log
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_log";
CREATE TABLE "public"."web_log" (
  "operating_system" varchar(255) COLLATE "pg_catalog"."default",
  "browser" varchar(255) COLLATE "pg_catalog"."default",
  "ip_address" varchar(255) COLLATE "pg_catalog"."default",
  "visited_page" varchar(255) COLLATE "pg_catalog"."default",
  "actions" varchar(255) COLLATE "pg_catalog"."default",
  "total_visit" varchar(255) COLLATE "pg_catalog"."default",
  "last_visit" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of web_log
-- ----------------------------

-- ----------------------------
-- Table structure for web_quickslide
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_quickslide";
CREATE TABLE "public"."web_quickslide" (
  "id" int4 NOT NULL DEFAULT nextval('web_quickslide_id_seq'::regclass),
  "quickslide_title" varchar(255) COLLATE "pg_catalog"."default",
  "quickslide_description" text COLLATE "pg_catalog"."default",
  "quickslide_img" varchar(255) COLLATE "pg_catalog"."default",
  "quickslide_date" date,
  "quickslide_state" int4
)
;

-- ----------------------------
-- Records of web_quickslide
-- ----------------------------
INSERT INTO "public"."web_quickslide" VALUES (10, 'Welcome To New Troopers', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio corporis eveniet voluptatem aliquid dolore eaque provident. Velit quod tempore dolorum at debitis quasi dolor tenetur, consequuntur nesciunt nisi sint voluptatem.</p>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>
', 'playerpanel-background.jpg', '2021-01-26', 1);

-- ----------------------------
-- Table structure for web_rankinfo
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_rankinfo";
CREATE TABLE "public"."web_rankinfo" (
  "id" int4 NOT NULL DEFAULT nextval('web_rankinfo_id_seq'::regclass),
  "rank" varchar(255) COLLATE "pg_catalog"."default",
  "rank_name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT 0,
  "expend" varchar(255) COLLATE "pg_catalog"."default" DEFAULT 0
)
;

-- ----------------------------
-- Records of web_rankinfo
-- ----------------------------
INSERT INTO "public"."web_rankinfo" VALUES (36, '35', 'Major Grade 5', '2.414.000');
INSERT INTO "public"."web_rankinfo" VALUES (35, '34', 'Major Grade 4', '2.143.000');
INSERT INTO "public"."web_rankinfo" VALUES (34, '33', 'Major Grade 3', '1.902.000');
INSERT INTO "public"."web_rankinfo" VALUES (37, '36', 'Lt. Col. Grade 1', '2.725.000');
INSERT INTO "public"."web_rankinfo" VALUES (38, '37', 'Lt. Col. Grade 2', '3.076.000');
INSERT INTO "public"."web_rankinfo" VALUES (39, '38', 'Lt. Col. Grade 3', '3.467.000');
INSERT INTO "public"."web_rankinfo" VALUES (40, '39', 'Lt. Col. Grade 4', '3.898.000');
INSERT INTO "public"."web_rankinfo" VALUES (41, '40', 'Lt. Col. Grade 5', '4.369.000');
INSERT INTO "public"."web_rankinfo" VALUES (42, '41', 'Col. Grade 1', '4.890.000');
INSERT INTO "public"."web_rankinfo" VALUES (43, '42', 'Col. Grade 2', '5.461.000');
INSERT INTO "public"."web_rankinfo" VALUES (44, '43', 'Col. Grade 3', '6.082.000');
INSERT INTO "public"."web_rankinfo" VALUES (45, '44', 'Col. Grade 4', '6.753.000');
INSERT INTO "public"."web_rankinfo" VALUES (46, '45', 'Col. Grade 5', '7.474.000');
INSERT INTO "public"."web_rankinfo" VALUES (47, '46', 'Brigadier', '8.255.000');
INSERT INTO "public"."web_rankinfo" VALUES (1, '0', 'Trainee', '0');
INSERT INTO "public"."web_rankinfo" VALUES (2, '1', 'Senior Trainee', '2.000');
INSERT INTO "public"."web_rankinfo" VALUES (3, '2', 'Private', '5.000');
INSERT INTO "public"."web_rankinfo" VALUES (4, '3', 'Corporal', '9.000');
INSERT INTO "public"."web_rankinfo" VALUES (5, '4', 'Sergeant', '14.000');
INSERT INTO "public"."web_rankinfo" VALUES (6, '5', 'Staff Sgt. Grade 1', '21.000');
INSERT INTO "public"."web_rankinfo" VALUES (7, '6', 'Staff Sgt. Grade 2', '30.000');
INSERT INTO "public"."web_rankinfo" VALUES (8, '7', 'Staff Sgt. Grade 3', '41.000');
INSERT INTO "public"."web_rankinfo" VALUES (9, '8', 'Sgt. 1st Class Grade 1', '54.500');
INSERT INTO "public"."web_rankinfo" VALUES (10, '9', 'Sgt. 1st Class Grade 2', '70.500');
INSERT INTO "public"."web_rankinfo" VALUES (11, '10', 'Sgt. 1st Class Grade 3', '89.000');
INSERT INTO "public"."web_rankinfo" VALUES (12, '11', 'Sgt. 1st Class Grade 4', '110.000');
INSERT INTO "public"."web_rankinfo" VALUES (13, '12', 'Master Sgt. Grade 1', '134.000');
INSERT INTO "public"."web_rankinfo" VALUES (14, '13', 'Master Sgt. Grade 2', '151.000');
INSERT INTO "public"."web_rankinfo" VALUES (15, '14', 'Master Sgt. Grade 3', '191.000');
INSERT INTO "public"."web_rankinfo" VALUES (16, '15', 'Master Sgt. Grade 4', '224.000');
INSERT INTO "public"."web_rankinfo" VALUES (17, '16', 'Master Sgt. Grade 5', '260.000');
INSERT INTO "public"."web_rankinfo" VALUES (18, '17', '2nd Lt. Grade 1', '301.000');
INSERT INTO "public"."web_rankinfo" VALUES (19, '18', '2nd Lt. Grade 1', '347.000');
INSERT INTO "public"."web_rankinfo" VALUES (48, '47', 'Major General', '9.106.000');
INSERT INTO "public"."web_rankinfo" VALUES (49, '48', 'Lt. General', '10.037.000');
INSERT INTO "public"."web_rankinfo" VALUES (50, '49', 'General', '11.058.000');
INSERT INTO "public"."web_rankinfo" VALUES (51, '50', 'Commander', '12.179.000');
INSERT INTO "public"."web_rankinfo" VALUES (55, '51', 'Hero', '50.000.000');
INSERT INTO "public"."web_rankinfo" VALUES (56, '55', 'Garuda Emperor 1', 'NULL');
INSERT INTO "public"."web_rankinfo" VALUES (57, '56', 'Garuda Emperor 2', 'NULL');
INSERT INTO "public"."web_rankinfo" VALUES (20, '19', '2nd Lt. Grade 3', '398.000');
INSERT INTO "public"."web_rankinfo" VALUES (58, '57', 'Garuda Emperor 3', 'NULL');
INSERT INTO "public"."web_rankinfo" VALUES (59, '58', 'Garuda Emperor 4', 'NULL');
INSERT INTO "public"."web_rankinfo" VALUES (61, '59', 'Garuda Emperor 5', 'NULL');
INSERT INTO "public"."web_rankinfo" VALUES (62, '52', 'Bomber', '-1');
INSERT INTO "public"."web_rankinfo" VALUES (63, '53', 'Game Master', '-1');
INSERT INTO "public"."web_rankinfo" VALUES (64, '54', 'Moderator', '-1');
INSERT INTO "public"."web_rankinfo" VALUES (21, '20', '2nd Lt. Grade 4', '454.000');
INSERT INTO "public"."web_rankinfo" VALUES (22, '21', '1st Lt. Grade 1', '516.000');
INSERT INTO "public"."web_rankinfo" VALUES (23, '22', '1st Lt. Grade 2', '584.000');
INSERT INTO "public"."web_rankinfo" VALUES (24, '23', '1st Lt. Grade 3', '658.000');
INSERT INTO "public"."web_rankinfo" VALUES (25, '24', '1st Lt. Grade 4', '738.000');
INSERT INTO "public"."web_rankinfo" VALUES (26, '25', '1st Lt. Grade 5', '824.000');
INSERT INTO "public"."web_rankinfo" VALUES (27, '26', 'Capt. Grade 1', '917.000');
INSERT INTO "public"."web_rankinfo" VALUES (28, '27', 'Capt. Grade 2', '1.017.000');
INSERT INTO "public"."web_rankinfo" VALUES (29, '28', 'Capt. Grade 3', '1.124.000');
INSERT INTO "public"."web_rankinfo" VALUES (30, '29', 'Capt. Grade 4', '1.238.000');
INSERT INTO "public"."web_rankinfo" VALUES (31, '30', 'Capt. Grade 5', '1.359.000');
INSERT INTO "public"."web_rankinfo" VALUES (32, '31', 'Major Grade 1', '1.510.000');
INSERT INTO "public"."web_rankinfo" VALUES (33, '32', 'Major Grade 2', '1.691.000');

-- ----------------------------
-- Table structure for web_settings
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_settings";
CREATE TABLE "public"."web_settings" (
  "id" int4 NOT NULL,
  "meta_author" varchar(255) COLLATE "pg_catalog"."default",
  "meta_description" varchar(255) COLLATE "pg_catalog"."default",
  "meta_keywords" varchar(255) COLLATE "pg_catalog"."default",
  "project_name" varchar(255) COLLATE "pg_catalog"."default",
  "project_logo" varchar(255) COLLATE "pg_catalog"."default",
  "project_icon" varchar(255) COLLATE "pg_catalog"."default",
  "running_text" varchar(255) COLLATE "pg_catalog"."default",
  "server_condition" varchar(255) COLLATE "pg_catalog"."default",
  "website_condition" varchar(255) COLLATE "pg_catalog"."default",
  "webshop" varchar(255) COLLATE "pg_catalog"."default",
  "trade_market" varchar(255) COLLATE "pg_catalog"."default",
  "exchange_ticket" varchar(255) COLLATE "pg_catalog"."default",
  "voucher" varchar(255) COLLATE "pg_catalog"."default",
  "forgot_password" varchar(255) COLLATE "pg_catalog"."default",
  "register" varchar(255) COLLATE "pg_catalog"."default",
  "attendance" varchar(255) COLLATE "pg_catalog"."default",
  "redeemcode" varchar(255) COLLATE "pg_catalog"."default",
  "change_email" varchar(255) COLLATE "pg_catalog"."default",
  "event_ticket" varchar(255) COLLATE "pg_catalog"."default"
)
;
COMMENT ON COLUMN "public"."web_settings"."event_ticket" IS 'Ticket ID';

-- ----------------------------
-- Records of web_settings
-- ----------------------------
INSERT INTO "public"."web_settings" VALUES (1, '[DEV] EyeTracker', 'Darkblow Studio', 'DarkblowPB', 'Darkblow Test', '4aa4284c11b916f2cb87b38eb2eca50f.png', 'Darkblow-Logos.ico', 'Testing', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '0', NULL);

-- ----------------------------
-- Table structure for web_tokenkey
-- ----------------------------
DROP TABLE IF EXISTS "public"."web_tokenkey";
CREATE TABLE "public"."web_tokenkey" (
  "id" int4 NOT NULL DEFAULT nextval('web_tokenkey_id_seq'::regclass),
  "token" varchar(255) COLLATE "pg_catalog"."default",
  "is_valid" int4
)
;

-- ----------------------------
-- Records of web_tokenkey
-- ----------------------------
INSERT INTO "public"."web_tokenkey" VALUES (35, '30zOsyF5Z6fOHsqmtZQgR9WEOqvfljVdA25pDPpyJNfe6AzzMyq28W0xdZevRkOV', 0);
INSERT INTO "public"."web_tokenkey" VALUES (36, '139Tc5TmXM85hjOF2BbEmfdLFyDRXSqAGDiMh0BfQmmHSFKtfZvGj7eUz0ZM82Ya', 0);
INSERT INTO "public"."web_tokenkey" VALUES (37, '3ikZXlVWDFHSh2Qh4uKdZ69HmqgeCJ4MMYJB3LCRoxK1th9xRZ50lpfGvbeSWaxy', 0);
INSERT INTO "public"."web_tokenkey" VALUES (5, 'e9UupLwzsBFVggThdHX3r0O7zwFQb9VMiqt5GaxIsM2E3OSPsuLeNs1qCHLzHKEI', 0);
INSERT INTO "public"."web_tokenkey" VALUES (6, 'cdN2cEu3MEpCmHk4KgOSAYlsCb0WrTciWF1SMMHLA0RZEUBq1Or46NfQdy8DoWsT', 0);
INSERT INTO "public"."web_tokenkey" VALUES (7, 'wNid4Ccso0kdaVFAOZvLk1fucJVmyTQjvFz10Hf5qhafVaGVFjH4WLpJ73g2f2eS', 0);
INSERT INTO "public"."web_tokenkey" VALUES (8, 'JbAbHYfZzSw2g30fqsskMFgPPPVZPKB9DJBM2yADyUwuwrhHBq5MOozwpbaRX09V', 0);
INSERT INTO "public"."web_tokenkey" VALUES (9, '5ffgO6MwTcxeEo11MMJP4CWqP68dAxoaA8Zfi1dtSvmfX2sCyFjABo8Y2qFM3XYA', 0);
INSERT INTO "public"."web_tokenkey" VALUES (10, 'joamDrqRT6Z6zYZb42Yajj5f4i8k6xeFV5Qoe1RlBiDCf0KryPkVmKyqT3XsL8WQ', 0);
INSERT INTO "public"."web_tokenkey" VALUES (11, '41vEWoG2t6k9A6GSZ2dYUZ48qDkR1N8LYeBZIM3zUCDsCTq3Y55j07voPj2GeJGP', 0);
INSERT INTO "public"."web_tokenkey" VALUES (12, 'BEzl6BzkFpHwuTdOPZhmYRhZpvBudLidUeFIWscCqNWSy841Y9ipkOIbNmaJUOh0', 0);
INSERT INTO "public"."web_tokenkey" VALUES (13, 'or2k14VKRr7Hixi205GDVICIZAmAUszvGMoSe5JOJ5jdUpac84HgNI2Md5c2hZpX', 0);
INSERT INTO "public"."web_tokenkey" VALUES (14, 'd0x5QEJpgZh0cL3LdisF5wivSNWkCZySW9u2JuPZ9N8qA7sWqVZxeCVAtaI6sNpS', 0);
INSERT INTO "public"."web_tokenkey" VALUES (15, '2etxTcXDtr5U6ZehSgzz5kGtU5aQMfmFaw3lgGx1Plm26AMp7e3C9yeZcT9aBZ3c', 0);
INSERT INTO "public"."web_tokenkey" VALUES (16, 'Slhf5vtXWi2X0Xyqyl858TyvsagbLLtI7phw3e0E14VOk7Juz1wfbQPe2PWEOjXI', 0);
INSERT INTO "public"."web_tokenkey" VALUES (17, 'izOpOzwTJJL99qh2ikArEB8L8KC74iqzTWMOLke5SlLvt7Hel0OPGCHXz5YRNQZT', 0);
INSERT INTO "public"."web_tokenkey" VALUES (18, 'mFHeiS7x51Bz1TOukebSM0xtDLyAVYDsCw1lkVxXuqXykEKBtcdy9rwQ5RCc7Dor', 0);
INSERT INTO "public"."web_tokenkey" VALUES (19, 'qjG4w5KQBd8s2DZLogcP4oC4KVYKoJK4XS6zYy9bQfzSSWdDFciNHtLrPoKtFLkj', 0);
INSERT INTO "public"."web_tokenkey" VALUES (20, '4uw6S3mqTqlllPPj9pE3CKcPqJbAwAhqUaX5pmRdoZik7O2IJPuXoZxSYaoY0Wul', 0);
INSERT INTO "public"."web_tokenkey" VALUES (21, 'OH0Nv4Iz28zxMvuljEll8ddivt608Qdlm9Bx2LYuYXtLVFi48iHtKMEbjVQJgBER', 0);
INSERT INTO "public"."web_tokenkey" VALUES (22, 'PpWYFSVYDU9KHfvj0AedVdjANGEgNRtX3xQgHZteTwDFlXu7Nirka2C9SZ2DTFFE', 0);
INSERT INTO "public"."web_tokenkey" VALUES (23, 'FRXvvayS0uUwUAR5wHKiNTalEW5m3dAHxYvEFSB1kh5y5Wq13IKRyT6wby2iGqHX', 0);
INSERT INTO "public"."web_tokenkey" VALUES (24, 'ZuBGOM9SdOy9TRkpGfWaq9yj02YgM896zN82ReVOYNFmuWKN7NOa5dV17yYO9q7m', 0);
INSERT INTO "public"."web_tokenkey" VALUES (25, 'IIWKRRmzxEH4hMT1RhchgeecLDfrSob2DE7KT7CbqYSWSVcCZKaevDRLjeA4Dssx', 0);
INSERT INTO "public"."web_tokenkey" VALUES (26, 'f1hUoFSjSH0bzEHVCaEf1GLVjCumCrE6iuq6Suy47rmEMoQdo0BzyZwa942hmzxc', 0);
INSERT INTO "public"."web_tokenkey" VALUES (27, 'lIy2V0aJoIKkprUY5KlH8l9fgXWBTrbEWvc9rCyamm9Ej3dNsGguwsFFQgyvbMWq', 0);
INSERT INTO "public"."web_tokenkey" VALUES (28, 'z6GjOd7PVV5TAoMlK2Io3jE6mI3lrtZbCSaZSdbk93h2rfi9Uc3CSbVr7LGfyloj', 0);
INSERT INTO "public"."web_tokenkey" VALUES (29, 'q3xj5VGHE7J6j7ogOt1CoWscNDLMIZPAxqG46welVYdGjeq0JLMuz6RAFEjN9Hsw', 0);
INSERT INTO "public"."web_tokenkey" VALUES (30, 'dg3R5Wv2XOeYgp84uXNZj80mc5UsUzRBEz2TMa4bX96IU9sDGj2Z2llvzxaSro3v', 0);
INSERT INTO "public"."web_tokenkey" VALUES (31, 'Cil6T6PcO4FgqtSW2AcrhfHN4u7WyRiQg2m6Djao4IJuGebQxxUBmAlUYAR2s4Ko', 0);
INSERT INTO "public"."web_tokenkey" VALUES (32, 'BS55ZBke8duQwFc39LuBJpscvbR4Ghrdqw7PwGQdE9ZXdRexCJhCplqxjTsG7Amv', 0);
INSERT INTO "public"."web_tokenkey" VALUES (33, 'eqYBbYhKKWHM33Pg1wq5mOasGdajXAOMOwtYoAGDw9Uh33712rAEjxGMI6YGlFDv', 0);
INSERT INTO "public"."web_tokenkey" VALUES (34, 'o1toXTNsxzLIpVKNmaDdlMXLf12WZxvFr1oLpRVP11cvWdr86MIq2SNm1HX9kfAa', 0);
INSERT INTO "public"."web_tokenkey" VALUES (38, 'Q3VB8VXK1oimBYylgwNyP1fOHyGEqZ0VNTW704moqHlBlGS624pJ777P6VZ4QOsu', 0);
INSERT INTO "public"."web_tokenkey" VALUES (39, 'fO2gRmlgNtaEzjgeFzq083Hk2yueV2MEYKp0JbBHmxHBB7xk3o24DJv38Gdu8jLC', 0);
INSERT INTO "public"."web_tokenkey" VALUES (40, 'uiscGlI9jVewSt47rIswGZsYGbRmGqSoEH0H8kmyPEXdiPbzK7O1COL0CAuMm4Si', 0);
INSERT INTO "public"."web_tokenkey" VALUES (41, 'qmy8CXDN93GDlfSLEPjltRRTR60msTa1W1bfs5Zp5NGfFEEWevR5oeTFpooUor6U', 0);
INSERT INTO "public"."web_tokenkey" VALUES (42, 'Jc95Rf1ETRWL4Ell4d6mKd2EH25xUdQ0OIOatTlemMjE1rQH1JOAt1XidGv9AyL9', 0);
INSERT INTO "public"."web_tokenkey" VALUES (43, 'UBB9PDombP7HWKpAxaVtUPzkVKbEoTquq37S0g2j74ffjJOMTIyFWNQql38Mxl9u', 0);
INSERT INTO "public"."web_tokenkey" VALUES (44, 'TAaRWeYcUG68eqRAapJp7jr9IiKBdJOsqeCCWypiuFPYeG6aoUCO15uIpqq7LjHG', 0);
INSERT INTO "public"."web_tokenkey" VALUES (45, 'czwVQpSgiEUawdBiYjd6tbAJHebu10gLVDESde3xLHRxJabRK2uLjNwT8LbHs8OR', 0);
INSERT INTO "public"."web_tokenkey" VALUES (46, 'ogQM3MWf5OCWRPgPf3PCLR97NToZQLr9zU7C7FcLlc9cYUYakggSl2U356xAkPPT', 0);
INSERT INTO "public"."web_tokenkey" VALUES (47, 'YgGxGFHr3tF9LaSG37eNzLGlIH9dT8D4IAB2DK07ifbJRr0WXgmqPrFeRK6AlgQL', 0);
INSERT INTO "public"."web_tokenkey" VALUES (48, 'J7TaPdrub1ESoimBKMkqsIPOuM33gfselcm9Jk5y1UabMMG7ZUyhe2hiHm5YoN0U', 0);
INSERT INTO "public"."web_tokenkey" VALUES (49, '05eFrmv4LRsqRTx5Yc0qR1jzSa7SSfr5zIkI2Uz4IKwmzgalTL3dUOx1ZbB1XD95', 0);
INSERT INTO "public"."web_tokenkey" VALUES (50, '9uJx5o0YwzooWEGLiEbNPXAPBxf7J4ahcwY1ibDI4AD1aZhtMtWs80Vspv4A0JBw', 0);
INSERT INTO "public"."web_tokenkey" VALUES (51, '3DLStj2CeBpEcLDcEpRi1WHYCj7e1T36tVMzyZCfLa0IYwZfdkwXWz2we5xaWQ57', 0);
INSERT INTO "public"."web_tokenkey" VALUES (52, 'PL6zup2BuftKQFaXF3V1mMUzbgSIG0zpXHjlV09r0qsiA00YSSkZKxXHh0wzazUp', 0);
INSERT INTO "public"."web_tokenkey" VALUES (53, '5mNCsx54XMZlkACmZ1BgGJ6Fv6FLFMbMokiGpCJt2ldvs8CX0Um7rQgM3SOlq0ZO', 0);
INSERT INTO "public"."web_tokenkey" VALUES (54, 'KhhGQ34C6jWqgpc6es0kSlWbsEFyZQd5ZcYkpC9jyY7SaxZPiudaKW8o7lNP4q46', 0);
INSERT INTO "public"."web_tokenkey" VALUES (55, 'jhNAXfT0BIobY4jZbbFV381fZ5bOjvmhB7TbU5JrYaQh8BJiU4NTkQQwuJYVYzkR', 0);
INSERT INTO "public"."web_tokenkey" VALUES (56, 'WIEP04y5ygw4w67ZdKKChkGcvlyN8OfHt0cTKzcCLzkUC5iS1kttW5wHT914jK54', 0);
INSERT INTO "public"."web_tokenkey" VALUES (57, 'kB8ulllqiwkXyG0KOcAwCXxDfMKwVjO1vFtWqHAywe8ZIkDLOQLpTFxQVDzAokAA', 0);
INSERT INTO "public"."web_tokenkey" VALUES (58, 'mYNlN2Tzg9twK7ckU1Qh4sS6suUsxCPcMpGkTcUzrXkyLigHCxBEiXzwCCbOrLJV', 0);
INSERT INTO "public"."web_tokenkey" VALUES (59, 'r4N6CpZhMKG9r4lwTudlDYYLiyLo3wrLM309CZx1zIFtL0O5Jww7NGXxx5gBBLQs', 0);
INSERT INTO "public"."web_tokenkey" VALUES (60, 'gED9FKexorU1MJAxpDrPxblg4X8r02KQmdQgIPG7q8GjiTdxFxzeHjV7fcu0PtRT', 0);
INSERT INTO "public"."web_tokenkey" VALUES (61, '3ILXbcN6QKEMswgNM7uTfIaLNXH3t5u7hh5HeuiA7Ghr8qgWb6aVp7klxB5P0iU9', 0);
INSERT INTO "public"."web_tokenkey" VALUES (62, 'vewk7LVaw8fhD4xB7gUuebXKEtCMOvI4jsxwmkuYyfbEEOWCiLgUesGBICwUvFip', 0);
INSERT INTO "public"."web_tokenkey" VALUES (63, 'lvSRD2pULlILYco2uNYJboUx2PNC79wGjtdSBWFoc267DcLFel1RXsxMoZk0QfWb', 0);
INSERT INTO "public"."web_tokenkey" VALUES (64, 'gydYtKR8C1xCrzV91msxdsP2Xeooy0o0lNYD0rIMjKXAGeyd0Qus5s4UMwmJAJaR', 0);
INSERT INTO "public"."web_tokenkey" VALUES (65, '571l0Eu5gUN2Gc9aWoyfCEQ1W5Zd18DVeJgX2zymmV716GamHAY518dop6wJlFFg', 0);
INSERT INTO "public"."web_tokenkey" VALUES (66, 'h1I8OAeif2bfQd7AaD6UuE0NjU7K41x7UBbKy0gs4NtWwWMJED2LmK2g9g7dpVqy', 0);
INSERT INTO "public"."web_tokenkey" VALUES (67, 'EJLNfvNjJe8PaK421uAqcFg5DWg2zvhizPygZQ0WBgSKIgAXbCoa0hMaI7GgZANz', 0);
INSERT INTO "public"."web_tokenkey" VALUES (68, '8eyp0rewE6zyYy5hbEJHlzdLQsgBQhCW1pmTVrpUiLAfNgBP926bshi9qZkdxilx', 0);
INSERT INTO "public"."web_tokenkey" VALUES (69, 'dhxTrNM2Se5Gfb1M5EblB18P7zWuzY0844WAMqLWNQNqcusFDGW1CBzqXkH0XUMT', 0);
INSERT INTO "public"."web_tokenkey" VALUES (70, 'ZIWeFkqNLfK5f4xxsyIPmGOqXC5yoKcIvQWHDVxcKiB66lOzamyumm4flcUzo5oN', 0);
INSERT INTO "public"."web_tokenkey" VALUES (71, 'Fc0c9StdjBLAAMzppjyg9Pp3g3iEExHf61q9TVsmx0vuLwxeti08HHO4QkI1hJYh', 0);
INSERT INTO "public"."web_tokenkey" VALUES (72, 'gr7S7vJCqN279khxYSEOTJm88RlfczrQslYfobKwlhPtSuebujE1Lcs7aFYIl23o', 0);
INSERT INTO "public"."web_tokenkey" VALUES (73, 'utq246FbQKkDBClueWaFtFO4U4XsDvS6lNoGzGqv4t1HgffO6qBI0Za3CKRjxqdi', 0);
INSERT INTO "public"."web_tokenkey" VALUES (74, 'VO5jDH33L4mRwiPumUudKITX0DBlPAb2vCeXqmYP8EFOzfCoreIPhxOq9viWYx6h', 0);
INSERT INTO "public"."web_tokenkey" VALUES (75, 'L74X7Xoi6P5ugvO1GgrOkZYooKXlHk2C4IbC2Tcd8GHfVGbL5ROWHBzmMNksSWQI', 0);
INSERT INTO "public"."web_tokenkey" VALUES (76, 'vmeYgJzK2mc5p2iBZkyS8I3PrvILHSbCxcGoLsttHfKfMljjII0xAulvPmS7Bk85', 0);
INSERT INTO "public"."web_tokenkey" VALUES (77, '1z1et5iX540Nuz3c1VNqhQ1vewG8LbF5Miw0fJgTkZF4pakyUEWu4kweg6c337Fw', 0);
INSERT INTO "public"."web_tokenkey" VALUES (78, 'tjfjRvPZvk4vNBZJrKUOvHrfSAw8iZ8xLhQKWCqLuf6AGIU4JZBqzEh76s7KSlHx', 0);
INSERT INTO "public"."web_tokenkey" VALUES (79, 'N1rKmKNfg7xvFbZeNfYUwE7yysSUDDIOlXemPTYEFflrbNLdc79roGZVYe4MarAu', 0);
INSERT INTO "public"."web_tokenkey" VALUES (80, '5HhaZIyvgFxquIfqRoQ25PKTFeW3ubyigIp54wxT4xNq6vOsJMyhmEiPXOMZC3Rx', 0);
INSERT INTO "public"."web_tokenkey" VALUES (81, '6MSVEBfZPsvmQjHMc5B0M3t1hrRK7i0QYtaC6zIZl4Y4Cpp1WmKXwsccK530kxLc', 0);
INSERT INTO "public"."web_tokenkey" VALUES (82, 'ctSwgNZBi5bC8TU09tHpIoUvkHQMT4G2A07wwuIHD6yWafc2rMocFv3SXeVCIGy0', 0);
INSERT INTO "public"."web_tokenkey" VALUES (83, 'zdG2odO2lqij8y4h51bLE4ZdHABD80aO0VgmR9IzjgrRIed6hNX6z229bbHwbJY1', 0);
INSERT INTO "public"."web_tokenkey" VALUES (84, 'oqQ8t2q7XECKG1ZENpMxaHHDVDS1MvSr4eG7vdpdvae6tuaGiLQeM0pSVwzSt0JY', 0);
INSERT INTO "public"."web_tokenkey" VALUES (85, 'swo9UdcpgLcIXGFUkjxZ3HT0f3h03SEqc1y2ApJ1gfpGoYFVDGBMu5WRErK33Uvg', 0);
INSERT INTO "public"."web_tokenkey" VALUES (86, 'QCsOuIwBsHxSp8iCabaykhA2aUWsIMrwk24fglrsjGtG2k0k5bNOHH8C5D9xJF9f', 0);
INSERT INTO "public"."web_tokenkey" VALUES (87, 'v0Diak3R0YkTA9eBQClFK504gbjTaNTcqLTVlHoOQHvAyKG8skjWpqMLY7uNWFM4', 0);
INSERT INTO "public"."web_tokenkey" VALUES (88, 'YIySDKvB3Iooq962OBDdKBkj8U1uHSzA8k058XAgNsRH67A61HuuUvc5K60eLRik', 0);
INSERT INTO "public"."web_tokenkey" VALUES (89, 'yiPhsZEUb2aCaPNqFa67E9CeDACqHLAujcLS0uFLKKqvpco5Oolud7se7UoA0OCk', 0);
INSERT INTO "public"."web_tokenkey" VALUES (90, 'OtYP03yrHoo1EurkMl3ElN0mu3A0gvMitxEvE3LUB1xdyAF3vjyLmHRPltDuMPm7', 0);
INSERT INTO "public"."web_tokenkey" VALUES (91, 'XPOJZJ0Y34fmCVDEzDcZtKB3cFmAbdEPoTQDul7XOZ8u7XGKAlIIdsiCLFmdQQw6', 0);
INSERT INTO "public"."web_tokenkey" VALUES (92, '5eazoDIPfJly8MxA6d8Pq1tEZrFwIzRKiQcZdwyxEhNF4HzKNLsd4CtMV0NeaP5R', 0);
INSERT INTO "public"."web_tokenkey" VALUES (93, 'GkWKZ2SOS9DJ4e5X0foXjMvv6YGDmRxFhrfFKSuKyi5oVHlOHu7g6juBXO5fqe29', 0);
INSERT INTO "public"."web_tokenkey" VALUES (94, 'qfKt4ZLQD8kAFcIxNdU1W76YyCWJxbxkybCx8e2GujaMhtRKkkCLjQ5fSv9VSEDm', 0);
INSERT INTO "public"."web_tokenkey" VALUES (95, 'Q0GXYkIdpjQI1eTPOIvod2XCLpaCfTjMhWRsC8WZhF4WOUaPsck6N7xtp6VgS6ck', 0);
INSERT INTO "public"."web_tokenkey" VALUES (96, 'aeEYSfIFtk6EeXRmgfFaC9w6IKe5Qi4BWezhwG8W2lhM62pSjZHz4RlB24txhlYh', 0);
INSERT INTO "public"."web_tokenkey" VALUES (97, 'KSDz6RMPDw50IDBwjNw4Q7MMe5rOSI2MHE06PtUfaOhp9DiyQQPCaPJeKlCNZsbx', 0);
INSERT INTO "public"."web_tokenkey" VALUES (98, 'ZJlUSy5vhAtIxcZxFVq44uRKrEYW6Yyd5EvNqhlEwu5tPjfmzeoR125gtFdCyqYo', 0);
INSERT INTO "public"."web_tokenkey" VALUES (99, 'pPzYpXUfbdNHRIoa1kxsTzfmNiMSzspyPjlqqg5v1tqorw8yUyJZIVvwHwQbjhcP', 0);
INSERT INTO "public"."web_tokenkey" VALUES (100, '2uLbhQyAhCVfzKY2rDSgmLEAfTp07QbLNPbYsAjwc9qGB4swJLhDsKV4OUgGaog9', 0);
INSERT INTO "public"."web_tokenkey" VALUES (101, 'Aqqr7sYdGdTNwB61fTKmHbhaCXWjW0plMGzwULtHxQ4HjHzoQdWYYr1UcWyQvZWl', 0);
INSERT INTO "public"."web_tokenkey" VALUES (102, 'l7IaOOxEW6mNwRHgj8qvW55GDPgobQEGw3d2xxf0Q6Tf0GOR7CEMEsbMsXdeBLLE', 0);
INSERT INTO "public"."web_tokenkey" VALUES (103, 'zWAe6BRy0Sx1W5RUMCo9MpS20SyGqv1zWz3Z8iZrjOl7cN9fbTBFZVreKfOMCyQ7', 0);
INSERT INTO "public"."web_tokenkey" VALUES (104, 'kIvgJvOfmhI4whDIQiBH8sAZluuMDIEHIZaBZNewev0FZrpKkrXaZXhlHK6JqzoF', 0);
INSERT INTO "public"."web_tokenkey" VALUES (105, 'mG3BKfDLM3ei8fzwSgE6i6xOzY1aZFFcA6JeEmEfCOO9ScqTAS5cc76tR9voBpji', 0);
INSERT INTO "public"."web_tokenkey" VALUES (106, 'lHgCTR4P0f0qCl8CSJoZSgqM3hFJzRaAjK4XlI7tNJRuAA1P3mcL6rWlVKdRYbza', 0);
INSERT INTO "public"."web_tokenkey" VALUES (107, 'o793WwJh9s5peYzBSvjEBo7a41AlTV7SxMQhPbKJT7ifv2QiMZ6CtTSo93s1tB21', 0);
INSERT INTO "public"."web_tokenkey" VALUES (108, 'qiKOz9PIIYLMwCBoJxTjIWqPSUbm9mDIMygEJIT51RdSUJZQayTzBV2yfmaY9yGa', 0);
INSERT INTO "public"."web_tokenkey" VALUES (109, 'lRcV3xVXfQ7pVm4el8KeYrG5qzL4RayEqSdTbDktH6wICH1cMsZyRWRQ7psasLGV', 0);
INSERT INTO "public"."web_tokenkey" VALUES (110, 'GEO2H63Fjy8SSOg3VP26UjaRAaikR0Qvr05UqXwQVt0EUDo3tvOiwm4z0AZeV46f', 0);
INSERT INTO "public"."web_tokenkey" VALUES (111, 'OxIs5NG7dYQ30zzbPVxLrGT1syGyaS5YStQwVrcvOMzEERb27s28BIN9MwYN9GSF', 0);
INSERT INTO "public"."web_tokenkey" VALUES (112, 'gAC5wV5Qfytif5YyRcrtxi3YdwHGIGQXCzL2lBO6O8ZEfVrDSe2skoplWZ7mEJNZ', 0);
INSERT INTO "public"."web_tokenkey" VALUES (113, 'mi76Ftf5RibcHqEauCfw1WL16AazgQkkmMqtMUyBgDjR14QF8JoxQ5bGwt32laJV', 0);
INSERT INTO "public"."web_tokenkey" VALUES (114, 'PYSkOE9AtsycFdMTlCL4t5gDfx8Hm5VULXybZCLcTrHActbgheOrcQlje40D3H1B', 0);
INSERT INTO "public"."web_tokenkey" VALUES (115, '9lcyLABAXvqrDo5AA5MwClBhAyEOFY0hCZsvmMtK35HC0IfbtkpQhh9uoVVdaQzO', 1);

-- ----------------------------
-- Table structure for webshop
-- ----------------------------
DROP TABLE IF EXISTS "public"."webshop";
CREATE TABLE "public"."webshop" (
  "id" int4 NOT NULL DEFAULT nextval('webshop_id_seq'::regclass),
  "webshop_itemid" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "webshop_itemname" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "webshop_itemdescription" text COLLATE "pg_catalog"."default",
  "webshop_itemrating" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemcategory" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "webshop_itemstatus" varchar(1) COLLATE "pg_catalog"."default" DEFAULT 1,
  "webshop_totalbuy" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemimg" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemcount_3days" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "webshop_itemprice_3days" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 0,
  "webshop_itemcount_7days" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemprice_7days" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemcount_30days" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemprice_30days" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemcount_permanent" varchar(255) COLLATE "pg_catalog"."default",
  "webshop_itemprice_permanent" varchar(255) COLLATE "pg_catalog"."default"
)
;
COMMENT ON COLUMN "public"."webshop"."webshop_itemid" IS 'ITEM ID';
COMMENT ON COLUMN "public"."webshop"."webshop_itemname" IS 'ITEM NAME';
COMMENT ON COLUMN "public"."webshop"."webshop_itemrating" IS 'Stars Rating For Acc';
COMMENT ON COLUMN "public"."webshop"."webshop_itemcategory" IS 'Categori : Main / Character & Headgear / Item';
COMMENT ON COLUMN "public"."webshop"."webshop_itemstatus" IS 'Status : 1 = Active, 2 = Disabled';
COMMENT ON COLUMN "public"."webshop"."webshop_totalbuy" IS 'Automatic Filled If Players Buying The Item';
COMMENT ON COLUMN "public"."webshop"."webshop_itemcount_3days" IS '3 Days Count : 259200';
COMMENT ON COLUMN "public"."webshop"."webshop_itemprice_3days" IS '3 Days Duration Price';
COMMENT ON COLUMN "public"."webshop"."webshop_itemcount_7days" IS '7 Days Count : 604800';
COMMENT ON COLUMN "public"."webshop"."webshop_itemprice_7days" IS '7 Days Duration Price';
COMMENT ON COLUMN "public"."webshop"."webshop_itemcount_30days" IS '30 Days Count : 2592000';
COMMENT ON COLUMN "public"."webshop"."webshop_itemprice_30days" IS '30 Days Duration Price';
COMMENT ON COLUMN "public"."webshop"."webshop_itemcount_permanent" IS 'Permanent Count : 1';
COMMENT ON COLUMN "public"."webshop"."webshop_itemprice_permanent" IS 'Permanent Duration Price';

-- ----------------------------
-- Records of webshop
-- ----------------------------
INSERT INTO "public"."webshop" VALUES (14, '300005232', 'Barrett M82A1 Premium', 'The Barrett M82A1 rifle was used in 2002 as a platform for the experimental OSW (Objective Sniper Weapon) prototype. This weapon was fitted with a shorter barrel, and fired 25 mm high-explosive shells developed for the 25×59 mm OCSW (Objective Crew Served Weapon) automatic grenade launcher.', '2.5', '1', '1', '0', 'BARRET_PREMIUM.png', '259200', '300', '604800', '600', '2592000', '1200', '1', '2000');
INSERT INTO "public"."webshop" VALUES (15, '300005232', 'Barrett M82A1 Premium', 'The Barrett M82A1 rifle was used in 2002 as a platform for the experimental OSW (Objective Sniper Weapon) prototype. This weapon was fitted with a shorter barrel, and fired 25 mm high-explosive shells developed for the 25×59 mm OCSW (Objective Crew Served Weapon) automatic grenade launcher.', '2.5', '1', '1', '0', 'BARRET_PREMIUM.png', '259200', '300', '604800', '600', '2592000', '1200', '1', '2000');
INSERT INTO "public"."webshop" VALUES (16, '300005232', 'Barrett M82A1 Premium', 'The Barrett M82A1 rifle was used in 2002 as a platform for the experimental OSW (Objective Sniper Weapon) prototype. This weapon was fitted with a shorter barrel, and fired 25 mm high-explosive shells developed for the 25×59 mm OCSW (Objective Crew Served Weapon) automatic grenade launcher.', '2.5', '1', '1', '0', 'BARRET_PREMIUM.png', '259200', '300', '604800', '600', '2592000', '1200', '1', '2000');
INSERT INTO "public"."webshop" VALUES (17, '300005232', 'Barrett M82A1 Premium', 'The Barrett M82A1 rifle was used in 2002 as a platform for the experimental OSW (Objective Sniper Weapon) prototype. This weapon was fitted with a shorter barrel, and fired 25 mm high-explosive shells developed for the 25×59 mm OCSW (Objective Crew Served Weapon) automatic grenade launcher.', '2.5', '1', '1', '0', 'BARRET_PREMIUM.png', '259200', '300', '604800', '600', '2592000', '1200', '1', '2000');
INSERT INTO "public"."webshop" VALUES (18, '300005232', 'Barrett M82A1 Premium', 'The Barrett M82A1 rifle was used in 2002 as a platform for the experimental OSW (Objective Sniper Weapon) prototype. This weapon was fitted with a shorter barrel, and fired 25 mm high-explosive shells developed for the 25×59 mm OCSW (Objective Crew Served Weapon) automatic grenade launcher.', '2.5', '1', '1', '0', 'BARRET_PREMIUM.png', '259200', '300', '604800', '600', '2592000', '1200', '1', '2000');
INSERT INTO "public"."webshop" VALUES (19, '300005232', 'Barrett M82A1 Premium', 'The Barrett M82A1 rifle was used in 2002 as a platform for the experimental OSW (Objective Sniper Weapon) prototype. This weapon was fitted with a shorter barrel, and fired 25 mm high-explosive shells developed for the 25×59 mm OCSW (Objective Crew Served Weapon) automatic grenade launcher.', '2.5', '1', '1', '0', 'BARRET_PREMIUM.png', '259200', '300', '604800', '600', '2592000', '1200', '1', '2000');

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."account_id_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."api_keys_id_seq"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."api_keys_limit_id_seq"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."api_keys_logs_id_seq"', 6529, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."auto_ban_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ban_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."channels_id_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_event_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_user_attendance_id_seq"', 35, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_user_itemcode_seq"', 35, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_user_voucher_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."clan_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."clans_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."contas_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."event_attendance_id_seq"', 85, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."gameservers_id_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."gift_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ipsystem_id_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."item_voucher_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."items_id_seq"', 5, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."jogador_amigo_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."jogador_inventario_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."jogador_mensagem_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."launcher_launcherkey_id_seq"', 16, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."launcher_loghistory_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."launcher_version_control_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."loja_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."message_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_characters_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_eqipment_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_friends_player_account_id_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_topups_seq"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."players_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."storage_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."templates_id_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."trade_id_seq"', 12, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_adminpanel_id_seq"', 197, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_all_log_id_seq"', 4, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_api_data_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_download_seq"', 17, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_email_confirmation_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_exchangeticket_seq"', 12, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_giftitem_log_seq"', 11, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_launcher_ipaddress_id"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_news_id_seq"', 18, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_quickslide_id_seq"', 21, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_rankinfo_id_seq"', 67, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_recharge_id_seq"', 24, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_report_id_seq"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_tokenkey_id_seq"', 116, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."webdata_news_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."webshop_id_seq"', 20, true);

-- ----------------------------
-- Primary Key structure for table accounts
-- ----------------------------
ALTER TABLE "public"."accounts" ADD CONSTRAINT "accounts_pkey" PRIMARY KEY ("player_id");

-- ----------------------------
-- Primary Key structure for table check_user_attendance
-- ----------------------------
ALTER TABLE "public"."check_user_attendance" ADD CONSTRAINT "check_user_attendance_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table check_user_voucher
-- ----------------------------
ALTER TABLE "public"."check_user_voucher" ADD CONSTRAINT "check_user_voucher_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table clan_data
-- ----------------------------
ALTER TABLE "public"."clan_data" ADD CONSTRAINT "clan_data_pkey" PRIMARY KEY ("clan_id");

-- ----------------------------
-- Primary Key structure for table events_attendance
-- ----------------------------
ALTER TABLE "public"."events_attendance" ADD CONSTRAINT "events_attendance_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table item_goods_sets
-- ----------------------------
ALTER TABLE "public"."item_goods_sets" ADD CONSTRAINT "item_goods_sets_pkey" PRIMARY KEY ("set_id");

-- ----------------------------
-- Primary Key structure for table item_goods_sets_items
-- ----------------------------
ALTER TABLE "public"."item_goods_sets_items" ADD CONSTRAINT "item_goods_sets_items_pkey" PRIMARY KEY ("set_id", "item_id");

-- ----------------------------
-- Primary Key structure for table item_voucher
-- ----------------------------
ALTER TABLE "public"."item_voucher" ADD CONSTRAINT "item_voucher_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table launcher_launcherkey
-- ----------------------------
ALTER TABLE "public"."launcher_launcherkey" ADD CONSTRAINT "launcher_launcherkey_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table launcher_loghistory
-- ----------------------------
ALTER TABLE "public"."launcher_loghistory" ADD CONSTRAINT "launcher_loghistory_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table launcher_version_control
-- ----------------------------
ALTER TABLE "public"."launcher_version_control" ADD CONSTRAINT "launcher_version_control_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table player_configs
-- ----------------------------
ALTER TABLE "public"."player_configs" ADD CONSTRAINT "player_configs_pkey" PRIMARY KEY ("owner_id");

-- ----------------------------
-- Primary Key structure for table trade_market
-- ----------------------------
ALTER TABLE "public"."trade_market" ADD CONSTRAINT "trade_market_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_api_keys
-- ----------------------------
ALTER TABLE "public"."web_api_keys" ADD CONSTRAINT "keys_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_api_limits
-- ----------------------------
ALTER TABLE "public"."web_api_limits" ADD CONSTRAINT "limits_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_api_logs
-- ----------------------------
ALTER TABLE "public"."web_api_logs" ADD CONSTRAINT "web_api_logs2_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_download_clientlauncher
-- ----------------------------
ALTER TABLE "public"."web_download_clientlauncher" ADD CONSTRAINT "web_download_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_email_confirmation
-- ----------------------------
ALTER TABLE "public"."web_email_confirmation" ADD CONSTRAINT "web_email_confirmation_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_exchangeticket
-- ----------------------------
ALTER TABLE "public"."web_exchangeticket" ADD CONSTRAINT "web_exchangeticket_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_quickslide
-- ----------------------------
ALTER TABLE "public"."web_quickslide" ADD CONSTRAINT "web_quickslide_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_rankinfo
-- ----------------------------
ALTER TABLE "public"."web_rankinfo" ADD CONSTRAINT "web_rankinfo_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_settings
-- ----------------------------
ALTER TABLE "public"."web_settings" ADD CONSTRAINT "web_settings_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_tokenkey
-- ----------------------------
ALTER TABLE "public"."web_tokenkey" ADD CONSTRAINT "web_tokenkey_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table webshop
-- ----------------------------
ALTER TABLE "public"."webshop" ADD CONSTRAINT "webshop2_pkey" PRIMARY KEY ("id");
