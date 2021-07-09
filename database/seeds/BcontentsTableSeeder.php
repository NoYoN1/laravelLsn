<?php

use Illuminate\Database\Seeder;

class BcontentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            DB::table('bcontents')->insert([
                [
                    'title' => 'プレミアムオープンキャンパス開催',
                    'contents' => 'ECCコンピュータ専門学校では、4月14日(日)・27日(土)にプレミアムオープンキャンパスを開催いたします',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'title' => 'IT企業学内合同説明会を開催しました',
                    'contents' => 'ECCコンピュータ専門学校では、春休みに学内企業説明会を連日実施しています。基本的に１日１分野１社で実施しているのですが、今回はIT関連企業１２社様にお集まりいただき、「IT学内合同企業説明会」を開催致しました。',
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ]);
        });
    }
}
