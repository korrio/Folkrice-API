<?php 
	header('Content-Type: application/json; charset=utf-8');
	echo '[{"name":"กระบี่","district":["เมืองกระบี่","เกาะลันตา","เขาพนม","คลองท่อม","ปลายพระยา","ลำทับ","เหนือคลอง","อ่าวลึก"]},{"name":"กรุงเทพมหานคร","district":["คลองสาน","คลองเตย","จอมทอง","จตุจักร","ดุสิต","ดอนเมือง","ตลิ่งชัน","ธนบุรี","บางกอกน้อย","บางกอกใหญ่","บางกะปิ","บางขุนเทียน","บางเขน","บางคอแหลม","บางซื่อ","บางพลัด","บางรัก","บึงกุ่ม","ประเวศ","ปทุมวัน","ป้อมปราบศัตรูพ่าย","พญาไท","พระโขนง","พระนคร","ภาษีเจริญ","มีนบุรี","ยานนาวา","ราชเทวี","ราษฎร์บูรณะ","ลาดกระบัง","ลาดพร้าว","สาทร","สัมพันธวงศ์","หนองแขม","หนองจอก","ห้วยขวาง","สวนหลวง","ดินแดง","หลักสี่","สายไหม","คันนายาว","สะพานสูง","วังทองหลาง","คลองสามวา","วัฒนา","บางนา","ทวีวัฒนา","บางแค","ทุ่งครุ","บางบอน"]},{"name":"กาญจนบุรี","district":["เมืองกาญจนบุรี","ด่านมะขามเตี้ย","ทองผาภูมิ","ท่าม่วง","ท่ามะกา","ไทรโยค","บ่อพลอย","พนมทวน","เลาขวัญ","ศรีสวัสดิ์","สังขละบุรี","หนองปรือ","ห้วยกระเจา"]},{"name":"กาฬสินธุ์","district":["เมืองกาฬสินธุ์","กมลาไสย","กุฉินารายณ์","เขาวง","คำม่วง","ท่าคันโท","นามน","ยางตลาด","ร่องคำ","สมเด็จ","สหัสขันธ์","หนองกุงศรี","ห้วยผึ้ง","ห้วยเม็ก","นาคู","สามชัย","ดอนจาน","ฆ้องชัย"]},{"name":"กำแพงเพชร","district":["เมืองกำแพงเพชร","ขาณุวรลักษบุรี","คลองขลุง","คลองลาน","ทรายทองวัฒนา","ไทรงาม","ปางศิลาทอง","พรานกระต่าย","ลานกระบือ","บึงสามัคคี","โกสัมพีนคร"]},{"name":"ขอนแก่น","district":["เมืองขอนแก่น","กระนวน","เขาสวนกวาง","โคกโพธิ์ไชย","ชำสูง","ชนบท","ชุมแพ","น้ำพอง","บ้านไผ่","บ้านฝาง","เปือยน้อย","พล","พระยืน","ภูเวียง","ภูผาม่าน","มัญจาคีรี","แวงน้อย","แวงใหญ่","สีชมพู","หนองสองห้อง","หนองเรือ","หนองนาคำ","อุบลรัตน์","โนนศิลา","บ้านแฮด"]},{"name":"จันทบุรี","district":["เมืองจันทบุรี","แก่งหางแมว","ขลุง","ท่าใหม่","นายายอาม","โป่งน้ำร้อน","มะขาม","สอยดาว","แหลมสิงห์","เขาคิชฌกูฏ"]},{"name":"ฉะเชิงเทรา","district":["เมืองฉะเชิงเทรา","บางคล้า","บางน้ำเปรี้ยว","บางปะกง","บ้านโพธิ์","แปลงยาว","พนมสารคาม","ราชสาส์น","สนามชัยเขต","ท่าตะเกียบ","คลองเขื่อน"]},{"name":"ชลบุรี","district":["เมืองชลบุรี","เกาะสีชัง","บ่อทอง","บางละมุง","บ้านบึง","พานทอง","พนัสนิคม","ศรีราชา","สัตหีบ","หนองใหญ่","เกาะจันทร์"]},{"name":"ชัยนาท","district":["เมืองชัยนาท","มโนรมย์","วัดสิงห์","สรรคบุรี","สรรพยา","หันคา","หนองมะโมง","เนินขาม"]},{"name":"ชัยภูมิ","district":["เมืองชัยภูมิ","เกษตรสมบูรณ์","แก้งคร้อ","คอนสวรรค์","คอนสาร","จัตุรัส","เทพสถิต","เนินสง่า","บ้านเขว้า","บ้านแท่น","บำเหน็จณรงค์","ภูเขียว","ภักดีชุมพล","หนองบัวแดง","หนองบัวระเหว","ซับใหญ่"]},{"name":"ชุมพร","district":["เมืองชุมพร","ท่าแซะ","ทุ่งตะโก","ปะทิว","พะโต๊ะ","ละแม","สวี","หลังสวน"]},{"name":"เชียงราย","district":["เมืองเชียงราย","ขุนตาล","เชียงของ","เชียงแสน","เทิง","ป่าแดด","พาน","แม่จัน","แม่ฟ้าหลวง","แม่สรวย","แม่สาย","เวียงแก่น","เวียงชัย","เวียงป่าเป้า","พญาเม็งราย","แม่ลาว","ดอยหลวง","เวียงเชียงรุ้ง"]},{"name":"เชียงใหม่","district":["เมืองเชียงใหม่","จอมทอง","เชียงดาว","ไชยปราการ","ดอยเต่า","ดอยหล่อ","ดอยสะเก็ด","ฝาง","พร้าว","แม่แจ่ม","แม่แตง","แม่ริม","แม่วาง","แม่อาย","แม่ออน","เวียงแหง","สะเมิง","สันกำแพง","สันทราย","สันป่าตอง","สารภี","หางดง","อมก๋อย","ฮอด"]},{"name":"ตรัง","district":["เมืองตรัง","กันตัง","ปะเหลียน","ย่านตาขาว","รัษฎา","สิเกา","ห้วยยอด","วังวิเศษ","หาดสำราญ","นาโยง"]},{"name":"ตราด","district":["เมืองตราด","เกาะช้าง","เขาสมิง","คลองใหญ่","บ่อไร่","แหลมงอบ","เกาะกูด"]},{"name":"ตาก","district":["เมืองตาก","ท่าสองยาง","บ้านตาก","พบพระ","แม่ระมาด","แม่สอด","สามเงา","อุ้มผาง","วังเจ้า"]},{"name":"นครนายก","district":["เมืองนครนายก","บ้านนา","ปากพลี","องครักษ์"]},{"name":"นครปฐม","district":["เมืองนครปฐม","กำแพงแสน","ดอนตูม","นครชัยศรี","บางเลน","พุทธมณฑล","สามพราน"]},{"name":"นครพนม","district":["เมืองนครพนม","ท่าอุเทน","ธาตุพนม","นาแก","นาหว้า","บ้านแพง","ปลาปาก","โพนสวรรค์","เรณูนคร","ศรีสงคราม","วังยาง","นาทม"]},{"name":"นครราชสีมา","district":["เมืองนครราชสีมา","แก้งสนามนาง","ขามทะเลสอ","ขามสะแกแสง","คง","ครบุรี","จักราช","ชุมพวง","โชคชัย","ด่านขุนทด","โนนแดง","โนนไทย","โนนสูง","บัวใหญ่","บ้านเหลื่อม","ประทาย","ปักธงชัย","ปากช่อง","พิมาย","วังน้ำเขียว","สีคิ้ว","สูงเนิน","เสิงสาง","ห้วยแถลง","หนองบุนนาก","เทพารักษ์","เมืองยาง","พระทองคำ","ลำทะเมนชัย","เฉลิมพระเกียรติ","สีดา","บัวลาย"]},{"name":"นครศรีธรรมราช","district":["เมืองนครศรีธรรมราช","ขนอม","ฉวาง","ชะอวด","เชียรใหญ่","ท่าศาลา","ทุ่งใหญ่","ทุ่งสง","พระพรหม","นาบอน","บางขัน","ปากพนัง","พรหมคีรี","พิปูน","ร่อนพิบูลย์","ลานสะกา","สิชล","หัวไทร","จุฬาภรณ์","นบพิตำ","ช้างกลาง","ถ้ำพรรณรา","เฉลิมพระเกียรติ"]},{"name":"นครสวรรค์","district":["เมืองนครสวรรค์","เก้าเลี้ยว","โกรกพระ","ชุมแสง","ตากฟ้า","ตาคลี","ท่าตะโก","บรรพตพิสัย","พยุหคีรี","ไพศาลี","แม่วงก์","ลาดยาว","หนองบัว","แม่เปิน","ชุมตาบง"]},{"name":"นนทบุรี","district":["เมืองนนทบุรี","ไทรน้อย","บางกรวย","บางบัวทอง","บางใหญ่","ปากเกร็ด"]},{"name":"นราธิวาส","district":["เมืองนราธิวาส","จะแนะ","ตากใบ","บาเจาะ","ยี่งอ","ระแงะ","รือเสาะ","แว้ง","ศรีสาคร","สุคิริน","สุไหงโกลก","สุไหงปาดี","เจาะไอร้อง"]},{"name":"น่าน","district":["เมืองน่าน","เชียงกลาง","ท่าวังผา","ทุ่งช้าง","นาน้อย","นาหมื่น","บ้านหลวง","ปัว","แม่จริม","เวียงสา","สันติสุข","บ่อเกลือ","สองแคว","เฉลิมพระเกียรติ","ภูเพียง"]},{"name":"บุรีรัมย์","district":["เมืองบุรีรัมย์","กระสัง","คูเมือง","ชำนิ","นาโพธิ์","นางรอง","โนนดินแดง","โนนสุวรรณ","บ้านกรวด","พลับพลาชัย","บ้านใหม่ไชยพจน์","ประโคนชัย","ปะคำ","พุทไธสง","ละหานทราย","ลำปลายมาศ","สตึก","หนองกี่","หนองหงส์","ห้วยราช","บ้านด่าน","เฉลิมพระเกียรติ","แคนดง"]},{"name":"ปทุมธานี","district":["เมืองปทุมธานี","คลองหลวง","ธัญบุรี","ลาดหลุมแก้ว","ลำลูกกา","สามโคก","หนองเสือ"]},{"name":"ประจวบคีรีขันธ์","district":["เมืองประจวบคีรีขันธ์","กุยบุรี","ทับสะแก","บางสะพาน","บางสะพานน้อย","ปราณบุรี","หัวหิน","สามร้อยยอด"]},{"name":"ปราจีนบุรี","district":["เมืองปราจีนบุรี","กบินทร์บุรี","ศรีมโหสถ","นาดี","บ้านสร้าง","ประจันตคาม","ศรีมหาโพธิ"]},{"name":"ปัตตานี","district":["เมืองปัตตานี","กะพ้อ","โคกโพธิ์","ทุ่งยางแดง","ปะนาเระ","มายอ","ไม้แก่น","ยะรัง","ยะหริ่ง","สายบุรี","หนองจิก","แม่ลาน"]},{"name":"พระนครศรีอยุธยา","district":["พระนครศรีอยุธยา","ท่าเรือ","นครหลวง","บางซ้าย","บางไทร","บางบาล","บางปะหัน","บางปะอิน","บ้านแพรก","ผักไห่","ภาชี","มหาราช","ลาดบัวหลวง","วังน้อย","เสนา","อุทัย"]},{"name":"พะเยา","district":["เมืองพะเยา","จุน","เชียงคำ","เชียงม่วน","ดอกคำใต้","ปง","แม่ใจ","ภูซาง","ภูกามยาว"]},{"name":"พังงา","district":["เมืองพังงา","กะปง","เกาะยาว","คุระบุรี","ตะกั่วทุ่ง","ตะกั่วป่า","ทับปุด","ท้ายเหมือง"]},{"name":"พัทลุง","district":["เมืองพัทลุง","กงหรา","เขาชัยสน","ควนขนุน","ตะโหมด","ปากพะยูน","ป่าบอน","ป่าพะยอม","ศรีบรรพต","บางแก้ว","ศรีนครินทร์"]},{"name":"พิจิตร","district":["เมืองพิจิตร","ตะพานหิน","ทับคล้อ","บางมูลนาก","โพทะเล","โพธิ์ประทับช้าง","สามง่าม","วังทรายพูน","สากเหล็ก","บึงนาราง","ดงเจริญ","วชิรบารมี"]},{"name":"พิษณุโลก","district":["เมืองพิษณุโลก","นครไทย","ชาติตระการ","เนินมะปราง","บางกระทุ่ม","บางระกำ","พรหมพิราม","วังทอง","วัดโบสถ์"]},{"name":"เพชรบุรี","district":["เมืองเพชรบุรี","แก่งกระจาน","เขาย้อย","ชะอำ","ท่ายาง","บ้านลาด","บ้านแหลม","หนองหญ้าปล้อง"]},{"name":"เพชรบูรณ์","district":["เมืองเพชรบูรณ์","เขาค้อ","ชนแดน","น้ำหนาว","บึงสามพัน","วิเชียรบุรี","ศรีเทพ","หนองไผ่","หล่มเก่า","หล่มสัก","วังโป่ง"]},{"name":"แพร่","district":["เมืองแพร่","เด่นชัย","ร้องกวาง","ลอง","วังชิ้น","สอง","หนองม่วงไข่","สูงเม่น"]},{"name":"ภูเก็ต","district":["เมืองภูเก็ต","กะทู้","ถลาง"]},{"name":"มหาสารคาม","district":["เมืองมหาสารคาม","กันทรวิชัย","แกดำ","โกสุมพิสัย","เชียงยืน","นาเชือก","นาดูน","บรบือ","พยัคฆภูมิพิสัย","วาปีปทุม","กุดรัง","ยางสีสุราช","ชื่นชม"]},{"name":"มุกดาหาร","district":["เมืองมุกดาหาร","คำชะอี","ดงหลวง","ดอนตาล","นิคมคำสร้อย","หนองสูง","หว้านใหญ่"]},{"name":"แม่ฮ่องสอน","district":["เมืองแม่ฮ่องสอน","ขุนยวม","ปางมะผ้า","ปาย","แม่ลาน้อย","แม่สะเรียง","สบเมย"]},{"name":"ยโสธร","district":["เมืองยโสธร","กุดชุม","ค้อวัง","คำเขื่อนแก้ว","ไทยเจริญ","ทรายมูล","ป่าติ้ว","มหาชนะชัย","เลิงนกทา"]},{"name":"ยะลา","district":["เมืองยะลา","กาบัง","กรงปินัง","ธารโต","บันนังสตา","เบตง","ยะหา","รามัน"]},{"name":"ร้อยเอ็ด","district":["เมืองร้อยเอ็ด","เกษตรวิสัย","จตุรพักตร์พิมาน","จังหาร","ธวัชบุรี","ปทุมรัตน์","พนมไพร","โพธิ์ชัย","โพนทราย","โพนทอง","เมยวดี","เมืองสรวง","ศรีสมเด็จ","เสลภูมิ","สุวรรณภูมิ","หนองพอก","อาจสามารถ","เชียงขวัญ","หนองฮี","ทุ่งเขาหลวง"]},{"name":"ระนอง","district":["เมืองระนอง","กระบุรี","กะเปอร์","ละอุ่น","สุขสำราญ"]},{"name":"ระยอง","district":["เมืองระยอง","แกลง","บ้านค่าย","บ้านฉาง","ปลวกแดง","วังจันทร์","เขาชะเมา","นิคมพัฒนา"]},{"name":"ราชบุรี","district":["เมืองราชบุรี","จอมบึง","ดำเนินสะดวก","บางแพ","บ้านโป่ง","ปากท่อ","โพธาราม","วัดเพลง","สวนผึ้ง","บ้านคา"]},{"name":"ลพบุรี","district":["เมืองลพบุรี","โคกเจริญ","โคกสำโรง","ชัยบาดาล","ท่าวุ้ง","ท่าหลวง","บ้านหมี่","พัฒนานิคม","ลำสนธิ","สระโบถส์","หนองม่วง"]},{"name":"เลย","district":["เมืองเลย","เชียงคาน","ด่านซ้าย","ท่าลี่","นาด้วง","นาแห้ว","ปากชม","ผาขาว","ภูกระดึง","ภูเรือ","ภูหลวง","วังสะพุง","เอราวัณ","หนองหิน"]}]';
?>