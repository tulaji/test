-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 03:43 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_balances`
--

CREATE TABLE `account_balances` (
  `id` int(10) UNSIGNED NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `balance` decimal(16,4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_notes`
--

CREATE TABLE `app_notes` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `contents` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `app_password_manager`
--

CREATE TABLE `app_password_manager` (
  `id` int(11) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `notes` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_password_manager`
--

INSERT INTO `app_password_manager` (`id`, `client_id`, `type`, `name`, `url`, `username`, `password`, `notes`, `created_at`, `updated_at`) VALUES
(4, 294, '', 'google 2', 'http://www.google.com', 'test', 'test', '', '2017-12-09 11:58:36', '2017-12-09 12:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `app_sms`
--

CREATE TABLE `app_sms` (
  `id` int(11) NOT NULL,
  `req_time` datetime DEFAULT NULL,
  `sent_time` datetime DEFAULT NULL,
  `sms_from` text,
  `sms_to` text,
  `sms` text,
  `driver` text,
  `resp` text,
  `status` varchar(200) DEFAULT NULL,
  `stype` varchar(200) NOT NULL DEFAULT 'Sent',
  `cid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `iid` int(11) DEFAULT NULL,
  `trid` int(11) DEFAULT NULL,
  `lid` int(11) DEFAULT NULL,
  `oid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_sms`
--

INSERT INTO `app_sms` (`id`, `req_time`, `sent_time`, `sms_from`, `sms_to`, `sms`, `driver`, `resp`, `status`, `stype`, `cid`, `aid`, `company_id`, `iid`, `trid`, `lid`, `oid`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '7985645340', 'Prathamesh Patil | Require Alteration. View: http://103.150.187.116/pcrm/?ng=tickets/admin/view/1', 'Nexmo', '', '', 'Sent', 0, 0, 0, 0, 0, 0, 0, '2021-03-06 04:59:36', '2021-03-06 04:59:36'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '7985645340', 'ABC | Test . View: http://103.150.187.116/pcrm/?ng=tickets/admin/view/2', 'Nexmo', '', '', 'Sent', 0, 0, 0, 0, 0, 0, 0, '2021-03-15 04:54:41', '2021-03-15 04:54:41'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '7985645340', 'Umrao Test | Test ticket. View: http://103.150.187.116/pcrm/?ng=tickets/admin/view/3', 'Nexmo', '', '', 'Sent', 0, 0, 0, 0, 0, 0, 0, '2021-03-15 04:56:38', '2021-03-15 04:56:38'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '7985645340', 'Prathamesh Patil | House Keeping Ticket. View: http://103.150.187.116/pcrm/?ng=tickets/admin/view/4', 'Nexmo', '', '', 'Sent', 0, 0, 0, 0, 0, 0, 0, '2021-03-15 05:05:29', '2021-03-15 05:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `app_sms_drivers`
--

CREATE TABLE `app_sms_drivers` (
  `id` int(11) NOT NULL,
  `dname` varchar(200) DEFAULT NULL,
  `handler` varchar(200) DEFAULT NULL,
  `weburl` varchar(200) DEFAULT NULL,
  `description` text,
  `url` varchar(200) DEFAULT NULL,
  `incoming_url` varchar(200) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `api_key` varchar(200) DEFAULT NULL,
  `api_secret` varchar(200) DEFAULT NULL,
  `route` varchar(200) DEFAULT NULL,
  `sender_id` varchar(100) DEFAULT NULL,
  `balance` decimal(14,2) DEFAULT NULL,
  `placeholder` text,
  `status` varchar(100) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_sms_drivers`
--

INSERT INTO `app_sms_drivers` (`id`, `dname`, `handler`, `weburl`, `description`, `url`, `incoming_url`, `method`, `username`, `password`, `api_key`, `api_secret`, `route`, `sender_id`, `balance`, `placeholder`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(135, 'custom', 'custom', 'http://www.example.com', 'Your Custom Gateway', 'http://api.example.com', 'http://www.example.com/incoming/', 'GET', 'your_username', 'your_password', 'your_api_key', 'your_api_secret', '1', 'CloudOnex', '1.00', '{{url}}/send.php?username={{username}}&password={{password}}&from={{from}}&to={{to}}&message={{message}}', 'Sandbox', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'test', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'custom', 'custom', 'http://www.example.com', 'Your Custom Gateway', 'http://api.example.com', 'http://www.example.com/incoming/', 'GET', 'your_username', 'your_password', 'your_api_key', 'your_api_secret', '1', 'CloudOnex', '1.00', '{{url}}/send.php?username={{username}}&password={{password}}&from={{from}}&to={{to}}&message={{message}}', 'Sandbox', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'test', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `app_sms_templates`
--

CREATE TABLE `app_sms_templates` (
  `id` int(11) NOT NULL,
  `tpl` varchar(200) DEFAULT NULL,
  `sms` text,
  `status` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_at_2` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_sms_templates`
--

INSERT INTO `app_sms_templates` (`id`, `tpl`, `sms`, `status`, `created_at`, `updated_at`, `updated_at_2`) VALUES
(1, 'Invoice Created', 'Your Invoice- {{invoice_id}} is created. To view your invoice- {{invoice_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:29:37', '0000-00-00 00:00:00'),
(2, 'Invoice Payment Reminder', 'We have not received payment for invoice {{invoice_id}}, dated {{invoice_date}}. To view your invoice- {{invoice_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:31:14', '0000-00-00 00:00:00'),
(3, 'Invoice Overdue Notice', 'Your Invoice- {{invoice_id}} is now overdue. To view your invoice- {{invoice_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:29:20', '0000-00-00 00:00:00'),
(4, 'Invoice Payment Confirmation', 'We have received your Payment for Invoice ID- {{invoice_id}}', '', '0000-00-00 00:00:00', '2017-11-22 23:32:15', '0000-00-00 00:00:00'),
(5, 'Invoice Refund Confirmation', 'Your Payment for {{invoice_id}} has been refunded.', '', '0000-00-00 00:00:00', '2017-11-22 23:33:19', '0000-00-00 00:00:00'),
(6, 'Quote Created', 'A Quote has been created- {{quote_id}}. You can view this Quote- {{quote_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:33:19', '0000-00-00 00:00:00'),
(7, 'Quote Accepted', 'Thanks for Accepting Quote - {{quote_id}}. You can view this Quote- {{quote_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:33:19', '0000-00-00 00:00:00'),
(8, 'Quote Cancelled', 'Quote has been cancelled - {{quote_id}}. You can view this Quote- {{quote_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:33:19', '0000-00-00 00:00:00'),
(9, 'Quote Accepted: Admin Notification', 'Quote - {{quote_id}} has been accepted. You can view this Quote- {{quote_url}}', '', '0000-00-00 00:00:00', '2017-11-22 23:33:19', '0000-00-00 00:00:00'),
(10, 'Quote Cancelled: Admin Notification', 'Quote - {{quote_id}} has been Cancelled. You can view this Quote- {{quote_url}}', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Ticket Assigned: Admin Notification', 'Ticket - {{ticket_id}} has been assigned to you.', '', '2018-10-24 12:03:32', '2018-10-24 12:03:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_purchased` date DEFAULT NULL,
  `supported_until` date DEFAULT NULL,
  `price` decimal(16,4) DEFAULT NULL,
  `depreciation` decimal(16,4) DEFAULT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `employee_id` int(10) UNSIGNED DEFAULT NULL,
  `contact_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `asset`, `name`, `brand`, `date_purchased`, `supported_until`, `price`, `depreciation`, `serial`, `image`, `status`, `notes`, `category_id`, `employee_id`, `contact_id`, `location_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, '', 'Macbook Pro', '', '2018-11-06', '2019-11-06', '1250.0000', '0.0000', 'SL37289274899', '', '', '', 6, 0, 0, 0, '0000-00-00 00:00:00', '2018-11-05 23:42:09', '2018-11-05 23:42:23'),
(9, '', 'CloudOnex Business Suite', '', '2018-11-06', '2019-11-06', '299.0000', '0.0000', 'ABC-17284-278487-2222', '', '', '', 7, 0, 0, 0, '0000-00-00 00:00:00', '2018-11-05 23:43:02', '2018-11-05 23:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `asset_categories`
--

CREATE TABLE `asset_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_categories`
--

INSERT INTO `asset_categories` (`id`, `parent_id`, `name`, `api_name`, `plural`, `slug`, `prefix`, `sl`, `is_active`, `is_default`, `sort_order`, `created_at`, `updated_at`) VALUES
(6, 0, 'Electronics', '', '', '', '', '', 1, 0, 1, '2018-11-05 23:41:40', '2018-11-05 23:41:40'),
(7, 0, 'Softwares', '', '', '', '', '', 1, 0, 1, '2018-11-05 23:41:46', '2018-11-05 23:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `is_present` tinyint(1) NOT NULL DEFAULT '1',
  `total_time` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `note`, `employee_id`, `date`, `is_present`, `total_time`, `created_at`, `updated_at`) VALUES
(1, 'Working', 2, '2021-03-01', 1, 0, '2021-03-01 16:56:27', '2021-03-01 16:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_account_id` int(10) UNSIGNED DEFAULT NULL,
  `contact_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `next_date` date NOT NULL,
  `last_paid_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `currency` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_amount` decimal(16,8) NOT NULL,
  `recurring_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remind_days_before` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `add_transaction_automatically` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_skipped` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clx_integrations`
--

CREATE TABLE `clx_integrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clx_projects`
--

CREATE TABLE `clx_projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_by_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `proposal_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `contact_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `project_manager_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `members` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `estimate_finish_date` date DEFAULT NULL,
  `actual_finish_date` date DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci,
  `currency` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` decimal(16,8) DEFAULT NULL,
  `budget` decimal(16,8) DEFAULT NULL,
  `logged_seconds` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `total_expense` decimal(16,8) DEFAULT NULL,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `manager_id` int(10) UNSIGNED DEFAULT NULL,
  `contact_can_view_task` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_create_task` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_edit_task` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_comment` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_view_time` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_upload_file` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_discuss` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_view_timesheet` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_view_activity_log` tinyint(1) NOT NULL DEFAULT '0',
  `contact_can_view_members` tinyint(1) NOT NULL DEFAULT '0',
  `tab_tasks` tinyint(1) NOT NULL DEFAULT '1',
  `tab_timesheet` tinyint(1) NOT NULL DEFAULT '1',
  `tab_milestones` tinyint(1) NOT NULL DEFAULT '1',
  `tab_files` tinyint(1) NOT NULL DEFAULT '1',
  `tab_discussions` tinyint(1) NOT NULL DEFAULT '1',
  `tab_gantt_view` tinyint(1) NOT NULL DEFAULT '1',
  `tab_tickets` tinyint(1) NOT NULL DEFAULT '1',
  `tab_invoices` tinyint(1) NOT NULL DEFAULT '1',
  `tab_proposals` tinyint(1) NOT NULL DEFAULT '1',
  `tab_members` tinyint(1) NOT NULL DEFAULT '1',
  `tab_calendar` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clx_projects`
--

INSERT INTO `clx_projects` (`id`, `admin_id`, `created_by_id`, `proposal_id`, `parent_id`, `contact_id`, `project_manager_id`, `name`, `summary`, `featured_image`, `members`, `description`, `status`, `priority`, `start_date`, `due_date`, `estimate_finish_date`, `actual_finish_date`, `brief`, `currency`, `billing_type`, `rate`, `budget`, `logged_seconds`, `total_expense`, `owner_id`, `manager_id`, `contact_can_view_task`, `contact_can_create_task`, `contact_can_edit_task`, `contact_can_comment`, `contact_can_view_time`, `contact_can_upload_file`, `contact_can_discuss`, `contact_can_view_timesheet`, `contact_can_view_activity_log`, `contact_can_view_members`, `tab_tasks`, `tab_timesheet`, `tab_milestones`, `tab_files`, `tab_discussions`, `tab_gantt_view`, `tab_tickets`, `tab_invoices`, `tab_proposals`, `tab_members`, `tab_calendar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 1, 1, 'ABC Projects', '', '', '[]', '', 'Draft', '', '2021-02-26', '2021-03-13', '0000-00-00', '0000-00-00', '', 'USD', 'Internal Project', '0.00000000', '0.00000000', 0, '0.00000000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '2021-02-26 01:23:10', '2021-02-26 01:23:10'),
(2, 0, 0, 0, 0, 7, 1, 'Emerson Vishrantwadi', '1000 Gents Shirt', '', '[]', '', 'Draft', '', '2021-03-06', '2021-03-21', '0000-00-00', '0000-00-00', '', 'INR', 'Internal Project', '0.00000000', '0.00000000', 0, '0.00000000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '2021-03-06 04:55:46', '2021-03-06 04:55:46'),
(3, 0, 0, 0, 0, 0, 0, 'Rudra Enterprise', '', '', '[2]', '<p>Manufacture and supply raw materials<br></p>', 'Draft', '', '2021-03-15', '2021-03-30', '0000-00-00', '0000-00-00', '', 'INR', 'Internal Project', '0.00000000', '100000.00000000', 0, '0.00000000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '2021-03-15 12:39:22', '2021-03-15 12:39:53'),
(4, 0, 0, 0, 0, 1, 1, 'TEST PRO', 'TEST', NULL, '[2]', '<p>na</p>', 'Draft', NULL, '2021-04-05', '2021-04-20', NULL, NULL, NULL, 'INR', 'Internal Project', NULL, '50000.00000000', 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2021-04-05 13:34:48', '2021-04-05 13:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `clx_shared_preferences`
--

CREATE TABLE `clx_shared_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `relation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_month` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_year` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvv` char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credit_cards`
--

INSERT INTO `credit_cards` (`id`, `contact_id`, `card_type`, `card_holder_name`, `card_number`, `expiry_month`, `expiry_year`, `cvv`, `created_at`, `updated_at`) VALUES
(1, 294, '', 'Maria Elizabeth', '424242424242424242', '07', '22', '456', '2018-04-23 01:47:45', '2018-04-23 05:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `crm_accounts`
--

CREATE TABLE `crm_accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(200) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `business_number` varchar(200) DEFAULT NULL,
  `jobtitle` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `o` int(11) DEFAULT '0',
  `phone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `is_primary_contact` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `balance` decimal(16,2) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `notes` text,
  `options` text,
  `tags` text,
  `password` text,
  `token` text,
  `ts` text,
  `img` varchar(100) DEFAULT NULL,
  `web` varchar(200) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `google` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `tax_number` varchar(100) DEFAULT NULL,
  `entity_number` varchar(100) DEFAULT NULL,
  `currency` int(11) DEFAULT '0',
  `pmethod` varchar(100) DEFAULT NULL,
  `autologin` varchar(100) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `lastloginip` varchar(100) DEFAULT NULL,
  `stage` varchar(50) DEFAULT NULL,
  `timezone` varchar(50) DEFAULT NULL,
  `isp` varchar(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `gid` int(11) NOT NULL DEFAULT '0',
  `sid` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `country_code` varchar(20) DEFAULT NULL,
  `country_idd` varchar(20) DEFAULT NULL,
  `signed_up_by` varchar(100) DEFAULT NULL,
  `signed_up_ip` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `ct` varchar(200) DEFAULT NULL,
  `assistant` varchar(200) DEFAULT NULL,
  `asst_phone` varchar(100) DEFAULT NULL,
  `second_email` varchar(100) DEFAULT NULL,
  `second_phone` varchar(100) DEFAULT NULL,
  `taxexempt` varchar(50) DEFAULT NULL,
  `latefeeoveride` varchar(50) DEFAULT NULL,
  `overideduenotices` varchar(50) DEFAULT NULL,
  `separateinvoices` varchar(50) DEFAULT NULL,
  `disableautocc` varchar(50) DEFAULT NULL,
  `billingcid` int(10) NOT NULL DEFAULT '0',
  `securityqid` int(10) NOT NULL DEFAULT '0',
  `securityqans` text,
  `cardtype` varchar(200) DEFAULT NULL,
  `cardlastfour` varchar(20) DEFAULT NULL,
  `cardnum` text,
  `startdate` varchar(50) DEFAULT NULL,
  `expdate` varchar(50) DEFAULT NULL,
  `issuenumber` varchar(200) DEFAULT NULL,
  `bankname` varchar(200) DEFAULT NULL,
  `banktype` varchar(200) DEFAULT NULL,
  `bankcode` varchar(200) DEFAULT NULL,
  `bankacct` varchar(200) DEFAULT NULL,
  `gatewayid` int(10) NOT NULL DEFAULT '0',
  `language` text,
  `pwresetkey` varchar(100) DEFAULT NULL,
  `emailoptout` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pwresetexpiry` datetime DEFAULT NULL,
  `is_email_verified` int(1) NOT NULL DEFAULT '0',
  `is_phone_veirifed` int(1) NOT NULL DEFAULT '0',
  `photo_id_type` varchar(100) DEFAULT NULL,
  `photo_id` varchar(100) DEFAULT NULL,
  `type` varchar(200) NOT NULL DEFAULT 'Customer',
  `drive` varchar(50) DEFAULT NULL,
  `workspace_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(100) DEFAULT NULL,
  `display_name` varchar(200) DEFAULT NULL,
  `secondary_email` varchar(200) DEFAULT NULL,
  `secondary_phone` varchar(200) DEFAULT NULL,
  `tds_deduction` decimal(25,2) NOT NULL DEFAULT '0.00',
  `company_type` enum('Partnership','Proprietorship','LLP','PrivateLimited','OnePerson','PublicLimited','Section8') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_accounts`
--

INSERT INTO `crm_accounts` (`id`, `account`, `fname`, `lname`, `company`, `business_number`, `jobtitle`, `cid`, `o`, `phone`, `fax`, `email`, `is_primary_contact`, `username`, `address`, `city`, `state`, `zip`, `country`, `balance`, `status`, `notes`, `options`, `tags`, `password`, `token`, `ts`, `img`, `web`, `facebook`, `google`, `linkedin`, `twitter`, `skype`, `tax_number`, `entity_number`, `currency`, `pmethod`, `autologin`, `lastlogin`, `lastloginip`, `stage`, `timezone`, `isp`, `lat`, `lon`, `gname`, `gid`, `sid`, `role`, `country_code`, `country_idd`, `signed_up_by`, `signed_up_ip`, `dob`, `ct`, `assistant`, `asst_phone`, `second_email`, `second_phone`, `taxexempt`, `latefeeoveride`, `overideduenotices`, `separateinvoices`, `disableautocc`, `billingcid`, `securityqid`, `securityqans`, `cardtype`, `cardlastfour`, `cardnum`, `startdate`, `expdate`, `issuenumber`, `bankname`, `banktype`, `bankcode`, `bankacct`, `gatewayid`, `language`, `pwresetkey`, `emailoptout`, `created_at`, `updated_at`, `pwresetexpiry`, `is_email_verified`, `is_phone_veirifed`, `photo_id_type`, `photo_id`, `type`, `drive`, `workspace_id`, `parent_id`, `code`, `display_name`, `secondary_email`, `secondary_phone`, `tds_deduction`, `company_type`) VALUES
(1, 'Umrao Test', '', '', '', '', '', 0, 1, '', '', 'umrao@gmail.com', 0, '', '', '', '', '', 'India', '0.00', 'Active', '', '', '', '$2y$10$344XbC1NXlzIHUOUqEvRe.r1nk1Z2ljzK52vVneNOVf0Z6vH6EkKC', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '2021-02-26 06:51:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 'Customer,Supplier', '1614340292u9dnzr00h1j3', 0, 0, 'CUS-00001', '', '', '', '0.00', NULL),
(4, 'John Doe', '', '', '', 'TestGSTNumber', '', 0, 0, '123456789', '', 'demo@example.com', 0, '', '424 Fake Street', 'Staten Island', 'Newyork', '10205', 'United States', '0.00', 'Active', '', '', '', '$2y$10$5son5BhQSzX.b6ea1Ueqle2iWrrfQG42z8rYrGfRCp8jgNTN3LXmO', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 'Customer', '', 0, 0, '', '', '', '', '0.00', NULL),
(5, 'Jane Doe', '', '', '', '', '', 0, 0, '912345678', '', 'jane@example.com', 0, '', '520 Grand View', 'Staten Island', 'Newyork', '10107', 'United States', '0.00', 'Active', '', '', '', '$2y$10$099VU9zGDDoSmqBulZOH6.3OcxWtGJRNuvw0zokSPjcJ84aTwyiuO', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 'Customer', '', 0, 0, '', '', '', '', '0.00', NULL),
(6, 'ABC', '', '', '', '89789798798489', '', 0, 1, '8988999999', '', 'mk@example.com', 0, '', 'Abc Delhi india', 'Newdilhi', 'Delhi', '11008', 'India', '0.00', 'Active', '', '', '', '$2y$10$WwM1Vn4SKPiTJkDzfUrLmOgrlpChmgsJmPqC5t.6Su07yE2v.YV3a', '', '', '', '', '', '', '', '', '', '', '', 1, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 'Customer,Supplier', '', 0, 0, '', '', '', '', '5.00', 'Partnership'),
(7, 'Prathamesh Patil', '', '', 'Emerson', '', '', 2, 1, '', '', '', 0, '', '', '', 'Maharashtra', '411027', 'India', '0.00', 'Active', '', '', '', '$2y$10$ZxAkjGZJctWzzX0c7Q8pNemkHMVhL8vbo1NItUHup.rwaasUDHhrS', '', '', '', '', '', '', '', '', '', '', '', 2, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '2021-03-06 10:06:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 'Customer', '1615005385l1vqc7ff55cy', 0, 0, 'CUS-00002', '', '', '', '0.00', NULL),
(8, 'Test customer 3', '', '', 'ABC Company', '787546456454665', '', 1, 1, '3456789000', '', 'testcust3@gmail.com', 0, '', '23 Steet 4', 'Surat', 'Gujarat', '655001', 'United States', '0.00', 'Active', '', '', '', '$2y$10$1fpBneIj3fwH2Z.wcOkZtekigYRSKud.lZIMQjSUuIsyWrILqnoWm', '', '', '', '', '', '', '', '', '', '', '', 2, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '2021-03-15 10:15:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 'Customer', '1615783549n0jpznlshbbe', 0, 0, 'CUS-00003', '', '', '', '0.00', NULL),
(9, 'sunil', '', '', '', 'self', '', 0, 1, '08269365947', '', 'sunil.patidar2050@gmail.com', 0, '', 'indore madhya pradesh', 'indore', 'Madhya Pradesh', 'composl', 'India', '0.00', 'Active', '', NULL, '', '$2y$10$e4ZgvbzwuPzDIUKZUqFC.ejnmZMDXnmZElus5KsRGWEO0XWwbCaLO', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-03-27 10:40:03', NULL, NULL, 0, 0, NULL, NULL, 'Customer', '16168218034uhnfryziqlc', 0, 0, 'CUS-00004', NULL, 'sunil.patidar2050@gmail.com', NULL, '2.00', 'Proprietorship');

-- --------------------------------------------------------

--
-- Table structure for table `crm_customfields`
--

CREATE TABLE `crm_customfields` (
  `id` int(10) NOT NULL,
  `ctype` text,
  `relid` int(10) NOT NULL DEFAULT '0',
  `fieldname` text,
  `fieldtype` text,
  `description` text,
  `fieldoptions` text,
  `regexpr` text,
  `adminonly` text,
  `required` text,
  `showorder` text,
  `showinvoice` text,
  `sorder` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_customfieldsvalues`
--

CREATE TABLE `crm_customfieldsvalues` (
  `id` int(10) NOT NULL,
  `fieldid` int(10) NOT NULL,
  `relid` int(10) NOT NULL,
  `fvalue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_groups`
--

CREATE TABLE `crm_groups` (
  `id` int(11) NOT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `parent` varchar(200) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `exempt` text,
  `description` text,
  `separateinvoices` text,
  `sorder` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_industries`
--

CREATE TABLE `crm_industries` (
  `id` int(11) NOT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `is_default` int(1) NOT NULL DEFAULT '0',
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_industries`
--

INSERT INTO `crm_industries` (`id`, `industry`, `is_active`, `is_default`, `sorder`) VALUES
(1, 'Agriculture', 1, 0, 0),
(2, 'Apparel', 1, 0, 0),
(3, 'Banking', 1, 0, 0),
(4, 'Biotechnology', 1, 0, 0),
(5, 'Chemicals', 1, 0, 0),
(6, 'Communications', 1, 0, 0),
(7, 'Construction', 1, 0, 0),
(8, 'Consulting', 1, 0, 0),
(9, 'Education', 1, 0, 0),
(10, 'Electronics', 1, 0, 0),
(11, 'Energy', 1, 0, 0),
(12, 'Engineering', 1, 0, 0),
(13, 'Entertainment', 1, 0, 0),
(14, 'Environmental', 1, 0, 0),
(15, 'Finance', 1, 0, 0),
(16, 'Food & Beverage', 1, 0, 0),
(17, 'Government', 1, 0, 0),
(18, 'Healthcare', 1, 0, 0),
(19, 'Hospitality', 1, 0, 0),
(20, 'Insurance', 1, 0, 0),
(21, 'Machinery', 1, 0, 0),
(22, 'Manufacturing', 1, 0, 0),
(23, 'Media', 1, 0, 0),
(24, 'Not For Profit', 1, 0, 0),
(25, 'Other', 1, 0, 0),
(26, 'Recreation', 1, 0, 0),
(27, 'Retail', 1, 0, 0),
(28, 'Shipping', 1, 0, 0),
(29, 'Technology', 1, 0, 0),
(30, 'Telecommunications', 1, 0, 0),
(31, 'Transportation', 1, 0, 0),
(32, 'Utilities', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `crm_leads`
--

CREATE TABLE `crm_leads` (
  `id` int(11) NOT NULL,
  `secret` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `oid` int(11) NOT NULL DEFAULT '0',
  `salutation` varchar(200) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `suffix` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `company_id` int(11) NOT NULL DEFAULT '0',
  `website` varchar(200) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `employees` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `form_id` int(11) NOT NULL DEFAULT '0',
  `added_from` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `viewed_at` datetime DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `sorder` int(11) NOT NULL DEFAULT '0',
  `assigned` int(11) NOT NULL DEFAULT '0',
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `date_converted` datetime DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT '0',
  `ratings` varchar(50) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  `lost` int(1) NOT NULL DEFAULT '0',
  `junk` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `memo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_leads`
--

INSERT INTO `crm_leads` (`id`, `secret`, `status`, `o`, `oid`, `salutation`, `first_name`, `middle_name`, `last_name`, `suffix`, `title`, `company`, `company_id`, `website`, `industry`, `employees`, `email`, `phone`, `color`, `source`, `form_id`, `added_from`, `mobile`, `address`, `street`, `city`, `state`, `zip`, `country`, `created_by`, `created_at`, `updated_at`, `updated_by`, `viewed_at`, `cid`, `aid`, `iid`, `rid`, `sorder`, `assigned`, `last_contact`, `last_contact_by`, `date_converted`, `public`, `ratings`, `flag`, `lost`, `junk`, `trash`, `archived`, `memo`) VALUES
(1, '', 'Working', 'Gig Digital', 1, 'Mr.', 'Linsy', '', 'John', '', '', 'ABC Company', 1, '', 'Agriculture', '', 'abc@gmail.com', '23456789', '', 'Trade Show', 0, '', '', '', 'test Street', 'Test City', 'Test State', '456778', 'test Country', 'Gig Digital', '2021-03-01 22:59:06', '2021-03-01 22:59:06', '', '0000-00-00 00:00:00', 0, 1, 0, 0, 0, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, '', 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `crm_lead_sources`
--

CREATE TABLE `crm_lead_sources` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `is_default` int(1) NOT NULL DEFAULT '1',
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_lead_sources`
--

INSERT INTO `crm_lead_sources` (`id`, `sname`, `is_active`, `is_default`, `sorder`) VALUES
(1, 'Advertisement', 1, 1, 0),
(2, 'Customer Event', 1, 1, 0),
(3, 'Employee Referral', 1, 1, 0),
(4, 'Google AdWords', 1, 1, 0),
(5, 'Other', 1, 1, 0),
(6, 'Partner', 1, 1, 0),
(7, 'Purchased List', 1, 1, 0),
(8, 'Trade Show', 1, 1, 0),
(9, 'Webinar', 1, 1, 0),
(10, 'Website', 1, 1, 0),
(11, 'Facebook', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `crm_lead_status`
--

CREATE TABLE `crm_lead_status` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `is_default` int(1) NOT NULL DEFAULT '0',
  `is_converted` int(1) NOT NULL DEFAULT '0',
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_lead_status`
--

INSERT INTO `crm_lead_status` (`id`, `sname`, `is_active`, `is_default`, `is_converted`, `sorder`) VALUES
(1, 'Unqualified', 1, 0, 0, 0),
(2, 'New', 1, 1, 0, 0),
(3, 'Working', 1, 0, 0, 0),
(4, 'Nurturing', 1, 0, 0, 0),
(5, 'Qualified', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `crm_salutations`
--

CREATE TABLE `crm_salutations` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `is_default` int(1) NOT NULL DEFAULT '0',
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_salutations`
--

INSERT INTO `crm_salutations` (`id`, `sname`, `is_active`, `is_default`, `sorder`) VALUES
(1, 'Mr.', 1, 0, 0),
(2, 'Ms.', 1, 0, 0),
(3, 'Mrs.', 1, 0, 0),
(4, 'Dr.', 1, 0, 0),
(5, 'Prof.', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_hired` date DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `manager_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_frequency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(16,8) NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_name_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_name_first` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_name_mi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_name_last` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banking_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birht` date DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_citizen` tinyint(1) NOT NULL DEFAULT '1',
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_i9_form` tinyint(1) DEFAULT NULL,
  `work_authorization_expires` date DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_relation_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_relation_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_day_worked` date DEFAULT NULL,
  `last_day_on_benefits` date DEFAULT NULL,
  `last_day_on_payroll` date DEFAULT NULL,
  `termination_type` date DEFAULT NULL,
  `termination_reason` date DEFAULT NULL,
  `is_recommended` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `job_title`, `date_hired`, `department_id`, `manager_id`, `image`, `pay_frequency`, `currency`, `amount`, `employee_id`, `legal_name_title`, `legal_name_first`, `legal_name_mi`, `legal_name_last`, `banking_name`, `ssn`, `gender`, `date_of_birht`, `marital_status`, `is_citizen`, `ethnicity`, `has_i9_form`, `work_authorization_expires`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `country`, `phone`, `email`, `work_phone`, `work_mobile`, `work_fax`, `cc_email`, `other`, `emergency_contact_name_1`, `emergency_contact_phone_1`, `emergency_contact_relation_1`, `emergency_contact_name_2`, `emergency_contact_phone_2`, `emergency_contact_relation_2`, `last_day_worked`, `last_day_on_benefits`, `last_day_on_payroll`, `termination_type`, `termination_reason`, `is_recommended`, `is_active`, `facebook`, `google`, `linkedin`, `skype`, `twitter`, `summary`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Jakub Swierczak', 'Customer Success Manager', '2018-11-16', 0, 0, '', 'Monthly', 'USD', '7500.00000000', '', '', '', '', '', '', '', '', '0000-00-00', '', 1, '', 0, '0000-00-00', '1101 Marina Villae Parkway, Suite 201', '', 'Alameda', 'California', '94501', 'United States', '(650) 488-7772', 'Jakub@cloudonex.com', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 1, '', '', '', '', '', 'His work motto is If our customers are happy it means Im doing a good job. In his free time hes improving his guitar skills and beginning his running adventure, hoping one day he will cross a marathon finish line.', '0000-00-00 00:00:00', '2018-11-15 23:42:15', '2018-11-15 23:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `end_users`
--

CREATE TABLE `end_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sorder` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `finished_product`
--

CREATE TABLE `finished_product` (
  `id` int(11) NOT NULL,
  `finished_ref` varchar(255) DEFAULT NULL,
  `order_ref` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `processing_ref` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `processing_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` decimal(11,0) NOT NULL,
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `used_weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `note` text NOT NULL,
  `finished_date` date DEFAULT NULL,
  `finished_image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `finished_status` enum('FINISHED','TRANSFERED') NOT NULL DEFAULT 'FINISHED',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finished_product`
--

INSERT INTO `finished_product` (`id`, `finished_ref`, `order_ref`, `order_id`, `subject`, `processing_ref`, `created_by`, `processing_product_id`, `product_id`, `qty`, `weight`, `used_weight`, `note`, `finished_date`, `finished_image`, `status`, `finished_status`, `created_at`) VALUES
(3, 'PF0003', '0002', 2, 'Finished', 'PR0003', NULL, 3, 4, '10', '290.00', '290.00', '<p>ok</p>', '2021-04-27', '', 1, 'TRANSFERED', '2021-04-27 13:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `ib_assets`
--

CREATE TABLE `ib_assets` (
  `id` int(11) NOT NULL,
  `asset_name` varchar(200) DEFAULT NULL,
  `price` decimal(14,2) NOT NULL DEFAULT '0.00',
  `date_purchased` date DEFAULT NULL,
  `warranty_period` date DEFAULT NULL,
  `image` text,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ib_doc_rel`
--

CREATE TABLE `ib_doc_rel` (
  `id` int(11) NOT NULL,
  `rtype` varchar(100) NOT NULL DEFAULT 'contact',
  `rid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL DEFAULT '0',
  `can_download` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ib_doc_rel`
--

INSERT INTO `ib_doc_rel` (`id`, `rtype`, `rid`, `did`, `can_download`) VALUES
(1, 'project', 3, 1, 0),
(2, 'project', 3, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ib_invoice_access_log`
--

CREATE TABLE `ib_invoice_access_log` (
  `id` int(11) NOT NULL,
  `lid` int(11) NOT NULL DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `customer` varchar(200) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `referer` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `country_iso` varchar(20) DEFAULT NULL,
  `viewed_at` varchar(200) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ib_kb`
--

CREATE TABLE `ib_kb` (
  `id` int(11) NOT NULL,
  `gid` int(11) DEFAULT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `groups` text,
  `title` text,
  `slug` text,
  `description` text,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `is_public` int(1) NOT NULL DEFAULT '1',
  `sorder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ib_kb_groups`
--

CREATE TABLE `ib_kb_groups` (
  `id` int(11) NOT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `description` text,
  `status` varchar(200) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ib_kb_rel`
--

CREATE TABLE `ib_kb_rel` (
  `id` int(11) NOT NULL,
  `kbid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ib_kb_replies`
--

CREATE TABLE `ib_kb_replies` (
  `id` int(11) NOT NULL,
  `kbid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reply` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lead_forms`
--

CREATE TABLE `lead_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_data` text COLLATE utf8mb4_unicode_ci,
  `lead_source_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `lead_status_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `notify_ids` text COLLATE utf8mb4_unicode_ci,
  `captcha` tinyint(1) NOT NULL DEFAULT '0',
  `submit_button_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_duplicate` tinyint(1) NOT NULL DEFAULT '1',
  `create_task` tinyint(1) NOT NULL DEFAULT '0',
  `webhook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `tax_name` varchar(200) DEFAULT NULL,
  `currency_symbol` varchar(20) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `unit_price` decimal(16,2) DEFAULT NULL,
  `tax_rate` decimal(16,2) DEFAULT NULL,
  `total` decimal(16,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `processing_product`
--

CREATE TABLE `processing_product` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `subject` text,
  `process_code` varchar(255) DEFAULT NULL,
  `order_ref` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `note` text NOT NULL,
  `assign_to` int(11) DEFAULT NULL,
  `processing_image` text,
  `status` int(11) NOT NULL,
  `processing_status` enum('Processing','Finished') NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processing_product`
--

INSERT INTO `processing_product` (`id`, `orderid`, `weight`, `subject`, `process_code`, `order_ref`, `start_date`, `end_date`, `note`, `assign_to`, `processing_image`, `status`, `processing_status`, `created_at`) VALUES
(3, 2, '290.00', 'Process-12122203', 'PR0003', '0002', '2021-04-27', '2021-04-27', '<p>NAok</p>', NULL, '', 0, 'Finished', '2021-04-27 09:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `raw_inventory`
--

CREATE TABLE `raw_inventory` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `ref_no` varchar(255) DEFAULT NULL,
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `lenght` decimal(25,2) NOT NULL DEFAULT '0.00',
  `width` decimal(25,2) NOT NULL DEFAULT '0.00',
  `height` decimal(25,2) NOT NULL DEFAULT '0.00',
  `density` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total_weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total_amount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `process_status` enum('IN','OUT','DRAFT','PURCHASE-IN','WASTE-OUT','RETURN-OUT','NOT-APPROVED','CANCELLED') DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_inventory`
--

INSERT INTO `raw_inventory` (`id`, `item_id`, `ref_no`, `qty`, `lenght`, `width`, `height`, `density`, `weight`, `price`, `total_weight`, `total_amount`, `created_at`, `process_status`, `type`) VALUES
(42, 2, '4', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '500000.00', '200.00', '5000000.00', '2021-04-27 18:30:00', 'RETURN-OUT', NULL),
(43, 1, '4', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '200000.00', '150.00', '3000000.00', '2021-04-27 18:30:00', 'RETURN-OUT', NULL),
(44, 3, '3', '100.00', '10.00', '10.00', '5.00', '3.00', '1500.00', '800000.00', '150000.00', '80000000.00', '2021-04-27 18:30:00', 'PURCHASE-IN', NULL),
(45, 2, '3', '100.00', '20.00', '10.00', '5.00', '2.00', '2000.00', '500000.00', '200000.00', '50000000.00', '2021-04-27 18:30:00', 'PURCHASE-IN', NULL),
(46, 1, '3', '100.00', '10.00', '10.00', '5.00', '2.00', '1000.00', '200000.00', '100000.00', '20000000.00', '2021-04-27 18:30:00', 'PURCHASE-IN', NULL),
(47, 3, '4', '50.00', '10.00', '10.00', '5.00', '3.00', '1500.00', '800000.00', '75000.00', '40000000.00', '2021-04-27 18:30:00', 'PURCHASE-IN', NULL),
(48, 2, '4', '50.00', '20.00', '10.00', '5.00', '2.00', '2000.00', '500000.00', '100000.00', '25000000.00', '2021-04-27 18:30:00', 'PURCHASE-IN', NULL),
(49, 1, '4', '50.00', '10.00', '10.00', '5.00', '2.00', '1000.00', '200000.00', '50000.00', '10000000.00', '2021-04-27 18:30:00', 'PURCHASE-IN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `contact_id`, `admin_id`, `label`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `country`, `is_default`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 8, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(4, 8, 0, NULL, 'indore madhya pradesh', NULL, 'bhopal', 'Madhya Pradesh', '452002', 'India', 0, 1, NULL, NULL),
(5, 8, 0, NULL, '402 ashiyana center', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(6, 7, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(7, 7, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(8, 7, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(9, 7, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(10, 7, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(11, 6, 0, NULL, 'XYZ madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(12, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(13, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(14, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(15, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(16, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(17, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(18, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(19, 6, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(20, 6, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(21, 6, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(22, 6, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(23, 6, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(24, 6, 0, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', 0, 1, NULL, NULL),
(25, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(26, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(27, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(28, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(29, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(30, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(31, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(32, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL),
(33, 6, 0, NULL, '', NULL, '', '', '', '', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_accounts`
--

CREATE TABLE `sys_accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `balance` decimal(18,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(200) DEFAULT NULL,
  `account_number` varchar(200) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `contact_phone` varchar(100) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `ib_url` varchar(200) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `notes` text,
  `sorder` int(11) DEFAULT NULL,
  `e` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_accounts`
--

INSERT INTO `sys_accounts` (`id`, `account`, `description`, `balance`, `bank_name`, `account_number`, `currency`, `branch`, `address`, `contact_person`, `contact_phone`, `website`, `ib_url`, `created`, `notes`, `sorder`, `e`, `token`, `status`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 'Rudra', 'Billing Acc', '0.00', '', '234567777788876', '', '', '', '', '', '', '', '2021-03-16', '', 1, '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_activity`
--

CREATE TABLE `sys_activity` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `msg` text NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT '',
  `stime` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `o` int(11) NOT NULL DEFAULT '0',
  `oname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_api`
--

CREATE TABLE `sys_api` (
  `id` int(11) NOT NULL,
  `label` text,
  `ip` text,
  `apikey` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_appconfig`
--

CREATE TABLE `sys_appconfig` (
  `id` int(11) NOT NULL,
  `setting` varchar(200) NOT NULL DEFAULT '',
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_appconfig`
--

INSERT INTO `sys_appconfig` (`id`, `setting`, `value`) VALUES
(1, 'CompanyName', 'Gig Digital'),
(29, 'theme', 'default'),
(37, 'currency_code', 'Rs'),
(56, 'language', 'en'),
(57, 'show-logo', '1'),
(58, 'nstyle', 'dark'),
(63, 'dec_point', '.'),
(64, 'thousands_sep', ','),
(65, 'timezone', 'Asia/Kolkata'),
(66, 'country', 'India'),
(67, 'country_code', 'US'),
(68, 'df', 'Y-m-d'),
(69, 'caddress', 'India'),
(70, 'account_search', '1'),
(71, 'redirect_url', 'dashboard'),
(72, 'rtl', '0'),
(73, 'ckey', '0982995697'),
(74, 'networth_goal', '350000'),
(75, 'sysEmail', 'demo@example.com'),
(76, 'url_rewrite', '0'),
(77, 'build', '553'),
(78, 'animate', '0'),
(79, 'pdf_font', 'dejavusanscondensed'),
(80, 'accounting', '1'),
(81, 'invoicing', '1'),
(82, 'quotes', '1'),
(83, 'client_dashboard', '1'),
(84, 'contact_set_view_mode', 'search'),
(85, 'invoice_terms', ''),
(86, 'console_notify_invoice_created', '0'),
(87, 'i_driver', 'v2'),
(88, 'purchase_key', ''),
(89, 'c_cache', ''),
(90, 'mininav', '0'),
(91, 'hide_footer', '1'),
(92, 'design', 'default'),
(93, 'default_landing_page', 'login'),
(94, 'recaptcha', '0'),
(95, 'recaptcha_sitekey', ''),
(96, 'recaptcha_secretkey', ''),
(97, 'home_currency', 'INR'),
(98, 'currency_decimal_digits', 'true'),
(99, 'currency_symbol_position', 'p'),
(100, 'thousand_separator_placement', '3'),
(101, 'dashboard', 'canvas'),
(102, 'header_scripts', ''),
(103, 'footer_scripts', ''),
(104, 'ib_key', 'vLBLfhA6DNi1R2MFHO8IvFWr4Cn9665eHUF+L/sqAKM='),
(105, 'ib_s', 'PNhjeZ0sOFF3JNfzT2mLxvNNKPeh6ltqpE+G5LVSDSvgp/z79Sco7W4tJEoXYIl8'),
(106, 'ib_u_t', '1512841700'),
(107, 'ib_u_a', '0'),
(108, 'momentLocale', 'en'),
(109, 'contentAnimation', 'animated fadeIn'),
(110, 'calendar', '1'),
(111, 'leads', '1'),
(112, 'tasks', '1'),
(113, 'orders', '1'),
(114, 'show_quantity_as', ''),
(115, 'gmap_api_key', ''),
(116, 'license_key', ''),
(117, 'local_key', ''),
(118, 'ib_installed_at', '1485170108'),
(119, 'maxmind_installed', '1'),
(120, 'maxmind_db_version', ''),
(121, 'add_fund', '1'),
(122, 'add_fund_minimum_deposit', '100'),
(123, 'add_fund_maximum_deposit', '2500'),
(124, 'add_fund_maximum_balance', '25000'),
(125, 'add_fund_require_active_order', '0'),
(126, 'industry', 'default'),
(127, 'sales_target', '10000'),
(128, 'inventory', '1'),
(129, 'secondary_currency', ''),
(130, 'customer_custom_username', '1'),
(131, 'documents', '1'),
(132, 'projects', '1'),
(133, 'purchase', '1'),
(134, 'suppliers', '1'),
(135, 'support', '1'),
(136, 'hrm', '1'),
(137, 'companies', '1'),
(138, 'plugins', '1'),
(139, 'country_flag_code', 'in'),
(140, 'graph_primary_color', '002868'),
(141, 'graph_secondary_color', 'dc171d'),
(142, 'expense_type_1', 'Personal'),
(143, 'expense_type_2', 'Business'),
(144, 'edition', 'default'),
(147, 'assets', '1'),
(148, 'kb', '1'),
(149, 'business_id_1', ''),
(150, 'business_id_2', ''),
(151, 'logo_default', 'logo_7611009126.png'),
(152, 'logo_inverse', 'logo_inverse_0222885557.png'),
(153, 'add_fund_client', '1'),
(154, 'order_method', 'default'),
(155, 'purchase_code', ''),
(156, 'invoice_receipt_number', '0'),
(157, 'allow_customer_registration', '1'),
(158, 'fax_field', '0'),
(159, 'show_business_number', '1'),
(160, 'label_business_number', 'GSTIN'),
(161, 'sms', '1'),
(162, 'sms_request_method', 'POST'),
(163, 'sms_auth_header', ''),
(164, 'sms_req_url', ''),
(165, 'sms_notify_admin_new_deposit', '0'),
(166, 'sms_notify_customer_signed_up', '0'),
(167, 'sms_notify_customer_invoice_created', '0'),
(168, 'sms_notify_customer_invoice_paid', '0'),
(169, 'sms_notify_customer_payment_received', '0'),
(170, 'sms_api_handler', 'Nexmo'),
(171, 'sms_auth_username', ''),
(172, 'sms_auth_password', ''),
(173, 'sms_sender_name', 'CLX'),
(175, 'sms_http_params', ''),
(176, 'purchase_invoice_payment_status', '0'),
(177, 'quote_confirmation_email', '1'),
(178, 'client_drive', '1'),
(179, 's_version', '7'),
(180, 'latest_file', '4618152936941418.zip'),
(181, 'invoice_show_watermark', '1'),
(183, 'show_country_flag', '0'),
(184, 'drive', '0'),
(185, 'tax_system', 'India'),
(186, 'pos', '1'),
(187, 'password_manager', 'default'),
(188, 'update_manager', '1'),
(189, 'app_credentials', '0'),
(190, 'business_location', 'Maharashtra'),
(191, 'hr', '1'),
(192, 'mailgun_api_key', ''),
(193, 'sparkpost_api_key', ''),
(194, 'mailgun_domain', ''),
(195, 'show_sidebar_header', '1'),
(196, 'top_bar_is_dark', '1'),
(198, 'slack_webhook_url', ''),
(199, 'config_recaptcha_in_client_login', '0'),
(200, 'config_recaptcha_in_admin_login', '0'),
(201, 'contact_list_show_company_column', '0'),
(202, 'config_contact_list_show_group_column', '1'),
(203, 'contact_list_show_group_column', '0'),
(208, 'tickets_assigned_sms_notification', '1'),
(209, 'number_pad', '5'),
(210, 'customer_code_prefix', 'CUS-'),
(211, 'customer_code_template', ''),
(212, 'customer_code_current_number', '5'),
(213, 'supplier_code_prefix', 'SUP-'),
(214, 'supplier_code_template', ''),
(215, 'supplier_code_current_number', '1'),
(216, 'income_code_prefix', 'INC-'),
(217, 'income_code_template', ''),
(218, 'income_code_current_number', '1'),
(219, 'expense_code_prefix', 'EXP-'),
(220, 'expense_code_template', ''),
(221, 'expense_code_current_number', '2'),
(222, 'invoice_code_prefix', 'INV-'),
(223, 'invoice_code_template', ''),
(224, 'invoice_code_current_number', '4'),
(225, 'quotation_code_prefix', 'QUOTE-'),
(226, 'quotation_code_template', ''),
(227, 'quotation_code_current_number', '51'),
(228, 'purchase_code_prefix', 'PO-'),
(229, 'purchase_code_template', ''),
(230, 'purchase_code_current_number', '3'),
(231, 'contact_display_name_string', 'Display Name'),
(232, 'contact_extra_field', 'Display Name'),
(233, 'company_code_prefix', 'COMP-'),
(234, 'company_code_template', ''),
(235, 'company_code_current_number', '4'),
(236, 'ticket_code_prefix', ''),
(237, 'ticket_code_template', ''),
(238, 'ticket_code_current_number', ''),
(239, 'invoice_client_can_attach_signature', '1'),
(240, 'logo_text', 'Gig Digital'),
(241, 'logo_square', 'logo-512x512-1666525402.png'),
(242, 'icon-270', 'icon-270x270-1614339072.png'),
(243, 'icon-192', 'icon-192x192-1614339072.png'),
(244, 'icon-180', 'icon-180x180-1614339072.png'),
(245, 'icon-32', 'icon-32x32-1614339072.png'),
(246, 'address_format', 'default'),
(247, 'vat_number', ''),
(248, 'invoice_default_date', 'due_on_receipt'),
(249, 'InvoiceBank', '<p><strong>Bank :</strong> Punjab nation Bank</p><p><strong>IFSC:</strong>PUNB00666</p><p><strong>Ac.No:</strong>88899988899988</p>'),
(250, 'invoicedeclaration', '<p>No Declaration for this invoice</p>'),
(251, 'morder', '1'),
(252, 'morder_prefix', 'MO'),
(253, 'min_material_bill_value', '0'),
(254, 'max_material_bill_value', '1700000');

-- --------------------------------------------------------

--
-- Table structure for table `sys_canned_responses`
--

CREATE TABLE `sys_canned_responses` (
  `id` int(11) NOT NULL,
  `title` text,
  `message` text,
  `tags` text,
  `attachments` text,
  `sorder` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cart`
--

CREATE TABLE `sys_cart` (
  `id` int(11) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `items` text,
  `total` decimal(16,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `ip` varchar(100) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `language` varchar(200) DEFAULT NULL,
  `coupon` varchar(200) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `item_count` int(11) NOT NULL DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `lid` int(11) NOT NULL DEFAULT '0',
  `currency_id` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `memo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cats`
--

CREATE TABLE `sys_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('Income','Expense') NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0',
  `total_amount` decimal(16,4) DEFAULT '0.0000',
  `budget` decimal(16,4) DEFAULT '0.0000',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `total_spend` decimal(16,4) DEFAULT '0.0000',
  `current_month_spend` decimal(16,4) DEFAULT '0.0000',
  `current_year_spend` decimal(16,4) DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_cats`
--

INSERT INTO `sys_cats` (`id`, `name`, `type`, `sorder`, `total_amount`, `budget`, `created_at`, `updated_at`, `total_spend`, `current_month_spend`, `current_year_spend`) VALUES
(14, 'Advertising', 'Expense', 1, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(15, 'Bank and Credit Card Interest', 'Expense', 23, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(16, 'Car and Truck', 'Expense', 24, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(17, 'Commissions and Fees', 'Expense', 25, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(18, 'Contract Labor', 'Expense', 26, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(19, 'Contributions', 'Expense', 27, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(20, 'Cost of Goods Sold', 'Expense', 28, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(21, 'Credit Card Interest', 'Expense', 29, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(22, 'Depreciation', 'Expense', 31, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(23, 'Dividend Payments', 'Expense', 32, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(24, 'Employee Benefit Programs', 'Expense', 33, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(25, 'Entertainment', 'Expense', 34, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(26, 'Gift', 'Expense', 35, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(27, 'Insurance', 'Expense', 36, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(28, 'Legal, Accountant &amp; Other Professional Services', 'Expense', 37, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(29, 'Meals', 'Expense', 38, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(30, 'Mortgage Interest', 'Expense', 39, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(31, 'Non-Deductible Expense', 'Expense', 40, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(33, 'Other Business Property Leasing', 'Expense', 22, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(34, 'Owner Draws', 'Expense', 21, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(35, 'Payroll Taxes', 'Expense', 8, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(37, 'Phone', 'Expense', 9, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(38, 'Postage', 'Expense', 10, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(39, 'Rent', 'Expense', 12, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(40, 'Repairs &amp; Maintenance', 'Expense', 11, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(41, 'Supplies', 'Expense', 13, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(42, 'Taxes and Licenses', 'Expense', 14, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(43, 'Transfer Funds', 'Expense', 15, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(44, 'Travel', 'Expense', 16, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(45, 'Utilities', 'Expense', 17, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(46, 'Vehicle, Machinery &amp; Equipment Rental or Leasing', 'Expense', 18, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(47, 'Wages', 'Expense', 19, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(48, 'Regular Income', 'Income', 1, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(49, 'Owner Contribution', 'Income', 12, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(50, 'Interest Income', 'Income', 11, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(51, 'Expense Refund', 'Income', 10, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(52, 'Other Income', 'Income', 9, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(53, 'Salary', 'Income', 8, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(54, 'Equities', 'Income', 7, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(55, 'Rent &amp; Royalties', 'Income', 6, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(56, 'Home equity', 'Income', 5, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(57, 'Part Time Work', 'Income', 3, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(58, 'Account Transfer', 'Income', 4, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(60, 'Health Care', 'Expense', 20, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(63, 'Loans', 'Expense', 30, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(64, 'Selling Software', 'Income', 2, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(65, 'Software Customization', 'Income', 13, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(67, 'Salary', 'Expense', 7, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(68, 'Paypal', 'Expense', 6, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(69, 'Office Equipment', 'Expense', 5, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(70, 'Staff Entertaining', 'Expense', 3, '0.0000', '0.0000', '0000-00-00 00:00:00', '2018-11-20 16:57:47', '0.0000', '0.0000', '0.0000'),
(71, 'Uncategorized', 'Income', 0, '0.0000', '0.0000', '2018-04-05 04:59:50', '2021-03-17 12:35:11', '0.0000', '0.0000', '0.0000');

-- --------------------------------------------------------

--
-- Table structure for table `sys_companies`
--

CREATE TABLE `sys_companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `business_number` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `logo_url` varchar(200) DEFAULT NULL,
  `logo_path` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `emails` text,
  `phones` text,
  `tags` text,
  `description` text,
  `notes` text,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `assigned` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `ratings` varchar(50) DEFAULT NULL,
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `company_type` enum('Partnership','Proprietorship','LLP','PrivateLimited','OnePerson','PublicLimited','Section8') DEFAULT NULL,
  `tds_deduction` decimal(25,2) NOT NULL DEFAULT '0.00',
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_companies`
--

INSERT INTO `sys_companies` (`id`, `company_name`, `code`, `business_number`, `url`, `logo_url`, `logo_path`, `email`, `phone`, `emails`, `phones`, `tags`, `description`, `notes`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `source`, `added_from`, `o`, `cid`, `aid`, `pid`, `oid`, `rid`, `assigned`, `created_at`, `created_by`, `updated_at`, `updated_by`, `last_contact`, `last_contact_by`, `ratings`, `trash`, `archived`, `company_type`, `tds_deduction`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 'ABC Company', 'COMP-00001', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'United States', '', '', '', 0, 0, 0, 0, 0, 0, '2021-02-26 01:22:03', '', '2021-03-26 19:13:32', '', '0000-00-00 00:00:00', '', '', 0, 0, 'Proprietorship', '5.00', '', '', '', '', ''),
(2, 'Emerson', 'COMP-00002', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', 'Maharashtra', '411027', 'India', '', '', '', 0, 0, 0, 0, 0, 0, '2021-03-06 04:34:53', '', '2021-03-26 19:13:20', '', '0000-00-00 00:00:00', '', '', 0, 0, 'LLP', '2.00', '', '', '', '', ''),
(3, 'REDBOX', 'COMP-00003', '', 'http://', '', NULL, 'sunil.patidar2050@gmail.com', '08269365947', NULL, NULL, NULL, NULL, NULL, 'indore madhya pradesh', NULL, 'indore', 'Madhya Pradesh', '452001', 'India', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '2021-03-26 18:03:26', NULL, '2021-03-26 19:13:00', NULL, NULL, NULL, NULL, 0, 0, 'PublicLimited', '8.00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_currencies`
--

CREATE TABLE `sys_currencies` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `iso_code` varchar(10) DEFAULT NULL,
  `symbol` varchar(20) DEFAULT NULL,
  `rate` decimal(16,8) NOT NULL DEFAULT '1.00000000',
  `prefix` varchar(20) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `format` varchar(100) DEFAULT NULL,
  `decimal_separator` varchar(10) DEFAULT NULL,
  `thousand_separator` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `available_in` text,
  `isdefault` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_currencies`
--

INSERT INTO `sys_currencies` (`id`, `cname`, `iso_code`, `symbol`, `rate`, `prefix`, `suffix`, `format`, `decimal_separator`, `thousand_separator`, `created_at`, `created_by`, `updated_at`, `updated_by`, `available_in`, `isdefault`, `trash`, `archived`) VALUES
(1, 'USD', 'USD', '$', '1.00000000', '', '', '', '', '', '2018-11-20 16:57:47', '', '2018-11-20 16:57:47', '', '', 0, 0, 0),
(2, 'INR', 'INR', '', '0.00140000', '', '', '', '', '', '2021-03-03 15:59:53', '', '2021-03-03 16:00:24', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_documents`
--

CREATE TABLE `sys_documents` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `file_o_name` varchar(200) DEFAULT NULL,
  `file_r_name` varchar(200) DEFAULT NULL,
  `file_mime_type` varchar(200) DEFAULT NULL,
  `file_path` varchar(200) DEFAULT NULL,
  `file_dl_token` varchar(200) DEFAULT NULL,
  `file_owner` int(11) NOT NULL DEFAULT '0',
  `version` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `sha1` varchar(40) DEFAULT NULL,
  `md5` varchar(32) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `contacts` text,
  `deals` text,
  `leads` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `customer_can_download` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `is_global` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_documents`
--

INSERT INTO `sys_documents` (`id`, `title`, `file_o_name`, `file_r_name`, `file_mime_type`, `file_path`, `file_dl_token`, `file_owner`, `version`, `link`, `sha1`, `md5`, `cid`, `gid`, `company_id`, `aid`, `contacts`, `deals`, `leads`, `created_at`, `created_by`, `updated_at`, `updated_by`, `customer_can_download`, `trash`, `archived`, `is_global`) VALUES
(1, 'customer detail', '', '', 'jpeg', '_2e9f978b410006161586203010122749.jpeg', 'hsrlppri2jdfjvo3kv2daihlu4q5xj', 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-03-16 08:04:02', '', '0000-00-00 00:00:00', '', 0, 0, 0, 0),
(2, 'sample image', '', '', 'jpg', '_3fb04953934279161589993611037061.jpg', '9cmy4th0qt2coybwossy8sg5jo8n8x', 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-03-16 18:35:45', '', '0000-00-00 00:00:00', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_emailconfig`
--

CREATE TABLE `sys_emailconfig` (
  `id` int(11) NOT NULL,
  `method` varchar(50) NOT NULL,
  `host` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `apikey` varchar(200) NOT NULL,
  `port` varchar(10) NOT NULL,
  `secure` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_emailconfig`
--

INSERT INTO `sys_emailconfig` (`id`, `method`, `host`, `username`, `password`, `apikey`, `port`, `secure`) VALUES
(1, 'phpmail', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sys_email_logs`
--

CREATE TABLE `sys_email_logs` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `iid` int(11) NOT NULL DEFAULT '0',
  `rel_type` varchar(100) DEFAULT NULL,
  `rel_id` int(11) NOT NULL DEFAULT '0',
  `purchase_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_email_templates`
--

CREATE TABLE `sys_email_templates` (
  `id` int(11) NOT NULL,
  `tplname` varchar(128) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `send` varchar(50) DEFAULT 'Active',
  `core` enum('Yes','No') DEFAULT 'Yes',
  `hidden` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_events`
--

CREATE TABLE `sys_events` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `contacts` text,
  `deals` text,
  `owner` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `etype` varchar(200) DEFAULT NULL,
  `priority` varchar(200) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `allday` int(1) NOT NULL DEFAULT '0',
  `notification` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_events`
--

INSERT INTO `sys_events` (`id`, `title`, `description`, `contacts`, `deals`, `owner`, `status`, `etype`, `priority`, `color`, `o`, `cid`, `aid`, `iid`, `oid`, `rid`, `company_id`, `start`, `end`, `allday`, `notification`, `trash`, `archived`) VALUES
(1, 'CRM Demo', 'CRM Demo with Umesh', '', '', '', '', '', '', '#2196f3', '', 0, 1, 0, 0, 0, 0, '2021-03-06 10:00:00', '2021-03-06 11:30:59', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_goods_inventory`
--

CREATE TABLE `sys_goods_inventory` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `ref_no` varchar(255) DEFAULT NULL,
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `lenght` decimal(25,2) NOT NULL DEFAULT '0.00',
  `width` decimal(25,2) NOT NULL DEFAULT '0.00',
  `height` decimal(25,2) NOT NULL DEFAULT '0.00',
  `density` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total_weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total_amount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `process_status` enum('IN','OUT','DRAFT','PURCHASE-IN','TRANSFER-IN') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_goods_inventory`
--

INSERT INTO `sys_goods_inventory` (`id`, `item_id`, `invoice_id`, `ref_no`, `qty`, `lenght`, `width`, `height`, `density`, `weight`, `price`, `total_weight`, `total_amount`, `created_at`, `process_status`) VALUES
(1, 1, NULL, '0001', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10000.00', '0.00', '0.00', '2021-04-23 18:30:00', 'IN'),
(2, 2, NULL, '0002', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '2021-04-23 18:30:00', 'IN'),
(3, 3, NULL, '0003', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00', '0.00', '0.00', '2021-04-23 18:30:00', 'IN'),
(4, 4, NULL, '0004', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '0.00', '0.00', '2021-04-23 18:30:00', 'IN'),
(5, 1, 1, '1\r\n                             ', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2021-04-23 18:30:00', 'OUT'),
(6, 4, 1, '4\r\n                             ', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2021-04-23 18:30:00', 'OUT'),
(9, 4, NULL, 'TR0003', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '0.00', '0.00', '2021-04-26 18:30:00', 'TRANSFER-IN'),
(10, 4, NULL, 'TR0004', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '0.00', '0.00', '2021-04-26 18:30:00', 'TRANSFER-IN'),
(11, 4, NULL, 'TR0004', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '0.00', '0.00', '2021-04-26 18:30:00', 'TRANSFER-IN');

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoiceitems`
--

CREATE TABLE `sys_invoiceitems` (
  `id` int(10) NOT NULL,
  `invoiceid` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL,
  `type` text NOT NULL,
  `relid` int(10) NOT NULL,
  `itemcode` varchar(100) NOT NULL,
  `tax_code` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT '1',
  `amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `taxed` int(1) NOT NULL,
  `tax_name` varchar(200) DEFAULT NULL,
  `tax_rate` decimal(16,3) DEFAULT NULL,
  `taxamount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax1` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax2` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax3` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `discount_type` varchar(100) DEFAULT NULL,
  `discount_amount` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `discount_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total` decimal(14,2) NOT NULL DEFAULT '0.00',
  `total_notds` decimal(25,2) NOT NULL DEFAULT '0.00',
  `duedate` date DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `business_id` int(11) DEFAULT NULL,
  `tds_deduction` enum('YES','NO','','') DEFAULT NULL,
  `tds_value` decimal(25,2) DEFAULT '0.00',
  `tds_rate` decimal(25,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_invoiceitems`
--

INSERT INTO `sys_invoiceitems` (`id`, `invoiceid`, `userid`, `type`, `relid`, `itemcode`, `tax_code`, `description`, `qty`, `amount`, `taxed`, `tax_name`, `tax_rate`, `taxamount`, `tax1`, `tax2`, `tax3`, `discount_type`, `discount_amount`, `discount_rate`, `total`, `total_notds`, `duedate`, `paymentmethod`, `notes`, `business_id`, `tds_deduction`, `tds_value`, `tds_rate`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '', 0, '1\r\n                             ', '', '<p>Aluminium Box</p>', '5', '10000.00', 1, NULL, '3.000', '1500.00', '0.0000', '0.0000', '0.0000', 'p', '0.0000', '0.00', '50000.00', '50000.00', '2021-04-24', '', '', NULL, 'YES', '0.00', '0.00', NULL, NULL),
(2, 1, 8, '', 0, '4\r\n                             ', '', '<p>CPR Box</p>', '5', '2000.00', 1, NULL, '3.000', '300.00', '0.0000', '0.0000', '0.0000', 'p', '0.0000', '0.00', '10000.00', '10000.00', '2021-04-24', '', '', NULL, 'NO', '0.00', '0.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoices`
--

CREATE TABLE `sys_invoices` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `account` varchar(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `cn` varchar(100) NOT NULL DEFAULT '',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` datetime DEFAULT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT 'f',
  `discount_value` decimal(14,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `taxname` varchar(100) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `tax2` decimal(10,2) NOT NULL,
  `tax_total` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `taxrate` decimal(10,2) NOT NULL,
  `taxrate2` decimal(10,2) NOT NULL,
  `status` text NOT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT '0',
  `nd` date DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT '0',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `vid` int(11) NOT NULL DEFAULT '0',
  `quote_id` int(11) NOT NULL DEFAULT '0',
  `ticket_id` int(11) DEFAULT '0',
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_iso_code` char(3) DEFAULT NULL,
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `recurring` tinyint(1) NOT NULL DEFAULT '0',
  `recurring_ends` date DEFAULT NULL,
  `last_recurring_date` date DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT '0',
  `last_overdue_reminder` date DEFAULT NULL,
  `allowed_payment_methods` text,
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(50) DEFAULT NULL,
  `billing_country` varchar(100) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `q_hide` tinyint(1) NOT NULL DEFAULT '0',
  `show_quantity_as` varchar(100) DEFAULT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `is_credit_invoice` int(1) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `aname` varchar(200) DEFAULT NULL,
  `receipt_number` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `workspace_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `c1` varchar(255) DEFAULT NULL,
  `c2` varchar(255) DEFAULT NULL,
  `c3` varchar(255) DEFAULT NULL,
  `c4` varchar(255) DEFAULT NULL,
  `c5` text,
  `signature_data_source` text,
  `signature_data_base64` text,
  `signature_data_svg` text,
  `is_same_state` tinyint(1) DEFAULT '1',
  `code` varchar(100) DEFAULT NULL,
  `original_for_buyer` enum('YES','NO') DEFAULT 'NO',
  `duplicate_for_transporter` enum('YES','NO') DEFAULT 'NO',
  `third_copy_supplier` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `bank_account_details` text,
  `declaration` text,
  `shippingid` int(11) NOT NULL DEFAULT '0',
  `tds_value` decimal(25,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_invoices`
--

INSERT INTO `sys_invoices` (`id`, `userid`, `account`, `title`, `cn`, `invoicenum`, `date`, `duedate`, `datepaid`, `subtotal`, `discount_type`, `discount_value`, `discount`, `credit`, `taxname`, `tax`, `tax2`, `tax_total`, `total`, `taxrate`, `taxrate2`, `status`, `paymentmethod`, `notes`, `vtoken`, `ptoken`, `r`, `nd`, `eid`, `ename`, `vid`, `quote_id`, `ticket_id`, `currency`, `currency_iso_code`, `currency_symbol`, `currency_prefix`, `currency_suffix`, `currency_rate`, `recurring`, `recurring_ends`, `last_recurring_date`, `source`, `sale_agent`, `last_overdue_reminder`, `allowed_payment_methods`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `shipping_country`, `q_hide`, `show_quantity_as`, `pid`, `is_credit_invoice`, `aid`, `aname`, `receipt_number`, `updated_at`, `created_at`, `workspace_id`, `parent_id`, `c1`, `c2`, `c3`, `c4`, `c5`, `signature_data_source`, `signature_data_base64`, `signature_data_svg`, `is_same_state`, `code`, `original_for_buyer`, `duplicate_for_transporter`, `third_copy_supplier`, `bank_account_details`, `declaration`, `shippingid`, `tds_value`) VALUES
(1, 8, 'Test customer 3', '', '00003', 'INV-', '2021-04-24', '2021-04-24', '2021-04-24 23:28:14', '60000.00', 'p', '0.00', '0.00', '0.00', '', '1800.00', '0.00', '0.0000', '61800.00', '0.00', '0.00', 'Unpaid', '', '<p>NA</p>', '0968968138', '7893674096', '0', '2021-04-24', 0, '', 0, 0, 0, 2, 'INR', '', NULL, NULL, '0.0014', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Qty', 0, 0, 1, NULL, '', '2021-04-24 17:58:14', '2021-04-24 17:58:14', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'YES', 'YES', 'YES', '<p><strong>Bank :</strong> Punjab nation Bank</p><p><strong>IFSC:</strong>PUNB00666</p><p><strong>Ac.No:</strong>88899988899988</p>', '<p>No Declaration for this invoice</p>', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_items`
--

CREATE TABLE `sys_items` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `unit` varchar(100) NOT NULL DEFAULT '',
  `sales_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `inventory` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `weight` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `width` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `length` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `height` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `sku` varchar(50) DEFAULT NULL,
  `upc` varchar(50) DEFAULT NULL,
  `ean` varchar(50) DEFAULT NULL,
  `mpn` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `supplier` varchar(200) DEFAULT NULL,
  `bid` int(11) NOT NULL DEFAULT '0',
  `brand` varchar(200) DEFAULT NULL,
  `sell_account` int(11) NOT NULL DEFAULT '0',
  `purchase_account` int(11) NOT NULL DEFAULT '0',
  `inventory_account` int(11) NOT NULL DEFAULT '0',
  `taxable` int(1) NOT NULL DEFAULT '0',
  `location` varchar(200) DEFAULT NULL,
  `item_number` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` enum('Service','Product') NOT NULL,
  `track_inventroy` enum('Yes','No') NOT NULL DEFAULT 'No',
  `negative_stock` enum('Yes','No') NOT NULL DEFAULT 'No',
  `available` int(11) NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `added` date DEFAULT NULL,
  `last_sold` date DEFAULT NULL,
  `e` mediumtext NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `supplier_id` int(11) NOT NULL DEFAULT '0',
  `gname` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `expire_days` int(11) NOT NULL DEFAULT '0',
  `image` text,
  `flag` int(1) NOT NULL DEFAULT '0',
  `is_service` int(1) NOT NULL DEFAULT '0',
  `commission_percent` decimal(16,2) NOT NULL DEFAULT '0.00',
  `commission_percent_type` varchar(100) DEFAULT NULL,
  `commission_fixed` decimal(16,2) NOT NULL DEFAULT '0.00',
  `trash` int(1) NOT NULL DEFAULT '0',
  `payterm` varchar(200) DEFAULT NULL,
  `cost_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `unit_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `promo_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `setup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `onetime` decimal(16,2) NOT NULL DEFAULT '0.00',
  `monthly` decimal(16,2) NOT NULL DEFAULT '0.00',
  `monthlysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `quarterly` decimal(16,2) NOT NULL DEFAULT '0.00',
  `quarterlysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `halfyearly` decimal(16,2) NOT NULL DEFAULT '0.00',
  `halfyearlysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `annually` decimal(16,2) NOT NULL DEFAULT '0.00',
  `annuallysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `biennially` decimal(16,2) NOT NULL DEFAULT '0.00',
  `bienniallysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `triennially` decimal(16,2) NOT NULL DEFAULT '0.00',
  `trienniallysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `has_domain` varchar(100) DEFAULT NULL,
  `free_domain` varchar(100) DEFAULT NULL,
  `email_rel` int(11) NOT NULL DEFAULT '0',
  `tags` text,
  `sold_count` decimal(16,4) DEFAULT '0.0000',
  `total_amount` decimal(16,4) DEFAULT '0.0000',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tax_code` varchar(200) DEFAULT NULL,
  `tds_deduction` enum('YES','NO') DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_items`
--

INSERT INTO `sys_items` (`id`, `name`, `unit`, `sales_price`, `inventory`, `weight`, `width`, `length`, `height`, `sku`, `upc`, `ean`, `mpn`, `isbn`, `sid`, `supplier`, `bid`, `brand`, `sell_account`, `purchase_account`, `inventory_account`, `taxable`, `location`, `item_number`, `description`, `type`, `track_inventroy`, `negative_stock`, `available`, `status`, `added`, `last_sold`, `e`, `sorder`, `gid`, `category_id`, `supplier_id`, `gname`, `product_id`, `size`, `start_date`, `end_date`, `expire_date`, `expire_days`, `image`, `flag`, `is_service`, `commission_percent`, `commission_percent_type`, `commission_fixed`, `trash`, `payterm`, `cost_price`, `unit_price`, `promo_price`, `setup`, `onetime`, `monthly`, `monthlysetup`, `quarterly`, `quarterlysetup`, `halfyearly`, `halfyearlysetup`, `annually`, `annuallysetup`, `biennially`, `bienniallysetup`, `triennially`, `trienniallysetup`, `has_domain`, `free_domain`, `email_rel`, `tags`, `sold_count`, `total_amount`, `created_at`, `updated_at`, `tax_code`, `tds_deduction`) VALUES
(1, 'Aluminium Box', 'Piece', '10000.00', '5.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0001', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '10000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '101', 'YES'),
(2, 'Steel Box', 'Piece', '5000.00', '5.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0002', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '102', 'NO'),
(3, 'Steel aluminium Box', 'Piece', '15000.00', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0003', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '15000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '', 'NO'),
(4, 'CPR Box', 'Piece', '2000.00', '75.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0004', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '2000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `sys_item_cats`
--

CREATE TABLE `sys_item_cats` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `description` text,
  `sorder` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_leads`
--

CREATE TABLE `sys_leads` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `sorder` int(11) NOT NULL DEFAULT '0',
  `assigned` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `date_converted` datetime DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT '0',
  `ratings` varchar(50) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  `lost` int(1) NOT NULL DEFAULT '0',
  `junk` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `id` int(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` text NOT NULL,
  `related_to` varchar(100) DEFAULT NULL,
  `related_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_logs`
--

INSERT INTO `sys_logs` (`id`, `date`, `type`, `description`, `userid`, `ip`, `related_to`, `related_id`) VALUES
(1, '2021-02-26 03:36:43', 'Admin', 'Login Successful admin@admin.com', 1, '127.0.0.1', '', 0),
(2, '2021-02-26 06:51:32', 'Admin', 'New Contact Added Umrao Test [CID: 1]', 1, '127.0.0.1', '', 0),
(3, '2021-02-26 07:15:27', 'Admin', 'Login Successful admin@admin.com', 1, '106.198.221.66', '', 0),
(4, '2021-02-26 07:23:12', 'Admin', 'Login Successful admin@admin.com', 1, '106.198.221.66', '', 0),
(5, '2021-02-26 12:11:07', 'Admin', 'Login Successful admin@admin.com', 1, '139.59.89.115', '', 0),
(6, '2021-02-28 01:21:11', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.38.155', '', 0),
(7, '2021-02-28 12:53:17', 'Admin', 'Login Successful admin@admin.com', 1, '106.198.136.138', '', 0),
(8, '2021-03-01 03:50:09', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(9, '2021-03-01 06:15:53', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(10, '2021-03-01 09:20:46', 'Admin', 'Login Successful admin@admin.com', 1, '106.198.245.214', '', 0),
(11, '2021-03-03 04:16:48', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.32.133', '', 0),
(12, '2021-03-03 05:26:45', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.32.133', '', 0),
(13, '2021-03-03 16:18:43', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.32.133', '', 0),
(14, '2021-03-04 09:49:27', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.32.133', '', 0),
(15, '2021-03-06 10:03:34', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.38.195', '', 0),
(16, '2021-03-06 10:06:25', 'Admin', 'New Contact Added Prathamesh Patil [CID: 7]', 1, '49.36.38.195', '', 0),
(17, '2021-03-13 17:07:32', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.36.173', '', 0),
(18, '2021-03-13 17:07:35', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.36.173', '', 0),
(19, '2021-03-15 10:13:37', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(20, '2021-03-15 10:15:49', 'Admin', 'New Contact Added Test customer 3 [CID: 8]', 1, '103.93.196.54', '', 0),
(21, '2021-03-15 10:16:44', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(22, '2021-03-15 10:19:05', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(23, '2021-03-15 10:21:56', 'Admin', 'Login Successful testStaff3@gmail.com', 2, '103.93.196.54', '', 0),
(24, '2021-03-15 10:23:18', 'Admin', 'Login Successful testStaff3@gmail.com', 2, '103.93.196.54', '', 0),
(25, '2021-03-15 10:23:35', 'Admin', 'Login Successful testStaff3@gmail.com', 2, '103.93.196.54', '', 0),
(26, '2021-03-15 10:24:58', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(27, '2021-03-15 10:34:33', 'Admin', 'Login Successful testStaff3@gmail.com', 2, '103.93.196.54', '', 0),
(28, '2021-03-15 10:35:45', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(29, '2021-03-15 10:46:48', 'Admin', 'Login Successful testStaff3@gmail.com', 2, '103.93.196.54', '', 0),
(30, '2021-03-15 10:50:51', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(31, '2021-03-15 10:52:14', 'Admin', 'Login Successful testStaff3@gmail.com', 2, '103.93.196.54', '', 0),
(32, '2021-03-15 17:30:42', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(33, '2021-03-16 13:13:29', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.36.77', '', 0),
(34, '2021-03-16 15:39:24', 'Admin', 'Login Successful admin@admin.com', 1, '103.93.196.54', '', 0),
(35, '2021-03-16 17:47:12', 'Admin', 'Login Successful admin@admin.com', 1, '42.108.242.84', '', 0),
(36, '2021-03-17 12:32:01', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.36.213', '', 0),
(37, '2021-03-17 12:33:10', 'Admin', 'Login Successful admin@admin.com', 1, '27.97.153.127', '', 0),
(38, '2021-03-17 16:26:00', 'Admin', 'Login Successful admin@admin.com', 1, '27.97.155.8', '', 0),
(39, '2021-03-17 16:34:33', 'Admin', 'Login Successful admin@admin.com', 1, '49.36.36.213', '', 0),
(40, '2021-03-19 19:07:16', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(41, '2021-03-21 10:00:24', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(42, '2021-03-24 12:04:55', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(43, '2021-03-26 18:58:40', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(44, '2021-03-26 19:00:39', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(45, '2021-03-26 19:11:40', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(46, '2021-03-26 22:50:31', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(47, '2021-03-26 23:18:58', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(48, '2021-03-26 23:56:46', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(49, '2021-03-26 23:56:47', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(50, '2021-03-26 23:56:47', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(51, '2021-03-27 01:03:11', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(52, '2021-03-27 01:10:08', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(53, '2021-03-27 01:10:51', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(54, '2021-03-27 09:08:00', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(55, '2021-03-27 09:08:01', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(56, '2021-03-27 09:08:14', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(57, '2021-03-27 09:48:31', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(58, '2021-03-27 09:48:43', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(59, '2021-03-27 10:40:04', 'Admin', 'New Contact Added sunil [CID: 9]', 1, '::1', NULL, NULL),
(60, '2021-03-27 12:36:16', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(61, '2021-03-27 12:37:20', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(62, '2021-03-27 12:38:48', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(63, '2021-03-27 12:39:11', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(64, '2021-03-27 12:42:27', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(65, '2021-03-27 12:42:38', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(66, '2021-03-27 12:43:12', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(67, '2021-03-27 12:43:15', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(68, '2021-03-27 12:43:22', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(69, '2021-03-27 12:43:55', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(70, '2021-03-27 12:44:37', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(71, '2021-03-27 12:46:03', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(72, '2021-03-27 12:46:17', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(73, '2021-03-27 12:46:28', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(74, '2021-03-27 14:42:42', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(75, '2021-03-27 16:05:42', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(76, '2021-03-28 10:51:21', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(77, '2021-03-28 12:17:46', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(78, '2021-03-30 08:54:24', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(79, '2021-04-01 17:11:58', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(80, '2021-04-03 12:48:37', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(81, '2021-04-03 12:48:46', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(82, '2021-04-03 22:24:58', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(83, '2021-04-03 22:27:15', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(84, '2021-04-03 22:39:36', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(85, '2021-04-03 22:42:08', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(86, '2021-04-04 09:48:45', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(87, '2021-04-04 11:03:52', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(88, '2021-04-05 19:01:38', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(89, '2021-04-06 10:00:54', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(90, '2021-04-06 10:01:39', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(91, '2021-04-06 10:05:13', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(92, '2021-04-06 10:05:36', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(93, '2021-04-06 10:07:21', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(94, '2021-04-06 10:09:31', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(95, '2021-04-06 10:10:28', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(96, '2021-04-06 10:10:46', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(97, '2021-04-06 11:13:32', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(98, '2021-04-06 16:35:53', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(99, '2021-04-06 16:36:07', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(100, '2021-04-06 16:36:15', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(101, '2021-04-07 09:05:04', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(102, '2021-04-07 09:13:38', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(103, '2021-04-07 09:13:49', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(104, '2021-04-07 15:25:56', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(105, '2021-04-07 18:09:26', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(106, '2021-04-07 23:37:19', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(107, '2021-04-08 01:20:59', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(108, '2021-04-08 01:42:05', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(109, '2021-04-08 01:53:53', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(110, '2021-04-08 01:53:59', 'Admin', 'Product Deleted: Gents Uniform Slim Fit [ID: 2]', 1, '::1', NULL, NULL),
(111, '2021-04-08 01:58:44', 'Admin', 'Product Deleted: Pro-01 [ID: 5]', 1, '::1', NULL, NULL),
(112, '2021-04-08 01:59:37', 'Admin', 'Product Deleted: abc [ID: 7]', 1, '::1', NULL, NULL),
(113, '2021-04-08 15:50:42', 'Admin', 'Product Deleted: Test1 [ID: 6]', 1, '::1', NULL, NULL),
(114, '2021-04-14 01:24:05', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(115, '2021-04-19 16:56:03', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(116, '2021-04-21 09:45:27', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(117, '2021-04-21 10:06:36', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(118, '2021-04-21 10:06:45', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(119, '2021-04-23 22:35:45', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL),
(120, '2021-04-23 22:35:56', 'Admin', 'Login Successful admin@admin.com', 1, '::1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_mitems`
--

CREATE TABLE `sys_mitems` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `raw_type` enum('Rectangle','Square','Other') NOT NULL DEFAULT 'Other',
  `unit` varchar(100) NOT NULL DEFAULT '',
  `sales_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `inventory` decimal(16,4) NOT NULL DEFAULT '1.0000',
  `weight` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `width` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `length` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `height` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `density` decimal(25,2) NOT NULL DEFAULT '0.00',
  `sku` varchar(50) DEFAULT NULL,
  `upc` varchar(50) DEFAULT NULL,
  `ean` varchar(50) DEFAULT NULL,
  `mpn` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `supplier` varchar(200) DEFAULT NULL,
  `bid` int(11) NOT NULL DEFAULT '0',
  `brand` varchar(200) DEFAULT NULL,
  `sell_account` int(11) NOT NULL DEFAULT '0',
  `purchase_account` int(11) NOT NULL DEFAULT '0',
  `inventory_account` int(11) NOT NULL DEFAULT '0',
  `taxable` int(1) NOT NULL DEFAULT '0',
  `location` varchar(200) DEFAULT NULL,
  `item_number` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` enum('Service','Product') NOT NULL,
  `track_inventroy` enum('Yes','No') NOT NULL DEFAULT 'No',
  `negative_stock` enum('Yes','No') NOT NULL DEFAULT 'No',
  `available` int(11) NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `added` date DEFAULT NULL,
  `last_sold` date DEFAULT NULL,
  `e` mediumtext NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `supplier_id` int(11) NOT NULL DEFAULT '0',
  `gname` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `expire_days` int(11) NOT NULL DEFAULT '0',
  `image` text,
  `flag` int(1) NOT NULL DEFAULT '0',
  `is_service` int(1) NOT NULL DEFAULT '0',
  `commission_percent` decimal(16,2) NOT NULL DEFAULT '0.00',
  `commission_percent_type` varchar(100) DEFAULT NULL,
  `commission_fixed` decimal(16,2) NOT NULL DEFAULT '0.00',
  `trash` int(1) NOT NULL DEFAULT '0',
  `payterm` varchar(200) DEFAULT NULL,
  `cost_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `unit_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `promo_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `setup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `onetime` decimal(16,2) NOT NULL DEFAULT '0.00',
  `monthly` decimal(16,2) NOT NULL DEFAULT '0.00',
  `monthlysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `quarterly` decimal(16,2) NOT NULL DEFAULT '0.00',
  `quarterlysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `halfyearly` decimal(16,2) NOT NULL DEFAULT '0.00',
  `halfyearlysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `annually` decimal(16,2) NOT NULL DEFAULT '0.00',
  `annuallysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `biennially` decimal(16,2) NOT NULL DEFAULT '0.00',
  `bienniallysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `triennially` decimal(16,2) NOT NULL DEFAULT '0.00',
  `trienniallysetup` decimal(16,2) NOT NULL DEFAULT '0.00',
  `has_domain` varchar(100) DEFAULT NULL,
  `free_domain` varchar(100) DEFAULT NULL,
  `email_rel` int(11) NOT NULL DEFAULT '0',
  `tags` text,
  `sold_count` decimal(16,4) DEFAULT '0.0000',
  `total_amount` decimal(16,4) DEFAULT '0.0000',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tax_code` varchar(200) DEFAULT NULL,
  `tds_deduction` enum('YES','NO') DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_mitems`
--

INSERT INTO `sys_mitems` (`id`, `name`, `raw_type`, `unit`, `sales_price`, `inventory`, `weight`, `width`, `length`, `height`, `density`, `sku`, `upc`, `ean`, `mpn`, `isbn`, `sid`, `supplier`, `bid`, `brand`, `sell_account`, `purchase_account`, `inventory_account`, `taxable`, `location`, `item_number`, `description`, `type`, `track_inventroy`, `negative_stock`, `available`, `status`, `added`, `last_sold`, `e`, `sorder`, `gid`, `category_id`, `supplier_id`, `gname`, `product_id`, `size`, `start_date`, `end_date`, `expire_date`, `expire_days`, `image`, `flag`, `is_service`, `commission_percent`, `commission_percent_type`, `commission_fixed`, `trash`, `payterm`, `cost_price`, `unit_price`, `promo_price`, `setup`, `onetime`, `monthly`, `monthlysetup`, `quarterly`, `quarterlysetup`, `halfyearly`, `halfyearlysetup`, `annually`, `annuallysetup`, `biennially`, `bienniallysetup`, `triennially`, `trienniallysetup`, `has_domain`, `free_domain`, `email_rel`, `tags`, `sold_count`, `total_amount`, `created_at`, `updated_at`, `tax_code`, `tds_deduction`) VALUES
(1, 'Steel', 'Rectangle', 'Piece', '0.00', '50.0000', '1000.0000', '10.0000', '10.0000', '5.0000', '2.00', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0001', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '200000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '', 'NO'),
(2, 'Aluminium', 'Rectangle', 'Piece', '0.00', '40.0000', '2000.0000', '10.0000', '20.0000', '5.0000', '2.00', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0002', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '500000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '', 'NO'),
(3, 'copper', 'Rectangle', 'Piece', '0.00', '10.0000', '1500.0000', '10.0000', '10.0000', '5.0000', '3.00', '', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, '0003', '', 'Product', 'No', 'No', 0, 'Active', NULL, NULL, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, '0.00', NULL, '0.00', 0, NULL, '800000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 0, NULL, '0.0000', '0.0000', NULL, NULL, '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `sys_morder`
--

CREATE TABLE `sys_morder` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `order_note` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Published','Draft','Inactive') DEFAULT NULL,
  `order_to` int(11) DEFAULT NULL,
  `team` enum('INTERNAL','EXTERNAL') DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `order_status` enum('NEW','PROCESSING','FINISHED','TRANSFERED','NOT-APPROVED','APPROVED','CANCELLED') NOT NULL DEFAULT 'NEW',
  `created_by` int(11) DEFAULT NULL,
  `order_total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight_total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `futuresave` enum('YES','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_morder`
--

INSERT INTO `sys_morder` (`id`, `order_name`, `orderid`, `order_note`, `start_date`, `end_date`, `status`, `order_to`, `team`, `team_name`, `project_id`, `order_status`, `created_by`, `order_total`, `weight_total`, `futuresave`) VALUES
(1, 'Bill-01 Aluminum Box', '0001', '<p>Added</p>', '2021-04-25', '2021-04-30', 'Published', 6, 'EXTERNAL', 'ABC', 4, 'PROCESSING', 1, '2500000.00', '85.00', 'YES'),
(2, 'Bill-02 Aluminum Box', '0002', '<p>NA</p>', '2021-04-26', '2021-04-28', 'Published', 2, 'INTERNAL', 'Test Staff 3', 0, 'TRANSFERED', 1, '10900000.00', '290.00', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `sys_morder_items`
--

CREATE TABLE `sys_morder_items` (
  `id` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_morder_items`
--

INSERT INTO `sys_morder_items` (`id`, `orderid`, `item_id`, `price`, `qty`, `weight`, `total`, `created_at`) VALUES
(1, 1, 3, '800000.00', '1.00', '15.00', '800000.00', '2021-04-24'),
(2, 1, 2, '500000.00', '3.00', '60.00', '1500000.00', '2021-04-24'),
(3, 1, 1, '200000.00', '1.00', '10.00', '200000.00', '2021-04-24'),
(7, 3, 1, '200000.00', '2.00', '20.00', '400000.00', '2021-04-25'),
(8, 3, 2, '500000.00', '1.00', '20.00', '500000.00', '2021-04-25'),
(9, 3, 3, '800000.00', '1.00', '15.00', '800000.00', '2021-04-25'),
(25, 2, 1, '200000.00', '12.00', '120.00', '2400000.00', '2021-04-27'),
(26, 2, 2, '500000.00', '1.00', '20.00', '500000.00', '2021-04-27'),
(27, 2, 3, '800000.00', '10.00', '150.00', '8000000.00', '2021-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `sys_mpurchase`
--

CREATE TABLE `sys_mpurchase` (
  `id` int(11) NOT NULL,
  `pruchase_ref` varchar(255) DEFAULT NULL,
  `supplier` int(11) DEFAULT NULL,
  `subject` text,
  `Issued_at` date DEFAULT NULL,
  `total_tax` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total_discount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tweight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `subtotal` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `note` text,
  `status` enum('Published','Draft') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_mpurchase`
--

INSERT INTO `sys_mpurchase` (`id`, `pruchase_ref`, `supplier`, `subject`, `Issued_at`, `total_tax`, `total_discount`, `tweight`, `subtotal`, `total`, `note`, `status`, `created_at`, `created_by`) VALUES
(3, '0003', 6, 'Purchase-001', '2021-04-10', '0.00', '0.00', '450000.00', '150000000.00', '150000000.00', '<p>NA</p>', 'Published', '2021-04-27 19:09:08', 1),
(4, '0004', 6, 'Purchase-002', '2021-04-30', '3087500.00', '3250000.00', '225000.00', '75000000.00', '74837500.00', '<p>NA</p>', 'Published', '2021-04-28 05:29:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_mpurchase_item`
--

CREATE TABLE `sys_mpurchase_item` (
  `id` int(11) NOT NULL,
  `mpurchase_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `lenght` decimal(25,2) NOT NULL DEFAULT '0.00',
  `width` decimal(25,2) NOT NULL DEFAULT '0.00',
  `height` decimal(25,2) NOT NULL DEFAULT '0.00',
  `density` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total_weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tax_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `discount_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `subtotal` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_mpurchase_item`
--

INSERT INTO `sys_mpurchase_item` (`id`, `mpurchase_id`, `item_id`, `lenght`, `width`, `height`, `density`, `weight`, `total_weight`, `price`, `qty`, `discount`, `tax`, `tax_rate`, `discount_rate`, `subtotal`, `total`, `created_at`) VALUES
(7, 3, 3, '10.00', '10.00', '5.00', '3.00', '1500.00', '150000.00', '800000.00', '100.00', '0.00', '0.00', '0.00', '0.00', '80000000.00', '80000000.00', '2021-04-27 18:30:00'),
(8, 3, 2, '20.00', '10.00', '5.00', '2.00', '2000.00', '200000.00', '500000.00', '100.00', '0.00', '0.00', '0.00', '0.00', '50000000.00', '50000000.00', '2021-04-27 18:30:00'),
(9, 3, 1, '10.00', '10.00', '5.00', '2.00', '1000.00', '100000.00', '200000.00', '100.00', '0.00', '0.00', '0.00', '0.00', '20000000.00', '20000000.00', '2021-04-27 18:30:00'),
(10, 4, 3, '10.00', '10.00', '5.00', '3.00', '1500.00', '75000.00', '800000.00', '50.00', '2000000.00', '1900000.00', '5.00', '5.00', '40000000.00', '39900000.00', '2021-04-27 18:30:00'),
(11, 4, 2, '20.00', '10.00', '5.00', '2.00', '2000.00', '100000.00', '500000.00', '50.00', '1250000.00', '1187500.00', '5.00', '5.00', '25000000.00', '24937500.00', '2021-04-27 18:30:00'),
(12, 4, 1, '10.00', '10.00', '5.00', '2.00', '1000.00', '50000.00', '200000.00', '50.00', '0.00', '0.00', '0.00', '0.00', '10000000.00', '10000000.00', '2021-04-27 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_mreturn`
--

CREATE TABLE `sys_mreturn` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `order_note` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Published','Draft','Inactive') DEFAULT NULL,
  `order_to` int(11) DEFAULT NULL,
  `team` enum('INTERNAL','EXTERNAL') DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `order_status` enum('NEW','PROCESSING','FINISHED','TRANSFER','RETURN-OUT','WASTE-OUT') NOT NULL DEFAULT 'NEW',
  `created_by` int(11) DEFAULT NULL,
  `order_total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight_total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `futuresave` enum('YES','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_mreturn`
--

INSERT INTO `sys_mreturn` (`id`, `order_name`, `orderid`, `order_note`, `start_date`, `end_date`, `status`, `order_to`, `team`, `team_name`, `project_id`, `order_status`, `created_by`, `order_total`, `weight_total`, `futuresave`) VALUES
(4, 'DAMAGE-01', '0004', '<p>na</p>', '2021-04-19', NULL, NULL, 6, NULL, 'ABC', NULL, 'RETURN-OUT', 1, '8000000.00', '350.00', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `sys_mreturn_items`
--

CREATE TABLE `sys_mreturn_items` (
  `id` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_mreturn_items`
--

INSERT INTO `sys_mreturn_items` (`id`, `orderid`, `item_id`, `price`, `qty`, `weight`, `total`, `created_at`) VALUES
(6, 4, 2, '500000.00', '10.00', '200.00', '5000000.00', '2021-04-28'),
(7, 4, 1, '200000.00', '15.00', '150.00', '3000000.00', '2021-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `sys_mwaste`
--

CREATE TABLE `sys_mwaste` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `order_note` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Published','Draft','Inactive') DEFAULT NULL,
  `order_to` int(11) DEFAULT NULL,
  `team` enum('INTERNAL','EXTERNAL') DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `order_status` enum('NEW','PROCESSING','FINISHED','TRANSFER') NOT NULL DEFAULT 'NEW',
  `created_by` int(11) DEFAULT NULL,
  `order_total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight_total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `futuresave` enum('YES','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sys_mwaste_items`
--

CREATE TABLE `sys_mwaste_items` (
  `id` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `total` decimal(25,2) NOT NULL DEFAULT '0.00',
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sys_orders`
--

CREATE TABLE `sys_orders` (
  `id` int(11) NOT NULL,
  `ordernum` varchar(50) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `sales_person` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_expiry` date DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `stitle` varchar(200) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `iid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `recurring` decimal(16,2) NOT NULL DEFAULT '0.00',
  `setup_fee` decimal(16,2) NOT NULL DEFAULT '0.00',
  `billing_cycle` text,
  `addon_ids` text,
  `related_orders` text,
  `description` text,
  `upgrade_ids` text,
  `xdata` text,
  `xsecret` varchar(100) DEFAULT NULL,
  `promo_code` text,
  `promo_type` text,
  `promo_value` text,
  `payment_method` text,
  `ipaddress` text,
  `fraud_module` text,
  `fraud_output` text,
  `activation_subject` text,
  `activation_message` text,
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_orders`
--

INSERT INTO `sys_orders` (`id`, `ordernum`, `source`, `status`, `sales_person`, `branch_name`, `cname`, `cid`, `contract_id`, `bid`, `date_added`, `date_expiry`, `pid`, `stitle`, `sid`, `iid`, `aid`, `amount`, `recurring`, `setup_fee`, `billing_cycle`, `addon_ids`, `related_orders`, `description`, `upgrade_ids`, `xdata`, `xsecret`, `promo_code`, `promo_type`, `promo_value`, `payment_method`, `ipaddress`, `fraud_module`, `fraud_output`, `activation_subject`, `activation_message`, `trash`, `archived`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, '3164730408', '', 'Pending', '', '', 'Test customer 3', 8, 0, 0, '2021-03-16', '0000-00-00', 1, 'PoS System', 0, 4, 0, '5000.00', '0.00', '0.00', 'One Time', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sys_permissions`
--

CREATE TABLE `sys_permissions` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) DEFAULT NULL,
  `shortname` varchar(200) DEFAULT NULL,
  `available` int(1) NOT NULL DEFAULT '0',
  `core` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_permissions`
--

INSERT INTO `sys_permissions` (`id`, `pname`, `shortname`, `available`, `core`) VALUES
(1, 'Customers', 'customers', 0, 1),
(2, 'Companies', 'companies', 0, 1),
(3, 'Transactions', 'transactions', 0, 1),
(4, 'Sales', 'sales', 0, 1),
(5, 'Bank & Cash', 'bank_n_cash', 0, 1),
(6, 'Products & Services', 'products_n_services', 0, 1),
(7, 'Reports', 'reports', 0, 1),
(8, 'Utilities', 'utilities', 0, 1),
(9, 'Appearance', 'appearance', 0, 1),
(10, 'Plugins', 'plugins', 0, 1),
(11, 'Calendar', 'calendar', 0, 1),
(12, 'Leads', 'leads', 0, 1),
(13, 'Tasks', 'tasks', 0, 1),
(14, 'Contracts', 'contracts', 0, 1),
(15, 'Orders', 'orders', 0, 1),
(16, 'Settings', 'settings', 0, 1),
(17, 'Documents', 'documents', 0, 1),
(18, 'Purchase', 'purchase', 0, 1),
(19, 'Suppliers', 'suppliers', 0, 1),
(20, 'SMS', 'sms', 0, 1),
(21, 'Support', 'support', 0, 1),
(22, 'Knowledgebase', 'kb', 0, 1),
(23, 'Password Manager', 'password_manager', 0, 1),
(24, 'HRM', 'hr', 0, 1),
(25, 'Projects', 'projects', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_pg`
--

CREATE TABLE `sys_pg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `settings` text NOT NULL,
  `value` text NOT NULL,
  `processor` text NOT NULL,
  `ins` text NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `c3` text NOT NULL,
  `c4` text NOT NULL,
  `c5` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `sorder` int(2) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mode` varchar(200) DEFAULT NULL,
  `account_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_pg`
--

INSERT INTO `sys_pg` (`id`, `name`, `settings`, `value`, `processor`, `ins`, `c1`, `c2`, `c3`, `c4`, `c5`, `status`, `sorder`, `logo`, `mode`, `account_id`, `created_at`, `updated_at`) VALUES
(1, 'Paypal', 'Paypal Email', 'demo@example.com', 'paypal', 'Invoices', 'USD', '1', '', '', '', 'Inactive', 2, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Stripe', 'API Key', 'sk_test_ARblMczqDw61NusMMs7o1RVK', 'stripe', '', 'USD', '', '', '', '', 'Inactive', 3, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bank / Cash', 'Instructions', 'Make a Payment to Our Bank Account <br>Bank Name: City Bank <br>Account Name: Sadia Sharmin <br>Account Number: 1505XXXXXXXX <br>', 'manualpayment', '', '', '', '', '', '', 'Inactive', 4, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Authorize.net', 'API_LOGIN_ID', 'Insert API Login ID here', 'authorize_net', '', 'Insert Transaction Key Here', '', '', '', '', 'Inactive', 5, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Braintree', 'Merchant ID', 'your merchant id', 'braintree', '', 'your public key', 'your private key', 'bank account', 'sandbox', '', 'Inactive', 6, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_pl`
--

CREATE TABLE `sys_pl` (
  `id` int(11) NOT NULL,
  `c` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `sorder` int(11) NOT NULL DEFAULT '0',
  `build` int(10) DEFAULT '1',
  `c1` text,
  `c2` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_pmethods`
--

CREATE TABLE `sys_pmethods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_pmethods`
--

INSERT INTO `sys_pmethods` (`id`, `name`, `sorder`) VALUES
(1, 'Cash', 1),
(2, 'Check', 4),
(3, 'Credit Card', 5),
(4, 'Debit', 6),
(5, 'Electronic Transfer', 7),
(9, 'Paypal', 2),
(10, 'ATM Withdrawals', 3),
(11, 'Pagseguro', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_purchaseitems`
--

CREATE TABLE `sys_purchaseitems` (
  `id` int(10) NOT NULL,
  `invoiceid` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL,
  `type` text NOT NULL,
  `relid` int(10) NOT NULL,
  `itemcode` varchar(100) NOT NULL,
  `tax_code` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT '1',
  `amount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `taxed` int(1) NOT NULL,
  `tax_rate` decimal(16,2) DEFAULT NULL,
  `tax_name` varchar(200) DEFAULT NULL,
  `taxamount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax1` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax2` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax3` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `discount_type` varchar(100) DEFAULT NULL,
  `discount_amount` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(14,2) NOT NULL DEFAULT '0.00',
  `duedate` date DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_purchaseitems`
--

INSERT INTO `sys_purchaseitems` (`id`, `invoiceid`, `userid`, `type`, `relid`, `itemcode`, `tax_code`, `description`, `qty`, `amount`, `taxed`, `tax_rate`, `tax_name`, `taxamount`, `tax1`, `tax2`, `tax3`, `discount_type`, `discount_amount`, `total`, `duedate`, `paymentmethod`, `notes`, `created_at`, `updated_at`) VALUES
(2, 1, 6, '', 0, '', '', '1. Bolt', '10', '100.00', 0, '0.00', '', '0.00', '0.0000', '0.0000', '0.0000', '', '0.0000', '1000.00', '2021-03-16', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 6, '', 0, '', NULL, 'PRO-01', '2000', '12500.00', 0, '0.00', NULL, '0.00', '0.0000', '0.0000', '0.0000', NULL, '0.0000', '25000000.00', '2021-04-06', '', '', NULL, NULL),
(6, 2, 6, '', 0, '', NULL, 'PRO-02', '5000', '1500.00', 0, '0.00', NULL, '0.00', '0.0000', '0.0000', '0.0000', NULL, '0.0000', '7500000.00', '2021-04-06', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_purchases`
--

CREATE TABLE `sys_purchases` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `supplier_id` int(10) DEFAULT NULL,
  `supplier_name` varchar(200) DEFAULT NULL,
  `account` varchar(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `cn` varchar(100) NOT NULL DEFAULT '',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` datetime DEFAULT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT 'f',
  `discount_value` decimal(14,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `taxname` varchar(100) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `tax2` decimal(10,2) DEFAULT NULL,
  `tax1_total` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax2_total` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax3_total` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `tax_total` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `taxrate` decimal(10,2) DEFAULT NULL,
  `taxrate2` decimal(10,2) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT '0',
  `nd` date DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT '0',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `vid` int(11) NOT NULL DEFAULT '0',
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_iso_code` char(3) DEFAULT NULL,
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `recurring` tinyint(1) NOT NULL DEFAULT '0',
  `recurring_ends` date DEFAULT NULL,
  `last_recurring_date` date DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT '0',
  `last_overdue_reminder` date DEFAULT NULL,
  `allowed_payment_methods` text,
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(50) DEFAULT NULL,
  `billing_country` varchar(100) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `q_hide` tinyint(1) NOT NULL DEFAULT '0',
  `show_quantity_as` varchar(100) DEFAULT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `is_credit_invoice` int(1) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `aname` varchar(200) DEFAULT NULL,
  `receipt_number` varchar(200) DEFAULT NULL,
  `stage` varchar(200) DEFAULT 'Pending',
  `subject` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_purchases`
--

INSERT INTO `sys_purchases` (`id`, `userid`, `supplier_id`, `supplier_name`, `account`, `title`, `cn`, `invoicenum`, `date`, `duedate`, `datepaid`, `subtotal`, `discount_type`, `discount_value`, `discount`, `credit`, `taxname`, `tax`, `tax2`, `tax1_total`, `tax2_total`, `tax3_total`, `tax_total`, `total`, `taxrate`, `taxrate2`, `status`, `paymentmethod`, `notes`, `vtoken`, `ptoken`, `r`, `nd`, `eid`, `ename`, `vid`, `currency`, `currency_iso_code`, `currency_symbol`, `currency_prefix`, `currency_suffix`, `currency_rate`, `recurring`, `recurring_ends`, `last_recurring_date`, `source`, `sale_agent`, `last_overdue_reminder`, `allowed_payment_methods`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `shipping_country`, `q_hide`, `show_quantity_as`, `pid`, `is_credit_invoice`, `aid`, `aname`, `receipt_number`, `stage`, `subject`, `created_at`, `updated_at`, `code`) VALUES
(1, 6, 0, '', 'ABC', '', '00001', 'PO-', '2021-03-16', '2021-03-16', '2021-03-16 07:58:10', '1000.00', 'p', '0.00', '0.00', '0.00', '', '30.00', '0.00', '0.0000', '0.0000', '0.0000', '0.0000', '1030.00', '0.00', '0.00', 'Unpaid', '', '', '2342408858', '6564075702', '0', '2021-03-16', 0, '', 0, 0, 'INR', 'Rs', '', '', '1.0000', 0, '0000-00-00', '0000-00-00', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0, 'Qty', 0, 0, 0, '', '', 'Pending', 'Rudra Entp.', '2021-03-16 02:28:01', '2021-03-16 02:28:10', ''),
(2, 6, NULL, NULL, 'ABC', NULL, '00002', 'PO-', '2021-04-06', '2021-04-06', '2021-04-06 10:09:59', '32500000.00', 'p', '0.00', '0.00', '0.00', '', '975000.00', '0.00', '0.0000', '0.0000', '0.0000', '0.0000', '33475000.00', '0.00', '0.00', 'Paid', '', '', '0468231184', '1980400845', '0', '2021-04-06', 0, '', 0, 0, 'INR', 'Rs', NULL, NULL, '1.0000', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Qty', 0, 0, 0, NULL, '', 'Pending', 'KPL GROUP', '2021-04-06 04:33:20', '2021-04-06 04:39:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_quoteitems`
--

CREATE TABLE `sys_quoteitems` (
  `id` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `itemcode` text NOT NULL,
  `description` text NOT NULL,
  `qty` text NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `taxable` int(1) NOT NULL,
  `tax_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `taxamount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tds_deduction` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `tds_value` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tds_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `discount_type` varchar(255) DEFAULT NULL,
  `discount_amount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `discount_rate` decimal(25,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_quoteitems_history`
--

CREATE TABLE `sys_quoteitems_history` (
  `id` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `itemcode` text NOT NULL,
  `description` text NOT NULL,
  `qty` text NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `discount` decimal(18,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `taxable` int(11) NOT NULL,
  `tax_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `taxamount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tds_deduction` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `tds_value` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tds_rate` decimal(25,2) NOT NULL DEFAULT '0.00',
  `discount_type` varchar(255) DEFAULT NULL,
  `discount_amount` decimal(25,2) NOT NULL DEFAULT '0.00',
  `discount_rate` decimal(25,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sys_quotes`
--

CREATE TABLE `sys_quotes` (
  `id` int(10) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `subject` text NOT NULL,
  `stage` enum('Draft','Delivered','On Hold','Accepted','Lost','Dead') NOT NULL,
  `validuntil` date NOT NULL,
  `userid` int(10) NOT NULL,
  `invoicenum` text NOT NULL,
  `cn` text NOT NULL,
  `account` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `companyname` text NOT NULL,
  `email` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `postcode` text NOT NULL,
  `country` text NOT NULL,
  `phonenumber` text NOT NULL,
  `currency` int(10) NOT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` text NOT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `taxname` text NOT NULL,
  `taxrate` decimal(10,2) NOT NULL,
  `tds_deduction` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tax1` decimal(10,2) NOT NULL,
  `tax2` decimal(10,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `proposal` text NOT NULL,
  `customernotes` text NOT NULL,
  `adminnotes` text NOT NULL,
  `datecreated` date NOT NULL,
  `lastmodified` date NOT NULL,
  `datesent` date NOT NULL,
  `dateaccepted` date NOT NULL,
  `vtoken` text NOT NULL,
  `code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_quotes_history`
--

CREATE TABLE `sys_quotes_history` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT '0',
  `old_qid` int(11) NOT NULL,
  `subject` text NOT NULL,
  `stage` enum('Draft','Delivered','On Hold','Accepted','Lost','Dead') NOT NULL,
  `validuntil` date NOT NULL,
  `userid` int(11) NOT NULL,
  `invoicenum` text NOT NULL,
  `cn` text NOT NULL,
  `cn_version` varchar(255) DEFAULT NULL,
  `account` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `companyname` text NOT NULL,
  `email` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `postcode` text NOT NULL,
  `country` text NOT NULL,
  `phonenumber` text NOT NULL,
  `currency` int(11) NOT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` text NOT NULL,
  `discount_value` decimal(25,2) NOT NULL,
  `discount` decimal(25,2) NOT NULL,
  `taxname` text NOT NULL,
  `taxrate` decimal(25,2) NOT NULL,
  `tds_deduction` decimal(25,2) NOT NULL DEFAULT '0.00',
  `tax1` decimal(25,2) NOT NULL,
  `tax2` decimal(25,2) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `proposal` text NOT NULL,
  `customernotes` text NOT NULL,
  `adminnotes` text NOT NULL,
  `datecreated` date NOT NULL,
  `lastmodified` date NOT NULL,
  `datesent` date NOT NULL,
  `dateaccepted` date NOT NULL,
  `vtoken` text NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sys_roles`
--

CREATE TABLE `sys_roles` (
  `id` int(11) NOT NULL,
  `rname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_roles`
--

INSERT INTO `sys_roles` (`id`, `rname`) VALUES
(3, 'Employee'),
(4, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `sys_sales`
--

CREATE TABLE `sys_sales` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `oname` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `amount` decimal(14,2) NOT NULL,
  `term` varchar(100) NOT NULL,
  `milestone` varchar(100) NOT NULL,
  `p` int(11) NOT NULL,
  `o` int(11) NOT NULL,
  `open` date NOT NULL,
  `close` date NOT NULL,
  `status` enum('New','In Progress','Won','Lost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_schedule`
--

CREATE TABLE `sys_schedule` (
  `id` int(11) NOT NULL,
  `cname` mediumtext NOT NULL,
  `val` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_schedule`
--

INSERT INTO `sys_schedule` (`id`, `cname`, `val`) VALUES
(1, 'accounting_snapshot', 'Active'),
(2, 'recurring_invoice', 'Active'),
(3, 'notify', 'Active'),
(4, 'notifyemail', 'demo@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `sys_schedulelogs`
--

CREATE TABLE `sys_schedulelogs` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `logs` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_schedulelogs`
--

INSERT INTO `sys_schedulelogs` (`id`, `date`, `logs`) VALUES
(4, '2015-03-14', '2015-03-14 20:17:15 : Schedule Jobs Started....... <br>2015-03-14 20:17:15 : Creating Accounting Snapshot <br>2015-03-14 20:17:15 : Accounting Snapshot created! <br>=============== Accounting Snaphsot ==================== <br>Accounting Snaphsot - Date: 2015-03-13<br>Total Income: Tk. 0.00<br>Total Expense: Tk. 0.00<br>================================================== <br>2015-03-14 20:17:15 : Creating Recurring Invoice <br>2015-03-14 20:17:15 : 1 Invoice created! <br>================================================== <br>'),
(5, '2018-07-24', '================================================== <br>2018-07-24 13:27:38 : Schedule Jobs Started....... <br>2018-07-24 13:27:38 : Creating Accounting Snapshot <br>2018-07-24 13:27:38 : Accounting Snapshot created! <br>=============== Accounting Snaphsot ==================== <br>Accounting Snaphsot - Date: 2018-07-23<br>Total Income: $ 13,800.00<br>Total Expense: $ 0.00<br>================================================== <br>2018-07-24 13:27:38 : Creating Recurring Invoice <br>2018-07-24 13:27:38 : 0 Invoice created! <br>================================================== <br>');

-- --------------------------------------------------------

--
-- Table structure for table `sys_staffpermissions`
--

CREATE TABLE `sys_staffpermissions` (
  `id` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `shortname` varchar(50) DEFAULT NULL,
  `can_view` int(1) NOT NULL DEFAULT '0',
  `can_edit` int(1) NOT NULL DEFAULT '0',
  `can_create` int(1) NOT NULL DEFAULT '0',
  `can_delete` int(1) NOT NULL DEFAULT '0',
  `all_data` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_staffpermissions`
--

INSERT INTO `sys_staffpermissions` (`id`, `rid`, `pid`, `shortname`, `can_view`, `can_edit`, `can_create`, `can_delete`, `all_data`) VALUES
(135, 3, 1, 'customers', 1, 1, 1, 1, 0),
(136, 3, 2, 'companies', 0, 0, 0, 0, 0),
(137, 3, 3, 'transactions', 0, 0, 0, 0, 0),
(138, 3, 4, 'sales', 0, 0, 0, 0, 0),
(139, 3, 5, 'bank_n_cash', 0, 0, 0, 0, 0),
(140, 3, 6, 'products_n_services', 0, 0, 0, 0, 0),
(141, 3, 7, 'reports', 0, 0, 0, 0, 0),
(142, 3, 8, 'utilities', 0, 0, 0, 0, 0),
(143, 3, 9, 'appearance', 0, 0, 0, 0, 0),
(144, 3, 10, 'plugins', 0, 0, 0, 0, 0),
(145, 3, 11, 'calendar', 0, 0, 0, 0, 0),
(146, 3, 12, 'leads', 0, 0, 0, 0, 0),
(147, 3, 13, 'tasks', 0, 0, 0, 0, 0),
(148, 3, 14, 'contracts', 0, 0, 0, 0, 0),
(149, 3, 15, 'orders', 0, 0, 0, 0, 0),
(150, 3, 16, 'settings', 0, 0, 0, 0, 0),
(151, 3, 17, 'documents', 0, 0, 0, 0, 0),
(152, 3, 18, 'purchase', 0, 0, 0, 0, 0),
(153, 3, 19, 'suppliers', 0, 0, 0, 0, 0),
(154, 3, 20, 'sms', 0, 0, 0, 0, 0),
(155, 3, 21, 'support', 1, 1, 1, 1, 1),
(156, 3, 22, 'kb', 0, 0, 0, 0, 0),
(157, 3, 23, 'password_manager', 0, 0, 0, 0, 0),
(158, 3, 24, 'hr', 0, 0, 0, 0, 0),
(159, 3, 25, 'projects', 0, 0, 0, 0, 0),
(160, 4, 1, 'customers', 0, 0, 0, 0, 0),
(161, 4, 2, 'companies', 0, 0, 0, 0, 0),
(162, 4, 3, 'transactions', 0, 0, 0, 0, 0),
(163, 4, 4, 'sales', 0, 0, 0, 0, 0),
(164, 4, 5, 'bank_n_cash', 0, 0, 0, 0, 0),
(165, 4, 6, 'products_n_services', 0, 0, 0, 0, 0),
(166, 4, 7, 'reports', 0, 0, 0, 0, 0),
(167, 4, 8, 'utilities', 0, 0, 0, 0, 0),
(168, 4, 9, 'appearance', 0, 0, 0, 0, 0),
(169, 4, 10, 'plugins', 0, 0, 0, 0, 0),
(170, 4, 11, 'calendar', 0, 0, 0, 0, 0),
(171, 4, 12, 'leads', 0, 0, 0, 0, 0),
(172, 4, 13, 'tasks', 0, 0, 0, 0, 0),
(173, 4, 14, 'contracts', 0, 0, 0, 0, 0),
(174, 4, 15, 'orders', 0, 0, 0, 0, 0),
(175, 4, 16, 'settings', 0, 0, 0, 0, 0),
(176, 4, 17, 'documents', 0, 0, 0, 0, 0),
(177, 4, 18, 'purchase', 0, 0, 0, 0, 0),
(178, 4, 19, 'suppliers', 0, 0, 0, 0, 0),
(179, 4, 20, 'sms', 0, 0, 0, 0, 0),
(180, 4, 21, 'support', 0, 0, 0, 0, 0),
(181, 4, 22, 'kb', 0, 0, 0, 0, 0),
(182, 4, 23, 'password_manager', 0, 0, 0, 0, 0),
(183, 4, 24, 'hr', 0, 0, 0, 0, 0),
(184, 4, 25, 'projects', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_status`
--

CREATE TABLE `sys_status` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_status`
--

INSERT INTO `sys_status` (`id`, `type`, `name`, `sorder`, `created_at`, `updated_at`) VALUES
(1, 'Purchase Invoice', 'Pending', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Purchase Invoice', 'Accepted', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Purchase Invoice', 'Declined', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_tags`
--

CREATE TABLE `sys_tags` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tasks`
--

CREATE TABLE `sys_tasks` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `status` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `eid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `subscribers` text,
  `assigned_to` text,
  `priority` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `vtoken` varchar(50) DEFAULT NULL,
  `ptoken` varchar(50) DEFAULT NULL,
  `started` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `stime` varchar(50) DEFAULT NULL,
  `dtime` varchar(50) DEFAULT NULL,
  `time_spent` varchar(50) DEFAULT NULL,
  `date_finished` date DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  `finished` int(1) NOT NULL DEFAULT '0',
  `ratings` varchar(50) DEFAULT NULL,
  `rel_type` varchar(50) DEFAULT NULL,
  `rel_id` int(11) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `is_public` int(1) NOT NULL DEFAULT '0',
  `billable` int(1) NOT NULL DEFAULT '0',
  `billed` int(1) NOT NULL DEFAULT '0',
  `hourly_rate` decimal(14,2) NOT NULL DEFAULT '0.00',
  `milestone` int(11) DEFAULT NULL,
  `progress` int(3) DEFAULT NULL,
  `visible_to_client` int(1) NOT NULL DEFAULT '0',
  `notification` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_tasks`
--

INSERT INTO `sys_tasks` (`id`, `title`, `description`, `status`, `cid`, `oid`, `iid`, `aid`, `tid`, `eid`, `pid`, `did`, `company_id`, `subscribers`, `assigned_to`, `priority`, `created_at`, `created_by`, `updated_at`, `updated_by`, `vtoken`, `ptoken`, `started`, `due_date`, `stime`, `dtime`, `time_spent`, `date_finished`, `source`, `flag`, `finished`, `ratings`, `rel_type`, `rel_id`, `parent`, `is_public`, `billable`, `billed`, `hourly_rate`, `milestone`, `progress`, `visible_to_client`, `notification`, `trash`, `archived`) VALUES
(1, 'Task 1', '', 'Not Started', 1, 0, 0, 1, 0, 0, 1, 0, 0, '', '', '', '2021-02-26 06:54:01', 'Gig Digital', '0000-00-00 00:00:00', '', '', '', '2021-02-26', '0000-00-00', '', '', '', '2021-03-01', '', 0, 0, '', '', 0, 0, 0, 0, 0, '0.00', 0, 0, 0, 0, 0, 0),
(2, 'Requirement gathering', 'TEAST HGVGHSABXHJSA', 'Completed', 4, 0, 0, 1, 0, 0, 3, 0, 0, '', '', '', '2021-03-16 08:01:39', 'Gig Digital', '0000-00-00 00:00:00', '', '', '', '2021-03-16', '2021-03-16', '', '', '', '2021-03-27', '', 0, 0, '', '', 0, 0, 0, 0, 0, '0.00', 0, 0, 0, 0, 0, 0),
(3, 'INVENTORY HANDLING', '', 'Not Started', 4, 0, 0, 1, 0, 0, 3, 0, 0, '', '', '', '2021-03-16 08:03:09', 'Gig Digital', '0000-00-00 00:00:00', '', '', '', '2021-03-16', '2021-03-16', '', '', '', '2021-03-17', '', 0, 0, '', '', 0, 0, 0, 0, 0, '0.00', 0, 0, 0, 0, 0, 0),
(4, 'Proj Assignment', 'Assign tasks', 'Not Started', 1, 0, 0, 1, 0, 0, 3, 0, 0, '', '', '', '2021-03-16 15:40:57', 'Sree Engineering', '0000-00-00 00:00:00', '', '', '', '2021-03-16', '2021-03-16', '', '', '', '2021-03-17', '', 0, 0, '', '', 0, 0, 0, 0, 0, '0.00', 0, 0, 0, 0, 0, 0),
(5, 'Task-01', 'test task', 'Completed', 6, 0, 0, 1, 0, 0, 4, 0, 0, NULL, NULL, NULL, '2021-04-05 19:08:32', 'Gig Digital', NULL, NULL, NULL, NULL, '2021-04-05', '2021-04-05', NULL, NULL, NULL, '2021-04-05', NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, '0.00', NULL, NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_tax`
--

CREATE TABLE `sys_tax` (
  `id` int(10) NOT NULL,
  `name` text,
  `state` text,
  `country` text,
  `rate` decimal(10,2) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `bal` decimal(10,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_default` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_tax`
--

INSERT INTO `sys_tax` (`id`, `name`, `state`, `country`, `rate`, `aid`, `bal`, `created_at`, `updated_at`, `is_default`) VALUES
(1, '3%', '', '', '3.00', 0, '0.00', '2021-03-02 22:50:59', '2021-03-02 22:50:59', 1),
(2, '5%', '', '', '5.00', 0, '0.00', '2021-03-02 22:50:59', '2021-03-02 22:50:59', 0),
(3, '12%', '', '', '12.00', 0, '0.00', '2021-03-02 22:50:59', '2021-03-02 22:50:59', 0),
(4, '18%', '', '', '18.00', 0, '0.00', '2021-03-02 22:50:59', '2021-03-02 22:50:59', 0),
(5, '28%', '', '', '28.00', 0, '0.00', '2021-03-02 22:50:59', '2021-03-02 22:50:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_ticketdepartments`
--

CREATE TABLE `sys_ticketdepartments` (
  `id` int(11) NOT NULL,
  `dname` varchar(200) DEFAULT NULL,
  `description` text,
  `email` varchar(200) DEFAULT NULL,
  `hidden` int(1) NOT NULL DEFAULT '0',
  `delete_after_import` int(1) NOT NULL DEFAULT '0',
  `host` varchar(200) DEFAULT NULL,
  `port` varchar(50) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `encryption` varchar(100) DEFAULT NULL,
  `calendar_id` varchar(200) DEFAULT NULL,
  `sorder` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_ticketdepartments`
--

INSERT INTO `sys_ticketdepartments` (`id`, `dname`, `description`, `email`, `hidden`, `delete_after_import`, `host`, `port`, `username`, `password`, `encryption`, `calendar_id`, `sorder`, `created_at`, `updated_at`) VALUES
(1, 'Sales', '', '', 0, 0, '', '', '', '', 'no', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Support', '', '', 0, 0, '', '', '', '', 'no', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Billing', '', '', 0, 0, '', '', '', '', 'no', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_ticketmaillog`
--

CREATE TABLE `sys_ticketmaillog` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `account` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text,
  `status` varchar(100) DEFAULT NULL,
  `attachments` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_ticketpredefinedreplies`
--

CREATE TABLE `sys_ticketpredefinedreplies` (
  `id` int(11) NOT NULL,
  `rname` varchar(200) DEFAULT NULL,
  `reply` text,
  `tags` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `attachments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_ticketreplies`
--

CREATE TABLE `sys_ticketreplies` (
  `id` int(11) NOT NULL,
  `tid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `account` varchar(200) DEFAULT NULL,
  `reply_type` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text,
  `replied_by` varchar(200) DEFAULT NULL,
  `admin` varchar(100) DEFAULT NULL,
  `attachments` text,
  `client_read` varchar(100) DEFAULT NULL,
  `admin_read` varchar(100) DEFAULT NULL,
  `rating` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_ticketreplies`
--

INSERT INTO `sys_ticketreplies` (`id`, `tid`, `userid`, `account`, `reply_type`, `email`, `created_at`, `updated_at`, `message`, `replied_by`, `admin`, `attachments`, `client_read`, `admin_read`, `rating`) VALUES
(1, 4, 7, 'Gig Digital', 'internal', '', '2021-03-15 05:21:53', '2021-03-15 05:21:53', '<p>Completed</p>', 'Gig Digital', '1', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_tickets`
--

CREATE TABLE `sys_tickets` (
  `id` int(11) NOT NULL,
  `tid` varchar(100) DEFAULT NULL,
  `did` int(10) DEFAULT NULL,
  `aid` int(10) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `sid` int(10) DEFAULT NULL,
  `lid` int(10) DEFAULT NULL,
  `oid` int(10) DEFAULT NULL,
  `company_id` int(10) DEFAULT NULL,
  `dname` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `account` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cc` varchar(200) DEFAULT NULL,
  `bcc` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` text,
  `message` text,
  `status` varchar(100) DEFAULT NULL,
  `urgency` varchar(100) DEFAULT NULL,
  `admin` varchar(100) DEFAULT NULL,
  `attachments` text,
  `last_reply` varchar(100) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `escalated` int(1) DEFAULT NULL,
  `replying` int(1) DEFAULT NULL,
  `is_spam` int(1) DEFAULT NULL,
  `rating` int(2) DEFAULT NULL,
  `client_read` varchar(100) DEFAULT NULL,
  `admin_read` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `ttype` varchar(100) DEFAULT NULL,
  `tstart` varchar(100) DEFAULT NULL,
  `tend` varchar(100) DEFAULT NULL,
  `ttotal` varchar(100) DEFAULT NULL,
  `todo` text,
  `tags` text,
  `notes` text,
  `c1` varchar(255) DEFAULT NULL,
  `c2` varchar(255) DEFAULT NULL,
  `c3` varchar(255) DEFAULT NULL,
  `c4` varchar(255) DEFAULT NULL,
  `c5` text,
  `end_user_id` int(10) UNSIGNED DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_tickets`
--

INSERT INTO `sys_tickets` (`id`, `tid`, `did`, `aid`, `pid`, `sid`, `lid`, `oid`, `company_id`, `dname`, `userid`, `account`, `email`, `cc`, `bcc`, `created_at`, `updated_at`, `subject`, `message`, `status`, `urgency`, `admin`, `attachments`, `last_reply`, `flag`, `escalated`, `replying`, `is_spam`, `rating`, `client_read`, `admin_read`, `source`, `ttype`, `tstart`, `tend`, `ttotal`, `todo`, `tags`, `notes`, `c1`, `c2`, `c3`, `c4`, `c5`, `end_user_id`, `model`) VALUES
(1, 'DYM-54958430', 1, 0, 0, 0, 0, 0, 0, 'Sales', 7, 'Prathamesh Patil', '', '', '', '2021-03-06 04:59:36', '2021-03-06 04:59:36', 'Require Alteration', '<p>Need alteration of 10 shirts<br></p>', 'Open', 'High', '1', '', 'Prathamesh Patil', 0, 0, 0, 0, 0, 'No', 'No', 'Web', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(2, 'HDQ-34316566', 1, 0, 0, 0, 0, 0, 0, 'Sales', 6, 'ABC', 'mk@example.com', '', '', '2021-03-15 04:54:41', '2021-03-15 04:54:41', 'Test ', '<p>Test message<br></p>', 'Open', 'Medium', '2', '_bd33f02c623845161578406610096325.jpeg', 'ABC', 0, 0, 0, 0, 0, 'No', 'No', 'Web', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(3, 'NEV-91985753', 1, 0, 0, 0, 0, 0, 0, 'Sales', 1, 'Umrao Test', 'umrao@gmail.com', '', '', '2021-03-15 04:56:38', '2021-03-15 04:56:38', 'Test ticket', '<p>Test ticket<br></p>', 'Open', 'Medium', '1', '_45f31d16102748161578419610199551.jpeg', 'Umrao Test', 0, 0, 0, 0, 0, 'No', 'No', 'Web', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(4, 'FPD-76848517', 1, 0, 0, 0, 0, 0, 0, 'Sales', 7, 'Prathamesh Patil', '', '', '', '2021-03-15 05:05:29', '2021-03-15 05:21:53', 'House Keeping Ticket', '<p>Please look into house keeping.<br></p>', 'Open', 'Medium', '2', '_27e9661e503690161578472410032389.jpeg', 'Prathamesh Patil', 0, 0, 0, 0, 0, 'No', 'No', 'Web', '', '', '', '', '', '', '<p>Completed</p>', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sys_transactions`
--

CREATE TABLE `sys_transactions` (
  `id` int(11) NOT NULL,
  `account` varchar(200) NOT NULL,
  `account_id` int(11) NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(200) DEFAULT NULL,
  `sub_type` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL,
  `payer` varchar(200) DEFAULT NULL,
  `payee` varchar(200) DEFAULT NULL,
  `payerid` int(11) NOT NULL DEFAULT '0',
  `payeeid` int(11) NOT NULL DEFAULT '0',
  `method` varchar(200) DEFAULT NULL,
  `ref` varchar(200) DEFAULT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `description` text,
  `tags` text,
  `tax` decimal(18,2) NOT NULL DEFAULT '0.00',
  `date` date DEFAULT NULL,
  `dr` decimal(18,2) NOT NULL DEFAULT '0.00',
  `cr` decimal(18,2) NOT NULL DEFAULT '0.00',
  `bal` decimal(18,2) NOT NULL DEFAULT '0.00',
  `iid` int(11) NOT NULL DEFAULT '0',
  `currency_iso_code` char(3) DEFAULT NULL,
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `base_amount` decimal(16,4) NOT NULL DEFAULT '0.0000',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `vid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `attachments` text,
  `source` varchar(200) DEFAULT NULL,
  `rid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `flag` int(1) NOT NULL DEFAULT '0',
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text,
  `purchase_id` int(11) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_transactions`
--

INSERT INTO `sys_transactions` (`id`, `account`, `account_id`, `project_id`, `type`, `sub_type`, `cat_id`, `category`, `amount`, `payer`, `payee`, `payerid`, `payeeid`, `method`, `ref`, `status`, `description`, `tags`, `tax`, `date`, `dr`, `cr`, `bal`, `iid`, `currency_iso_code`, `currency`, `currency_symbol`, `currency_prefix`, `currency_suffix`, `currency_rate`, `base_amount`, `company_id`, `vid`, `aid`, `staff_id`, `created_at`, `updated_at`, `updated_by`, `attachments`, `source`, `rid`, `pid`, `archived`, `trash`, `flag`, `c1`, `c2`, `c3`, `c4`, `c5`, `purchase_id`, `code`) VALUES
(1, 'Rudra', 1, 0, 'Equity', '', 0, '', '10000.00', '', '', 0, 0, '', '', 'Cleared', 'Opening balance', '', '0.00', '2021-03-16', '0.00', '10000.00', '10000.00', 0, 'INR', 0, '', '', '', '1.0000', '0.0000', 0, 2510718, 1, 0, '2021-03-16 03:09:28', '2021-03-16 03:09:28', 0, '', 'Opening balance', 0, 0, 0, 0, 0, '', '', '', '', '', 0, ''),
(2, 'Rudra', 1, 3, 'Expense', '', 0, 'Uncategorized', '2000.00', '', '0', 0, 0, '', '', 'Cleared', 'Billing acc', '', '0.00', '2021-03-16', '0.00', '0.00', '0.00', 0, 'INR', 0, '', '', '', '1.0000', '0.0000', 0, 0, 0, 0, '2021-03-16 03:10:08', '2021-03-16 03:10:08', 0, '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 'EXP-00001');

-- --------------------------------------------------------

--
-- Table structure for table `sys_units`
--

CREATE TABLE `sys_units` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `conversion_factor` decimal(16,2) NOT NULL DEFAULT '0.00',
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_units`
--

INSERT INTO `sys_units` (`id`, `type`, `name`, `reference`, `conversion_factor`, `sorder`) VALUES
(1, 'Piece', 'Piece', NULL, '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `phonenumber` varchar(20) DEFAULT NULL,
  `password` text,
  `user_type` varchar(50) NOT NULL DEFAULT 'Full Access',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `creationdate` datetime NOT NULL,
  `otp` enum('Yes','No') NOT NULL DEFAULT 'No',
  `pin_enabled` enum('Yes','No') NOT NULL DEFAULT 'No',
  `pin` mediumtext NOT NULL,
  `img` text NOT NULL,
  `api` enum('Yes','No') DEFAULT 'No',
  `pwresetkey` varchar(100) NOT NULL,
  `keyexpire` varchar(100) NOT NULL,
  `roleid` int(11) NOT NULL DEFAULT '0',
  `role` varchar(200) DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `autologin` varchar(200) DEFAULT NULL,
  `at` varchar(200) DEFAULT NULL,
  `landing_page` varchar(200) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `notes` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `sms_notify` int(1) DEFAULT NULL,
  `email_notify` int(1) DEFAULT NULL,
  `slack_notify` int(1) DEFAULT NULL,
  `job_title` varchar(150) DEFAULT NULL,
  `date_hired` date DEFAULT NULL,
  `department_id` int(11) DEFAULT '0',
  `manager_id` int(11) DEFAULT '0',
  `pay_frequency` varchar(150) DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `amount` decimal(16,2) NOT NULL DEFAULT '0.00',
  `employee_id` varchar(150) DEFAULT NULL,
  `legal_name_title` varchar(150) DEFAULT NULL,
  `legal_name_first` varchar(150) DEFAULT NULL,
  `legal_name_mi` varchar(150) DEFAULT NULL,
  `legal_name_last` varchar(150) DEFAULT NULL,
  `banking_name` varchar(150) DEFAULT NULL,
  `ssn` varchar(150) DEFAULT NULL,
  `gender` varchar(150) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `marital_status` varchar(150) DEFAULT NULL,
  `ethnicity` varchar(150) DEFAULT NULL,
  `is_citizen` tinyint(1) NOT NULL DEFAULT '1',
  `has_i9_form` varchar(150) DEFAULT NULL,
  `work_authorization_expires` date DEFAULT NULL,
  `address_line_1` varchar(150) DEFAULT NULL,
  `address_line_2` varchar(150) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `state` varchar(150) DEFAULT NULL,
  `zip` varchar(150) DEFAULT NULL,
  `country` varchar(150) DEFAULT NULL,
  `work_phone` varchar(150) DEFAULT NULL,
  `work_mobile` varchar(150) DEFAULT NULL,
  `work_fax` varchar(150) DEFAULT NULL,
  `cc_email` varchar(150) DEFAULT NULL,
  `other` varchar(150) DEFAULT NULL,
  `emergency_contact_name_1` varchar(150) DEFAULT NULL,
  `emergency_contact_phone_1` varchar(150) DEFAULT NULL,
  `emergency_contact_relation_1` varchar(150) DEFAULT NULL,
  `emergency_contact_name_2` varchar(150) DEFAULT NULL,
  `emergency_contact_phone_2` varchar(150) DEFAULT NULL,
  `emergency_contact_relation_2` varchar(150) DEFAULT NULL,
  `last_day_worked` date DEFAULT NULL,
  `last_day_on_benefits` date DEFAULT NULL,
  `last_day_on_payroll` date DEFAULT NULL,
  `termination_type` varchar(150) DEFAULT NULL,
  `termination_reason` varchar(150) DEFAULT NULL,
  `is_recommended` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `facebook` varchar(150) DEFAULT NULL,
  `google` varchar(150) DEFAULT NULL,
  `linkedin` varchar(150) DEFAULT NULL,
  `skype` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `summary` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `username`, `fullname`, `phonenumber`, `password`, `user_type`, `status`, `last_login`, `email`, `creationdate`, `otp`, `pin_enabled`, `pin`, `img`, `api`, `pwresetkey`, `keyexpire`, `roleid`, `role`, `last_activity`, `autologin`, `at`, `landing_page`, `language`, `notes`, `created_at`, `updated_at`, `sms_notify`, `email_notify`, `slack_notify`, `job_title`, `date_hired`, `department_id`, `manager_id`, `pay_frequency`, `currency`, `amount`, `employee_id`, `legal_name_title`, `legal_name_first`, `legal_name_mi`, `legal_name_last`, `banking_name`, `ssn`, `gender`, `date_of_birth`, `marital_status`, `ethnicity`, `is_citizen`, `has_i9_form`, `work_authorization_expires`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `country`, `work_phone`, `work_mobile`, `work_fax`, `cc_email`, `other`, `emergency_contact_name_1`, `emergency_contact_phone_1`, `emergency_contact_relation_1`, `emergency_contact_name_2`, `emergency_contact_phone_2`, `emergency_contact_relation_2`, `last_day_worked`, `last_day_on_benefits`, `last_day_on_payroll`, `termination_type`, `termination_reason`, `is_recommended`, `is_active`, `facebook`, `google`, `linkedin`, `skype`, `twitter`, `summary`) VALUES
(1, 'admin@admin.com', 'Gig Digital', '7985645340', '$2y$10$rf9G4sGJUXM0Bhm3AI0uGe5.MobUwMloMrRgSkDULUKP0TqMHSt8e', 'Admin', 'Active', '2021-04-23 22:35:56', '', '2014-10-20 01:43:07', 'No', 'No', 'Y6AOTKNSQ5D7J4FU', '', 'No', '', '0', 0, '', '2021-03-19 19:07:16', 'r8ioeslwbxu5b9z2ht3k1', '', '', 'en', '', '0000-00-00 00:00:00', '2021-03-17 09:25:02', 1, 1, 0, '', '0000-00-00', 0, 0, 'Monthly', 'INR', '0.00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 1, '', '0000-00-00', '', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 1, 1, '', '', '', '', '', ''),
(2, 'testStaff3@gmail.com', 'Test Staff 3', '', '$2y$10$7wxwjsplqRyKjGNDGGKSye27jdechgkEJgt6QkSKM24.CZxkpcDbO', 'Employee', 'Active', '2021-03-15 10:52:14', '', '2021-03-15 10:21:42', 'No', 'No', '', '', 'No', '', '', 3, 'Employee', '2021-03-15 10:52:14', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', '0000-00-00', 0, 0, '', '', '0.00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 1, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 1, 1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transfered_product`
--

CREATE TABLE `transfered_product` (
  `id` int(11) NOT NULL,
  `trans_ref` varchar(255) DEFAULT NULL,
  `finished_ref` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `transfer_by` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `finished_id` int(11) NOT NULL,
  `weight` decimal(25,2) NOT NULL DEFAULT '0.00',
  `qty` decimal(25,2) NOT NULL DEFAULT '0.00',
  `price` decimal(25,2) NOT NULL DEFAULT '0.00',
  `transfer_date` date DEFAULT NULL,
  `product_image` text,
  `note` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfered_product`
--

INSERT INTO `transfered_product` (`id`, `trans_ref`, `finished_ref`, `order_id`, `transfer_by`, `product_name`, `product_id`, `finished_id`, `weight`, `qty`, `price`, `transfer_date`, `product_image`, `note`, `created_at`) VALUES
(4, 'TR0004', 'PF0003', 2, NULL, 'CPR Box-0004', 4, 3, '290.00', '15.00', '0.00', '2021-04-27', '', '<p>Ok\r\n</p>', '2021-04-27 13:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_balances`
--
ALTER TABLE `account_balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_notes`
--
ALTER TABLE `app_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_password_manager`
--
ALTER TABLE `app_password_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_sms`
--
ALTER TABLE `app_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_sms_drivers`
--
ALTER TABLE `app_sms_drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_sms_templates`
--
ALTER TABLE `app_sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_categories`
--
ALTER TABLE `asset_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clx_integrations`
--
ALTER TABLE `clx_integrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clx_projects`
--
ALTER TABLE `clx_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clx_shared_preferences`
--
ALTER TABLE `clx_shared_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_accounts`
--
ALTER TABLE `crm_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_customfields`
--
ALTER TABLE `crm_customfields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_customfieldsvalues`
--
ALTER TABLE `crm_customfieldsvalues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_groups`
--
ALTER TABLE `crm_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_industries`
--
ALTER TABLE `crm_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_leads`
--
ALTER TABLE `crm_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_lead_sources`
--
ALTER TABLE `crm_lead_sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_lead_status`
--
ALTER TABLE `crm_lead_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_salutations`
--
ALTER TABLE `crm_salutations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `end_users`
--
ALTER TABLE `end_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finished_product`
--
ALTER TABLE `finished_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_assets`
--
ALTER TABLE `ib_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_doc_rel`
--
ALTER TABLE `ib_doc_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_invoice_access_log`
--
ALTER TABLE `ib_invoice_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_kb`
--
ALTER TABLE `ib_kb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_kb_groups`
--
ALTER TABLE `ib_kb_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_kb_rel`
--
ALTER TABLE `ib_kb_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_kb_replies`
--
ALTER TABLE `ib_kb_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_forms`
--
ALTER TABLE `lead_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processing_product`
--
ALTER TABLE `processing_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raw_inventory`
--
ALTER TABLE `raw_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_accounts`
--
ALTER TABLE `sys_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_activity`
--
ALTER TABLE `sys_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_api`
--
ALTER TABLE `sys_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_appconfig`
--
ALTER TABLE `sys_appconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_canned_responses`
--
ALTER TABLE `sys_canned_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cart`
--
ALTER TABLE `sys_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cats`
--
ALTER TABLE `sys_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_companies`
--
ALTER TABLE `sys_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_currencies`
--
ALTER TABLE `sys_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_documents`
--
ALTER TABLE `sys_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_emailconfig`
--
ALTER TABLE `sys_emailconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_email_logs`
--
ALTER TABLE `sys_email_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_email_templates`
--
ALTER TABLE `sys_email_templates`
  ADD PRIMARY KEY (`id`,`language_id`),
  ADD KEY `tplname` (`tplname`(32));

--
-- Indexes for table `sys_events`
--
ALTER TABLE `sys_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_goods_inventory`
--
ALTER TABLE `sys_goods_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_invoiceitems`
--
ALTER TABLE `sys_invoiceitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoiceid` (`invoiceid`);

--
-- Indexes for table `sys_invoices`
--
ALTER TABLE `sys_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `status` (`status`(3));

--
-- Indexes for table `sys_items`
--
ALTER TABLE `sys_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_item_cats`
--
ALTER TABLE `sys_item_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_leads`
--
ALTER TABLE `sys_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mitems`
--
ALTER TABLE `sys_mitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_morder`
--
ALTER TABLE `sys_morder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_morder_items`
--
ALTER TABLE `sys_morder_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mpurchase`
--
ALTER TABLE `sys_mpurchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mpurchase_item`
--
ALTER TABLE `sys_mpurchase_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mreturn`
--
ALTER TABLE `sys_mreturn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mreturn_items`
--
ALTER TABLE `sys_mreturn_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mwaste`
--
ALTER TABLE `sys_mwaste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_mwaste_items`
--
ALTER TABLE `sys_mwaste_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_orders`
--
ALTER TABLE `sys_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_permissions`
--
ALTER TABLE `sys_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pg`
--
ALTER TABLE `sys_pg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gateway_setting` (`name`(32),`processor`(32)),
  ADD KEY `setting_value` (`processor`(32),`ins`(32));

--
-- Indexes for table `sys_pl`
--
ALTER TABLE `sys_pl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pmethods`
--
ALTER TABLE `sys_pmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_purchaseitems`
--
ALTER TABLE `sys_purchaseitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_purchases`
--
ALTER TABLE `sys_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quoteitems`
--
ALTER TABLE `sys_quoteitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quoteitems_history`
--
ALTER TABLE `sys_quoteitems_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quotes`
--
ALTER TABLE `sys_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quotes_history`
--
ALTER TABLE `sys_quotes_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_roles`
--
ALTER TABLE `sys_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_sales`
--
ALTER TABLE `sys_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_schedule`
--
ALTER TABLE `sys_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_schedulelogs`
--
ALTER TABLE `sys_schedulelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_staffpermissions`
--
ALTER TABLE `sys_staffpermissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_status`
--
ALTER TABLE `sys_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tags`
--
ALTER TABLE `sys_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tasks`
--
ALTER TABLE `sys_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tax`
--
ALTER TABLE `sys_tax`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_country` (`state`(32),`country`(2));

--
-- Indexes for table `sys_ticketdepartments`
--
ALTER TABLE `sys_ticketdepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_ticketmaillog`
--
ALTER TABLE `sys_ticketmaillog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_ticketpredefinedreplies`
--
ALTER TABLE `sys_ticketpredefinedreplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_ticketreplies`
--
ALTER TABLE `sys_ticketreplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tickets`
--
ALTER TABLE `sys_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_transactions`
--
ALTER TABLE `sys_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_units`
--
ALTER TABLE `sys_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfered_product`
--
ALTER TABLE `transfered_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_balances`
--
ALTER TABLE `account_balances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_notes`
--
ALTER TABLE `app_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_password_manager`
--
ALTER TABLE `app_password_manager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `app_sms`
--
ALTER TABLE `app_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `app_sms_drivers`
--
ALTER TABLE `app_sms_drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `app_sms_templates`
--
ALTER TABLE `app_sms_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `asset_categories`
--
ALTER TABLE `asset_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clx_integrations`
--
ALTER TABLE `clx_integrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clx_projects`
--
ALTER TABLE `clx_projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clx_shared_preferences`
--
ALTER TABLE `clx_shared_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crm_accounts`
--
ALTER TABLE `crm_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crm_customfields`
--
ALTER TABLE `crm_customfields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_customfieldsvalues`
--
ALTER TABLE `crm_customfieldsvalues`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_groups`
--
ALTER TABLE `crm_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_industries`
--
ALTER TABLE `crm_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `crm_leads`
--
ALTER TABLE `crm_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crm_lead_sources`
--
ALTER TABLE `crm_lead_sources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `crm_lead_status`
--
ALTER TABLE `crm_lead_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crm_salutations`
--
ALTER TABLE `crm_salutations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `end_users`
--
ALTER TABLE `end_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finished_product`
--
ALTER TABLE `finished_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ib_assets`
--
ALTER TABLE `ib_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ib_doc_rel`
--
ALTER TABLE `ib_doc_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ib_invoice_access_log`
--
ALTER TABLE `ib_invoice_access_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ib_kb`
--
ALTER TABLE `ib_kb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ib_kb_groups`
--
ALTER TABLE `ib_kb_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ib_kb_rel`
--
ALTER TABLE `ib_kb_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ib_kb_replies`
--
ALTER TABLE `ib_kb_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lead_forms`
--
ALTER TABLE `lead_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processing_product`
--
ALTER TABLE `processing_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `raw_inventory`
--
ALTER TABLE `raw_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sys_accounts`
--
ALTER TABLE `sys_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_activity`
--
ALTER TABLE `sys_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_api`
--
ALTER TABLE `sys_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_appconfig`
--
ALTER TABLE `sys_appconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `sys_canned_responses`
--
ALTER TABLE `sys_canned_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_cart`
--
ALTER TABLE `sys_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_cats`
--
ALTER TABLE `sys_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `sys_companies`
--
ALTER TABLE `sys_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sys_currencies`
--
ALTER TABLE `sys_currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_documents`
--
ALTER TABLE `sys_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_emailconfig`
--
ALTER TABLE `sys_emailconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_email_logs`
--
ALTER TABLE `sys_email_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_email_templates`
--
ALTER TABLE `sys_email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_events`
--
ALTER TABLE `sys_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_goods_inventory`
--
ALTER TABLE `sys_goods_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sys_invoiceitems`
--
ALTER TABLE `sys_invoiceitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_invoices`
--
ALTER TABLE `sys_invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_items`
--
ALTER TABLE `sys_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_item_cats`
--
ALTER TABLE `sys_item_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_leads`
--
ALTER TABLE `sys_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `sys_mitems`
--
ALTER TABLE `sys_mitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sys_morder`
--
ALTER TABLE `sys_morder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_morder_items`
--
ALTER TABLE `sys_morder_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sys_mpurchase`
--
ALTER TABLE `sys_mpurchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_mpurchase_item`
--
ALTER TABLE `sys_mpurchase_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sys_mreturn`
--
ALTER TABLE `sys_mreturn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_mreturn_items`
--
ALTER TABLE `sys_mreturn_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sys_mwaste`
--
ALTER TABLE `sys_mwaste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_mwaste_items`
--
ALTER TABLE `sys_mwaste_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_orders`
--
ALTER TABLE `sys_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_permissions`
--
ALTER TABLE `sys_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sys_pg`
--
ALTER TABLE `sys_pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sys_pl`
--
ALTER TABLE `sys_pl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_pmethods`
--
ALTER TABLE `sys_pmethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sys_purchaseitems`
--
ALTER TABLE `sys_purchaseitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sys_purchases`
--
ALTER TABLE `sys_purchases`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_quoteitems`
--
ALTER TABLE `sys_quoteitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_quoteitems_history`
--
ALTER TABLE `sys_quoteitems_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_quotes`
--
ALTER TABLE `sys_quotes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_quotes_history`
--
ALTER TABLE `sys_quotes_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_roles`
--
ALTER TABLE `sys_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_sales`
--
ALTER TABLE `sys_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_schedule`
--
ALTER TABLE `sys_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_schedulelogs`
--
ALTER TABLE `sys_schedulelogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sys_staffpermissions`
--
ALTER TABLE `sys_staffpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `sys_status`
--
ALTER TABLE `sys_status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sys_tags`
--
ALTER TABLE `sys_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tasks`
--
ALTER TABLE `sys_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sys_tax`
--
ALTER TABLE `sys_tax`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sys_ticketdepartments`
--
ALTER TABLE `sys_ticketdepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sys_ticketmaillog`
--
ALTER TABLE `sys_ticketmaillog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_ticketpredefinedreplies`
--
ALTER TABLE `sys_ticketpredefinedreplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_ticketreplies`
--
ALTER TABLE `sys_ticketreplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_tickets`
--
ALTER TABLE `sys_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_transactions`
--
ALTER TABLE `sys_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_units`
--
ALTER TABLE `sys_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transfered_product`
--
ALTER TABLE `transfered_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
