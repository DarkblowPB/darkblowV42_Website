/*
 Navicat Premium Data Transfer

 Source Server         : Postgres 5432
 Source Server Type    : PostgreSQL
 Source Server Version : 140000
 Source Host           : localhost:5432
 Source Catalog        : darkblowproject_evo
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140000
 File Encoding         : 65001

 Date: 23/12/2021 17:54:13
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
-- Sequence structure for accounts_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."accounts_id_seq";
CREATE SEQUENCE "public"."accounts_id_seq" 
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
-- Sequence structure for server_ranked_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."server_ranked_id_seq";
CREATE SEQUENCE "public"."server_ranked_id_seq" 
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
-- Sequence structure for web_downloadmanager_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_downloadmanager_id_seq";
CREATE SEQUENCE "public"."web_downloadmanager_id_seq" 
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
-- Sequence structure for web_quickslide_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_quickslide_id_seq";
CREATE SEQUENCE "public"."web_quickslide_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_redeemcode_history_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_redeemcode_history_id_seq";
CREATE SEQUENCE "public"."web_redeemcode_history_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for web_redeemcode_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."web_redeemcode_id_seq";
CREATE SEQUENCE "public"."web_redeemcode_id_seq" 
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
-- Sequence structure for webshop_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."webshop_id_seq";
CREATE SEQUENCE "public"."webshop_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
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
  "rank" int4 NOT NULL DEFAULT 0,
  "gp" int4 NOT NULL DEFAULT 5000000,
  "exp" int4 NOT NULL DEFAULT 0,
  "pc_cafe" int4 NOT NULL DEFAULT 0,
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
  "money" int4 NOT NULL DEFAULT 5000000,
  "online" bool NOT NULL DEFAULT false,
  "weapon_primary" int4 NOT NULL DEFAULT 104006,
  "weapon_secondary" int4 NOT NULL DEFAULT 202003,
  "weapon_melee" int4 NOT NULL DEFAULT 301001,
  "weapon_thrown_normal" int4 NOT NULL DEFAULT 407001,
  "weapon_thrown_special" int4 NOT NULL DEFAULT 508001,
  "char_red" int4 NOT NULL DEFAULT 601001,
  "char_blue" int4 NOT NULL DEFAULT 602002,
  "char_helmet" int4 NOT NULL DEFAULT 1000800000,
  "char_dino" int4 NOT NULL DEFAULT 1500511,
  "char_beret" int4 NOT NULL DEFAULT 0,
  "brooch" int4 NOT NULL DEFAULT 0,
  "insignia" int4 NOT NULL DEFAULT 0,
  "medal" int4 NOT NULL DEFAULT 0,
  "blue_order" int4 NOT NULL DEFAULT 0,
  "mission_id1" int4 NOT NULL DEFAULT 1,
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
  "token" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "hwid" varchar(255) COLLATE "pg_catalog"."default" DEFAULT ''::character varying,
  "coin" int4 NOT NULL DEFAULT 0,
  "age" int4 NOT NULL DEFAULT 0,
  "tourneylevel" int4 NOT NULL DEFAULT 0,
  "assist" int4 NOT NULL DEFAULT 0,
  "face" int4 NOT NULL DEFAULT 1000700000,
  "jacket" int4 NOT NULL DEFAULT 1000900000,
  "poket" int4 NOT NULL DEFAULT 1001000000,
  "glove" int4 NOT NULL DEFAULT 1001100000,
  "belt" int4 NOT NULL DEFAULT 1001200000,
  "holster" int4 NOT NULL DEFAULT 1001300000,
  "skin" int4 NOT NULL DEFAULT 1001400000,
  "coin_share" int4 NOT NULL DEFAULT 0,
  "type_ban" varchar(255) COLLATE "pg_catalog"."default",
  "gold" int4 NOT NULL DEFAULT 0,
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
INSERT INTO "public"."accounts" VALUES ('tester', '', 156, 'PorcoDio', 0, 0, 0, 3357615, 115, 0, 0, 0, 0, 0, 0, 0, 0, 0, '127.0.0.1', '', 1010000, 4789010, 'f', 103525, 202036, 301144, 407021, 508002, 601144, 602232, 800037, 1500512, 0, 0, 0, 0, 0, 1, 0, 0, 2146304, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, 'tester', '', 0, 26, 0, 0, 0, 1000900000, 1001000000, 1001100000, 1001200000, 1001300000, 1001400000, 0, NULL, 0, 1000, NULL, NULL, NULL, 0);
INSERT INTO "public"."accounts" VALUES ('legend', '', 155, '[GM] Pamungkas', 0, 0, 53, 4886632, 132, 0, 0, 0, 0, 0, 0, 0, 0, 6, '127.0.0.1', '', 1010000, 4991580, 'f', 105360, 202003, 301001, 407001, 508001, 601010, 602011, 1000800000, 1500511, 2700008, 999, 999, 999, 999, 1, 0, 0, 32768, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, 'legend', '', 0, 26, 3, 0, 701106, 1000900000, 1001000000, 1001100000, 1001200000, 1001300000, 1001400000, 0, NULL, 0, 1000, NULL, NULL, NULL, 0);
INSERT INTO "public"."accounts" VALUES ('darkblow001', 'd250ed959463e3a789bba1a3ad1dfdfc', 159, '', 0, 0, 0, 5000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '::1', 'imamrasyid@gmail.com', 1010000, 5000000, 'f', 104006, 202003, 301001, 407001, 508001, 601001, 602002, 1000800000, 1500511, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4294967295, 0, 0, 0, '00:00:00:00:00:00', 0, '9063f7c14a7721b35a2b730a42ff3e9e', '', 0, 0, 0, 0, 1000700000, 1000900000, 1001000000, 1001100000, 1001200000, 1001300000, 1001400000, 0, NULL, 0, 1000, NULL, NULL, NULL, 0);

-- ----------------------------
-- Table structure for auto_ban
-- ----------------------------
DROP TABLE IF EXISTS "public"."auto_ban";
CREATE TABLE "public"."auto_ban" (
  "object_id" int8 NOT NULL DEFAULT nextval('auto_ban_seq'::regclass),
  "player_id" int8 NOT NULL DEFAULT 0,
  "login" varchar(255) COLLATE "pg_catalog"."default",
  "player_name" varchar(255) COLLATE "pg_catalog"."default",
  "type" varchar(255) COLLATE "pg_catalog"."default",
  "time" varchar(255) COLLATE "pg_catalog"."default",
  "ip" varchar(255) COLLATE "pg_catalog"."default",
  "hack_type" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of auto_ban
-- ----------------------------

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
-- Table structure for ban_hwid
-- ----------------------------
DROP TABLE IF EXISTS "public"."ban_hwid";
CREATE TABLE "public"."ban_hwid" (
  "hwid" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of ban_hwid
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
  "best_headshot" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "effect" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of clan_data
-- ----------------------------
INSERT INTO "public"."clan_data" VALUES (20, 0, 'sadsad', 151, 0, 0, '', '', 20201202, 0, 0, 0, 0, 0, 0, 0, 1000, 50, 0, '0-0', '0-0', '0-0', '0-0', '0-0', 0);
INSERT INTO "public"."clan_data" VALUES (21, 0, 'GG', 154, 238684676, 0, '', '', 20201203, 0, 0, 0, 0, 0, 0, 0, 1000, 50, 0, '0-0', '0-0', '0-0', '0-0', '0-0', 0);

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
  "reward_count" int4 NOT NULL DEFAULT 0,
  "reward_name" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of events_login
-- ----------------------------
INSERT INTO "public"."events_login" VALUES (2012030000, 2012032359, 106087, 43200000, 'Cane Shotgun (500 giorni)');

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
  "end_date" int8 NOT NULL DEFAULT 0
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
-- Table structure for gamerules
-- ----------------------------
DROP TABLE IF EXISTS "public"."gamerules";
CREATE TABLE "public"."gamerules" (
  "id" int4 NOT NULL DEFAULT 0,
  "weapon_id" int4 NOT NULL,
  "weapon_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 'GameRule Weapon'::character varying
)
;

-- ----------------------------
-- Records of gamerules
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
INSERT INTO "public"."info_basic_items" VALUES (0, 104006, 'K-1', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 105003, 'SSG-69', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 202003, 'K-5', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 301001, 'M-7', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 407001, 'K-400', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 508001, 'Smoke', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1500511, 'Raptor', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1500512, 'String', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1500513, 'Acid', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1000700000, 'Character Face', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1000800000, 'Character Head', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1000900000, 'Character Jacket', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001000000, 'Character Poket', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001100000, 'Character Glove', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001200000, 'Character Belt', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001300000, 'Character Holster', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 1001400000, 'Character Skin', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (2, 601001, 'Red Bulls', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (2, 602002, 'Acid Pol', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (0, 103004, 'K-2', 1, 3);
INSERT INTO "public"."info_basic_items" VALUES (2, 602200, 'Ms. Santa Chou 7d', 604800, 1);
INSERT INTO "public"."info_basic_items" VALUES (2, 601112, 'Ms. Santa Rica 7d', 604800, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 1701003, 'Exp +50% 1d', 1, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 1701119, 'Point +50% 1d', 1, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 1800500, 'Random Box gold 1r', 1, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 1707027, 'Ricarica Rapida 7d', 1, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 1707026, 'Cambio Rapido 7d', 1, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 105138, 'Cheytak XMAS15 7d', 604800, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 106087, 'Cane Shotgun 7d', 604800, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 104249, 'KRISS XMAS15 7d', 604800, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 103241, 'AUG XMAS15 7d', 604800, 1);
INSERT INTO "public"."info_basic_items" VALUES (1, 301047, 'Keris Xmas 50r', 50, 1);

-- ----------------------------
-- Table structure for info_channels
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_channels";
CREATE TABLE "public"."info_channels" (
  "server_id" int4 NOT NULL DEFAULT 0,
  "channel_id" int4 NOT NULL DEFAULT 0,
  "type" int4 NOT NULL DEFAULT 0,
  "announce" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "online" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of info_channels
-- ----------------------------
INSERT INTO "public"."info_channels" VALUES (1, 0, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 1, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 2, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 3, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 4, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 5, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 6, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 7, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 8, 1, 'Point Blank', 0);
INSERT INTO "public"."info_channels" VALUES (1, 9, 4, 'Point Blank', 0);

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
INSERT INTO "public"."info_cupons_flags" VALUES (1600007, 1048576);
INSERT INTO "public"."info_cupons_flags" VALUES (1600008, 262144);
INSERT INTO "public"."info_cupons_flags" VALUES (1600017, 131072);
INSERT INTO "public"."info_cupons_flags" VALUES (1600026, 32768);
INSERT INTO "public"."info_cupons_flags" VALUES (1600027, 16384);
INSERT INTO "public"."info_cupons_flags" VALUES (1600028, 8192);
INSERT INTO "public"."info_cupons_flags" VALUES (1600029, 4096);
INSERT INTO "public"."info_cupons_flags" VALUES (1600030, 2048);
INSERT INTO "public"."info_cupons_flags" VALUES (1600031, 1024);
INSERT INTO "public"."info_cupons_flags" VALUES (1600032, 512);
INSERT INTO "public"."info_cupons_flags" VALUES (1600033, 65536);
INSERT INTO "public"."info_cupons_flags" VALUES (1600034, 256);
INSERT INTO "public"."info_cupons_flags" VALUES (1600035, 128);
INSERT INTO "public"."info_cupons_flags" VALUES (1600036, 64);
INSERT INTO "public"."info_cupons_flags" VALUES (1600040, 32);
INSERT INTO "public"."info_cupons_flags" VALUES (1600044, 16);
INSERT INTO "public"."info_cupons_flags" VALUES (1600064, 2097152);
INSERT INTO "public"."info_cupons_flags" VALUES (1600065, 1);
INSERT INTO "public"."info_cupons_flags" VALUES (1600077, 524288);
INSERT INTO "public"."info_cupons_flags" VALUES (1600078, 8);
INSERT INTO "public"."info_cupons_flags" VALUES (1600079, 4);
INSERT INTO "public"."info_cupons_flags" VALUES (1600080, 4194304);
INSERT INTO "public"."info_cupons_flags" VALUES (1600185, 8388608);
INSERT INTO "public"."info_cupons_flags" VALUES (1600191, 67108864);

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
INSERT INTO "public"."info_gameservers" VALUES (0, 1, 1, '127.0.0.1', 39190, 1908, 700);
INSERT INTO "public"."info_gameservers" VALUES (1, 1, 1, '127.0.0.1', 39191, 1909, 700);

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
  "ExitURL" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "ChatColor" int8 NOT NULL DEFAULT 0,
  "AnnouceColor" int8 NOT NULL DEFAULT 0,
  "Chat" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "Annouce" varchar COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying
)
;

-- ----------------------------
-- Records of info_login_configs
-- ----------------------------
INSERT INTO "public"."info_login_configs" VALUES (1, 'f', 't', '', '3.24', 't', 'http://localhost/index.php', 4587513, 16776960, 'Welcome to Project Pamungkas Evolution!
Version 3.24.200601 is now available!
Visit the website to find out more
Pamungkas Test Server', 'Project Pamungkas Test Server');

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
INSERT INTO "public"."info_missions" VALUES (1, 0, 't');
INSERT INTO "public"."info_missions" VALUES (5, 5000, 't');
INSERT INTO "public"."info_missions" VALUES (6, 5000, 't');
INSERT INTO "public"."info_missions" VALUES (7, 10000, 't');
INSERT INTO "public"."info_missions" VALUES (8, 10000, 't');
INSERT INTO "public"."info_missions" VALUES (9, 12000, 'f');
INSERT INTO "public"."info_missions" VALUES (10, 12000, 'f');
INSERT INTO "public"."info_missions" VALUES (11, 15000, 'f');
INSERT INTO "public"."info_missions" VALUES (12, 15000, 'f');

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
INSERT INTO "public"."info_rank_awards" VALUES (0, 103010, 'M4A1 S.', 86400, 1);
INSERT INTO "public"."info_rank_awards" VALUES (0, 2000100, '10.000 Punti', 1, 1);
INSERT INTO "public"."info_rank_awards" VALUES (0, 508002, 'Flashbang 50qty', 50, 1);
INSERT INTO "public"."info_rank_awards" VALUES (0, 800002, 'Mask Gas', 86400, 1);

-- ----------------------------
-- Table structure for info_ranked
-- ----------------------------
DROP TABLE IF EXISTS "public"."info_ranked";
CREATE TABLE "public"."info_ranked" (
  "id" int4 NOT NULL DEFAULT nextval('server_ranked_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "tag" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of info_ranked
-- ----------------------------
INSERT INTO "public"."info_ranked" VALUES (1, 'Bronzo I', '11');
INSERT INTO "public"."info_ranked" VALUES (2, 'Bronzo II', '12');
INSERT INTO "public"."info_ranked" VALUES (3, 'Bronzo III', '13');
INSERT INTO "public"."info_ranked" VALUES (4, 'Bronzo IV', '14');
INSERT INTO "public"."info_ranked" VALUES (5, 'Argento I', '1');
INSERT INTO "public"."info_ranked" VALUES (6, 'Argento II', '2');
INSERT INTO "public"."info_ranked" VALUES (7, 'Argento III', '3');
INSERT INTO "public"."info_ranked" VALUES (8, 'Oro I', '8');
INSERT INTO "public"."info_ranked" VALUES (9, 'Oro II', '9');
INSERT INTO "public"."info_ranked" VALUES (10, 'Oro III', '10');
INSERT INTO "public"."info_ranked" VALUES (12, 'Diamante II', '7');
INSERT INTO "public"."info_ranked" VALUES (13, 'Smeraldo I', '4');
INSERT INTO "public"."info_ranked" VALUES (14, 'Smeraldo II', '5');
INSERT INTO "public"."info_ranked" VALUES (15, 'Titanio', '15');
INSERT INTO "public"."info_ranked" VALUES (0, 'Non classificato', '0');
INSERT INTO "public"."info_ranked" VALUES (11, 'Diamante I', '6');

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
INSERT INTO "public"."nick_history" VALUES (149, '', 'Legemnd', 2010291815, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (150, '', 'sadsadas', 2011051732, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (151, '', 'Prova', 2011052007, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (152, '', 'Dev', 2011061356, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (154, '', 'Legend', 2012032118, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (154, 'Legend', 'OneeeeeByte', 2012032151, 'เปลี่ยนชื่อ[ในเกม]');
INSERT INTO "public"."nick_history" VALUES (154, 'OneeeeeByte', 'OneByte', 2012041351, 'เปลี่ยนชื่อ[ในเกม]');
INSERT INTO "public"."nick_history" VALUES (154, 'OneByte', 'asdf', 2012041353, 'เปลี่ยนชื่อ[ในเกม]');
INSERT INTO "public"."nick_history" VALUES (155, '', 'Legend', 2012041358, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (156, '', 'Account1', 2012041834, 'สร้างตัวละคร');
INSERT INTO "public"."nick_history" VALUES (156, 'Account1', 'PorcoDio', 2012041856, 'เปลี่ยนชื่อ[ในเกม]');

-- ----------------------------
-- Table structure for onlines
-- ----------------------------
DROP TABLE IF EXISTS "public"."onlines";
CREATE TABLE "public"."onlines" (
  "auth" int4 NOT NULL DEFAULT 0,
  "game" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of onlines
-- ----------------------------

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
  "fakenick" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "muzzle" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of player_bonus
-- ----------------------------
INSERT INTO "public"."player_bonus" VALUES (152, 0, 4, 0, 55, '', 0);
INSERT INTO "public"."player_bonus" VALUES (153, 0, 4, 0, 55, '', 0);
INSERT INTO "public"."player_bonus" VALUES (151, 68, 4, 0, 55, '', 0);
INSERT INTO "public"."player_bonus" VALUES (154, 68, 4, 0, 55, '', 0);
INSERT INTO "public"."player_bonus" VALUES (155, 0, 4, 0, 55, '', 0);
INSERT INTO "public"."player_bonus" VALUES (156, 68, 4, 0, 55, '', 0);

-- ----------------------------
-- Table structure for player_characters
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_characters";
CREATE TABLE "public"."player_characters" (
  "object_id" int8 NOT NULL DEFAULT nextval('player_characters_id_seq'::regclass),
  "player_id" int8 NOT NULL DEFAULT 0,
  "id" int4 NOT NULL DEFAULT 0,
  "slot" int4 NOT NULL DEFAULT 0,
  "name" varchar(33) COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::character varying,
  "createdate" int8 NOT NULL DEFAULT 1010000,
  "playtime" int8 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of player_characters
-- ----------------------------
INSERT INTO "public"."player_characters" VALUES (249, 154, 602275, 2, 'Robot Santa Chou', 2012041031, 0);
INSERT INTO "public"."player_characters" VALUES (250, 154, 602260, 3, 'Reinforced Wolf', 2012041031, 0);
INSERT INTO "public"."player_characters" VALUES (251, 154, 602023, 4, 'Reinforced Shadow', 2012041033, 0);
INSERT INTO "public"."player_characters" VALUES (252, 154, 602200, 5, 'Ms. Santa Chou', 2012041035, 0);
INSERT INTO "public"."player_characters" VALUES (261, 156, 601001, 0, 'Red Bulls', 2012041834, 0);
INSERT INTO "public"."player_characters" VALUES (209, 151, 601393, 6, 'Ranger Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (210, 151, 601313, 7, 'Valentine Witch Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (262, 156, 602002, 1, 'Acid Pol', 2012041834, 0);
INSERT INTO "public"."player_characters" VALUES (263, 156, 602200, 2, 'Ms. Santa Chou 7d', 2012041834, 0);
INSERT INTO "public"."player_characters" VALUES (264, 156, 601112, 3, 'Ms. Santa Rica 7d', 2012041834, 0);
INSERT INTO "public"."player_characters" VALUES (265, 156, 602232, 4, 'Mr. Santa Leopard', 2012041855, 0);
INSERT INTO "public"."player_characters" VALUES (266, 156, 602276, 5, 'Robot Santa Shadow', 2012041855, 0);
INSERT INTO "public"."player_characters" VALUES (267, 156, 602023, 6, 'Reinforced Shadow', 2012041855, 0);
INSERT INTO "public"."player_characters" VALUES (268, 156, 602021, 7, 'Reinforced Leopard', 2012041855, 0);
INSERT INTO "public"."player_characters" VALUES (269, 156, 601144, 8, 'Mr. Santa Fennec', 2012041855, 0);
INSERT INTO "public"."player_characters" VALUES (270, 156, 601265, 9, 'Robot Santa Viper Red', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (271, 156, 601022, 10, 'Reinforced Viper', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (272, 156, 602004, 11, 'Keen Eyes', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (273, 156, 601003, 12, 'Tarantula', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (274, 156, 601010, 13, 'Rica', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (275, 156, 602011, 14, 'Chou', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (276, 156, 601069, 15, 'Caiman Grey', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (277, 156, 602070, 16, 'Wolf', 2012041856, 0);
INSERT INTO "public"."player_characters" VALUES (190, 152, 601001, 0, 'Red Bulls', 2011061356, 0);
INSERT INTO "public"."player_characters" VALUES (191, 152, 602002, 1, 'Acid Pol', 2011061356, 0);
INSERT INTO "public"."player_characters" VALUES (192, 152, 602011, 2, 'Chou', 2011061405, 0);
INSERT INTO "public"."player_characters" VALUES (193, 152, 601010, 3, 'Rica', 2011061405, 0);
INSERT INTO "public"."player_characters" VALUES (187, 151, 601001, 0, 'Red Bulls', 2011052007, 0);
INSERT INTO "public"."player_characters" VALUES (188, 151, 602002, 1, 'Acid Pol', 2011052007, 0);
INSERT INTO "public"."player_characters" VALUES (205, 151, 601111, 2, 'Grim Reaper Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (206, 151, 601370, 3, 'Gangsta Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (207, 151, 601256, 4, 'PB Quinn Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (208, 151, 601340, 5, 'Priest Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (211, 151, 601322, 8, 'Rugby Rica', 2012031046, 0);
INSERT INTO "public"."player_characters" VALUES (212, 151, 601091, 9, 'Ms. Santa Viper Red', 2012031111, 0);
INSERT INTO "public"."player_characters" VALUES (213, 151, 602275, 10, 'Robot Santa Chou', 2012031341, 0);
INSERT INTO "public"."player_characters" VALUES (214, 151, 601069, 11, 'Caiman Grey', 2012031348, 0);
INSERT INTO "public"."player_characters" VALUES (215, 151, 602011, 12, 'Chou', 2012031348, 0);
INSERT INTO "public"."player_characters" VALUES (216, 151, 601005, 13, 'Viper Red', 2012031348, 0);
INSERT INTO "public"."player_characters" VALUES (217, 151, 602070, 14, 'Wolf', 2012031348, 0);
INSERT INTO "public"."player_characters" VALUES (218, 151, 602009, 15, 'Shadow', 2012031351, 0);
INSERT INTO "public"."player_characters" VALUES (219, 151, 601010, 16, 'Rica', 2012031351, 0);
INSERT INTO "public"."player_characters" VALUES (220, 151, 602008, 17, 'Leopard', 2012031351, 0);
INSERT INTO "public"."player_characters" VALUES (221, 151, 601399, 18, 'Halloween Nurse Rica', 2012031352, 0);
INSERT INTO "public"."player_characters" VALUES (222, 151, 601300, 19, 'Non String', 2012031352, 0);
INSERT INTO "public"."player_characters" VALUES (223, 151, 601286, 20, 'Non String', 2012031352, 0);
INSERT INTO "public"."player_characters" VALUES (224, 151, 601423, 21, 'Rudolph Rica', 2012031352, 0);
INSERT INTO "public"."player_characters" VALUES (225, 151, 601264, 22, 'Robot Santa Rica', 2012031352, 0);
INSERT INTO "public"."player_characters" VALUES (226, 151, 601331, 23, 'Steam Punk Fennec', 2012031352, 0);
INSERT INTO "public"."player_characters" VALUES (227, 154, 601001, 0, 'Red Bulls', 2012032118, 0);
INSERT INTO "public"."player_characters" VALUES (228, 154, 602002, 1, 'Acid Pol', 2012032118, 0);
INSERT INTO "public"."player_characters" VALUES (253, 155, 601001, 0, 'Red Bulls', 2012041358, 0);
INSERT INTO "public"."player_characters" VALUES (254, 155, 602002, 1, 'Acid Pol', 2012041358, 0);
INSERT INTO "public"."player_characters" VALUES (278, 155, 602011, 2, 'Chou', 2012051124, 0);
INSERT INTO "public"."player_characters" VALUES (279, 155, 601010, 3, 'Rica', 2012051124, 0);

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
  "audio_enable" int4 NOT NULL DEFAULT 6,
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
INSERT INTO "public"."player_configs" VALUES (155, 55, 1, 2, 0, 100, 60, 6, 15, 80, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\000\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\377\\377\\377\\377\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000"\\000\\000\\000\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377');
INSERT INTO "public"."player_configs" VALUES (152, 55, 1, 2, 0, 100, 60, 6, 10, 70, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\000\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\377\\377\\377\\377\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000"\\000\\000\\000\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377');
INSERT INTO "public"."player_configs" VALUES (151, 55, 1, 2, 0, 100, 60, 6, 10, 80, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\000\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\377\\377\\377\\377\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000"\\000\\000\\000\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377');
INSERT INTO "public"."player_configs" VALUES (153, 55, 1, 0, 0, 100, 60, 6, 50, 70, 0, 0, 0, 31, '', '', '', '', '', E'\\\\x');
INSERT INTO "public"."player_configs" VALUES (154, 55, 1, 2, 0, 100, 60, 6, 10, 80, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\000\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\377\\377\\377\\377\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000"\\000\\000\\000\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377');
INSERT INTO "public"."player_configs" VALUES (156, 55, 1, 2, 0, 100, 60, 6, 15, 80, 0, 0, 0, 31, '', '', '', '', '', E'\\000\\012\\000\\000\\000\\000\\015\\000\\000\\000\\000 \\000\\000\\000\\000\\034\\000\\000\\000\\000,\\000\\000\\000\\000(\\000\\000\\000\\000&\\000\\000\\000\\000\\017\\000\\000\\000\\001\\001\\000\\000\\000\\001\\002\\000\\000\\000\\000\\033\\000\\000\\000\\000\\035\\000\\000\\000\\000\\001\\000\\000\\000\\000\\002\\000\\000\\000\\000\\003\\000\\000\\000\\000\\004\\000\\000\\000\\000\\005\\000\\000\\000\\000\\006\\000\\000\\000\\000\\032\\000\\000\\000\\001\\000\\000\\000\\020\\001\\000\\000\\000 \\000\\020\\000\\000\\000\\0007\\000\\000\\000\\000\\000\\000\\000\\000\\000\\\\\\000\\000\\000\\000[\\000\\000\\000\\000%\\000\\000\\000\\000@\\000\\000\\000\\000A\\000\\000\\000\\000\\025\\000\\000\\000\\000\\377\\377\\377\\377\\000#\\000\\000\\000\\000!\\000\\000\\000\\000\\014\\000\\000\\000\\000\\016\\000\\000\\000\\0001\\000\\000\\000\\0002\\000\\000\\000\\000F\\000\\000\\000\\000B\\000\\000\\000\\000\\013\\000\\000\\000\\000:\\000\\000\\000\\000"\\000\\000\\000\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377\\000\\377\\377\\377\\377');

-- ----------------------------
-- Table structure for player_dailyrecord
-- ----------------------------
DROP TABLE IF EXISTS "public"."player_dailyrecord";
CREATE TABLE "public"."player_dailyrecord" (
  "player_id" int8 NOT NULL,
  "total" int4 NOT NULL DEFAULT 0,
  "wins" int4 NOT NULL DEFAULT 0,
  "loses" int4 NOT NULL DEFAULT 0,
  "draws" int4 NOT NULL DEFAULT 0,
  "kills" int4 NOT NULL DEFAULT 0,
  "deaths" int4 NOT NULL DEFAULT 0,
  "headshots" int4 NOT NULL DEFAULT 0,
  "point" int4 NOT NULL DEFAULT 0,
  "exp" int4 NOT NULL DEFAULT 0,
  "playtime" int4 NOT NULL DEFAULT 0
)
;

-- ----------------------------
-- Records of player_dailyrecord
-- ----------------------------
INSERT INTO "public"."player_dailyrecord" VALUES (152, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_dailyrecord" VALUES (153, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_dailyrecord" VALUES (151, 0, 0, 0, 0, 0, 0, 0, 260, 260, 0);
INSERT INTO "public"."player_dailyrecord" VALUES (154, 0, 0, 0, 0, 0, 0, 0, 298, 298, 0);
INSERT INTO "public"."player_dailyrecord" VALUES (156, 0, 0, 0, 0, 0, 0, 0, 115, 115, 0);
INSERT INTO "public"."player_dailyrecord" VALUES (155, 0, 0, 0, 0, 0, 0, 0, 132, 132, 0);

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
INSERT INTO "public"."player_events" VALUES (151, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (152, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (153, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (154, 0, 0, 0, 0, 0, 0, 0, 0, 2012032206, 0, 0);
INSERT INTO "public"."player_events" VALUES (155, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO "public"."player_events" VALUES (156, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
INSERT INTO "public"."player_items" VALUES (1597, 151, 103524, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1598, 151, 103525, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1599, 151, 103526, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1600, 151, 104724, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1601, 151, 104726, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1602, 151, 105359, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1603, 151, 105360, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1605, 151, 601111, '601111 Grim Reaper Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1606, 151, 601370, '601370 Gangsta Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1607, 151, 601256, '601256 PB Quinn Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1608, 151, 601340, '601340 Priest Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1609, 151, 601393, '601393 PB Ranger Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1610, 151, 601313, '601313 Valentine Witch Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1612, 151, 103600, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1613, 151, 103601, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1614, 151, 103560, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1615, 151, 103579, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1616, 151, 103577, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1617, 151, 103571, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1618, 151, 103548, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1619, 151, 601091, 'Ms. Santa Viper Red', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1625, 151, 1600026, 'Quick Change Weapon 30 [Active]', 2101021111, 3, 2);
INSERT INTO "public"."player_items" VALUES (1626, 151, 1600003, 'Exp 150% [Active]', 2101021111, 3, 2);
INSERT INTO "public"."player_items" VALUES (1627, 151, 1600064, 'Respawn 50% [Active]', 2101021111, 3, 2);
INSERT INTO "public"."player_items" VALUES (1628, 151, 1600027, 'Quick Reload Weapon 30d [Active]', 2101021111, 3, 2);
INSERT INTO "public"."player_items" VALUES (1629, 151, 1600119, 'Points 150% [Active]', 2101021111, 3, 2);
INSERT INTO "public"."player_items" VALUES (1611, 151, 601322, '601322 Rugby Rica', 99, 2, 1);
INSERT INTO "public"."player_items" VALUES (1630, 151, 105322, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1631, 151, 602275, 'Robot Santa Chou', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1532, 151, 601001, 'Red Bulls', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1533, 151, 602002, 'Acid Pol', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1632, 151, 601069, 'Caiman Grey 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1633, 151, 602011, 'Chou 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1634, 151, 601005, 'Viper Red 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1635, 151, 602070, 'Wolf 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1636, 151, 602009, 'Hide 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1637, 151, 601010, 'Rica 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1638, 151, 602008, 'Leopard 100 Qty', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1639, 151, 601399, '601399 Psycho Nurse Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1640, 151, 601300, '601300 Rebel Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1641, 151, 601286, '601286 UK Rebel Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1642, 151, 601423, '601423 Rudolph Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1643, 151, 601264, 'Robot Santa Rica', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1644, 151, 601331, '601331 Steam Punk D-Fox', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (1645, 154, 601001, 'Red Bulls', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1646, 154, 602002, 'Acid Pol', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1647, 154, 103013, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1648, 154, 103015, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1649, 154, 103036, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1650, 154, 103153, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1651, 154, 2700014, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1653, 154, 214002, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1655, 154, 105005, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1656, 154, 105157, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1657, 154, 2700016, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1659, 154, 2700015, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1660, 154, 106004, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1661, 154, 106003, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1662, 154, 2700018, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1663, 154, 104011, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1664, 154, 104019, 'Title Reward', 10, 1, 1);
INSERT INTO "public"."player_items" VALUES (1666, 154, 2700017, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1658, 154, 202007, 'Title Reward', 8, 1, 1);
INSERT INTO "public"."player_items" VALUES (1652, 154, 213001, 'Title Reward', 9, 1, 1);
INSERT INTO "public"."player_items" VALUES (1669, 154, 103524, 'AUG_A3_XMAS2018 (1 Day)', 2012042134, 1, 2);
INSERT INTO "public"."player_items" VALUES (1673, 154, 103526, 'M4A1_XMAS2018 (1 Day)', 2012042207, 1, 2);
INSERT INTO "public"."player_items" VALUES (1671, 154, 105360, 'TACTIITLE_T2_XMAS2018 (1 Day)', 2012042134, 1, 2);
INSERT INTO "public"."player_items" VALUES (1672, 154, 104726, 'OA-93_XMAS2018 (1 Day)', 2012042134, 1, 2);
INSERT INTO "public"."player_items" VALUES (1679, 154, 1600026, 'Quick Change Weapon 30 [Active]', 2101022136, 3, 2);
INSERT INTO "public"."player_items" VALUES (1680, 154, 1600003, 'Exp 150% [Active]', 2101022136, 3, 2);
INSERT INTO "public"."player_items" VALUES (1681, 154, 1600119, 'Points 150% [Active]', 2101022136, 3, 2);
INSERT INTO "public"."player_items" VALUES (1682, 154, 1600064, 'Respawn 50% [Active]', 2101022136, 3, 2);
INSERT INTO "public"."player_items" VALUES (1683, 154, 1600027, 'Quick Reload Weapon 30d [Active]', 2101022136, 3, 2);
INSERT INTO "public"."player_items" VALUES (1665, 154, 104134, 'Title Reward', 9, 1, 1);
INSERT INTO "public"."player_items" VALUES (1684, 154, 1800052, 'Change_Clan_Mark', 86393, 3, 1);
INSERT INTO "public"."player_items" VALUES (1686, 154, 106087, 'Cane Shotgun (500 giorni)', 2204172207, 1, 2);
INSERT INTO "public"."player_items" VALUES (1685, 154, 1800047, 'Change_Name', 86397, 3, 1);
INSERT INTO "public"."player_items" VALUES (1654, 154, 214001, 'Title Reward', 8, 1, 1);
INSERT INTO "public"."player_items" VALUES (1706, 154, 602260, 'wolf', 172800, 2, 1);
INSERT INTO "public"."player_items" VALUES (1707, 154, 602023, 'Hide + (1 Day)', 2012071033, 2, 2);
INSERT INTO "public"."player_items" VALUES (1705, 154, 602275, 'Robot Santa Chou (1 Day)', 2012071031, 2, 2);
INSERT INTO "public"."player_items" VALUES (1708, 154, 602200, 'Ms. Santa Chou (1 Day)', 2012061035, 2, 2);
INSERT INTO "public"."player_items" VALUES (1709, 155, 601001, 'Red Bulls', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1710, 155, 602002, 'Acid Pol', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1711, 155, 700137, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1712, 155, 700039, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1713, 155, 700030, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1714, 155, 700029, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1715, 155, 700028, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1716, 155, 700026, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1717, 155, 700032, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1718, 155, 700033, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1719, 155, 700035, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1720, 155, 700036, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1721, 155, 700140, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1722, 155, 700142, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1723, 155, 700149, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1724, 155, 700150, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1725, 155, 700168, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1726, 155, 701106, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1727, 155, 800001, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1728, 155, 800002, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1729, 155, 800005, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1730, 155, 800007, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1731, 155, 800008, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1732, 155, 800010, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1733, 155, 800014, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1734, 155, 800018, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1735, 155, 800019, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1736, 155, 800021, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1737, 155, 800022, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1738, 155, 800024, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1739, 155, 800025, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1740, 155, 800026, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1741, 155, 800033, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1742, 155, 800035, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1743, 155, 800036, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1744, 155, 800037, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1745, 155, 800038, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1746, 155, 800039, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1747, 155, 800040, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1748, 155, 800041, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1749, 155, 800042, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1750, 155, 800046, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1751, 155, 800047, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1752, 155, 800288, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1753, 155, 601127, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1754, 155, 601245, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1762, 155, 1800551, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1763, 155, 1800552, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1764, 155, 1800553, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1765, 155, 1800554, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1766, 155, 1800555, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1767, 155, 1800556, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1768, 155, 1800557, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1769, 155, 1800558, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1770, 155, 1800559, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1771, 155, 1800560, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1772, 155, 1800561, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1773, 155, 1800914, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1774, 155, 1800915, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1775, 155, 1800916, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1776, 155, 1800917, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1777, 155, 1800900, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1778, 155, 1800800, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1779, 155, 1800700, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1781, 155, 1800400, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1782, 155, 104219, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1783, 155, 202071, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1784, 155, 103221, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1785, 155, 103170, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1786, 155, 106048, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1789, 155, 104352, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1790, 155, 104353, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1791, 155, 104354, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1792, 155, 105034, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1794, 155, 105131, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1795, 155, 2600004, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1796, 155, 2700004, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1797, 155, 2700005, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1798, 155, 2700006, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1799, 155, 2700007, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1800, 155, 2700008, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1801, 155, 2700009, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1802, 155, 2700010, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1803, 155, 2700011, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1804, 155, 2700012, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1805, 155, 2700013, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1806, 155, 2700014, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1807, 155, 2700015, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1808, 155, 2700020, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1809, 155, 2700019, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1810, 155, 2700016, 'Item da comando', 1, 2, 0);
INSERT INTO "public"."player_items" VALUES (1812, 155, 407005, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1815, 155, 407065, 'K-400_Fire (100 Qty)', 99, 1, 1);
INSERT INTO "public"."player_items" VALUES (1823, 155, 1104003113, 'Randombox', 86400, 0, 1);
INSERT INTO "public"."player_items" VALUES (1824, 155, 1800501, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1825, 155, 1800502, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1826, 155, 1800503, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1827, 155, 1800504, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1828, 155, 1800505, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1829, 155, 1800506, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1830, 155, 1800507, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1831, 155, 1800508, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1832, 155, 1800509, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1833, 155, 1800510, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1834, 155, 1800511, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1835, 155, 1800512, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1836, 155, 1800513, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1837, 155, 1800514, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1838, 155, 1800515, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1839, 155, 1800516, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1840, 155, 1800517, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1841, 155, 1800518, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1842, 155, 1800519, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1843, 155, 1800520, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1844, 155, 1800521, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1845, 155, 1800522, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1846, 155, 1800523, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1847, 155, 1800524, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1848, 155, 1800525, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1849, 155, 1800526, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1850, 155, 1800527, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1851, 155, 1800528, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1852, 155, 1800529, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1853, 155, 1800530, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1854, 155, 1800531, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1855, 155, 1800532, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1856, 155, 1800533, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1857, 155, 1800534, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1858, 155, 1800535, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1859, 155, 1800536, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1860, 155, 1800537, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1861, 155, 1800538, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1862, 155, 1800539, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1863, 155, 1800540, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1864, 155, 1800541, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1865, 155, 1800542, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1866, 155, 1800543, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1867, 155, 1800544, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1868, 155, 1800545, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1816, 155, 104193, 'EVO_3 (100 Qty)', 99, 1, 1);
INSERT INTO "public"."player_items" VALUES (1869, 155, 1800546, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1872, 155, 1800549, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1874, 155, 1800601, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1877, 155, 1800604, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1879, 155, 1800606, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1880, 155, 1800607, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1882, 155, 1800609, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1883, 155, 1800610, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1870, 155, 1800547, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1871, 155, 1800548, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1873, 155, 1800550, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1875, 155, 1800602, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1876, 155, 1800603, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1878, 155, 1800605, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1881, 155, 1800608, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1884, 155, 1800611, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1885, 155, 1800612, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1886, 155, 1800613, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1887, 155, 1800614, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1888, 155, 1800615, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1889, 155, 1800616, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1890, 155, 1800617, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1891, 155, 1800618, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1892, 155, 1800619, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1893, 155, 1800620, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1894, 155, 1800621, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1895, 155, 1800622, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1896, 155, 1800623, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1897, 155, 1800624, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1898, 155, 1800625, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1899, 155, 1800626, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1900, 155, 1800627, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1901, 155, 1800628, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1902, 155, 1800629, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1903, 155, 1800630, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1904, 155, 1800631, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1905, 155, 1800632, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1906, 155, 1800633, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1907, 155, 1800634, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1908, 155, 1800635, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1909, 155, 1800636, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1910, 155, 1800637, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1911, 155, 1800638, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1912, 155, 1800639, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1913, 155, 1800640, 'Item da comando', 1, 3, 0);
INSERT INTO "public"."player_items" VALUES (1914, 155, 105312, 'Item da comando', 1, 1, 0);
INSERT INTO "public"."player_items" VALUES (1925, 156, 601001, 'Red Bulls', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1926, 156, 602002, 'Acid Pol', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (1967, 156, 104726, 'OA-93_XMAS2018 (1 Day)', 2012051853, 1, 2);
INSERT INTO "public"."player_items" VALUES (1929, 156, 103037, 'Randombox', 2106181844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1962, 156, 103002, 'AK-47_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1921, 156, 106087, 'Cane Shotgun 7d', 2012111844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1920, 156, 105138, 'Cheytak XMAS15 7d', 2012111844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1922, 156, 104249, 'KRISS XMAS15 7d', 2012111844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1932, 156, 104136, 'Randombox', 2102201844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1923, 156, 103241, 'AUG XMAS15 7d', 2012111844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1934, 156, 105121, 'Randombox', 2103081844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1933, 156, 104026, 'Randombox', 2103041844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1953, 156, 202012, 'C.Python_D (30 Days)', 2102031847, 1, 2);
INSERT INTO "public"."player_items" VALUES (1928, 156, 601112, 'Ms. Santa Rica 7d', 2012111844, 2, 2);
INSERT INTO "public"."player_items" VALUES (1927, 156, 602200, 'Ms. Santa Chou 7d', 2012111844, 2, 2);
INSERT INTO "public"."player_items" VALUES (1938, 156, 1600026, 'Cambio Rapido 7d [Active]', 2012111844, 3, 2);
INSERT INTO "public"."player_items" VALUES (1940, 156, 1600003, 'Exp +50% 1d [Active]', 2012051844, 3, 2);
INSERT INTO "public"."player_items" VALUES (1941, 156, 1600027, 'Ricarica Rapida 7d [Active]', 2012111844, 3, 2);
INSERT INTO "public"."player_items" VALUES (1963, 156, 103039, 'AK_SOPMOD_D (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1954, 156, 202016, 'R.B_454_SS8M+S (30 Days)', 2102041846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1924, 156, 301047, 'Keris Xmas 50r', 149, 1, 1);
INSERT INTO "public"."player_items" VALUES (1942, 156, 800036, 'Mask_Target +2 recoil control (1 Day)', 2012061847, 2, 2);
INSERT INTO "public"."player_items" VALUES (1955, 156, 407065, 'K-400_Fire (500 Qty)', 1099, 1, 1);
INSERT INTO "public"."player_items" VALUES (1951, 156, 202104, 'Luger_P08_Gold (30 Days)', 2102031846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1947, 156, 301017, 'Fang_Blade (30 Days)', 2102031846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1945, 156, 315003, 'BoneKnife (1 Day)', 2012061846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1948, 156, 301147, 'Karambit (30 Days)', 2105041846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1946, 156, 301014, 'GH5007 (30 Days)', 2101041846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1952, 156, 105338, 'Kar98_Gold (30 Days)', 2102041847, 1, 2);
INSERT INTO "public"."player_items" VALUES (1950, 156, 202017, 'C.Python_G (30 Days)', 2102031846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1944, 156, 301122, 'Butterfly (1 Day)', 2012061846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1939, 156, 1600119, 'Point +50% 1d [Active]', 2012061844, 3, 2);
INSERT INTO "public"."player_items" VALUES (1957, 156, 1600064, 'Respawn 50% [Active]', 2012051847, 3, 2);
INSERT INTO "public"."player_items" VALUES (1956, 156, 527003, 'WP_Smoke_Plus (30 Days)', 2102031846, 1, 2);
INSERT INTO "public"."player_items" VALUES (1971, 156, 106170, 'M1887_X-MAS2018 (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (1960, 156, 103005, 'F2000_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1965, 156, 105360, 'TACTIITLE_T2_XMAS2018 (1 Day)', 2012051853, 1, 2);
INSERT INTO "public"."player_items" VALUES (1966, 156, 105359, 'Cheytac_M200_XMAS2018 (1 Day)', 2012051853, 1, 2);
INSERT INTO "public"."player_items" VALUES (1968, 156, 103526, 'M4A1_XMAS2018 (1 Day)', 2012051853, 1, 2);
INSERT INTO "public"."player_items" VALUES (1969, 156, 103525, 'Pindad_SS2_V5_XMAS2018 (1 Day)', 2012051853, 1, 2);
INSERT INTO "public"."player_items" VALUES (1970, 156, 104724, 'Kriss_XMAS2018 (1 Day)', 2012051853, 1, 2);
INSERT INTO "public"."player_items" VALUES (1973, 156, 103102, 'HK-417 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1974, 156, 103284, 'Groza (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1976, 156, 103236, 'K2C (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1977, 156, 103223, 'M14_EBR (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1978, 156, 103003, 'M4A1_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1935, 156, 103154, 'Randombox', 2102251844, 1, 2);
INSERT INTO "public"."player_items" VALUES (1961, 156, 103167, 'AN-94_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1964, 156, 103221, 'AK_SOPMOD_G. (1 Day)', 2012061858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1958, 156, 103048, 'AUG_A3_Black (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1959, 156, 103305, 'G11 (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1975, 156, 103285, 'Groza_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1972, 156, 103168, 'HK-417_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1982, 156, 103001, 'SG_550_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1987, 156, 103174, 'XM8 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1991, 156, 104003, 'K-1_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1994, 156, 104001, 'MP5K_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1999, 156, 104352, 'MX4 (100 Qty)', 400, 1, 1);
INSERT INTO "public"."player_items" VALUES (2008, 156, 104016, 'Spectre_Wh. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2011, 156, 105001, 'Dragunov (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2012, 156, 105012, 'Dragunov_CG. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2005, 156, 104032, 'P90_M.C_D (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (2002, 156, 104029, 'P90_Ext._D (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (2006, 156, 104162, 'PP-19_Bizon_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (2000, 156, 104075, 'P90_G (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1997, 156, 104161, 'MP9_Ext._G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1998, 156, 104022, 'MP7_SL. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1986, 156, 104436, 'APC-9_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1979, 156, 103166, 'SC-2010_D (1 Day)', 2012061858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1981, 156, 103095, 'SCAR-L_Recon (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1988, 156, 103177, 'XM8_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1984, 156, 103169, 'TAR-21_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1989, 156, 104033, 'AKS74U_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1990, 156, 104193, 'EVO_3 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1995, 156, 104004, 'MP7_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1996, 156, 104107, 'MP9_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (1949, 156, 104219, 'P90_M.C_G. (30 Days)', 2102031847, 1, 2);
INSERT INTO "public"."player_items" VALUES (2003, 156, 104010, 'P90_MC (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2004, 156, 104106, 'PP-19_Bizon (100 Qty)', 200, 1, 1);
INSERT INTO "public"."player_items" VALUES (2007, 156, 104002, 'Spectre_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2010, 156, 104008, 'UMP46_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2019, 156, 105015, 'L115A1_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2077, 156, 602276, 'Robot Santa Chou (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2026, 156, 105093, 'VSK94_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2023, 156, 105004, 'SS-69_S. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2024, 156, 105002, 'PSG1 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2027, 156, 105072, 'Walther_WA2000 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2028, 156, 105068, 'XM-2010 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2031, 156, 106008, '870MCS_SL. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2032, 156, 106047, 'Cerberus (1 Day)', 86400, 1, 1);
INSERT INTO "public"."player_items" VALUES (2037, 156, 106043, 'Remington_ETA (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2038, 156, 106006, 'SPAS-15_SL. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2041, 156, 106046, 'UTS-15_D (100 Qty)', 200, 1, 1);
INSERT INTO "public"."player_items" VALUES (2043, 156, 202036, 'Desert_Eagle_Reload (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2044, 156, 202001, 'Desert_Eagle (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2050, 156, 213003, 'P99&Hak_D (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2048, 156, 202002, 'MK.23_Ext. (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2051, 156, 202102, 'Luger_P08 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2052, 156, 301024, 'Candy_Cane (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2053, 156, 301144, 'Keris_Xmas_2016 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2056, 156, 323001, 'Bare_Fist (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2057, 156, 301004, 'Amok_Kukri (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2060, 156, 315001, 'Dual_Knife (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2061, 156, 301007, 'Mini_Axe (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2065, 156, 407002, 'C-5 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2066, 156, 407004, 'K-413 (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2071, 156, 508002, 'FlashBang (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2067, 156, 407007, 'K-413_G (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2074, 156, 508003, 'Smoke_Plus (100 Qty)', 100, 1, 1);
INSERT INTO "public"."player_items" VALUES (2078, 156, 602023, 'Reinforced Hide (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2079, 156, 602021, 'Reinforced Leopard (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2080, 156, 601144, 'Mr. Santa D-Fox (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2076, 156, 602232, 'Mr. Santa Leopard (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2075, 156, 508007, 'Yellow_Smoke_Grenade (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2073, 156, 527001, 'WP_Smoke (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2070, 156, 508006, 'Blue_Smoke_Grenade (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2072, 156, 508005, 'Pink_Smoke_Grenade (1 Day)', 2012061857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2068, 156, 407063, 'K-413_Ice (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2069, 156, 407021, 'Shuttle_Cock_Grenade (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2062, 156, 301083, 'Nunchaku (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2054, 156, 301018, 'BallisticKnife (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2055, 156, 301064, 'Badminton_Racket (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2059, 156, 315008, 'Dual_Kunai (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2063, 156, 301041, 'Arabian_Sword (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2058, 156, 301043, 'GH5007_G (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2064, 156, 323004, 'Silver_Knukle (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2049, 156, 202015, 'R.B_454_SS8M (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2047, 156, 214007, 'HK45_Dual (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2046, 156, 214004, 'Dual_D-Eagle_G (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2045, 156, 214006, 'Dual_D-Eagle_D (1 Day)', 2012061857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2035, 156, 106020, 'Kel-Tec_KSG-15 (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2033, 156, 106141, 'SHOTGUN_M1887_NUSANTARA (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2042, 156, 106048, 'UTS-15_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2039, 156, 106018, 'SPAS-15_MSC (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2034, 156, 106090, 'M1887_Beyond (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2040, 156, 106012, 'SPAS-15_D (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2036, 156, 106059, 'M1887_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2030, 156, 105031, 'Winchester_M70 (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2018, 156, 105026, 'L115A1_Black (1 Day)', 2012061857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2020, 156, 105146, 'PGM_Hecate2 G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2025, 156, 105123, 'Tactilite-T2 (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2022, 156, 105094, 'SVU_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2021, 156, 105145, 'PGM_Hecate2 (1 Day)', 2012071857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2029, 156, 105119, 'XM-2010_Prime (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2016, 156, 105322, 'Kar98 (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2017, 156, 105095, 'DSR-1_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2015, 156, 105010, 'Dragunov_SL. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2013, 156, 105011, 'Dragunov_CS. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2014, 156, 105006, 'Dragunov_G. (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2009, 156, 105030, 'Cheytac_M200 (1 Day)', 2012051857, 1, 2);
INSERT INTO "public"."player_items" VALUES (2001, 156, 104159, 'OA-93_D (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1992, 156, 104031, 'Kriss_S.V_D (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1993, 156, 104039, 'Kriss_S.V_Black (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1980, 156, 103170, 'SCAR-L_Carbine_G. (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1985, 156, 103123, 'TAR-21 (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (1983, 156, 103057, 'Vz._52 (1 Day)', 2012051858, 1, 2);
INSERT INTO "public"."player_items" VALUES (2084, 156, 601003, 'Tarantula (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2085, 156, 601010, 'Rica (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2081, 156, 601265, 'Robot Santa Viper Red (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2083, 156, 602004, 'Keen Eyes (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2086, 156, 602011, 'Chou (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2087, 156, 601069, 'Caiman Grey (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2088, 156, 602070, 'Wolf (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2089, 156, 2700005, 'Beret_Cavalry (1 Day)', 2012051856, 2, 2);
INSERT INTO "public"."player_items" VALUES (2090, 156, 2700007, 'Red Star Beret (1 Day)', 2012051856, 2, 2);
INSERT INTO "public"."player_items" VALUES (2091, 156, 700137, 'Santa_Hat (100 Qty)', 400, 2, 1);
INSERT INTO "public"."player_items" VALUES (2092, 156, 2700011, 'Yellow Star Beret (1 Day)', 2012051856, 2, 2);
INSERT INTO "public"."player_items" VALUES (2101, 156, 1701027, 'Quick Reload Weapon 1d', 1, 3, 1);
INSERT INTO "public"."player_items" VALUES (2098, 156, 800025, 'Mask_Yellow_Desert +2 (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2082, 156, 601022, 'Reinforced Viper Red (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2096, 156, 800022, 'Mask_Black +1 (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2097, 156, 800024, 'Mask_Green_Jungle +2 (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2095, 156, 800018, 'Mask_Face_Magic +1 (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2094, 156, 800033, 'Mask_Red_Cross +2 dmg 5% (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2093, 156, 800037, 'Mask_White +1 (1 Day)', 2012051857, 2, 2);
INSERT INTO "public"."player_items" VALUES (2106, 155, 602011, 'Chou (100 Qty)', 100, 2, 1);
INSERT INTO "public"."player_items" VALUES (2112, 155, 1600026, 'Quick Change Weapon 1d [Active]', 2112220929, 3, 2);
INSERT INTO "public"."player_items" VALUES (2113, 155, 105360, 'TACTIITLE_T2_XMAS2018 (1 Day)', 2112221223, 1, 2);
INSERT INTO "public"."player_items" VALUES (2114, 155, 2700018, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (2115, 155, 2700017, 'Title Reward', 1, 2, 3);
INSERT INTO "public"."player_items" VALUES (2107, 155, 601010, 'Rica (100 Qty)', 97, 2, 1);
INSERT INTO "public"."player_items" VALUES (2117, 159, 103039, 'AK_SOPMOD_D', 518400, 1, 1);

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
INSERT INTO "public"."player_messages" VALUES (41, 1, 154, 0, 'ProjectItaly', 'Complimenti soldato!
Sei entrato in gioco e come ricompensa hai ricevuto:
Cane Shotgun (500 giorni)', 0, 1, 2012182206, 0);
INSERT INTO "public"."player_messages" VALUES (42, 1, 156, 0, 'ProjectItaly', 'Hai ricevuto il seguente pacchetto base:
Exp +50% 1d + Point +50% 1d + Random Box gold 1r + Ricarica Rapida 7d + Cambio Rapido 7d + Cheytak XMAS15 7d + Cane Shotgun 7d + KRISS XMAS15 7d + AUG XMAS15 7d + Keris Xmas 50r', 0, 1, 2012191834, 0);

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
INSERT INTO "public"."player_missions" VALUES (152, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (153, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (151, 1, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (154, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (155, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');
INSERT INTO "public"."player_missions" VALUES (156, 0, 0, 0, 0, 0, E'\\\\x', E'\\\\x', E'\\\\x', E'\\\\x');

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
INSERT INTO "public"."player_titles" VALUES (154, 0, 0, 0, 35183835217918, 3);
INSERT INTO "public"."player_titles" VALUES (152, 0, 0, 0, 0, 1);
INSERT INTO "public"."player_titles" VALUES (151, 4, 13, 43, 35184372088830, 3);
INSERT INTO "public"."player_titles" VALUES (155, 4, 33, 19, 35184372088830, 3);

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
INSERT INTO "public"."shop" VALUES (11103524, 103524, 'AUG_A3_XMAS2018 (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12105360, 105360, 'TACTIITLE_T2_XMAS2018 (7 Days)', 0, 1575, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13105360, 105360, 'TACTIITLE_T2_XMAS2018 (30 Days)', 0, 5670, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13104724, 104724, 'Kriss_XMAS2018 (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (11104726, 104726, 'OA-93_XMAS2018 (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12104726, 104726, 'OA-93_XMAS2018 (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13104726, 104726, 'OA-93_XMAS2018 (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12103524, 103524, 'AUG_A3_XMAS2018 (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13103524, 103524, 'AUG_A3_XMAS2018 (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (11103526, 103526, 'M4A1_XMAS2018 (1 Day)', 0, 260, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (11103525, 103525, 'Pindad_SS2_V5_XMAS2018 (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13103525, 103525, 'Pindad_SS2_V5_XMAS2018 (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13103526, 103526, 'M4A1_XMAS2018 (30 Days)', 0, 4680, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (11104724, 104724, 'Kriss_XMAS2018 (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12104724, 104724, 'Kriss_XMAS2018 (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12105359, 105359, 'Cheytac_M200_XMAS2018 (7 Days)', 0, 1575, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12103525, 103525, 'Pindad_SS2_V5_XMAS2018 (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13105359, 105359, 'Cheytac_M200_XMAS2018 (30 Days)', 0, 5670, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (11105360, 105360, 'TACTIITLE_T2_XMAS2018 (1 Day)', 0, 315, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12103526, 103526, 'M4A1_XMAS2018 (7 Days)', 0, 1300, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (11105359, 105359, 'Cheytac_M200_XMAS2018 (1 Day)', 0, 315, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (100213001, 213001, 'P99&Hak', 25000, 0, 100, 1, 1, 2, 0, 30, 0);
INSERT INTO "public"."shop" VALUES (100214001, 214001, 'Dual_Handgun', 30000, 0, 100, 1, 1, 2, 0, 32, 0);
INSERT INTO "public"."shop" VALUES (1701027, 1701027, 'Quick Reload Weapon 1d', 0, 160, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1730026, 1730026, 'Quick Change Weapon 30', 0, 1920, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (100104019, 104019, 'Kriss_S.V', 25000, 0, 100, 1, 1, 2, 0, 22, 0);
INSERT INTO "public"."shop" VALUES (100104134, 104134, 'OA-93', 25000, 0, 100, 1, 1, 2, 0, 24, 0);
INSERT INTO "public"."shop" VALUES (100104011, 104011, 'P90_Ext', 25000, 0, 100, 1, 1, 2, 0, 20, 0);
INSERT INTO "public"."shop" VALUES (100214002, 214002, 'Dual_D-Eagle', 30000, 0, 100, 1, 1, 2, 0, 32, 0);
INSERT INTO "public"."shop" VALUES (6010051, 601005, 'Viper Red (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010052, 601005, 'Viper Red (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010071, 601007, 'D-Fox (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (100103036, 103036, 'AUG_A3', 30000, 0, 100, 1, 1, 2, 0, 10, 0);
INSERT INTO "public"."shop" VALUES (1800047, 1800047, 'Change_Name', 0, 2000, 1, 1, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1800051, 1800051, 'Change_Clan_Name', 0, 2000, 1, 1, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1800052, 1800052, 'Change_Clan_Mark', 0, 1000, 1, 1, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1730027, 1730027, 'Quick Reload Weapon 30d', 0, 1920, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1730064, 1730064, 'Respawn 50%', 0, 1920, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1707026, 1707026, 'Quick Change Weapon 7d', 0, 800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010072, 601007, 'D-Fox (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010101, 601010, 'Rica (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1707027, 1707027, 'Quick Reload Weapon 7d', 0, 800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1707064, 1707064, 'Respawn 50%', 0, 800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010102, 601010, 'Rica (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (100103153, 103153, 'SC-2010', 30000, 0, 100, 1, 1, 2, 0, 12, 0);
INSERT INTO "public"."shop" VALUES (1701026, 1701026, 'Quick Change Weapon 1d', 0, 160, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1701064, 1701064, 'Respawn 50%', 0, 160, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (100103015, 103015, 'AK_SOPMOD', 40000, 0, 100, 1, 1, 2, 0, 9, 0);
INSERT INTO "public"."shop" VALUES (100103013, 103013, 'G36C_Ext.', 30000, 0, 100, 1, 1, 2, 0, 8, 0);
INSERT INTO "public"."shop" VALUES (100105005, 105005, 'L115A1', 30000, 0, 100, 1, 1, 2, 0, 16, 0);
INSERT INTO "public"."shop" VALUES (100105157, 105157, 'AS-50', 30000, 0, 100, 1, 1, 2, 0, 18, 0);
INSERT INTO "public"."shop" VALUES (100106003, 106003, 'SPAS-15', 25000, 0, 100, 1, 1, 2, 0, 37, 0);
INSERT INTO "public"."shop" VALUES (100106004, 106004, '870MCS_W', 25000, 0, 100, 1, 1, 2, 0, 35, 0);
INSERT INTO "public"."shop" VALUES (100202007, 202007, 'C.Python', 25000, 0, 100, 1, 1, 2, 0, 31, 0);
INSERT INTO "public"."shop" VALUES (6020081, 602008, 'Leopard (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020082, 602008, 'Leopard (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020091, 602009, 'Hide (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020092, 602009, 'Hide (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020111, 602011, 'Chou (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020112, 602011, 'Chou (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020701, 602070, 'Wolf (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020702, 602070, 'Wolf (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010691, 601069, 'Caiman Grey (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010692, 601069, 'Caiman Grey (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020041, 602004, 'Keen Eyes (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020042, 602004, 'Keen Eyes (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010031, 601003, 'Tarantula (100 Qty)', 22500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (11106087, 106087, 'Cane_Shotgun (1 Day)', 0, 240, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (12106087, 106087, 'Cane_Shotgun (7 Days)', 0, 1200, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (13106087, 106087, 'Cane_Shotgun (30 Days)', 0, 4320, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (7001371, 700137, 'Santa_Hat (100 Qty)', 20000, 0, 100, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (8000181, 800018, 'Mask_Face_Magic +1 (1 Day)', 0, 150, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1701003, 1701003, 'Exp 150%', 0, 160, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1701119, 1701119, 'Points 150%', 0, 160, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000182, 800018, 'Mask_Face_Magic +1 (7 Days)', 0, 750, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000183, 800018, 'Mask_Face_Magic +1 (30 Days)', 0, 2700, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1730003, 1730003, 'Exp 150%', 0, 1920, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1730119, 1730119, 'Points 150%', 0, 1920, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1707003, 1707003, 'Exp 150%', 0, 800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1707119, 1707119, 'Points 150%', 0, 800, 1, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000221, 800022, 'Mask_Black +1 (1 Day)', 0, 150, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000222, 800022, 'Mask_Black +1 (7 Days)', 0, 750, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000223, 800022, 'Mask_Black +1 (30 Days)', 0, 2700, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000371, 800037, 'Mask_White +1 (1 Day)', 0, 150, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000372, 800037, 'Mask_White +1 (7 Days)', 0, 750, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000373, 800037, 'Mask_White +1 (30 Days)', 0, 2700, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000361, 800036, 'Mask_Target +2 recoil control (1 Day)', 0, 185, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000362, 800036, 'Mask_Target +2 recoil control (7 Days)', 0, 925, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000363, 800036, 'Mask_Target +2 recoil control (30 Days)', 0, 3330, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000331, 800033, 'Mask_Red_Cross +2 dmg 5% (1 Day)', 0, 185, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000332, 800033, 'Mask_Red_Cross +2 dmg 5% (7 Days)', 0, 925, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000333, 800033, 'Mask_Red_Cross +2 dmg 5% (30 Days)', 0, 3330, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000251, 800025, 'Mask_Yellow_Desert +2 (1 Day)', 0, 185, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000252, 800025, 'Mask_Yellow_Desert +2 (7 Days)', 0, 925, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000253, 800025, 'Mask_Yellow_Desert +2 (30 Days)', 0, 3330, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000241, 800024, 'Mask_Green_Jungle +2 (1 Day)', 0, 185, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000242, 800024, 'Mask_Green_Jungle +2 (7 Days)', 0, 925, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (8000243, 800024, 'Mask_Green_Jungle +2 (30 Days)', 0, 3330, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010032, 601003, 'Tarantula (500 Qty)', 90000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6011121, 601112, 'Ms. Santa Rica (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6011122, 601112, 'Ms. Santa Rica (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6011123, 601112, 'Ms. Santa Rica (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6011441, 601144, 'Mr. Santa D-Fox (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6011442, 601144, 'Mr. Santa D-Fox (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6011443, 601144, 'Mr. Santa D-Fox (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6012651, 601265, 'Robot Santa Viper Red (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6012652, 601265, 'Robot Santa Viper Red (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6012653, 601265, 'Robot Santa Viper Red (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022321, 602232, 'Mr. Santa Leopard (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022322, 602232, 'Mr. Santa Leopard (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022323, 602232, 'Mr. Santa Leopard (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022001, 602200, 'Ms. Santa Chou (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022002, 602200, 'Ms. Santa Chou (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022003, 602200, 'Ms. Santa Chou (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022761, 602276, 'Robot Santa Chou (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022762, 602276, 'Robot Santa Chou (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6022763, 602276, 'Robot Santa Chou (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (6020231, 602023, 'Reinforced Hide (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020232, 602023, 'Reinforced Hide (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020233, 602023, 'Reinforced Hide (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020211, 602021, 'Reinforced Leopard (1 Day)', 0, 235, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020212, 602021, 'Reinforced Leopard (7 Days)', 0, 1175, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6020213, 602021, 'Reinforced Leopard (30 Days)', 0, 4230, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010201, 601020, 'Reinforced D-Fox (1 Day)', 0, 235, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010202, 601020, 'Reinforced D-Fox (7 Days)', 0, 1175, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010203, 601020, 'Reinforced D-Fox (30 Days)', 0, 4230, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010221, 601022, 'Reinforced Viper Red (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010222, 601022, 'Reinforced Viper Red (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (6010223, 601022, 'Reinforced Viper Red (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030371, 103037, 'AUG_A3_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030372, 103037, 'AUG_A3_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030373, 103037, 'AUG_A3_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031541, 103154, 'SC-2010_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031542, 103154, 'SC-2010_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031543, 103154, 'SC-2010_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031671, 103167, 'AN-94_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031672, 103167, 'AN-94_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031673, 103167, 'AN-94_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031681, 103168, 'HK-417_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031682, 103168, 'HK-417_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031683, 103168, 'HK-417_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031691, 103169, 'TAR-21_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031692, 103169, 'TAR-21_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031693, 103169, 'TAR-21_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031701, 103170, 'SCAR-L_Carbine_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031702, 103170, 'SCAR-L_Carbine_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031703, 103170, 'SCAR-L_Carbine_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031771, 103177, 'XM8_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031772, 103177, 'XM8_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031773, 103177, 'XM8_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032211, 103221, 'AK_SOPMOD_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032212, 103221, 'AK_SOPMOD_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032213, 103221, 'AK_SOPMOD_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040261, 104026, 'Kriss_S.V_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040262, 104026, 'Kriss_S.V_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040263, 104026, 'Kriss_S.V_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041361, 104136, 'OA-93_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041362, 104136, 'OA-93_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041363, 104136, 'OA-93_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041611, 104161, 'MP9_Ext._G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041612, 104161, 'MP9_Ext._G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041613, 104161, 'MP9_Ext._G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041621, 104162, 'PP-19_Bizon_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041622, 104162, 'PP-19_Bizon_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041623, 104162, 'PP-19_Bizon_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1042191, 104219, 'P90_M.C_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1042192, 104219, 'P90_M.C_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1042193, 104219, 'P90_M.C_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1044361, 104436, 'APC-9_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1044362, 104436, 'APC-9_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1044363, 104436, 'APC-9_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050061, 105006, 'Dragunov_G. (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050062, 105006, 'Dragunov_G. (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050063, 105006, 'Dragunov_G. (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050151, 105015, 'L115A1_G. (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050152, 105015, 'L115A1_G. (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050153, 105015, 'L115A1_G. (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050931, 105093, 'VSK94_G. (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050932, 105093, 'VSK94_G. (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050933, 105093, 'VSK94_G. (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050941, 105094, 'SVU_G. (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050942, 105094, 'SVU_G. (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050943, 105094, 'SVU_G. (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050951, 105095, 'DSR-1_G. (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050952, 105095, 'DSR-1_G. (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050953, 105095, 'DSR-1_G. (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051211, 105121, 'Cheytac_M200_G. (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051212, 105121, 'Cheytac_M200_G. (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051213, 105121, 'Cheytac_M200_G. (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051591, 105159, 'AS-50_G. (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051592, 105159, 'AS-50_G. (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051593, 105159, 'AS-50_G. (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060481, 106048, 'UTS-15_G. (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060482, 106048, 'UTS-15_G. (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060483, 106048, 'UTS-15_G. (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060591, 106059, 'M1887_G. (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060592, 106059, 'M1887_G. (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060593, 106059, 'M1887_G. (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020711, 202071, 'Glock_18_G. (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020712, 202071, 'Glock_18_G. (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020713, 202071, 'Glock_18_G. (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020171, 202017, 'C.Python_G (1 Day)', 0, 175, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020172, 202017, 'C.Python_G (7 Days)', 0, 875, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020173, 202017, 'C.Python_G (30 Days)', 0, 3150, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2021041, 202104, 'Luger_P08_Gold (1 Day)', 0, 175, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2021042, 202104, 'Luger_P08_Gold (7 Days)', 0, 875, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2021043, 202104, 'Luger_P08_Gold (30 Days)', 0, 3150, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011441, 301144, 'Keris_Xmas_2016 (100 Qty)', 17000, 0, 100, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (3011442, 301144, 'Keris_Xmas_2016 (500 Qty)', 68000, 0, 500, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (3010471, 301047, 'Keris_Xmas (100 Qty)', 17000, 0, 100, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (3010472, 301047, 'Keris_Xmas (500 Qty)', 68000, 0, 500, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (3010241, 301024, 'Candy_Cane (100 Qty)', 17000, 0, 100, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (3010242, 301024, 'Candy_Cane (500 Qty)', 68000, 0, 500, 1, 1, 2, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (3010431, 301043, 'GH5007_G (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010432, 301043, 'GH5007_G (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010433, 301043, 'GH5007_G (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010411, 301041, 'Arabian_Sword (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010412, 301041, 'Arabian_Sword (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010413, 301041, 'Arabian_Sword (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030021, 103002, 'AK-47_Ext. (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030022, 103002, 'AK-47_Ext. (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030031, 103003, 'M4A1_Ext. (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030032, 103003, 'M4A1_Ext. (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030051, 103005, 'F2000_Ext. (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030052, 103005, 'F2000_Ext. (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030011, 103001, 'SG_550_Ext. (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030012, 103001, 'SG_550_Ext. (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030391, 103039, 'AK_SOPMOD_D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030392, 103039, 'AK_SOPMOD_D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030393, 103039, 'AK_SOPMOD_D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030381, 103038, 'G36C_Ext._D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030382, 103038, 'G36C_Ext._D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030383, 103038, 'G36C_Ext._D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030401, 103040, 'AUG_A3_D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030402, 103040, 'AUG_A3_D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030403, 103040, 'AUG_A3_D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030411, 103041, 'AK_SOPMOD_CG (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030412, 103041, 'AK_SOPMOD_CG (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030413, 103041, 'AK_SOPMOD_CG (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030481, 103048, 'AUG_A3_Black (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030482, 103048, 'AUG_A3_Black (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030483, 103048, 'AUG_A3_Black (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030571, 103057, 'Vz._52 (1 Day)', 0, 235, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030572, 103057, 'Vz._52 (7 Days)', 0, 1175, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030573, 103057, 'Vz._52 (30 Days)', 0, 4230, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030951, 103095, 'SCAR-L_Recon (1 Day)', 0, 235, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030952, 103095, 'SCAR-L_Recon (7 Days)', 0, 1175, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1030953, 103095, 'SCAR-L_Recon (30 Days)', 0, 4230, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031021, 103102, 'HK-417 (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031022, 103102, 'HK-417 (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031151, 103115, 'AN-94 (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031152, 103115, 'AN-94 (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031231, 103123, 'TAR-21 (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031232, 103123, 'TAR-21 (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031233, 103123, 'TAR-21 (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031661, 103166, 'SC-2010_D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031662, 103166, 'SC-2010_D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031663, 103166, 'SC-2010_D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031741, 103174, 'XM8 (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1031742, 103174, 'XM8 (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032231, 103223, 'M14_EBR (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032232, 103223, 'M14_EBR (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032361, 103236, 'K2C (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032362, 103236, 'K2C (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032461, 103246, 'AK-12 (1 Day)', 0, 235, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032462, 103246, 'AK-12 (7 Days)', 0, 1175, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032463, 103246, 'AK-12 (30 Days)', 0, 4230, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032841, 103284, 'Groza (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032842, 103284, 'Groza (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032851, 103285, 'Groza_G. (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032852, 103285, 'Groza_G. (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1032853, 103285, 'Groza_G. (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1033051, 103305, 'G11 (1 Day)', 0, 235, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1033052, 103305, 'G11 (7 Days)', 0, 1175, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1033053, 103305, 'G11 (30 Days)', 0, 4230, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1033131, 103313, 'Cane_Gun (1 Day)', 0, 295, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (1033132, 103313, 'Cane_Gun (7 Days)', 0, 1475, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (1033133, 103313, 'Cane_Gun (30 Days)', 0, 5310, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (1040011, 104001, 'MP5K_Ext. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040012, 104001, 'MP5K_Ext. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040021, 104002, 'Spectre_Ext. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040022, 104002, 'Spectre_Ext. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040031, 104003, 'K-1_Ext. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040032, 104003, 'K-1_Ext. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040041, 104004, 'MP7_Ext. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040042, 104004, 'MP7_Ext. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040081, 104008, 'UMP46_Ext. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040082, 104008, 'UMP46_Ext. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040101, 104010, 'P90_MC (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040102, 104010, 'P90_MC (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040161, 104016, 'Spectre_Wh. (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040162, 104016, 'Spectre_Wh. (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040221, 104022, 'MP7_SL. (1 Day)', 0, 200, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040222, 104022, 'MP7_SL. (7 Days)', 0, 1000, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040223, 104022, 'MP7_SL. (30 Days)', 0, 3600, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040271, 104027, 'P90_M.C_S (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040272, 104027, 'P90_M.C_S (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040273, 104027, 'P90_M.C_S (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040291, 104029, 'P90_Ext._D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040292, 104029, 'P90_Ext._D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040293, 104029, 'P90_Ext._D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040311, 104031, 'Kriss_S.V_D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040312, 104031, 'Kriss_S.V_D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040313, 104031, 'Kriss_S.V_D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040321, 104032, 'P90_M.C_D (1 Day)', 0, 200, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040322, 104032, 'P90_M.C_D (7 Days)', 0, 1000, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040323, 104032, 'P90_M.C_D (30 Days)', 0, 3600, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040331, 104033, 'AKS74U_Ext. (100 Qty)', 29500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040332, 104033, 'AKS74U_Ext. (500 Qty)', 118000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040391, 104039, 'Kriss_S.V_Black (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040392, 104039, 'Kriss_S.V_Black (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040393, 104039, 'Kriss_S.V_Black (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040751, 104075, 'P90_G (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040752, 104075, 'P90_G (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1040753, 104075, 'P90_G (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041071, 104107, 'MP9_Ext. (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041072, 104107, 'MP9_Ext. (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041591, 104159, 'OA-93_D (1 Day)', 0, 270, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041592, 104159, 'OA-93_D (7 Days)', 0, 1350, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041593, 104159, 'OA-93_D (30 Days)', 0, 4860, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041061, 104106, 'PP-19_Bizon (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041062, 104106, 'PP-19_Bizon (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041931, 104193, 'EVO_3 (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1041932, 104193, 'EVO_3 (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1043521, 104352, 'MX4 (100 Qty)', 32000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1043522, 104352, 'MX4 (500 Qty)', 128000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050021, 105002, 'PSG1 (100 Qty)', 27500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050022, 105002, 'PSG1 (500 Qty)', 110000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050011, 105001, 'Dragunov (100 Qty)', 27500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050012, 105001, 'Dragunov (500 Qty)', 110000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050041, 105004, 'SS-69_S. (100 Qty)', 27500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050042, 105004, 'SS-69_S. (500 Qty)', 110000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050101, 105010, 'Dragunov_SL. (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050102, 105010, 'Dragunov_SL. (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050103, 105010, 'Dragunov_SL. (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050111, 105011, 'Dragunov_CS. (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050112, 105011, 'Dragunov_CS. (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050113, 105011, 'Dragunov_CS. (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050121, 105012, 'Dragunov_CG. (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050122, 105012, 'Dragunov_CG. (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050123, 105012, 'Dragunov_CG. (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050171, 105017, 'L115A1_D (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050172, 105017, 'L115A1_D (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050173, 105017, 'L115A1_D (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050261, 105026, 'L115A1_Black (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050262, 105026, 'L115A1_Black (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050263, 105026, 'L115A1_Black (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050301, 105030, 'Cheytac_M200 (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050302, 105030, 'Cheytac_M200 (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050303, 105030, 'Cheytac_M200 (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050721, 105072, 'Walther_WA2000 (100 Qty)', 30000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050722, 105072, 'Walther_WA2000 (500 Qty)', 120000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050681, 105068, 'XM-2010 (100 Qty)', 30000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050682, 105068, 'XM-2010 (500 Qty)', 120000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050311, 105031, 'Winchester_M70 (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050312, 105031, 'Winchester_M70 (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1050313, 105031, 'Winchester_M70 (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051231, 105123, 'Tactilite-T2 (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051232, 105123, 'Tactilite-T2 (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051233, 105123, 'Tactilite-T2 (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051191, 105119, 'XM-2010_Prime (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051192, 105119, 'XM-2010_Prime (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051193, 105119, 'XM-2010_Prime (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051451, 105145, 'PGM_Hecate2 (1 Day)', 0, 255, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051452, 105145, 'PGM_Hecate2 (7 Days)', 0, 1275, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051453, 105145, 'PGM_Hecate2 (30 Days)', 0, 4590, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051461, 105146, 'PGM_Hecate2 G. (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051462, 105146, 'PGM_Hecate2 G. (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051463, 105146, 'PGM_Hecate2 G. (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051591, 105159, 'AS-50_G. (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051592, 105159, 'AS-50_G. (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1051593, 105159, 'AS-50_G. (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1053221, 105322, 'Kar98 (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1053222, 105322, 'Kar98 (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1053223, 105322, 'Kar98 (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1053381, 105338, 'Kar98_Gold (1 Day)', 0, 290, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1053382, 105338, 'Kar98_Gold (7 Days)', 0, 1450, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1053383, 105338, 'Kar98_Gold (30 Days)', 0, 5220, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060061, 106006, 'SPAS-15_SL. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060062, 106006, 'SPAS-15_SL. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060081, 106008, '870MCS_SL. (100 Qty)', 27000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060082, 106008, '870MCS_SL. (500 Qty)', 108000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060121, 106012, 'SPAS-15_D (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060122, 106012, 'SPAS-15_D (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060123, 106012, 'SPAS-15_D (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060181, 106018, 'SPAS-15_MSC (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060182, 106018, 'SPAS-15_MSC (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060183, 106018, 'SPAS-15_MSC (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060201, 106020, 'Kel-Tec_KSG-15 (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060202, 106020, 'Kel-Tec_KSG-15 (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060203, 106020, 'Kel-Tec_KSG-15 (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060431, 106043, 'Remington_ETA (100 Qty)', 24500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060432, 106043, 'Remington_ETA (500 Qty)', 98000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060461, 106046, 'UTS-15_D (100 Qty)', 24500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060462, 106046, 'UTS-15_D (500 Qty)', 98000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060901, 106090, 'M1887_Beyond (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060902, 106090, 'M1887_Beyond (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060903, 106090, 'M1887_Beyond (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1061411, 106141, 'SHOTGUN_M1887_NUSANTARA (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1061412, 106141, 'SHOTGUN_M1887_NUSANTARA (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1061413, 106141, 'SHOTGUN_M1887_NUSANTARA (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1061701, 106170, 'M1887_X-MAS2018 (1 Day)', 0, 275, 86400, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (1061702, 106170, 'M1887_X-MAS2018 (7 Days)', 0, 1375, 604800, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (1061703, 106170, 'M1887_X-MAS2018 (30 Days)', 0, 4950, 2592000, 2, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (1060471, 106047, 'Cerberus (1 Day)', 0, 250, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060472, 106047, 'Cerberus (7 Days)', 0, 1250, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (1060473, 106047, 'Cerberus (30 Days)', 0, 4500, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020011, 202001, 'Desert_Eagle (100 Qty)', 12500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020012, 202001, 'Desert_Eagle (500 Qty)', 50000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020021, 202002, 'MK.23_Ext. (100 Qty)', 12500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020022, 202002, 'MK.23_Ext. (500 Qty)', 50000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020121, 202012, 'C.Python_D (1 Day)', 0, 175, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020122, 202012, 'C.Python_D (7 Days)', 0, 875, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020123, 202012, 'C.Python_D (30 Days)', 0, 3150, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020211, 202021, 'Glock_18_D (1 Day)', 0, 175, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020212, 202021, 'Glock_18_D (7 Days)', 0, 875, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020213, 202021, 'Glock_18_D (30 Days)', 0, 3150, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020151, 202015, 'R.B_454_SS8M (1 Day)', 0, 175, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020152, 202015, 'R.B_454_SS8M (7 Days)', 0, 875, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020153, 202015, 'R.B_454_SS8M (30 Days)', 0, 3150, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020161, 202016, 'R.B_454_SS8M+S (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020162, 202016, 'R.B_454_SS8M+S (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020163, 202016, 'R.B_454_SS8M+S (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2021021, 202102, 'Luger_P08 (100 Qty)', 15000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2021022, 202102, 'Luger_P08 (500 Qty)', 60000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020361, 202036, 'Desert_Eagle_Reload (100 Qty)', 15000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2020362, 202036, 'Desert_Eagle_Reload (500 Qty)', 60000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140061, 214006, 'Dual_D-Eagle_D (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140062, 214006, 'Dual_D-Eagle_D (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140063, 214006, 'Dual_D-Eagle_D (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140051, 214005, 'Dual_Handgun_D (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140052, 214005, 'Dual_Handgun_D (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140053, 214005, 'Dual_Handgun_D (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140041, 214004, 'Dual_D-Eagle_G (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140042, 214004, 'Dual_D-Eagle_G (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140043, 214004, 'Dual_D-Eagle_G (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2130031, 213003, 'P99&Hak_D (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2130032, 213003, 'P99&Hak_D (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2130033, 213003, 'P99&Hak_D (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140071, 214007, 'HK45_Dual (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140072, 214007, 'HK45_Dual (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2140073, 214007, 'HK45_Dual (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000111, 2700011, 'Yellow Star Beret (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000112, 2700011, 'Yellow Star Beret (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000113, 2700011, 'Yellow Star Beret (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000071, 2700007, 'Red Star Beret (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000072, 2700007, 'Red Star Beret (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000073, 2700007, 'Red Star Beret (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000051, 2700005, 'Beret_Cavalry (1 Day)', 0, 220, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000052, 2700005, 'Beret_Cavalry (7 Days)', 0, 1100, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (27000053, 2700005, 'Beret_Cavalry (30 Days)', 0, 3960, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010041, 301004, 'Amok_Kukri (100 Qty)', 15000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010042, 301004, 'Amok_Kukri (500 Qty)', 60000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010071, 301007, 'Mini_Axe (100 Qty)', 15000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010072, 301007, 'Mini_Axe (500 Qty)', 60000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010141, 301014, 'GH5007 (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010142, 301014, 'GH5007 (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010143, 301014, 'GH5007 (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010171, 301017, 'Fang_Blade (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010172, 301017, 'Fang_Blade (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010173, 301017, 'Fang_Blade (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010181, 301018, 'BallisticKnife (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010182, 301018, 'BallisticKnife (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010183, 301018, 'BallisticKnife (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010641, 301064, 'Badminton_Racket (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010642, 301064, 'Badminton_Racket (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010643, 301064, 'Badminton_Racket (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010831, 301083, 'Nunchaku (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010832, 301083, 'Nunchaku (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3010833, 301083, 'Nunchaku (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011471, 301147, 'Karambit (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011472, 301147, 'Karambit (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011473, 301147, 'Karambit (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011221, 301122, 'Butterfly (1 Day)', 0, 175, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011222, 301122, 'Butterfly (7 Days)', 0, 875, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3011223, 301122, 'Butterfly (30 Days)', 0, 3150, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150011, 315001, 'Dual_Knife (100 Qty)', 12500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150012, 315001, 'Dual_Knife (500 Qty)', 50000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150031, 315003, 'BoneKnife (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150032, 315003, 'BoneKnife (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150033, 315003, 'BoneKnife (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150081, 315008, 'Dual_Kunai (1 Day)', 0, 210, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150082, 315008, 'Dual_Kunai (7 Days)', 0, 1050, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3150083, 315008, 'Dual_Kunai (30 Days)', 0, 3780, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3230041, 323004, 'Silver_Knukle (1 Day)', 0, 140, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3230042, 323004, 'Silver_Knukle (7 Days)', 0, 700, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3230043, 323004, 'Silver_Knukle (30 Days)', 0, 2520, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3230091, 323001, 'Bare_Fist (100 Qty)', 10000, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (3230092, 323001, 'Bare_Fist (500 Qty)', 40000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070041, 407004, 'K-413 (100 Qty)', 16500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070042, 407004, 'K-413 (500 Qty)', 66000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070071, 407007, 'K-413_G (1 Day)', 0, 155, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070072, 407007, 'K-413_G (7 Days)', 0, 775, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070073, 407007, 'K-413_G (30 Days)', 0, 2790, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070631, 407063, 'K-413_Ice (1 Day)', 0, 190, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070632, 407063, 'K-413_Ice (7 Days)', 0, 950, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070633, 407063, 'K-413_Ice (30 Days)', 0, 3420, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070651, 407065, 'K-400_Fire (100 Qty)', 16500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070652, 407065, 'K-400_Fire (500 Qty)', 66000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070211, 407021, 'Shuttle_Cock_Grenade (1 Day)', 0, 190, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070212, 407021, 'Shuttle_Cock_Grenade (7 Days)', 0, 950, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070213, 407021, 'Shuttle_Cock_Grenade (30 Days)', 0, 3420, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070021, 407002, 'C-5 (100 Qty)', 16500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (4070022, 407002, 'C-5 (500 Qty)', 66000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080021, 508002, 'FlashBang (100 Qty)', 16500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080022, 508002, 'FlashBang (500 Qty)', 66000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080031, 508003, 'Smoke_Plus (100 Qty)', 16500, 0, 100, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080032, 508003, 'Smoke_Plus (500 Qty)', 66000, 0, 500, 1, 1, 2, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080051, 508005, 'Pink_Smoke_Grenade (1 Day)', 0, 155, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080052, 508005, 'Pink_Smoke_Grenade (7 Days)', 0, 775, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080053, 508005, 'Pink_Smoke_Grenade (30 Days)', 0, 2790, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080061, 508006, 'Blue_Smoke_Grenade (1 Day)', 0, 155, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080062, 508006, 'Blue_Smoke_Grenade (7 Days)', 0, 775, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080063, 508006, 'Blue_Smoke_Grenade (30 Days)', 0, 2790, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080071, 508007, 'Yellow_Smoke_Grenade (1 Day)', 0, 155, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080072, 508007, 'Yellow_Smoke_Grenade (7 Days)', 0, 775, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5080073, 508007, 'Yellow_Smoke_Grenade (30 Days)', 0, 2790, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5270011, 527001, 'WP_Smoke (1 Day)', 0, 155, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5270012, 527001, 'WP_Smoke (7 Days)', 0, 775, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5270013, 527001, 'WP_Smoke (30 Days)', 0, 2790, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5270031, 527003, 'WP_Smoke_Plus (1 Day)', 0, 155, 86400, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5270032, 527003, 'WP_Smoke_Plus (7 Days)', 0, 775, 604800, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (5270033, 527003, 'WP_Smoke_Plus (30 Days)', 0, 2790, 2592000, 2, 1, 1, 0, 0, 0);
INSERT INTO "public"."shop" VALUES (2, 1800500, 'Random Box Gold', 0, 3000, 3, 1, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (103241, 103241, 'AUG_A3_XMAS_2015', 0, 0, 0, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (1, 1800500, 'Random Box Gold', 0, 1200, 1, 1, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (104249, 104249, 'KRISS_SV_XMAS_2015', 0, 0, 0, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (105138, 105138, 'CHEYTAK_M200_XMAS_2015', 0, 0, 0, 2, 1, 1, 0, 0, 2);
INSERT INTO "public"."shop" VALUES (3, 1800500, 'Random Box Gold', 0, 10800, 13, 1, 1, 1, 1, 0, 0);
INSERT INTO "public"."shop" VALUES (4, 1800500, 'Random Box Gold', 0, 80000, 100, 1, 1, 1, 1, 0, 0);

-- ----------------------------
-- Table structure for shop_item_repair
-- ----------------------------
DROP TABLE IF EXISTS "public"."shop_item_repair";
CREATE TABLE "public"."shop_item_repair" (
  "item_id" int8 NOT NULL DEFAULT 0,
  "point" int8 NOT NULL DEFAULT 0,
  "cash" int8 NOT NULL DEFAULT 0,
  "quautity" int8 NOT NULL DEFAULT 100,
  "enable" bool NOT NULL DEFAULT false
)
;

-- ----------------------------
-- Records of shop_item_repair
-- ----------------------------
INSERT INTO "public"."shop_item_repair" VALUES (103003, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103005, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103041, 0, 15, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103053, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103057, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103058, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103069, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103116, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103117, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103118, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103153, 63, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103174, 130, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103223, 70, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103268, 85, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103284, 90, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103305, 100, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103306, 81, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103338, 105, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103406, 100, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104001, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104002, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104003, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104004, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104007, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104008, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104009, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104011, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104013, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104027, 0, 15, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104033, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104038, 0, 6, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104043, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104059, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104096, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104098, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104099, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104100, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (104134, 84, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105001, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105002, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105004, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105005, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105006, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105007, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105011, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105012, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105024, 0, 6, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105029, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105030, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105031, 90, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105032, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105034, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105035, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (105068, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106001, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106003, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106004, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106009, 0, 15, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106010, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106018, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106019, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106020, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106021, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (106043, 140, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (110001, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (110003, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (110004, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (110011, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202001, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202002, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202005, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202007, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202010, 0, 9, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202011, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202021, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202022, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202023, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202026, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202036, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202094, 32, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202102, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (202112, 55, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (213001, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (214001, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (214002, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (214004, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (214007, 29, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103001, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103002, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103013, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103014, 59, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103015, 89, 0, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103024, 0, 20, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103025, 0, 15, 100, 't');
INSERT INTO "public"."shop_item_repair" VALUES (103036, 89, 0, 100, 't');

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
INSERT INTO "public"."web_api_limits" VALUES (1, 'uri:api/staticdata/registeredplayers:get', 2, 1638690019, 'darkblowpbreborn');

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
INSERT INTO "public"."web_api_logs" VALUES (6499, 'api/players/registerplayer', 'post', 'a:15:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"3c5b5af8-807a-41dd-a450-81f2fa52d7b8";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:3:"214";s:8:"username";s:11:"darkblow003";s:8:"password";s:11:"darkblow001";s:16:"confirm_password";s:11:"darkblow001";s:5:"email";s:26:"imamrasyidbackup@gmail.com";s:13:"hint_question";s:33:"What was your childhood nickname?";s:11:"hint_answer";s:4:"imam";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";}', 'darkblowpbreborn', '::1', 1639046489, 1.6390465e+09, 'true', 200);
INSERT INTO "public"."web_api_logs" VALUES (6503, 'api/players/bannedplayer', 'put', 'a:10:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"52c137c0-f6bd-409c-a1ef-fc608f99897f";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"45";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";s:9:"player_id";s:1:"2";}', 'darkblowpbreborn', '::1', 1639056623, 1.6390566e+09, 'true', 200);
INSERT INTO "public"."web_api_logs" VALUES (6500, 'api/players/registerplayer', 'post', 'a:15:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"49c6a8bc-4d35-475a-a4b2-f518b4c454d8";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:3:"214";s:8:"username";s:11:"darkblow003";s:8:"password";s:11:"darkblow001";s:16:"confirm_password";s:11:"darkblow001";s:5:"email";s:26:"imamrasyidbackup@gmail.com";s:13:"hint_question";s:33:"What was your childhood nickname?";s:11:"hint_answer";s:4:"imam";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";}', 'darkblowpbreborn', '::1', 1639046954, 1.6390469e+09, 'true', 200);
INSERT INTO "public"."web_api_logs" VALUES (6501, 'api/players/registerplayer', 'post', 'a:15:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"69371d25-9b92-4b6b-8986-0bc0c38155e3";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:3:"214";s:8:"username";s:11:"darkblow003";s:8:"password";s:11:"darkblow001";s:16:"confirm_password";s:11:"darkblow001";s:5:"email";s:26:"imamrasyidbackup@gmail.com";s:13:"hint_question";s:33:"What was your childhood nickname?";s:11:"hint_answer";s:4:"imam";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";}', 'darkblowpbreborn', '::1', 1639047128, 1.6390472e+09, 'true', 200);
INSERT INTO "public"."web_api_logs" VALUES (6502, 'api/players/bannedplayer', 'put', 'a:9:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"d8f2e51d-edc8-40d1-9404-c5b18f62beca";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"11";s:9:"player_id";s:1:"2";}', '', '::1', 1639056616, 1.6390566e+09, 'false', 403);
INSERT INTO "public"."web_api_logs" VALUES (6506, 'api/players/unbannedplayer', 'put', 'a:10:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"dc752dd8-7320-4841-a7ec-19aef26da367";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"45";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";s:9:"player_id";s:1:"2";}', 'darkblowpbreborn', '::1', 1639056726, 1.6390568e+09, 'true', 404);
INSERT INTO "public"."web_api_logs" VALUES (6504, 'api/players/unbannedplayer', 'put', 'a:10:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"a655306b-10da-4134-a7d3-36c35949b7e5";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"45";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";s:9:"player_id";s:1:"2";}', 'darkblowpbreborn', '::1', 1639056631, 1.6390566e+09, 'true', 200);
INSERT INTO "public"."web_api_logs" VALUES (6505, 'api/players/unbannedplayer', 'put', 'a:10:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"066cc638-8b26-4a87-bc31-1f99e4487c37";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"45";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";s:9:"player_id";s:1:"2";}', 'darkblowpbreborn', '::1', 1639056635, 1.6390566e+09, 'true', 200);
INSERT INTO "public"."web_api_logs" VALUES (6508, 'api/players/unbannedplayer', 'put', 'a:10:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"bacd2388-b199-488b-8a17-60a6679e15e5";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"45";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";s:9:"player_id";s:1:"2";}', 'darkblowpbreborn', '::1', 1639056772, 1.6390568e+09, 'true', 404);
INSERT INTO "public"."web_api_logs" VALUES (6507, 'api/players/unbannedplayer', 'put', 'a:10:{s:10:"User-Agent";s:21:"PostmanRuntime/7.28.4";s:6:"Accept";s:3:"*/*";s:13:"Postman-Token";s:36:"d2679424-616c-4e30-aa9b-af48990d486e";s:4:"Host";s:14:"localhost:8080";s:15:"Accept-Encoding";s:17:"gzip, deflate, br";s:10:"Connection";s:10:"keep-alive";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:14:"Content-Length";s:2:"45";s:16:"DARKBLOW_API_KEY";s:16:"darkblowpbreborn";s:9:"player_id";s:1:"2";}', 'darkblowpbreborn', '::1', 1639056759, 1.6390568e+09, 'true', 404);

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
INSERT INTO "public"."web_settings" VALUES (1, '[DEV] EyeTracker', 'Darkblow Studio', 'DarkblowPB', 'DarkblowPB Reborn', '4aa4284c11b916f2cb87b38eb2eca50f.png', 'Darkblow-Logos.ico', 'Testing', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '0', NULL);

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
INSERT INTO "public"."web_tokenkey" VALUES (111, 'OxIs5NG7dYQ30zzbPVxLrGT1syGyaS5YStQwVrcvOMzEERb27s28BIN9MwYN9GSF', 1);

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
SELECT setval('"public"."account_id_seq"', 161, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."accounts_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."api_keys_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."api_keys_limit_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."api_keys_logs_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."auto_ban_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ban_seq"', 13, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."channels_id_seq"', 13, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_event_seq"', 14, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_user_attendance_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_user_itemcode_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."check_user_voucher_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."clan_seq"', 25, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."clans_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."contas_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."event_attendance_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."gameservers_id_seq"', 13, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."gift_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ipsystem_id_seq"', 13, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."item_voucher_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."items_id_seq"', 2119, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."jogador_amigo_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."jogador_inventario_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."jogador_mensagem_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."loja_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."message_id_seq"', 46, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_characters_id_seq"', 283, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_eqipment_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_friends_player_account_id_seq"', 13, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."player_topups_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."players_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."server_ranked_id_seq"
OWNED BY "public"."info_ranked"."id";
SELECT setval('"public"."server_ranked_id_seq"', 19, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."storage_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."templates_id_seq"', 13, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."trade_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_download_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_downloadmanager_id_seq"', 5, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_exchangeticket_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_quickslide_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_redeemcode_history_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_redeemcode_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."web_tokenkey_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."webshop_id_seq"', 2, false);

-- ----------------------------
-- Indexes structure for table accounts
-- ----------------------------
CREATE UNIQUE INDEX "player_id" ON "public"."accounts" USING btree (
  "player_id" "pg_catalog"."int8_ops" ASC NULLS LAST
);
CREATE UNIQUE INDEX "token" ON "public"."accounts" USING btree (
  "token" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST
);

-- ----------------------------
-- Primary Key structure for table accounts
-- ----------------------------
ALTER TABLE "public"."accounts" ADD CONSTRAINT "accounts_pkey" PRIMARY KEY ("token", "player_id") WITH (fillfactor=23);

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
-- Primary Key structure for table gamerules
-- ----------------------------
ALTER TABLE "public"."gamerules" ADD CONSTRAINT "gamerules_pkey" PRIMARY KEY ("weapon_id");

-- ----------------------------
-- Primary Key structure for table info_ranked
-- ----------------------------
ALTER TABLE "public"."info_ranked" ADD CONSTRAINT "server_ranked_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table item_voucher
-- ----------------------------
ALTER TABLE "public"."item_voucher" ADD CONSTRAINT "item_voucher_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table player_characters
-- ----------------------------
ALTER TABLE "public"."player_characters" ADD CONSTRAINT "player_characters_pkey" PRIMARY KEY ("object_id");

-- ----------------------------
-- Primary Key structure for table player_configs
-- ----------------------------
ALTER TABLE "public"."player_configs" ADD CONSTRAINT "player_configs_pkey" PRIMARY KEY ("owner_id");

-- ----------------------------
-- Primary Key structure for table shop_item_repair
-- ----------------------------
ALTER TABLE "public"."shop_item_repair" ADD CONSTRAINT "shop_item_repair_pkey" PRIMARY KEY ("item_id");

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
-- Primary Key structure for table web_exchangeticket
-- ----------------------------
ALTER TABLE "public"."web_exchangeticket" ADD CONSTRAINT "web_exchangeticket_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table web_quickslide
-- ----------------------------
ALTER TABLE "public"."web_quickslide" ADD CONSTRAINT "web_quickslide_pkey" PRIMARY KEY ("id");

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
