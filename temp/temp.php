                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="card">
                      <?php if($row['customer_id'] != "1"){
                                  echo'<div class="alert alert-info text-left alert-trim">';
                              }else{
                                  echo'<div class="alert alert-warning text-right alert-trim">';
                              }?>
                         <?php echo htmlspecialchars($row['message']); ?>
                      </div>
                    </div>
                <?php endwhile; ?>