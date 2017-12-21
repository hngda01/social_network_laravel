<div style="background-color: #e9ebee;"  class="col-sm-12">
					<br>
						@foreach($diaries->reverse() as $diary) 
						@if($diary->checkPrivacy(Auth::user()->id,$diary)==1)
						<div class=" well" style="margin-left: 20px; margin-right: 20px">
							<div align="left">
								<table>
									<tr>
										<td style="padding-right: 20px">
											<img src="images/{{$diary->userAvatar($diary->id_user)}}.png" class="img-circle" height="55" width="55" alt="Avatar">
										</td>
										<td >
											<a class="page-newsfeed-06" href="profile/{{$diary->id_user}}">

												{{$diary->userName($diary->id_user)}}
											</a>      
											<br> {{$diary->updated_at->diffForHumans()}} &nbsp;&nbsp;&nbsp;
											@if($diary->id_privacy == 0)
											<i class="fa fa-lock" aria-hidden="true"></i>
											@elseif($diary->id_privacy == 1)
											<i class="fa fa-users" aria-hidden="true"></i>
											@elseif($diary->id_privacy == 2)
											<i class="fa fa-cog" aria-hidden="true"></i>
											@else
											<i class="fa fa-globe " ></i>
											@endif
											&nbsp;&nbsp;&nbsp;
											<i class="fa fa-tag" aria-hidden="true"></i>
											Topic: <a class="tag badge badge-default overflow-hidden" data-v-2d5c6a76>{{$diary->category->name}}</a>

										</td>
									</tr>
								</table>
							</div>
							<table>
								<tr valign="top">
									<td style="padding-top: 10px">
										<img src="images/{{$diary->image}}.png" alt="Paris" width="150" height="100">
									</td>
									<td align="left" style="padding-left: 10px">
										<a href="viewPost/{{$diary->id}}" title=""><h4 class="page-newsfeed-06"> {{$diary->title}}</h4>
										</a> 
										<p>
											@php
											$maxLen=200;
											if(strlen($diary->content)< $maxLen)
												echo $diary->content;
											else {
												$content=substr($diary->content, 0,$maxLen);
												echo $content." ....";
											}
											@endphp
										</p> 
									</td>            
								</tr>         
							</table>
							<hr style="background-color: #000;height: 1px;"> 
							<div class="page-newsfeed-06">
								<table>
									<tr>
										<td width="50%">
											<i class="fa fa-comments-o" aria-hidden="true"></i> 
											{{count($diary->comment)}}
										</td>
									</tr>
								</table>
							</div>
						</div>
						@endif        
						@endforeach
					</div>