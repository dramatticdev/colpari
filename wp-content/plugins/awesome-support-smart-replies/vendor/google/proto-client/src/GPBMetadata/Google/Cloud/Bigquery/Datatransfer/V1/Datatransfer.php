<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1;

class Datatransfer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Transfer::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea360a38676f6f676c652f636c6f75642f62696771756572792f646174" .
            "617472616e736665722f76312f646174617472616e736665722e70726f74" .
            "6f1225676f6f676c652e636c6f75642e62696771756572792e6461746174" .
            "72616e736665722e76311a34676f6f676c652f636c6f75642f6269677175" .
            "6572792f646174617472616e736665722f76312f7472616e736665722e70" .
            "726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e" .
            "2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e" .
            "70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d" .
            "61736b2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d" .
            "657374616d702e70726f746f1a1e676f6f676c652f70726f746f6275662f" .
            "77726170706572732e70726f746f22f1040a1344617461536f7572636550" .
            "6172616d6574657212100a08706172616d5f696418012001280912140a0c" .
            "646973706c61795f6e616d6518022001280912130a0b6465736372697074" .
            "696f6e180320012809124d0a047479706518042001280e323f2e676f6f67" .
            "6c652e636c6f75642e62696771756572792e646174617472616e73666572" .
            "2e76312e44617461536f75726365506172616d657465722e547970651210" .
            "0a08726571756972656418052001280812100a0872657065617465641806" .
            "2001280812180a1076616c69646174696f6e5f7265676578180720012809" .
            "12160a0e616c6c6f7765645f76616c756573180820032809122f0a096d69" .
            "6e5f76616c756518092001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c7565122f0a096d61785f76616c7565180a2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "7565124a0a066669656c6473180b2003280b323a2e676f6f676c652e636c" .
            "6f75642e62696771756572792e646174617472616e736665722e76312e44" .
            "617461536f75726365506172616d65746572121e0a1676616c6964617469" .
            "6f6e5f6465736372697074696f6e180c20012809121b0a1376616c696461" .
            "74696f6e5f68656c705f75726c180d2001280912110a09696d6d75746162" .
            "6c65180e20012808120f0a0772656375727365180f2001280822690a0454" .
            "79706512140a10545950455f554e5350454349464945441000120a0a0653" .
            "5452494e471001120b0a07494e54454745521002120a0a06444f55424c45" .
            "1003120b0a07424f4f4c45414e1004120a0a065245434f52441005120d0a" .
            "09504c55535f50414745100622cf070a0a44617461536f75726365120c0a" .
            "046e616d6518012001280912160a0e646174615f736f757263655f696418" .
            "022001280912140a0c646973706c61795f6e616d6518032001280912130a" .
            "0b6465736372697074696f6e18042001280912110a09636c69656e745f69" .
            "64180520012809120e0a0673636f706573180620032809124a0a0d747261" .
            "6e736665725f7479706518072001280e32332e676f6f676c652e636c6f75" .
            "642e62696771756572792e646174617472616e736665722e76312e547261" .
            "6e736665725479706512230a1b737570706f7274735f6d756c7469706c65" .
            "5f7472616e7366657273180820012808121f0a177570646174655f646561" .
            "646c696e655f7365636f6e647318092001280512180a1064656661756c74" .
            "5f7363686564756c65180a2001280912200a18737570706f7274735f6375" .
            "73746f6d5f7363686564756c65180b20012808124e0a0a706172616d6574" .
            "657273180c2003280b323a2e676f6f676c652e636c6f75642e6269677175" .
            "6572792e646174617472616e736665722e76312e44617461536f75726365" .
            "506172616d6574657212100a0868656c705f75726c180d20012809125f0a" .
            "12617574686f72697a6174696f6e5f74797065180e2001280e32432e676f" .
            "6f676c652e636c6f75642e62696771756572792e646174617472616e7366" .
            "65722e76312e44617461536f757263652e417574686f72697a6174696f6e" .
            "54797065125c0a11646174615f726566726573685f74797065180f200128" .
            "0e32412e676f6f676c652e636c6f75642e62696771756572792e64617461" .
            "7472616e736665722e76312e44617461536f757263652e44617461526566" .
            "726573685479706512280a2064656661756c745f646174615f7265667265" .
            "73685f77696e646f775f64617973181020012805121c0a146d616e75616c" .
            "5f72756e735f64697361626c6564181120012808123c0a196d696e696d75" .
            "6d5f7363686564756c655f696e74657276616c18122001280b32192e676f" .
            "6f676c652e70726f746f6275662e4475726174696f6e22730a1141757468" .
            "6f72697a6174696f6e5479706512220a1e415554484f52495a4154494f4e" .
            "5f545950455f554e535045434946494544100012160a12415554484f5249" .
            "5a4154494f4e5f434f4445100112220a1e474f4f474c455f504c55535f41" .
            "5554484f52495a4154494f4e5f434f4445100222630a0f44617461526566" .
            "726573685479706512210a1d444154415f524546524553485f545950455f" .
            "554e535045434946494544100012120a0e534c4944494e475f57494e444f" .
            "57100112190a15435553544f4d5f534c4944494e475f57494e444f571002" .
            "22240a1447657444617461536f7572636552657175657374120c0a046e61" .
            "6d65180120012809224f0a164c69737444617461536f7572636573526571" .
            "75657374120e0a06706172656e7418012001280912120a0a706167655f74" .
            "6f6b656e18032001280912110a09706167655f73697a6518042001280522" .
            "7b0a174c69737444617461536f7572636573526573706f6e736512470a0c" .
            "646174615f736f757263657318012003280b32312e676f6f676c652e636c" .
            "6f75642e62696771756572792e646174617472616e736665722e76312e44" .
            "617461536f7572636512170a0f6e6578745f706167655f746f6b656e1802" .
            "200128092299010a1b4372656174655472616e73666572436f6e66696752" .
            "657175657374120e0a06706172656e74180120012809124e0a0f7472616e" .
            "736665725f636f6e66696718022001280b32352e676f6f676c652e636c6f" .
            "75642e62696771756572792e646174617472616e736665722e76312e5472" .
            "616e73666572436f6e666967121a0a12617574686f72697a6174696f6e5f" .
            "636f646518032001280922ba010a1b5570646174655472616e7366657243" .
            "6f6e66696752657175657374124e0a0f7472616e736665725f636f6e6669" .
            "6718012001280b32352e676f6f676c652e636c6f75642e62696771756572" .
            "792e646174617472616e736665722e76312e5472616e73666572436f6e66" .
            "6967121a0a12617574686f72697a6174696f6e5f636f6465180320012809" .
            "122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e4669656c644d61736b22280a184765745472616e" .
            "73666572436f6e66696752657175657374120c0a046e616d651801200128" .
            "09222b0a1b44656c6574655472616e73666572436f6e6669675265717565" .
            "7374120c0a046e616d6518012001280922250a154765745472616e736665" .
            "7252756e52657175657374120c0a046e616d6518012001280922280a1844" .
            "656c6574655472616e7366657252756e52657175657374120c0a046e616d" .
            "65180120012809226c0a1a4c6973745472616e73666572436f6e66696773" .
            "52657175657374120e0a06706172656e7418012001280912170a0f646174" .
            "615f736f757263655f69647318022003280912120a0a706167655f746f6b" .
            "656e18032001280912110a09706167655f73697a65180420012805228701" .
            "0a1b4c6973745472616e73666572436f6e66696773526573706f6e736512" .
            "4f0a107472616e736665725f636f6e6669677318012003280b32352e676f" .
            "6f676c652e636c6f75642e62696771756572792e646174617472616e7366" .
            "65722e76312e5472616e73666572436f6e66696712170a0f6e6578745f70" .
            "6167655f746f6b656e18022001280922ad020a174c6973745472616e7366" .
            "657252756e7352657175657374120e0a06706172656e7418012001280912" .
            "440a0673746174657318022003280e32342e676f6f676c652e636c6f7564" .
            "2e62696771756572792e646174617472616e736665722e76312e5472616e" .
            "73666572537461746512120a0a706167655f746f6b656e18032001280912" .
            "110a09706167655f73697a65180420012805125e0a0b72756e5f61747465" .
            "6d707418052001280e32492e676f6f676c652e636c6f75642e6269677175" .
            "6572792e646174617472616e736665722e76312e4c6973745472616e7366" .
            "657252756e73526571756573742e52756e417474656d707422350a0a5275" .
            "6e417474656d7074121b0a1752554e5f415454454d50545f554e53504543" .
            "49464945441000120a0a064c41544553541001227e0a184c697374547261" .
            "6e7366657252756e73526573706f6e736512490a0d7472616e736665725f" .
            "72756e7318012003280b32322e676f6f676c652e636c6f75642e62696771" .
            "756572792e646174617472616e736665722e76312e5472616e7366657252" .
            "756e12170a0f6e6578745f706167655f746f6b656e18022001280922af01" .
            "0a174c6973745472616e736665724c6f677352657175657374120e0a0670" .
            "6172656e7418012001280912120a0a706167655f746f6b656e1804200128" .
            "0912110a09706167655f73697a65180520012805125d0a0d6d6573736167" .
            "655f747970657318062003280e32462e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e5472616e7366" .
            "65724d6573736167652e4d65737361676553657665726974792286010a18" .
            "4c6973745472616e736665724c6f6773526573706f6e736512510a117472" .
            "616e736665725f6d6573736167657318012003280b32362e676f6f676c65" .
            "2e636c6f75642e62696771756572792e646174617472616e736665722e76" .
            "312e5472616e736665724d65737361676512170a0f6e6578745f70616765" .
            "5f746f6b656e18022001280922260a16436865636b56616c696443726564" .
            "7352657175657374120c0a046e616d6518012001280922320a1743686563" .
            "6b56616c69644372656473526573706f6e736512170a0f6861735f76616c" .
            "69645f6372656473180120012808228b010a1b5363686564756c65547261" .
            "6e7366657252756e7352657175657374120e0a06706172656e7418012001" .
            "2809122e0a0a73746172745f74696d6518022001280b321a2e676f6f676c" .
            "652e70726f746f6275662e54696d657374616d70122c0a08656e645f7469" .
            "6d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d" .
            "657374616d7022600a1c5363686564756c655472616e7366657252756e73" .
            "526573706f6e736512400a0472756e7318012003280b32322e676f6f676c" .
            "652e636c6f75642e62696771756572792e646174617472616e736665722e" .
            "76312e5472616e7366657252756e32d8150a13446174615472616e736665" .
            "725365727669636512b8010a0d47657444617461536f75726365123b2e67" .
            "6f6f676c652e636c6f75642e62696771756572792e646174617472616e73" .
            "6665722e76312e47657444617461536f75726365526571756573741a312e" .
            "676f6f676c652e636c6f75642e62696771756572792e646174617472616e" .
            "736665722e76312e44617461536f75726365223782d3e4930231122f2f76" .
            "312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a" .
            "2f64617461536f75726365732f2a7d12c9010a0f4c69737444617461536f" .
            "7572636573123d2e676f6f676c652e636c6f75642e62696771756572792e" .
            "646174617472616e736665722e76312e4c69737444617461536f75726365" .
            "73526571756573741a3e2e676f6f676c652e636c6f75642e626967717565" .
            "72792e646174617472616e736665722e76312e4c69737444617461536f75" .
            "72636573526573706f6e7365223782d3e4930231122f2f76312f7b706172" .
            "656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6461" .
            "7461536f757263657312df010a144372656174655472616e73666572436f" .
            "6e66696712422e676f6f676c652e636c6f75642e62696771756572792e64" .
            "6174617472616e736665722e76312e4372656174655472616e7366657243" .
            "6f6e666967526571756573741a352e676f6f676c652e636c6f75642e6269" .
            "6771756572792e646174617472616e736665722e76312e5472616e736665" .
            "72436f6e666967224c82d3e493024622332f76312f7b706172656e743d70" .
            "726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f7472616e736665" .
            "72436f6e666967733a0f7472616e736665725f636f6e66696712ef010a14" .
            "5570646174655472616e73666572436f6e66696712422e676f6f676c652e" .
            "636c6f75642e62696771756572792e646174617472616e736665722e7631" .
            "2e5570646174655472616e73666572436f6e666967526571756573741a35" .
            "2e676f6f676c652e636c6f75642e62696771756572792e64617461747261" .
            "6e736665722e76312e5472616e73666572436f6e666967225c82d3e49302" .
            "5632432f76312f7b7472616e736665725f636f6e6669672e6e616d653d70" .
            "726f6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e73666572" .
            "436f6e666967732f2a7d3a0f7472616e736665725f636f6e66696712af01" .
            "0a1444656c6574655472616e73666572436f6e66696712422e676f6f676c" .
            "652e636c6f75642e62696771756572792e646174617472616e736665722e" .
            "76312e44656c6574655472616e73666572436f6e66696752657175657374" .
            "1a162e676f6f676c652e70726f746f6275662e456d707479223b82d3e493" .
            "02352a332f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174" .
            "696f6e732f2a2f7472616e73666572436f6e666967732f2a7d12c8010a11" .
            "4765745472616e73666572436f6e666967123f2e676f6f676c652e636c6f" .
            "75642e62696771756572792e646174617472616e736665722e76312e4765" .
            "745472616e73666572436f6e666967526571756573741a352e676f6f676c" .
            "652e636c6f75642e62696771756572792e646174617472616e736665722e" .
            "76312e5472616e73666572436f6e666967223b82d3e493023512332f7631" .
            "2f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f" .
            "7472616e73666572436f6e666967732f2a7d12d9010a134c697374547261" .
            "6e73666572436f6e6669677312412e676f6f676c652e636c6f75642e6269" .
            "6771756572792e646174617472616e736665722e76312e4c697374547261" .
            "6e73666572436f6e66696773526571756573741a422e676f6f676c652e63" .
            "6c6f75642e62696771756572792e646174617472616e736665722e76312e" .
            "4c6973745472616e73666572436f6e66696773526573706f6e7365223b82" .
            "d3e493023512332f76312f7b706172656e743d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a7d2f7472616e73666572436f6e6669677312ee" .
            "010a145363686564756c655472616e7366657252756e7312422e676f6f67" .
            "6c652e636c6f75642e62696771756572792e646174617472616e73666572" .
            "2e76312e5363686564756c655472616e7366657252756e73526571756573" .
            "741a432e676f6f676c652e636c6f75642e62696771756572792e64617461" .
            "7472616e736665722e76312e5363686564756c655472616e736665725275" .
            "6e73526573706f6e7365224d82d3e493024722422f76312f7b706172656e" .
            "743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e73" .
            "666572436f6e666967732f2a7d3a7363686564756c6552756e733a012a12" .
            "c6010a0e4765745472616e7366657252756e123c2e676f6f676c652e636c" .
            "6f75642e62696771756572792e646174617472616e736665722e76312e47" .
            "65745472616e7366657252756e526571756573741a322e676f6f676c652e" .
            "636c6f75642e62696771756572792e646174617472616e736665722e7631" .
            "2e5472616e7366657252756e224282d3e493023c123a2f76312f7b6e616d" .
            "653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e73" .
            "666572436f6e666967732f2a2f72756e732f2a7d12b0010a1144656c6574" .
            "655472616e7366657252756e123f2e676f6f676c652e636c6f75642e6269" .
            "6771756572792e646174617472616e736665722e76312e44656c65746554" .
            "72616e7366657252756e526571756573741a162e676f6f676c652e70726f" .
            "746f6275662e456d707479224282d3e493023c2a3a2f76312f7b6e616d65" .
            "3d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e7366" .
            "6572436f6e666967732f2a2f72756e732f2a7d12d7010a104c6973745472" .
            "616e7366657252756e73123e2e676f6f676c652e636c6f75642e62696771" .
            "756572792e646174617472616e736665722e76312e4c6973745472616e73" .
            "66657252756e73526571756573741a3f2e676f6f676c652e636c6f75642e" .
            "62696771756572792e646174617472616e736665722e76312e4c69737454" .
            "72616e7366657252756e73526573706f6e7365224282d3e493023c123a2f" .
            "76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e" .
            "732f2a2f7472616e73666572436f6e666967732f2a7d2f72756e7312e601" .
            "0a104c6973745472616e736665724c6f6773123e2e676f6f676c652e636c" .
            "6f75642e62696771756572792e646174617472616e736665722e76312e4c" .
            "6973745472616e736665724c6f6773526571756573741a3f2e676f6f676c" .
            "652e636c6f75642e62696771756572792e646174617472616e736665722e" .
            "76312e4c6973745472616e736665724c6f6773526573706f6e7365225182" .
            "d3e493024b12492f76312f7b706172656e743d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f7472616e73666572436f6e666967732f2a2f" .
            "72756e732f2a7d2f7472616e736665724c6f677312dc010a0f436865636b" .
            "56616c69644372656473123d2e676f6f676c652e636c6f75642e62696771" .
            "756572792e646174617472616e736665722e76312e436865636b56616c69" .
            "644372656473526571756573741a3e2e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e436865636b56" .
            "616c69644372656473526573706f6e7365224a82d3e4930244223f2f7631" .
            "2f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f" .
            "64617461536f75726365732f2a7d3a636865636b56616c69644372656473" .
            "3a012a42e3010a29636f6d2e676f6f676c652e636c6f75642e6269677175" .
            "6572792e646174617472616e736665722e76314211446174615472616e73" .
            "66657250726f746f50015a51676f6f676c652e676f6c616e672e6f72672f" .
            "67656e70726f746f2f676f6f676c65617069732f636c6f75642f62696771" .
            "756572792f646174617472616e736665722f76313b646174617472616e73" .
            "666572aa0225476f6f676c652e436c6f75642e42696751756572792e4461" .
            "74615472616e736665722e5631ca0225476f6f676c655c436c6f75645c42" .
            "696751756572795c446174615472616e736665725c5631620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}
