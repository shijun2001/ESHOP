-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-17 05:46:42
-- 服务器版本： 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'CD', '12月18日（金）18:30全国一斉公開となる映画『スター・ウォーズ／フォースの覚醒』の公開に合わせて、オリジナル・サウンドトラックが発売決定！'),
(2, 'DVD', '『スター・ウォーズ/フォースの覚醒』（スター・ウォーズ/フォースのかくせい、原題：STAR WARS: THE FORCE AWAKENS）は、2015年に公開されたアメリカ映画。'),
(3, 'ブルーレイ', 'シリーズを代表するアイコンと、ドゥルー・ストゥルーザンが描いた劇場公開時のアートワークを採用したファン垂涎のスチールブックが６作品セットで登場!'),
(4, '本', '映画『スター・ウォーズ フォースの覚醒』がはじまる数ヶ月から数日前に、レイ、ポー、フィンの3人におきた出来事を描くアンソロジー。'),
(5, 'パソコンゲーム', '夢にまで見たあの「Star Wars™」の戦場がここにある。今こそ始まる伝説の戦い。「Star Wars™バトルフロント™」で、かつてない君だけの英雄譚を実現せよ。'),
(6, 'テレビゲーム', 'LEGO Star Wars: The Complete Saga enables families to play through the events of all six Star Wars movies in one videogame for the first time ever.'),
(7, 'ポケットゲーム', 'LEGO Star Wars: The Complete Saga enables families to play through the events of all six Star Wars movies in one videogame for the first time ever.'),
(8, '服＆ファッション小物', '「スター・ウォーズ」関連商品をまとめてチェック。人気キャラクターストアでは、各種グッズが勢ぞろい。'),
(9, '置き時計・掛け時計', '「スター・ウォーズ」関連商品をまとめてチェック。人気キャラクターストアでは、各種グッズが勢ぞろい。'),
(10, 'ホビー', '「エピソード5」の「クラウド・シティ」の戦いにおいて、圧倒的な力を見せつけたダース・ベイダーを1/12スケールモデルで再現・');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `buyer_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`, `order_date`, `order_time`, `buyer_name`) VALUES
(1, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-11', '17:12:29', 'koizumi'),
(2, 2, '49E69222HK523644K', 'USA', 'Completed', '2016-02-11', '17:13:40', 'shijun'),
(3, 2, '49E69222HK523644K', 'USA', 'Completed', '2016-02-11', '17:13:40', 'shijun'),
(4, 2, '49E69222HK523644K', 'USA', 'Completed', '2016-02-11', '17:13:40', 'shijun'),
(5, 3, '47E69189HK565615G', 'CHS', 'Completed', '2016-02-11', '17:14:36', 'wumei'),
(6, 3, '47E69189HK565615G', 'CHS', 'Completed', '2016-02-11', '17:14:36', 'wumei'),
(7, 3, '47E69189HK565615G', 'CHS', 'Completed', '2016-02-11', '17:14:36', 'wumei'),
(8, 3, '47E69189HK565615G', 'CHS', 'Completed', '2016-02-11', '17:14:36', 'wumei'),
(9, 4, '81E69449HK523678K', 'JPY', 'Completed', '2016-02-11', '17:15:20', 'newyear'),
(10, 4, '81E69449HK523678K', 'JPY', 'Completed', '2016-02-11', '17:15:20', 'newyear'),
(11, 5, '65E65789HK476626B', 'USA', 'Completed', '2016-02-11', '17:16:23', 'shishi'),
(12, 5, '65E65789HK476626B', 'USA', 'Completed', '2016-02-11', '17:16:23', 'shishi'),
(13, 5, '65E65789HK476626B', 'USA', 'Completed', '2016-02-11', '17:16:23', 'shishi'),
(14, 5, '65E65789HK476626B', 'USA', 'Completed', '2016-02-11', '17:16:23', 'shishi'),
(15, 5, '65E65789HK476626B', 'USA', 'Completed', '2016-02-11', '17:16:23', 'shishi'),
(16, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-11', '17:49:25', 'koizumi'),
(17, 6, '21E56789HK666453R', 'CHS', 'Completed', '2016-02-12', '22:00:28', 'sirine'),
(18, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-13', '02:41:26', 'koizumi'),
(19, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-13', '02:41:26', 'koizumi'),
(20, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-13', '02:41:26', 'koizumi'),
(21, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-13', '02:43:14', 'koizumi'),
(22, 1, '79E69189HK523625W', 'JPY', 'Completed', '2016-02-13', '02:43:14', 'koizumi'),
(23, 6, '21E56789HK666453R', 'CHS', 'Completed', '2016-02-15', '01:00:14', 'sirine'),
(24, 6, '21E56789HK666453R', 'CHS', 'Completed', '2016-02-15', '01:00:14', 'sirine'),
(25, 6, '21E56789HK666453R', 'CHS', 'Completed', '2016-02-15', '10:24:39', 'sirine');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`, `add_datetime`) VALUES
(1, '新たなる希望', 2, 16000, 5, '当初のタイトルは『スター・ウォーズ』のみだった。「新たなる希望」という副題は1976年の脚本の最終稿に見えていたが、公式に付けられたのは1980年の『帝国の逆襲』公開前のリバイバル上映からで、オープニング・クロールに加えられるようになったのはVHS版からであった。\r\n元々「大河ドラマの一部」という前提で製作された（3年に一度続編を作ると言われていたが実際には無理だった）ための便宜上の副題であったが、シリーズ化に成功、更に1999年に前日談となる『スター・ウォーズ エピソード1/ファントム・メナス』が公開されて以降、各作品を区別するため正式なタイトルとして加えられるようになった。\r\n全シリーズの中で、本作がスピンオフを含めて『スター・ウォーズ・サーガ』を語る上での中心となっていて、製作された時代背景、特撮上の不備などから実質上の公開第1作目である。\r\n特撮シーンの評価も高かったが、第一次、第二次世界大戦の記録映像を研究して作り上げられた戦闘機の空中戦シーンとその編集、ベンジャミン・バートJr.が制作した既成の音源に頼らないユニークな効果音やキャラクターの声をもそれまでに無い新しさを印象付ける一助となり、アカデミー賞を得ている。\r\n1977年公開当時、1978年公開の映画『未知との遭遇』などとともに世界的なSFブームを巻き起こし、それまでマニアックな映画としてしか認識されていなかったSF作品を誰でも楽しめるエンターテインメントへと評価を完全に変えた。アメリカ国内のみでの総合興行収入（インフレーション調整版）は歴代2位（世界歴代興行収入上位の映画一覧参照）。1989年にはアメリカ国立フィルム登録簿に永久保存登録された。', '『スター・ウォーズ エピソード4/新たなる希望』（スター・ウォーズ エピソードフォー/あたらなるきぼう、原題：STAR WARS EPISODE Ⅳ A NEW HOPE）は、1977年に公開されたアメリカ映画。', 'starwars-dvd-4.jpg', '2016-02-15 10:27:15'),
(2, '帝国の逆襲', 2, 9600, 9, 'SF映像作品『スター・ウォーズ』シリーズの、主要実写映画第2作品目。シリーズ主要9部作の中では、ルーク・スカイウォーカーを主人公とする3部作の第2章『エピソード5』に当たる。\r\n公開当初、タイトルは『スター・ウォーズ/帝国の逆襲』で、『エピソード5』は付いていなかった。だが、後年本作の大ヒットによりシリーズ化が決定してから、現在のタイトルに変更された。1997年には最新CG技術などを使ってシーンの差し替えなどが施された『スター・ウォーズ/帝国の逆襲 特別篇』が公開された。2012年現在発売されているDVDでは、さらに変更が加えられている。', '『スター・ウォーズ エピソード5/帝国の逆襲』（スター・ウォーズ エピソードファイブ/ていこくのぎゃくしゅう、原題：STAR WARS EPISODE V:THE EMPIRE STRIKES BACK）は、1980年に公開されたアメリカ映画。', 'starwars-dvd-5.jpg', '2016-02-01 00:00:00'),
(3, 'ジェダイの帰還', 2, 25600, 2, 'SF映像作品『スター・ウォーズ』シリーズにおける主要実写映画の公開第3作品目。シリーズ主要9部作の中では、ルーク・スカイウォーカーを主人公とする3部作の最終章『エピソード6』に当たる。\r\n公開当初、日本では副題が『ジェダイの復讐』（ジェダイのふくしゅう）で、1997年の《特別篇》公開時にもそれが踏襲されていたが、2004年のDVD版の発売に合わせて原題の正しい訳である『ジェダイの帰還』に訂正された。また『エピソード6』もタイトルに付いていなかったが、後年本作の大ヒットによりシリーズ化が決定してから副題として追加された。\r\n1997年の《特別篇》公開、2004年のDVD版の発売、2011年のブルーレイ版の発売に際し、その都度最新のCG技術などを用いて一部内容の修正・変更が行われている。', '『スター・ウォーズ エピソード6/ジェダイの帰還』（スター・ウォーズ エピソードシックス/ジェダイのきかん、原題：STAR WARS EPISODE VI RETURN OF THE JEDI）は、1983年に公開されたアメリカ映画。', 'starwars-dvd-6.jpg', '2016-02-02 00:00:00'),
(4, 'ファントム・メナス', 2, 7200, 4, '前作『スター・ウォーズ エピソード6/ジェダイの帰還』から16年振りに製作された。\r\n本シリーズの劇中の時系列では第1章であり、ルーク・スカイウォーカー3部作（『スター・ウォーズ エピソード4/新たなる希望』､『スター・ウォーズ エピソード5/帝国の逆襲』､『エピソード6/ジェダイの帰還』）で主要な敵役となるダース・ベイダーことアナキン・スカイウォーカーの少年時代を中心に描いた内容となっている。\r\nジョージ・ルーカスにとっては、『エピソード4/新たなる希望』で一度監督業から撤退して以来22年ぶりの監督作でもある。なお、「エピソード4～6」をきっかけに全世界の映画館が「ドルビーステレオシステム」を導入した。その関係で、本作がドルビーデジタルサラウンドEXの世界初の映画となった。', '『スター・ウォーズ エピソード1/ファントム・メナス』（スター・ウォーズ エピソードワン/ファントム・メナス、原題：STAR WARS EPISODE I: THE PHANTOM MENACE）は、1999年に公開されたアメリカ映画。', 'starwars-dvd-1.jpg', '2016-02-02 00:00:00'),
(5, 'クローンの攻撃', 2, 3900, 11, 'アナキンの苦悩や、パドメ・アミダラとの禁じられた恋愛、そして『スター・ウォーズ　エピソード4/新たなる希望』でオビ＝ワン・ケノービとルーク・スカイウォーカーの会話に登場した「クローン大戦」の開戦の発端が主要なテーマとなっている。\r\n『スター・ウォーズ エピソード5/帝国の逆襲』と同じく、3部作の中間ということで、物語は途中のまま終了する。\r\nこの作品からヨーダも完全CGIで表現されるようになった。また長編映画では初めて、全編HD24Pによるデジタル撮影が行われた[1]。このため、生身の人間が出演するシーンは全て、グリーンバック合成が行われた[2]。また「エピソード1～6」では唯一、視覚効果としてズームインが用いられている。\r\n2013年にデジタル3D版が公開される予定だったが、2012年10月、ウォルト・ディズニー・カンパニーが本シリーズの制作会社ルーカスフィルムを買収し、『エピソード7』に当たる『スター・ウォーズ/フォースの覚醒』を始めとする新たな3部作「エピソード7・8・9」の映画製作の決定に伴い、ルーカスフィルムがその新作の製作に尽力することとなり、事実上中止となった。', '『スター・ウォーズ エピソード2/クローンの攻撃』（スター・ウォーズ エピソードツー/クローンのこうげき、原題：STAR WARS EPISODE II: ATTACK OF THE CLONES）は、2002年に公開されたアメリカ映画。', 'starwars-dvd-2.jpg', '2016-02-02 00:00:00'),
(6, 'シスの復讐', 2, 5000, 6, 'アナキンがダークサイドに堕ちてしまう悲劇を描き、ダース・ベイダーと銀河帝国の誕生が主要なテーマとなっている。またアナキン三部作（『スター・ウォーズ エピソード1/ファントム・メナス』､『スター・ウォーズ エピソード2/クローンの攻撃』､『本作』）とルーク・スカイウォーカー三部作（『スター・ウォーズ エピソード4/新たなる希望』､『スター・ウォーズ エピソード5/帝国の逆襲』､『スター・ウォーズ エピソード6/ジェダイの帰還』）を繋ぐ重要な物語でもある。\r\nアメリカでは、本シリーズの映画で初のPG-13（13歳未満の児童には不適切な箇所があるため、保護者の判断が必要）に指定された（後年『スター・ウォーズ/フォースの覚醒』も指定された）。\r\n興行的には成功したものの、1年で最低の映画を選ぶゴールデンラズベリー賞でアナキン役のヘイデン・クリステンセンが最低助演男優賞（彼が主演にもかかわらず「助演」扱いされただけでなく、キャスト順ではオビ＝ワン・ケノービ役のユアン・マクレガーが先頭に記載された）とされる結果となった。', '『スター・ウォーズ エピソード3/シスの復讐』（スター・ウォーズ エピソードスリー/シスのふくしゅう、原題：STAR WARS EPISODE III: REVENGE OF THE SITH）は、2005年に公開されたアメリカ映画。', 'starwars-dvd-3.jpg', '2016-02-02 00:00:00'),
(7, 'スチールブックセット', 3, 22800, 9, 'シリーズを代表するアイコンと、ドゥルー・ストゥルーザンが描いた劇場公開時のアートワークを採用したファン垂涎のスチールブックが６作品セットで登場!\r\n\r\n【エピソードⅠ】\r\n<ストーリー>\r\n惑星ナブーの女王クィーン・アミダラ(ナタリー・ポートマン)を救出後、惑星タトゥイーンに不時着したジェダイのパダワン、オビ=ワン・ケノービ(ユアン・マクレガー)とジェダイ・マスターのクワイ=カン・ジン(リーアム・ニーソン)は奴隷の少年アナキン・スカイウォーカーと出会う。“フォース"の力に恵まれたアナキンは自由を手に入れジェダイの騎士となるべく彼らと共に故郷を発つ。ナブーに帰還した女王とアナキンたちは大規模な侵略に直面する一方、クワイ=ガン・ジンたちは強力な敵ダース・モールと死闘を繰り広げる。ほどなくして彼らはこの侵略が闇の力を誇るシスの邪悪な計画の一部であることに気づく。\r\n※ディスク内容はFXXA-51416 『スター・ウォーズ コンプリート・サーガ ブルーレイBOX』に収録されている『スター・ウォーズ エピソードI/ファントム・メナス』と同仕様です。\r\n\r\n<特典>\r\n●ジョージ・ルーカス、リック・マッカラム、ベン・バート、ロブ・コールマン、ジョン・ノール、デニス・ミューレン、スコット・スクワイアーズによる音声解説\r\n●キャスト&スタッフによる音声解説 \r\n(アーメド・ベスト、ギャビン・ボケット、ベン・バート、ダグ・チャン、ロブ・コールマン、ニック・ジラード、サミュエル・L・ジャクソン、ジョン・ノール、ジェイク・ロイド、ジョージ・ルーカス、リック・マッカラム、イアン・マクダーミッド、ユアン・マクレガー、デニス・ミューレン、リーアム・ニーソン、レイ・パーク、ナタリー・ポートマン、スコット・スクワイアーズ) \r\n\r\n【エピソードⅡ】\r\n<ストーリー>\r\n惑星ナブー侵略から10年。20歳になったアナキン・スカイウォーカー(ヘイデン・クリステンセン)はジェダイの騎士オビ=ワン・ケノービ(ユアン・マクレガー)のパダワンになっていた。分離主義勢力と共和国の間で戦争の気運が高まる中、惑星ナブーの元女王であるパドメ・アミダラ議員(ナタリー・ポートマン)暗殺未遂事件が起こる。アミダラの護衛の命を受けたアナキンは、その過程で恋に落ちるとともに自らの暗黒面を知る。そして遂にアナキン、アミダラ、オビ=ワン・ケノービは激しさを増す銀河星系間の衝突とクローン大戦に身を投じることになる。\r\n\r\n<特典>\r\n●ジョージ・ルーカス、リック・マッカラム、ベン・バート、ロブ・コールマン、パブロ・ヘルマン、ジョン・ノール、ベン・スノーによる音声解説\r\n●キャスト&スタッフによる音声解説\r\n(ベン・バート、ヘイデン・クリステンセン、ロブ・コールマン、ニック・ジラード、パブロ・ヘルマン、サミュエル・L・ジャクソン、ジョン・ノール、クリストファー・リー、ジョージ・ルーカス、リック・マッカラム、イアン・マクダーミッド、ユアン・マクレガー、テムエラ・モリソン、ナタリー・ポートマン、ジミー・スミッツ、ベン・スノー、ジョン・ウィリアムズ) \r\n\r\n【エピソードⅢ】\r\n<ストーリー>\r\nクローン大戦から数年後、シスが長年練り上げてきた陰謀を明らかにする。共和国は崩壊し、邪悪な銀河帝国が台頭。ジェダイ・マスターのメイス・ウィンドゥ(サミュエル・L・ジャクソン)が最も恐れていたことが現実となりアナキン・スカイウォーカー(ヘイデン・クリステンセン)はダークサイドに染まり銀河皇帝の新たな手先ダース・ベイダーと化す。ジェダイは壊滅し、オビ=ワン・ケノービ(ユアン・マクレガー)とジェダイ・マスターのヨーダは身を潜めることに。世界を救う唯一の希望は英雄的な運命を背負うことになるアナキンとアミダラが残した双子の存在だった……。\r\n\r\n<特典>\r\n●ジョージ・ルーカス、リック・マッカラム、ロブ・コールマン、ジョン・ノール、 ロジャー・ガイエットによる音声解説\r\n●キャスト&スタッフによる音声解説\r\n(トリシャ・ビガー、ギャビン・ボケット、ベン・バート、サイラス・カーソン、ヘイデン・クリステンセン、ロブ・コールマン、アンソニー・ダニエルズ、ニック・ジラード、ロジャー・ガイエット、サミュエル・L・ジャクソン、ジョン・ノール、クリストファー・リー、ジョージ・ルーカス、リック・マッカラム、テムエラ・モリソン、イアン・マクダーミッド、ユアン・マクレガー、ナタリー・ポートマン、ジミー・スミッツ) \r\n\r\n【エピソードⅣ】\r\n<ストーリー>\r\n帝国の台頭から20数年の時が流れた頃、砂漠の惑星タトゥイーンで農夫として暮らしていた青年ルーク・スカイウォーカー(マーク・ハミル)は、長きにわたって身を潜めていたオビ=ワン・ケノービ(アレック・ギネス)との出会いを果たす。やがてジェダイになるための修業をはじめたルークに、オビ=ワンは帝国軍と反乱軍の戦闘や“フォース"について語りはじめる。その後、ふたりは報酬を目当てに現れたハン・ソロ(ハリソン・フォード)と名乗る敏腕の宇宙船操縦士と彼のウーキー族の相棒チューバッカとともに、帝国軍の総統ダース・ベイダーが指揮を執る巨大要塞デス・スターから反乱軍のリーダー、レイア(キャリー・フィッシャー)を助け出すため同軍に参加するのだった。\r\n\r\n<特典>\r\n●ジョージ・ルーカス、キャリー・フィッシャー、ベン・バート、デニス・ミューレンによる音声解説\r\n●キャスト&スタッフによる音声解説\r\n(ケニー・ベイカー、ベン・バート、リチャード・チュウ、アンソニー・ダニエルズ、ピーター・ダイアモンド、ジョン・ダイクストラ、リチャード・エドランド、キャリー・フィッシャー、ハリソン・フォード、スチュアート・フリーボーン、アレック・ギネス、マーク・ハミル、ポール・ハーシュ、ゲイリー・カーツ、ジョージ・ルーカス、ピーター・メイヒュー、ラルフ・マクォーリー、デニス・ミューレン、ノーマン・レイノルズ、フィル・ティペット、ロバート・ワッツ) \r\n\r\n【エピソードⅤ】\r\n<ストーリー>\r\nデス・スターを爆破された帝国軍は氷の惑星ホスまで反乱軍を追いつめ、激しい戦闘を繰り広げる。ルーク・スカイウォーカー(マーク・ハミル)は反乱軍にいて壊滅的な敗北を喫した後、惑星ダゴバへと向かいジェダイ・マスターのヨーダのもとで修業を重ねる。一方、雲の惑星ベスピンではルークをおびき寄せるための手段として、ハン・ソロ(ハリソン・フォード)とレイア(キャリー・フィッシャー)がダース・ベイダーの手に落ちてしまった。ふたりの救出に向かったルークを待ち受けていたのは、ダース・ベイダーとの壮絶な戦いと彼の運命を大きく変える驚くべき事実だった。\r\n\r\n<特典>\r\n●ジョージ・ルーカス、キャリー・フィッシャー、アービン・カーシュナー、ベン・バート、デニス・ミューレンによる音声解説\r\n●キャスト&スタッフによる音声解説\r\n(ジェレミー・ブロック、ベン・バート、アンソニー・ダニエルズ、ピーター・ダイアモンド、キャリー・フィッシャー、ハリソン・フォード、スチュアート・フリーボーン、スティーブ・ガウリー、アレック・ギネス、マーク・ハミル、ジョー・ジョンストン、ローレンス・カスダン、アービン・カーシュナー、ゲイリー・カーツ、ジョージ・ルーカス、ピーター・メイヒュー、ラルフ・マクォーリー、デニス・ミューレン、フランク・オズ、ケン・ラルストン、ノーマン・レイノルズ、ロバート・ワッツ、ビリー・ディー・ウィリアムズ) \r\n\r\n【エピソードⅥ】\r\n<ストーリー>\r\n帝国軍がさらに強大な威力を誇るデス・スター2を建設する中、ルーク・スカイウォーカー(マーク・ハミル)は銀河犯罪組織の首領ジャバ・ザ・ハットに捕らわれていたハン・ソロ(ハリソン・フォード)の救出に成功する。その後、反乱軍は緑の惑星エンドアで森の住人イウォーク族の協力を得て帝国軍の新兵器の破壊を計画する。一方、デス・スターではルークと父であるダース・ベイダーが死闘を繰り広げていた。やがてルークに最期の瞬間が訪れようとした時、ダース・ベイダーは息子の命と銀河の自由の決断を迫られることになるのだった。\r\n\r\n<特典>\r\n●ジョージ・ルーカス、キャリー・フィッシャー、ベン・バート、デニス・ミューレンによる音声解説\r\n●キャスト&スタッフによる音声解説\r\n(ケニー・ベイカー、ジム・ブルーム、ジェレミー・ブロック、ベン・バート、アンソニー・ダニエルズ、ワーウィック・デイビス、ピーター・ダイアモンド、リチャード・エドランド、キャリー・フィッシャー、ハリソン・フォード、スチュアート・フリーボーン、スティーブ・ガウリー、マーク・ハミル、ポール・ヒューストン、ローレンス・カスダン、ハワード・カザンジャン、ジョージ・ルーカス、イアン・マクダーミッド、ラルフ・マクォーリー、デニス・ミューレン、フランク・オズ、ケン・ラルストン、ノーマン・レイノルズ、フィル・ティペット、ロバート・ワッツ、ビリー・ディー・ウィリアムズ、ジョン・ウィリアムズ)', 'スター・ウォーズ　サーガ　スチールブックセット（エピソード1～6） [Blu-ray]', 'starwars-bd-1.jpg', '2016-02-03 00:00:00'),
(8, 'オリジナル・トリロジ', 3, 10480, 7, '全世界待望！　『スター･ウォーズ』初ブルーレイ化！\r\nナタリー・ポートマン、ユアン・マクレガーらによる音声解説を新収録！\r\n\r\n＜収録作品＞\r\n【3枚組】「スター・ウォーズ　エピソードI -ＩＩＩ」（各Disc1枚）\r\n・「スター・ウォーズ　エピソードI／ファントム・メナス」\r\n・「スター・ウォーズ　エピソードＩＩ／クローンの攻撃」\r\n・「スター・ウォーズ　エピソードＩＩＩ／シスの復讐」\r\n\r\n＜ポイント＞\r\n●迫力の高画質・高音質＝ブルーレイで甦るエピソードI～IIIを収録のプリクエル・トリロジー・ブルーレイBOX！\r\n●それぞれのエピソードに2種類の音声解説を収録。\r\n\r\n＜音声仕様＞\r\n英語6.1ch DTS-HD マスター・オーディオ(ロスレス)\r\n日本語5.1ch DTS', 'スター・ウォーズ　オリジナル・トリロジー　ブルーレイBOX （初回生産限定） [Blu-ray]', 'starwars-bd-2.jpg', '2016-02-03 00:00:00'),
(9, 'プリクエル・トリロジ', 3, 21490, 3, '全世界待望！　『スター･ウォーズ』初ブルーレイ化！\r\nナタリー・ポートマン、ユアン・マクレガーらによる音声解説を新収録！\r\n\r\n＜収録作品＞\r\n【3枚組】「スター・ウォーズ　エピソードI -ＩＩＩ」（各Disc1枚）\r\n・「スター・ウォーズ　エピソードI／ファントム・メナス」\r\n・「スター・ウォーズ　エピソードＩＩ／クローンの攻撃」\r\n・「スター・ウォーズ　エピソードＩＩＩ／シスの復讐」\r\n\r\n＜ポイント＞\r\n●迫力の高画質・高音質＝ブルーレイで甦るエピソードI～IIIを収録のプリクエル・トリロジー・ブルーレイBOX！\r\n●それぞれのエピソードに2種類の音声解説を収録。', 'スター・ウォーズ　プリクエル・トリロジー　ブルーレイBOX（初回生産限定） [Blu-ray]', 'starwars-bd-3.jpg', '2016-02-04 00:00:00'),
(10, 'フォースの覚醒', 2, 15600, -10, 'SF映像作品『スター・ウォーズ』シリーズにおける主要実写映画の第7作品目。シリーズ主要9部作の中では、レイを主人公とする3部作の第1章『エピソード7』に当たる。ウォルト・ディズニー・カンパニーによるルーカスフィルム買収後に製作された初の『スター・ウォーズ』映画である。\r\n公開日はフランス・イタリアなどで12月16日11時30分（現地時間）。香港・台湾で12月17日。中国（2016年1月9日）を除くその他の地域は12月18日（金曜日）9時30分（UTC）に同時刻一斉公開。\r\nレイティングについて、日本（映画倫理委員会）ではG指定だが、アメリカ（MPAA）では暴力表現があるため、『スター・ウォーズ エピソード3/シスの復讐』同様PG-13（13歳未満の児童には不適切な箇所あり。保護者の判断が必要。）に指定された[6]。', '『スター・ウォーズ/フォースの覚醒』（スター・ウォーズ/フォースのかくせい、原題：STAR WARS: THE FORCE AWAKENS）は、2015年に公開されたアメリカ映画。', 'starwars-dvd-7.jpg', '2016-02-16 14:22:10'),
(11, 'フォースの覚醒 CD', 1, 2900, 4, '初回仕様：スリーブ\r\n初回封入特典：日本版ロゴステッカー\r\n\r\n12月18日（金）18:30全国一斉公開となる映画『スター・ウォーズ／フォースの覚醒』の公開に合わせて、オリジナル・サウンドトラックが発売決定！\r\n音楽は、あの胸躍るテーマ曲を生み出し、すべてのエピソードを担当した名匠ジョン・ウィリアムズ。\r\n(C)2015Lucasfilm Ltd. & TM. All Rights Reserved\r\n\r\n【収録内容】\r\n01.Main Title and The Attack on the Jakku Village\r\n02.The Scavenger\r\n03.I Can Fly Anything\r\n04.Rey Meets BB-8\r\n05.Follow Me\r\n06.Rey’s Theme\r\n07.The Falcon\r\n08.That Girl with the Staff\r\n09.The Rathtars!\r\n10.Finn’s Confession\r\n11.Maz’s Counsel\r\n12.The Starkiller\r\n13.Kylo Ren Arrives at the Battle\r\n14.The Abduction\r\n15.Han and Leia\r\n16.March of the Resistance\r\n17.Snoke\r\n18.On the Inside\r\n19.Torn Apart\r\n20.The Ways of the Force\r\n21.Scherzo for X-Wings\r\n22.Farewell and The Trip\r\n23.The Jedi Steps and Finale', 'スター・ウォーズ/フォースの覚醒 オリジナル・サウンドトラック(初回スリーブ仕様)', 'starwars-cd-1.jpg', '2016-02-05 00:00:00'),
(12, 'Soundtrack Collection', 1, 7200, 7, '前作『スター・ウォーズ エピソード6/ジェダイの帰還』から16年振りに製作された。\r\n本シリーズの劇中の時系列では第1章であり、ルーク・スカイウォーカー3部作（『スター・ウォーズ エピソード4/新たなる希望』､『スター・ウォーズ エピソード5/帝国の逆襲』､『エピソード6/ジェダイの帰還』）で主要な敵役となるダース・ベイダーことアナキン・スカイウォーカーの少年時代を中心に描いた内容となっている。', 'スター・ウォーズ/フォースの覚醒 オリジナル・サウンドトラック(初回スリーブ仕様)', 'starwars-cd-2.jpg', '2016-02-16 14:21:35'),
(13, 'フォースの覚醒前夜', 4, 900, 8, '映画『スター・ウォーズ フォースの覚醒』がはじまる数ヶ月から数日前に、レイ、ポー、フィンの3人におきた出来事を描くアンソロジー。\r\n~ポー~\r\n反乱軍を両親に持つ天才パイロット・ポーは、パトロール中に突如ファースト・オーダーの大軍と遭遇。数的には劣勢でありながらも、巧みな操縦でファースト・オーダーのTIEファイターを撃墜し続けるが、ファースト・オーダーの卑劣な作戦に巻き込まれ、信頼する仲間のパイロットを一人失った。\r\nしかし、新共和国の長官はファースト・オーダーの追跡を許してくれず、ポーは命令に背き、ひとりXウィングを飛ばして、ファースト・オーダーに奪われた貨物船の場所をつきとめた。基地に戻ってきた彼を待っていたのは、見知らぬイーマット大佐という男だった。\r\n~レイ~\r\n難破船だらけの惑星、ジャクーでたくましく生活している、廃品回収業者のレイ。ある日彼女は、嵐によって地表に現れた、完全な”船”を見つけた。一人で船を操縦可能な状態に戻そうとするレイが、同業者にみつかってしまい・・・・・・。\r\n~フィン~\r\n優秀なストームトルーパー訓練生FN-2187は、百発百中のブラスター技術と、類まれなリーダーシップにより、訓練を一手に受ける上官キャプテン・ファズマにも期待される逸材だった。しかし、彼は出来の悪いチームメンバーを、どうしても見捨てることができない。度重なる”仲間を重要視する”行動がファズマの目につき、問題視されるように……。', 'STAR WARS フォースの覚醒前夜 ~ポー・レイ・フィン~ (講談社KK文庫) 新書', 'starwars-book-1.jpg', '2016-02-16 14:23:11'),
(14, 'Sith Lords (PC)', 5, 2800, 5, 'Five years after the events from the award winning Knights of the Old Republic, the Sith Lords have hunted the Jedi to the edge of extinction and are on the verge of crushing the Old Republic. With the Jedi Order in ruin, the Republic''s only hope is a Jedi Knight struggling to reconnect with the Force and faced with the galaxy''s most dire decision: To follow the light or succumb to the dark side... The Sith Lords is the next chapter to Knights of the Old Republic; winner of more than 35 "Game of The Year Awards" featuring an all-new and perilous storyline set approximately 4,000 years before Star Wars Episode I. All-new Force powers, weapons, locations, characters and classes add to the richness of this next epic installment. Choose from three different classes of Jedi to start the game with access to specific Jedi abilities. Choose the light or the dark side of the Force based on your characters actions as you progress through the story. The choices you make not only affect your character, but also those in your party, and those who may join you in your quest. Cameo appearances from memorable characters of the first game enhance the continuity and story flow through this unique time period. Developed by Obsidian Entertainment, the development house founded by members of the Fallout, Icewind Dale, Baldur''s Gate: Dark Alliance, and Planescape: Torment teams.', 'Star Wars: Knights of the Old Republic II - Sith Lords (PC)', 'starwars-pc-1.jpg', '2016-02-06 00:00:00'),
(15, 'The Force Unleashed', 5, 1750, 5, '※海外版ゲームソフトの一部は日本版のゲーム機では動作しません。お持ちのゲーム機のバージョンをあらかじめご参照のうえ、下記の対応表(※1)にて動作の有無をご確認ください。\r\n(例：日本版Xbox360をお持ちの場合、基本的に北米版Xbox360ゲームソフトはお遊びいただけません。)\r\n※(輸入版) と記載されている商品について、北米版、アジア版などの地域を選択することはできません。（※但し、北米版、アジア版と記載されているものは、そのリージョンの商品が対象となります。）\r\n※実際のパッケージは写真と異なる場合がございます。\r\n※商品タイトルに特別な記載がない場合、通常版の商品のお届けとなります。また基本的に特典は付属しておりませんのでご注意ください。', 'Star Wars: The Force Unleashed II (輸入版)', 'starwars-pc-2.jpg', '2016-02-07 00:00:00'),
(16, 'The Complete Saga', 6, 6300, 5, 'Building on the success of both LEGO Star Wars videogames, LEGO Star Wars: The Complete Saga enables families to play through the events of all six Star Wars movies in one videogame for the first time ever. From the Trade Federation''s "negotiations" with Obi-Wan Kenobi and Qui-Gon Jinn in The Phantom Menace to the space battle above Endor in Return of the Jedi, The Complete Saga allows players to kick some brick through 36 Story Mode levels, including Episode II''s newly added high-speed pursuit of bounty hunter Zam Wessell. Traveller''s Tales has revamped levels from the original LEGO Star Wars to match the gameplay evolutions found in LEGO Star Wars II, and Prequel Trilogy characters can now be mixed and matched with those from the Original Trilogy -- more than 160 in all. Features include new playable characters, an upgraded character customizer, and new bonus levels.', 'Lego Star Wars: The Complete Saga (輸入版:北米)', 'starwars-tv-2.jpg', '2016-02-07 00:00:00'),
(17, '彩るコスチューム', 4, 6480, 98, 'アナキン・スカイウォーカー、オビ=ワン、ヨーダ、クワイ=ガン・ジン、パドメ・アミダラ、タイフォ隊長………スターウォーズのコスチュームはこう作られた! \r\n\r\nルーカスフィルム・アーカイヴに保管されていた300点を超えるカラー写真とイラストで、「スター・ウォーズ」シリーズ全6作品のキャラクターと衣装をご覧いただきます。\r\n\r\n本書で主に取り上げているのは、エピソードごとに数百ものハンドメイドのコスチュームが作られたエピソード1、2、3のコスチューム。凝った衣装の写真に加え、バーチャルの衣装に身を包んだCGキャラクターたちも登場。\r\n\r\nサミュエル・L・ジャクソン、ジミー・スミッツ、ケイシャ・キャッスル=ヒューズ、ユアン・マクレガー、ヘイデン・クリステンセン、ナタリー・ポートマンら、スクリーン\r\nを彩る俳優たちが、見事な衣装を身に着けた時の気持ちを自らの言葉で述べています。\r\n\r\nさらに、コンセプト、デザイン、制作といった、手の込んだ衣装がスクリーンに映し出されるまでの舞台裏も知ることができます。\r\n\r\nエピソード1・2・3の衣装をデザインしたトリシャ・ビガー自身の手による、豪華な写真&アート集。エピソード1・2・3のコスチュームはもとより、エピソード4・5・6のキャストとの比較が掲載されたコラム記事も読みごたえあり! \r\n\r\nスケッチ、カラーイラスト、生地の肌理まで分かる大判写真で、銀河を彩る華麗なコスチュームを堪能できます。', 'Dressing a Galaxy: スター・ウォーズ 銀河を彩るコスチューム[ハードカバー](仮) 大型本', 'starwars-book-2.jpg', '2016-02-08 00:00:00'),
(18, 'Angry Birds: Star Wars', 7, 4000, -10, '※海外版ゲームソフトの一部は日本版のゲーム機では動作しません。お持ちのゲーム機のバージョンをあらかじめご参照のうえ、下記の対応表(※1)にて動作の有無をご確認ください。\r\n(例：日本版Xbox360をお持ちの場合、基本的に北米版Xbox360ゲームソフトはお遊びいただけません。)\r\n※(輸入版) と記載されている商品について、北米版、アジア版などの地域を選択することはできません。（※但し、北米版、アジア版と記載されているものは、そのリージョンの商品が対象となります。）', 'Angry Birds: Star Wars (Playstation Vita) (輸入版)', 'starwars-poket-1.jpg', '2016-02-09 00:00:00'),
(19, 'Force Unleashed', 6, 3000, 4, 'The Star Wars saga continues in Star Wars: The Force Unleashed. Casting players as Darth Vader''s Secret Apprentice, Star Wars: The Force Unleashed promises to unveil new revelations about the Star Wars galaxy. The expansive story of Star Wars: The Force Unleashed, created under direction from George Lucas, is set during the largely unexplored era between Star Wars: Episode III Revenge of the Sith and Star Wars: Episode IV A New Hope. In Star Wars: The Force Unleashed , players assist Darth Vader in his quest to rid the universe of Jedi - and face decisions that could change the course of their destiny. As its name implies, Star Wars: The Force Unleashed completely re-imagines the scope and scale of the Force by taking full advantage of newly developed technologies: Digital Molecular Matter (DMM) and Euphoria. Paired with the powerful Havok Physics system, these new technologies create gameplay only possible on the new generation of consoles. DMM incorporates the physical properties of anything in the environment of Star Wars: The Force Unleashed so that everything reacts exactly like it should; wood breaks like wood, glass shatters like glass, plants on the planet Felucia bend like plants on the planet Felucia would, and more. Meanwhile, Star Wars: The Force Unleashed''s revolutionary behavioral-simulation engine, Euphoria, enables characters in Star Wars: The Force Unleashed to move, act and even think like actual human beings, adapting their behavior during gameplay on the fly and resulting in a different payoff every single time you play Star Wars: The Force Unleashed.', 'Star Wars: The Force Unleashed (輸入版)', 'starwars-tv-3.jpg', '2016-02-09 00:00:00'),
(20, 'バトルフロント', 5, 7800, 12, '製品概要:銀河系を舞台に、壮大なバトルを体験せよ\r\n惑星ホスでは、雪原を踏みしめ大地を揺らしながら迫るAT-ATの足音を感じ、 緑の月エンドアでは、反乱同盟軍のブラスター斉射が飛び交う中、帝国軍のスピーダーバイクで生い茂る樹々の間を縫う。 そして空では、XウイングとTIEファイターの編隊が一面を覆い尽くす中、激しいドッグファイトに挑戦。 \r\n夢にまで見たあの「Star Wars™」の戦場がここにある。今こそ始まる伝説の戦い。\r\n「Star Wars™バトルフロント™」で、かつてない君だけの英雄譚を実現せよ。 ', 'Star Wars バトルフロント [オンラインコード]', 'starwars-pc-3.jpg', '2016-02-10 00:00:00'),
(21, ' SPECIAL STICKER', 4, 999, 0, '映画『スター・ウォーズ』のバラエティ豊かなステッカーBOOKが登場。\r\nステッカーはエピソードI~VIの主要キャラクターに加え、\r\n12月公開の最新作『フォースの覚醒』のキャラクターたちも登場! \r\n全部で100種類以上とバラエティ豊かなステッカーBOOKです。\r\n『スター・ウォーズ』の世界を振り返ることもできるキャラクター・名場面紹介、\r\n最新情報など読み物ページも充実。', 'STAR WARS SPECIAL STICKER BOOK (バラエティ) 大型本', 'starwars-book-3.jpg', '2016-02-10 00:00:00'),
(22, 'Force Unleashed', 6, 3680, 18, 'The Star Wars saga continues in Star Wars: The Force Unleashed. Casting players as Darth Vader''s Secret Apprentice, Star Wars: The Force Unleashed promises to unveil new revelations about the Star Wars galaxy. The expansive story of Star Wars: The Force Unleashed, created under direction from George Lucas, is set during the largely unexplored era between Star Wars: Episode III Revenge of the Sith and Star Wars: Episode IV A New Hope. In Star Wars: The Force Unleashed , players assist Darth Vader in his quest to rid the universe of Jedi - and face decisions that could change the course of their destiny. As its name implies, Star Wars: The Force Unleashed completely re-imagines the scope and scale of the Force by taking full advantage of newly developed technologies: Digital Molecular Matter (DMM) and Euphoria. Paired with the powerful Havok Physics system, these new technologies create gameplay only possible on the new generation of consoles. DMM incorporates the physical properties of anything in the environment of Star Wars: The Force Unleashed so that everything reacts exactly like it should; wood breaks like wood, glass shatters like glass, plants on the planet Felucia bend like plants on the planet Felucia would, and more. Meanwhile, Star Wars: The Force Unleashed''s revolutionary behavioral-simulation engine, Euphoria, enables characters in Star Wars: The Force Unleashed to move, act and even think like actual human beings, adapting their behavior during gameplay on the fly and resulting in a different payoff every single time you play Star Wars: The Force Unleashed.', 'Star Wars: Force Unleashed - The Ultimate Sith (PS3) (輸入版)', 'starwars-tv-1.jpg', '2016-02-10 06:08:06'),
(23, 'The Clone Wars', 7, 5000, 23, 'Enough Lego games (Batman, Indiana Jones, Star Wars, etc.) have been released that a dependable formula has been established. They get good source material and then throw in the blocks, basic mechanics, and fun graphics to make for approachable games that are appropriate for the whole family. They are fun, non-violent, and easy enough for kids to get through with some challenge for older people if they want to focus on things like score and completion percentage.', 'フォースが覚醒しているぞ！レゴ スター・ウォーズと一緒に銀河を冒険してフォースをマスターしよう！', 'starwars-poket-2.jpg', '2016-02-16 14:20:17'),
(24, 'ウィケットポシェット', 8, 2700, 44, '【服&ファッション小物ストア】： この商品は服&ファッション小物ストアの商品です。\r\n「スター・ウォーズ」関連商品をまとめてチェック。人気キャラクターストアでは、各種グッズが勢ぞろい。', '(スターウォーズ) STAR WARS【WEB限定】ウィケットポシェット\r\nStar Wars (スターウォーズ)', 'starwars-fuku-1.jpg', '2016-02-10 10:00:00'),
(25, 'D-Frame Trucker', 8, 3888, 10, '【服&ファッション小物ストア】： この商品は服&ファッション小物ストアの商品です。\r\n「スター・ウォーズ」関連商品をまとめてチェック。人気キャラクターストアでは、各種グッズが勢ぞろい。', 'New Era『9FORTY D-Frame Trucker STAR WARS LOGO PRINT』', 'starwars-fuku-2.jpg', '2016-02-16 14:17:50'),
(26, 'BB-8 Dome Bag', 8, 15000, -10, '「スター・ウォーズ」関連商品をまとめてチェック。人気キャラクターストアでは、各種グッズが勢ぞろい。', 'Star Wars: The Force Awakens BB-8 Mini Dome Bag', 'starwars-fuku-3.jpg', '2016-02-11 03:07:00'),
(27, 'コスチューム', 8, 20000, 22, '「スター・ウォーズ」関連商品をまとめてチェック。人気キャラクターストアでは、各種グッズが勢ぞろい。', 'Star Wars Stormtrooper Costume スターウォーズストームトルーパー大人用コスチューム Sサイズ', 'starwars-fuku-4.jpg', '2016-02-11 04:00:00'),
(28, '目覚まし', 9, 11500, 5, 'クオーツめざまし時計（メロディアラーム） \r\n\r\nアラーム音 \r\nStar Wars Main Title（スター・ウォーズ・メイン・タイトル） \r\nThe Imperial March（帝国のマーチ） \r\nCantina Band（酒場のバンド） \r\n\r\nアラームON\r\n Darth Vader breathing（ダース・ベイダーの呼吸音） \r\n\r\nアラームOFF\r\nlightsaber swooshe and clashes（ライトセーバーの音） \r\n\r\nスヌーズ操作時\r\n Message from Princess Leia（レイア姫の声） \r\n\r\n音量調節 \r\nアラームモニター付', 'リズム時計　STARWARS 目覚まし 12FIGURES アラームクロック　4ZEA26MC02', 'starwars-toke-1.jpg', '2016-02-07 22:48:04'),
(29, 'KARAKURI CLOCK', 9, 31000, 0, 'サイズ:40.9×38.4×8.5cm\r\n本体重量:2.7Kg\r\n素材・材質:プラスチック\r\n生産国：中国\r\nCopyright(c)&TM　Lucasfilm　Ltd. All　rights　reseved.\r\n電波カラクリ時計\r\n温度・湿度表示', 'STAR WARS（リズム時計） 銀河帝国軍ダースベーダー KARAKURI CLOCK/スター・ウォーズ 黒色 4MN533MC02', 'starwars-toke-2.jpg', '2016-02-09 08:11:00'),
(30, 'BB-8', 10, 18966, 3, 'STAR WARS エピソード7新キャラクター「BB-8」\r\n対応OS : iOS 8以降 & Android 4.4.2+\r\n対応端末(iOS) :iPhone4S以降/iPad 第3世代以降/iPod touch第5世代以降\r\n対応端末(Android) :BLE対応の端末/ 背面にカメラを搭載している端末\r\n重さ : 200g(充電ベースを含むと300g)\r\nサイズ : 高さ10cm(充電ベースに置いた場合12.5cm) 直径8㎝\r\nスピード : 最大秒速2.2m', '【日本正規代理店品】Sphero スター・ウォーズ エピソード7(スター・ウォーズ/フォースの覚醒) BB-8 (ドライブ / ホログラム機能) R001ROW', 'starwars-model-1.jpg', '2016-02-16 14:22:30'),
(31, 'スケール プラモデル', 10, 1627, 19, '「スター・ウォーズ/フォースの覚醒」より劇中に登場するファースト・オーダー ストームトルーパーを1/12スケールで再現。\r\n豊富な各種装備の再現や、劇中シーンを演出するベースなどの各種オプションパーツが付属。同商品の複数組み合わせにより、劇中での特徴的な隊列などのシーンも再現。\r\n\r\n徹底した資料の検証により細部にわたるディテールを再現し、1/12スケールの中に凝縮。\r\n目の部分はクリアブラックで質感を再現。\r\nハンドパーツの付け替えで、シーン再現可能。\r\n2タイプのウェポンとシールドが付属。\r\n関節可動によるアクションポーズを再現。\r\nディスプレイベースは劇中をイメージしたものが付属。ベースはジョイントパーツで複数連結可能。\r\n\r\n【付属品】専用ディスプレイベース×1、ブラスター×1、トンファー×1、シールド×1、ハンドパーツ6種(武器持ち手×2、平手×2、こぶし×2)\r\n【商品内容】成形品×6、水転写式デカール×1、マーキングシール×1、組立説明書×1', 'スター・ウォーズ ファースト・オーダー ストームトルーパー 1/12スケール プラモデル', 'starwars-model-2.jpg', '2016-02-09 09:19:00'),
(32, 'スケール プラモデル', 10, 3772, 6, '「スター・ウォーズ/フォースの覚醒」より劇中に登場するミレニアム・ファルコンを1/144スケールで再現。\r\n\r\n徹底した資料の検証により細部にわたるディテールを再現し、1/144スケールの中に凝縮。\r\nコックピット内部構造を忠実に再現。また、付属の同スケールフィギュアの搭乗も可能。\r\nキャノピーはオールクリア素材のものと、フレームのみの2種が付属。\r\nパーツ差し替え式で、昇降口の開閉再現が可能。\r\n着床脚はは着床・整備状態を再現するランディングギアが付属。駐機中のミレニアム・ファルコンを再現可能。\r\nエンジン部分は選択式のクリアブルーのエフェクトパーツにて飛行状態を再現。\r\n機体のディスプレイはジャクーの砂漠がモチーフ。ベースはジョイントパーツで複数連結可能。\r\n同スケールのフィン、レイ、ハン・ソロ、チューバッカ(着座タイプ・直立タイプ)及びBB-8が付属。\r\n【付属品】専用ディスプレイベース×1、フィギュア×8(着座×4・直立×4)、BB-8×1、キャノピー×2種(クリアパーツ×1、フレームパーツ×1)、リアエンジンエフェクトパーツ×1、昇降口開閉再現パーツ一式、着床脚×1式\r\n【商品内容】成形品×10、水転写式デカール×1、マーキングシール×1、組立説明書×1', 'スター・ウォーズ ミレニアム・ファルコン (フォースの覚醒) 1/144スケール プラモデル', 'starwars-model-3.jpg', '2016-02-11 11:00:00'),
(33, 'スケール プラモデル', 10, 3381, 0, '「スター・ウォーズ/フォースの覚醒」に登場する「キャプテン・ファズマ」を1/12スケールで再現。特徴的なシルバーアーマーをメッキで再現し、付属のクロークや武器により、劇中のイメージを演出。\r\nキャプテン・ファズマの特徴的なシルバーアーマーをこだわりのメッキ仕様にて再現。\r\n関節可動とクロークの可動によるアクションポーズを再現。\r\n特徴的なクロークは成形品と布の2種類の素材で再現。\r\n緻密なディテールを再現すべく多岐に渡る資料を検証し、1/12スケールの中に凝縮。\r\nファズマ専用ブラスターが付属。\r\n付属のベースは劇中をイメージ。発売中の他商品の台座と連結させることも可能。\r\n\r\n【付属品】専用ディスプレイベース×1、ファズマ専用ブラスター×1、ハンドパーツ×6(武器持ち手×2、平手×2、こぶし×2)、クローク×2種(成形品クローク×1、布クローク×1)\r\n\r\n【商品内容】成形品×7、布クローク用ラインシール×1、水転写式デカール×1、マーキングシール×1、組立説明書×1', 'スター・ウォーズ キャプテン・ファズマ 1/12スケール プラモデル', 'starwars-model-4.jpg', '2016-02-11 12:14:00'),
(34, 'スケール プラモデル', 10, 1809, 2, 'スター・ウォーズ 1/12 ダース・ベーダーが登場!\r\n\r\n「エピソード5」の「クラウド・シティ」の戦いにおいて、圧倒的な力を見せつけたダース・ベイダーを1/12スケールモデルで再現・\r\n\r\n【付属品】ライトセーバー×2種(柄状態・光刃展開状態)、専用ディスプレイベース×1、ハンドパーツ×5種(武器持ち手×2、左こぶし×1、平手×2) \r\n\r\n【商品内容】水転写式デカール×1、デトロンシール×1、成形品×6、組立説明書', 'スター・ウォーズ ダース・ベイダー 1/12スケール プラモデル', 'starwars-model-5.jpg', '2016-02-16 14:22:44');

-- --------------------------------------------------------

--
-- 表的结构 `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `report_date` date NOT NULL,
  `report_time` time NOT NULL,
  `buyer_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `category_id`, `order_id`, `product_title`, `product_price`, `product_quantity`, `report_date`, `report_time`, `buyer_name`) VALUES
(1, 33, 10, 1, 'スケール プラモデル', 3381, 8, '2016-02-11', '17:12:29', 'koizumi'),
(2, 34, 10, 2, 'スケール プラモデル', 1809, 1, '2016-02-11', '17:13:40', 'shijun'),
(3, 32, 10, 3, 'スケール プラモデル', 3772, 1, '2016-02-11', '17:13:40', 'shijun'),
(4, 30, 10, 4, 'BB-8', 18966, 2, '2016-02-11', '17:13:40', 'shijun'),
(5, 22, 6, 5, 'Force Unleashed', 3680, 1, '2016-02-11', '17:14:36', 'wumei'),
(6, 14, 5, 6, 'Sith Lords (PC)', 2800, 1, '2016-02-11', '17:14:36', 'wumei'),
(7, 3, 2, 7, 'ジェダイの帰還', 25600, 2, '2016-02-11', '17:14:36', 'wumei'),
(8, 2, 2, 8, '帝国の逆襲', 9600, 1, '2016-02-11', '17:14:36', 'wumei'),
(9, 29, 9, 9, 'KARAKURI CLOCK', 31000, 5, '2016-02-11', '17:15:20', 'newyear'),
(10, 23, 7, 10, 'The Clone Wars', 5000, 1, '2016-02-11', '17:15:20', 'newyear'),
(11, 24, 8, 11, 'ウィケットポシェット', 2700, 1, '2016-02-11', '17:16:23', 'shishi'),
(12, 17, 4, 12, '彩るコスチューム', 6480, 1, '2016-02-11', '17:16:23', 'shishi'),
(13, 12, 1, 13, 'Soundtrack Collection', 7200, 1, '2016-02-11', '17:16:23', 'shishi'),
(14, 8, 3, 14, 'オリジナル・トリロジ', 10480, 1, '2016-02-11', '17:16:23', 'shishi'),
(15, 21, 4, 15, ' SPECIAL STICKER', 999, 5, '2016-02-11', '17:16:23', 'shishi'),
(16, 23, 7, 16, 'The Clone Wars', 5000, 1, '2016-02-11', '17:49:25', 'koizumi'),
(17, 34, 10, 17, 'スケール プラモデル', 1809, 2, '2016-02-12', '22:00:28', 'sirine'),
(18, 30, 10, 18, 'BB-8', 18966, 8, '2016-02-13', '02:41:26', 'koizumi'),
(19, 19, 6, 19, 'Force Unleashed', 3000, 1, '2016-02-13', '02:41:26', 'koizumi'),
(20, 22, 6, 20, 'Force Unleashed', 3680, 1, '2016-02-13', '02:41:26', 'koizumi'),
(21, 4, 2, 21, 'ファントム・メナス', 7200, 1, '2016-02-13', '02:43:14', 'koizumi'),
(22, 17, 4, 22, '彩るコスチューム', 6480, 1, '2016-02-13', '02:43:14', 'koizumi'),
(23, 6, 2, 23, 'シスの復讐', 5000, 18, '2016-02-15', '01:00:14', 'sirine'),
(24, 2, 2, 24, '帝国の逆襲', 9600, 1, '2016-02-15', '01:00:14', 'sirine'),
(25, 7, 3, 25, 'スチールブックセット', 22800, 1, '2016-02-15', '10:24:39', 'sirine');

-- --------------------------------------------------------

--
-- 表的结构 `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `rename` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `reemail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review_product_id` int(11) NOT NULL,
  `review_datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `reviews`
--

INSERT INTO `reviews` (`id`, `rename`, `reemail`, `review`, `review_product_id`, `review_datetime`) VALUES
(1, 'sirine', 'sirine2001@gmail.com', 'エピソードⅢのDVDは字幕がありませんが殆どがミュージックビデオのようなものなので問題ありません。', 2, '2016-02-04 00:00:00'),
(2, 'koizumi', 'koizumi@halcom', 'ただ残念なのは、詳細な解説書もなく、２００４年版のものをまったく装丁が一緒というのが残念。音質は最高である。', 21, '2016-02-09 00:00:00'),
(3, 'sirine', 'sirine2001@gmail.com', '比較すると以前のものの方が微妙なアナログ感というか、味があります。', 11, '2016-02-13 00:00:00'),
(4, 'sirine', 'sirine2001@gmail.com', '最初の２０世紀フォックスのファンファーレからメインテーマに流れるところは血沸き肉踊ります。', 13, '2016-02-17 13:02:12'),
(5, '匿名', 'renren@qq.com', '買いたくても、お金がないんだ…', 30, '2016-02-17 13:41:45'),
(6, 'sirine', 'sirine2001@gmail.com', '値段が高いぞ', 30, '2016-02-17 13:42:56');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `username_shi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username_mei` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `birth_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `birth_mon` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `birth_day` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `user_photo` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `competence` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `password`, `username_shi`, `username_mei`, `email`, `adr`, `tel`, `birth_year`, `birth_mon`, `birth_day`, `sex`, `user_photo`, `create_date`, `create_time`, `competence`) VALUES
(1, 'koizumi', '12345678', '小泉', '明彦', 'koizumi@hal.com', '日本東京都新宿区西新宿駅', '09099889988', '1971', '12', '31', '男', 'actor01.jpg', '2016-01-01', '10:13:17', ''),
(2, 'sirine', '718719', '施', '俊', 'sirine2001@gmail.com', '東京都板橋区前野町2-13-2アクセス前野町201-B', '08068471819', '1982', '7', '19', '男', 'actor02.jpg', '2016-01-04', '14:30:25', 'admin'),
(3, 'shijun', '12345678', '松石', '延臣', 'shij@123.com', '東京都板橋区赤塚２丁目１０', '09000000000', '1977', '8', '10', '女', 'actor03.jpg', '2016-01-03', '02:07:11', ''),
(4, 'nimei', '12345678', '二美', '淑男', 'renren@yahoo.com', '中国四川省成都市青羊区', '02887771178', '1990', '6', '12', '女', 'actor04.jpg', '2016-01-04', '05:11:17', ''),
(5, 'wumei', '12345678', '百原', '林司朗', 'wumei@qq.com', '東京都練馬区大泉学園町５丁目１１', '09000000001', '1989', '11', '30', '男', 'actor05.jpg', '2016-01-05', '07:15:10', ''),
(6, 'xiaoxin', '12345678', '岡森', '滉稀', 'shizhang@qq.com', '東京都練馬区西大泉４丁目３', '09000000002', '1973', '7', '19', '男', 'actor06.jpg', '2016-01-05', '10:00:00', ''),
(7, 'nihao', '12345678', '金親', '響之進', 'buyao@123.com', '東京都東村山市野口町３丁目４９', '09000000003', '1966', '12', '24', '男', 'actor07.jpg', '2016-01-05', '07:04:03', ''),
(8, 'shishi', '12345678', '薬師丸', '三之', '123@qq.com', '東京都中野区松が丘１丁目２２', '09000000004', '1980', '11', '6', '女', 'actor08.jpg', '2016-01-05', '03:08:13', ''),
(9, 'zuihou', '12345678', '槙村', '子棄', 'zuihou@123.com', '東京都府中市多磨町４丁目', '09000000005', '1985', '9', '16', '男', 'actor09.jpg', '2016-01-05', '04:08:00', ''),
(10, 'zhende', '12345678', '裏山', '朗輔', 'zhende@123.com', '東京都杉並区久我山４丁目２８', '09000000006', '1995', '5', '17', '男', 'actor10.jpg', '2016-01-05', '22:03:33', ''),
(11, 'shijian', '12345678', '師走', '釧造', 'shijian@qq.com', '千葉県市川市広尾２丁目', '09000000007', '1960', '2', '11', '女', 'actor11.jpg', '2016-01-06', '06:10:44', ''),
(12, 'mylove', '12345678', '由上', '皇翔', 'airen@gmail.com', '東京都文京区千駄木４丁目２', '09000000008', '1999', '3', '4', '男', 'actor12.jpg', '2016-01-11', '21:34:48', ''),
(13, 'newyear', '12345678', '古室', '哲也', 'newyear@qq.com', '東京都北区桐ケ丘２丁目２', '09000000014', '1977', '3', '12', '男', 'actor13.jpg', '2016-01-13', '13:45:12', ''),
(14, 'shijun2001', '12345678', '是', '的', 'sirine2001@2001.com', '东京', '000000000', '1900', '1', '1', '男', 'actor14.jpg', '2016-01-15', '12:09:34', ''),
(15, 'wucui', '12345678', '吴', '催', 'wucui@gmail.com', '成都市青羊区', '02887771178', '1954', '1', '1', '女', 'actor15.jpg', '2016-01-27', '23:42:02', ''),
(16, 'tanki', '12345678', '端末', '窪平', 'tanki@qq.com', '大阪府大阪市', '0456798833', '2000', '5', '12', '男', 'actor11.jpg', '2016-02-15', '11:12:29', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
