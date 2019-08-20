-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_admins`
--

CREATE TABLE `nuke_nsnst_admins` (
  `aid` varchar(25) NOT NULL default '',
  `login` varchar(25) NOT NULL default '',
  `password` varchar(20) NOT NULL default '',
  `password_md5` varchar(60) NOT NULL default '',
  `password_crypt` varchar(60) NOT NULL default '',
  `protected` tinyint(2) NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_admins`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_blocked_ips`
--

CREATE TABLE `nuke_nsnst_blocked_ips` (
  `ip_addr` varchar(15) NOT NULL default '',
  `ip_long` int(10) unsigned NOT NULL default '0',
  `user_id` int(11) NOT NULL default '1',
  `username` varchar(60) NOT NULL default 'Anonymous',
  `user_agent` text NOT NULL,
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `reason` tinyint(1) NOT NULL default '0',
  `query_string` text NOT NULL,
  `get_string` text NOT NULL,
  `post_string` text NOT NULL,
  `x_forward_for` varchar(32) NOT NULL default 'None',
  `client_ip` varchar(32) NOT NULL default 'None',
  `remote_addr` varchar(32) NOT NULL default '',
  `remote_port` varchar(11) NOT NULL default 'Unknown',
  `request_method` varchar(10) NOT NULL default '',
  `expires` int(20) NOT NULL default '0',
  `c2c` char(2) NOT NULL default '00',
  PRIMARY KEY  (`ip_addr`),
  KEY `ip_long` (`ip_long`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_blocked_ips`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_blocked_ranges`
--

CREATE TABLE `nuke_nsnst_blocked_ranges` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `reason` tinyint(1) NOT NULL default '0',
  `expires` int(20) NOT NULL default '0',
  `c2c` char(2) NOT NULL default '00',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_blocked_ranges`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_blockers`
--

CREATE TABLE `nuke_nsnst_blockers` (
  `blocker` int(4) NOT NULL default '0',
  `block_name` varchar(20) NOT NULL default '',
  `activate` int(4) NOT NULL default '0',
  `block_type` int(4) NOT NULL default '0',
  `email_lookup` int(4) NOT NULL default '0',
  `forward` varchar(255) NOT NULL default '',
  `reason` varchar(20) NOT NULL default '',
  `template` varchar(255) NOT NULL default '',
  `duration` int(20) NOT NULL default '0',
  `htaccess` int(4) NOT NULL default '0',
  `list` longtext NOT NULL,
  PRIMARY KEY  (`blocker`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_blockers`
--

INSERT INTO `nuke_nsnst_blockers` VALUES (0, 'other', 0, 0, 0, '', 'Abuse-Other', 'abuse_default.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (1, 'union', 5, 0, 2, '', 'Abuse-Union', 'abuse_union.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (2, 'clike', 5, 0, 2, '', 'Abuse-CLike', 'abuse_clike.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (3, 'harvester', 0, 0, 0, '', 'Abuse-Harvest', 'abuse_harvester.tpl', 0, 0, '@yahoo.com\r\nalexibot\r\nalligator\r\nanonymiz\r\nasterias\r\nbackdoorbot\r\nblack hole\r\nblackwidow\r\nblowfish\r\nbotalot\r\nbuiltbottough\r\nbullseye\r\nbunnyslippers\r\ncatch\r\ncegbfeieh\r\ncharon\r\ncheesebot\r\ncherrypicker\r\nchinaclaw\r\ncombine\r\ncopyrightcheck\r\ncosmos\r\ncrescent\r\ncurl\r\ndbrowse\r\ndisco\r\ndittospyder\r\ndlman\r\ndnloadmage\r\ndownload\r\ndreampassport\r\ndts agent\r\necatch\r\neirgrabber\r\nerocrawler\r\nexpress webpictures\r\nextractorpro\r\neyenetie\r\nfantombrowser\r\nfantomcrew browser\r\nfileheap\r\nfilehound\r\nflashget\r\nfoobot\r\nfranklin locator\r\nfreshdownload\r\nfscrawler\r\ngamespy_arcade\r\ngetbot\r\ngetright\r\ngetweb\r\ngo!zilla\r\ngo-ahead-got-it\r\ngrab\r\ngrafula\r\ngsa-crawler\r\nharvest\r\nhloader\r\nhmview\r\nhttplib\r\nhttpresume\r\nhttrack\r\nhumanlinks\r\nigetter\r\nimage stripper\r\nimage sucker\r\nindustry program\r\nindy library\r\ninfonavirobot\r\ninstallshield digitalwizard\r\nINTerget\r\niria\r\nirvine\r\niupui research bot\r\njbh agent\r\njennybot\r\njetcar\r\njobo\r\njoc\r\nkapere\r\nkenjin spider\r\nkeyword density\r\nlarbin\r\nleechftp\r\nleechget\r\nlexibot\r\nlibweb/clshttp\r\nlibwww-perl\r\nlightningdownload\r\nlincoln state web browser\r\nlinkextractorpro\r\nlinkscan/8.1a.unix\r\nlinkwalker\r\nlwp-trivial\r\nlwp::simple\r\nmac finder\r\nmata hari\r\nmediasearch\r\nmetaproducts\r\nmicrosoft url control\r\nmidown tool\r\nmiixpc\r\nmissauga locate\r\nmissouri college browse\r\nmister pix\r\nmoget\r\nmozilla.*newt\r\nmozilla/3.0 (compatible)\r\nmozilla/3.mozilla/2.01\r\nmsie 4.0 (win95)\r\nmultiblocker browser\r\nmydaemon\r\nmygetright\r\nnabot\r\nnavroad\r\nnearsite\r\nnet vampire\r\nnetants\r\nnetmechanic\r\nnetpumper\r\nnetspider\r\nnewsearchengine\r\nnicerspro\r\nninja\r\nnitro downloader\r\nnpbot\r\noctopus\r\noffline explorer\r\noffline navigator\r\nopenfind\r\npagegrabber\r\npapa foto\r\npavuk\r\npbrowse\r\npcbrowser\r\npeval\r\npompos/\r\nprogram shareware\r\npropowerbot\r\nprowebwalker\r\npsurf\r\npuf\r\npuxarapido\r\nqueryn metasearch\r\nrealdownload\r\nreget\r\nrepomonkey\r\nrsurf\r\nrumours-agent\r\nsakura\r\nscan4mail\r\nsemanticdiscovery\r\nsitesnagger\r\nslysearch\r\nspankbot\r\nspanner \r\nspiderzilla\r\nsq webscanner\r\nstamina\r\nstar downloader\r\nsteeler\r\nsteeler\r\nstrip\r\nsuperbot\r\nsuperhttp\r\nsurfbot\r\nsuzuran\r\nswbot\r\nszukacz\r\ntakeout\r\nteleport\r\ntelesoft\r\ntest spider\r\nthe INTraformant\r\nthenomad\r\ntighttwatbot\r\ntitan\r\ntocrawl/urldispatcher\r\ntrue_robot\r\ntsurf\r\nturing machine\r\nturingos\r\nurlblaze\r\nurlgetfile\r\nurly warning\r\nutilmind\r\nvci\r\nvoideye\r\nweb image collector\r\nweb sucker\r\nwebauto\r\nwebbandit\r\nwebcapture\r\nwebcollage\r\nwebcopier\r\nwebenhancer\r\nwebfetch\r\nwebgo\r\nwebleacher\r\nwebmasterworldforumbot\r\nwebql\r\nwebreaper\r\nwebsite extractor\r\nwebsite quester\r\nwebster\r\nwebstripper\r\nwebwhacker\r\nwep search\r\nwget\r\nwhizbang\r\nwidow\r\nwildsoft surfer\r\nwww-collector-e\r\nwww.netwu.com\r\nwwwoffle\r\nxaldon\r\nxenu\r\nzeus\r\nziggy\r\nzippy');
INSERT INTO `nuke_nsnst_blockers` VALUES (4, 'script', 5, 0, 2, '', 'Abuse-Script', 'abuse_script.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (5, 'author', 5, 0, 2, '', 'Abuse-Author', 'abuse_author.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (6, 'referer', 5, 0, 2, '', 'Abuse-Referer', 'abuse_referer.tpl', 0, 0, '121hr.com\r\n1st-call.net\r\n1stcool.com\r\n5000n.com\r\n69-xxx.com\r\n9irl.com\r\n9uy.com\r\na-day-at-the-party.com\r\naccessthepeace.com\r\nadult-model-nude-pictures.com\r\nadult-sex-toys-free-porn.com\r\nagnitum.com\r\nalfonssackpfeiffe.com\r\nalongwayfrommars.com\r\nanime-sex-1.com\r\nanorex-sf-stimulant-free.com\r\nantibot.net\r\nantique-tokiwa.com\r\napotheke-heute.com\r\narmada31.com\r\nartark.com\r\nartlilei.com\r\nascendbtg.com\r\naschalaecheck.com\r\nasian-sex-free-sex.com\r\naslowspeeker.com\r\nassasinatedfrogs.com\r\nathirst-for-tranquillity.net\r\naubonpanier.com\r\navalonumc.com\r\nayingba.com\r\nbayofnoreturn.com\r\nbbw4phonesex.com\r\nbeersarenotfree.com\r\nbierikiuetsch.com\r\nbilingualannouncements.com\r\nblack-pussy-toon-clip-anal-lover-single.com\r\nblownapart.com\r\nblueroutes.com\r\nboasex.com\r\nbooksandpages.com\r\nbootyquake.com\r\nbossyhunter.com\r\nboyz-sex.com\r\nbrokersaandpokers.com\r\nbrowserwindowcleaner.com\r\nbudobytes.com\r\nbusiness2fun.com\r\nbuymyshitz.com\r\nbyuntaesex.com\r\ncaniputsomeloveINToyou.com\r\ncartoons.net.ru\r\ncaverunsailing.com\r\ncertainhealth.com\r\nclantea.com\r\nclose-protection-services.com\r\nclubcanino.com\r\nclubstic.com\r\ncobrakai-skf.com\r\ncollegefucktour.co.uk\r\ncommanderspank.com\r\ncoolenabled.com\r\ncrusecountryart.com\r\ncrusingforsex.co.uk\r\ncunt-twat-pussy-juice-clit-licking.com\r\ncustomerhandshaker.com\r\ncyborgrama.com\r\ndarkprofits.co.uk\r\ndatingforme.co.uk\r\ndatingmind.com\r\ndegree.org.ru\r\ndelorentos.com\r\ndiggydigger.com\r\ndinkydonkyaussie.com\r\ndjpritchard.com\r\ndjtop.com\r\ndraufgeschissen.com\r\ndreamerteens.co.uk\r\nebonyarchives.co.uk\r\nebonyplaya.co.uk\r\necobuilder2000.com\r\nemailandemail.com\r\nemedici.net\r\nengine-on-fire.com\r\nerocity.co.uk\r\nesport3.com\r\neteenbabes.com\r\neurofreepages.com\r\neurotexans.com\r\nevolucionweb.com\r\nfakoli.com\r\nfe4ba.com\r\nferienschweden.com\r\nfindly.com\r\nfirsttimeteadrinker.com\r\nfishing.net.ru\r\nflatwonkers.com\r\nflowershopentertainment.com\r\nflymario.com\r\nfree-xxx-pictures-porno-gallery.com\r\nfreebestporn.com\r\nfreefuckingmovies.co.uk\r\nfreexxxstuff.co.uk\r\nfruitologist.net\r\nfruitsandbolts.com\r\nfuck-cumshots-free-midget-movie-clips.com\r\nfuck-michaelmoore.com\r\nfundacep.com\r\ngadless.com\r\ngallapagosrangers.com\r\ngalleries4free.co.uk\r\ngalofu.com\r\ngaypixpost.co.uk\r\ngeomasti.com\r\ngirltime.co.uk\r\nglassrope.com\r\ngodjustblessyouall.com\r\ngoldenageresort.com\r\ngonnabedaddies.com\r\ngranadasexi.com\r\ngranadasexi.com\r\nguardingtheangels.com\r\nguyprofiles.co.uk\r\nhappy1225.com\r\nhappychappywacky.com\r\nhealth.org.ru\r\nhexplas.com\r\nhighheelsmodels4fun.com\r\nhillsweb.com\r\nhiptuner.com\r\nhistoryINTospace.com\r\nhoa-tuoi.com\r\nhomebuyinginatlanta.com\r\nhorizonultra.com\r\nhorseminiature.net\r\nhotkiss.co.uk\r\nhotlivegirls.co.uk\r\nhotmatchup.co.uk\r\nhusler.co.uk\r\niaentertainment.com\r\niamnotsomeone.com\r\niconsofcorruption.com\r\nihavenotrustinyou.com\r\ninformat-systems.com\r\nINTeriorproshop.com\r\nINTersoftnetworks.com\r\nINThecrib.com\r\ninvestment4cashiers.com\r\niti-trailers.com\r\njackpot-hacker.com\r\njacks-world.com\r\njamesthesailorbasher.com\r\njesuislemonds.com\r\njustanotherdomainname.com\r\nkampelicka.com\r\nkanalrattenarsch.com\r\nkatzasher.com\r\nkerosinjunkie.com\r\nkillasvideo.com\r\nkoenigspisser.com\r\nkontorpara.com\r\nl8t.com\r\nlaestacion101.com\r\nlambuschlamppen.com\r\nlankasex.co.uk\r\nlaser-creations.com\r\nle-tour-du-monde.com\r\nlecraft.com\r\nledo-design.com\r\nleftregistration.com\r\nlekkikoomastas.com\r\nlepommeau.com\r\nlibr-animal.com\r\nlibraries.org.ru\r\nlikewaterlikewind.com\r\nlimbojumpers.com\r\nlink.ru\r\nlockportlinks.com\r\nloiproject.com\r\nlongtermalternatives.com\r\nlottoeco.com\r\nlucalozzi.com\r\nmaki-e-pens.com\r\nmalepayperview.co.uk\r\nmangaxoxo.com\r\nmaps.org.ru\r\nmarcofields.com\r\nmasterofcheese.com\r\nmasteroftheblasterhill.com\r\nmastheadwankers.com\r\nmegafrontier.com\r\nmeinschuppen.com\r\nmercurybar.com\r\nmetapannas.com\r\nmicelebre.com\r\nmidnightlaundries.com\r\nmikeapartment.co.uk\r\nmillenniumchorus.com\r\nmimundial2002.com\r\nminiaturegallerymm.com\r\nmixtaperadio.com\r\nmondialcoral.com\r\nmonja-wakamatsu.com\r\nmonstermonkey.net\r\nmouthfreshners.com\r\nmullensholiday.com\r\nmusilo.com\r\nmyhollowlog.com\r\nmyhomephonenumber.com\r\nmykeyboardisbroken.com\r\nmysofia.net\r\nnaked-cheaters.com\r\nnaked-old-women.com\r\nnastygirls.co.uk\r\nnationclan.net\r\nnatterratter.com\r\nnaughtyadam.com\r\nnestbeschmutzer.com\r\nnetwu.com\r\nnewrealeaseonline.com\r\nnewrealeasesonline.com\r\nnextfrontiersonline.com\r\nnikostaxi.com\r\nnotorious7.com\r\nnrecruiter.com\r\nnursingdepot.com\r\nnustramosse.com\r\nnuturalhicks.com\r\noccaz-auto49.com\r\nocean-db.net\r\noilburnerservice.net\r\nomburo.com\r\noneoz.com\r\nonepageahead.net\r\nonlinewithaline.com\r\norganizate.net\r\nourownweddingsong.com\r\nowen-music.com\r\np-partners.com\r\npaginadeautor.com\r\npakistandutyfree.com\r\npamanderson.co.uk\r\nparentsense.net\r\nparticlewave.net\r\npay-clic.com\r\npay4link.net\r\npcisp.com\r\npersist-pharma.com\r\npeteband.com\r\npetplusindia.com\r\npickabbw.co.uk\r\npicture-oral-position-lesbian.com\r\npl8again.com\r\nplaneting.net\r\npopusky.com\r\nporn-expert.com\r\npromoblitza.com\r\nproproducts-usa.com\r\nptcgzone.com\r\nptporn.com\r\npublishmybong.com\r\nputtingtogether.com\r\nqualifiedcancelations.com\r\nrahost.com\r\nrainbow21.com\r\nrakkashakka.com\r\nrandomfeeding.com\r\nrape-art.com\r\nrd-brains.com\r\nrealestateonthehill.net\r\nrebuscadobot\r\nrequested-stuff.com\r\nretrotrasher.com\r\nricopositive.com\r\nrisorseinrete.com\r\nrotatingcunts.com\r\nrunawayclicks.com\r\nrutalibre.com\r\ns-marche.com\r\nsabrosojazz.com\r\nsamuraidojo.com\r\nsanaldarbe.com\r\nsasseminars.com\r\nschlampenbruzzler.com\r\nsearchmybong.com\r\nseckur.com\r\nsex-asian-porn-INTerracial-photo.com\r\nsex-porn-fuck-hardcore-movie.com\r\nsexa3.net\r\nsexer.com\r\nsexINTention.com\r\nsexnet24.tv\r\nsexomundo.com\r\nsharks.com.ru\r\nshells.com.ru\r\nshop-ecosafe.com\r\nshop-toon-hardcore-fuck-cum-pics.com\r\nsilverfussions.com\r\nsin-city-sex.net\r\nsluisvan.com\r\nsmutshots.com\r\nsnagglersmaggler.com\r\nsomethingtoforgetit.com\r\nsophiesplace.net\r\nsoursushi.com\r\nsouthernxstables.com\r\nspeed467.com\r\nspeedpal4you.com\r\nsporty.org.ru\r\nstopdriving.net\r\nstw.org.ru\r\nsufficientlife.com\r\nsussexboats.net\r\nswinger-party-free-dating-porn-sluts.com\r\nsydneyhay.com\r\nszmjht.com\r\nteninchtrout.com\r\nthebalancedfruits.com\r\ntheendofthesummit.com\r\nthiswillbeit.com\r\nthosethosethose.com\r\nticyclesofindia.com\r\ntits-gay-fagot-black-tits-bigtits-amateur.com\r\ntonius.com\r\ntoohsoft.com\r\ntoolvalley.com\r\ntooporno.net\r\ntoosexual.com\r\ntorngat.com\r\ntour.org.ru\r\ntowneluxury.com\r\ntrafficmogger.com\r\ntriacoach.net\r\ntrottinbob.com\r\ntttframes.com\r\ntvjukebox.net\r\nundercvr.com\r\nunfinished-desires.com\r\nunicornonero.com\r\nunionvillefire.com\r\nupsandowns.com\r\nupthehillanddown.com\r\nvallartavideo.com\r\nvietnamdatingservices.com\r\nvinegarlemonshots.com\r\nvizy.net.ru\r\nvnladiesdatingservices.com\r\nvomitandbusted.com\r\nwalkingthewalking.com\r\nwell-I-am-the-type-of-boy.com\r\nwhales.com.ru\r\nwhincer.net\r\nwhitpagesrippers.com\r\nwhois.sc\r\nwipperrippers.com\r\nwordfilebooklets.com\r\nworld-sexs.com\r\nxsay.com\r\nxxxchyangel.com\r\nxxxzips.com\r\nyouarelostINTransit.com\r\nyuppieslovestocks.com\r\nyuzhouhuagong.com\r\nzhaori-food.com\r\nzwiebelbacke.com');
INSERT INTO `nuke_nsnst_blockers` VALUES (7, 'filter', 5, 0, 2, '', 'Abuse-Filter', 'abuse_filter.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (8, 'request', 0, 0, 0, '', 'Abuse-Request', 'abuse_request.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (9, 'string', 0, 0, 0, '', 'Abuse-String', 'abuse_string.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (10, 'admin', 0, 0, 0, '', 'Abuse-Admin', 'abuse_admin.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (11, 'flood', 0, 1, 2, '', 'Abuse-Flood', 'abuse_flood.tpl', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_cidrs`
--

CREATE TABLE `nuke_nsnst_cidrs` (
  `cidr` int(2) NOT NULL default '0',
  `hosts` int(10) NOT NULL default '0',
  `mask` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`cidr`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_cidrs`
--

INSERT INTO `nuke_nsnst_cidrs` VALUES (1, 2147483647, '127.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (2, 1073741824, '63.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (3, 536870912, '31.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (4, 268435456, '15.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (5, 134217728, '7.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (6, 67108864, '3.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (7, 33554432, '1.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (8, 16777216, '0.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (9, 8388608, '0.127.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (10, 4194304, '0.63.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (11, 2097152, '0.31.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (12, 1048576, '0.15.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (13, 524288, '0.7.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (14, 262144, '0.3.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (15, 131072, '0.1.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (16, 65536, '0.0.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (17, 32768, '0.0.127.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (18, 16384, '0.0.63.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (19, 8192, '0.0.31.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (20, 4096, '0.0.15.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (21, 2048, '0.0.7.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (22, 1024, '0.0.3.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (23, 512, '0.0.1.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (24, 256, '0.0.0.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (25, 128, '0.0.0.127');
INSERT INTO `nuke_nsnst_cidrs` VALUES (26, 64, '0.0.0.63');
INSERT INTO `nuke_nsnst_cidrs` VALUES (27, 32, '0.0.0.31');
INSERT INTO `nuke_nsnst_cidrs` VALUES (28, 16, '0.0.0.15');
INSERT INTO `nuke_nsnst_cidrs` VALUES (29, 8, '0.0.0.7');
INSERT INTO `nuke_nsnst_cidrs` VALUES (30, 4, '0.0.0.3');
INSERT INTO `nuke_nsnst_cidrs` VALUES (31, 2, '0.0.0.1');
INSERT INTO `nuke_nsnst_cidrs` VALUES (32, 1, '0.0.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_config`
--

CREATE TABLE `nuke_nsnst_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` longtext NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_config`
--

INSERT INTO `nuke_nsnst_config` VALUES ('admin_contact', 'webmaster@yoursite.com');
INSERT INTO `nuke_nsnst_config` VALUES ('block_perpage', '50');
INSERT INTO `nuke_nsnst_config` VALUES ('block_sort_column', 'date');
INSERT INTO `nuke_nsnst_config` VALUES ('block_sort_direction', 'desc');
INSERT INTO `nuke_nsnst_config` VALUES ('crypt_salt', 'N$');
INSERT INTO `nuke_nsnst_config` VALUES ('display_link', '3');
INSERT INTO `nuke_nsnst_config` VALUES ('display_reason', '3');
INSERT INTO `nuke_nsnst_config` VALUES ('force_nukeurl', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('help_switch', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('htaccess_path', '');
INSERT INTO `nuke_nsnst_config` VALUES ('http_auth', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('lookup_link', 'http://www.DNSstuff.com/tools/whois.ch?ip=');
INSERT INTO `nuke_nsnst_config` VALUES ('page_delay', '5');
INSERT INTO `nuke_nsnst_config` VALUES ('prevent_dos', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('proxy_reason', 'admin_proxy_reason.tpl');
INSERT INTO `nuke_nsnst_config` VALUES ('proxy_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('santy_protection', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('self_expire', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('site_reason', 'admin_site_reason.tpl');
INSERT INTO `nuke_nsnst_config` VALUES ('site_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('staccess_path', '');
INSERT INTO `nuke_nsnst_config` VALUES ('track_active', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('track_max', '604800');
INSERT INTO `nuke_nsnst_config` VALUES ('track_perpage', '50');
INSERT INTO `nuke_nsnst_config` VALUES ('track_sort_column', '6');
INSERT INTO `nuke_nsnst_config` VALUES ('track_sort_direction', 'desc');
INSERT INTO `nuke_nsnst_config` VALUES ('version_check', '$checktime');
INSERT INTO `nuke_nsnst_config` VALUES ('version_newest', '2.5.08');
INSERT INTO `nuke_nsnst_config` VALUES ('version_number', '2.5.08');
INSERT INTO `nuke_nsnst_config` VALUES ('ip_reason', 'admin_ip_reason.tpl');
INSERT INTO `nuke_nsnst_config` VALUES ('ip_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('ftaccess_path', '');
INSERT INTO `nuke_nsnst_config` VALUES ('flood_delay', '2');
INSERT INTO `nuke_nsnst_config` VALUES ('disable_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('track_clear', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('blocked_clear', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_countries`
--

CREATE TABLE `nuke_nsnst_countries` (
  `c2c` char(2) NOT NULL default '',
  `country` varchar(60) NOT NULL default '',
  KEY `c2c` (`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_countries`
--

INSERT INTO `nuke_nsnst_countries` VALUES ('00', 'Unknown');
INSERT INTO `nuke_nsnst_countries` VALUES ('01', 'IANA Reserved');
INSERT INTO `nuke_nsnst_countries` VALUES ('ac', 'Ascension Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('ad', 'Andorra');
INSERT INTO `nuke_nsnst_countries` VALUES ('ae', 'United Arab Emirates');
INSERT INTO `nuke_nsnst_countries` VALUES ('af', 'Afghanistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ag', 'Antigua And Barbuda');
INSERT INTO `nuke_nsnst_countries` VALUES ('ai', 'Anguilla');
INSERT INTO `nuke_nsnst_countries` VALUES ('al', 'Albania');
INSERT INTO `nuke_nsnst_countries` VALUES ('am', 'Armenia');
INSERT INTO `nuke_nsnst_countries` VALUES ('an', 'Netherlands Antilles');
INSERT INTO `nuke_nsnst_countries` VALUES ('ao', 'Angola');
INSERT INTO `nuke_nsnst_countries` VALUES ('ap', 'Aripo');
INSERT INTO `nuke_nsnst_countries` VALUES ('aq', 'Antartica');
INSERT INTO `nuke_nsnst_countries` VALUES ('ar', 'Argentina');
INSERT INTO `nuke_nsnst_countries` VALUES ('as', 'Samoa, American');
INSERT INTO `nuke_nsnst_countries` VALUES ('at', 'Austria');
INSERT INTO `nuke_nsnst_countries` VALUES ('au', 'Australia');
INSERT INTO `nuke_nsnst_countries` VALUES ('aw', 'Aruba');
INSERT INTO `nuke_nsnst_countries` VALUES ('ax', 'Aaland Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('az', 'Azerbaijan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ba', 'Bosnia And Herzegovina');
INSERT INTO `nuke_nsnst_countries` VALUES ('bb', 'Barbados');
INSERT INTO `nuke_nsnst_countries` VALUES ('bd', 'Bangladesh');
INSERT INTO `nuke_nsnst_countries` VALUES ('be', 'Belgium');
INSERT INTO `nuke_nsnst_countries` VALUES ('bf', 'Burkina Faso');
INSERT INTO `nuke_nsnst_countries` VALUES ('bg', 'Bulgaria');
INSERT INTO `nuke_nsnst_countries` VALUES ('bh', 'Bahrain');
INSERT INTO `nuke_nsnst_countries` VALUES ('bi', 'Burundi');
INSERT INTO `nuke_nsnst_countries` VALUES ('bj', 'Benin');
INSERT INTO `nuke_nsnst_countries` VALUES ('bm', 'Bermuda');
INSERT INTO `nuke_nsnst_countries` VALUES ('bn', 'Brunei Darussalam');
INSERT INTO `nuke_nsnst_countries` VALUES ('bo', 'Bolivia');
INSERT INTO `nuke_nsnst_countries` VALUES ('br', 'Brazil');
INSERT INTO `nuke_nsnst_countries` VALUES ('bs', 'Bahamas');
INSERT INTO `nuke_nsnst_countries` VALUES ('bt', 'Bhutan');
INSERT INTO `nuke_nsnst_countries` VALUES ('bv', 'Bouvet Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('bw', 'Botswana');
INSERT INTO `nuke_nsnst_countries` VALUES ('by', 'Belarus');
INSERT INTO `nuke_nsnst_countries` VALUES ('bz', 'Belize');
INSERT INTO `nuke_nsnst_countries` VALUES ('ca', 'Canada');
INSERT INTO `nuke_nsnst_countries` VALUES ('cc', 'Cocos (Keeling) Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('cd', 'Congo, Democratic Republic Of The');
INSERT INTO `nuke_nsnst_countries` VALUES ('cf', 'Central African Republic');
INSERT INTO `nuke_nsnst_countries` VALUES ('cg', 'Congo, Republic Of The');
INSERT INTO `nuke_nsnst_countries` VALUES ('ch', 'Switzerland');
INSERT INTO `nuke_nsnst_countries` VALUES ('ci', 'Cote D''ivoire');
INSERT INTO `nuke_nsnst_countries` VALUES ('ck', 'Cook Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('cl', 'Chile');
INSERT INTO `nuke_nsnst_countries` VALUES ('cm', 'Cameroon');
INSERT INTO `nuke_nsnst_countries` VALUES ('cn', 'China');
INSERT INTO `nuke_nsnst_countries` VALUES ('co', 'Colombia');
INSERT INTO `nuke_nsnst_countries` VALUES ('cr', 'Costa Rica');
INSERT INTO `nuke_nsnst_countries` VALUES ('cs', 'Czechoslovakia (Former)');
INSERT INTO `nuke_nsnst_countries` VALUES ('cu', 'Cuba');
INSERT INTO `nuke_nsnst_countries` VALUES ('cv', 'Cape Verde');
INSERT INTO `nuke_nsnst_countries` VALUES ('cx', 'Christmas Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('cy', 'Cyprus');
INSERT INTO `nuke_nsnst_countries` VALUES ('cz', 'Czech Republic');
INSERT INTO `nuke_nsnst_countries` VALUES ('de', 'Germany');
INSERT INTO `nuke_nsnst_countries` VALUES ('dj', 'Djibouti');
INSERT INTO `nuke_nsnst_countries` VALUES ('dk', 'Denmark');
INSERT INTO `nuke_nsnst_countries` VALUES ('dm', 'Dominica');
INSERT INTO `nuke_nsnst_countries` VALUES ('do', 'Dominican Republic');
INSERT INTO `nuke_nsnst_countries` VALUES ('dz', 'Algeria');
INSERT INTO `nuke_nsnst_countries` VALUES ('ec', 'Ecuador');
INSERT INTO `nuke_nsnst_countries` VALUES ('ee', 'Estonia');
INSERT INTO `nuke_nsnst_countries` VALUES ('eg', 'Egypt');
INSERT INTO `nuke_nsnst_countries` VALUES ('eh', 'Western Sahara');
INSERT INTO `nuke_nsnst_countries` VALUES ('er', 'Eritrea');
INSERT INTO `nuke_nsnst_countries` VALUES ('es', 'Spain');
INSERT INTO `nuke_nsnst_countries` VALUES ('et', 'Ethiopia');
INSERT INTO `nuke_nsnst_countries` VALUES ('eu', 'European Union');
INSERT INTO `nuke_nsnst_countries` VALUES ('fi', 'Finland');
INSERT INTO `nuke_nsnst_countries` VALUES ('fj', 'Fiji');
INSERT INTO `nuke_nsnst_countries` VALUES ('fk', 'Falkland Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('fm', 'Micronesia, Federated States Of');
INSERT INTO `nuke_nsnst_countries` VALUES ('fo', 'Faroe Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('fr', 'France');
INSERT INTO `nuke_nsnst_countries` VALUES ('fx', 'France, Metropolitan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ga', 'Gabon');
INSERT INTO `nuke_nsnst_countries` VALUES ('gb', 'United Kingdom');
INSERT INTO `nuke_nsnst_countries` VALUES ('gd', 'Grenada');
INSERT INTO `nuke_nsnst_countries` VALUES ('ge', 'Georgia');
INSERT INTO `nuke_nsnst_countries` VALUES ('gf', 'French Guiana');
INSERT INTO `nuke_nsnst_countries` VALUES ('gg', 'Guernsey');
INSERT INTO `nuke_nsnst_countries` VALUES ('gh', 'Ghana');
INSERT INTO `nuke_nsnst_countries` VALUES ('gi', 'Gibraltar');
INSERT INTO `nuke_nsnst_countries` VALUES ('gl', 'Greenland');
INSERT INTO `nuke_nsnst_countries` VALUES ('gm', 'Gambia, The');
INSERT INTO `nuke_nsnst_countries` VALUES ('gn', 'Guinea');
INSERT INTO `nuke_nsnst_countries` VALUES ('gp', 'Guadeloupe');
INSERT INTO `nuke_nsnst_countries` VALUES ('gq', 'Equatorial Guinea');
INSERT INTO `nuke_nsnst_countries` VALUES ('gr', 'Greece');
INSERT INTO `nuke_nsnst_countries` VALUES ('gs', 'South Georgia and The Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('gt', 'Guatemala');
INSERT INTO `nuke_nsnst_countries` VALUES ('gu', 'Guam');
INSERT INTO `nuke_nsnst_countries` VALUES ('gw', 'Guinea-Bissau');
INSERT INTO `nuke_nsnst_countries` VALUES ('gy', 'Guyana');
INSERT INTO `nuke_nsnst_countries` VALUES ('hk', 'Hong Kong');
INSERT INTO `nuke_nsnst_countries` VALUES ('hm', 'Heard and Mc Donald Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('hn', 'Honduras');
INSERT INTO `nuke_nsnst_countries` VALUES ('hr', 'Croatia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ht', 'Haiti');
INSERT INTO `nuke_nsnst_countries` VALUES ('hu', 'Hungary');
INSERT INTO `nuke_nsnst_countries` VALUES ('id', 'Indonesia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ie', 'Ireland');
INSERT INTO `nuke_nsnst_countries` VALUES ('il', 'Israel');
INSERT INTO `nuke_nsnst_countries` VALUES ('im', 'Isle Of Man');
INSERT INTO `nuke_nsnst_countries` VALUES ('in', 'India');
INSERT INTO `nuke_nsnst_countries` VALUES ('io', 'British Indian Ocean Territory');
INSERT INTO `nuke_nsnst_countries` VALUES ('iq', 'Iraq');
INSERT INTO `nuke_nsnst_countries` VALUES ('ir', 'Iran');
INSERT INTO `nuke_nsnst_countries` VALUES ('is', 'Iceland');
INSERT INTO `nuke_nsnst_countries` VALUES ('it', 'Italy');
INSERT INTO `nuke_nsnst_countries` VALUES ('je', 'Jersey');
INSERT INTO `nuke_nsnst_countries` VALUES ('jm', 'Jamaica');
INSERT INTO `nuke_nsnst_countries` VALUES ('jo', 'Jordan');
INSERT INTO `nuke_nsnst_countries` VALUES ('jp', 'Japan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ke', 'Kenya');
INSERT INTO `nuke_nsnst_countries` VALUES ('kg', 'Kyrgyzstan');
INSERT INTO `nuke_nsnst_countries` VALUES ('kh', 'Cambodia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ki', 'Kiribati');
INSERT INTO `nuke_nsnst_countries` VALUES ('km', 'Comoros');
INSERT INTO `nuke_nsnst_countries` VALUES ('kn', 'SaINT Kitts And Nevis');
INSERT INTO `nuke_nsnst_countries` VALUES ('kp', 'Korea, North');
INSERT INTO `nuke_nsnst_countries` VALUES ('kr', 'Korea, South');
INSERT INTO `nuke_nsnst_countries` VALUES ('kw', 'Kuwait');
INSERT INTO `nuke_nsnst_countries` VALUES ('ky', 'Cayman Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('kz', 'Kazakhstan');
INSERT INTO `nuke_nsnst_countries` VALUES ('la', 'Laos');
INSERT INTO `nuke_nsnst_countries` VALUES ('lb', 'Lebanon');
INSERT INTO `nuke_nsnst_countries` VALUES ('lc', 'SaINT Lucia');
INSERT INTO `nuke_nsnst_countries` VALUES ('li', 'Liechtenstein');
INSERT INTO `nuke_nsnst_countries` VALUES ('lk', 'Sri Lanka');
INSERT INTO `nuke_nsnst_countries` VALUES ('lr', 'Liberia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ls', 'Lesotho');
INSERT INTO `nuke_nsnst_countries` VALUES ('lt', 'Lithuania');
INSERT INTO `nuke_nsnst_countries` VALUES ('lu', 'Luxembourg');
INSERT INTO `nuke_nsnst_countries` VALUES ('lv', 'Latvia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ly', 'Libya');
INSERT INTO `nuke_nsnst_countries` VALUES ('ma', 'Morocco');
INSERT INTO `nuke_nsnst_countries` VALUES ('mc', 'Monaco');
INSERT INTO `nuke_nsnst_countries` VALUES ('md', 'Moldova');
INSERT INTO `nuke_nsnst_countries` VALUES ('me', 'Montenegro');
INSERT INTO `nuke_nsnst_countries` VALUES ('mg', 'Madagascar');
INSERT INTO `nuke_nsnst_countries` VALUES ('mh', 'Marshall Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('mk', 'Macedonia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ml', 'Mali');
INSERT INTO `nuke_nsnst_countries` VALUES ('mm', 'Myanmar');
INSERT INTO `nuke_nsnst_countries` VALUES ('mn', 'Mongolia');
INSERT INTO `nuke_nsnst_countries` VALUES ('mo', 'Macau');
INSERT INTO `nuke_nsnst_countries` VALUES ('mp', 'Northern Mariana Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('mq', 'Martinique');
INSERT INTO `nuke_nsnst_countries` VALUES ('mr', 'Mauritania');
INSERT INTO `nuke_nsnst_countries` VALUES ('ms', 'Montserrat');
INSERT INTO `nuke_nsnst_countries` VALUES ('mt', 'Malta');
INSERT INTO `nuke_nsnst_countries` VALUES ('mu', 'Mauritius');
INSERT INTO `nuke_nsnst_countries` VALUES ('mv', 'Maldives');
INSERT INTO `nuke_nsnst_countries` VALUES ('mw', 'Malawi');
INSERT INTO `nuke_nsnst_countries` VALUES ('mx', 'Mexico');
INSERT INTO `nuke_nsnst_countries` VALUES ('my', 'Malaysia');
INSERT INTO `nuke_nsnst_countries` VALUES ('mz', 'Mozambique');
INSERT INTO `nuke_nsnst_countries` VALUES ('na', 'Namibia');
INSERT INTO `nuke_nsnst_countries` VALUES ('nc', 'New Caledonia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ne', 'Niger');
INSERT INTO `nuke_nsnst_countries` VALUES ('nf', 'Norfork Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('ng', 'Nigeria');
INSERT INTO `nuke_nsnst_countries` VALUES ('ni', 'Nicaragua');
INSERT INTO `nuke_nsnst_countries` VALUES ('nl', 'Netherlands');
INSERT INTO `nuke_nsnst_countries` VALUES ('no', 'Norway');
INSERT INTO `nuke_nsnst_countries` VALUES ('np', 'Nepal');
INSERT INTO `nuke_nsnst_countries` VALUES ('nr', 'Nauru');
INSERT INTO `nuke_nsnst_countries` VALUES ('nu', 'Niue');
INSERT INTO `nuke_nsnst_countries` VALUES ('nz', 'New Zealand');
INSERT INTO `nuke_nsnst_countries` VALUES ('om', 'Oman');
INSERT INTO `nuke_nsnst_countries` VALUES ('pa', 'Panama');
INSERT INTO `nuke_nsnst_countries` VALUES ('pe', 'Peru');
INSERT INTO `nuke_nsnst_countries` VALUES ('pf', 'French Polynesia');
INSERT INTO `nuke_nsnst_countries` VALUES ('pg', 'Papua New Guinea');
INSERT INTO `nuke_nsnst_countries` VALUES ('ph', 'Philippines');
INSERT INTO `nuke_nsnst_countries` VALUES ('pk', 'Pakistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('pl', 'Poland');
INSERT INTO `nuke_nsnst_countries` VALUES ('pm', 'SaINT Pierre and Miquelon');
INSERT INTO `nuke_nsnst_countries` VALUES ('pn', 'Pitcairn Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('pr', 'Puerto Rico');
INSERT INTO `nuke_nsnst_countries` VALUES ('ps', 'Palestine');
INSERT INTO `nuke_nsnst_countries` VALUES ('pt', 'Portugal');
INSERT INTO `nuke_nsnst_countries` VALUES ('pw', 'Palau');
INSERT INTO `nuke_nsnst_countries` VALUES ('py', 'Paraguay');
INSERT INTO `nuke_nsnst_countries` VALUES ('qa', 'Qatar');
INSERT INTO `nuke_nsnst_countries` VALUES ('re', 'Reunion');
INSERT INTO `nuke_nsnst_countries` VALUES ('rs', 'Serbia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ro', 'Romania');
INSERT INTO `nuke_nsnst_countries` VALUES ('ru', 'Russia');
INSERT INTO `nuke_nsnst_countries` VALUES ('rw', 'Rwanda');
INSERT INTO `nuke_nsnst_countries` VALUES ('sa', 'Saudi Arabia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sb', 'Solomon Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('sc', 'Seychelles');
INSERT INTO `nuke_nsnst_countries` VALUES ('sd', 'Sudan');
INSERT INTO `nuke_nsnst_countries` VALUES ('se', 'Sweden');
INSERT INTO `nuke_nsnst_countries` VALUES ('sg', 'Singapore');
INSERT INTO `nuke_nsnst_countries` VALUES ('sh', 'SaINT Helena');
INSERT INTO `nuke_nsnst_countries` VALUES ('si', 'Slovenia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sj', 'Svalbard');
INSERT INTO `nuke_nsnst_countries` VALUES ('sk', 'Slovakia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sl', 'Sierra Leone');
INSERT INTO `nuke_nsnst_countries` VALUES ('sm', 'San Marino');
INSERT INTO `nuke_nsnst_countries` VALUES ('sn', 'Senegal');
INSERT INTO `nuke_nsnst_countries` VALUES ('so', 'Somalia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sr', 'Suriname');
INSERT INTO `nuke_nsnst_countries` VALUES ('st', 'Sao Tome And Principe');
INSERT INTO `nuke_nsnst_countries` VALUES ('su', 'Soviet Union');
INSERT INTO `nuke_nsnst_countries` VALUES ('sv', 'El Salvador');
INSERT INTO `nuke_nsnst_countries` VALUES ('sy', 'Syria');
INSERT INTO `nuke_nsnst_countries` VALUES ('sz', 'Swaziland');
INSERT INTO `nuke_nsnst_countries` VALUES ('tc', 'Turks And Caicos Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('td', 'Chad');
INSERT INTO `nuke_nsnst_countries` VALUES ('tf', 'French Southern Territories');
INSERT INTO `nuke_nsnst_countries` VALUES ('tg', 'Togo');
INSERT INTO `nuke_nsnst_countries` VALUES ('th', 'Thailand');
INSERT INTO `nuke_nsnst_countries` VALUES ('tj', 'Tajikistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('tk', 'Tokelau');
INSERT INTO `nuke_nsnst_countries` VALUES ('tl', 'Timor-leste');
INSERT INTO `nuke_nsnst_countries` VALUES ('tm', 'Turkmenistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('tn', 'Tunisia');
INSERT INTO `nuke_nsnst_countries` VALUES ('to', 'Tonga');
INSERT INTO `nuke_nsnst_countries` VALUES ('tp', 'East Timor');
INSERT INTO `nuke_nsnst_countries` VALUES ('tr', 'Turkey');
INSERT INTO `nuke_nsnst_countries` VALUES ('tt', 'Trinidad And Tobago');
INSERT INTO `nuke_nsnst_countries` VALUES ('tv', 'Tuvalu');
INSERT INTO `nuke_nsnst_countries` VALUES ('tw', 'Taiwan');
INSERT INTO `nuke_nsnst_countries` VALUES ('tz', 'Tanzania');
INSERT INTO `nuke_nsnst_countries` VALUES ('ua', 'Ukraine');
INSERT INTO `nuke_nsnst_countries` VALUES ('ug', 'Uganda');
INSERT INTO `nuke_nsnst_countries` VALUES ('um', 'United States Minor Outlying Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('un', 'United Nations');
INSERT INTO `nuke_nsnst_countries` VALUES ('us', 'United States');
INSERT INTO `nuke_nsnst_countries` VALUES ('uy', 'Uruguay');
INSERT INTO `nuke_nsnst_countries` VALUES ('uz', 'Uzbekistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('va', 'Vatican City State');
INSERT INTO `nuke_nsnst_countries` VALUES ('vc', 'SaINT Vincent And The Grenadines');
INSERT INTO `nuke_nsnst_countries` VALUES ('ve', 'Venezuela');
INSERT INTO `nuke_nsnst_countries` VALUES ('vg', 'Virgin Islands, British');
INSERT INTO `nuke_nsnst_countries` VALUES ('vi', 'Virgin Islands, American');
INSERT INTO `nuke_nsnst_countries` VALUES ('vn', 'Viet Nam');
INSERT INTO `nuke_nsnst_countries` VALUES ('vu', 'Vanuatu');
INSERT INTO `nuke_nsnst_countries` VALUES ('wf', 'Wallis and Futuna Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('ws', 'Samoa');
INSERT INTO `nuke_nsnst_countries` VALUES ('xe', 'England');
INSERT INTO `nuke_nsnst_countries` VALUES ('xs', 'Scotland');
INSERT INTO `nuke_nsnst_countries` VALUES ('xw', 'Wales');
INSERT INTO `nuke_nsnst_countries` VALUES ('ye', 'Yemen');
INSERT INTO `nuke_nsnst_countries` VALUES ('yt', 'Mayotte');
INSERT INTO `nuke_nsnst_countries` VALUES ('yu', 'Yugoslavia');
INSERT INTO `nuke_nsnst_countries` VALUES ('za', 'South Africa');
INSERT INTO `nuke_nsnst_countries` VALUES ('zm', 'Zambia');
INSERT INTO `nuke_nsnst_countries` VALUES ('zw', 'Zimbabwe');
INSERT INTO `nuke_nsnst_countries` VALUES ('02', 'UnAllocated');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_excluded_ranges`
--

CREATE TABLE `nuke_nsnst_excluded_ranges` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `c2c` char(2) NOT NULL default '00',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_excluded_ranges`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_ip2country`
--

CREATE TABLE `nuke_nsnst_ip2country` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `c2c` char(2) NOT NULL default '',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_ip2country`
--


INSERT INTO `nuke_nsnst_ip2country` VALUES (0, 16777215, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (16777216, 33554431, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (33554432, 50331647, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (83886080, 100663295, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (117440512, 134217727, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (167772160, 184549375, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (234881024, 251658239, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (385875968, 402653183, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (452984832, 469762047, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (520093696, 536870911, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (603979776, 620756991, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (620756992, 637534207, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (687865856, 704643071, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (704643072, 721420287, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1241513984, 1258291199, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1258291200, 1275068415, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1291845632, 1308622847, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1308622848, 1325400063, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1325400064, 1342177279, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1526726656, 1543503871, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1543503872, 1560281087, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1560281088, 1577058303, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1577058304, 1593835519, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1593835520, 1610612735, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1610612736, 1627389951, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1627389952, 1644167167, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1644167168, 1660944383, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1660944384, 1677721599, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1677721600, 1694498815, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1694498816, 1711276031, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1711276032, 1728053247, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1728053248, 1744830463, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1744830464, 1761607679, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1761607680, 1778384895, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1778384896, 1795162111, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1795162112, 1811939327, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1811939328, 1828716543, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1828716544, 1845493759, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1845493760, 1862270975, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1862270976, 1879048191, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1879048192, 1895825407, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1895825408, 1912602623, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1912602624, 1929379839, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1929379840, 1946157055, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1946157056, 1962934271, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1962934272, 1979711487, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1979711488, 1996488703, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1996488704, 2013265919, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2013265920, 2030043135, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2080374784, 2097151999, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2097152000, 2113929215, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2113929216, 2130706431, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2130706432, 2147483647, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2851995648, 2852061183, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2886729728, 2887778303, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2902458368, 2919235583, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2919235584, 2936012799, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2936012800, 2952790015, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2952790016, 2969567231, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2969567232, 2986344447, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2986344448, 3003121663, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3003121664, 3019898879, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3019898880, 3036676095, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3036676096, 3053453311, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3053453312, 3070230527, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3070230528, 3087007743, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3087007744, 3103784959, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3103784960, 3120562175, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3120562176, 3137339391, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3137339392, 3154116607, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3187671040, 3204448255, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3221225472, 3221258239, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3305111552, 3321888767, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3741319168, 3758096383, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3758096384, 3774873599, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3774873600, 3791650815, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3791650816, 3808428031, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3808428032, 3825205247, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3825205248, 3841982463, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3841982464, 3858759679, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3858759680, 3875536895, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3875536896, 3892314111, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3892314112, 3909091327, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3909091328, 3925868543, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3925868544, 3942645759, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3942645760, 3959422975, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3959422976, 3976200191, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3976200192, 3992977407, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3992977408, 4009754623, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4009754624, 4026531839, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4026531840, 4043309055, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4043309056, 4060086271, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4060086272, 4076863487, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4076863488, 4093640703, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4093640704, 4110417919, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4110417920, 4127195135, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4127195136, 4143972351, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4143972352, 4160749567, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4160749568, 4177526783, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4177526784, 4194303999, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4194304000, 4211081215, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4211081216, 4227858431, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4227858432, 4244635647, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4244635648, 4261412863, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4261412864, 4278190079, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4278190080, 4294967295, 1098424776, '01');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_protected_ranges`
--

CREATE TABLE `nuke_nsnst_protected_ranges` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `c2c` char(2) NOT NULL default '00',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_protected_ranges`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_tracked_ips`
--

CREATE TABLE `nuke_nsnst_tracked_ips` (
  `tid` int(10) NOT NULL auto_increment,
  `ip_addr` varchar(15) NOT NULL default '',
  `ip_long` int(10) unsigned NOT NULL default '0',
  `user_id` int(11) NOT NULL default '1',
  `username` varchar(60) NOT NULL default '',
  `user_agent` text NOT NULL,
  `refered_from` text NOT NULL,
  `date` int(20) NOT NULL default '0',
  `page` text NOT NULL,
  `x_forward_for` varchar(32) NOT NULL default '',
  `client_ip` varchar(32) NOT NULL default '',
  `remote_addr` varchar(32) NOT NULL default '',
  `remote_port` varchar(11) NOT NULL default '',
  `request_method` varchar(10) NOT NULL default '',
  `c2c` char(2) NOT NULL default '00',
  PRIMARY KEY  (`tid`),
  KEY `maintracking` (`ip_addr`,`ip_long`),
  KEY `ip_addr` (`ip_addr`),
  KEY `ip_long` (`ip_long`),
  KEY `user_id` (`user_id`),
  KEY `username` (`username`),
  KEY `user_agent` (`user_agent`(255)),
  KEY `refered_from` (`refered_from`(255)),
  KEY `date` (`date`),
  KEY `page` (`page`(255)),
  KEY `c2c` (`c2c`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

--
-- Dumping data for table `nuke_nsnst_tracked_ips`
--