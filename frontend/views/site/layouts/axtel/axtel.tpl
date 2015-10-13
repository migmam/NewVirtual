
Template for axtel project


{set title="My Page"}

{title}My Page{/title}

User Information:<p>

Name: {$name|capitalize}<br>
Address: {$address|escape}<br>

{html_image file="http://localhost:8080/common/images/vc.png"}

{use class="yii\helpers\Html"}
{Html::mailto('eugenia@example.com')}

{Html::a('label', ['/site/test'])}
