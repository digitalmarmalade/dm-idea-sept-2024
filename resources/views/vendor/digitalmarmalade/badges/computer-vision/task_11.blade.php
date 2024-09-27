<section class="task-11 flex full--screen hide" id="task-11-activity">
  <div class="holder flex flex--column flex-align--center flex-grow--1">
    <div class="flex drag-item__holder flex-grow--1">
      <div class="drop-item__holder">
        <div class="drop-item" id="ErrorMargin">
          <table>
            <thead>
              <tr>
                <th></th>
                <th class="border--left">ACTUAL OUTPUT</th>
                <th>ERROR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="arrows">
                  <span class="negative">&#8595;</span>
                </td>
                <td class="border--left actual-output">0</td>
                <td id="car" class="counter border--right negative">-0.5</td>
              </tr>
              <tr>
                <td class="arrows">
                  <span class="positive">&#8593;</span>
                </td>
                <td class="border--left actual-output">1</td>
                <td id="person" class="counter border--right positive">+0.7</td>
              </tr>
              <tr>
                <td class="arrows">
                  <span class="negative">&#8595;</span>
                </td>
                <td class="border--left actual-output">0</td>
                <td id="helmet" class="counter border--right negative">-0.2</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="place drop-area flex-grow--1 bg--computer bg--computer-processed-image" id="firstPrediction"></div>
  </div>
</section>
