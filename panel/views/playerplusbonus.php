<th><b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b></th>

								<td>

									<?php

										$datetime = $user['plus'];

										$now = time();

										if($datetime ==0)

										{

											echo '<img src="../img/Admin/del.gif">';

											echo "<font color=\"red\">Not enabled</font>";

										}

										else

										{

											if($datetime <= $now)

											{

												echo '<img src="../img/Admin/del.gif">';

												echo "<font color=\"red\">Not enabled</font>";

											}

											else

											{

												$tsdiffact = $datetime - $now;

												$timetoecho = $timeformat->getTimeFormat($tsdiffact);

												echo '<img src="../img/new/tick.png" title="Ends: '.date('d.m.Y H:i',$user['plus']+3600*2).'">';

												echo "<font color=\"blue\"> $timetoecho</font>";

											}

										}

									?>

								 <a href="index.php?p=editPlus&uid=<?php echo $user['id']; ?>"><img src="../img/Admin/edit.gif" title="Edit Plus and Bonus"></a></td>

							</tr>

							<tr>

								<th><img src="../img/Admin/r/1.gif">in</th>

								<td>

									<?php

										$datetime = $user['b1'];

										$now = time();

										if($datetime ==0)

										{

											echo '<img src="../img/Admin/del.gif">';

											echo "<font color=\"red\">Not enabled</font>";

										}

										else

										{

											if($datetime <= $now)

											{

												echo '<img src="../img/Admin/del.gif">';

												echo "<font color=\"red\">Not enabled</font>";

											}

											else

											{

												$tsdiffact = $datetime - $now;

												$timetoecho = $timeformat->getTimeFormat($tsdiffact);

												echo '<img src="../img/new/tick.png" title="Ends: '.date('d.m.Y H:i',$user['b1']+3600*2).'">';

												echo "<font color=\"blue\"> $timetoecho</font>";

											}

										}

									?>

								 <a href="index.php?p=editPlus&uid=<?php echo $user['id']; ?>"><img src="../img/Admin/edit.gif" title="Edit Plus and Bonus"></a></td>

							</tr>

							<tr>

								<th><img src="../img/Admin/r/2.gif"> in</th>

								<td>

									<?php

										$datetime = $user['b2'];

										$now = time();

										if($datetime ==0)

										{

											echo '<img src="../img/Admin/del.gif">';

											echo "<font color=\"red\">Not enabled</font>";

										}

										else

										{

											if($datetime <= $now)

											{

												echo '<img src="../img/Admin/del.gif">';

												echo "<font color=\"red\">Not enabled</font>";

											}

											else

											{

												$tsdiffact = $datetime - $now;

												$timetoecho = $timeformat->getTimeFormat($tsdiffact);

												echo '<img src="../img/new/tick.png" title="Ends: '.date('d.m.Y H:i',$user['b2']+3600*2).'">';

												echo "<font color=\"blue\"> $timetoecho</font>";

											}

										}


									?>

								 <a href="index.php?p=editPlus&uid=<?php echo $user['id']; ?>"><img src="../img/Admin/edit.gif" title="Edit Plus and Bonus"></a></td>

							</tr>

							<tr>

								<th><img src="../img/Admin/r/3.gif"> in</th>

								<td>

									<?php

										$datetime = $user['b3'];

										$now = time();

										if($datetime ==0)

										{

											echo '<img src="../img/Admin/del.gif">';

											echo "<font color=\"red\">Not enabled</font>";

										}

										else

										{

											if($datetime <= $now)

											{

												echo '<img src="../img/Admin/del.gif">';

												echo "<font color=\"red\">Not enabled</font>";

											}

											else

											{

												$tsdiffact = $datetime - $now;

												$timetoecho = $timeformat->getTimeFormat($tsdiffact);

												echo '<img src="../img/new/tick.png" title="Ends: '.date('d.m.Y H:i',$user['b3']+3600*2).'">';

												echo "<font color=\"blue\"> $timetoecho</font>";

											}

										}


									?>

								 <a href="index.php?p=editPlus&uid=<?php echo $user['id']; ?>"><img src="../img/Admin/edit.gif" title="Edit Plus and Bonus"></a></td>

							</tr>

							<tr>

								<th><img src="../img/Admin/r/4.gif"> in</th>

								<td>

									<?php

										$datetime = $user['b4'];

										$now = time();

										if($datetime ==0)

										{

											echo '<img src="../img/Admin/del.gif">';

											echo "<font color=\"red\">Not enabled</font>";

										}

										else

										{

											if($datetime <= $now)

											{

												echo '<img src="../img/Admin/del.gif">';

												echo "<font color=\"red\">Not enabled</font>";

											}

											else

											{

												$tsdiffact = $datetime - $now;

												$timetoecho = $timeformat->getTimeFormat($tsdiffact);

												echo '<img src="../img/new/tick.png" title="Ends: '.date('d.m.Y H:i',$user['b4']+3600*2).'">';

												echo "<font color=\"blue\"> $timetoecho</font>";

											}

										}



									?>

								 <a href="index.php?p=editPlus&uid=<?php echo $user['id']; ?>"><img src="../img/Admin/edit.gif" title="Edit Plus and Bonus"></a></td>

							</tr>