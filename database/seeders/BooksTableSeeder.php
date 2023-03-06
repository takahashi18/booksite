<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use datetime;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books') ->insert([
            'book_name' => '容疑者Xの献身',
            'image' => '東野１.png',
            'author_id' => '1',
            'price' => '770',
            'introduction' => '福山雅治主演で2008年に映画化され、堤真一、松雪泰子の熱演も話題になった。累計290万部突破。直木賞を受賞した大ベストセラー!',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '百夜行',
            'image' => '東野２.png',
            'author_id' => '1',
            'price' => '1430',
            'introduction' => '伏線が幾重にも張り巡らされた緻密なストーリー。壮大なスケールで描かれた、ミステリー史に燦然と輝く大人気作家の記念碑的傑作。200万部突破!',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'マスカレードホテル',
            'image' => '東野３.png',
            'author_id' => '1',
            'price' => '840',
            'introduction' => '若き刑事・新田浩介は、ホテルマンに化けて潜入捜査に就くことを命じられる。彼を教育するのは、女性フロントクラークの山岸尚美。次から次へと怪しげな客たちが訪れる中、二人は真相に辿り着けるのか!? 大人気シリーズ第1弾のミリオンセラー。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '新参者',
            'image' => '東野４.png',
            'author_id' => '1',
            'price' => '840',
            'introduction' => '着任したばかりの刑事・加賀恭一郎の前に立ちはだかるのは、人情という名の謎。手掛かりをくれるのは江戸情緒残る街に暮らす普通の人びと。「事件で傷ついた人がいるなら、救い出すのも私の仕事です」。大切な人を守るために生まれた謎が、犯人へと繋がっていく。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '人魚の眠る家',
            'image' => '東野５.png',
            'author_id' => '1',
            'price' => '870',
            'introduction' => '答えてください。娘を殺したのはわたしでしょうか。愛する人を持つすべての人へ。感涙の東野ミステリ、待望の文庫化',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '美味しいご飯が食べられますように',
            'image' => '高瀬１.png',
            'author_id' => '2',
            'price' => '1470',
            'introduction' => '第167回芥川賞受賞作。「二谷さん、わたしと一緒に、芦川さんにいじわるしませんか」心をざわつかせる、仕事+食べもの+恋愛小説。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '犬の形をしているもの',
            'image' => '高瀬２.png',
            'author_id' => '2',
            'price' => '550',
            'introduction' => '「子ども、もらってくれませんか?」唐突な提案に戸惑う薫だったが、故郷の家族を喜ばせるために子どもをもらおうかと思案して──。昔飼っていた犬を愛していたように、薫は無条件に人を愛せるのか。第43回すばる文学賞受賞作。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'クジラの彼',
            'image' => '有川１.png',
            'author_id' => '3',
            'price' => '610',
            'introduction' => '『浮上したら漁火がきれいだったので送ります』。それが2ヶ月ぶりのメールだった。彼女が出会った彼は潜水艦(クジラ)乗り。ふたりの恋の前には、いつも大きな海が横たわる――有川浩がおくる制服ラブコメ短編集!',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '阪急電車',
            'image' => '有川２.png',
            'author_id' => '3',
            'price' => '650',
            'introduction' => '恋の始まり、別れの兆し、途中下車―人数分のドラマを乗せた電車はどこまでもは続かない線路を走っていく。ほっこり胸キュンの傑作長篇小説。',
        ]);

        DB::table('books') ->insert([
            'book_name' => 'フリーター家を買う',
            'image' => '有川３.png',
            'author_id' => '3',
            'price' => '780',
            'introduction' => '3カ月で就職先を辞めて以来、自堕落気儘に暮らす“甘ったれ”25歳が、一念発起。バイトに精を出し、職探しに、大切な人を救うために、奔走する。主人公の成長と家族の再生を描く長篇小説。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'グラスホッパー',
            'image' => '伊坂１.png',
            'author_id' => '4',
            'price' => '650',
            'introduction' => '「復讐を横取りされた。嘘？」元教師の鈴木は、妻を殺した男が車に轢かれる瞬間を目撃する。どうやら「押し屋」と呼ばれる殺し屋の仕業らしい。鈴木は正体を探るため、彼の後を追う。疾走感溢れる筆致で綴られた、分類不能の「殺し屋」小説！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '告白',
            'image' => '湊１.png',
            'author_id' => '5',
            'price' => '640',
            'introduction' => '「愛美は死にました。しかし事故ではありません。このクラスの生徒に殺されたのです」我が子を校内で亡くした中学校の女性教師によるホームルームでの告白から、この物語は始まる。衝撃的なラストを巡り物議を醸した、デビュー作にして、第6回本屋大賞受賞のベストセラー。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'Nのために',
            'image' => '湊２.png',
            'author_id' => '5',
            'price' => '700',
            'introduction' => '超高層マンションの一室で、そこに住む野口夫妻の変死体が発見された。現場に居合わせたのは20代の4人の男女。それぞれの証言は驚くべき真実を明らかにしていく。著者初の純愛ミステリー。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '母性',
            'image' => '湊３.png',
            'author_id' => '5',
            'price' => '700',
            'introduction' => '事故か、自殺か、殺人か――。母の手記と娘の回想が交錯し、浮かび上がる事件の真相とは。圧倒的に新しい、母娘ミステリー!',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '下町ロケット',
            'image' => '池井戸１.png',
            'author_id' => '6',
            'price' => '1020',
            'introduction' => '「お前には夢があるのか？ オレにはある」男たちの矜恃が激突する感動のエンターテインメント長編！第１４５回直木賞受賞作。池井戸潤、絶対の代表作。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '空飛ぶタイヤ',
            'image' => '池井戸２.png',
            'author_id' => '6',
            'price' => '1100',
            'introduction' => '独自に真相に迫ろうとする赤松を阻む、大企業の論理に。会社の経営は混迷を極め、家族からも孤立し、絶望のどん底に堕ちた赤松に、週刊誌記者・榎本が驚愕の事実をもたらす。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'ノーサイド・ゲーム',
            'image' => '池井戸３.png',
            'author_id' => '6',
            'price' => '920',
            'introduction' => '経営戦略室から左遷された男が挑む――。低迷ラグビー部を""経済的に""立て直せ！主演・大泉洋：２０１９年７月放映ドラマ「ノーサイド・ゲーム」（ＴＢＳ日曜劇場）',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '七つの会議',
            'image' => '池井戸４.png',
            'author_id' => '6',
            'price' => '800',
            'introduction' => 'どこにでもありそうな中堅メーカー・東京建電とその取引先を舞台に繰り広げられる生きるための戦い。だが、そこには誰も知らない秘密があった。筋書きのない会議がいま、始まる―。“働くこと”の意味に迫る、クライム・ノベル。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'ソロモンの偽証',
            'image' => '宮部１.png',
            'author_id' => '7',
            'price' => '1250',
            'introduction' => '遂に動き出した「学校内裁判」。繰り広げられる検事と弁護人の熱戦。そして、告発状を書いた少女が遂に……。夏。開廷の日は近い。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '火車',
            'image' => '宮部２.png',
            'author_id' => '7',
            'price' => '1100',
            'introduction' => '休職中の刑事、本間俊介は遠縁の男性に頼まれて彼の婚約者、関根彰子の行方を捜すことになった。自らの意思で失踪、しかも徹底的に足取りを消して――なぜ彰子はそこまでして自分の存在を消さねばならなかったのか? いったい彼女は何者なのか?山本周五郎賞に輝いたミステリー史に残る傑作。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'コンビニ人間',
            'image' => '村田１.png',
            'author_id' => '8',
            'price' => '640',
            'introduction' => '「普通」とは何か？現代の実存を軽やかに問う第155回芥川賞受賞 36歳未婚、彼氏なし。コンビニのバイト歴18年目の古倉恵子。日々コンビニ食を食べ、夢の中でもレジを打ち、「店員」でいるときのみ世界の歯車になれる――',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '君の膵臓を食べたい',
            'image' => '住野１.png',
            'author_id' => '9',
            'price' => '740',
            'introduction' => 'ある日、高校生の僕は病院で一冊の文庫本を拾う。タイトルは「共病文庫」。それは、クラスメイトである山内桜良が密かに綴っていた日記帳だった。そこには、彼女の余命が膵臓の病気により、もういくばくもないと書かれていて――。読後、きっとこのタイトルに涙する。デビュー作にして2016年本屋大賞・堂々の第2位、',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '青くて痛くて脆い',
            'image' => '住野２.png',
            'author_id' => '9',
            'price' => '680',
            'introduction' => '人に不用意に近づきすぎないことを信条にしていた大学一年の春、僕は秋好寿乃に出会った。周囲から浮いていて、けれど誰よりもまっすぐだった彼女。その理想と情熱にふれて、僕たちは二人で秘密結社「モアイ」をつくった。――それから三年、あのとき将来の夢を語り合った秋好はもういない。そして、僕の心には彼女がついた嘘がトゲのように刺さっていた。傷つくことの痛みと青春の残酷さを描ききった住野よるの代表作',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => 'また同じ夢を見ていた',
            'image' => '住野３.png',
            'author_id' => '9',
            'price' => '730',
            'introduction' => 'その著者、住野よるの第二作目が、待望の文庫化。友達のいない少女、リストカットを繰り返す女子高生、アバズレと罵られる女性、一人静かに余生をおくる老女。彼女たちの“幸せ"は、どこにあるのか。「やり直したい」ことがある、“今"がうまくいかない全ての人たちに贈る物語。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '何者',
            'image' => '朝井１.png',
            'author_id' => '10',
            'price' => '650',
            'introduction' => '想像力が足りない人ほど、他人に想像力を求める。就活対策のため、拓人は同居人の光太郎や留学帰りの瑞月、理香らと集まるようになるが――。衝撃のラストが襲いかかる戦後最年少の直木賞受賞作。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '正欲',
            'image' => '朝井２.png',
            'author_id' => '10',
            'price' => '1800',
            'introduction' => 'あってはならない感情なんて、この世にない。それはつまり、いてはいけない人間なんて、この世にいないということだー。これは共感を呼ぶ傑作か?目を背けたくなる問題作か?第19回 本屋大賞ノミネート!【第34回柴田錬三郎賞受賞作】',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '桐島、部活辞めるってよ',
            'image' => '朝井３.png',
            'author_id' => '10',
            'price' => '620',
            'introduction' => '映画化大ヒット青春小説!バレー部のキャプテン・桐島の突然の退部が、5人の高校生達に波紋を起こして……。至るところでリンクする、17歳の青春群像小説。第22回小説すばる新人賞受賞作。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '夜空はいつでも最高密度の青色だ',
            'image' => '最果１.png',
            'author_id' => '11',
            'price' => '1320',
            'introduction' => '「ゆめかわいいは死後の色」「月面の詩」「花と高熱」「美しいから好きだよ」「冷たい傾斜」「もうおしまい」…ほか、書き下ろしを多数含む全43篇収録。現代におけるポエジーとは? ひとつの答えがここに。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '君の言い訳は最高の芸術',
            'image' => '最果２.png',
            'author_id' => '11',
            'price' => '550',
            'introduction' => 'いま、もっとも注目の作家・最果タヒが贈る、初のエッセイ集が待望の文庫化! 文庫版オリジナルエッセイも収録。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '死んでしまう系のぼくら',
            'image' => '最果３.png',
            'author_id' => '11',
            'price' => '1320',
            'introduction' => '3冊目となる待望の新詩集は、鋭利かつ叙情的な言葉で、剥き出しの感情と誰もが抱える孤独を浮き彫りにする、書き下ろし含む44篇を収録。第33回 現代詩花椿賞 受賞',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '星か獣になる季節',
            'image' => '最果４.png',
            'author_id' => '11',
            'price' => '640',
            'introduction' => '推しの地下アイドルが殺人容疑で逮捕!? 僕は同級生のイケメン森下と真相を探るが――。歪んだピュアネスが傷だらけで疾走する新世代の青春小説!',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '十代に共感するやつはみんな嘘つき',
            'image' => '最果５.png',
            'author_id' => '11',
            'price' => '640',
            'introduction' => 'いじめや自殺が日常にありふれている世界で生きるカズハ。女子高生の恋愛・友情・家族の問題がつまった二日間を濃密に描く傑作小説。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '愛がなんだ',
            'image' => '角田１.png',
            'author_id' => '12',
            'price' => '580',
            'introduction' => '「私はただ、ずっと彼のそばにはりついていたいのだ」――ＯＬのテルコはマモちゃんに出会って恋に落ちた。すべてがマモちゃん最優先で、会社もクビになる寸前。だが、彼はテルコのことが好きじゃないのだ。テルコの片思いは更にエスカレートしていき……。直木賞作家が濃密な筆致で綴る、〈全力疾走〉片思い小説！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '紙の月',
            'image' => '角田２.png',
            'author_id' => '12',
            'price' => '650',
            'introduction' => 'ただ好きで、ただ会いたいだけだった―――わかば銀行の支店から一億円が横領された。容疑者は、梅澤梨花四十一歳。あまりにもスリリングで、狂おしいまでに切実な、傑作長篇小説。各紙誌でも大絶賛された、第二十五回柴田錬三郎賞受賞作、待望の文庫化。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('books') ->insert([
            'book_name' => '対岸の彼女',
            'image' => '角田３.png',
            'author_id' => '12',
            'price' => '620',
            'introduction' => '立場が違ってもわかりあえる、どこかにいける、と思っていたのに……結婚する女、しない女、子供を持つ女、持たない女、たったそれだけのことで、なぜ女どうし、わかりあえなくなるんだろう。女性の友情と亀裂、そしてその先を、切なくリアルに描く傑作長編。第132回直木賞受賞作。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);
    }
};
