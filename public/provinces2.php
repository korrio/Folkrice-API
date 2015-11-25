<?php 
	header("Content-Type: application/json; charset=utf-8");
	echo '[{"name":"กระบี่","district":["เมืองกระบี่","เกาะลันตา","เขาพนม","คลองท่อม","ปลายพระยา","ลำทับ","เหนือคลอง","อ่าวลึก"]},{"name":"กรุงเทพมหานคร","district":["คลองสาน","คลองเตย","จอมทอง","จตุจักร","ดุสิต","ดอนเมือง","ตลิ่งชัน","ธนบุรี","บางกอกน้อย","บางกอกใหญ่","บางกะปิ","บางขุนเทียน","บางเขน","บางคอแหลม","บางซื่อ","บางพลัด","บางรัก","บึงกุ่ม","ประเวศ","ปทุมวัน","ป้อมปราบศัตรูพ่าย","พญาไท","พระโขนง","พระนคร","ภาษีเจริญ","มีนบุรี","ยานนาวา","ราชเทวี","ราษฎร์บูรณะ","ลาดกระบัง","ลาดพร้าว","สาทร","สัมพันธวงศ์","หนองแขม","หนองจอก","ห้วยขวาง","สวนหลวง","ดินแดง","หลักสี่","สายไหม","คันนายาว","สะพานสูง","วังทองหลาง","คลองสามวา","วัฒนา","บางนา","ทวีวัฒนา","บางแค","ทุ่งครุ","บางบอน"]},{"name":"กาญจนบุรี","district":["เมืองกาญจนบุรี","ด่านมะขามเตี้ย","ทองผาภูมิ","ท่าม่วง","ท่ามะกา","ไทรโยค","บ่อพลอย","พนมทวน","เลาขวัญ","ศรีสวัสดิ์","สังขละบุรี","หนองปรือ","ห้วยกระเจา"]},{"name":"กาฬสินธุ์","district":["เมืองกาฬสินธุ์","กมลาไสย","กุฉินารายณ์","เขาวง","คำม่วง","ท่าคันโท","นามน","ยางตลาด","ร่องคำ","สมเด็จ","สหัสขันธ์","หนองกุงศรี","ห้วยผึ้ง","ห้วยเม็ก","นาคู","สามชัย","ดอนจาน","ฆ้องชัย"]},{"name":"กำแพงเพชร","district":["เมืองกำแพงเพชร","ขาณุวรลักษบุรี","คลองขลุง","คลองลาน","ทรายทองวัฒนา","ไทรงาม","ปางศิลาทอง","พรานกระต่าย","ลานกระบือ","บึงสามัคคี","โกสัมพีนคร"]},{"name":"ขอนแก่น","district":["เมืองขอนแก่น","กระนวน","เขาสวนกวาง","โคกโพธิ์ไชย","ชำสูง","ชนบท","ชุมแพ","น้ำพอง","บ้านไผ่","บ้านฝาง","เปือยน้อย","พล","พระยืน","ภูเวียง","ภูผาม่าน","มัญจาคีรี","แวงน้อย","แวงใหญ่","สีชมพู","หนองสองห้อง","หนองเรือ","หนองนาคำ","อุบลรัตน์","โนนศิลา","บ้านแฮด"]},{"name":"จันทบุรี","district":["เมืองจันทบุรี","แก่งหางแมว","ขลุง","ท่าใหม่","นายายอาม","โป่งน้ำร้อน","มะขาม","สอยดาว","แหลมสิงห์","เขาคิชฌกูฏ"]},{"name":"ฉะเชิงเทรา","district":["เมืองฉะเชิงเทรา","บางคล้า","บางน้ำเปรี้ยว","บางปะกง","บ้านโพธิ์","แปลงยาว","พนมสารคาม","ราชสาส์น","สนามชัยเขต","ท่าตะเกียบ","คลองเขื่อน"]},{"name":"ชลบุรี","district":["เมืองชลบุรี","เกาะสีชัง","บ่อทอง","บางละมุง","บ้านบึง","พานทอง","พนัสนิคม","ศรีราชา","สัตหีบ","หนองใหญ่","เกาะจันทร์"]},{"name":"ชัยนาท","district":["เมืองชัยนาท","มโนรมย์","วัดสิงห์","สรรคบุรี","สรรพยา","หันคา","หนองมะโมง","เนินขาม"]},{"name":"ชัยภูมิ","district":["เมืองชัยภูมิ","เกษตรสมบูรณ์","แก้งคร้อ","คอนสวรรค์","คอนสาร","จัตุรัส","เทพสถิต","เนินสง่า","บ้านเขว้า","บ้านแท่น","บำเหน็จณรงค์","ภูเขียว","ภักดีชุมพล","หนองบัวแดง","หนองบัวระเหว","ซับใหญ่"]},{"name":"ชุมพร","district":["เมืองชุมพร","ท่าแซะ","ทุ่งตะโก","ปะทิว","พะโต๊ะ","ละแม","สวี","หลังสวน"]},{"name":"เชียงราย","district":["เมืองเชียงราย","ขุนตาล","เชียงของ","เชียงแสน","เทิง","ป่าแดด","พาน","แม่จัน","แม่ฟ้าหลวง","แม่สรวย","แม่สาย","เวียงแก่น","เวียงชัย","เวียงป่าเป้า","พญาเม็งราย","แม่ลาว","ดอยหลวง","เวียงเชียงรุ้ง"]},{"name":"เชียงใหม่","district":["เมืองเชียงใหม่","จอมทอง","เชียงดาว","ไชยปราการ","ดอยเต่า","ดอยหล่อ","ดอยสะเก็ด","ฝาง","พร้าว","แม่แจ่ม","แม่แตง","แม่ริม","แม่วาง","แม่อาย","แม่ออน","เวียงแหง","สะเมิง","สันกำแพง","สันทราย","สันป่าตอง","สารภี","หางดง","อมก๋อย","ฮอด"]},{"name":"ตรัง","district":["เมืองตรัง","กันตัง","ปะเหลียน","ย่านตาขาว","รัษฎา","สิเกา","ห้วยยอด","วังวิเศษ","หาดสำราญ","นาโยง"]},{"name":"ตราด","district":["เมืองตราด","เกาะช้าง","เขาสมิง","คลองใหญ่","บ่อไร่","แหลมงอบ","เกาะกูด"]},{"name":"ตาก","district":["เมืองตาก","ท่าสองยาง","บ้านตาก","พบพระ","แม่ระมาด","แม่สอด","สามเงา","อุ้มผาง","วังเจ้า"]},{"name":"นครนายก","district":["เมืองนครนายก","บ้านนา","ปากพลี","องครักษ์"]},{"name":"นครปฐม","district":["เมืองนครปฐม","กำแพงแสน","ดอนตูม","นครชัยศรี","บางเลน","พุทธมณฑล","สามพราน"]},{"name":"นครพนม","district":["เมืองนครพนม","ท่าอุเทน","ธาตุพนม","นาแก","นาหว้า","บ้านแพง","ปลาปาก","โพนสวรรค์","เรณูนคร","ศรีสงคราม","วังยาง","นาทม"]},{"name":"นครราชสีมา","district":["เมืองนครราชสีมา","แก้งสนามนาง","ขามทะเลสอ","ขามสะแกแสง","คง","ครบุรี","จักราช","ชุมพวง","โชคชัย","ด่านขุนทด","โนนแดง","โนนไทย","โนนสูง","บัวใหญ่","บ้านเหลื่อม","ประทาย","ปักธงชัย","ปากช่อง","พิมาย","วังน้ำเขียว","สีคิ้ว","สูงเนิน","เสิงสาง","ห้วยแถลง","หนองบุนนาก","เทพารักษ์","เมืองยาง","พระทองคำ","ลำทะเมนชัย","เฉลิมพระเกียรติ","สีดา","บัวลาย"]},{"name":"นครศรีธรรมราช","district":["เมืองนครศรีธรรมราช","ขนอม","ฉวาง","ชะอวด","เชียรใหญ่","ท่าศาลา","ทุ่งใหญ่","ทุ่งสง","พระพรหม","นาบอน","บางขัน","ปากพนัง","พรหมคีรี","พิปูน","ร่อนพิบูลย์","ลานสะกา","สิชล","หัวไทร","จุฬาภรณ์","นบพิตำ","ช้างกลาง","ถ้ำพรรณรา","เฉลิมพระเกียรติ"]},{"name":"นครสวรรค์","district":["เมืองนครสวรรค์","เก้าเลี้ยว","โกรกพระ","ชุมแสง","ตากฟ้า","ตาคลี","ท่าตะโก","บรรพตพิสัย","พยุหคีรี","ไพศาลี","แม่วงก์","ลาดยาว","หนองบัว","แม่เปิน","ชุมตาบง"]},{"name":"นนทบุรี","district":["เมืองนนทบุรี","ไทรน้อย","บางกรวย","บางบัวทอง","บางใหญ่","ปากเกร็ด"]},{"name":"นราธิวาส","district":["เมืองนราธิวาส","จะแนะ","ตากใบ","บาเจาะ","ยี่งอ","ระแงะ","รือเสาะ","แว้ง","ศรีสาคร","สุคิริน","สุไหงโกลก","สุไหงปาดี","เจาะไอร้อง"]},{"name":"น่าน","district":["เมืองน่าน","เชียงกลาง","ท่าวังผา","ทุ่งช้าง","นาน้อย","นาหมื่น","บ้านหลวง","ปัว","แม่จริม","เวียงสา","สันติสุข","บ่อเกลือ","สองแคว","เฉลิมพระเกียรติ","ภูเพียง"]},{"name":"บุรีรัมย์","district":["เมืองบุรีรัมย์","กระสัง","คูเมือง","ชำนิ","นาโพธิ์","นางรอง","โนนดินแดง","โนนสุวรรณ","บ้านกรวด","พลับพลาชัย","บ้านใหม่ไชยพจน์","ประโคนชัย","ปะคำ","พุทไธสง","ละหานทราย","ลำปลายมาศ","สตึก","หนองกี่","หนองหงส์","ห้วยราช","บ้านด่าน","เฉลิมพระเกียรติ","แคนดง"]},{"name":"ปทุมธานี","district":["เมืองปทุมธานี","คลองหลวง","ธัญบุรี","ลาดหลุมแก้ว","ลำลูกกา","สามโคก","หนองเสือ"]},{"name":"ประจวบคีรีขันธ์","district":["เมืองประจวบคีรีขันธ์","กุยบุรี","ทับสะแก","บางสะพาน","บางสะพานน้อย","ปราณบุรี","หัวหิน","สามร้อยยอด"]},{"name":"ปราจีนบุรี","district":["เมืองปราจีนบุรี","กบินทร์บุรี","ศรีมโหสถ","นาดี","บ้านสร้าง","ประจันตคาม","ศรีมหาโพธิ"]},{"name":"ปัตตานี","district":["เมืองปัตตานี","กะพ้อ","โคกโพธิ์","ทุ่งยางแดง","ปะนาเระ","มายอ","ไม้แก่น","ยะรัง","ยะหริ่ง","สายบุรี","หนองจิก","แม่ลาน"]},{"name":"พระนครศรีอยุธยา","district":["พระนครศรีอยุธยา","ท่าเรือ","นครหลวง","บางซ้าย","บางไทร","บางบาล","บางปะหัน","บางปะอิน","บ้านแพรก","ผักไห่","ภาชี","มหาราช","ลาดบัวหลวง","วังน้อย","เสนา","อุทัย"]},{"name":"พะเยา","district":["เมืองพะเยา","จุน","เชียงคำ","เชียงม่วน","ดอกคำใต้","ปง","แม่ใจ","ภูซาง","ภูกามยาว"]},{"name":"พังงา","district":["เมืองพังงา","กะปง","เกาะยาว","คุระบุรี","ตะกั่วทุ่ง","ตะกั่วป่า","ทับปุด","ท้ายเหมือง"]},{"name":"พัทลุง","district":["เมืองพัทลุง","กงหรา","เขาชัยสน","ควนขนุน","ตะโหมด","ปากพะยูน","ป่าบอน","ป่าพะยอม","ศรีบรรพต","บางแก้ว","ศรีนครินทร์"]},{"name":"พิจิตร","district":["เมืองพิจิตร","ตะพานหิน","ทับคล้อ","บางมูลนาก","โพทะเล","โพธิ์ประทับช้าง","สามง่าม","วังทรายพูน","สากเหล็ก","บึงนาราง","ดงเจริญ","วชิรบารมี"]},{"name":"พิษณุโลก","district":["เมืองพิษณุโลก","นครไทย","ชาติตระการ","เนินมะปราง","บางกระทุ่ม","บางระกำ","พรหมพิราม","วังทอง","วัดโบสถ์"]},{"name":"เพชรบุรี","district":["เมืองเพชรบุรี","แก่งกระจาน","เขาย้อย","ชะอำ","ท่ายาง","บ้านลาด","บ้านแหลม","หนองหญ้าปล้อง"]},{"name":"เพชรบูรณ์","district":["เมืองเพชรบูรณ์","เขาค้อ","ชนแดน","น้ำหนาว","บึงสามพัน","วิเชียรบุรี","ศรีเทพ","หนองไผ่","หล่มเก่า","หล่มสัก","วังโป่ง"]},{"name":"แพร่","district":["เมืองแพร่","เด่นชัย","ร้องกวาง","ลอง","วังชิ้น","สอง","หนองม่วงไข่","สูงเม่น"]},{"name":"ภูเก็ต","district":["เมืองภูเก็ต","กะทู้","ถลาง"]},{"name":"มหาสารคาม","district":["เมืองมหาสารคาม","กันทรวิชัย","แกดำ","โกสุมพิสัย","เชียงยืน","นาเชือก","นาดูน","บรบือ","พยัคฆภูมิพิสัย","วาปีปทุม","กุดรัง","ยางสีสุราช","ชื่นชม"]},{"name":"มุกดาหาร","district":["เมืองมุกดาหาร","คำชะอี","ดงหลวง","ดอนตาล","นิคมคำสร้อย","หนองสูง","หว้านใหญ่"]},{"name":"แม่ฮ่องสอน","district":["เมืองแม่ฮ่องสอน","ขุนยวม","ปางมะผ้า","ปาย","แม่ลาน้อย","แม่สะเรียง","สบเมย"]},{"name":"ยโสธร","district":["เมืองยโสธร","กุดชุม","ค้อวัง","คำเขื่อนแก้ว","ไทยเจริญ","ทรายมูล","ป่าติ้ว","มหาชนะชัย","เลิงนกทา"]},{"name":"ยะลา","district":["เมืองยะลา","กาบัง","กรงปินัง","ธารโต","บันนังสตา","เบตง","ยะหา","รามัน"]},{"name":"ร้อยเอ็ด","district":["เมืองร้อยเอ็ด","เกษตรวิสัย","จตุรพักตร์พิมาน","จังหาร","ธวัชบุรี","ปทุมรัตน์","พนมไพร","โพธิ์ชัย","โพนทราย","โพนทอง","เมยวดี","เมืองสรวง","ศรีสมเด็จ","เสลภูมิ","สุวรรณภูมิ","หนองพอก","อาจสามารถ","เชียงขวัญ","หนองฮี","ทุ่งเขาหลวง"]},{"name":"ระนอง","district":["เมืองระนอง","กระบุรี","กะเปอร์","ละอุ่น","สุขสำราญ"]},{"name":"ระยอง","district":["เมืองระยอง","แกลง","บ้านค่าย","บ้านฉาง","ปลวกแดง","วังจันทร์","เขาชะเมา","นิคมพัฒนา"]},{"name":"ราชบุรี","district":["เมืองราชบุรี","จอมบึง","ดำเนินสะดวก","บางแพ","บ้านโป่ง","ปากท่อ","โพธาราม","วัดเพลง","สวนผึ้ง","บ้านคา"]},{"name":"ลพบุรี","district":["เมืองลพบุรี","โคกเจริญ","โคกสำโรง","ชัยบาดาล","ท่าวุ้ง","ท่าหลวง","บ้านหมี่","พัฒนานิคม","ลำสนธิ","สระโบถส์","หนองม่วง"]},{"name":"เลย","district":["เมืองเลย","เชียงคาน","ด่านซ้าย","ท่าลี่","นาด้วง","นาแห้ว","ปากชม","ผาขาว","ภูกระดึง","ภูเรือ","ภูหลวง","วังสะพุง","เอราวัณ","หนองหิน"]},{"name":"ลำปาง","district":["เมืองลำปาง","เกาะคา","งาว","แจ้ห่ม","เถิน","แม่ทะ","แม่พริก","เมืองปาน","แม่เมาะ","วังเหนือ","สบปราบ","เสริมงาม","ห้างฉัตร"]},{"name":"ลำพูน","district":["เมืองลำพูน","ทุ่งหัวช้าง","บ้านโฮ่ง","ป่าซาง","แม่ทา","ลี้","บ้านธิ","เวียงหนองล่อง"]},{"name":"ศีรสะเกษ","district":["เมืองศีรสะเกษ","กันทรลักษ์","กันทรารมย์","ขุขันธ์","ขุนหาญ","น้ำเกลี้ยง","โนนคูณ","บึงบูรพ์","เบญจลักษณ์","ปรางค์กู่","พยุห์","ไพรบึง","โพธิ์ศรีสุวรรณ","ภูสิงห์","เมืองจันทร์","ยางชุมน้อย","ราษีไศล","วังหิน","ศรีรัตนะ","ห้วยทับทัน","อุทุมพรพิสัย","ศิลาลาด"]},{"name":"สกลนคร","district":["เมืองสกลนคร","กุดบาก","กุสุมาลย์","คำตากล้า","เจริญศิลป์","เต่างอย","นิคมน้ำอูน","บ้านม่วง","พรรณานิคม","พังโคน","วานรนิวาส","วาริชภูมิ","โคกศรีสุพรรณ","สว่างแดนดิน","ส่องดาว","อากาศอำนวย","ภูพาน","โพนนาแก้ว"]},{"name":"สงขลา","district":["เมืองสงขลา","กระแสสินธุ์","ควนเนียง","จะนะ","เทพา","นาทวี","นาหม่อม","บางกล่ำ","ระโนด","รัตภูมิ","สทิงพระ","สะเดา","สะบ้าย้อย","สิงหนคร","หาดใหญ่","คลองหอยโข่ง"]},{"name":"สตูล","district":["เมืองสตูล","ควนกาหลง","ควนโดน","ท่าแพ","ทุ่งหว้า","ละงู","มะนัง"]},{"name":"สมุทรปราการ","district":["เมืองสมุทรปราการ","บางบ่อ","บางพลี","พระประแดง","พระสมุทรเจดีย์","บางเสาธง"]},{"name":"สมุทรสงคราม","district":["เมืองสมุทรสงคราม","บางคณที","อัมพวา"]},{"name":"สมุทรสาคร","district":["เมืองสมุทรสาคร","กระทุ่มแบน","บ้านแพ้ว"]},{"name":"สระแก้ว","district":["เมืองสระแก้ว","เขาฉกรรจ์","คลองหาด","ตาพระยา","วังน้ำเย็น","วัฒนานคร","อรัญประเทศ","โคกสูง","วังสมบูรณ์"]},{"name":"สระบุรี","district":["เมืองสระบุรี","แก่งคอย","ดอนพุด","บ้านหมอ","พระพุทธบาท","มวกเหล็ก","วิหารแดง","เสาไห้","หนองแค","หนองแซง","หนองโดน","วังม่วง","เฉลิมพระเกียรติ"]},{"name":"สิงห์บุรี","district":["เมืองสิงห์บุรี","ค่ายบางระจัน","ท่าช้าง","บางระจัน","พรหมบุรี","อินทร์บุรี"]},{"name":"สุโขทัย","district":["เมืองสุโขทัย","กงไกรลาศ","คีรีมาศ","ทุ่งเสลี่ยม","บ้านด่านลานหอย","ศรีนคร","ศรีสัชนาลัย","ศรีสำโรง","สวรรคโลก"]},{"name":"สุพรรณบุรี","district":["เมืองสุพรรณบุรี","ดอนเจดีย์","ด่านช้าง","เดิมบางนางบวช","บางปลาม้า","ศรีประจันต์","สองพี่น้อง","สามชุก","อู่ทอง","หนองหญ้าไซ"]},{"name":"สุราษฎร์ธานี","district":["เมืองสุราษฎร์ธานี","กาญจนดิษฐ์","เกาะพะงัน","เกาะสมุย","คีรีรัฐนิคม","เคียนซา","ชัยบุรี","ไชยา","ดอนสัก","ท่าฉาง","ท่าชนะ","บ้านตาขุน","บ้านนาเดิม","บ้านนาสาร","พนม","พระแสง","พุนพิน","วิภาวดี","เวียงสระ"]},{"name":"สุรินทร์","district":["เมืองสุรินทร์","กาบเชิง","จอมพระ","ชุมพลบุรี","ท่าตูม","บัวเชด","ปราสาท","รัตนบุรี","ลำดวน","ศีขรภูมิ","สนม","สังขะ","สำโรงทาบ","ศรีณรงค์","พนมดงรัก","เขวาสินรินทร์","โนนนารายณ์"]},{"name":"หนองคาย","district":["เมืองหนองคาย","เซกา","โซ่พิสัย","ท่าบ่อ","บึงกาฬ","บึงโขลงหลง","ปากคาด","พรเจริญ","โพนพิสัย","ศรีเชียงใหม่","ศรีวิไล","สังคม","สระใคร่","บุ่งคล้า","รัตนวาปี","เฝ้าไร่","โพธิ์ตาก"]},{"name":"หนองบัวลำภู","district":["เมืองหนองบัวลำภู","นากลาง","โนนสัง","ศรีบุญเรือง","สุวรรณคูหา","นาวัง"]},{"name":"อ่างทอง","district":["เมืองอ่างทอง","ไชโย","ป่าโมก","โพธิ์ทอง","วิเศษชัยชาญ","สามโก้","แสวงหา"]},{"name":"อำนาจเจริญ","district":["เมืองอำนาจเจริญ","ชานุมาน","ปทุมราชวงศา","พนา","เสนางคนิคม","หัวตะพาน","ลืออำนาจ"]},{"name":"อุดรธานี","district":["เมืองอุดรธานี","กู่แก้ว","กุดจับ","กุมภวาปี","ไชยวาน","ทุ่งฝน","นายูง","น้ำโสม","โนนสะอาด","บ้านดุง","บ้านผือ","พิบูลย์รักษ์","เพ็ญ","วังสามหมอ","ศรีธาตุ","สร้างคอม","หนองวัวซอ","หนองหาน","หนองแสง","ประจักษ์ศิลปาคาม"]},{"name":"อุตรดิตถ์","district":["เมืองอุตรดิตถ์","ตรอน","ทองแสนขัน","ท่าปลา","น้ำปาด","บ้านโคก","พิชัย","ฟากท่า","ลับแล"]},{"name":"อุทัยธานี","district":["เมืองอุทัยธานี","ทัพทัน","บ้านไร่","ลานสัก","สว่างอารมณ์","หนองขาหย่าง","หนองฉาง","ห้วยคต"]},{"name":"อุบลราชธานี","district":["เมืองอุบลราชธานี","กุดข้าวปุ้น","เขมราฐ","เขื่องใน","โขงเจียม","เดชอุดม","ตระการพืชผล","ตาลสุม","ทุ่งศรีอุดม","นาจะหลวย","น้ำยืน","บุณฑริก","พิบูลมังสาหาร","โพธิ์ไทร","ม่วงสามสิบ","เหล่าเสือโก้ก","วารินชำราบ","ศรีเมืองใหม่","สำโรง","สิรินธร","นาเยีย","นาตาล","สว่างวีระวงศ์","น้ำขุ่น","ดอนมดแดง"]}]';
?>